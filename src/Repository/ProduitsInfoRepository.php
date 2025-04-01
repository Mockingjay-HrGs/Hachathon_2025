<?php

namespace App\Repository;

use App\Entity\ProduitsInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProduitsInfo>
 *
 * @method ProduitsInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProduitsInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProduitsInfo[]    findAll()
 * @method ProduitsInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitsInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProduitsInfo::class);
    }

    // Tu pourras ajouter tes requêtes personnalisées ici
}
