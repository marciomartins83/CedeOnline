<?php

namespace App\Controller\Admin;

use App\Repository\AuditLogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/audit')]
#[IsGranted('ROLE_ADMIN')]
class AuditController extends AbstractController
{
    #[Route('/', name: 'admin_audit_index', methods: ['GET'])]
    public function index(Request $request, AuditLogRepository $auditLogRepository): Response
    {
        $page = $request->query->getInt('page', 1);
        $limit = 50;
        $offset = ($page - 1) * $limit;

        $logs = $auditLogRepository->findRecentActivity($limit);
        $totalLogs = count($auditLogRepository->findAll());
        $totalPages = ceil($totalLogs / $limit);

        return $this->render('admin/audit/index.html.twig', [
            'logs' => $logs,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalLogs' => $totalLogs,
        ]);
    }

    #[Route('/user/{id}', name: 'admin_audit_user', methods: ['GET'])]
    public function userActivity(int $id, AuditLogRepository $auditLogRepository): Response
    {
        $logs = $auditLogRepository->findByUsuario($id, 100);

        return $this->render('admin/audit/user.html.twig', [
            'logs' => $logs,
            'userId' => $id,
        ]);
    }

    #[Route('/entity/{entidade}', name: 'admin_audit_entity', methods: ['GET'])]
    public function entityActivity(string $entidade, Request $request, AuditLogRepository $auditLogRepository): Response
    {
        $entidadeId = $request->query->getInt('id');
        $logs = $auditLogRepository->findByEntidade($entidade, $entidadeId, 100);

        return $this->render('admin/audit/entity.html.twig', [
            'logs' => $logs,
            'entidade' => $entidade,
            'entidadeId' => $entidadeId,
        ]);
    }

    #[Route('/module/{modulo}', name: 'admin_audit_module', methods: ['GET'])]
    public function moduleActivity(string $modulo, AuditLogRepository $auditLogRepository): Response
    {
        $logs = $auditLogRepository->findByModulo($modulo, 100);

        return $this->render('admin/audit/module.html.twig', [
            'logs' => $logs,
            'modulo' => $modulo,
        ]);
    }
} 