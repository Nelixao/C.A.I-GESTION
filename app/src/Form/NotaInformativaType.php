<?php

namespace App\Form;

use App\Entity\NotaInformativa;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NotaInformativaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label'    => 'Título <span class="text-danger">*</span>',
                'label_html' => true,
                'attr'     => ['placeholder' => 'Título de la nota informativa', 'class' => 'form-control'],
            ])
            ->add('content', TextareaType::class, [
                'label'    => 'Contenido',
                'required' => false,
                'attr'     => ['rows' => 5, 'placeholder' => 'Contenido de la nota', 'class' => 'form-control'],
            ])
            ->add('area', TextType::class, [
                'label'    => 'Área / Departamento',
                'required' => false,
                'attr'     => ['placeholder' => 'Ej. Dirección Académica', 'class' => 'form-control'],
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
                'label'  => 'Estado',
                'choices' => [
                    'No revisado' => 'no-revisado',
                    'Pendiente'   => 'pendiente',
                    'Terminado'   => 'terminado',
                ],
                'attr' => ['class' => 'form-select'],
            ])
            ->add('user', EntityType::class, [
                'class'        => User::class,
                'label'        => 'Usuario responsable',
                'choice_label' => fn(User $u) => $u->getNombre() ?? $u->getEmail(),
                'required'     => false,
                'placeholder'  => '— Sin asignar —',
                'attr'         => ['class' => 'form-select'],
            ])
            ->add('file_path', FileType::class, [
                'label'    => 'Archivo adjunto',
                'mapped'   => false,
                'required' => false,
                'attr'     => ['class' => 'form-control'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => NotaInformativa::class]);
    }
}
