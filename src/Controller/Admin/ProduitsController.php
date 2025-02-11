<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use App\Form\ProductsType;
use App\Repository\ProductsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/produits', name: 'admin_products_')]
 class ProduitsController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ProductsRepository $productsRepository): Response
    {
        return $this->render('admin/produits/index.html.twig', [
            'products' => $productsRepository->findAll(),
        ]);
    }

    #[Route('/ajout', name: 'app_produits_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $product = new Products();
        $form = $this->createForm(ProductsType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($product);
            $entityManager->flush();



            return $this->redirectToRoute('admin_products_index', [], Response::HTTP_SEE_OTHER);
        }

        $this->denyAccessUnlessGranted('ROLE_ADMIN');


        return $this->render('admin/produits/new.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produits_show', methods: ['GET'])]
    public function show(Products $product): Response
    {
        return $this->render('admin/produits/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/edition/{id}', name: 'app_produits_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Products $product, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProductsType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('admin_products_index', [], Response::HTTP_SEE_OTHER);
        }

        // on vérifie si l'utilisateur peut éditer avec le voter
        $this->denyAccessUnlessGranted('PRODUCT_EDIT', $product);

        return $this->render('admin/produits/edit.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/suppression/{id}', name: 'app_produits_delete', methods: ['POST'])]
    public function delete(Request $request, Products $product, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($product);
            $entityManager->flush();
        }

         // on vérifie si l'utilisateur peut supprimer avec le voter
         $this->denyAccessUnlessGranted('PRODUCT_DELETE', $product);

        return $this->redirectToRoute('admin_products_index', [], Response::HTTP_SEE_OTHER);
    }
}
