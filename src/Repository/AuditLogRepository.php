<?php

namespace App\Repository;

use App\Entity\AuditLog;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AuditLog>
 *
 * @method AuditLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method AuditLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method AuditLog[]    findAll()
 * @method AuditLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuditLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AuditLog::class);
    }

    public function save(AuditLog $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(AuditLog $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findByUsuario(User $usuario, int $limit = 50): array
    {
        return $this->createQueryBuilder('a')
            ->where('a.usuario = :usuario')
            ->setParameter('usuario', $usuario)
            ->orderBy('a.dataHora', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findByEntidade(string $entidade, ?int $entidadeId = null, int $limit = 50): array
    {
        $qb = $this->createQueryBuilder('a')
            ->where('a.entidade = :entidade')
            ->setParameter('entidade', $entidade)
            ->orderBy('a.dataHora', 'DESC')
            ->setMaxResults($limit);

        if ($entidadeId !== null) {
            $qb->andWhere('a.entidadeId = :entidadeId')
               ->setParameter('entidadeId', $entidadeId);
        }

        return $qb->getQuery()->getResult();
    }

    public function findByModulo(string $modulo, int $limit = 50): array
    {
        return $this->createQueryBuilder('a')
            ->where('a.modulo = :modulo')
            ->setParameter('modulo', $modulo)
            ->orderBy('a.dataHora', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findRecentActivity(int $limit = 100): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.dataHora', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
} 