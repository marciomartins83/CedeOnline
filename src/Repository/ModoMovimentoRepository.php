<?php

namespace App\Repository;

use App\Entity\ModoMovimento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModoMovimento>
 *
 * @method ModoMovimento|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModoMovimento|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModoMovimento[]    findAll()
 * @method ModoMovimento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModoMovimentoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModoMovimento::class);
    }

    public function save(ModoMovimento $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ModoMovimento $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAtivos(): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.ativo = :ativo')
            ->setParameter('ativo', true)
            ->orderBy('m.nome', 'ASC')
            ->getQuery()
            ->getResult();
    }
} 