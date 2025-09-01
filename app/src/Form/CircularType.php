<?php

namespace App\Form;

use App\Entity\Circular;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CircularType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'label' => 'Título de la circular',
            ])
            ->add('content', null, [
                'label' => 'Contenido',
            ])
            ->add('target_group', null, [
                'label' => 'Grupo objetivo',
            ])
            ->add('date', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Fecha de publicación',
            ])
            ->add('file_path', null, [
                'label' => 'Archivo adjunto (ruta o nombre)',
            ])
            ->add('created_by', null, [
                'label' => 'Creado por',
            ])
            ->add('created_at', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Fecha de creación',
            ])
            ->add('updated_at', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Última modificación',
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => fn(User $user) => $user->getFullName(),
                'label' => 'Usuario relacionado',
                'placeholder' => 'Selecciona un usuario',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Circular::class,
        ]);
    }
}
