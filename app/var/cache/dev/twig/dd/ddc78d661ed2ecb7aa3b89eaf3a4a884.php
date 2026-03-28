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

/* calendario/index.html.twig */
class __TwigTemplate_bc40c171fd6f60372207887eb35c2e1a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendario/index.html.twig"));

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

        yield "Calendario";
        
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
  <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css\" rel=\"stylesheet\">
  <style>
    #calendar {
      background: rgba(255,255,255,0.03);
      border-radius: 1rem;
      padding: 1.25rem;
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255,255,255,0.08);
    }
    .fc { color: #e2e8f0; }
    .fc-toolbar-title { font-family: 'DM Serif Text', serif; color: #fff; }
    .fc-button-primary { background: rgba(155,34,71,0.7) !important; border-color: #9b2247 !important; }
    .fc-button-primary:hover { background: #9b2247 !important; }
    .fc-button-active { background: #9b2247 !important; }
    .fc-daygrid-day { background: transparent; }
    .fc-daygrid-day:hover { background: rgba(255,255,255,0.04); }
    .fc-day-today { background: rgba(165,127,44,0.12) !important; }
    .fc-col-header-cell { color: rgba(255,255,255,0.55); font-size: .8rem; letter-spacing:.05em; }
    .fc-daygrid-day-number { color: rgba(255,255,255,0.7); }
    .fc-event { border-radius: .4rem; border: none !important; font-size: .78rem; cursor: pointer; }
    .fc-event-title { font-weight: 600; }
    .alerta-ring { box-shadow: 0 0 0 3px rgba(220,53,69,.8) !important; }

    /* Leyenda */
    .legend-grid { display: flex; flex-wrap: wrap; gap: .75rem 1.5rem; }
    .legend-item { display: flex; align-items: center; gap: .4rem; font-size: .83rem; color: rgba(255,255,255,.7); }
    .legend-dot { width: 12px; height: 12px; border-radius: 50%; flex-shrink: 0; }

    /* Alertas de vencimiento */
    .alert-strip {
      background: rgba(220,53,69,.15);
      border: 1px solid rgba(220,53,69,.35);
      border-radius: .6rem;
      padding: .75rem 1rem;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 46
        yield "<div class=\"container-glass\">

  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\"><i class=\"bi bi-calendar3 me-2\"></i>Calendario</h1>
    <div class=\"legend-grid\">
      <span class=\"legend-item\"><span class=\"legend-dot\" style=\"background:#dc3545\"></span> CISAE</span>
      <span class=\"legend-item\"><span class=\"legend-dot\" style=\"background:#a57f2c\"></span> Oficios</span>
      <span class=\"legend-item\"><span class=\"legend-dot\" style=\"background:#9b2247\"></span> Correspondencia</span>
      <span class=\"legend-item\"><span class=\"legend-dot\" style=\"background:#1e5b4f\"></span> Circulares</span>
    </div>
  </div>

  ";
        // line 59
        yield "  <div id=\"alertasVencimiento\" class=\"mb-3\"></div>

  <div id=\"calendar\"></div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/locales/es.global.min.js\"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const calendarEl = document.getElementById('calendar');
      const alertasEl  = document.getElementById('alertasVencimiento');
      const hoy        = new Date();

      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView : 'dayGridMonth',
        locale      : 'es',
        headerToolbar: {
          left  : 'prev,next today',
          center: 'title',
          right : 'dayGridMonth,timeGridWeek,listWeek'
        },
        events: '";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendario_eventos");
        yield "',

        eventDidMount: function (info) {
          const endDate = info.event.end ?? info.event.start;
          if (endDate) {
            const diff = (endDate - hoy) / (1000 * 60 * 60 * 24);
            if (diff >= 0 && diff <= 3) {
              info.el.classList.add('alerta-ring');
            }
          }
        },

        eventClick: function (info) {
          if (info.event.url) {
            info.jsEvent.preventDefault();
            window.location.href = info.event.url;
          }
        },

        // Muestra tooltip con tipo al hover
        eventMouseEnter: function (info) {
          const tipo = info.event.extendedProps.tipo ?? '';
          info.el.setAttribute('title', tipo + ': ' + info.event.title);
        },

        loading: function (isLoading) {
          if (!isLoading) buildAlerts();
        }
      });

      calendar.render();

      function buildAlerts() {
        const events = calendar.getEvents();
        const proximos = events.filter(e => {
          const end = e.end ?? e.start;
          if (!end) return false;
          const diff = (end - hoy) / (1000 * 60 * 60 * 24);
          return diff >= 0 && diff <= 3;
        });

        if (proximos.length === 0) return;

        const items = proximos.map(e => {
          const end  = e.end ?? e.start;
          const diff = Math.ceil((end - hoy) / (1000 * 60 * 60 * 24));
          const tipo = e.extendedProps.tipo ?? 'Documento';
          return `<span class=\"badge bg-danger me-1 mb-1\">
                    <i class=\"bi bi-clock\"></i> \${tipo}: \${e.title} — \${diff}d
                  </span>`;
        }).join('');

        alertasEl.innerHTML = `
          <div class=\"alert-strip\">
            <strong><i class=\"bi bi-exclamation-triangle-fill text-danger me-2\"></i>
            Vencimientos próximos (\${proximos.length}):</strong>
            <div class=\"mt-1\">\${items}</div>
          </div>`;
      }
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
        return "calendario/index.html.twig";
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
        return array (  202 => 84,  181 => 67,  171 => 66,  158 => 59,  144 => 46,  134 => 45,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Calendario{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css\" rel=\"stylesheet\">
  <style>
    #calendar {
      background: rgba(255,255,255,0.03);
      border-radius: 1rem;
      padding: 1.25rem;
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255,255,255,0.08);
    }
    .fc { color: #e2e8f0; }
    .fc-toolbar-title { font-family: 'DM Serif Text', serif; color: #fff; }
    .fc-button-primary { background: rgba(155,34,71,0.7) !important; border-color: #9b2247 !important; }
    .fc-button-primary:hover { background: #9b2247 !important; }
    .fc-button-active { background: #9b2247 !important; }
    .fc-daygrid-day { background: transparent; }
    .fc-daygrid-day:hover { background: rgba(255,255,255,0.04); }
    .fc-day-today { background: rgba(165,127,44,0.12) !important; }
    .fc-col-header-cell { color: rgba(255,255,255,0.55); font-size: .8rem; letter-spacing:.05em; }
    .fc-daygrid-day-number { color: rgba(255,255,255,0.7); }
    .fc-event { border-radius: .4rem; border: none !important; font-size: .78rem; cursor: pointer; }
    .fc-event-title { font-weight: 600; }
    .alerta-ring { box-shadow: 0 0 0 3px rgba(220,53,69,.8) !important; }

    /* Leyenda */
    .legend-grid { display: flex; flex-wrap: wrap; gap: .75rem 1.5rem; }
    .legend-item { display: flex; align-items: center; gap: .4rem; font-size: .83rem; color: rgba(255,255,255,.7); }
    .legend-dot { width: 12px; height: 12px; border-radius: 50%; flex-shrink: 0; }

    /* Alertas de vencimiento */
    .alert-strip {
      background: rgba(220,53,69,.15);
      border: 1px solid rgba(220,53,69,.35);
      border-radius: .6rem;
      padding: .75rem 1rem;
    }
  </style>
{% endblock %}

{% block body %}
<div class=\"container-glass\">

  <div class=\"d-flex justify-content-between align-items-center flex-wrap mb-3\">
    <h1 class=\"page-title\"><i class=\"bi bi-calendar3 me-2\"></i>Calendario</h1>
    <div class=\"legend-grid\">
      <span class=\"legend-item\"><span class=\"legend-dot\" style=\"background:#dc3545\"></span> CISAE</span>
      <span class=\"legend-item\"><span class=\"legend-dot\" style=\"background:#a57f2c\"></span> Oficios</span>
      <span class=\"legend-item\"><span class=\"legend-dot\" style=\"background:#9b2247\"></span> Correspondencia</span>
      <span class=\"legend-item\"><span class=\"legend-dot\" style=\"background:#1e5b4f\"></span> Circulares</span>
    </div>
  </div>

  {# Alertas de vencimientos próximos (se cargan vía JS) #}
  <div id=\"alertasVencimiento\" class=\"mb-3\"></div>

  <div id=\"calendar\"></div>

</div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/locales/es.global.min.js\"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const calendarEl = document.getElementById('calendar');
      const alertasEl  = document.getElementById('alertasVencimiento');
      const hoy        = new Date();

      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView : 'dayGridMonth',
        locale      : 'es',
        headerToolbar: {
          left  : 'prev,next today',
          center: 'title',
          right : 'dayGridMonth,timeGridWeek,listWeek'
        },
        events: '{{ path('app_calendario_eventos') }}',

        eventDidMount: function (info) {
          const endDate = info.event.end ?? info.event.start;
          if (endDate) {
            const diff = (endDate - hoy) / (1000 * 60 * 60 * 24);
            if (diff >= 0 && diff <= 3) {
              info.el.classList.add('alerta-ring');
            }
          }
        },

        eventClick: function (info) {
          if (info.event.url) {
            info.jsEvent.preventDefault();
            window.location.href = info.event.url;
          }
        },

        // Muestra tooltip con tipo al hover
        eventMouseEnter: function (info) {
          const tipo = info.event.extendedProps.tipo ?? '';
          info.el.setAttribute('title', tipo + ': ' + info.event.title);
        },

        loading: function (isLoading) {
          if (!isLoading) buildAlerts();
        }
      });

      calendar.render();

      function buildAlerts() {
        const events = calendar.getEvents();
        const proximos = events.filter(e => {
          const end = e.end ?? e.start;
          if (!end) return false;
          const diff = (end - hoy) / (1000 * 60 * 60 * 24);
          return diff >= 0 && diff <= 3;
        });

        if (proximos.length === 0) return;

        const items = proximos.map(e => {
          const end  = e.end ?? e.start;
          const diff = Math.ceil((end - hoy) / (1000 * 60 * 60 * 24));
          const tipo = e.extendedProps.tipo ?? 'Documento';
          return `<span class=\"badge bg-danger me-1 mb-1\">
                    <i class=\"bi bi-clock\"></i> \${tipo}: \${e.title} — \${diff}d
                  </span>`;
        }).join('');

        alertasEl.innerHTML = `
          <div class=\"alert-strip\">
            <strong><i class=\"bi bi-exclamation-triangle-fill text-danger me-2\"></i>
            Vencimientos próximos (\${proximos.length}):</strong>
            <div class=\"mt-1\">\${items}</div>
          </div>`;
      }
    });
  </script>
{% endblock %}
", "calendario/index.html.twig", "/var/www/html/templates/calendario/index.html.twig");
    }
}
