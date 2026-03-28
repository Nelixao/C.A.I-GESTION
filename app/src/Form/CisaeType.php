<?php

namespace App\Form;

use App\Entity\Cisae;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CisaeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('folio', TextType::class, [
                'label' => 'Folio',
                'required' => false,
                'attr' => ['placeholder' => 'Ej. CISAE-2026-001'],
            ])
            ->add('titulo', TextType::class, [
                'label' => 'Título',
                'attr' => ['placeholder' => 'Título del trámite'],
            ])
            ->add('descripcion', TextareaType::class, [
                'label' => 'Descripción',
                'required' => false,
                'attr' => ['rows' => 4, 'placeholder' => 'Descripción detallada'],
            ])
            ->add('area', TextType::class, [
                'label' => 'Área / Departamento',
                'attr' => ['placeholder' => 'Ej. Dirección Académica'],
            ])
            ->add('fechaLimite', DateType::class, [
                'label' => 'Fecha límite',
                'widget' => 'single_text',
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Estado',
                'choices' => [
                    'Pendiente'   => 'Pendiente',
                    'En trámite'  => 'En trámite',
                    'Concluido'   => 'Concluido',
                    'Archivado'   => 'Archivado',
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
        $resolver->setDefaults(['data_class' => Cisae::class]);
    }
}
