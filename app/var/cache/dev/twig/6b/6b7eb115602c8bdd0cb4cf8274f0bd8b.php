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

/* main/dashboard.html.twig */
class __TwigTemplate_16ecf57a8802c1622cf16c61ae7d1b1a extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/dashboard.html.twig"));

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

        yield "Dashboard";
        
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

        // line 6
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <style>
    .chart-container {
      position: relative;
      height: 300px;
      margin: 1rem 0;
    }
    
    .kpi-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1rem;
      margin-bottom: 2rem;
    }
    
    .kpi {
      border: none;
      border-radius: 12px;
      background: linear-gradient(135deg, rgba(178, 34, 93, 0.1) 0%, rgba(178, 34, 93, 0.05) 100%);
      backdrop-filter: blur(10px);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .kpi:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(178, 34, 93, 0.15);
    }
    
    .kpi-value {
      font-size: 2.5rem;
      font-weight: 800;
      color: var(--primary-color);
      line-height: 1;
      margin: 0.5rem 0;
    }
    
    .kpi-sub {
      font-size: 0.875rem;
      margin: 0;
    }
    
    .glass-btn {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.75rem 1.5rem;
      border: none;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
    }
    
    .glass-btn.primary {
      background: rgba(178, 34, 93, 0.1);
      color: var(--primary-color);
      border: 1px solid rgba(178, 34, 93, 0.2);
    }
    
    .glass-btn.success {
      background: rgba(40, 167, 69, 0.1);
      color: #28a745;
      border: 1px solid rgba(40, 167, 69, 0.2);
    }
    
    .glass-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    
    .quick-actions {
      display: flex;
      gap: 1rem;
      padding: 1.5rem;
      flex-wrap: wrap;
    }
    
    .chart-card {
      border: none;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }
    
    .chart-header {
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      background: transparent;
    }
    
    .trend-badge {
      font-size: 0.75rem;
      padding: 0.25rem 0.5rem;
    }
    
    .table-wrap {
      border-radius: 8px;
      overflow: hidden;
    }
    
    @media (max-width: 768px) {
      .kpi-grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      }
      
      .kpi-value {
        font-size: 2rem;
      }
      
      .quick-actions {
        justify-content: center;
      }
      
      .glass-btn {
        flex: 1;
        min-width: 140px;
        justify-content: center;
      }
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 130
        yield "<div class=\"container content\">

  ";
        // line 133
        yield "  <section class=\"kpi-grid\">
    <article class=\"card kpi\" aria-live=\"polite\">
      <header class=\"card-header\">
        <div class=\"card-title\"><i class=\"bi bi-file-earmark-text\"></i> Total Oficios</div>
      </header>
      <div class=\"kpi-value\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("oficiosCount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["oficiosCount"]) || array_key_exists("oficiosCount", $context) ? $context["oficiosCount"] : (function () { throw new RuntimeError('Variable "oficiosCount" does not exist.', 138, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
      <p class=\"text-muted kpi-sub\">
        ";
        // line 140
        $context["oficiosTrend"] = ((array_key_exists("oficiosTrend", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["oficiosTrend"]) || array_key_exists("oficiosTrend", $context) ? $context["oficiosTrend"] : (function () { throw new RuntimeError('Variable "oficiosTrend" does not exist.', 140, $this->source); })()), 0)) : (0));
        // line 141
        yield "        <span class=\"trend-badge badge ";
        if (((isset($context["oficiosTrend"]) || array_key_exists("oficiosTrend", $context) ? $context["oficiosTrend"] : (function () { throw new RuntimeError('Variable "oficiosTrend" does not exist.', 141, $this->source); })()) > 0)) {
            yield "bg-success-subtle text-success-emphasis";
        } elseif (((isset($context["oficiosTrend"]) || array_key_exists("oficiosTrend", $context) ? $context["oficiosTrend"] : (function () { throw new RuntimeError('Variable "oficiosTrend" does not exist.', 141, $this->source); })()) < 0)) {
            yield "bg-danger-subtle text-danger-emphasis";
        } else {
            yield "bg-secondary-subtle text-secondary-emphasis";
        }
        yield "\">
          ";
        // line 142
        if (((isset($context["oficiosTrend"]) || array_key_exists("oficiosTrend", $context) ? $context["oficiosTrend"] : (function () { throw new RuntimeError('Variable "oficiosTrend" does not exist.', 142, $this->source); })()) > 0)) {
            yield "+";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["oficiosTrend"]) || array_key_exists("oficiosTrend", $context) ? $context["oficiosTrend"] : (function () { throw new RuntimeError('Variable "oficiosTrend" does not exist.', 142, $this->source); })()), "html", null, true);
        yield "% esta semana
        </span>
      </p>
    </article>

    <article class=\"card kpi\">
      <header class=\"card-header\">
        <div class=\"card-title\"><i class=\"bi bi-arrow-repeat\"></i> Circulares</div>
      </header>
      <div class=\"kpi-value\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("circularesCount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["circularesCount"]) || array_key_exists("circularesCount", $context) ? $context["circularesCount"] : (function () { throw new RuntimeError('Variable "circularesCount" does not exist.', 151, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
      <p class=\"text-muted kpi-sub\">
        ";
        // line 153
        $context["circularesTrend"] = ((array_key_exists("circularesTrend", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["circularesTrend"]) || array_key_exists("circularesTrend", $context) ? $context["circularesTrend"] : (function () { throw new RuntimeError('Variable "circularesTrend" does not exist.', 153, $this->source); })()), 0)) : (0));
        // line 154
        yield "        <span class=\"trend-badge badge ";
        if (((isset($context["circularesTrend"]) || array_key_exists("circularesTrend", $context) ? $context["circularesTrend"] : (function () { throw new RuntimeError('Variable "circularesTrend" does not exist.', 154, $this->source); })()) > 0)) {
            yield "bg-success-subtle text-success-emphasis";
        } elseif (((isset($context["circularesTrend"]) || array_key_exists("circularesTrend", $context) ? $context["circularesTrend"] : (function () { throw new RuntimeError('Variable "circularesTrend" does not exist.', 154, $this->source); })()) < 0)) {
            yield "bg-danger-subtle text-danger-emphasis";
        } else {
            yield "bg-secondary-subtle text-secondary-emphasis";
        }
        yield "\">
          ";
        // line 155
        if (((isset($context["circularesTrend"]) || array_key_exists("circularesTrend", $context) ? $context["circularesTrend"] : (function () { throw new RuntimeError('Variable "circularesTrend" does not exist.', 155, $this->source); })()) > 0)) {
            yield "+";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["circularesTrend"]) || array_key_exists("circularesTrend", $context) ? $context["circularesTrend"] : (function () { throw new RuntimeError('Variable "circularesTrend" does not exist.', 155, $this->source); })()), "html", null, true);
        yield "% esta semana
        </span>
      </p>
    </article>

    <article class=\"card kpi\">
      <header class=\"card-header\">
        <div class=\"card-title\"><i class=\"bi bi-journal-text\"></i> Notas Informativas</div>
      </header>
      <div class=\"kpi-value\">";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("notasCount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["notasCount"]) || array_key_exists("notasCount", $context) ? $context["notasCount"] : (function () { throw new RuntimeError('Variable "notasCount" does not exist.', 164, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
      <p class=\"text-muted kpi-sub\">
        ";
        // line 166
        $context["notasTrend"] = ((array_key_exists("notasTrend", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["notasTrend"]) || array_key_exists("notasTrend", $context) ? $context["notasTrend"] : (function () { throw new RuntimeError('Variable "notasTrend" does not exist.', 166, $this->source); })()), 0)) : (0));
        // line 167
        yield "        <span class=\"trend-badge badge ";
        if (((isset($context["notasTrend"]) || array_key_exists("notasTrend", $context) ? $context["notasTrend"] : (function () { throw new RuntimeError('Variable "notasTrend" does not exist.', 167, $this->source); })()) > 0)) {
            yield "bg-success-subtle text-success-emphasis";
        } elseif (((isset($context["notasTrend"]) || array_key_exists("notasTrend", $context) ? $context["notasTrend"] : (function () { throw new RuntimeError('Variable "notasTrend" does not exist.', 167, $this->source); })()) < 0)) {
            yield "bg-danger-subtle text-danger-emphasis";
        } else {
            yield "bg-secondary-subtle text-secondary-emphasis";
        }
        yield "\">
          ";
        // line 168
        if (((isset($context["notasTrend"]) || array_key_exists("notasTrend", $context) ? $context["notasTrend"] : (function () { throw new RuntimeError('Variable "notasTrend" does not exist.', 168, $this->source); })()) > 0)) {
            yield "+";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["notasTrend"]) || array_key_exists("notasTrend", $context) ? $context["notasTrend"] : (function () { throw new RuntimeError('Variable "notasTrend" does not exist.', 168, $this->source); })()), "html", null, true);
        yield "% esta semana
        </span>
      </p>
    </article>

    <article class=\"card kpi\">
      <header class=\"card-header\">
        <div class=\"card-title\"><i class=\"bi bi-envelope\"></i> Correspondencias</div>
      </header>
      <div class=\"kpi-value\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("correspondencesCount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["correspondencesCount"]) || array_key_exists("correspondencesCount", $context) ? $context["correspondencesCount"] : (function () { throw new RuntimeError('Variable "correspondencesCount" does not exist.', 177, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
      <p class=\"text-muted kpi-sub\">
        ";
        // line 179
        $context["correspondencesTrend"] = ((array_key_exists("correspondencesTrend", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["correspondencesTrend"]) || array_key_exists("correspondencesTrend", $context) ? $context["correspondencesTrend"] : (function () { throw new RuntimeError('Variable "correspondencesTrend" does not exist.', 179, $this->source); })()), 0)) : (0));
        // line 180
        yield "        <span class=\"trend-badge badge ";
        if (((isset($context["correspondencesTrend"]) || array_key_exists("correspondencesTrend", $context) ? $context["correspondencesTrend"] : (function () { throw new RuntimeError('Variable "correspondencesTrend" does not exist.', 180, $this->source); })()) > 0)) {
            yield "bg-success-subtle text-success-emphasis";
        } elseif (((isset($context["correspondencesTrend"]) || array_key_exists("correspondencesTrend", $context) ? $context["correspondencesTrend"] : (function () { throw new RuntimeError('Variable "correspondencesTrend" does not exist.', 180, $this->source); })()) < 0)) {
            yield "bg-danger-subtle text-danger-emphasis";
        } else {
            yield "bg-secondary-subtle text-secondary-emphasis";
        }
        yield "\">
          ";
        // line 181
        if (((isset($context["correspondencesTrend"]) || array_key_exists("correspondencesTrend", $context) ? $context["correspondencesTrend"] : (function () { throw new RuntimeError('Variable "correspondencesTrend" does not exist.', 181, $this->source); })()) > 0)) {
            yield "+";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["correspondencesTrend"]) || array_key_exists("correspondencesTrend", $context) ? $context["correspondencesTrend"] : (function () { throw new RuntimeError('Variable "correspondencesTrend" does not exist.', 181, $this->source); })()), "html", null, true);
        yield "% esta semana
        </span>
      </p>
    </article>

    <article class=\"card kpi\">
      <header class=\"card-header\">
        <div class=\"card-title\"><i class=\"bi bi-upc-scan\"></i> Escáner</div>
      </header>
      <div class=\"kpi-value\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("scansCount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["scansCount"]) || array_key_exists("scansCount", $context) ? $context["scansCount"] : (function () { throw new RuntimeError('Variable "scansCount" does not exist.', 190, $this->source); })()), 0)) : (0)), "html", null, true);
        yield "</div>
      <p class=\"text-muted kpi-sub\">
        ";
        // line 192
        $context["scansTrend"] = ((array_key_exists("scansTrend", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["scansTrend"]) || array_key_exists("scansTrend", $context) ? $context["scansTrend"] : (function () { throw new RuntimeError('Variable "scansTrend" does not exist.', 192, $this->source); })()), 0)) : (0));
        // line 193
        yield "        <span class=\"trend-badge badge ";
        if (((isset($context["scansTrend"]) || array_key_exists("scansTrend", $context) ? $context["scansTrend"] : (function () { throw new RuntimeError('Variable "scansTrend" does not exist.', 193, $this->source); })()) > 0)) {
            yield "bg-success-subtle text-success-emphasis";
        } elseif (((isset($context["scansTrend"]) || array_key_exists("scansTrend", $context) ? $context["scansTrend"] : (function () { throw new RuntimeError('Variable "scansTrend" does not exist.', 193, $this->source); })()) < 0)) {
            yield "bg-danger-subtle text-danger-emphasis";
        } else {
            yield "bg-secondary-subtle text-secondary-emphasis";
        }
        yield "\">
          ";
        // line 194
        if (((isset($context["scansTrend"]) || array_key_exists("scansTrend", $context) ? $context["scansTrend"] : (function () { throw new RuntimeError('Variable "scansTrend" does not exist.', 194, $this->source); })()) > 0)) {
            yield "+";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scansTrend"]) || array_key_exists("scansTrend", $context) ? $context["scansTrend"] : (function () { throw new RuntimeError('Variable "scansTrend" does not exist.', 194, $this->source); })()), "html", null, true);
        yield "% esta semana
        </span>
      </p>
    </article>
  </section>

  ";
        // line 201
        yield "  <section class=\"row g-4 mb-4\">
    ";
        // line 203
        yield "    <div class=\"col-12 col-lg-6\">
      <div class=\"card chart-card h-100\">
        <header class=\"card-header chart-header\">
          <div class=\"d-flex align-items-center justify-content-between\">
            <span class=\"card-title\"><i class=\"bi bi-bar-chart-line\"></i> Actividad Semanal</span>
            <select class=\"form-select form-select-sm\" style=\"width: auto;\" id=\"weekSelector\">
              <option value=\"current\">Esta semana</option>
              <option value=\"last\">Semana anterior</option>
              <option value=\"2weeks\">Hace 2 semanas</option>
            </select>
          </div>
        </header>
        <div class=\"card-body\">
          <div class=\"chart-container\">
            <canvas id=\"weeklyActivityChart\"></canvas>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 224
        yield "    <div class=\"col-12 col-lg-6\">
      <div class=\"card chart-card h-100\">
        <header class=\"card-header chart-header\">
          <span class=\"card-title\"><i class=\"bi bi-pie-chart\"></i> Distribución por Estado</span>
        </header>
        <div class=\"card-body\">
          <div class=\"chart-container\">
            <canvas id=\"statusDistributionChart\"></canvas>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 238
        yield "    <div class=\"col-12 col-lg-8\">
      <div class=\"card chart-card\">
        <header class=\"card-header chart-header\">
          <span class=\"card-title\"><i class=\"bi bi-graph-up\"></i> Tendencias por Día</span>
        </header>
        <div class=\"card-body\">
          <div class=\"chart-container\">
            <canvas id=\"dailyTrendsChart\"></canvas>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 252
        yield "    <div class=\"col-12 col-lg-4\">
      <div class=\"card chart-card\">
        <header class=\"card-header chart-header\">
          <span class=\"card-title\"><i class=\"bi bi-speedometer2\"></i> Eficiencia por Área</span>
        </header>
        <div class=\"card-body\">
          <div class=\"chart-container\">
            <canvas id=\"areaEfficiencyChart\"></canvas>
          </div>
        </div>
      </div>
    </div>
  </section>

  ";
        // line 267
        yield "  <section class=\"row g-3 mb-4\">
    <article class=\"col-12 col-lg-6\">
      <div class=\"card h-100\">
        <header class=\"card-header d-flex align-items-center justify-content-between\">
          <span class=\"card-title\"><i class=\"bi bi-traffic-light\"></i> Oficios por estado</span>
          <span class=\"small text-muted\">Fuente: vw_oficios_por_estado</span>
        </header>
        <div class=\"card-body\">
          <div class=\"table-wrap js-table-wrapper\">
            <div class=\"js-table-toolbar d-flex gap-2 mb-2\">
              <input type=\"search\" class=\"form-control form-control-sm js-search\" placeholder=\"Buscar estado…\">
              <span class=\"js-counter small text-muted ms-auto\"></span>
            </div>
            <table class=\"table table-sm table-dark align-middle js-enhanced-table\">
              <thead>
                <tr>
                  <th>Estado</th>
                  <th class=\"text-end\">Total</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 288
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("oficiosPorEstado", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["oficiosPorEstado"]) || array_key_exists("oficiosPorEstado", $context) ? $context["oficiosPorEstado"] : (function () { throw new RuntimeError('Variable "oficiosPorEstado" does not exist.', 288, $this->source); })()), [])) : ([])));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 289
            yield "                  <tr data-asunto=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "estado", [], "any", false, false, false, 289), "html", null, true);
            yield "\" data-stage=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["row"], "estado", [], "any", false, false, false, 289)), "html", null, true);
            yield "\">
                    <td>
                      ";
            // line 291
            $context["badge"] = (((CoreExtension::getAttribute($this->env, $this->source,             // line 292
$context["row"], "estado", [], "any", false, false, false, 292) == "CERRADO")) ? ("bg-success-subtle text-success-emphasis") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 293
$context["row"], "estado", [], "any", false, false, false, 293) == "EN_PROCESO")) ? ("bg-warning-subtle text-warning-emphasis") : ("bg-secondary-subtle text-secondary-emphasis"))));
            // line 295
            yield "                      <span class=\"badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 295, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "estado", [], "any", false, false, false, 295), "html", null, true);
            yield "</span>
                    </td>
                    <td class=\"text-end fw-bold\">";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "total", [], "any", false, false, false, 297), "html", null, true);
            yield "</td>
                  </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 299
        if (!$context['_iterated']) {
            // line 300
            yield "                  <tr><td colspan=\"2\" class=\"text-muted\">Sin datos</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        yield "              </tbody>
            </table>
          </div>
        </div>
      </div>
    </article>

    <article class=\"col-12 col-lg-6\">
      <div class=\"card h-100\">
        <header class=\"card-header d-flex align-items-center justify-content-between\">
          <span class=\"card-title\"><i class=\"bi bi-broadcast\"></i> Circulares Activas</span>
          <a class=\"btn btn-outline-primary btn-sm\" href=\"";
        // line 313
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_circular_index");
        yield "\">Ver todas</a>
        </header>
        <div class=\"card-body\">
          ";
        // line 316
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activeCirculares"]) || array_key_exists("activeCirculares", $context) ? $context["activeCirculares"] : (function () { throw new RuntimeError('Variable "activeCirculares" does not exist.', 316, $this->source); })())) > 0)) {
            // line 317
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activeCirculares"]) || array_key_exists("activeCirculares", $context) ? $context["activeCirculares"] : (function () { throw new RuntimeError('Variable "activeCirculares" does not exist.', 317, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 318
                yield "              <div class=\"d-flex align-items-center justify-content-between py-2 border-bottom\">
                <div>
                  <strong>#";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 320), "html", null, true);
                yield "</strong> · ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", true, true, false, 320)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 320), "Sin título")) : ("Sin título")), 0, 72), "html", null, true);
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 320) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 320)) > 72))) {
                    yield "…";
                }
                // line 321
                yield "                </div>
                <span class=\"badge bg-warning-subtle text-warning\">";
                // line 322
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "date", [], "any", false, false, false, 322)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "date", [], "any", false, false, false, 322), "Y-m-d"), "html", null, true)) : ("—"));
                yield "</span>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 325
            yield "          ";
        } else {
            // line 326
            yield "            <div class=\"d-flex align-items-center justify-content-between py-2\">
              <div class=\"text-muted\">No hay circulares</div>
              <span class=\"badge text-secondary border border-secondary-subtle\">—</span>
            </div>
          ";
        }
        // line 331
        yield "        </div>
      </div>
    </article>
  </section>

  ";
        // line 337
        yield "  <section class=\"card mb-4\">
    <header class=\"card-header d-flex align-items-center justify-content-between\">
      <span class=\"card-title\"><i class=\"bi bi-exclamation-triangle\"></i> CISAI próximos (7 días)</span>
      <span class=\"small text-muted\">Fuente: vw_cisai_proximos</span>
    </header>
    <div class=\"card-body\">
      <div class=\"table-wrap js-table-wrapper\">
        <div class=\"js-table-toolbar d-flex gap-2 mb-2\">
          <input type=\"search\" class=\"form-control form-control-sm js-search\" placeholder=\"Buscar por #Oficio / Área…\">
          <select class=\"form-select form-select-sm js-stage\" style=\"max-width:180px\">
            <option value=\"todos\">Todos</option>
            <option value=\"abierto\">Abierto</option>
            <option value=\"en_proceso\">En proceso</option>
            <option value=\"cerrado\">Cerrado</option>
          </select>
          <span class=\"js-counter small text-muted ms-auto\"></span>
        </div>
        <table class=\"table table-sm table-dark align-middle js-enhanced-table\">
          <thead>
            <tr>
              <th># Oficio</th>
              <th>Área</th>
              <th>Trámite</th>
              <th>Vence</th>
              <th class=\"text-end\">Días</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("cisaiProximos", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cisaiProximos"]) || array_key_exists("cisaiProximos", $context) ? $context["cisaiProximos"] : (function () { throw new RuntimeError('Variable "cisaiProximos" does not exist.', 365, $this->source); })()), [])) : ([])));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 366
            yield "              <tr
                data-asunto=\"";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "numero_oficio", [], "any", false, false, false, 367), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "area", [], "any", false, false, false, 367), "html", null, true);
            yield "\"
                data-stage=\"en_proceso\"
                data-text=\"";
            // line 369
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "numero_oficio", [], "any", false, false, false, 369), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "area", [], "any", false, false, false, 369), "html", null, true);
            yield " ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "fecha_termino", [], "any", false, false, false, 369)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "fecha_termino", [], "any", false, false, false, 369), "Y-m-d"), "html", null, true)) : (""));
            yield "\"
              >
                <td class=\"fw-bold\">";
            // line 371
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "numero_oficio", [], "any", false, false, false, 371), "html", null, true);
            yield "</td>
                <td>";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "area", [], "any", false, false, false, 372), "html", null, true);
            yield "</td>
                <td>";
            // line 373
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "fecha_tramite", [], "any", false, false, false, 373)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "fecha_tramite", [], "any", false, false, false, 373), "Y-m-d"), "html", null, true)) : ("—"));
            yield "</td>
                <td>
                  ";
            // line 375
            $context["d"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "fecha_termino", [], "any", false, false, false, 375)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "fecha_termino", [], "any", false, false, false, 375), "Y-m-d")) : ("—"));
            // line 376
            yield "                  <span class=\"fw-semibold ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dias_restantes", [], "any", false, false, false, 376) <= 2)) ? ("text-warning") : (""));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 376, $this->source); })()), "html", null, true);
            yield "</span>
                </td>
                <td class=\"text-end\">
                  <span class=\"badge ";
            // line 379
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dias_restantes", [], "any", false, false, false, 379) <= 2)) ? ("bg-warning-subtle text-warning-emphasis") : ("bg-secondary-subtle text-secondary-emphasis"));
            yield "\">
                    ";
            // line 380
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dias_restantes", [], "any", false, false, false, 380), "html", null, true);
            yield "
                  </span>
                </td>
              </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 384
        if (!$context['_iterated']) {
            // line 385
            yield "              <tr><td colspan=\"5\" class=\"text-muted\">Sin vencimientos próximos</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        yield "          </tbody>
        </table>
      </div>
    </div>
  </section>

  ";
        // line 394
        yield "  <section class=\"card mb-4\">
    <header class=\"card-header d-flex align-items-center justify-content-between\">
      <span class=\"card-title\"><i class=\"bi bi-clock-history\"></i> Oficios recientes</span>
      <a class=\"btn btn-outline-light btn-sm\" href=\"";
        // line 397
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_index");
        yield "\">Ver todos</a>
    </header>
    <div class=\"card-body\">
      <div class=\"table-wrap\">
        <table class=\"table table-sm table-dark align-middle\">
          <thead>
            <tr>
              <th>ID</th>
              <th>Asunto</th>
              <th>Remitente</th>
              <th>Destinatario</th>
              <th>Fecha</th>
              <th class=\"text-end\">Acciones</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("recentOficios", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["recentOficios"]) || array_key_exists("recentOficios", $context) ? $context["recentOficios"] : (function () { throw new RuntimeError('Variable "recentOficios" does not exist.', 413, $this->source); })()), [])) : ([])));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 414
            yield "              <tr>
                <td class=\"fw-bold\">";
            // line 415
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 415), "html", null, true);
            yield "</td>
                <td>
                  ";
            // line 417
            $context["t"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["o"], "title", [], "any", true, true, false, 417) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["o"], "title", [], "any", false, false, false, 417)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["o"], "title", [], "any", false, false, false, 417)) : ("Sin título"));
            // line 418
            yield "                  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 418, $this->source); })()), 0, 70) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 418, $this->source); })())) > 70)) ? ("…") : (""))), "html", null, true);
            yield "
                </td>
                <td>";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["o"], "sender", [], "any", true, true, false, 420)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "sender", [], "any", false, false, false, 420), "—")) : ("—")), "html", null, true);
            yield "</td>
                <td>";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["o"], "recipient", [], "any", true, true, false, 421)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "recipient", [], "any", false, false, false, 421), "—")) : ("—")), "html", null, true);
            yield "</td>
                <td>";
            // line 422
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["o"], "date", [], "any", false, false, false, 422)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "date", [], "any", false, false, false, 422), "Y-m-d"), "html", null, true)) : ("—"));
            yield "</td>
                <td class=\"text-end\">
                  <a class=\"btn btn-sm btn-outline-light\" href=\"";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 424)]), "html", null, true);
            yield "\">Ver</a>
                  <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 425
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 425)]), "html", null, true);
            yield "\">Editar</a>
                </td>
              </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 428
        if (!$context['_iterated']) {
            // line 429
            yield "              <tr><td colspan=\"6\" class=\"text-muted\">No hay actividad reciente</td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['o'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        yield "          </tbody>
        </table>
      </div>
    </div>
  </section>

  ";
        // line 438
        yield "  <section class=\"card mb-4\">
    <header class=\"card-header d-flex align-items-center justify-content-between\">
      <span class=\"card-title\"><i class=\"bi bi-lightning-charge\"></i> Acciones Rápidas</span>
    </header>
    <div class=\"quick-actions\">
      <a href=\"";
        // line 443
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_new");
        yield "\" class=\"glass-btn primary\"><i class=\"bi bi-plus-circle\"></i> Nuevo Oficio</a>
      <a href=\"";
        // line 444
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correspondence_new");
        yield "\" class=\"glass-btn primary\"><i class=\"bi bi-plus-circle\"></i> Nueva Correspondencia</a>
      <a href=\"";
        // line 445
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_circular_new");
        yield "\" class=\"glass-btn primary\"><i class=\"bi bi-plus-circle\"></i> Nueva Circular</a>
      <a href=\"";
        // line 446
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_scanner_new");
        yield "\" class=\"glass-btn success\"><i class=\"bi bi-upc-scan\"></i> Escanear Documento</a>
    </div>
  </section>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 453
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 454
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Datos de ejemplo para las gráficas (reemplazar con datos reales del backend)
      const weeklyData = {
        labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
        datasets: [
          {
            label: 'Oficios',
            data: [12, 19, 8, 15, 22, 3, 7],
            backgroundColor: 'rgba(178, 34, 93, 0.8)',
            borderColor: 'rgba(178, 34, 93, 1)',
            borderWidth: 2,
            borderRadius: 8,
            borderSkipped: false,
          },
          {
            label: 'Correspondencias',
            data: [8, 12, 6, 10, 15, 2, 4],
            backgroundColor: 'rgba(40, 167, 69, 0.8)',
            borderColor: 'rgba(40, 167, 69, 1)',
            borderWidth: 2,
            borderRadius: 8,
            borderSkipped: false,
          },
          {
            label: 'Circulares',
            data: [5, 8, 4, 7, 12, 1, 2],
            backgroundColor: 'rgba(255, 193, 7, 0.8)',
            borderColor: 'rgba(255, 193, 7, 1)',
            borderWidth: 2,
            borderRadius: 8,
            borderSkipped: false,
          }
        ]
      };

      const statusData = {
        labels: ['Cerrado', 'En Proceso', 'Abierto', 'Pendiente'],
        datasets: [{
          data: [45, 30, 15, 10],
          backgroundColor: [
            'rgba(40, 167, 69, 0.8)',
            'rgba(255, 193, 7, 0.8)',
            'rgba(13, 110, 253, 0.8)',
            'rgba(108, 117, 125, 0.8)'
          ],
          borderWidth: 2,
          borderColor: '#fff'
        }]
      };

      const dailyTrendsData = {
        labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
        datasets: [{
          label: 'Documentos Procesados',
          data: [25, 32, 28, 35, 40, 15, 8],
          borderColor: 'rgba(178, 34, 93, 1)',
          backgroundColor: 'rgba(178, 34, 93, 0.1)',
          borderWidth: 3,
          fill: true,
          tension: 0.4
        }]
      };

      const areaEfficiencyData = {
        labels: ['Dirección General', 'Recursos Humanos', 'Finanzas', 'Operaciones', 'TI'],
        datasets: [{
          label: 'Eficiencia (%)',
          data: [85, 92, 78, 88, 95],
          backgroundColor: [
            'rgba(178, 34, 93, 0.8)',
            'rgba(40, 167, 69, 0.8)',
            'rgba(255, 193, 7, 0.8)',
            'rgba(13, 110, 253, 0.8)',
            'rgba(111, 66, 193, 0.8)'
          ],
          borderWidth: 0
        }]
      };

      // Configuración común para Chart.js
      const chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'top',
            labels: {
              padding: 15,
              usePointStyle: true,
            }
          }
        }
      };

      // Inicializar gráficas
      const weeklyActivityChart = new Chart(
        document.getElementById('weeklyActivityChart'),
        {
          type: 'bar',
          data: weeklyData,
          options: {
            ...chartOptions,
            scales: {
              y: {
                beginAtZero: true,
                grid: {
                  color: 'rgba(0, 0, 0, 0.1)'
                }
              },
              x: {
                grid: {
                  display: false
                }
              }
            }
          }
        }
      );

      const statusDistributionChart = new Chart(
        document.getElementById('statusDistributionChart'),
        {
          type: 'doughnut',
          data: statusData,
          options: {
            ...chartOptions,
            cutout: '60%',
            plugins: {
              ...chartOptions.plugins,
              tooltip: {
                callbacks: {
                  label: function(context) {
                    const label = context.label || '';
                    const value = context.parsed;
                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                    const percentage = Math.round((value / total) * 100);
                    return `\${label}: \${value} (\${percentage}%)`;
                  }
                }
              }
            }
          }
        }
      );

      const dailyTrendsChart = new Chart(
        document.getElementById('dailyTrendsChart'),
        {
          type: 'line',
          data: dailyTrendsData,
          options: {
            ...chartOptions,
            scales: {
              y: {
                beginAtZero: true,
                grid: {
                  color: 'rgba(0, 0, 0, 0.1)'
                }
              },
              x: {
                grid: {
                  display: false
                }
              }
            }
          }
        }
      );

      const areaEfficiencyChart = new Chart(
        document.getElementById('areaEfficiencyChart'),
        {
          type: 'bar',
          data: areaEfficiencyData,
          options: {
            ...chartOptions,
            indexAxis: 'y',
            scales: {
              x: {
                beginAtZero: true,
                max: 100,
                grid: {
                  color: 'rgba(0, 0, 0, 0.1)'
                }
              },
              y: {
                grid: {
                  display: false
                }
              }
            }
          }
        }
      );

      // Selector de semana
      document.getElementById('weekSelector').addEventListener('change', function(e) {
        // Aquí iría la lógica para actualizar los datos según la semana seleccionada
        console.log('Semana seleccionada:', e.target.value);
        // En una implementación real, harías una petición al servidor para obtener los datos de esa semana
      });

      // Animaciones para las cards
      const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
          }
        });
      }, observerOptions);

      document.querySelectorAll('.card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
      });
    });
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "main/dashboard.html.twig";
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
        return array (  840 => 454,  830 => 453,  816 => 446,  812 => 445,  808 => 444,  804 => 443,  797 => 438,  789 => 431,  782 => 429,  780 => 428,  772 => 425,  768 => 424,  763 => 422,  759 => 421,  755 => 420,  749 => 418,  747 => 417,  742 => 415,  739 => 414,  734 => 413,  715 => 397,  710 => 394,  702 => 387,  695 => 385,  693 => 384,  684 => 380,  680 => 379,  671 => 376,  669 => 375,  664 => 373,  660 => 372,  656 => 371,  647 => 369,  640 => 367,  637 => 366,  632 => 365,  602 => 337,  595 => 331,  588 => 326,  585 => 325,  576 => 322,  573 => 321,  566 => 320,  562 => 318,  557 => 317,  555 => 316,  549 => 313,  536 => 302,  529 => 300,  527 => 299,  520 => 297,  512 => 295,  510 => 293,  509 => 292,  508 => 291,  500 => 289,  495 => 288,  472 => 267,  456 => 252,  441 => 238,  426 => 224,  404 => 203,  401 => 201,  389 => 194,  378 => 193,  376 => 192,  371 => 190,  356 => 181,  345 => 180,  343 => 179,  338 => 177,  323 => 168,  312 => 167,  310 => 166,  305 => 164,  290 => 155,  279 => 154,  277 => 153,  272 => 151,  257 => 142,  246 => 141,  244 => 140,  239 => 138,  232 => 133,  228 => 130,  218 => 129,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <style>
    .chart-container {
      position: relative;
      height: 300px;
      margin: 1rem 0;
    }
    
    .kpi-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1rem;
      margin-bottom: 2rem;
    }
    
    .kpi {
      border: none;
      border-radius: 12px;
      background: linear-gradient(135deg, rgba(178, 34, 93, 0.1) 0%, rgba(178, 34, 93, 0.05) 100%);
      backdrop-filter: blur(10px);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .kpi:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(178, 34, 93, 0.15);
    }
    
    .kpi-value {
      font-size: 2.5rem;
      font-weight: 800;
      color: var(--primary-color);
      line-height: 1;
      margin: 0.5rem 0;
    }
    
    .kpi-sub {
      font-size: 0.875rem;
      margin: 0;
    }
    
    .glass-btn {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.75rem 1.5rem;
      border: none;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
    }
    
    .glass-btn.primary {
      background: rgba(178, 34, 93, 0.1);
      color: var(--primary-color);
      border: 1px solid rgba(178, 34, 93, 0.2);
    }
    
    .glass-btn.success {
      background: rgba(40, 167, 69, 0.1);
      color: #28a745;
      border: 1px solid rgba(40, 167, 69, 0.2);
    }
    
    .glass-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    
    .quick-actions {
      display: flex;
      gap: 1rem;
      padding: 1.5rem;
      flex-wrap: wrap;
    }
    
    .chart-card {
      border: none;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }
    
    .chart-header {
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      background: transparent;
    }
    
    .trend-badge {
      font-size: 0.75rem;
      padding: 0.25rem 0.5rem;
    }
    
    .table-wrap {
      border-radius: 8px;
      overflow: hidden;
    }
    
    @media (max-width: 768px) {
      .kpi-grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      }
      
      .kpi-value {
        font-size: 2rem;
      }
      
      .quick-actions {
        justify-content: center;
      }
      
      .glass-btn {
        flex: 1;
        min-width: 140px;
        justify-content: center;
      }
    }
  </style>
{% endblock %}

{% block body %}
<div class=\"container content\">

  {# ===== KPIs / Métricas principales ===== #}
  <section class=\"kpi-grid\">
    <article class=\"card kpi\" aria-live=\"polite\">
      <header class=\"card-header\">
        <div class=\"card-title\"><i class=\"bi bi-file-earmark-text\"></i> Total Oficios</div>
      </header>
      <div class=\"kpi-value\">{{ oficiosCount|default(0) }}</div>
      <p class=\"text-muted kpi-sub\">
        {% set oficiosTrend = oficiosTrend|default(0) %}
        <span class=\"trend-badge badge {% if oficiosTrend > 0 %}bg-success-subtle text-success-emphasis{% elseif oficiosTrend < 0 %}bg-danger-subtle text-danger-emphasis{% else %}bg-secondary-subtle text-secondary-emphasis{% endif %}\">
          {% if oficiosTrend > 0 %}+{% endif %}{{ oficiosTrend }}% esta semana
        </span>
      </p>
    </article>

    <article class=\"card kpi\">
      <header class=\"card-header\">
        <div class=\"card-title\"><i class=\"bi bi-arrow-repeat\"></i> Circulares</div>
      </header>
      <div class=\"kpi-value\">{{ circularesCount|default(0) }}</div>
      <p class=\"text-muted kpi-sub\">
        {% set circularesTrend = circularesTrend|default(0) %}
        <span class=\"trend-badge badge {% if circularesTrend > 0 %}bg-success-subtle text-success-emphasis{% elseif circularesTrend < 0 %}bg-danger-subtle text-danger-emphasis{% else %}bg-secondary-subtle text-secondary-emphasis{% endif %}\">
          {% if circularesTrend > 0 %}+{% endif %}{{ circularesTrend }}% esta semana
        </span>
      </p>
    </article>

    <article class=\"card kpi\">
      <header class=\"card-header\">
        <div class=\"card-title\"><i class=\"bi bi-journal-text\"></i> Notas Informativas</div>
      </header>
      <div class=\"kpi-value\">{{ notasCount|default(0) }}</div>
      <p class=\"text-muted kpi-sub\">
        {% set notasTrend = notasTrend|default(0) %}
        <span class=\"trend-badge badge {% if notasTrend > 0 %}bg-success-subtle text-success-emphasis{% elseif notasTrend < 0 %}bg-danger-subtle text-danger-emphasis{% else %}bg-secondary-subtle text-secondary-emphasis{% endif %}\">
          {% if notasTrend > 0 %}+{% endif %}{{ notasTrend }}% esta semana
        </span>
      </p>
    </article>

    <article class=\"card kpi\">
      <header class=\"card-header\">
        <div class=\"card-title\"><i class=\"bi bi-envelope\"></i> Correspondencias</div>
      </header>
      <div class=\"kpi-value\">{{ correspondencesCount|default(0) }}</div>
      <p class=\"text-muted kpi-sub\">
        {% set correspondencesTrend = correspondencesTrend|default(0) %}
        <span class=\"trend-badge badge {% if correspondencesTrend > 0 %}bg-success-subtle text-success-emphasis{% elseif correspondencesTrend < 0 %}bg-danger-subtle text-danger-emphasis{% else %}bg-secondary-subtle text-secondary-emphasis{% endif %}\">
          {% if correspondencesTrend > 0 %}+{% endif %}{{ correspondencesTrend }}% esta semana
        </span>
      </p>
    </article>

    <article class=\"card kpi\">
      <header class=\"card-header\">
        <div class=\"card-title\"><i class=\"bi bi-upc-scan\"></i> Escáner</div>
      </header>
      <div class=\"kpi-value\">{{ scansCount|default(0) }}</div>
      <p class=\"text-muted kpi-sub\">
        {% set scansTrend = scansTrend|default(0) %}
        <span class=\"trend-badge badge {% if scansTrend > 0 %}bg-success-subtle text-success-emphasis{% elseif scansTrend < 0 %}bg-danger-subtle text-danger-emphasis{% else %}bg-secondary-subtle text-secondary-emphasis{% endif %}\">
          {% if scansTrend > 0 %}+{% endif %}{{ scansTrend }}% esta semana
        </span>
      </p>
    </article>
  </section>

  {# ===== Gráficas Semanales ===== #}
  <section class=\"row g-4 mb-4\">
    {# Gráfica 1: Actividad Semanal por Tipo #}
    <div class=\"col-12 col-lg-6\">
      <div class=\"card chart-card h-100\">
        <header class=\"card-header chart-header\">
          <div class=\"d-flex align-items-center justify-content-between\">
            <span class=\"card-title\"><i class=\"bi bi-bar-chart-line\"></i> Actividad Semanal</span>
            <select class=\"form-select form-select-sm\" style=\"width: auto;\" id=\"weekSelector\">
              <option value=\"current\">Esta semana</option>
              <option value=\"last\">Semana anterior</option>
              <option value=\"2weeks\">Hace 2 semanas</option>
            </select>
          </div>
        </header>
        <div class=\"card-body\">
          <div class=\"chart-container\">
            <canvas id=\"weeklyActivityChart\"></canvas>
          </div>
        </div>
      </div>
    </div>

    {# Gráfica 2: Distribución por Estado #}
    <div class=\"col-12 col-lg-6\">
      <div class=\"card chart-card h-100\">
        <header class=\"card-header chart-header\">
          <span class=\"card-title\"><i class=\"bi bi-pie-chart\"></i> Distribución por Estado</span>
        </header>
        <div class=\"card-body\">
          <div class=\"chart-container\">
            <canvas id=\"statusDistributionChart\"></canvas>
          </div>
        </div>
      </div>
    </div>

    {# Gráfica 3: Tendencias por Día de la Semana #}
    <div class=\"col-12 col-lg-8\">
      <div class=\"card chart-card\">
        <header class=\"card-header chart-header\">
          <span class=\"card-title\"><i class=\"bi bi-graph-up\"></i> Tendencias por Día</span>
        </header>
        <div class=\"card-body\">
          <div class=\"chart-container\">
            <canvas id=\"dailyTrendsChart\"></canvas>
          </div>
        </div>
      </div>
    </div>

    {# Gráfica 4: Eficiencia por Área #}
    <div class=\"col-12 col-lg-4\">
      <div class=\"card chart-card\">
        <header class=\"card-header chart-header\">
          <span class=\"card-title\"><i class=\"bi bi-speedometer2\"></i> Eficiencia por Área</span>
        </header>
        <div class=\"card-body\">
          <div class=\"chart-container\">
            <canvas id=\"areaEfficiencyChart\"></canvas>
          </div>
        </div>
      </div>
    </div>
  </section>

  {# ===== Fila: Estado y Circulares Activas ===== #}
  <section class=\"row g-3 mb-4\">
    <article class=\"col-12 col-lg-6\">
      <div class=\"card h-100\">
        <header class=\"card-header d-flex align-items-center justify-content-between\">
          <span class=\"card-title\"><i class=\"bi bi-traffic-light\"></i> Oficios por estado</span>
          <span class=\"small text-muted\">Fuente: vw_oficios_por_estado</span>
        </header>
        <div class=\"card-body\">
          <div class=\"table-wrap js-table-wrapper\">
            <div class=\"js-table-toolbar d-flex gap-2 mb-2\">
              <input type=\"search\" class=\"form-control form-control-sm js-search\" placeholder=\"Buscar estado…\">
              <span class=\"js-counter small text-muted ms-auto\"></span>
            </div>
            <table class=\"table table-sm table-dark align-middle js-enhanced-table\">
              <thead>
                <tr>
                  <th>Estado</th>
                  <th class=\"text-end\">Total</th>
                </tr>
              </thead>
              <tbody>
                {% for row in oficiosPorEstado|default([]) %}
                  <tr data-asunto=\"{{ row.estado }}\" data-stage=\"{{ row.estado|lower }}\">
                    <td>
                      {% set badge =
                        row.estado == 'CERRADO' ? 'bg-success-subtle text-success-emphasis' :
                        (row.estado == 'EN_PROCESO' ? 'bg-warning-subtle text-warning-emphasis' :
                        'bg-secondary-subtle text-secondary-emphasis') %}
                      <span class=\"badge {{ badge }}\">{{ row.estado }}</span>
                    </td>
                    <td class=\"text-end fw-bold\">{{ row.total }}</td>
                  </tr>
                {% else %}
                  <tr><td colspan=\"2\" class=\"text-muted\">Sin datos</td></tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </article>

    <article class=\"col-12 col-lg-6\">
      <div class=\"card h-100\">
        <header class=\"card-header d-flex align-items-center justify-content-between\">
          <span class=\"card-title\"><i class=\"bi bi-broadcast\"></i> Circulares Activas</span>
          <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ path('app_circular_index') }}\">Ver todas</a>
        </header>
        <div class=\"card-body\">
          {% if activeCirculares|length > 0 %}
            {% for c in activeCirculares %}
              <div class=\"d-flex align-items-center justify-content-between py-2 border-bottom\">
                <div>
                  <strong>#{{ c.id }}</strong> · {{ c.title|default('Sin título')|slice(0,72) }}{% if c.title and c.title|length > 72 %}…{% endif %}
                </div>
                <span class=\"badge bg-warning-subtle text-warning\">{{ c.date ? c.date|date('Y-m-d') : '—' }}</span>
              </div>
            {% endfor %}
          {% else %}
            <div class=\"d-flex align-items-center justify-content-between py-2\">
              <div class=\"text-muted\">No hay circulares</div>
              <span class=\"badge text-secondary border border-secondary-subtle\">—</span>
            </div>
          {% endif %}
        </div>
      </div>
    </article>
  </section>

  {# ===== CISAI próximos 7 días ===== #}
  <section class=\"card mb-4\">
    <header class=\"card-header d-flex align-items-center justify-content-between\">
      <span class=\"card-title\"><i class=\"bi bi-exclamation-triangle\"></i> CISAI próximos (7 días)</span>
      <span class=\"small text-muted\">Fuente: vw_cisai_proximos</span>
    </header>
    <div class=\"card-body\">
      <div class=\"table-wrap js-table-wrapper\">
        <div class=\"js-table-toolbar d-flex gap-2 mb-2\">
          <input type=\"search\" class=\"form-control form-control-sm js-search\" placeholder=\"Buscar por #Oficio / Área…\">
          <select class=\"form-select form-select-sm js-stage\" style=\"max-width:180px\">
            <option value=\"todos\">Todos</option>
            <option value=\"abierto\">Abierto</option>
            <option value=\"en_proceso\">En proceso</option>
            <option value=\"cerrado\">Cerrado</option>
          </select>
          <span class=\"js-counter small text-muted ms-auto\"></span>
        </div>
        <table class=\"table table-sm table-dark align-middle js-enhanced-table\">
          <thead>
            <tr>
              <th># Oficio</th>
              <th>Área</th>
              <th>Trámite</th>
              <th>Vence</th>
              <th class=\"text-end\">Días</th>
            </tr>
          </thead>
          <tbody>
            {% for r in cisaiProximos|default([]) %}
              <tr
                data-asunto=\"{{ r.numero_oficio }} {{ r.area }}\"
                data-stage=\"en_proceso\"
                data-text=\"{{ r.numero_oficio }} {{ r.area }} {{ r.fecha_termino ? r.fecha_termino|date('Y-m-d') : '' }}\"
              >
                <td class=\"fw-bold\">{{ r.numero_oficio }}</td>
                <td>{{ r.area }}</td>
                <td>{{ r.fecha_tramite ? r.fecha_tramite|date('Y-m-d') : '—' }}</td>
                <td>
                  {% set d = r.fecha_termino ? r.fecha_termino|date('Y-m-d') : '—' %}
                  <span class=\"fw-semibold {{ r.dias_restantes <= 2 ? 'text-warning' : '' }}\">{{ d }}</span>
                </td>
                <td class=\"text-end\">
                  <span class=\"badge {{ r.dias_restantes <= 2 ? 'bg-warning-subtle text-warning-emphasis' : 'bg-secondary-subtle text-secondary-emphasis' }}\">
                    {{ r.dias_restantes }}
                  </span>
                </td>
              </tr>
            {% else %}
              <tr><td colspan=\"5\" class=\"text-muted\">Sin vencimientos próximos</td></tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  </section>

  {# ===== Oficios recientes ===== #}
  <section class=\"card mb-4\">
    <header class=\"card-header d-flex align-items-center justify-content-between\">
      <span class=\"card-title\"><i class=\"bi bi-clock-history\"></i> Oficios recientes</span>
      <a class=\"btn btn-outline-light btn-sm\" href=\"{{ path('app_oficio_index') }}\">Ver todos</a>
    </header>
    <div class=\"card-body\">
      <div class=\"table-wrap\">
        <table class=\"table table-sm table-dark align-middle\">
          <thead>
            <tr>
              <th>ID</th>
              <th>Asunto</th>
              <th>Remitente</th>
              <th>Destinatario</th>
              <th>Fecha</th>
              <th class=\"text-end\">Acciones</th>
            </tr>
          </thead>
          <tbody>
            {% for o in recentOficios|default([]) %}
              <tr>
                <td class=\"fw-bold\">{{ o.id }}</td>
                <td>
                  {% set t = o.title ?? 'Sin título' %}
                  {{ t|slice(0,70) ~ (t|length > 70 ? '…' : '') }}
                </td>
                <td>{{ o.sender|default('—') }}</td>
                <td>{{ o.recipient|default('—') }}</td>
                <td>{{ o.date ? o.date|date('Y-m-d') : '—' }}</td>
                <td class=\"text-end\">
                  <a class=\"btn btn-sm btn-outline-light\" href=\"{{ path('app_oficio_show', {id:o.id}) }}\">Ver</a>
                  <a class=\"btn btn-sm btn-primary\" href=\"{{ path('app_oficio_edit', {id:o.id}) }}\">Editar</a>
                </td>
              </tr>
            {% else %}
              <tr><td colspan=\"6\" class=\"text-muted\">No hay actividad reciente</td></tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  </section>

  {# ===== Acciones rápidas ===== #}
  <section class=\"card mb-4\">
    <header class=\"card-header d-flex align-items-center justify-content-between\">
      <span class=\"card-title\"><i class=\"bi bi-lightning-charge\"></i> Acciones Rápidas</span>
    </header>
    <div class=\"quick-actions\">
      <a href=\"{{ path('app_oficio_new') }}\" class=\"glass-btn primary\"><i class=\"bi bi-plus-circle\"></i> Nuevo Oficio</a>
      <a href=\"{{ path('app_correspondence_new') }}\" class=\"glass-btn primary\"><i class=\"bi bi-plus-circle\"></i> Nueva Correspondencia</a>
      <a href=\"{{ path('app_circular_new') }}\" class=\"glass-btn primary\"><i class=\"bi bi-plus-circle\"></i> Nueva Circular</a>
      <a href=\"{{ path('app_scanner_new') }}\" class=\"glass-btn success\"><i class=\"bi bi-upc-scan\"></i> Escanear Documento</a>
    </div>
  </section>

</div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Datos de ejemplo para las gráficas (reemplazar con datos reales del backend)
      const weeklyData = {
        labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
        datasets: [
          {
            label: 'Oficios',
            data: [12, 19, 8, 15, 22, 3, 7],
            backgroundColor: 'rgba(178, 34, 93, 0.8)',
            borderColor: 'rgba(178, 34, 93, 1)',
            borderWidth: 2,
            borderRadius: 8,
            borderSkipped: false,
          },
          {
            label: 'Correspondencias',
            data: [8, 12, 6, 10, 15, 2, 4],
            backgroundColor: 'rgba(40, 167, 69, 0.8)',
            borderColor: 'rgba(40, 167, 69, 1)',
            borderWidth: 2,
            borderRadius: 8,
            borderSkipped: false,
          },
          {
            label: 'Circulares',
            data: [5, 8, 4, 7, 12, 1, 2],
            backgroundColor: 'rgba(255, 193, 7, 0.8)',
            borderColor: 'rgba(255, 193, 7, 1)',
            borderWidth: 2,
            borderRadius: 8,
            borderSkipped: false,
          }
        ]
      };

      const statusData = {
        labels: ['Cerrado', 'En Proceso', 'Abierto', 'Pendiente'],
        datasets: [{
          data: [45, 30, 15, 10],
          backgroundColor: [
            'rgba(40, 167, 69, 0.8)',
            'rgba(255, 193, 7, 0.8)',
            'rgba(13, 110, 253, 0.8)',
            'rgba(108, 117, 125, 0.8)'
          ],
          borderWidth: 2,
          borderColor: '#fff'
        }]
      };

      const dailyTrendsData = {
        labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
        datasets: [{
          label: 'Documentos Procesados',
          data: [25, 32, 28, 35, 40, 15, 8],
          borderColor: 'rgba(178, 34, 93, 1)',
          backgroundColor: 'rgba(178, 34, 93, 0.1)',
          borderWidth: 3,
          fill: true,
          tension: 0.4
        }]
      };

      const areaEfficiencyData = {
        labels: ['Dirección General', 'Recursos Humanos', 'Finanzas', 'Operaciones', 'TI'],
        datasets: [{
          label: 'Eficiencia (%)',
          data: [85, 92, 78, 88, 95],
          backgroundColor: [
            'rgba(178, 34, 93, 0.8)',
            'rgba(40, 167, 69, 0.8)',
            'rgba(255, 193, 7, 0.8)',
            'rgba(13, 110, 253, 0.8)',
            'rgba(111, 66, 193, 0.8)'
          ],
          borderWidth: 0
        }]
      };

      // Configuración común para Chart.js
      const chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'top',
            labels: {
              padding: 15,
              usePointStyle: true,
            }
          }
        }
      };

      // Inicializar gráficas
      const weeklyActivityChart = new Chart(
        document.getElementById('weeklyActivityChart'),
        {
          type: 'bar',
          data: weeklyData,
          options: {
            ...chartOptions,
            scales: {
              y: {
                beginAtZero: true,
                grid: {
                  color: 'rgba(0, 0, 0, 0.1)'
                }
              },
              x: {
                grid: {
                  display: false
                }
              }
            }
          }
        }
      );

      const statusDistributionChart = new Chart(
        document.getElementById('statusDistributionChart'),
        {
          type: 'doughnut',
          data: statusData,
          options: {
            ...chartOptions,
            cutout: '60%',
            plugins: {
              ...chartOptions.plugins,
              tooltip: {
                callbacks: {
                  label: function(context) {
                    const label = context.label || '';
                    const value = context.parsed;
                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                    const percentage = Math.round((value / total) * 100);
                    return `\${label}: \${value} (\${percentage}%)`;
                  }
                }
              }
            }
          }
        }
      );

      const dailyTrendsChart = new Chart(
        document.getElementById('dailyTrendsChart'),
        {
          type: 'line',
          data: dailyTrendsData,
          options: {
            ...chartOptions,
            scales: {
              y: {
                beginAtZero: true,
                grid: {
                  color: 'rgba(0, 0, 0, 0.1)'
                }
              },
              x: {
                grid: {
                  display: false
                }
              }
            }
          }
        }
      );

      const areaEfficiencyChart = new Chart(
        document.getElementById('areaEfficiencyChart'),
        {
          type: 'bar',
          data: areaEfficiencyData,
          options: {
            ...chartOptions,
            indexAxis: 'y',
            scales: {
              x: {
                beginAtZero: true,
                max: 100,
                grid: {
                  color: 'rgba(0, 0, 0, 0.1)'
                }
              },
              y: {
                grid: {
                  display: false
                }
              }
            }
          }
        }
      );

      // Selector de semana
      document.getElementById('weekSelector').addEventListener('change', function(e) {
        // Aquí iría la lógica para actualizar los datos según la semana seleccionada
        console.log('Semana seleccionada:', e.target.value);
        // En una implementación real, harías una petición al servidor para obtener los datos de esa semana
      });

      // Animaciones para las cards
      const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
          }
        });
      }, observerOptions);

      document.querySelectorAll('.card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
      });
    });
  </script>
{% endblock %}", "main/dashboard.html.twig", "/var/www/html/templates/main/dashboard.html.twig");
    }
}
