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

/* oficio/index.html.twig */
class __TwigTemplate_9153394eb6640ae75809fbbd0edaebf4 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "oficio/index.html.twig"));

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

        yield "Oficios";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<div class=\"container-glass\">

  <!-- Título + acciones -->
  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\">Listado de Oficios</h1>

    <div class=\"glass-actions\">
      <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_export");
        yield "\" class=\"glass-btn success\">
        <i class=\"bi bi-download\"></i> Exportar a Excel
      </a>
      <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_template");
        yield "\" class=\"glass-btn\">
        <i class=\"bi bi-filetype-csv\"></i> Plantilla CSV
      </a>
      <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_import");
        yield "\" class=\"glass-btn warning\">
        <i class=\"bi bi-upload\"></i> Importar CSV
      </a>
      <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_new");
        yield "\" class=\"glass-btn primary\">
        <i class=\"bi bi-plus-circle\"></i> Crear nuevo oficio
      </a>
    </div>
  </div>

  <!-- Toolbar (usa tu JS de filtrado) -->
  <div class=\"js-table-wrapper\">
    <div class=\"toolbar js-table-toolbar\">
      <input type=\"text\" class=\"js-search form-input\" placeholder=\"Buscar por título o texto…\">
      <select class=\"js-stage form-select\">
        <option value=\"todos\">Todas las etapas</option>
        <option value=\"sin-etapa\">Sin etapa</option>
      </select>
    </div>

    <!-- Tabla glass + responsive -->
    <div class=\"table-responsive\">
      <table class=\"table-glass js-enhanced-table\">
        <thead>
          <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Dirigido a</th>
            <th>Asunto</th>
            <th>Contenido</th>
            <th>Elaborado por</th>
            <th class=\"text-center\">Acciones</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["oficios"]) || array_key_exists("oficios", $context) ? $context["oficios"] : (function () { throw new RuntimeError('Variable "oficios" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["oficio"]) {
            // line 55
            yield "          ";
            // line 56
            yield "          ";
            $context["row_text"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), ((((((((((((((CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "id", [], "any", false, false, false, 56) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "title", [], "any", false, false, false, 56)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "content", [], "any", false, false, false, 56)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "sender", [], "any", false, false, false, 56)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "recipient", [], "any", false, false, false, 56)) . " ") . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "date", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "date", [], "any", false, false, false, 56), "Y-m-d H:i")) : (""))) . " ") . (((CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "filePath", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "filePath", [], "any", false, false, false, 56)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "filePath", [], "any", false, false, false, 56)) : (""))) . " ") . (((CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "createdBy", [], "any", true, true, false, 56) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "createdBy", [], "any", false, false, false, 56)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "createdBy", [], "any", false, false, false, 56)) : (""))));
            // line 57
            yield "
          <tr data-stage=\"sin-etapa\" data-text=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_text"]) || array_key_exists("row_text", $context) ? $context["row_text"] : (function () { throw new RuntimeError('Variable "row_text" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "\" data-asunto=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "title", [], "any", false, false, false, 58)), "html", null, true);
            yield "\">
            <td data-label=\"#\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "id", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
            <td data-label=\"Fecha\">";
            // line 60
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "date", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "date", [], "any", false, false, false, 60), "d-m-Y"), "html", null, true)) : ("—"));
            yield "</td>
            <td data-label=\"Dirigido a\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "recipient", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "recipient", [], "any", false, false, false, 61), "—")) : ("—")), "html", null, true);
            yield "</td>
            <td data-label=\"Asunto\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "title", [], "any", true, true, false, 62)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "title", [], "any", false, false, false, 62), "—")) : ("—")), "html", null, true);
            yield "</td>
            <td data-label=\"Contenido\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "content", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "content", [], "any", false, false, false, 63), "—")) : ("—")), "html", null, true);
            yield "</td>
            <td data-label=\"Elaborado por\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "sender", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "sender", [], "any", false, false, false, 64), "—")) : ("—")), "html", null, true);
            yield "</td>
            <td data-label=\"Acciones\" class=\"text-center\">
              <a href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm\" title=\"Ver\">
                <i class=\"bi bi-eye\"></i>
              </a>
              <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["oficio"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning btn-sm\" title=\"Editar\">
                <i class=\"bi bi-pencil-square\"></i>
              </a>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 74
        if (!$context['_iterated']) {
            // line 75
            yield "          <tr>
            <td colspan=\"7\" class=\"text-center text-muted py-4\">No hay oficios registrados</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oficio'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "        </tbody>
      </table>
    </div>

    <div class=\"js-counter table-counter\">&nbsp;</div>
  </div>

  <!-- Botón flotante (opcional) -->
  <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_new");
        yield "\" class=\"glass-btn primary float-btn\">
    <i class=\"bi bi-plus-lg\"></i> Nuevo oficio
  </a>
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
        return "oficio/index.html.twig";
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
        return array (  244 => 87,  234 => 79,  225 => 75,  223 => 74,  213 => 69,  207 => 66,  202 => 64,  198 => 63,  194 => 62,  190 => 61,  186 => 60,  182 => 59,  176 => 58,  173 => 57,  170 => 56,  168 => 55,  163 => 54,  129 => 23,  123 => 20,  117 => 17,  111 => 14,  102 => 7,  92 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Oficios{% endblock %}

{% block stylesheets %}{% endblock %}
{% block body %}
<div class=\"container-glass\">

  <!-- Título + acciones -->
  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\">Listado de Oficios</h1>

    <div class=\"glass-actions\">
      <a href=\"{{ path('app_oficio_export') }}\" class=\"glass-btn success\">
        <i class=\"bi bi-download\"></i> Exportar a Excel
      </a>
      <a href=\"{{ path('app_oficio_template') }}\" class=\"glass-btn\">
        <i class=\"bi bi-filetype-csv\"></i> Plantilla CSV
      </a>
      <a href=\"{{ path('app_oficio_import') }}\" class=\"glass-btn warning\">
        <i class=\"bi bi-upload\"></i> Importar CSV
      </a>
      <a href=\"{{ path('app_oficio_new') }}\" class=\"glass-btn primary\">
        <i class=\"bi bi-plus-circle\"></i> Crear nuevo oficio
      </a>
    </div>
  </div>

  <!-- Toolbar (usa tu JS de filtrado) -->
  <div class=\"js-table-wrapper\">
    <div class=\"toolbar js-table-toolbar\">
      <input type=\"text\" class=\"js-search form-input\" placeholder=\"Buscar por título o texto…\">
      <select class=\"js-stage form-select\">
        <option value=\"todos\">Todas las etapas</option>
        <option value=\"sin-etapa\">Sin etapa</option>
      </select>
    </div>

    <!-- Tabla glass + responsive -->
    <div class=\"table-responsive\">
      <table class=\"table-glass js-enhanced-table\">
        <thead>
          <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Dirigido a</th>
            <th>Asunto</th>
            <th>Contenido</th>
            <th>Elaborado por</th>
            <th class=\"text-center\">Acciones</th>
          </tr>
        </thead>
        <tbody>
        {% for oficio in oficios %}
          {# texto indexable para tu buscador #}
          {% set row_text = (oficio.id ~ ' ' ~ oficio.title ~ ' ' ~ oficio.content ~ ' ' ~ oficio.sender ~ ' ' ~ oficio.recipient ~ ' ' ~ (oficio.date ? oficio.date|date('Y-m-d H:i') : '') ~ ' ' ~ (oficio.filePath ?? '') ~ ' ' ~ (oficio.createdBy ?? ''))|lower %}

          <tr data-stage=\"sin-etapa\" data-text=\"{{ row_text }}\" data-asunto=\"{{ oficio.title|lower }}\">
            <td data-label=\"#\">{{ oficio.id }}</td>
            <td data-label=\"Fecha\">{{ oficio.date ? oficio.date|date('d-m-Y') : '—' }}</td>
            <td data-label=\"Dirigido a\">{{ oficio.recipient|default('—') }}</td>
            <td data-label=\"Asunto\">{{ oficio.title|default('—') }}</td>
            <td data-label=\"Contenido\">{{ oficio.content|default('—') }}</td>
            <td data-label=\"Elaborado por\">{{ oficio.sender|default('—') }}</td>
            <td data-label=\"Acciones\" class=\"text-center\">
              <a href=\"{{ path('app_oficio_show', {'id': oficio.id}) }}\" class=\"btn btn-outline-primary btn-sm\" title=\"Ver\">
                <i class=\"bi bi-eye\"></i>
              </a>
              <a href=\"{{ path('app_oficio_edit', {'id': oficio.id}) }}\" class=\"btn btn-outline-warning btn-sm\" title=\"Editar\">
                <i class=\"bi bi-pencil-square\"></i>
              </a>
            </td>
          </tr>
        {% else %}
          <tr>
            <td colspan=\"7\" class=\"text-center text-muted py-4\">No hay oficios registrados</td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>

    <div class=\"js-counter table-counter\">&nbsp;</div>
  </div>

  <!-- Botón flotante (opcional) -->
  <a href=\"{{ path('app_oficio_new') }}\" class=\"glass-btn primary float-btn\">
    <i class=\"bi bi-plus-lg\"></i> Nuevo oficio
  </a>
</div>
{% endblock %}
", "oficio/index.html.twig", "/var/www/html/templates/oficio/index.html.twig");
    }
}
