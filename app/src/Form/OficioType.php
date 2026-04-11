<?php

namespace App\Form;

use App\Entity\Oficio;
use Symfony\Component\Form\AbstractType;
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
            ->add('date', DateType::class, [
                'label'    => 'Fecha del documento',
                'widget'   => 'single_text',
                'html5'    => true,
                'format'   => 'yyyy-MM-dd',
                'required' => true,
                'attr'     => ['class' => 'form-control', 'data-provide' => 'datepicker'],
            ])
            ->add('sender', TextType::class, [
                'label'    => 'Remitente',
                'required' => true,
                'attr'     => ['class' => 'form-control', 'placeholder' => 'De quién viene'],
            ])
            ->add('recipient', TextType::class, [
                'label'    => 'Dirigido a',
                'required' => true,
                'attr'     => ['class' => 'form-control', 'placeholder' => 'A quién va'],
            ])
            ->add('asunto', TextareaType::class, [
                'label'    => 'Asunto',
                'required' => true,
                'attr'     => [
                    'placeholder' => 'Descripción del oficio',
                    'class'       => 'form-control',
                    'rows'        => 3,
                ],
            ])
            ->add('recibidoPor', TextType::class, [
                'label'    => 'Recibido por',
                'required' => true,
                'attr'     => [
                    'placeholder' => 'Nombre de quien firmó de recibido',
                    'class'       => 'form-control',
                ],
            ])
            ->add('status', ChoiceType::class, [
                'label'   => 'Estado',
                'choices' => [
                    'Abierto'    => 'Abierto',
                    'En Trámite' => 'En Trámite',
                    'Cerrado'    => 'Cerrado',
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
            'data_class' => Oficio::class,
        ]);
    }
}
