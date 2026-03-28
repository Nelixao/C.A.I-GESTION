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

/* scanner/index.html.twig */
class __TwigTemplate_66366d9f25ab867cf246d42a2f1688da extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "scanner/index.html.twig"));

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

        yield "Escáner";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "<div class=\"container-glass js-table-wrapper\">

  <!-- Título + acciones -->
  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\">Documentos Escaneados</h1>
 
    <div class=\"glass-actions\">
      <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_scanner_export");
        yield "\" class=\"glass-btn success\">
        <i class=\"bi bi-download\"></i> Exportar a Excel
      </a>
      <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_scanner_new");
        yield "\" class=\"glass-btn primary\">
        <i class=\"bi bi-plus-circle\"></i> Subir escaneo
      </a>
    </div>
  </div>

  <!-- Toolbar (usa tu JS de filtrado) -->
  <div class=\"toolbar js-table-toolbar\">
    <input type=\"text\" class=\"js-search form-input\" placeholder=\"Buscar en la tabla…\">
    <select class=\"js-stage form-select\">
      <option value=\"todos\">Todas las etapas</option>
      <option value=\"finalizado\">Finalizado</option>
      <option value=\"pendiente\">Pendiente</option>
      <option value=\"error\">Error</option>
    </select>
  </div>

  <!-- Tabla glass + responsive -->
  <div class=\"table-responsive\">
    <table class=\"table-glass js-enhanced-table\">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Origen</th>
          <th>ID Origen</th>
          <th>Archivo</th>
          <th>Tipo</th>
          <th>Tamaño</th>
          <th>Estado</th>
          <th>Creado</th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["scanners"]) || array_key_exists("scanners", $context) ? $context["scanners"] : (function () { throw new RuntimeError('Variable "scanners" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["scan"]) {
            // line 50
            yield "        ";
            $context["estado"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "status", [], "any", true, true, false, 50) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "status", [], "any", false, false, false, 50)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "status", [], "any", false, false, false, 50)) : ("pendiente")));
            // line 51
            yield "        ";
            $context["row_text"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), ((((((((((((((((CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "id", [], "any", false, false, false, 51) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "name", [], "any", false, false, false, 51)) . " ") . (((CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "sourceType", [], "any", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "sourceType", [], "any", false, false, false, 51)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "sourceType", [], "any", false, false, false, 51)) : (""))) . " ") . (((CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "sourceId", [], "any", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "sourceId", [], "any", false, false, false, 51)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "sourceId", [], "any", false, false, false, 51)) : (""))) . " ") . (((CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "filePath", [], "any", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "filePath", [], "any", false, false, false, 51)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "filePath", [], "any", false, false, false, 51)) : (""))) . " ") . (((CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "mimeType", [], "any", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "mimeType", [], "any", false, false, false, 51)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "mimeType", [], "any", false, false, false, 51)) : (""))) . " ") . (((CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "size", [], "any", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "size", [], "any", false, false, false, 51)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "size", [], "any", false, false, false, 51)) : (""))) . " ") . (((CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "status", [], "any", true, true, false, 51) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "status", [], "any", false, false, false, 51)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "status", [], "any", false, false, false, 51)) : (""))) . " ") . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "createdAt", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "createdAt", [], "any", false, false, false, 51), "Y-m-d H:i")) : (""))));
            // line 52
            yield "
        <tr data-stage=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["estado"]) || array_key_exists("estado", $context) ? $context["estado"] : (function () { throw new RuntimeError('Variable "estado" does not exist.', 53, $this->source); })()), "html", null, true);
            yield "\" data-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["row_text"]) || array_key_exists("row_text", $context) ? $context["row_text"] : (function () { throw new RuntimeError('Variable "row_text" does not exist.', 53, $this->source); })()), "html", null, true);
            yield "\" data-asunto=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "name", [], "any", false, false, false, 53)), "html", null, true);
            yield "\">
          <td data-label=\"ID\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
          <td data-label=\"Nombre\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "name", [], "any", true, true, false, 55)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "name", [], "any", false, false, false, 55), "—")) : ("—")), "html", null, true);
            yield "</td>
          <td data-label=\"Origen\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "sourceType", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "sourceType", [], "any", false, false, false, 56), "—")) : ("—")), "html", null, true);
            yield "</td>
          <td data-label=\"ID Origen\">";
            // line 57
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "sourceId", [], "any", true, true, false, 57) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "sourceId", [], "any", false, false, false, 57)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "sourceId", [], "any", false, false, false, 57), "html", null, true)) : ("—"));
            yield "</td>
          <td data-label=\"Archivo\">
            ";
            // line 59
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "filePath", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 60
                yield "              <a class=\"file-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "filePath", [], "any", false, false, false, 60)), "html", null, true);
                yield "\" target=\"_blank\">Ver archivo</a>
            ";
            } else {
                // line 62
                yield "              <span class=\"text-muted\">—</span>
            ";
            }
            // line 64
            yield "          </td>
          <td data-label=\"Tipo\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "mimeType", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "mimeType", [], "any", false, false, false, 65), "—")) : ("—")), "html", null, true);
            yield "</td>
          <td data-label=\"Tamaño\">
            ";
            // line 67
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "size", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "              ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "size", [], "any", false, false, false, 68) / 1024), 1, ".", ","), "html", null, true);
                yield " KB
            ";
            } else {
                // line 70
                yield "              —
            ";
            }
            // line 72
            yield "          </td>
          <td data-label=\"Estado\">
            <span class=\"pill-badge\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["estado"]) || array_key_exists("estado", $context) ? $context["estado"] : (function () { throw new RuntimeError('Variable "estado" does not exist.', 74, $this->source); })())), "html", null, true);
            yield "</span>
          </td>
          <td data-label=\"Creado\">";
            // line 76
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "createdAt", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["scan"], "createdAt", [], "any", false, false, false, 76), "Y-m-d H:i"), "html", null, true)) : (""));
            yield "</td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        // line 78
        if (!$context['_iterated']) {
            // line 79
            yield "        <tr>
          <td colspan=\"9\" class=\"text-center text-muted py-4\">Sin información</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['scan'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "      </tbody>
    </table>
  </div>

  <div class=\"js-counter table-counter\">&nbsp;</div>
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
        return "scanner/index.html.twig";
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
        return array (  235 => 83,  226 => 79,  224 => 78,  217 => 76,  212 => 74,  208 => 72,  204 => 70,  198 => 68,  196 => 67,  191 => 65,  188 => 64,  184 => 62,  178 => 60,  176 => 59,  171 => 57,  167 => 56,  163 => 55,  159 => 54,  151 => 53,  148 => 52,  145 => 51,  142 => 50,  137 => 49,  100 => 15,  94 => 12,  85 => 5,  75 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Escáner{% endblock %}
{% block body %}
<div class=\"container-glass js-table-wrapper\">

  <!-- Título + acciones -->
  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\">Documentos Escaneados</h1>
 
    <div class=\"glass-actions\">
      <a href=\"{{ path('app_scanner_export') }}\" class=\"glass-btn success\">
        <i class=\"bi bi-download\"></i> Exportar a Excel
      </a>
      <a href=\"{{ path('app_scanner_new') }}\" class=\"glass-btn primary\">
        <i class=\"bi bi-plus-circle\"></i> Subir escaneo
      </a>
    </div>
  </div>

  <!-- Toolbar (usa tu JS de filtrado) -->
  <div class=\"toolbar js-table-toolbar\">
    <input type=\"text\" class=\"js-search form-input\" placeholder=\"Buscar en la tabla…\">
    <select class=\"js-stage form-select\">
      <option value=\"todos\">Todas las etapas</option>
      <option value=\"finalizado\">Finalizado</option>
      <option value=\"pendiente\">Pendiente</option>
      <option value=\"error\">Error</option>
    </select>
  </div>

  <!-- Tabla glass + responsive -->
  <div class=\"table-responsive\">
    <table class=\"table-glass js-enhanced-table\">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Origen</th>
          <th>ID Origen</th>
          <th>Archivo</th>
          <th>Tipo</th>
          <th>Tamaño</th>
          <th>Estado</th>
          <th>Creado</th>
        </tr>
      </thead>
      <tbody>
      {% for scan in scanners %}
        {% set estado = (scan.status ?? 'pendiente')|lower %}
        {% set row_text = (scan.id ~ ' ' ~ scan.name ~ ' ' ~ (scan.sourceType ?? '') ~ ' ' ~ (scan.sourceId ?? '') ~ ' ' ~ (scan.filePath ?? '') ~ ' ' ~ (scan.mimeType ?? '') ~ ' ' ~ (scan.size ?? '') ~ ' ' ~ (scan.status ?? '') ~ ' ' ~ (scan.createdAt ? scan.createdAt|date('Y-m-d H:i') : ''))|lower %}

        <tr data-stage=\"{{ estado }}\" data-text=\"{{ row_text }}\" data-asunto=\"{{ scan.name|lower }}\">
          <td data-label=\"ID\">{{ scan.id }}</td>
          <td data-label=\"Nombre\">{{ scan.name|default('—') }}</td>
          <td data-label=\"Origen\">{{ scan.sourceType|default('—') }}</td>
          <td data-label=\"ID Origen\">{{ scan.sourceId ?? '—' }}</td>
          <td data-label=\"Archivo\">
            {% if scan.filePath %}
              <a class=\"file-link\" href=\"{{ asset(scan.filePath) }}\" target=\"_blank\">Ver archivo</a>
            {% else %}
              <span class=\"text-muted\">—</span>
            {% endif %}
          </td>
          <td data-label=\"Tipo\">{{ scan.mimeType|default('—') }}</td>
          <td data-label=\"Tamaño\">
            {% if scan.size %}
              {{ (scan.size/1024)|number_format(1, '.', ',') }} KB
            {% else %}
              —
            {% endif %}
          </td>
          <td data-label=\"Estado\">
            <span class=\"pill-badge\">{{ estado|capitalize }}</span>
          </td>
          <td data-label=\"Creado\">{{ scan.createdAt ? scan.createdAt|date('Y-m-d H:i') : '' }}</td>
        </tr>
      {% else %}
        <tr>
          <td colspan=\"9\" class=\"text-center text-muted py-4\">Sin información</td>
        </tr>
      {% endfor %}
      </tbody>
    </table>
  </div>

  <div class=\"js-counter table-counter\">&nbsp;</div>
</div>
{% endblock %}
", "scanner/index.html.twig", "/var/www/html/templates/scanner/index.html.twig");
    }
}
