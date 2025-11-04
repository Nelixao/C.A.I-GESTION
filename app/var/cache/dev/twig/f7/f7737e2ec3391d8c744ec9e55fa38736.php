<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* circular/edit.html.twig */
class __TwigTemplate_c177c97b325c12765f4a9ac36c347926 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "circular/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Editar Circular";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container-glass\">

  <!-- Encabezado + acciones -->
  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\">Editar Circular</h1>

    <div class=\"glass-actions\">
      <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_circular_index");
        yield "\" class=\"glass-btn\">
        <i class=\"bi bi-arrow-left\"></i> Volver al listado
      </a>

      ";
        // line 18
        yield "      <div class=\"d-inline-block\">
        ";
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "circular/_delete_form.html.twig");
        yield "
      </div>
    </div>
  </div>

  <!-- Formulario principal -->
  <div class=\"glass-card\">
    ";
        // line 26
        yield Twig\Extension\CoreExtension::include($this->env, $context, "circular/_form.html.twig", ["button_label" => "Guardar cambios"]);
        yield "
  </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "circular/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  114 => 26,  104 => 19,  101 => 18,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Editar Circular{% endblock %}

{% block body %}
<div class=\"container-glass\">

  <!-- Encabezado + acciones -->
  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\">Editar Circular</h1>

    <div class=\"glass-actions\">
      <a href=\"{{ path('app_circular_index') }}\" class=\"glass-btn\">
        <i class=\"bi bi-arrow-left\"></i> Volver al listado
      </a>

      {# Eliminar (renderiza el form de eliminación como botón) #}
      <div class=\"d-inline-block\">
        {{ include('circular/_delete_form.html.twig') }}
      </div>
    </div>
  </div>

  <!-- Formulario principal -->
  <div class=\"glass-card\">
    {{ include('circular/_form.html.twig', {'button_label': 'Guardar cambios'}) }}
  </div>

</div>
{% endblock %}
", "circular/edit.html.twig", "/var/www/html/templates/circular/edit.html.twig");
    }
}
