<?php

namespace App\Controller\Caixa;

use App\Entity\Caixa;
use App\Form\CaixaType;
use App\Repository\CaixaRepository;
use App\Security\Voter\ModuloVoter;
use App\Service\AuditService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/caixa')]
class CaixaController extends AbstractController
{
    private const MODULO_CAIXA = 'CAIXA';

    #[Route('/', name: 'caixa_index', methods: ['GET'])]
    public function index(CaixaRepository $caixaRepository): Response
    {
        $this->denyAccessUnlessGranted(ModuloVoter::VIEW, self::MODULO_CAIXA);
        
        return $this->render('caixa/index.html.twig', [
            'caixas' => $caixaRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'caixa_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, AuditService $auditService): Response
    {
        $this->denyAccessUnlessGranted(ModuloVoter::CREATE, self::MODULO_CAIXA);
        
        $caixa = new Caixa();
        $form = $this->createForm(CaixaType::class, $caixa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($caixa);
            $entityManager->flush();

            // Log de auditoria
            $auditService->logCreate('Caixa', $caixa->getId(), [
                'nome' => $caixa->getNome(),
                'descricao' => $caixa->getDescricao(),
                'local' => $caixa->getLocal()->getNome(),
                'responsavel' => $caixa->getResponsavel()->getNome()
            ], 'CAIXA');

            $this->addFlash('success', 'Caixa criado com sucesso!');

            return $this->redirectToRoute('caixa_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('caixa/new.html.twig', [
            'caixa' => $caixa,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'caixa_show', methods: ['GET'])]
    public function show(Caixa $caixa): Response
    {
        $this->denyAccessUnlessGranted(ModuloVoter::VIEW, self::MODULO_CAIXA);
        
        return $this->render('caixa/show.html.twig', [
            'caixa' => $caixa,
        ]);
    }

    #[Route('/{id}/edit', name: 'caixa_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Caixa $caixa, EntityManagerInterface $entityManager, AuditService $auditService): Response
    {
        $this->denyAccessUnlessGranted(ModuloVoter::EDIT, self::MODULO_CAIXA);
        
        // Dados anteriores para auditoria
        $dadosAnteriores = [
            'nome' => $caixa->getNome(),
            'descricao' => $caixa->getDescricao(),
            'ativo' => $caixa->isAtivo(),
            'local' => $caixa->getLocal()->getNome(),
            'responsavel' => $caixa->getResponsavel()->getNome()
        ];

        $form = $this->createForm(CaixaType::class, $caixa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            // Log de auditoria
            $dadosNovos = [
                'nome' => $caixa->getNome(),
                'descricao' => $caixa->getDescricao(),
                'ativo' => $caixa->isAtivo(),
                'local' => $caixa->getLocal()->getNome(),
                'responsavel' => $caixa->getResponsavel()->getNome()
            ];
            $auditService->logUpdate('Caixa', $caixa->getId(), $dadosAnteriores, $dadosNovos, 'CAIXA');

            $this->addFlash('success', 'Caixa atualizado com sucesso!');

            return $this->redirectToRoute('caixa_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('caixa/edit.html.twig', [
            'caixa' => $caixa,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'caixa_delete', methods: ['POST'])]
    public function delete(Request $request, Caixa $caixa, EntityManagerInterface $entityManager, AuditService $auditService): Response
    {
        $this->denyAccessUnlessGranted(ModuloVoter::DELETE, self::MODULO_CAIXA);
        
        if ($this->isCsrfTokenValid('delete'.$caixa->getId(), $request->request->get('_token'))) {
            // Log de auditoria antes de remover
            $auditService->logDelete('Caixa', $caixa->getId(), [
                'nome' => $caixa->getNome(),
                'descricao' => $caixa->getDescricao(),
                'local' => $caixa->getLocal()->getNome(),
                'responsavel' => $caixa->getResponsavel()->getNome()
            ], 'CAIXA');

            $entityManager->remove($caixa);
            $entityManager->flush();

            $this->addFlash('success', 'Caixa excluído com sucesso!');
        }

        return $this->redirectToRoute('caixa_index', [], Response::HTTP_SEE_OTHER);
    }
} 