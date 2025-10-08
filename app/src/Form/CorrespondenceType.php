<?php

namespace App\Form;

use App\Entity\Correspondence;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
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
            ->add('date', DateTimeType::class, [
                'label' => 'Fecha',
                'widget' => 'single_text', // calendario nativo
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])

            // Subida de archivo (si tu entidad guarda una ruta tipo string)
            // - Si en tu entidad el campo se llama filePath (camelCase), ajusta a 'filePath'
            // - unmapped=true si vas a manejar el movimiento del archivo en el Controller
            ->add('file_path', FileType::class, [
                'label' => 'Archivo adjunto',
                'mapped' => false,      // no se asigna automáticamente al entity
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])

            // Metadatos (si quieres mostrarlos y que sean solo lectura)
            ->add('created_by', TextType::class, [
                'label' => 'Creado por',
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('created_at', DateTimeType::class, [
                'label' => 'Fecha de creación',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'disabled' => true,     // solo lectura en el formulario
                'required' => false,
            ])
            ->add('updated_at', DateTimeType::class, [
                'label' => 'Última actualización',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'disabled' => true,
                'required' => false,
            ])

            // Usuario responsable
            ->add('user', EntityType::class, [
                'label' => 'Usuario responsable',
                'class' => User::class,
                // usa lo que tengas en User (username, email, fullName, etc.)
                'choice_label' => function (?User $u) {
                    if (!$u) return '';
                    return $u->getUsername() ?? ($u->getEmail() ?? ('ID '.$u->getId()));
                },
                'placeholder' => 'Selecciona un usuario',
                'attr' => ['class' => 'form-select'],
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Correspondence::class,
        ]);
    }
}
