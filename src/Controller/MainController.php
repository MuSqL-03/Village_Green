<?php

 namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(CategoriesRepository $categoriesRepository): Response
    {
        $categories = $categoriesRepository->findBy([ 'parent' => null ]);


        return $this->render('main/index.html.twig', [
            'categories' => $categories
        ]);
    }
}
    


/* namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(CategoriesRepository $categoriesRepository): Response
    {
        // Fetch only parent categories (those without a parent)
        $parentCategories = $categoriesRepository->findBy(['parent' => null], ['categoryCommande' => 'asc']);

        return $this->render('main/index.html.twig', [
            'categories' => $parentCategories
        ]);
    }
}
*/
