<?php

namespace App\Repository;

use App\Entity\LocalCaixa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LocalCaixa>
 *
 * @method LocalCaixa|null find($id, $lockMode = null, $lockVersion = null)
 * @method LocalCaixa|null findOneBy(array $criteria, array $orderBy = null)
 * @method LocalCaixa[]    findAll()
 * @method LocalCaixa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocalCaixaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LocalCaixa::class);
    }

    public function save(LocalCaixa $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(LocalCaixa $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAtivos(): array
    {
        return $this->createQueryBuilder('l')
            ->where('l.ativo = :ativo')
            ->setParameter('ativo', true)
            ->orderBy('l.nome', 'ASC')
            ->getQuery()
            ->getResult();
    }
} 