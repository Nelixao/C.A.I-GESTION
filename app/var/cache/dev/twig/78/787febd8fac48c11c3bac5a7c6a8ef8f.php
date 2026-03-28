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

/* correspondence/index.html.twig */
class __TwigTemplate_d088263a3ba9963d1ca198f3d683dcdb extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "correspondence/index.html.twig"));

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

        yield "Correspondencia";
        
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

  <!-- Encabezado + acciones -->
  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\">Listado de Correspondencia</h1>

    <div class=\"glass-actions\">
      <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correspondence_export");
        yield "\" class=\"glass-btn success\">
        <i class=\"bi bi-download\"></i> Exportar a Excel
      </a>
      <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correspondence_new");
        yield "\" class=\"glass-btn primary\">
        <i class=\"bi bi-plus-circle\"></i> Crear nueva
      </a>
    </div>
  </div>

  <div class=\"js-table-wrapper\">
    <!-- Toolbar de filtros -->
    <div class=\"toolbar js-table-toolbar\">
      <input type=\"text\" class=\"js-search form-input\" placeholder=\"Buscar en la tabla...\">
      <select class=\"js-stage form-select\">
        <option value=\"todos\">Todas las etapas</option>
        <option value=\"sin-etapa\">Sin etapa</option>
      </select>
    </div>

    <!-- Tabla -->
    <div class=\"table-responsive\">
      <table class=\"table-glass js-enhanced-table\">
        <thead>
          <tr>
            <th>ID</th>
            <th>ASUNTO</th>
            <th>MENSAJE</th>
            <th>REMITENTE</th>
            <th>DESTINATARIO</th>
            <th>FECHA</th>
            <th>ARCHIVO</th>
            <th>CREADO POR</th>
            <th>CREADO EL</th>
            <th>ACTUALIZADO EL</th>
            <th class=\"text-center\">ACCIONES</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["correspondences"]) || array_key_exists("correspondences", $context) ? $context["correspondences"] : (function () { throw new RuntimeError('Variable "correspondences" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["correspondence"]) {
            // line 53
            yield "          ";
            $context["row_text"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), ((((((((((((((CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "id", [], "any", false, false, false, 53) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "subject", [], "any", false, false, false, 53)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "body", [], "any", false, false, false, 53)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "sender", [], "any", false, false, false, 53)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "receiver", [], "any", false, false, false, 53)) . " ") . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "date", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "date", [], "any", false, false, false, 53), "Y-m-d H:i")) : (""))) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "filePath", [], "any", false, false, false, 53)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "createdBy", [], "any", false, false, false, 53)));
            // line 54
            yield "          <tr data-stage=\"sin-etapa\" data-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_text"]) || array_key_exists("row_text", $context) ? $context["row_text"] : (function () { throw new RuntimeError('Variable "row_text" does not exist.', 54, $this->source); })()), "html", null, true);
            yield "\" data-asunto=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "subject", [], "any", false, false, false, 54)), "html", null, true);
            yield "\">
            <td data-label=\"ID\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "id", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
            <td data-label=\"Asunto\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "subject", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "subject", [], "any", false, false, false, 56), "—")) : ("—")), "html", null, true);
            yield "</td>
            <td data-label=\"Mensaje\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "body", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "body", [], "any", false, false, false, 57), "—")) : ("—")), "html", null, true);
            yield "</td>
            <td data-label=\"Remitente\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "sender", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "sender", [], "any", false, false, false, 58), "—")) : ("—")), "html", null, true);
            yield "</td>
            <td data-label=\"Destinatario\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "receiver", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "receiver", [], "any", false, false, false, 59), "—")) : ("—")), "html", null, true);
            yield "</td>
            <td data-label=\"Fecha\">";
            // line 60
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "date", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "date", [], "any", false, false, false, 60), "Y-m-d H:i"), "html", null, true)) : (""));
            yield "</td>
            <td data-label=\"Archivo\">
              ";
            // line 62
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "filePath", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "filePath", [], "any", false, false, false, 63)), "html", null, true);
                yield "\" target=\"_blank\" class=\"file-link\">Ver archivo</a>
              ";
            } else {
                // line 65
                yield "                <span class=\"text-muted\">—</span>
              ";
            }
            // line 67
            yield "            </td>
            <td data-label=\"Creado por\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "createdBy", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "createdBy", [], "any", false, false, false, 68), "—")) : ("—")), "html", null, true);
            yield "</td>
            <td data-label=\"Creado el\">";
            // line 69
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "createdAt", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "createdAt", [], "any", false, false, false, 69), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
            <td data-label=\"Actualizado el\">";
            // line 70
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "updatedAt", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "updatedAt", [], "any", false, false, false, 70), "Y-m-d H:i"), "html", null, true)) : (""));
            yield "</td>
            <td data-label=\"Acciones\" class=\"text-center\">
              <a href=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correspondence_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm\" title=\"Ver\">
                <i class=\"bi bi-eye\"></i>
              </a>
              <a href=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correspondence_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["correspondence"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning btn-sm\" title=\"Editar\">
                <i class=\"bi bi-pencil-square\"></i>
              </a>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 80
        if (!$context['_iterated']) {
            // line 81
            yield "          <tr>
            <td colspan=\"11\" class=\"text-center text-muted py-4\">SIN INFORMACIÓN</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['correspondence'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "        </tbody>
      </table>
    </div>

    <div class=\"js-counter table-counter\">&nbsp;</div>
  </div>

  <!-- Botón flotante principal (opcional) -->
  <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correspondence_new");
        yield "\" class=\"glass-btn primary float-btn\">
    <i class=\"bi bi-plus-lg\"></i> Crear nueva
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
        return "correspondence/index.html.twig";
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
        return array (  260 => 93,  250 => 85,  241 => 81,  239 => 80,  229 => 75,  223 => 72,  218 => 70,  214 => 69,  210 => 68,  207 => 67,  203 => 65,  197 => 63,  195 => 62,  190 => 60,  186 => 59,  182 => 58,  178 => 57,  174 => 56,  170 => 55,  163 => 54,  160 => 53,  155 => 52,  117 => 17,  111 => 14,  102 => 7,  92 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Correspondencia{% endblock %}

{% block stylesheets %}{% endblock %}
{% block body %}
<div class=\"container-glass\">

  <!-- Encabezado + acciones -->
  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\">Listado de Correspondencia</h1>

    <div class=\"glass-actions\">
      <a href=\"{{ path('app_correspondence_export') }}\" class=\"glass-btn success\">
        <i class=\"bi bi-download\"></i> Exportar a Excel
      </a>
      <a href=\"{{ path('app_correspondence_new') }}\" class=\"glass-btn primary\">
        <i class=\"bi bi-plus-circle\"></i> Crear nueva
      </a>
    </div>
  </div>

  <div class=\"js-table-wrapper\">
    <!-- Toolbar de filtros -->
    <div class=\"toolbar js-table-toolbar\">
      <input type=\"text\" class=\"js-search form-input\" placeholder=\"Buscar en la tabla...\">
      <select class=\"js-stage form-select\">
        <option value=\"todos\">Todas las etapas</option>
        <option value=\"sin-etapa\">Sin etapa</option>
      </select>
    </div>

    <!-- Tabla -->
    <div class=\"table-responsive\">
      <table class=\"table-glass js-enhanced-table\">
        <thead>
          <tr>
            <th>ID</th>
            <th>ASUNTO</th>
            <th>MENSAJE</th>
            <th>REMITENTE</th>
            <th>DESTINATARIO</th>
            <th>FECHA</th>
            <th>ARCHIVO</th>
            <th>CREADO POR</th>
            <th>CREADO EL</th>
            <th>ACTUALIZADO EL</th>
            <th class=\"text-center\">ACCIONES</th>
          </tr>
        </thead>
        <tbody>
        {% for correspondence in correspondences %}
          {% set row_text = (correspondence.id ~ ' ' ~ correspondence.subject ~ ' ' ~ correspondence.body ~ ' ' ~ correspondence.sender ~ ' ' ~ correspondence.receiver ~ ' ' ~ (correspondence.date ? correspondence.date|date('Y-m-d H:i') : '') ~ ' ' ~ correspondence.filePath ~ ' ' ~ correspondence.createdBy)|lower %}
          <tr data-stage=\"sin-etapa\" data-text=\"{{ row_text }}\" data-asunto=\"{{ correspondence.subject|lower }}\">
            <td data-label=\"ID\">{{ correspondence.id }}</td>
            <td data-label=\"Asunto\">{{ correspondence.subject|default('—') }}</td>
            <td data-label=\"Mensaje\">{{ correspondence.body|default('—') }}</td>
            <td data-label=\"Remitente\">{{ correspondence.sender|default('—') }}</td>
            <td data-label=\"Destinatario\">{{ correspondence.receiver|default('—') }}</td>
            <td data-label=\"Fecha\">{{ correspondence.date ? correspondence.date|date('Y-m-d H:i') : '' }}</td>
            <td data-label=\"Archivo\">
              {% if correspondence.filePath %}
                <a href=\"{{ asset(correspondence.filePath) }}\" target=\"_blank\" class=\"file-link\">Ver archivo</a>
              {% else %}
                <span class=\"text-muted\">—</span>
              {% endif %}
            </td>
            <td data-label=\"Creado por\">{{ correspondence.createdBy|default('—') }}</td>
            <td data-label=\"Creado el\">{{ correspondence.createdAt ? correspondence.createdAt|date('Y-m-d') : '' }}</td>
            <td data-label=\"Actualizado el\">{{ correspondence.updatedAt ? correspondence.updatedAt|date('Y-m-d H:i') : '' }}</td>
            <td data-label=\"Acciones\" class=\"text-center\">
              <a href=\"{{ path('app_correspondence_show', {'id': correspondence.id}) }}\" class=\"btn btn-outline-primary btn-sm\" title=\"Ver\">
                <i class=\"bi bi-eye\"></i>
              </a>
              <a href=\"{{ path('app_correspondence_edit', {'id': correspondence.id}) }}\" class=\"btn btn-outline-warning btn-sm\" title=\"Editar\">
                <i class=\"bi bi-pencil-square\"></i>
              </a>
            </td>
          </tr>
        {% else %}
          <tr>
            <td colspan=\"11\" class=\"text-center text-muted py-4\">SIN INFORMACIÓN</td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>

    <div class=\"js-counter table-counter\">&nbsp;</div>
  </div>

  <!-- Botón flotante principal (opcional) -->
  <a href=\"{{ path('app_correspondence_new') }}\" class=\"glass-btn primary float-btn\">
    <i class=\"bi bi-plus-lg\"></i> Crear nueva
  </a>
</div>
{% endblock %}
", "correspondence/index.html.twig", "/var/www/html/templates/correspondence/index.html.twig");
    }
}
