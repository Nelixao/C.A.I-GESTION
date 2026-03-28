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

/* main/agenda.html.twig */
class __TwigTemplate_66b0c0d1cc7c98cf6473a19b705bcc56 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/agenda.html.twig"));

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

        yield "Inicio";
        
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
        yield "<div class=\"container content\">

  ";
        // line 9
        yield "  <div class=\"row mb-3 text-center\">
    <div class=\"col\">
    <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/public/images/favicon.png"), "html", null, true);
        yield "\" alt=\"Logo CAI-GESTION\" width=\"150\">

      <h1 class=\"card-title mb-1\">Bienvenida al Sistema Administrativo</h1>
      <p class=\"text-muted\">Gestiona oficios, correspondencias, circulares y documentos escaneados</p>
    </div>
  
  ";
        // line 18
        yield "  <section class=\"card mb-4\">
    <header class=\"card-header d-flex align-items-center justify-content-between flex-wrap gap-2\">
      <span class=\"card-title\">
        <i class=\"bi bi-calendar3\"></i> Calendario institucional
      </span>

      <div class=\"d-flex align-items-center gap-2\">
        ";
        // line 26
        yield "        <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Filtros\">
          <input type=\"checkbox\" class=\"btn-check fc-filter\" id=\"f-oficios\" value=\"Oficio\" checked>
          <label class=\"btn btn-outline-primary\" for=\"f-oficios\">
            <span class=\"badge me-1\" style=\"background:#1d4ed8\">&nbsp;</span> Oficios
          </label>

          <input type=\"checkbox\" class=\"btn-check fc-filter\" id=\"f-corresp\" value=\"Correspondencia\" checked>
          <label class=\"btn btn-outline-success\" for=\"f-corresp\">
            <span class=\"badge me-1\" style=\"background:#166534\">&nbsp;</span> Correspondencia
          </label>

          <input type=\"checkbox\" class=\"btn-check fc-filter\" id=\"f-circ\" value=\"Circular\" checked>
          <label class=\"btn btn-outline-warning\" for=\"f-circ\">
            <span class=\"badge me-1\" style=\"background:#a16207\">&nbsp;</span> Circulares
          </label>

          <input type=\"checkbox\" class=\"btn-check fc-filter\" id=\"f-nota\" value=\"Nota\" checked>
          <label class=\"btn btn-outline-secondary\" for=\"f-nota\">
            <span class=\"badge me-1\" style=\"background:#525252\">&nbsp;</span> Notas
          </label>
        </div>

        ";
        // line 49
        yield "        <div class=\"btn-group btn-group-sm ms-2\" role=\"group\">
          <button id=\"fc-today\" class=\"btn btn-outline-secondary\">Hoy</button>
          <button id=\"fc-prev\" class=\"btn btn-outline-secondary\">&laquo;</button>
          <button id=\"fc-next\" class=\"btn btn-outline-secondary\">&raquo;</button>
        </div>
      </div>
    </header>

    <div class=\"card-body p-0\">
      <div id=\"calendar\" class=\"p-2\"></div>
    </div>
  </section>

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
  <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css\" rel=\"stylesheet\">
  <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.15/index.global.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@6.1.15/index.global.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@6.1.15/index.global.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.15/locales/es.global.min.js\"></script>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');

    // Colores por tipo
    const TYPE_COLOR = {
      'Oficio':         '#1d4ed8', // azul
      'Correspondencia':'#166534', // verde
      'Circular':       '#a16207', // ámbar
      'Nota':           '#525252'  // gris
    };

    // Eventos desde el backend
    // { id, title, start(ISO), url?, extendedProps:{ type: 'Oficio|Correspondencia|Circular|Nota' } }
    const DB_EVENTS = ";
        // line 90
        yield json_encode(((array_key_exists("calendarEvents", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["calendarEvents"]) || array_key_exists("calendarEvents", $context) ? $context["calendarEvents"] : (function () { throw new RuntimeError('Variable "calendarEvents" does not exist.', 90, $this->source); })()), [])) : ([])));
        yield ";

    function getActiveTypes(){
      return new Set([...document.querySelectorAll('.fc-filter')]
        .filter(cb => cb.checked)
        .map(cb => cb.value));
    }

    // Fuente con filtrado en cliente
    const filteredSource = {
      events: function(fetchInfo, successCallback, failureCallback) {
        const active = getActiveTypes();
        const rows = DB_EVENTS
          .filter(e => active.has(e.extendedProps?.type))
          .map(e => ({
            ...e,
            backgroundColor: TYPE_COLOR[e.extendedProps?.type] || '#64748b',
            borderColor: TYPE_COLOR[e.extendedProps?.type] || '#64748b'
          }));
        successCallback(rows);
      }
    };

    const calendar = new FullCalendar.Calendar(calendarEl, {
      themeSystem: 'bootstrap5',
      locale: 'es',
      initialView: 'dayGridMonth',
      height: 'auto',
      headerToolbar: false,   // usamos controles externos
      selectable: false,
      editable: false,
      eventClick(info) {
        if (info.event.url) {
          window.location.href = info.event.url;
          info.jsEvent.preventDefault();
        }
      },
      eventDidMount(info){
        info.el.style.fontWeight = '600';
        info.el.style.borderRadius = '8px';
      },
      events: filteredSource.events
    });

    calendar.render();

    // Controles externos
    document.getElementById('fc-today').addEventListener('click', () => calendar.today());
    document.getElementById('fc-prev').addEventListener('click', () => calendar.prev());
    document.getElementById('fc-next').addEventListener('click', () => calendar.next());

    // Filtros
    document.querySelectorAll('.fc-filter').forEach(cb => {
      cb.addEventListener('change', () => {
        calendar.removeAllEvents();
        calendar.addEventSource(filteredSource);
        calendar.refetchEvents();
      });
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
        return "main/agenda.html.twig";
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
        return array (  195 => 90,  168 => 67,  158 => 66,  136 => 49,  112 => 26,  103 => 18,  94 => 11,  90 => 9,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inicio{% endblock %}

{% block body %}
<div class=\"container content\">

  {# Encabezado del módulo #}
  <div class=\"row mb-3 text-center\">
    <div class=\"col\">
    <img src=\"{{ asset('app/public/images/favicon.png') }}\" alt=\"Logo CAI-GESTION\" width=\"150\">

      <h1 class=\"card-title mb-1\">Bienvenida al Sistema Administrativo</h1>
      <p class=\"text-muted\">Gestiona oficios, correspondencias, circulares y documentos escaneados</p>
    </div>
  
  {# ===== Calendario institucional (FullCalendar) ===== #}
  <section class=\"card mb-4\">
    <header class=\"card-header d-flex align-items-center justify-content-between flex-wrap gap-2\">
      <span class=\"card-title\">
        <i class=\"bi bi-calendar3\"></i> Calendario institucional
      </span>

      <div class=\"d-flex align-items-center gap-2\">
        {# Filtros por tipo #}
        <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"Filtros\">
          <input type=\"checkbox\" class=\"btn-check fc-filter\" id=\"f-oficios\" value=\"Oficio\" checked>
          <label class=\"btn btn-outline-primary\" for=\"f-oficios\">
            <span class=\"badge me-1\" style=\"background:#1d4ed8\">&nbsp;</span> Oficios
          </label>

          <input type=\"checkbox\" class=\"btn-check fc-filter\" id=\"f-corresp\" value=\"Correspondencia\" checked>
          <label class=\"btn btn-outline-success\" for=\"f-corresp\">
            <span class=\"badge me-1\" style=\"background:#166534\">&nbsp;</span> Correspondencia
          </label>

          <input type=\"checkbox\" class=\"btn-check fc-filter\" id=\"f-circ\" value=\"Circular\" checked>
          <label class=\"btn btn-outline-warning\" for=\"f-circ\">
            <span class=\"badge me-1\" style=\"background:#a16207\">&nbsp;</span> Circulares
          </label>

          <input type=\"checkbox\" class=\"btn-check fc-filter\" id=\"f-nota\" value=\"Nota\" checked>
          <label class=\"btn btn-outline-secondary\" for=\"f-nota\">
            <span class=\"badge me-1\" style=\"background:#525252\">&nbsp;</span> Notas
          </label>
        </div>

        {# Controles #}
        <div class=\"btn-group btn-group-sm ms-2\" role=\"group\">
          <button id=\"fc-today\" class=\"btn btn-outline-secondary\">Hoy</button>
          <button id=\"fc-prev\" class=\"btn btn-outline-secondary\">&laquo;</button>
          <button id=\"fc-next\" class=\"btn btn-outline-secondary\">&raquo;</button>
        </div>
      </div>
    </header>

    <div class=\"card-body p-0\">
      <div id=\"calendar\" class=\"p-2\"></div>
    </div>
  </section>

</div>
{% endblock %}

{# ======= CDNs de FullCalendar ======= #}
{% block javascripts %}
  {{ parent() }}
  <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css\" rel=\"stylesheet\">
  <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.15/index.global.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@6.1.15/index.global.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@6.1.15/index.global.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.15/locales/es.global.min.js\"></script>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');

    // Colores por tipo
    const TYPE_COLOR = {
      'Oficio':         '#1d4ed8', // azul
      'Correspondencia':'#166534', // verde
      'Circular':       '#a16207', // ámbar
      'Nota':           '#525252'  // gris
    };

    // Eventos desde el backend
    // { id, title, start(ISO), url?, extendedProps:{ type: 'Oficio|Correspondencia|Circular|Nota' } }
    const DB_EVENTS = {{ calendarEvents|default([])|json_encode|raw }};

    function getActiveTypes(){
      return new Set([...document.querySelectorAll('.fc-filter')]
        .filter(cb => cb.checked)
        .map(cb => cb.value));
    }

    // Fuente con filtrado en cliente
    const filteredSource = {
      events: function(fetchInfo, successCallback, failureCallback) {
        const active = getActiveTypes();
        const rows = DB_EVENTS
          .filter(e => active.has(e.extendedProps?.type))
          .map(e => ({
            ...e,
            backgroundColor: TYPE_COLOR[e.extendedProps?.type] || '#64748b',
            borderColor: TYPE_COLOR[e.extendedProps?.type] || '#64748b'
          }));
        successCallback(rows);
      }
    };

    const calendar = new FullCalendar.Calendar(calendarEl, {
      themeSystem: 'bootstrap5',
      locale: 'es',
      initialView: 'dayGridMonth',
      height: 'auto',
      headerToolbar: false,   // usamos controles externos
      selectable: false,
      editable: false,
      eventClick(info) {
        if (info.event.url) {
          window.location.href = info.event.url;
          info.jsEvent.preventDefault();
        }
      },
      eventDidMount(info){
        info.el.style.fontWeight = '600';
        info.el.style.borderRadius = '8px';
      },
      events: filteredSource.events
    });

    calendar.render();

    // Controles externos
    document.getElementById('fc-today').addEventListener('click', () => calendar.today());
    document.getElementById('fc-prev').addEventListener('click', () => calendar.prev());
    document.getElementById('fc-next').addEventListener('click', () => calendar.next());

    // Filtros
    document.querySelectorAll('.fc-filter').forEach(cb => {
      cb.addEventListener('change', () => {
        calendar.removeAllEvents();
        calendar.addEventSource(filteredSource);
        calendar.refetchEvents();
      });
    });
  });
  </script>


{% endblock %}
", "main/agenda.html.twig", "/var/www/html/templates/main/agenda.html.twig");
    }
}
