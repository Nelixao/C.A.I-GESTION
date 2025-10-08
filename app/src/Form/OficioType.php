<?php

namespace App\Form;

use App\Entity\Oficio;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
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
            ->add('title', TextType::class, [
                'label' => 'Título / Asunto',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ej. Oficio de solicitud']
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Contenido',
                'attr' => ['class' => 'form-control', 'rows' => 6]
            ])
            ->add('sender', TextType::class, [
                'label' => 'Remitente',
                'attr' => ['class' => 'form-control']
            ])
            ->add('recipient', TextType::class, [
                'label' => 'Destinatario',
                'attr' => ['class' => 'form-control']
            ])
            ->add('date', DateTimeType::class, [
                'label' => 'Fecha',
                'widget' => 'single_text',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])

            // Si realmente subes archivo, usa FileType + mapped=false y guarda la ruta en el controller:
            ->add('file_path', FileType::class, [
                'label' => 'Archivo adjunto',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])

            // Metadatos: suele ser mejor setearlos por código
            ->add('created_by', TextType::class, [
                'label' => 'Creado por',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('created_at', DateTimeType::class, [
                'label' => 'Creado el',
                'widget' => 'single_text',
                'required' => false,
                'disabled' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('updated_at', DateTimeType::class, [
                'label' => 'Actualizado el',
                'widget' => 'single_text',
                'required' => false,
                'disabled' => true,
                'attr' => ['class' => 'form-control']
            ])

            ->add('user', EntityType::class, [
                'label' => 'Usuario responsable',
                'class' => User::class,
                'choice_label' => function (?User $u) {
                    if (!$u) return '';
                    // Ajusta según getters reales de tu entidad User:
                    return method_exists($u, 'getFullName') && $u->getFullName()
                        ? $u->getFullName()
                        : ($u->getUsername() ?? $u->getEmail() ?? ('ID '.$u->getId()));
                },
                'placeholder' => 'Selecciona un usuario',
                'required' => false,
                'attr' => ['class' => 'form-select']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Oficio::class,
        ]);
    }
}
