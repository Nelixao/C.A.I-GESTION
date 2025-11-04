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

/* correspondence/_form.html.twig */
class __TwigTemplate_cef7b5a650e6981dd3744362420e0356 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "correspondence/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "form-glass"]]);
        yield "
  <div class=\"row g-3\">
    <div class=\"col-md-6\">
      ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "subject", [], "any", false, false, false, 4), 'row');
        yield "
    </div>
    <div class=\"col-md-6\">
      ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "date", [], "any", false, false, false, 7), 'row');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "sender", [], "any", false, false, false, 11), 'row');
        yield "
    </div>
    <div class=\"col-md-6\">
      ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "receiver", [], "any", false, false, false, 14), 'row');
        yield "
    </div>

    <div class=\"col-12\">
      ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "body", [], "any", false, false, false, 18), 'row');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "file_path", [], "any", false, false, false, 22), 'row');
        yield "
    </div>

    <div class=\"col-md-6\">
      ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), 'row');
        yield "
    </div>

    ";
        // line 30
        yield "    <div class=\"col-md-6\">
      ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "created_by", [], "any", false, false, false, 31), 'row');
        yield "
    </div>
    <div class=\"col-md-6\">
      ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "created_at", [], "any", false, false, false, 34), 'row');
        yield "
    </div>
    <div class=\"col-md-6\">
      ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "updated_at", [], "any", false, false, false, 37), 'row');
        yield "
    </div>
  </div>

  <div class=\"form-actions mt-3\">
    <button class=\"glass-btn primary\" type=\"submit\">
      <i class=\"bi bi-save\"></i> ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 43, $this->source); })()), "Guardar")) : ("Guardar")), "html", null, true);
        yield "
    </button>
  </div>
";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
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
        return "correspondence/_form.html.twig";
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
        return array (  127 => 46,  121 => 43,  112 => 37,  106 => 34,  100 => 31,  97 => 30,  91 => 26,  84 => 22,  77 => 18,  70 => 14,  64 => 11,  57 => 7,  51 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, { attr: { class: 'form-glass' } }) }}
  <div class=\"row g-3\">
    <div class=\"col-md-6\">
      {{ form_row(form.subject) }}
    </div>
    <div class=\"col-md-6\">
      {{ form_row(form.date) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_row(form.sender) }}
    </div>
    <div class=\"col-md-6\">
      {{ form_row(form.receiver) }}
    </div>

    <div class=\"col-12\">
      {{ form_row(form.body) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_row(form.file_path) }}
    </div>

    <div class=\"col-md-6\">
      {{ form_row(form.user) }}
    </div>

    {# Solo si decidiste mantenerlos visibles #}
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

  <div class=\"form-actions mt-3\">
    <button class=\"glass-btn primary\" type=\"submit\">
      <i class=\"bi bi-save\"></i> {{ button_label|default('Guardar') }}
    </button>
  </div>
{{ form_end(form) }}
", "correspondence/_form.html.twig", "/var/www/html/templates/correspondence/_form.html.twig");
    }
}
