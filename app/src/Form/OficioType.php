<?php

namespace App\Form;

use App\Entity\Cisae;
use App\Entity\Correspondence;
use App\Entity\Oficio;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OficioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('num_oficio', TextType::class, [
                'label' => 'Número de Oficio',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'DG-2025-000123'],
            ])
            ->add('title', TextType::class, [
                'label' => 'Asunto',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Contenido',
                'attr' => ['class' => 'form-control', 'rows' => 4],
            ])
            ->add('sender', TextType::class, [
                'label' => 'Remitente',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('recipient', TextType::class, [
                'label' => 'Destinatario',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('date', DateType::class, [
                'label' => 'Fecha',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('fecha_emision', DateType::class, [
                'label' => 'Fecha de emisión',
                'widget' => 'single_text',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('area', ChoiceType::class, [
                'label'    => 'Área / Dirección',
                'required' => false,
                'choices'  => [
                    'Dirección General'          => 'Dirección General',
                    'Recursos Humanos'           => 'Recursos Humanos',
                    'Finanzas'                   => 'Finanzas',
                    'Operaciones'                => 'Operaciones',
                    'Tecnologías de Información' => 'TI',
                    'CISAE'                      => 'CISAE',
                    'Otra'                       => 'Otra',
                ],
                'placeholder' => 'Selecciona área',
                'attr'        => ['class' => 'form-select'],
            ])
            ->add('isCisae', CheckboxType::class, [
                'label'    => 'Es expediente CISAE',
                'required' => false,
                'attr'     => ['class' => 'form-check-input'],
            ])
            ->add('cisae', EntityType::class, [
                'label'        => 'Expediente CISAE',
                'class'        => Cisae::class,
                'choice_label' => function (?Cisae $c) {
                    return $c ? ($c->getNumero().' — '.$c->getTitulo()) : '';
                },
                'placeholder'  => 'Sin expediente CISAE',
                'required'     => false,
                'attr'         => ['class' => 'form-select'],
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Estado',
                'choices' => [
                    'Abierto'    => 'Abierto',
                    'En trámite' => 'En trámite',
                    'Cerrado'    => 'Cerrado',
                    'Archivado'  => 'Archivado',
                ],
                'attr' => ['class' => 'form-select'],
            ])
            ->add('file_path', FileType::class, [
                'label' => 'Archivo adjunto',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('correspondence', EntityType::class, [
                'label' => 'Correspondencia relacionada',
                'class' => Correspondence::class,
                'choice_label' => 'numControl',
                'placeholder' => 'Sin correspondencia',
                'required' => false,
                'attr' => ['class' => 'form-select'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Oficio::class,
        ]);
    }
}
