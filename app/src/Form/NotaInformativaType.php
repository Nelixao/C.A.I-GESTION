<?php

namespace App\Form;

use App\Entity\NotaInformativa;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NotaInformativaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('folio', TextType::class, [
                'label' => 'Folio',
                'required' => false,
                'attr' => ['placeholder' => 'Ej. NI-2026-001'],
            ])
            ->add('title', TextType::class, [
                'label' => 'Título',
                'attr' => ['placeholder' => 'Título de la nota informativa'],
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Contenido',
                'required' => false,
                'attr' => ['rows' => 5, 'placeholder' => 'Contenido de la nota'],
            ])
            ->add('area', TextType::class, [
                'label' => 'Área / Departamento',
                'required' => false,
                'attr' => ['placeholder' => 'Ej. Dirección Académica'],
            ])
            ->add('fechaLimite', DateType::class, [
                'label' => 'Fecha límite',
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Estado',
                'choices' => [
                    'No revisado' => 'no-revisado',
                    'Pendiente'   => 'pendiente',
                    'Terminado'   => 'terminado',
                ],
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'label' => 'Usuario responsable',
                'choice_label' => fn(User $u) => $u->getNombre() ?? $u->getEmail(),
                'required' => false,
                'placeholder' => '— Sin asignar —',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => NotaInformativa::class]);
    }
}
