<?php

// src/Repository/ProductsRepository.php

namespace App\Repository;

use App\Entity\Products;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProductsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Products::class);
    }

    // Custom search method
    public function findBySearchTerm(string $searchTerm)
    {
        return $this->createQueryBuilder('p')
            ->where('p.nom LIKE :searchTerm')
            ->orWhere('p.description LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->getQuery()
            ->getResult();
    }
}
