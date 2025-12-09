<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nome', TextType::class, [
                'label' => 'Nome Completo',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Digite o nome completo'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-mail',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Digite o e-mail'
                ]
            ])
            ->add('username', TextType::class, [
                'label' => 'Nome de Usuário',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Digite o nome de usuário'
                ]
            ])
            ->add('roles', ChoiceType::class, [
                'label' => 'Perfis',
                'choices' => [
                    'Usuário' => 'ROLE_USER',
                    'Administrador' => 'ROLE_ADMIN',
                    'Gerente' => 'ROLE_MANAGER'
                ],
                'multiple' => true,
                'expanded' => true,
                'attr' => [
                    'class' => 'form-check-input'
                ]
            ])
            ->add('ativo', CheckboxType::class, [
                'label' => 'Usuário Ativo',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input'
                ]
            ])
        ;

        // Adicionar campo de senha apenas se for um novo usuário
        if (!$options['data'] || !$options['data']->getId()) {
            $builder->add('password', PasswordType::class, [
                'label' => 'Senha',
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Digite a senha'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Por favor, digite uma senha',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'A senha deve ter pelo menos {{ limit }} caracteres',
                        'max' => 4096,
                    ]),
                ],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
} 