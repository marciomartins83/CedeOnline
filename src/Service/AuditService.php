<?php

namespace App\Service;

use App\Entity\AuditLog;
use App\Entity\User;
use App\Repository\AuditLogRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RequestStack;

class AuditService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private Security $security,
        private RequestStack $requestStack
    ) {}

    public function log(
        string $acao,
        string $entidade,
        ?int $entidadeId = null,
        ?array $dadosAnteriores = null,
        ?array $dadosNovos = null,
        ?string $modulo = null
    ): void {
        $auditLog = new AuditLog();
        
        // Usuário atual
        $user = $this->security->getUser();
        if ($user instanceof User) {
            $auditLog->setUsuario($user);
        }

        // Informações básicas
        $auditLog->setAcao($acao);
        $auditLog->setEntidade($entidade);
        $auditLog->setEntidadeId($entidadeId);
        $auditLog->setModulo($modulo);

        // Dados JSON
        if ($dadosAnteriores !== null) {
            $auditLog->setDadosAnteriores(json_encode($dadosAnteriores, JSON_UNESCAPED_UNICODE));
        }
        if ($dadosNovos !== null) {
            $auditLog->setDadosNovos(json_encode($dadosNovos, JSON_UNESCAPED_UNICODE));
        }

        // Informações da requisição
        $request = $this->requestStack->getCurrentRequest();
        if ($request) {
            $auditLog->setIp($request->getClientIp());
            $auditLog->setUserAgent($request->headers->get('User-Agent'));
        }

        $this->entityManager->persist($auditLog);
        $this->entityManager->flush();
    }

    public function logCreate(string $entidade, int $entidadeId, array $dados, ?string $modulo = null): void
    {
        $this->log('CREATE', $entidade, $entidadeId, null, $dados, $modulo);
    }

    public function logUpdate(string $entidade, int $entidadeId, array $dadosAnteriores, array $dadosNovos, ?string $modulo = null): void
    {
        $this->log('UPDATE', $entidade, $entidadeId, $dadosAnteriores, $dadosNovos, $modulo);
    }

    public function logDelete(string $entidade, int $entidadeId, array $dados, ?string $modulo = null): void
    {
        $this->log('DELETE', $entidade, $entidadeId, $dados, null, $modulo);
    }

    public function logLogin(User $user): void
    {
        $this->log('LOGIN', 'User', $user->getId(), null, ['email' => $user->getEmail()], 'AUTH');
    }

    public function logLogout(User $user): void
    {
        $this->log('LOGOUT', 'User', $user->getId(), null, ['email' => $user->getEmail()], 'AUTH');
    }

    public function logPermissionChange(User $user, string $modulo, array $permissoesAnteriores, array $permissoesNovas): void
    {
        $this->log(
            'PERMISSION_CHANGE',
            'User',
            $user->getId(),
            ['modulo' => $modulo, 'permissoes' => $permissoesAnteriores],
            ['modulo' => $modulo, 'permissoes' => $permissoesNovas],
            'PERMISSOES'
        );
    }
} 