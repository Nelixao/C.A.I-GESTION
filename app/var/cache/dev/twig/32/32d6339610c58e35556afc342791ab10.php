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

/* cisae/_form.html.twig */
class __TwigTemplate_effa0f073198206cde3196bb9c9b37fc extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cisae/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "form-glass"]]);
        yield "
  <div class=\"row g-3\">

    <div class=\"col-md-6\">
      ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "numero", [], "any", false, false, false, 5), 'row');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "estado", [], "any", false, false, false, 9), 'row');
        yield "
    </div>

    <div class=\"col-12\">
      ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "titulo", [], "any", false, false, false, 13), 'row');
        yield "
    </div>

    <div class=\"col-12\">
      ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "descripcion", [], "any", false, false, false, 17), 'row');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "area", [], "any", false, false, false, 21), 'row');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), 'row');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "fechaInicio", [], "any", false, false, false, 29), 'row');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "fechaTermino", [], "any", false, false, false, 33), 'row');
        yield "
    </div>

    <div class=\"col-12\">
      ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "observaciones", [], "any", false, false, false, 37), 'row');
        yield "
    </div>

  </div>

  <div class=\"form-actions mt-4\">
    <button class=\"glass-btn primary\" type=\"submit\">
      <i class=\"bi bi-save\"></i> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 44, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        yield "
    </button>
  </div>
";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cisae/_form.html.twig";
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
        return array (  124 => 47,  118 => 44,  108 => 37,  101 => 33,  94 => 29,  87 => 25,  80 => 21,  73 => 17,  66 => 13,  59 => 9,  52 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, { attr: { class: 'form-glass' } }) }}
  <div class=\"row g-3\">

    <div class=\"col-md-6\">
      {{ form_row(form.numero) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_row(form.estado) }}
    </div>

    <div class=\"col-12\">
      {{ form_row(form.titulo) }}
    </div>

    <div class=\"col-12\">
      {{ form_row(form.descripcion) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_row(form.area) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_row(form.user) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_row(form.fechaInicio) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_row(form.fechaTermino) }}
    </div>

    <div class=\"col-12\">
      {{ form_row(form.observaciones) }}
    </div>

  </div>

  <div class=\"form-actions mt-4\">
    <button class=\"glass-btn primary\" type=\"submit\">
      <i class=\"bi bi-save\"></i> {{ button_label|default('Guardar') }}
    </button>
  </div>
{{ form_end(form) }}
", "cisae/_form.html.twig", "/var/www/html/templates/cisae/_form.html.twig");
    }
}
