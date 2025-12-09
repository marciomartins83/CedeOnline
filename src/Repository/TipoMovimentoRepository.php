<?php

namespace App\Repository;

use App\Entity\TipoMovimento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TipoMovimento>
 *
 * @method TipoMovimento|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoMovimento|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoMovimento[]    findAll()
 * @method TipoMovimento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoMovimentoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TipoMovimento::class);
    }

    public function save(TipoMovimento $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TipoMovimento $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAtivos(): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.ativo = :ativo')
            ->setParameter('ativo', true)
            ->orderBy('t.nome', 'ASC')
            ->getQuery()
            ->getResult();
    }
} 