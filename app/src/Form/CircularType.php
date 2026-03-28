<?php

namespace App\Form;

use App\Entity\Circular;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CircularType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numCircular', TextType::class, [
                'label' => 'Número de Circular',
                'attr' => ['class' => 'form-control', 'placeholder' => 'CIRC-2025-001'],
            ])
            ->add('fecha', DateType::class, [
                'label' => 'Fecha',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('titulo', TextType::class, [
                'label' => 'Asunto',
                'attr' => [
                    'placeholder' => 'Ej. Circular de lineamientos',
                    'class' => 'form-control',
                ],
            ])
            ->add('contenido', TextareaType::class, [
                'label' => 'Contenido',
                'required' => false,
                'attr' => ['class' => 'form-control', 'rows' => 6],
            ])
            ->add('estado', ChoiceType::class, [
                'label' => 'Estado',
                'choices' => [
                    'Abierta'     => 'ABIERTA',
                    'En trámite'  => 'EN_TRAMITE',
                    'Cerrada'     => 'CERRADA',
                    'Archivada'   => 'ARCHIVADA',
                ],
                'attr' => ['class' => 'form-select'],
            ])
            ->add('fechaLimite', DateType::class, [
                'label' => 'Fecha límite',
                'widget' => 'single_text',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('user', EntityType::class, [
                'label' => 'Usuario relacionado',
                'class' => User::class,
                'choice_label' => function (?User $u) {
                    if (!$u) return '';
                    return $u->getNombre() ?? $u->getEmail() ?? 'ID '.$u->getId();
                },
                'placeholder' => 'Selecciona un usuario',
                'required' => false,
                'attr' => ['class' => 'form-select'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Circular::class,
        ]);
    }
}
