<?php

namespace App\Form;

use App\Entity\Oficio;
use App\Entity\User;
use App\Entity\Correspondence;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OficioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [ 'label' => 'Título' ])
            ->add('content', null, [ 'label' => 'Contenido' ])
            ->add('sender', null, [ 'label' => 'Remitente' ])
            ->add('recipient', null, [ 'label' => 'Destinatario' ])
            ->add('date', null, [ 'label' => 'Fecha', 'widget' => 'single_text' ])
            ->add('file_path', null, [ 'label' => 'Archivo' ])
            ->add('created_by', null, [ 'label' => 'Creado por' ])
            ->add('created_at', null, [
                'widget' => 'single_text',
                'label' => 'Creado el',
            ])
            ->add('updated_at', null, [
                'widget' => 'single_text',
                'label' => 'Actualizado el',
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'fullName',
                'label' => 'Usuario relacionado',
                'placeholder' => 'Selecciona un usuario',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Oficio::class,
        ]);
    }
}
