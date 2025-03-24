<?php

namespace App\Repository;

use App\Entity\CommandeDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CommandeDetails>
 */
class CommandeDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandeDetails::class);
    }
  /*   public function findTop10ProductsByYear(int $year): array
    {
        return $this->createQueryBuilder('cd')
            ->select('p.referenceFournisseur AS reference, p.nom AS product_name, SUM(cd.quantite) AS total_quantity, f.nom AS fournisseur')
            ->join('cd.products', 'p')
            ->join('p.fournisseur', 'f')
            ->join('cd.commande', 'c')
            ->where("c.dateFacture BETWEEN :start_date AND :end_date")
            ->setParameter('start_date', new \DateTime("$year-01-01"))
            ->setParameter('end_date', new \DateTime("$year-12-31"))
            ->groupBy('p.id, f.id')
            ->orderBy('total_quantity', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    } */
    
    
    
    
    
}

