<?php

namespace App\Form;

use App\Entity\Circular;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CircularType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class, [
                'label'    => 'Fecha del documento',
                'widget'   => 'single_text',
                'html5'    => true,
                'format'   => 'yyyy-MM-dd',
                'required' => true,
                'attr'     => ['class' => 'form-control', 'data-provide' => 'datepicker'],
            ])
            ->add('target_group', TextType::class, [
                'label'    => 'Dirigido a',
                'required' => true,
                'attr'     => [
                    'placeholder' => 'Ej. Asesores y Subdirectores',
                    'class'       => 'form-control',
                ],
            ])
            ->add('asunto', TextareaType::class, [
                'label'    => 'Asunto',
                'required' => true,
                'attr'     => [
                    'placeholder' => 'Descripción del tema de la circular',
                    'class'       => 'form-control',
                    'rows'        => 3,
                ],
            ])
            ->add('content', TextareaType::class, [
                'label'    => 'Contenido',
                'required' => false,
                'attr'     => ['class' => 'form-control', 'rows' => 4],
            ])
            ->add('recibidoPor', TextType::class, [
                'label'    => 'Recibido por',
                'required' => true,
                'attr'     => [
                    'placeholder' => 'Nombre de quien recibió y firmó',
                    'class'       => 'form-control',
                ],
            ])
            ->add('status', ChoiceType::class, [
                'label'   => 'Estado',
                'choices' => [
                    'Abierta'    => 'Abierta',
                    'En Trámite' => 'En Trámite',
                    'Cerrada'    => 'Cerrada',
                    'Archivada'  => 'Archivada',
                ],
                'attr' => ['class' => 'form-select'],
            ])
            ->add('file_path', FileType::class, [
                'label'    => 'Archivo adjunto',
                'mapped'   => false,
                'required' => false,
                'attr'     => ['class' => 'form-control'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Circular::class,
        ]);
    }
}
