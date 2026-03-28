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
            ->add('numero', TextType::class, [
                'label' => 'Número de Expediente',
                'attr'  => ['placeholder' => 'CISAE-2025-001', 'class' => 'form-control'],
            ])
            ->add('titulo', TextType::class, [
                'label' => 'Título',
                'attr'  => ['class' => 'form-control'],
            ])
            ->add('descripcion', TextareaType::class, [
                'label'    => 'Descripción',
                'required' => false,
                'attr'     => ['rows' => 4, 'class' => 'form-control'],
            ])
            ->add('area', ChoiceType::class, [
                'label'    => 'Área / Dirección',
                'required' => false,
                'choices'  => [
                    'Dirección General'         => 'Dirección General',
                    'Recursos Humanos'          => 'Recursos Humanos',
                    'Finanzas'                  => 'Finanzas',
                    'Operaciones'               => 'Operaciones',
                    'Tecnologías de Información'=> 'TI',
                    'CISAE'                     => 'CISAE',
                    'Otra'                      => 'Otra',
                ],
                'placeholder' => 'Selecciona área',
                'attr'        => ['class' => 'form-select'],
            ])
            ->add('estado', ChoiceType::class, [
                'label'   => 'Estado',
                'choices' => [
                    'Abierto'    => 'ABIERTO',
                    'En trámite' => 'EN_TRAMITE',
                    'Cerrado'    => 'CERRADO',
                ],
                'attr' => ['class' => 'form-select'],
            ])
            ->add('fechaInicio', DateType::class, [
                'label'    => 'Fecha de inicio',
                'widget'   => 'single_text',
                'required' => false,
                'attr'     => ['class' => 'form-control'],
            ])
            ->add('fechaTermino', DateType::class, [
                'label'    => 'Fecha de término',
                'widget'   => 'single_text',
                'required' => false,
                'attr'     => ['class' => 'form-control'],
            ])
            ->add('observaciones', TextareaType::class, [
                'label'    => 'Observaciones',
                'required' => false,
                'attr'     => ['rows' => 3, 'class' => 'form-control'],
            ])
            ->add('user', EntityType::class, [
                'label'        => 'Responsable',
                'class'        => User::class,
                'choice_label' => function (?User $u) {
                    return $u ? ($u->getNombre() ?? $u->getEmail() ?? 'ID '.$u->getId()) : '';
                },
                'placeholder'  => 'Selecciona responsable',
                'required'     => false,
                'attr'         => ['class' => 'form-select'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => Cisae::class]);
    }
}
