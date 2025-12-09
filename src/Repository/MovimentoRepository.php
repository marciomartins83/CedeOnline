<?php

namespace App\Repository;

use App\Entity\Movimento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Movimento>
 *
 * @method Movimento|null find($id, $lockMode = null, $lockVersion = null)
 * @method Movimento|null findOneBy(array $criteria, array $orderBy = null)
 * @method Movimento[]    findAll()
 * @method Movimento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MovimentoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Movimento::class);
    }

    public function save(Movimento $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Movimento $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findByCaixa(int $caixaId): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.caixa = :caixaId')
            ->orderBy('m.dataMovimento', 'DESC')
            ->setParameter('caixaId', $caixaId)
            ->getQuery()
            ->getResult();
    }

    public function findByPeriodo(\DateTime $inicio, \DateTime $fim): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.dataMovimento >= :inicio')
            ->andWhere('m.dataMovimento <= :fim')
            ->orderBy('m.dataMovimento', 'DESC')
            ->setParameter('inicio', $inicio)
            ->setParameter('fim', $fim)
            ->getQuery()
            ->getResult();
    }
} 