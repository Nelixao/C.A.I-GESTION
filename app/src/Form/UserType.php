<?php

namespace App\Form;

use App\Entity\Role;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label'       => 'Correo electrónico',
                'attr'        => ['class' => 'form-control', 'placeholder' => 'usuario@ejemplo.com'],
                'constraints' => [
                    new NotBlank(['message' => 'El correo es obligatorio.']),
                    new Email(['message'    => 'Ingresa un correo válido.']),
                ],
            ])
            ->add('nombre', TextType::class, [
                'label'    => 'Nombre completo',
                'required' => false,
                'attr'     => ['class' => 'form-control', 'placeholder' => 'Nombre y apellidos'],
            ])
            ->add('contrasena', PasswordType::class, [
                'label'       => 'Contraseña',
                'mapped'      => false,
                'required'    => false,
                'attr'        => ['class' => 'form-control', 'placeholder' => 'Dejar en blanco para no cambiar'],
            ])
            ->add('rol', ChoiceType::class, [
                'label'   => 'Rol',
                'choices' => [
                    'Invitado'       => 'Invitado',
                    'Usuario'        => 'Usuario',
                    'Editor'         => 'Editor',
                    'Administrador'  => 'Admin',
                ],
                'attr' => ['class' => 'form-select'],
            ])
            ->add('role', EntityType::class, [
                'label'        => 'Rol del sistema',
                'class'        => Role::class,
                'choice_label' => 'name',
                'placeholder'  => 'Sin rol específico',
                'required'     => false,
                'attr'         => ['class' => 'form-select'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
