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
            ->add('titulo', TextType::class, [
                'label' => 'Título <span class="text-danger">*</span>',
                'label_html' => true,
                'attr' => ['placeholder' => 'Ej. Solicitud de certificado', 'class' => 'form-control'],
            ])
            ->add('descripcion', TextareaType::class, [
                'label' => 'Descripción',
                'required' => false,
                'attr' => ['rows' => 4, 'placeholder' => 'Descripción detallada del trámite', 'class' => 'form-control'],
            ])
            ->add('area', TextType::class, [
                'label' => 'Área / Departamento <span class="text-danger">*</span>',
                'label_html' => true,
                'attr' => ['placeholder' => 'Ej. Dirección Académica', 'class' => 'form-control'],
            ])
            ->add('fechaLimite', DateType::class, [
                'label'    => 'Fecha límite',
                'widget'   => 'single_text',
                'html5'    => true,
                'format'   => 'yyyy-MM-dd',
                'required' => false,
                'attr'     => ['class' => 'form-control', 'data-provide' => 'datepicker'],
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Estado',
                'choices' => [
                    'Pendiente'   => 'Pendiente',
                    'En trámite'  => 'En trámite',
                    'Concluido'   => 'Concluido',
                    'Archivado'   => 'Archivado',
                ],
                'attr' => ['class' => 'form-select'],
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'label' => 'Usuario responsable',
                'choice_label' => fn(User $u) => $u->getNombre() ?? $u->getEmail(),
                'required' => false,
                'placeholder' => '— Sin asignar —',
                'attr' => ['class' => 'form-select'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => Cisae::class]);
    }
}
