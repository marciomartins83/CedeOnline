<?php

namespace App\Form;

use App\Entity\Permissao;
use App\Entity\User;
use App\Entity\Modulo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PermissaoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('usuario', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'nome',
                'label' => 'Usuário',
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('modulo', EntityType::class, [
                'class' => Modulo::class,
                'choice_label' => 'nome',
                'label' => 'Módulo',
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('podeVisualizar', CheckboxType::class, [
                'label' => 'Pode Visualizar',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input'
                ]
            ])
            ->add('podeIncluir', CheckboxType::class, [
                'label' => 'Pode Incluir',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input'
                ]
            ])
            ->add('podeEditar', CheckboxType::class, [
                'label' => 'Pode Editar',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input'
                ]
            ])
            ->add('podeExcluir', CheckboxType::class, [
                'label' => 'Pode Excluir',
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
            'data_class' => Permissao::class,
        ]);
    }
} 