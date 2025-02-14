<?php

namespace App\Controller;


use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Commande;
use App\Entity\CommandeDetails;
use App\Entity\Products;
use App\Entity\Users;
use App\Repository\ProductsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/cart', name: 'cart_')]

class CartController extends AbstractController
{

    #[Route('/', name: 'index')]
    public function index(SessionInterface $session, ProductsRepository $productsRepository)
    {
          $panier = $session->get('panier', []);
          
          // on initialise des variables
          $data = [];
          $total = 0;

          foreach($panier as $id => $quantite){
            $product = $productsRepository->find($id);

            $data[] = [
                'product' => $product,
                'quantite' => $quantite
            ];
            $total += $product->getPrix() * $quantite;
          }

          return $this->render('cart/index.html.twig', compact('data', 'total'));
    }




    #[Route('/add/{id}', name: 'add')]
    public function add(Products $product, SessionInterface $session)
    {

        //on récupère l'id du produit 
        $id = $product->getId();

        //on récupère le panier existant
        $panier = $session->get('panier', []);

        //on ajoute le produit dans le panier s-il n'y est pas encore si non on incrémente sa quantité
        if(empty($panier[$id])){
            $panier[$id] = 1;
        }else {
            $panier[$id]++;
        }

        $session->set('panier', $panier);

        // on redrige vers la page du panier 
        return $this->redirectToRoute('cart_index');

    }


    #[Route('/remove/{id}', name: 'remove')]
    public function remove(Products $product, SessionInterface $session)
    {

        //on récupère l'id du produit 
        $id = $product->getId();

        //on récupère le panier existant
        $panier = $session->get('panier', []);

        //on retire le produit du panier s'il n'y a qu'1 si non on incrémente sa quantité
        if(!empty($panier[$id])){
            if($panier[$id] > 1){
            $panier[$id]--;
        }else {
            unset($panier[$id]);
        }
    }

        $session->set('panier', $panier);

        // on redrige vers la page du panier 
        return $this->redirectToRoute('cart_index');

    }




    #[Route('/delete/{id}', name: 'delete')]
    public function delete(Products $product, SessionInterface $session)
    {

        //on récupère l'id du produit 
        $id = $product->getId();

        //on récupère le panier existant
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])){  
            unset($panier[$id]);
    }

        $session->set('panier', $panier);

        // on redrige vers la page du panier 
        return $this->redirectToRoute('cart_index');

    }


    #[Route('/empty', name: 'empty')]
    public function empty( SessionInterface $session)
    { 
          $session->remove('panier');

          return $this->redirectToRoute('cart_index');


    }

    #[Route('/checkout', name: 'checkout')]
    public function checkout(Security $security): Response
    {
        $user = $security->getUser();
    
        // ✅ Ensure user is authenticated
        if (!$user instanceof Users) {
            $this->addFlash('error', 'Vous devez être connecté pour valider votre panier.');
            return $this->redirectToRoute('app_login');
        }
        
        return $this->render('cart/checkout.html.twig', [
            'user' => $user,
            'stripePublicKey' => $_ENV['STRIPE_PUBLIC_KEY']
        ]);
    }
    
    #[Route('/create-checkout-session', name: 'stripe_checkout')]
    public function createCheckoutSession(
        SessionInterface $session, 
        ProductsRepository $productsRepository, 
        EntityManagerInterface $entityManager, 
        Security $security
    ): JsonResponse {
        $user = $security->getUser();
        if (!$user instanceof Users) {
            return new JsonResponse(['error' => 'Vous devez être connecté.'], 401);
        }
    
        $panier = $session->get('panier', []);
        if (empty($panier)) {
            return new JsonResponse(['error' => 'Votre panier est vide.'], 400);
        }
    
        Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);
        $lineItems = [];
    
        foreach ($panier as $id => $quantite) {
            $product = $productsRepository->find($id);
            if ($product) {
                $lineItems[] = [
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => ['name' => $product->getNom()],
                        'unit_amount' => $product->getPrix(), // ✅ Convert to cents
                    ],
                    'quantity' => $quantite,
                ];
            }
        }
    
        $checkoutSession = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => $this->generateUrl('cart_order', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('cart_checkout', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
    
        return new JsonResponse(['id' => $checkoutSession->id]);
    }
    
    #[Route('/order', name: 'order')]
    public function createOrder(
        SessionInterface $session, 
        ProductsRepository $productsRepository, 
        EntityManagerInterface $entityManager, 
        Security $security
    ): Response {
        $user = $security->getUser();
    
        // ✅ Ensure user is authenticated
        if (!$user instanceof Users) {
            $this->addFlash('error', 'Vous devez être connecté pour passer une commande.');
            return $this->redirectToRoute('app_login');
        }
    
        $panier = $session->get('panier', []);
        
        // ✅ Ensure cart is not empty
        if (!$panier || count($panier) === 0) {
            $this->addFlash('warning', 'Votre panier est vide.');
            return $this->redirectToRoute('cart_index');
        }
    
        // ✅ Calculate total BEFORE persisting the order
        $total = 0;
        $reduction = ($user->getNumeroSiret() !== null) ? 0.20 : 0.0;
    
        foreach ($panier as $id => $quantite) {
            $product = $productsRepository->find($id);
            if ($product) {
                $price = $product->getPrix();
                if ($reduction > 0) {
                    $price *= (1 - $reduction);
                }
                $total += $price * $quantite;
            }
        }
    
        // ✅ Create order and set total BEFORE saving
        $commande = new Commande();
        $commande->setUsers($user);
        $commande->setReference(uniqid('CMD_'));
        $commande->setEtat('En cours');
        $commande->setCreatedAt(new \DateTimeImmutable());
        $commande->setDateFacture(new \DateTime());
        $commande->setAdresseFacture($user->getAdresse() ?? 'Adresse non spécifiée');
        $commande->setDateLivraison(new \DateTime('+3 days'));
        $commande->setAdresseLivraison($user->getAdresse() ?? 'Adresse non spécifiée');
        $commande->setDatePayment(new \DateTime());
        $commande->setCoefficient(1.0);
        $commande->setTotal($total); // ✅ Set total before persisting
    
        $entityManager->persist($commande);
    
        foreach ($panier as $id => $quantite) {
            $product = $productsRepository->find($id);
            if ($product) {
                $price = $product->getPrix();
                if ($reduction > 0) {
                    $price *= (1 - $reduction);
                }
    
                $commandeDetails = new CommandeDetails();
                $commandeDetails->setCommande($commande);
                $commandeDetails->setProducts($product);
                $commandeDetails->setQuantite($quantite);
                $commandeDetails->setPrix($price); 
    
                $entityManager->persist($commandeDetails);
            }
        }
    
        // ✅ Now flush everything together
        $entityManager->flush();
    
        // ✅ Clear cart session after successful order creation
        $session->remove('panier');
    
        $this->addFlash('success', 'Votre commande a été enregistrée avec succès.');
        return $this->redirectToRoute('cart_index');
    }
    
    
    


}
