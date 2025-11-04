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

/* circular/_form.html.twig */
class __TwigTemplate_229beb8344d336cc4b195f4ef4e7d46b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "circular/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "form-glass"]]);
        yield "
  <div class=\"row g-3\">

    <div class=\"col-md-6\">
      ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), 'label', ["label" => "Asunto"]);
        yield "
      ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), 'errors');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "date", [], "any", false, false, false, 11), 'label', ["label" => "Fecha"]);
        yield "
      ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "date", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "date", [], "any", false, false, false, 13), 'errors');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "target_group", [], "any", false, false, false, 17), 'label', ["label" => "Dirigido a"]);
        yield "
      ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "target_group", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "target_group", [], "any", false, false, false, 19), 'errors');
        yield "
    </div>

    ";
        // line 29
        yield "
    <div class=\"col-md-6\">
      ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "file_path", [], "any", false, false, false, 31), 'label', ["label" => "Archivo adjunto"]);
        yield "
      ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "file_path", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "file_path", [], "any", false, false, false, 33), 'errors');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "created_by", [], "any", false, false, false, 37), 'label', ["label" => "Elaboró"]);
        yield "
      ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "created_by", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "created_by", [], "any", false, false, false, 39), 'errors');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), 'label', ["label" => "Usuario relacionado"]);
        yield "
      ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
      ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), 'errors');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "updated_at", [], "any", false, false, false, 49), 'label', ["label" => "Última modificación"]);
        yield "
      ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "updated_at", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
      ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "updated_at", [], "any", false, false, false, 51), 'errors');
        yield "
    </div>

  </div>

  <div class=\"form-actions mt-3\">
    <button class=\"glass-btn primary\" type=\"submit\">
      <i class=\"bi bi-save\"></i> ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 58, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        yield "
    </button>
  </div>
";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
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
        return "circular/_form.html.twig";
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
        return array (  169 => 61,  163 => 58,  153 => 51,  149 => 50,  145 => 49,  138 => 45,  134 => 44,  130 => 43,  123 => 39,  119 => 38,  115 => 37,  108 => 33,  104 => 32,  100 => 31,  96 => 29,  90 => 19,  86 => 18,  82 => 17,  75 => 13,  71 => 12,  67 => 11,  60 => 7,  56 => 6,  52 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, { attr: { class: 'form-glass' } }) }}
  <div class=\"row g-3\">

    <div class=\"col-md-6\">
      {{ form_label(form.title, 'Asunto') }}
      {{ form_widget(form.title, { attr: { class: 'form-control' } }) }}
      {{ form_errors(form.title) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_label(form.date, 'Fecha') }}
      {{ form_widget(form.date, { attr: { class: 'form-control' } }) }}
      {{ form_errors(form.date) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_label(form.target_group, 'Dirigido a') }}
      {{ form_widget(form.target_group, { attr: { class: 'form-control' } }) }}
      {{ form_errors(form.target_group) }}
    </div>

    {# Si habilitas 'content' en el FormType:
    <div class=\"col-12\">
      {{ form_label(form.content, 'Contenido') }}
      {{ form_widget(form.content, { attr: { class: 'form-control', rows: 6 } }) }}
      {{ form_errors(form.content) }}
    </div>
    #}

    <div class=\"col-md-6\">
      {{ form_label(form.file_path, 'Archivo adjunto') }}
      {{ form_widget(form.file_path, { attr: { class: 'form-control' } }) }}
      {{ form_errors(form.file_path) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_label(form.created_by, 'Elaboró') }}
      {{ form_widget(form.created_by, { attr: { class: 'form-control' } }) }}
      {{ form_errors(form.created_by) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_label(form.user, 'Usuario relacionado') }}
      {{ form_widget(form.user, { attr: { class: 'form-select' } }) }}
      {{ form_errors(form.user) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_label(form.updated_at, 'Última modificación') }}
      {{ form_widget(form.updated_at, { attr: { class: 'form-control' } }) }}
      {{ form_errors(form.updated_at) }}
    </div>

  </div>

  <div class=\"form-actions mt-3\">
    <button class=\"glass-btn primary\" type=\"submit\">
      <i class=\"bi bi-save\"></i> {{ button_label|default('Guardar') }}
    </button>
  </div>
{{ form_end(form) }}
", "circular/_form.html.twig", "/var/www/html/templates/circular/_form.html.twig");
    }
}
