<?php

namespace App\Form;

use App\Entity\Correspondence;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CorrespondenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Asunto
            ->add('subject', TextType::class, [
                'label' => 'Asunto',
                'attr' => [
                    'placeholder' => 'Ej. Solicitud de información',
                    'class' => 'form-control',
                ],
            ])

            // Mensaje / cuerpo
            ->add('body', TextareaType::class, [
                'label' => 'Mensaje',
                'attr' => [
                    'rows' => 6,
                    'placeholder' => 'Escribe el contenido del mensaje…',
                    'class' => 'form-control',
                ],
            ])

            // Remitente y Destinatario
            ->add('sender', TextType::class, [
                'label' => 'Remitente',
                'attr' => [
                    'placeholder' => 'Nombre o dependencia de origen',
                    'class' => 'form-control',
                ],
            ])
            ->add('receiver', TextType::class, [
                'label' => 'Destinatario',
                'attr' => [
                    'placeholder' => 'Nombre o dependencia de destino',
                    'class' => 'form-control',
                ],
            ])

            // Fecha principal
            ->add('date', DateType::class, [
                'label'    => 'Fecha',
                'widget'   => 'single_text',
                'html5'    => true,
                'format'   => 'yyyy-MM-dd',
                'attr'     => ['class' => 'form-control', 'data-provide' => 'datepicker'],
                'required' => false,
            ])

            ->add('status', ChoiceType::class, [
                'label'   => 'Estado',
                'choices' => [
                    'Pendiente'   => 'Pendiente',
                    'En Trámite'  => 'En Trámite',
                    'Concluido'   => 'Concluido',
                    'Archivado'   => 'Archivado',
                ],
                'attr' => ['class' => 'form-select'],
            ])
            ->add('file_path', FileType::class, [
                'label' => 'Archivo adjunto',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Correspondence::class,
        ]);
    }
}
