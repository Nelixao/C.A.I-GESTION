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

/* circular/index.html.twig */
class __TwigTemplate_12869ca3f87b8d57baa6c0c0302db730 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "circular/index.html.twig"));

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

        yield "Circulares";
        
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

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "<div class=\"container-glass\">
  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\">Listado de Circulares</h1>

    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_circular_new");
        yield "\" class=\"glass-btn primary mt-3 mt-md-0\">
      <i class=\"bi bi-plus-circle\"></i> Nueva Circular
    </a>
  </div>

  <div class=\"js-table-wrapper\">
    <div class=\"toolbar js-table-toolbar\">
      <input type=\"text\" class=\"js-search form-input\" placeholder=\"Buscar en la tabla...\">
      <select class=\"js-stage form-select\">
        <option value=\"todos\">Todas las etapas</option>
        <option value=\"no-revisado\">No revisado</option>
        <option value=\"pendiente\">Pendiente</option>
        <option value=\"terminado\">Terminado</option>
      </select>
    </div>

    <div class=\"table-responsive\">
      <table class=\"table-glass js-enhanced-table\">
        <thead>
          <tr>
            <th>FOLIO</th>
            <th>FECHA</th>
            <th>DIRIGIDO A</th>
            <th>ASUNTO</th>
            <th>ELABORÓ</th>
            <th>ESTADO</th>
            <th>ARCHIVO</th>
            <th class=\"text-center\">ACCIÓN</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["circulars"]) || array_key_exists("circulars", $context) ? $context["circulars"] : (function () { throw new RuntimeError('Variable "circulars" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["circular"]) {
            // line 44
            yield "            ";
            $context["estado"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "status", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "status", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "status", [], "any", false, false, false, 44)) : ("no-revisado")));
            // line 45
            yield "            ";
            $context["row_text"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), ((((((((((((CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "id", [], "any", false, false, false, 45) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "title", [], "any", false, false, false, 45)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "content", [], "any", false, false, false, 45)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "targetGroup", [], "any", false, false, false, 45)) . " ") . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "date", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "date", [], "any", false, false, false, 45), "Y-m-d")) : (""))) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "filePath", [], "any", false, false, false, 45)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "createdBy", [], "any", false, false, false, 45)));
            // line 46
            yield "
            <tr data-stage=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["estado"]) || array_key_exists("estado", $context) ? $context["estado"] : (function () { throw new RuntimeError('Variable "estado" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "\" data-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_text"]) || array_key_exists("row_text", $context) ? $context["row_text"] : (function () { throw new RuntimeError('Variable "row_text" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "\" data-asunto=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "title", [], "any", false, false, false, 47)), "html", null, true);
            yield "\">
              <td data-label=\"Folio\">#";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
              <td data-label=\"Fecha\">";
            // line 49
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "date", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "date", [], "any", false, false, false, 49), "d-m-Y"), "html", null, true)) : (""));
            yield "</td>
              <td data-label=\"Dirigido a\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "targetGroup", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "targetGroup", [], "any", false, false, false, 50), "—")) : ("—")), "html", null, true);
            yield "</td>
              <td data-label=\"Asunto\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "title", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "title", [], "any", false, false, false, 51), "—")) : ("—")), "html", null, true);
            yield "</td>
              <td data-label=\"Elaboró\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "createdBy", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "createdBy", [], "any", false, false, false, 52), "—")) : ("—")), "html", null, true);
            yield "</td>

              <td data-label=\"Estado\">
                <span class=\"pill-badge ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["estado"]) || array_key_exists("estado", $context) ? $context["estado"] : (function () { throw new RuntimeError('Variable "estado" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["estado"]) || array_key_exists("estado", $context) ? $context["estado"] : (function () { throw new RuntimeError('Variable "estado" does not exist.', 55, $this->source); })())), "html", null, true);
            yield "</span>
              </td>

              <td data-label=\"Archivo\">
                ";
            // line 59
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "filePath", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 60
                yield "                  <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "filePath", [], "any", false, false, false, 60)), "html", null, true);
                yield "\" target=\"_blank\" class=\"file-link\">Ver archivo</a>
                ";
            } else {
                // line 62
                yield "                  <span class=\"text-muted\">—</span>
                ";
            }
            // line 64
            yield "              </td>

              <td data-label=\"Acción\" class=\"text-center\">
                <a href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_circular_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\" title=\"Ver\">
                  <i class=\"bi bi-eye\"></i>
                </a>
                <a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_circular_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["circular"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning\" title=\"Editar\">
                  <i class=\"bi bi-pencil-square\"></i>
                </a>
              </td>
            </tr>
          ";
            $context['_iterated'] = true;
        }
        // line 75
        if (!$context['_iterated']) {
            // line 76
            yield "            <tr>
              <td colspan=\"8\" class=\"text-center text-muted py-4\">Sin información</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['circular'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "        </tbody>
      </table>
    </div>

    <div class=\"js-counter table-counter\">&nbsp;</div>
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
        return "circular/index.html.twig";
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
        return array (  239 => 80,  230 => 76,  228 => 75,  218 => 70,  212 => 67,  207 => 64,  203 => 62,  197 => 60,  195 => 59,  186 => 55,  180 => 52,  176 => 51,  172 => 50,  168 => 49,  164 => 48,  156 => 47,  153 => 46,  150 => 45,  147 => 44,  142 => 43,  108 => 12,  102 => 8,  92 => 7,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Circulares{% endblock %}

{% block stylesheets %}{% endblock %}

{% block body %}
<div class=\"container-glass\">
  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\">Listado de Circulares</h1>

    <a href=\"{{ path('app_circular_new') }}\" class=\"glass-btn primary mt-3 mt-md-0\">
      <i class=\"bi bi-plus-circle\"></i> Nueva Circular
    </a>
  </div>

  <div class=\"js-table-wrapper\">
    <div class=\"toolbar js-table-toolbar\">
      <input type=\"text\" class=\"js-search form-input\" placeholder=\"Buscar en la tabla...\">
      <select class=\"js-stage form-select\">
        <option value=\"todos\">Todas las etapas</option>
        <option value=\"no-revisado\">No revisado</option>
        <option value=\"pendiente\">Pendiente</option>
        <option value=\"terminado\">Terminado</option>
      </select>
    </div>

    <div class=\"table-responsive\">
      <table class=\"table-glass js-enhanced-table\">
        <thead>
          <tr>
            <th>FOLIO</th>
            <th>FECHA</th>
            <th>DIRIGIDO A</th>
            <th>ASUNTO</th>
            <th>ELABORÓ</th>
            <th>ESTADO</th>
            <th>ARCHIVO</th>
            <th class=\"text-center\">ACCIÓN</th>
          </tr>
        </thead>
        <tbody>
          {% for circular in circulars %}
            {% set estado = (circular.status ?? 'no-revisado')|lower %}
            {% set row_text = (circular.id ~ ' ' ~ circular.title ~ ' ' ~ circular.content ~ ' ' ~ circular.targetGroup ~ ' ' ~ (circular.date ? circular.date|date('Y-m-d') : '') ~ ' ' ~ circular.filePath ~ ' ' ~ circular.createdBy)|lower %}

            <tr data-stage=\"{{ estado }}\" data-text=\"{{ row_text }}\" data-asunto=\"{{ circular.title|lower }}\">
              <td data-label=\"Folio\">#{{ circular.id }}</td>
              <td data-label=\"Fecha\">{{ circular.date ? circular.date|date('d-m-Y') : '' }}</td>
              <td data-label=\"Dirigido a\">{{ circular.targetGroup|default('—') }}</td>
              <td data-label=\"Asunto\">{{ circular.title|default('—') }}</td>
              <td data-label=\"Elaboró\">{{ circular.createdBy|default('—') }}</td>

              <td data-label=\"Estado\">
                <span class=\"pill-badge {{ estado }}\">{{ estado|capitalize }}</span>
              </td>

              <td data-label=\"Archivo\">
                {% if circular.filePath %}
                  <a href=\"{{ asset(circular.filePath) }}\" target=\"_blank\" class=\"file-link\">Ver archivo</a>
                {% else %}
                  <span class=\"text-muted\">—</span>
                {% endif %}
              </td>

              <td data-label=\"Acción\" class=\"text-center\">
                <a href=\"{{ path('app_circular_show', {'id': circular.id}) }}\" class=\"btn btn-outline-primary\" title=\"Ver\">
                  <i class=\"bi bi-eye\"></i>
                </a>
                <a href=\"{{ path('app_circular_edit', {'id': circular.id}) }}\" class=\"btn btn-outline-warning\" title=\"Editar\">
                  <i class=\"bi bi-pencil-square\"></i>
                </a>
              </td>
            </tr>
          {% else %}
            <tr>
              <td colspan=\"8\" class=\"text-center text-muted py-4\">Sin información</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>

    <div class=\"js-counter table-counter\">&nbsp;</div>
  </div>
</div>
{% endblock %}

", "circular/index.html.twig", "/var/www/html/templates/circular/index.html.twig");
    }
}
