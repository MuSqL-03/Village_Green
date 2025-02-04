<?php

namespace App\Controller;

use App\Entity\Products;
use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;


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
}
