<?php

namespace App\Repository;

use App\Entity\Pagador;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pagador>
 *
 * @method Pagador|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pagador|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pagador[]    findAll()
 * @method Pagador[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PagadorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pagador::class);
    }

    public function save(Pagador $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Pagador $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAtivos(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.ativo = :ativo')
            ->setParameter('ativo', true)
            ->orderBy('p.nome', 'ASC')
            ->getQuery()
            ->getResult();
    }
} 