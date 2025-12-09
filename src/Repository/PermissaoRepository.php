<?php

namespace App\Repository;

use App\Entity\Permissao;
use App\Entity\User;
use App\Entity\Modulo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Permissao>
 *
 * @method Permissao|null find($id, $lockMode = null, $lockVersion = null)
 * @method Permissao|null findOneBy(array $criteria, array $orderBy = null)
 * @method Permissao[]    findAll()
 * @method Permissao[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PermissaoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Permissao::class);
    }

    public function save(Permissao $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Permissao $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findByUsuario(User $usuario): array
    {
        return $this->findBy(['usuario' => $usuario], ['modulo' => 'ASC']);
    }

    public function findByUsuarioAndModulo(User $usuario, Modulo $modulo): ?Permissao
    {
        return $this->findOneBy(['usuario' => $usuario, 'modulo' => $modulo]);
    }

    public function findPermissoesByUsuario(User $usuario): array
    {
        return $this->createQueryBuilder('p')
            ->join('p.modulo', 'm')
            ->where('p.usuario = :usuario')
            ->andWhere('m.ativo = :ativo')
            ->setParameter('usuario', $usuario)
            ->setParameter('ativo', true)
            ->orderBy('m.nome', 'ASC')
            ->getQuery()
            ->getResult();
    }
} 