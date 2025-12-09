<?php

namespace App\Repository;

use App\Entity\Responsavel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Responsavel>
 *
 * @method Responsavel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Responsavel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Responsavel[]    findAll()
 * @method Responsavel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResponsavelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Responsavel::class);
    }

    public function save(Responsavel $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Responsavel $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAtivos(): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.ativo = :ativo')
            ->setParameter('ativo', true)
            ->orderBy('r.nome', 'ASC')
            ->getQuery()
            ->getResult();
    }
} 