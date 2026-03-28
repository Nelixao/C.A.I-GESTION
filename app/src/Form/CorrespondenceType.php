<?php

namespace App\Form;

use App\Entity\Correspondence;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CorrespondenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numControl', TextType::class, [
                'label' => 'Número de Control',
                'attr' => ['placeholder' => 'Ej. CORR-2025-001', 'class' => 'form-control'],
            ])
            ->add('asunto', TextType::class, [
                'label' => 'Asunto',
                'attr' => ['placeholder' => 'Ej. Solicitud de información', 'class' => 'form-control'],
            ])
            ->add('descripcion', TextareaType::class, [
                'label' => 'Descripción',
                'required' => false,
                'attr' => ['rows' => 6, 'placeholder' => 'Escribe el contenido…', 'class' => 'form-control'],
            ])
            ->add('remitente', TextType::class, [
                'label' => 'Remitente',
                'required' => false,
                'attr' => ['placeholder' => 'Nombre o dependencia de origen', 'class' => 'form-control'],
            ])
            ->add('areaOrigen', TextType::class, [
                'label' => 'Área de origen',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('areaDestino', TextType::class, [
                'label' => 'Área de destino',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('fechaRecepcion', DateType::class, [
                'label' => 'Fecha de recepción',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('estado', ChoiceType::class, [
                'label' => 'Estado',
                'choices' => [
                    'Recibido'    => 'recibido',
                    'En trámite'  => 'en_tramite',
                    'Concluido'   => 'concluido',
                    'Archivado'   => 'archivado',
                ],
                'attr' => ['class' => 'form-select'],
            ])
            ->add('urgente', CheckboxType::class, [
                'label'    => 'Marcar como urgente',
                'required' => false,
                'attr'     => ['class' => 'form-check-input'],
            ])
            ->add('fechaLimite', DateType::class, [
                'label' => 'Fecha límite',
                'widget' => 'single_text',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('user', EntityType::class, [
                'label' => 'Usuario responsable',
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
            'data_class' => Correspondence::class,
        ]);
    }
}
