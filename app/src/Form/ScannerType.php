<?php

namespace App\Form;

use App\Entity\Scanner;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ScannerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [ 'label' => 'Nombre' ])
            ->add('description', TextareaType::class, [ 'label' => 'Descripción', 'required' => false ])
            ->add('sourceType', ChoiceType::class, [
                'label' => 'Origen',
                'choices' => [
                    'Oficio' => 'oficio',
                    'Correspondencia' => 'correspondence',
                    'Circular' => 'circular',
                    'Otro' => 'otro',
                ],
            ])
            // src/Form/ScannerType.php
->add('sourceId', TextType::class, [
    'label' => 'ID del origen (si aplica)',
    'required' => false,
    'attr' => [
        'inputmode' => 'numeric',
        'pattern' => '[0-9]*',
        'class' => 'form-control',
        'placeholder' => 'Ej. 123 (ID del oficio/correspondencia/circular)',
    ],
    'help' => 'Si quieres vincular el archivo a un documento ya registrado, pon su ID.'
])
->add('upload', FileType::class, [
    'label' => 'Archivo (PDF o imagen)',
    'mapped' => false,
    'required' => true,
    'attr' => [
        'accept' => '.pdf,image/*',
        'class' => 'form-control'
    ],
    'constraints' => [
        new File([
            'maxSize' => '20M',
            'mimeTypes' => [
                'application/pdf',
                'image/jpeg', 'image/png', 'image/gif', 'image/webp'
            ],
            'mimeTypesMessage' => 'Sube un PDF o una imagen válida',
        ])
    ],
])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Scanner::class,
        ]);
    }
}
