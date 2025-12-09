<?php

namespace App\Controller\Admin;

use App\Entity\Modulo;
use App\Form\ModuloType;
use App\Repository\ModuloRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/modulos')]
#[IsGranted('ROLE_ADMIN')]
class ModuloController extends AbstractController
{
    #[Route('/', name: 'admin_modulo_index', methods: ['GET'])]
    public function index(ModuloRepository $moduloRepository): Response
    {
        return $this->render('admin/modulo/index.html.twig', [
            'modulos' => $moduloRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'admin_modulo_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $modulo = new Modulo();
        $form = $this->createForm(ModuloType::class, $modulo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($modulo);
            $entityManager->flush();

            $this->addFlash('success', 'Módulo criado com sucesso!');

            return $this->redirectToRoute('admin_modulo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/modulo/new.html.twig', [
            'modulo' => $modulo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_modulo_show', methods: ['GET'])]
    public function show(Modulo $modulo): Response
    {
        return $this->render('admin/modulo/show.html.twig', [
            'modulo' => $modulo,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_modulo_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Modulo $modulo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ModuloType::class, $modulo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Módulo atualizado com sucesso!');

            return $this->redirectToRoute('admin_modulo_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/modulo/edit.html.twig', [
            'modulo' => $modulo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_modulo_delete', methods: ['POST'])]
    public function delete(Request $request, Modulo $modulo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$modulo->getId(), $request->request->get('_token'))) {
            $entityManager->remove($modulo);
            $entityManager->flush();

            $this->addFlash('success', 'Módulo excluído com sucesso!');
        }

        return $this->redirectToRoute('admin_modulo_index', [], Response::HTTP_SEE_OTHER);
    }
} 