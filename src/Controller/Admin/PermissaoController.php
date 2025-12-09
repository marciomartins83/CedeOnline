<?php

namespace App\Controller\Admin;

use App\Entity\Permissao;
use App\Entity\User;
use App\Form\PermissaoType;
use App\Repository\PermissaoRepository;
use App\Repository\UserRepository;
use App\Repository\ModuloRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/permissoes')]
#[IsGranted('ROLE_ADMIN')]
class PermissaoController extends AbstractController
{
    #[Route('/', name: 'admin_permissao_index', methods: ['GET'])]
    public function index(PermissaoRepository $permissaoRepository): Response
    {
        return $this->render('admin/permissao/index.html.twig', [
            'permissoes' => $permissaoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'admin_permissao_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $permissao = new Permissao();
        $form = $this->createForm(PermissaoType::class, $permissao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($permissao);
            $entityManager->flush();

            $this->addFlash('success', 'Permissão criada com sucesso!');

            return $this->redirectToRoute('admin_permissao_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/permissao/new.html.twig', [
            'permissao' => $permissao,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_permissao_show', methods: ['GET'])]
    public function show(Permissao $permissao): Response
    {
        return $this->render('admin/permissao/show.html.twig', [
            'permissao' => $permissao,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_permissao_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Permissao $permissao, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PermissaoType::class, $permissao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Permissão atualizada com sucesso!');

            return $this->redirectToRoute('admin_permissao_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/permissao/edit.html.twig', [
            'permissao' => $permissao,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_permissao_delete', methods: ['POST'])]
    public function delete(Request $request, Permissao $permissao, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$permissao->getId(), $request->request->get('_token'))) {
            $entityManager->remove($permissao);
            $entityManager->flush();

            $this->addFlash('success', 'Permissão excluída com sucesso!');
        }

        return $this->redirectToRoute('admin_permissao_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/usuario/{id}', name: 'admin_permissao_usuario', methods: ['GET', 'POST'])]
    public function permissoesUsuario(Request $request, User $usuario, EntityManagerInterface $entityManager, ModuloRepository $moduloRepository, PermissaoRepository $permissaoRepository): Response
    {
        $modulos = $moduloRepository->findAtivos();
        $permissoesExistentes = $permissaoRepository->findByUsuario($usuario);

        if ($request->isMethod('POST')) {
            foreach ($modulos as $modulo) {
                $permissao = $permissaoRepository->findByUsuarioAndModulo($usuario, $modulo);
                
                if (!$permissao) {
                    $permissao = new Permissao();
                    $permissao->setUsuario($usuario);
                    $permissao->setModulo($modulo);
                }

                $moduloId = $modulo->getId();
                $permissao->setPodeVisualizar($request->request->get("visualizar_{$moduloId}") === 'on');
                $permissao->setPodeIncluir($request->request->get("incluir_{$moduloId}") === 'on');
                $permissao->setPodeEditar($request->request->get("editar_{$moduloId}") === 'on');
                $permissao->setPodeExcluir($request->request->get("excluir_{$moduloId}") === 'on');

                $entityManager->persist($permissao);
            }

            $entityManager->flush();
            $this->addFlash('success', 'Permissões do usuário atualizadas com sucesso!');

            return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/permissao/usuario.html.twig', [
            'usuario' => $usuario,
            'modulos' => $modulos,
            'permissoes' => $permissoesExistentes,
        ]);
    }
} 