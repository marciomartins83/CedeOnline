<?php

namespace App\Form;

use App\Entity\Caixa;
use App\Entity\LocalCaixa;
use App\Entity\User;
use App\Repository\LocalCaixaRepository;
use App\Repository\UserRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CaixaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nome', TextType::class, [
                'label' => 'Nome do Caixa',
                'attr' => [
                    'placeholder' => 'Digite o nome do caixa',
                    'class' => 'form-control'
                ]
            ])
            ->add('descricao', TextareaType::class, [
                'label' => 'Descrição',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Descrição opcional do caixa',
                    'class' => 'form-control',
                    'rows' => 3
                ]
            ])
            ->add('local', EntityType::class, [
                'class' => LocalCaixa::class,
                'choice_label' => 'nome',
                'label' => 'Local',
                'query_builder' => function (LocalCaixaRepository $er) {
                    return $er->createQueryBuilder('l')
                        ->where('l.ativo = :ativo')
                        ->setParameter('ativo', true)
                        ->orderBy('l.nome', 'ASC');
                },
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('responsavel', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'nome',
                'label' => 'Responsável',
                'query_builder' => function (UserRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.ativo = :ativo')
                        ->setParameter('ativo', true)
                        ->orderBy('u.nome', 'ASC');
                },
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('ativo', CheckboxType::class, [
                'label' => 'Ativo',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Caixa::class,
        ]);
    }
} 