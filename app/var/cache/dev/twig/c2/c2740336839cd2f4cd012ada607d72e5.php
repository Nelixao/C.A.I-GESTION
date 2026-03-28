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

/* cisae/index.html.twig */
class __TwigTemplate_a4e0d19abdc0e179709ff8d91c9e73d1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cisae/index.html.twig"));

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

        yield "CISAE — Expedientes";
        
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

  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\"><i class=\"bi bi-exclamation-circle-fill text-danger me-2\"></i>Expedientes CISAE</h1>
    ";
        // line 10
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "    <div class=\"glass-actions\">
      <a href=\"";
            // line 12
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cisae_new");
            yield "\" class=\"glass-btn primary\">
        <i class=\"bi bi-plus-circle\"></i> Nuevo expediente
      </a>
    </div>
    ";
        }
        // line 17
        yield "  </div>

  <div class=\"js-table-wrapper\">
    <div class=\"toolbar js-table-toolbar\">
      <input type=\"text\" class=\"js-search form-input\" placeholder=\"Buscar expediente…\">
      <select class=\"js-stage form-select\">
        <option value=\"todos\">Todos los estados</option>
        <option value=\"abierto\">Abierto</option>
        <option value=\"en_tramite\">En trámite</option>
        <option value=\"cerrado\">Cerrado</option>
      </select>
      <span class=\"js-counter small text-muted ms-auto\"></span>
    </div>

    <div class=\"table-responsive\">
      <table class=\"table-glass js-enhanced-table\">
        <thead>
          <tr>
            <th>Núm. Expediente</th>
            <th>Título</th>
            <th>Área</th>
            <th>Inicio</th>
            <th>Término</th>
            <th>Urgencia</th>
            <th>Estado</th>
            <th class=\"text-center\">Acciones</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cisaes"]) || array_key_exists("cisaes", $context) ? $context["cisaes"] : (function () { throw new RuntimeError('Variable "cisaes" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cisae"]) {
            // line 47
            yield "          ";
            $context["estado_lower"] = Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "estado", [], "any", false, false, false, 47)), ["_" => "", " " => ""]);
            // line 48
            yield "          ";
            $context["hoy"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
            // line 49
            yield "          ";
            $context["diasRestantes"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "fechaTermino", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($this->extensions['Twig\Extension\CoreExtension']->modifyDate($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "fechaTermino", [], "any", false, false, false, 49), "Y-m-d"), "+0 day") - $this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["hoy"]) || array_key_exists("hoy", $context) ? $context["hoy"] : (function () { throw new RuntimeError('Variable "hoy" does not exist.', 49, $this->source); })()), "+0 day")), "days", [], "any", true, true, false, 49) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($this->extensions['Twig\Extension\CoreExtension']->modifyDate($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "fechaTermino", [], "any", false, false, false, 49), "Y-m-d"), "+0 day") - $this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["hoy"]) || array_key_exists("hoy", $context) ? $context["hoy"] : (function () { throw new RuntimeError('Variable "hoy" does not exist.', 49, $this->source); })()), "+0 day")), "days", [], "any", false, false, false, 49)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($this->extensions['Twig\Extension\CoreExtension']->modifyDate($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "fechaTermino", [], "any", false, false, false, 49), "Y-m-d"), "+0 day") - $this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["hoy"]) || array_key_exists("hoy", $context) ? $context["hoy"] : (function () { throw new RuntimeError('Variable "hoy" does not exist.', 49, $this->source); })()), "+0 day")), "days", [], "any", false, false, false, 49)) : (null))) : (null));
            // line 50
            yield "
          <tr data-stage=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["estado_lower"]) || array_key_exists("estado_lower", $context) ? $context["estado_lower"] : (function () { throw new RuntimeError('Variable "estado_lower" does not exist.', 51, $this->source); })()), "html", null, true);
            yield "\"
              data-text=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "numero", [], "any", false, false, false, 52), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "titulo", [], "any", false, false, false, 52), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "area", [], "any", false, false, false, 52), "html", null, true);
            yield "\">
            <td class=\"fw-bold\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "numero", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "titulo", [], "any", false, false, false, 54), 0, 60), "html", null, true);
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "titulo", [], "any", false, false, false, 54)) > 60)) ? ("…") : (""));
            yield "</td>
            <td>";
            // line 55
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "area", [], "any", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "area", [], "any", false, false, false, 55)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "area", [], "any", false, false, false, 55), "html", null, true)) : ("—"));
            yield "</td>
            <td>";
            // line 56
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "fechaInicio", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "fechaInicio", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</td>
            <td>
              ";
            // line 58
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "fechaTermino", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "                <span class=\"";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "fechaTermino", [], "any", false, false, false, 59) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()) && (CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "estado", [], "any", false, false, false, 59) != "CERRADO"))) ? ("text-danger fw-bold") : (""));
                yield "\">
                  ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "fechaTermino", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true);
                yield "
                </span>
              ";
            } else {
                // line 62
                yield "—";
            }
            // line 63
            yield "            </td>
            <td class=\"text-center\">
              ";
            // line 65
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "fechaTermino", [], "any", false, false, false, 65) && (CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "estado", [], "any", false, false, false, 65) != "CERRADO"))) {
                // line 66
                yield "                ";
                $context["diff"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "fechaTermino", [], "any", false, false, false, 66), "timestamp", [], "any", false, false, false, 66) - CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "timestamp", [], "any", false, false, false, 66)) / 86400);
                // line 67
                yield "                ";
                if (((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 67, $this->source); })()) < 0)) {
                    // line 68
                    yield "                  <span class=\"badge bg-danger\"><i class=\"bi bi-exclamation-circle\"></i> Vencido</span>
                ";
                } elseif ((                // line 69
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 69, $this->source); })()) <= 3)) {
                    // line 70
                    yield "                  <span class=\"badge bg-warning text-dark\"><i class=\"bi bi-clock\"></i> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 70, $this->source); })()), 0, "ceil"), "html", null, true);
                    yield "d</span>
                ";
                } else {
                    // line 72
                    yield "                  <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 72, $this->source); })()), 0, "ceil"), "html", null, true);
                    yield "d</span>
                ";
                }
                // line 74
                yield "              ";
            } else {
                // line 75
                yield "                <span class=\"badge bg-secondary\">—</span>
              ";
            }
            // line 77
            yield "            </td>
            <td>
              ";
            // line 79
            $context["badgeClass"] = (((CoreExtension::getAttribute($this->env, $this->source,             // line 80
$context["cisae"], "estado", [], "any", false, false, false, 80) == "ABIERTO")) ? ("badge bg-success-subtle text-success-emphasis") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 81
$context["cisae"], "estado", [], "any", false, false, false, 81) == "EN_TRAMITE")) ? ("badge bg-warning-subtle text-warning-emphasis") : ("badge bg-secondary-subtle text-secondary-emphasis"))));
            // line 83
            yield "              <span class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badgeClass"]) || array_key_exists("badgeClass", $context) ? $context["badgeClass"] : (function () { throw new RuntimeError('Variable "badgeClass" does not exist.', 83, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "estado", [], "any", false, false, false, 83), ["_" => " "]), "html", null, true);
            yield "</span>
            </td>
            <td class=\"text-center\">
              <a href=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cisae_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\"
                 class=\"btn btn-outline-primary btn-sm\" title=\"Ver\">
                <i class=\"bi bi-eye\"></i>
              </a>
              ";
            // line 90
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 91
                yield "              <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cisae_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["cisae"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                yield "\"
                 class=\"btn btn-outline-warning btn-sm\" title=\"Editar\">
                <i class=\"bi bi-pencil-square\"></i>
              </a>
              ";
            }
            // line 96
            yield "            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 98
        if (!$context['_iterated']) {
            // line 99
            yield "          <tr>
            <td colspan=\"8\" class=\"text-center text-muted py-4\">No hay expedientes CISAE registrados</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cisae'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
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
        return "cisae/index.html.twig";
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
        return array (  286 => 103,  277 => 99,  275 => 98,  269 => 96,  260 => 91,  258 => 90,  251 => 86,  242 => 83,  240 => 81,  239 => 80,  238 => 79,  234 => 77,  230 => 75,  227 => 74,  221 => 72,  215 => 70,  213 => 69,  210 => 68,  207 => 67,  204 => 66,  202 => 65,  198 => 63,  195 => 62,  189 => 60,  184 => 59,  182 => 58,  177 => 56,  173 => 55,  168 => 54,  164 => 53,  156 => 52,  152 => 51,  149 => 50,  146 => 49,  143 => 48,  140 => 47,  135 => 46,  104 => 17,  96 => 12,  93 => 11,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CISAE — Expedientes{% endblock %}

{% block body %}
<div class=\"container-glass\">

  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\"><i class=\"bi bi-exclamation-circle-fill text-danger me-2\"></i>Expedientes CISAE</h1>
    {% if is_granted('ROLE_ADMIN') %}
    <div class=\"glass-actions\">
      <a href=\"{{ path('app_cisae_new') }}\" class=\"glass-btn primary\">
        <i class=\"bi bi-plus-circle\"></i> Nuevo expediente
      </a>
    </div>
    {% endif %}
  </div>

  <div class=\"js-table-wrapper\">
    <div class=\"toolbar js-table-toolbar\">
      <input type=\"text\" class=\"js-search form-input\" placeholder=\"Buscar expediente…\">
      <select class=\"js-stage form-select\">
        <option value=\"todos\">Todos los estados</option>
        <option value=\"abierto\">Abierto</option>
        <option value=\"en_tramite\">En trámite</option>
        <option value=\"cerrado\">Cerrado</option>
      </select>
      <span class=\"js-counter small text-muted ms-auto\"></span>
    </div>

    <div class=\"table-responsive\">
      <table class=\"table-glass js-enhanced-table\">
        <thead>
          <tr>
            <th>Núm. Expediente</th>
            <th>Título</th>
            <th>Área</th>
            <th>Inicio</th>
            <th>Término</th>
            <th>Urgencia</th>
            <th>Estado</th>
            <th class=\"text-center\">Acciones</th>
          </tr>
        </thead>
        <tbody>
        {% for cisae in cisaes %}
          {% set estado_lower = cisae.estado|lower|replace({'_': '', ' ': ''}) %}
          {% set hoy = 'now'|date('Y-m-d') %}
          {% set diasRestantes = cisae.fechaTermino ? ((cisae.fechaTermino|date('Y-m-d')|date_modify('+0 day') - hoy|date_modify('+0 day')).days ?? null) : null %}

          <tr data-stage=\"{{ estado_lower }}\"
              data-text=\"{{ cisae.numero }} {{ cisae.titulo }} {{ cisae.area }}\">
            <td class=\"fw-bold\">{{ cisae.numero }}</td>
            <td>{{ cisae.titulo|slice(0, 60) }}{{ cisae.titulo|length > 60 ? '…' : '' }}</td>
            <td>{{ cisae.area ?? '—' }}</td>
            <td>{{ cisae.fechaInicio ? cisae.fechaInicio|date('d/m/Y') : '—' }}</td>
            <td>
              {% if cisae.fechaTermino %}
                <span class=\"{{ cisae.fechaTermino < date() and cisae.estado != 'CERRADO' ? 'text-danger fw-bold' : '' }}\">
                  {{ cisae.fechaTermino|date('d/m/Y') }}
                </span>
              {% else %}—{% endif %}
            </td>
            <td class=\"text-center\">
              {% if cisae.fechaTermino and cisae.estado != 'CERRADO' %}
                {% set diff = (cisae.fechaTermino.timestamp - date().timestamp) / 86400 %}
                {% if diff < 0 %}
                  <span class=\"badge bg-danger\"><i class=\"bi bi-exclamation-circle\"></i> Vencido</span>
                {% elseif diff <= 3 %}
                  <span class=\"badge bg-warning text-dark\"><i class=\"bi bi-clock\"></i> {{ diff|round(0,'ceil') }}d</span>
                {% else %}
                  <span class=\"badge bg-secondary\">{{ diff|round(0,'ceil') }}d</span>
                {% endif %}
              {% else %}
                <span class=\"badge bg-secondary\">—</span>
              {% endif %}
            </td>
            <td>
              {% set badgeClass =
                cisae.estado == 'ABIERTO'    ? 'badge bg-success-subtle text-success-emphasis' :
                (cisae.estado == 'EN_TRAMITE' ? 'badge bg-warning-subtle text-warning-emphasis' :
                'badge bg-secondary-subtle text-secondary-emphasis') %}
              <span class=\"{{ badgeClass }}\">{{ cisae.estado|replace({'_': ' '}) }}</span>
            </td>
            <td class=\"text-center\">
              <a href=\"{{ path('app_cisae_show', {'id': cisae.id}) }}\"
                 class=\"btn btn-outline-primary btn-sm\" title=\"Ver\">
                <i class=\"bi bi-eye\"></i>
              </a>
              {% if is_granted('ROLE_ADMIN') %}
              <a href=\"{{ path('app_cisae_edit', {'id': cisae.id}) }}\"
                 class=\"btn btn-outline-warning btn-sm\" title=\"Editar\">
                <i class=\"bi bi-pencil-square\"></i>
              </a>
              {% endif %}
            </td>
          </tr>
        {% else %}
          <tr>
            <td colspan=\"8\" class=\"text-center text-muted py-4\">No hay expedientes CISAE registrados</td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>

    <div class=\"js-counter table-counter\">&nbsp;</div>
  </div>

</div>
{% endblock %}
", "cisae/index.html.twig", "/var/www/html/templates/cisae/index.html.twig");
    }
}
