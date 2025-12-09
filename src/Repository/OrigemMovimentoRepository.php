<?php

namespace App\Repository;

use App\Entity\OrigemMovimento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrigemMovimento>
 *
 * @method OrigemMovimento|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrigemMovimento|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrigemMovimento[]    findAll()
 * @method OrigemMovimento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrigemMovimentoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrigemMovimento::class);
    }

    public function save(OrigemMovimento $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrigemMovimento $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAtivos(): array
    {
        return $this->createQueryBuilder('o')
            ->where('o.ativo = :ativo')
            ->setParameter('ativo', true)
            ->orderBy('o.nome', 'ASC')
            ->getQuery()
            ->getResult();
    }
} 