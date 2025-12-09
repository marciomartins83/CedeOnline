<?php

namespace App\Repository;

use App\Entity\Caixa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Caixa>
 *
 * @method Caixa|null find($id, $lockMode = null, $lockVersion = null)
 * @method Caixa|null findOneBy(array $criteria, array $orderBy = null)
 * @method Caixa[]    findAll()
 * @method Caixa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaixaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Caixa::class);
    }

    public function save(Caixa $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Caixa $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAtivos(): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.ativo = :ativo')
            ->setParameter('ativo', true)
            ->orderBy('c.nome', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByLocal(int $localId): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.local = :localId')
            ->andWhere('c.ativo = :ativo')
            ->setParameter('localId', $localId)
            ->setParameter('ativo', true)
            ->orderBy('c.nome', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByResponsavel(int $responsavelId): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.responsavel = :responsavelId')
            ->andWhere('c.ativo = :ativo')
            ->setParameter('responsavelId', $responsavelId)
            ->setParameter('ativo', true)
            ->orderBy('c.nome', 'ASC')
            ->getQuery()
            ->getResult();
    }
} 