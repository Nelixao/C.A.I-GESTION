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

/* oficio/_form.html.twig */
class __TwigTemplate_10e9f52950b7b36ab4aa013068c24712 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "oficio/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "form-glass"]]);
        yield "
  <div class=\"row g-3\">
    <div class=\"col-md-6\">
      ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), 'label', ["label" => "Título / Asunto"]);
        yield "
      ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), 'errors');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "date", [], "any", false, false, false, 10), 'label', ["label" => "Fecha"]);
        yield "
      ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "date", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "date", [], "any", false, false, false, 12), 'errors');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "sender", [], "any", false, false, false, 16), 'label', ["label" => "Remitente"]);
        yield "
      ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "sender", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "sender", [], "any", false, false, false, 18), 'errors');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "recipient", [], "any", false, false, false, 22), 'label', ["label" => "Destinatario"]);
        yield "
      ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "recipient", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "recipient", [], "any", false, false, false, 24), 'errors');
        yield "
    </div>

    <div class=\"col-12\">
      ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "content", [], "any", false, false, false, 28), 'label', ["label" => "Contenido"]);
        yield "
      ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "content", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "rows" => 6]]);
        yield "
      ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "content", [], "any", false, false, false, 30), 'errors');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "file_path", [], "any", false, false, false, 34), 'label', ["label" => "Archivo adjunto"]);
        yield "
      ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "file_path", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "file_path", [], "any", false, false, false, 36), 'errors');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), 'label', ["label" => "Usuario responsable"]);
        yield "
      ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
      ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), 'errors');
        yield "
    </div>

    ";
        // line 46
        yield "    <div class=\"col-md-6\">
      ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "created_by", [], "any", false, false, false, 47), 'row');
        yield "
    </div>
    <div class=\"col-md-6\">
      ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "created_at", [], "any", false, false, false, 50), 'row');
        yield "
    </div>
    <div class=\"col-md-6\">
      ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "updated_at", [], "any", false, false, false, 53), 'row');
        yield "
    </div>
  </div>

  <div class=\"form-actions mt-4 text-center\">
    <button class=\"glass-btn primary\" type=\"submit\">
      <i class=\"bi bi-save\"></i> ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 59, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        yield "
    </button>
  </div>
";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
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
        return "oficio/_form.html.twig";
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
        return array (  185 => 62,  179 => 59,  170 => 53,  164 => 50,  158 => 47,  155 => 46,  149 => 42,  145 => 41,  141 => 40,  134 => 36,  130 => 35,  126 => 34,  119 => 30,  115 => 29,  111 => 28,  104 => 24,  100 => 23,  96 => 22,  89 => 18,  85 => 17,  81 => 16,  74 => 12,  70 => 11,  66 => 10,  59 => 6,  55 => 5,  51 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, { attr: { class: 'form-glass' } }) }}
  <div class=\"row g-3\">
    <div class=\"col-md-6\">
      {{ form_label(form.title, 'Título / Asunto') }}
      {{ form_widget(form.title, { attr: { class: 'form-control' } }) }}
      {{ form_errors(form.title) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_label(form.date, 'Fecha') }}
      {{ form_widget(form.date, { attr: { class: 'form-control' } }) }}
      {{ form_errors(form.date) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_label(form.sender, 'Remitente') }}
      {{ form_widget(form.sender, { attr: { class: 'form-control' } }) }}
      {{ form_errors(form.sender) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_label(form.recipient, 'Destinatario') }}
      {{ form_widget(form.recipient, { attr: { class: 'form-control' } }) }}
      {{ form_errors(form.recipient) }}
    </div>

    <div class=\"col-12\">
      {{ form_label(form.content, 'Contenido') }}
      {{ form_widget(form.content, { attr: { class: 'form-control', rows: 6 } }) }}
      {{ form_errors(form.content) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_label(form.file_path, 'Archivo adjunto') }}
      {{ form_widget(form.file_path, { attr: { class: 'form-control' } }) }}
      {{ form_errors(form.file_path) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_label(form.user, 'Usuario responsable') }}
      {{ form_widget(form.user, { attr: { class: 'form-select' } }) }}
      {{ form_errors(form.user) }}
    </div>

    {# Metadatos opcionales (si los muestras) #}
    <div class=\"col-md-6\">
      {{ form_row(form.created_by) }}
    </div>
    <div class=\"col-md-6\">
      {{ form_row(form.created_at) }}
    </div>
    <div class=\"col-md-6\">
      {{ form_row(form.updated_at) }}
    </div>
  </div>

  <div class=\"form-actions mt-4 text-center\">
    <button class=\"glass-btn primary\" type=\"submit\">
      <i class=\"bi bi-save\"></i> {{ button_label|default('Guardar') }}
    </button>
  </div>
{{ form_end(form) }}
", "oficio/_form.html.twig", "/var/www/html/templates/oficio/_form.html.twig");
    }
}
