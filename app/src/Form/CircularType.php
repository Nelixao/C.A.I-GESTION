<?php

namespace App\Form;

use App\Entity\Circular;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
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
            ->add('date', DateTimeType::class, [
                'label' => 'Fecha',
                'widget' => 'single_text',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])

            ->add('title', TextType::class, [
                'label' => 'Asunto',
                'attr' => [
                    'placeholder' => 'Ej. Circular de lineamientos',
                    'class' => 'form-control',
                ],
            ])

            ->add('target_group', TextType::class, [
                'label' => 'Dirigido a',
                'attr' => [
                    'placeholder' => 'Ej. Todas las áreas / Recursos Humanos',
                    'class' => 'form-control',
                ],
            ])

            // Si realmente subes archivo, usa FileType y mapped=false.
            // En el controlador mueves el archivo y seteas la ruta en la entidad.
            ->add('file_path', FileType::class, [
                'label' => 'Archivo adjunto',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])

            ->add('created_by', TextType::class, [
                'label' => 'Elaboró',
                'required' => false,
                'disabled' => true,
                'attr' => ['class' => 'form-control'],
            ])

            // Suele ser campo de solo lectura o seteado por código
            ->add('updated_at', DateTimeType::class, [
                'label' => 'Última modificación',
                'widget' => 'single_text',
                'required' => false,
                'disabled' => true,           // evitar edición manual
                'attr' => ['class' => 'form-control'],
            ])

            ->add('content', TextareaType::class, [
                'label' => 'Contenido',
                'required' => true,
                'attr' => ['class' => 'form-control', 'rows' => 6],
            ])

            ->add('user', EntityType::class, [
                'label' => 'Usuario relacionado',
                'class' => User::class,
                'choice_label' => function (?User $u) {
                    if (!$u) return '';
                    // Ajusta según tus getters reales:
                    return method_exists($u, 'getFullName') && $u->getFullName()
                        ? $u->getFullName()
                        : ($u->getNombre() ?? $u->getEmail() ?? 'ID '.$u->getId());
                },
                'placeholder' => 'Selecciona un usuario',
                'required' => false,
                'attr' => ['class' => 'form-select'],
            ]);

        // Si tu entidad tiene 'content', descomenta y añade:
        // ->add('content', TextareaType::class, [
        //     'label' => 'Contenido',
        //     'required' => false,
        //     'attr' => ['class' => 'form-control', 'rows' => 6],
        // ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Circular::class,
        ]);
    }
}
