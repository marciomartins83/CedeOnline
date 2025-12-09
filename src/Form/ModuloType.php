<?php

namespace App\Form;

use App\Entity\Modulo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModuloType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nome', TextType::class, [
                'label' => 'Nome do Módulo',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Digite o nome do módulo'
                ]
            ])
            ->add('descricao', TextareaType::class, [
                'label' => 'Descrição',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Digite a descrição do módulo'
                ]
            ])
            ->add('codigo', TextType::class, [
                'label' => 'Código',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Digite o código único do módulo'
                ]
            ])
            ->add('ativo', CheckboxType::class, [
                'label' => 'Módulo Ativo',
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
            'data_class' => Modulo::class,
        ]);
    }
} 