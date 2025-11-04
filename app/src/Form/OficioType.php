<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Area;
use App\Entity\DocumentoTipo;
use App\Entity\EstadoTramite;

// ...
$builder
    ->add('num_oficio', TextType::class, [
        'label' => 'Número de Oficio',
        'required' => false,
        'attr' => ['class' => 'form-control', 'placeholder' => 'DG-2025-000123']
    ])
    ->add('area', EntityType::class, [
        'class' => Area::class,
        'choice_label' => 'nombre',
        'placeholder' => 'Selecciona área',
        'label' => 'Área / Dirección',
        'attr' => ['class' => 'form-select']
    ])
    ->add('tipo', EntityType::class, [
        'class' => DocumentoTipo::class,
        'choice_label' => 'nombre',
        'placeholder' => 'Selecciona tipo',
        'label' => 'Tipo documental',
        'attr' => ['class' => 'form-select']
    ])
    ->add('estado', EntityType::class, [
        'class' => EstadoTramite::class,
        'choice_label' => 'nombre',
        'label' => 'Estado del trámite',
        'attr' => ['class' => 'form-select']
    ])
    ->add('fecha_tramite', DateTimeType::class, [
        'label' => 'Fecha de trámite',
        'widget' => 'single_text',
        'required' => false,
        'attr' => ['class' => 'form-control']
    ])
    ->add('fecha_termino', DateTimeType::class, [
        'label' => 'Fecha de término (vencimiento)',
        'widget' => 'single_text',
        'required' => false,
        'attr' => ['class' => 'form-control']
    ])
    ->add('cisai', CheckboxType::class, [
        'label' => 'CISAI (documento con término institucional)',
        'required' => false
    ]);
