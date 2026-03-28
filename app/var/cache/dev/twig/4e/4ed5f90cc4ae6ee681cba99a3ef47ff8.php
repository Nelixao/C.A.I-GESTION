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

/* oficio/import.html.twig */
class __TwigTemplate_9936d599657a2974683ff2b9a1802ea9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "oficio/import.html.twig"));

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

        yield "Importar Oficios";
        
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
  <h1 class=\"page-title mb-3\">Importar Oficios desde Excel (CSV)</h1>

  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 10
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                yield "      <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
  <div class=\"glass-actions mb-3\">
    <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_template");
        yield "\" class=\"glass-btn success\">
      <i class=\"bi bi-download\"></i> Descargar plantilla CSV
    </a>
    <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_index");
        yield "\" class=\"glass-btn\">
      <i class=\"bi bi-arrow-left\"></i> Volver al listado
    </a>
  </div>

  <div class=\"card p-3 glass\">
    <form method=\"post\" enctype=\"multipart/form-data\">
      <div class=\"mb-3\">
        <label class=\"form-label\">Archivo CSV</label>
        <input type=\"file\" name=\"csv_file\" accept=\".csv\" class=\"form-control\" required>
        <div class=\"form-text\">Abre tu archivo de Excel y guárdalo como CSV (delimitado por comas). Usa la plantilla para los encabezados.</div>
      </div>
      <button class=\"glass-btn primary\" type=\"submit\"><i class=\"bi bi-upload\"></i> Importar</button>
    </form>
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
        return "oficio/import.html.twig";
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
        return array (  126 => 19,  120 => 16,  116 => 14,  110 => 13,  99 => 11,  94 => 10,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Importar Oficios{% endblock %}

{% block body %}
<div class=\"container-glass\">
  <h1 class=\"page-title mb-3\">Importar Oficios desde Excel (CSV)</h1>

  {% for label, messages in app.flashes %}
    {% for message in messages %}
      <div class=\"alert alert-{{ label }}\">{{ message }}</div>
    {% endfor %}
  {% endfor %}

  <div class=\"glass-actions mb-3\">
    <a href=\"{{ path('app_oficio_template') }}\" class=\"glass-btn success\">
      <i class=\"bi bi-download\"></i> Descargar plantilla CSV
    </a>
    <a href=\"{{ path('app_oficio_index') }}\" class=\"glass-btn\">
      <i class=\"bi bi-arrow-left\"></i> Volver al listado
    </a>
  </div>

  <div class=\"card p-3 glass\">
    <form method=\"post\" enctype=\"multipart/form-data\">
      <div class=\"mb-3\">
        <label class=\"form-label\">Archivo CSV</label>
        <input type=\"file\" name=\"csv_file\" accept=\".csv\" class=\"form-control\" required>
        <div class=\"form-text\">Abre tu archivo de Excel y guárdalo como CSV (delimitado por comas). Usa la plantilla para los encabezados.</div>
      </div>
      <button class=\"glass-btn primary\" type=\"submit\"><i class=\"bi bi-upload\"></i> Importar</button>
    </form>
  </div>
</div>
{% endblock %}
", "oficio/import.html.twig", "/var/www/html/templates/oficio/import.html.twig");
    }
}
