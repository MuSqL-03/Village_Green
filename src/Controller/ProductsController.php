<?php

// src/Controller/ProductsController.php

namespace App\Controller;

use App\Entity\Products;
use App\Repository\CommandeDetailsRepository;
use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/produits', name: 'products_')]
class ProductsController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ProductsRepository $productsRepository): Response
    {
        $products = $productsRepository->findAll();

        return $this->render('products/index.html.twig', [
            'products' => $products,
        ]);
    }


    #[Route('/slug/{slug}', name: 'details')]
    public function details($slug, ProductsRepository $productsRepository): Response
{
    dump($slug); // This will print the slug to Symfony Profiler or browser
    $product = $productsRepository->findOneBy(['slug' => $slug]);

    if (!$product) {
        throw $this->createNotFoundException('The product does not exist.');
    }

    return $this->render('products/details.html.twig', [
        'product' => $product,
    ]);
}

    #[Route('/search', name: 'search')]
    public function search(Request $request, ProductsRepository $productsRepository): Response
    {
        $searchTerm = $request->query->get('search');

        if ($searchTerm) {
            $products = $productsRepository->findBySearchTerm($searchTerm);
            dump($searchTerm);
            dump($products);
        } else {
            $products = [];
        }

        return $this->render('products/search_results.html.twig', [
            'products' => $products,
        ]);
    }

    // TOP 10 des produits les plus commandés pour une année sélectionnée (référence et nom du produit, quantité commandée, fournisseur)

  /*   #[Route('/top-products/{year}', name: 'top_products', requirements: ['year' => '\d{4}'])]
    public function topProducts(int $year, CommandeDetailsRepository $commandeDetailsRepository): Response
     {
      $topProducts = $commandeDetailsRepository->findTop10ProductsByYear($year);

      return $this->render('products/top_products.html.twig', [
        'topProducts' => $topProducts,
        'year' => $year
      ]);
     } */

}









/* namespace App\Controller;

use App\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/produits', name: 'products_')]

class ProductsController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('products/index.html.twig');
    }


    #[Route('/{slug}', name: 'details')]
    public function details(Products $product): Response
    {
        return $this->render('products/details.html.twig', compact('product'));


    }


} */
