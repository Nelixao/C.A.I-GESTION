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

/* main/index.html.twig */
class __TwigTemplate_b591e4629e9e88b7e7c5437cfa17346b extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

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

        yield "Inicio - Sistema Administrativo";
        
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
        yield "<div class=\"container-fluid content px-0\">

  ";
        // line 9
        yield "  <section class=\"hero-section bg-primary-custom text-white py-5 mb-4\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-lg-6\">
          <h1 class=\"display-4 fw-bold mb-3\">Gestión Documental Inteligente</h1>
          <p class=\"lead mb-4\">Sistema integral para administrar oficios, correspondencia y documentos institucionales de manera eficiente</p>
          <div class=\"d-flex flex-wrap gap-3\">
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_new");
        yield "\" class=\"btn btn-light btn-lg\">
              <i class=\"bi bi-plus-circle me-2\"></i>Nuevo Documento
            </a>
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"btn btn-outline-light btn-lg\">
              <i class=\"bi bi-speedometer2 me-2\"></i>Ver Dashboard
            </a>
          </div>
        </div>
        <div class=\"col-lg-6 text-center\">
          <img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/hero-document.svg"), "html", null, true);
        yield "\" alt=\"Gestión Documental\" class=\"img-fluid\" style=\"max-height: 300px;\">
        </div>
      </div>
    </div>
  </section>

  <div class=\"container\">

  ";
        // line 34
        yield "  <section class=\"row g-4 mb-5\">
    <div class=\"col-md-3\">
      <div class=\"card stat-card bg-primary text-white h-100\">
        <div class=\"card-body\">
          <div class=\"d-flex align-items-center\">
            <div class=\"flex-shrink-0\">
              <i class=\"bi bi-file-earmark-text display-6\"></i>
            </div>
            <div class=\"flex-grow-1 ms-3\">
              <h2 class=\"mb-0\">1,247</h2>
              <p class=\"mb-0\">Oficios</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-3\">
      <div class=\"card stat-card bg-success text-white h-100\">
        <div class=\"card-body\">
          <div class=\"d-flex align-items-center\">
            <div class=\"flex-shrink-0\">
              <i class=\"bi bi-envelope display-6\"></i>
            </div>
            <div class=\"flex-grow-1 ms-3\">
              <h2 class=\"mb-0\">856</h2>
              <p class=\"mb-0\">Correspondencias</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-3\">
      <div class=\"card stat-card bg-warning text-white h-100\">
        <div class=\"card-body\">
          <div class=\"d-flex align-items-center\">
            <div class=\"flex-shrink-0\">
              <i class=\"bi bi-arrow-repeat display-6\"></i>
            </div>
            <div class=\"flex-grow-1 ms-3\">
              <h2 class=\"mb-0\">324</h2>
              <p class=\"mb-0\">Circulares</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-3\">
      <div class=\"card stat-card bg-info text-white h-100\">
        <div class=\"card-body\">
          <div class=\"d-flex align-items-center\">
            <div class=\"flex-shrink-0\">
              <i class=\"bi bi-scanner display-6\"></i>
            </div>
            <div class=\"flex-grow-1 ms-3\">
              <h2 class=\"mb-0\">2,158</h2>
              <p class=\"mb-0\">Documentos Escaneados</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  ";
        // line 98
        yield "  <section class=\"card mb-5 glass-card\">
    <div class=\"card-body\">
      <h3 class=\"card-title mb-4\"><i class=\"bi bi-lightning-charge text-primary me-2\"></i>Acciones Rápidas</h3>
      <div class=\"row g-3\">
        <div class=\"col-md-3 col-6\">
          <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_new");
        yield "\" class=\"quick-action-card\">
            <div class=\"card h-100 text-center hover-lift\">
              <div class=\"card-body\">
                <i class=\"bi bi-file-earmark-plus display-4 text-primary mb-3\"></i>
                <h6 class=\"card-title\">Nuevo Oficio</h6>
              </div>
            </div>
          </a>
        </div>
        <div class=\"col-md-3 col-6\">
          <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correspondence_new");
        yield "\" class=\"quick-action-card\">
            <div class=\"card h-100 text-center hover-lift\">
              <div class=\"card-body\">
                <i class=\"bi bi-envelope-plus display-4 text-success mb-3\"></i>
                <h6 class=\"card-title\">Nueva Correspondencia</h6>
              </div>
            </div>
          </a>
        </div>
        <div class=\"col-md-3 col-6\">
          <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_circular_new");
        yield "\" class=\"quick-action-card\">
            <div class=\"card h-100 text-center hover-lift\">
              <div class=\"card-body\">
                <i class=\"bi bi-arrow-repeat display-4 text-warning mb-3\"></i>
                <h6 class=\"card-title\">Nueva Circular</h6>
              </div>
            </div>
          </a>
        </div>
        <div class=\"col-md-3 col-6\">
          <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_scanner_new");
        yield "\" class=\"quick-action-card\">
            <div class=\"card h-100 text-center hover-lift\">
              <div class=\"card-body\">
                <i class=\"bi bi-upc-scan display-4 text-info mb-3\"></i>
                <h6 class=\"card-title\">Escanear Documento</h6>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  ";
        // line 147
        yield "  <div class=\"row g-4\">
    ";
        // line 149
        yield "    <div class=\"col-lg-8\">
      
      ";
        // line 152
        yield "      <section class=\"card mb-4 glass-card\">
        <div class=\"card-header d-flex align-items-center justify-content-between\">
          <h5 class=\"card-title mb-0\"><i class=\"bi bi-clock-history text-primary me-2\"></i>Actividad Reciente</h5>
          <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_index");
        yield "\" class=\"btn btn-sm btn-outline-primary\">Ver Todo</a>
        </div>
        <div class=\"card-body\">
          <div class=\"activity-timeline\">
            <div class=\"activity-item\">
              <div class=\"activity-icon bg-primary\">
                <i class=\"bi bi-file-earmark-text\"></i>
              </div>
              <div class=\"activity-content\">
                <h6>Nuevo oficio registrado</h6>
                <p class=\"text-muted mb-1\">Oficio #2025-DG-00123 - Dirección General</p>
                <small class=\"text-muted\">Hace 2 minutos</small>
              </div>
            </div>
            <div class=\"activity-item\">
              <div class=\"activity-icon bg-success\">
                <i class=\"bi bi-envelope\"></i>
              </div>
              <div class=\"activity-content\">
                <h6>Correspondencia actualizada</h6>
                <p class=\"text-muted mb-1\">Estado cambiado a \"Completado\"</p>
                <small class=\"text-muted\">Hace 15 minutos</small>
              </div>
            </div>
            <div class=\"activity-item\">
              <div class=\"activity-icon bg-warning\">
                <i class=\"bi bi-arrow-repeat\"></i>
              </div>
              <div class=\"activity-content\">
                <h6>Circular distribuída</h6>
                <p class=\"text-muted mb-1\">Circular #CIR-2025-045 a todas las áreas</p>
                <small class=\"text-muted\">Hace 1 hora</small>
              </div>
            </div>
          </div>
        </div>
      </section>

      ";
        // line 194
        yield "      <section class=\"card glass-card\">
        <div class=\"card-header\">
          <h5 class=\"card-title mb-0\"><i class=\"bi bi-stars text-primary me-2\"></i>Características del Sistema</h5>
        </div>
        <div class=\"card-body\">
          <div class=\"row g-3\">
            <div class=\"col-md-6\">
              <div class=\"feature-card\">
                <i class=\"bi bi-diagram-3 feature-icon text-primary\"></i>
                <h6>Gestión de Flujos</h6>
                <p class=\"text-muted mb-0\">Control completo del ciclo de vida documental</p>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"feature-card\">
                <i class=\"bi bi-shield-check feature-icon text-success\"></i>
                <h6>Seguridad Integral</h6>
                <p class=\"text-muted mb-0\">Acceso controlado por roles y permisos</p>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"feature-card\">
                <i class=\"bi bi-search feature-icon text-info\"></i>
                <h6>Búsqueda Avanzada</h6>
                <p class=\"text-muted mb-0\">Encuentra documentos en segundos</p>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"feature-card\">
                <i class=\"bi bi-graph-up feature-icon text-warning\"></i>
                <h6>Reportes en Tiempo Real</h6>
                <p class=\"text-muted mb-0\">Métricas y estadísticas actualizadas</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    ";
        // line 234
        yield "    <div class=\"col-lg-4\">
      
      ";
        // line 237
        yield "      <section class=\"card mb-4 glass-card\">
        <div class=\"card-header\">
          <h5 class=\"card-title mb-0\"><i class=\"bi bi-calendar3 text-primary me-2\"></i>Calendario</h5>
        </div>
        <div class=\"card-body\">
          <div id=\"mini-calendar\"></div>
          <div class=\"mt-3\">
            <div class=\"d-flex align-items-center mb-2\">
              <span class=\"badge bg-primary me-2\">&nbsp;</span>
              <small>Oficios</small>
            </div>
            <div class=\"d-flex align-items-center mb-2\">
              <span class=\"badge bg-success me-2\">&nbsp;</span>
              <small>Correspondencia</small>
            </div>
            <div class=\"d-flex align-items-center\">
              <span class=\"badge bg-warning me-2\">&nbsp;</span>
              <small>Circulares</small>
            </div>
          </div>
        </div>
      </section>

      ";
        // line 261
        yield "      <section class=\"card glass-card\">
        <div class=\"card-header\">
          <h5 class=\"card-title mb-0\"><i class=\"bi bi-pie-chart text-primary me-2\"></i>Estado de Documentos</h5>
        </div>
        <div class=\"card-body\">
          <canvas id=\"docStatusChart\" width=\"300\" height=\"200\"></canvas>
          <div class=\"mt-3 text-center\">
            <div class=\"row g-2\">
              <div class=\"col-4\">
                <div class=\"status-indicator bg-primary\">
                  <span class=\"count\">45%</span>
                  <small>En Proceso</small>
                </div>
              </div>
              <div class=\"col-4\">
                <div class=\"status-indicator bg-success\">
                  <span class=\"count\">35%</span>
                  <small>Completados</small>
                </div>
              </div>
              <div class=\"col-4\">
                <div class=\"status-indicator bg-warning\">
                  <span class=\"count\">20%</span>
                  <small>Pendientes</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 298
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 299
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
:root {
  --primary-color: #B2225D;
  --primary-dark: #8a1a4a;
  --gradient-primary: linear-gradient(135deg, #B2225D 0%, #8a1a4a 100%);
}

/* Hero Section */
.hero-section {
  background: var(--gradient-primary);
  position: relative;
  overflow: hidden;
}

.hero-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url(\"data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E\");
}

/* Cards */
.glass-card {
  background: rgba(255, 255, 255, 0.9);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 16px;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
}

.stat-card {
  border: none;
  border-radius: 16px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stat-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
}

/* Quick Actions */
.quick-action-card {
  text-decoration: none;
  color: inherit;
}

.hover-lift {
  transition: all 0.3s ease;
  border: 1px solid rgba(0, 0, 0, 0.05);
}

.hover-lift:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
  border-color: var(--primary-color);
}

/* Activity Timeline */
.activity-timeline {
  position: relative;
}

.activity-timeline::before {
  content: '';
  position: absolute;
  left: 25px;
  top: 0;
  bottom: 0;
  width: 2px;
  background: #e9ecef;
}

.activity-item {
  display: flex;
  align-items: flex-start;
  margin-bottom: 1.5rem;
  position: relative;
}

.activity-icon {
  width: 50px;
  height: 50px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  margin-right: 1rem;
  flex-shrink: 0;
  z-index: 2;
}

.activity-content {
  flex: 1;
}

.activity-content h6 {
  margin-bottom: 0.25rem;
  color: var(--primary-color);
}

/* Features */
.feature-card {
  text-align: center;
  padding: 1.5rem 1rem;
  border-radius: 12px;
  background: rgba(178, 34, 93, 0.05);
  transition: all 0.3s ease;
  height: 100%;
}

.feature-card:hover {
  background: rgba(178, 34, 93, 0.1);
  transform: translateY(-2px);
}

.feature-icon {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

/* Mini Calendar */
#mini-calendar {
  border-radius: 12px;
  overflow: hidden;
}

/* Status Indicators */
.status-indicator {
  padding: 0.75rem 0.5rem;
  border-radius: 8px;
  color: white;
  text-align: center;
}

.status-indicator .count {
  display: block;
  font-size: 1.25rem;
  font-weight: bold;
}

/* Responsive */
@media (max-width: 768px) {
  .hero-section .display-4 {
    font-size: 2rem;
  }
  
  .stat-card .display-6 {
    font-size: 2rem;
  }
  
  .activity-timeline::before {
    left: 20px;
  }
  
  .activity-icon {
    width: 40px;
    height: 40px;
  }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 467
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 468
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Document Status Chart
  const ctx = document.getElementById('docStatusChart').getContext('2d');
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['En Proceso', 'Completados', 'Pendientes'],
      datasets: [{
        data: [45, 35, 20],
        backgroundColor: ['#B2225D', '#28a745', '#ffc107'],
        borderWidth: 0
      }]
    },
    options: {
      cutout: '70%',
      plugins: {
        legend: {
          display: false
        }
      },
      animation: {
        animateScale: true,
        animateRotate: true
      }
    }
  });

  // Mini Calendar (simplified version)
  const miniCalendar = document.getElementById('mini-calendar');
  if (miniCalendar) {
    const today = new Date();
    const month = today.toLocaleDateString('es', { month: 'long', year: 'numeric' });
    
    miniCalendar.innerHTML = `
      <div class=\"text-center mb-3\">
        <h6 class=\"text-primary mb-2\">\${month}</h6>
        <div class=\"calendar-grid\">
          \${['L', 'M', 'M', 'J', 'V', 'S', 'D'].map(day => 
            `<div class=\"calendar-header\">\${day}</div>`
          ).join('')}
          \${Array.from({length: 31}, (_, i) => {
            const day = i + 1;
            const isToday = day === today.getDate();
            return `<div class=\"calendar-day \${isToday ? 'today' : ''}\">\${day}</div>`;
          }).join('')}
        </div>
      </div>
    `;
  }

  // Add smooth animations
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

  // Observe cards for animation
  document.querySelectorAll('.card').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(card);
  });
});
</script>

<style>
.calendar-grid {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 4px;
  font-size: 0.875rem;
}

.calendar-header {
  font-weight: bold;
  color: var(--primary-color);
  text-align: center;
  padding: 4px;
}

.calendar-day {
  text-align: center;
  padding: 8px 4px;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.2s ease;
}

.calendar-day:hover {
  background: rgba(178, 34, 93, 0.1);
}

.calendar-day.today {
  background: var(--primary-color);
  color: white;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "main/index.html.twig";
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
        return array (  614 => 468,  604 => 467,  429 => 299,  419 => 298,  376 => 261,  351 => 237,  347 => 234,  306 => 194,  265 => 155,  260 => 152,  256 => 149,  253 => 147,  237 => 133,  224 => 123,  211 => 113,  198 => 103,  191 => 98,  126 => 34,  115 => 25,  106 => 19,  100 => 16,  91 => 9,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inicio - Sistema Administrativo{% endblock %}

{% block body %}
<div class=\"container-fluid content px-0\">

  {# Hero Section #}
  <section class=\"hero-section bg-primary-custom text-white py-5 mb-4\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-lg-6\">
          <h1 class=\"display-4 fw-bold mb-3\">Gestión Documental Inteligente</h1>
          <p class=\"lead mb-4\">Sistema integral para administrar oficios, correspondencia y documentos institucionales de manera eficiente</p>
          <div class=\"d-flex flex-wrap gap-3\">
            <a href=\"{{ path('app_oficio_new') }}\" class=\"btn btn-light btn-lg\">
              <i class=\"bi bi-plus-circle me-2\"></i>Nuevo Documento
            </a>
            <a href=\"{{ path('app_dashboard') }}\" class=\"btn btn-outline-light btn-lg\">
              <i class=\"bi bi-speedometer2 me-2\"></i>Ver Dashboard
            </a>
          </div>
        </div>
        <div class=\"col-lg-6 text-center\">
          <img src=\"{{ asset('images/hero-document.svg') }}\" alt=\"Gestión Documental\" class=\"img-fluid\" style=\"max-height: 300px;\">
        </div>
      </div>
    </div>
  </section>

  <div class=\"container\">

  {# Stats Cards #}
  <section class=\"row g-4 mb-5\">
    <div class=\"col-md-3\">
      <div class=\"card stat-card bg-primary text-white h-100\">
        <div class=\"card-body\">
          <div class=\"d-flex align-items-center\">
            <div class=\"flex-shrink-0\">
              <i class=\"bi bi-file-earmark-text display-6\"></i>
            </div>
            <div class=\"flex-grow-1 ms-3\">
              <h2 class=\"mb-0\">1,247</h2>
              <p class=\"mb-0\">Oficios</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-3\">
      <div class=\"card stat-card bg-success text-white h-100\">
        <div class=\"card-body\">
          <div class=\"d-flex align-items-center\">
            <div class=\"flex-shrink-0\">
              <i class=\"bi bi-envelope display-6\"></i>
            </div>
            <div class=\"flex-grow-1 ms-3\">
              <h2 class=\"mb-0\">856</h2>
              <p class=\"mb-0\">Correspondencias</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-3\">
      <div class=\"card stat-card bg-warning text-white h-100\">
        <div class=\"card-body\">
          <div class=\"d-flex align-items-center\">
            <div class=\"flex-shrink-0\">
              <i class=\"bi bi-arrow-repeat display-6\"></i>
            </div>
            <div class=\"flex-grow-1 ms-3\">
              <h2 class=\"mb-0\">324</h2>
              <p class=\"mb-0\">Circulares</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-3\">
      <div class=\"card stat-card bg-info text-white h-100\">
        <div class=\"card-body\">
          <div class=\"d-flex align-items-center\">
            <div class=\"flex-shrink-0\">
              <i class=\"bi bi-scanner display-6\"></i>
            </div>
            <div class=\"flex-grow-1 ms-3\">
              <h2 class=\"mb-0\">2,158</h2>
              <p class=\"mb-0\">Documentos Escaneados</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {# Quick Actions #}
  <section class=\"card mb-5 glass-card\">
    <div class=\"card-body\">
      <h3 class=\"card-title mb-4\"><i class=\"bi bi-lightning-charge text-primary me-2\"></i>Acciones Rápidas</h3>
      <div class=\"row g-3\">
        <div class=\"col-md-3 col-6\">
          <a href=\"{{ path('app_oficio_new') }}\" class=\"quick-action-card\">
            <div class=\"card h-100 text-center hover-lift\">
              <div class=\"card-body\">
                <i class=\"bi bi-file-earmark-plus display-4 text-primary mb-3\"></i>
                <h6 class=\"card-title\">Nuevo Oficio</h6>
              </div>
            </div>
          </a>
        </div>
        <div class=\"col-md-3 col-6\">
          <a href=\"{{ path('app_correspondence_new') }}\" class=\"quick-action-card\">
            <div class=\"card h-100 text-center hover-lift\">
              <div class=\"card-body\">
                <i class=\"bi bi-envelope-plus display-4 text-success mb-3\"></i>
                <h6 class=\"card-title\">Nueva Correspondencia</h6>
              </div>
            </div>
          </a>
        </div>
        <div class=\"col-md-3 col-6\">
          <a href=\"{{ path('app_circular_new') }}\" class=\"quick-action-card\">
            <div class=\"card h-100 text-center hover-lift\">
              <div class=\"card-body\">
                <i class=\"bi bi-arrow-repeat display-4 text-warning mb-3\"></i>
                <h6 class=\"card-title\">Nueva Circular</h6>
              </div>
            </div>
          </a>
        </div>
        <div class=\"col-md-3 col-6\">
          <a href=\"{{ path('app_scanner_new') }}\" class=\"quick-action-card\">
            <div class=\"card h-100 text-center hover-lift\">
              <div class=\"card-body\">
                <i class=\"bi bi-upc-scan display-4 text-info mb-3\"></i>
                <h6 class=\"card-title\">Escanear Documento</h6>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  {# Main Content Grid #}
  <div class=\"row g-4\">
    {# Left Column - Activity & Features #}
    <div class=\"col-lg-8\">
      
      {# Recent Activity #}
      <section class=\"card mb-4 glass-card\">
        <div class=\"card-header d-flex align-items-center justify-content-between\">
          <h5 class=\"card-title mb-0\"><i class=\"bi bi-clock-history text-primary me-2\"></i>Actividad Reciente</h5>
          <a href=\"{{ path('app_oficio_index') }}\" class=\"btn btn-sm btn-outline-primary\">Ver Todo</a>
        </div>
        <div class=\"card-body\">
          <div class=\"activity-timeline\">
            <div class=\"activity-item\">
              <div class=\"activity-icon bg-primary\">
                <i class=\"bi bi-file-earmark-text\"></i>
              </div>
              <div class=\"activity-content\">
                <h6>Nuevo oficio registrado</h6>
                <p class=\"text-muted mb-1\">Oficio #2025-DG-00123 - Dirección General</p>
                <small class=\"text-muted\">Hace 2 minutos</small>
              </div>
            </div>
            <div class=\"activity-item\">
              <div class=\"activity-icon bg-success\">
                <i class=\"bi bi-envelope\"></i>
              </div>
              <div class=\"activity-content\">
                <h6>Correspondencia actualizada</h6>
                <p class=\"text-muted mb-1\">Estado cambiado a \"Completado\"</p>
                <small class=\"text-muted\">Hace 15 minutos</small>
              </div>
            </div>
            <div class=\"activity-item\">
              <div class=\"activity-icon bg-warning\">
                <i class=\"bi bi-arrow-repeat\"></i>
              </div>
              <div class=\"activity-content\">
                <h6>Circular distribuída</h6>
                <p class=\"text-muted mb-1\">Circular #CIR-2025-045 a todas las áreas</p>
                <small class=\"text-muted\">Hace 1 hora</small>
              </div>
            </div>
          </div>
        </div>
      </section>

      {# Features Grid #}
      <section class=\"card glass-card\">
        <div class=\"card-header\">
          <h5 class=\"card-title mb-0\"><i class=\"bi bi-stars text-primary me-2\"></i>Características del Sistema</h5>
        </div>
        <div class=\"card-body\">
          <div class=\"row g-3\">
            <div class=\"col-md-6\">
              <div class=\"feature-card\">
                <i class=\"bi bi-diagram-3 feature-icon text-primary\"></i>
                <h6>Gestión de Flujos</h6>
                <p class=\"text-muted mb-0\">Control completo del ciclo de vida documental</p>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"feature-card\">
                <i class=\"bi bi-shield-check feature-icon text-success\"></i>
                <h6>Seguridad Integral</h6>
                <p class=\"text-muted mb-0\">Acceso controlado por roles y permisos</p>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"feature-card\">
                <i class=\"bi bi-search feature-icon text-info\"></i>
                <h6>Búsqueda Avanzada</h6>
                <p class=\"text-muted mb-0\">Encuentra documentos en segundos</p>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"feature-card\">
                <i class=\"bi bi-graph-up feature-icon text-warning\"></i>
                <h6>Reportes en Tiempo Real</h6>
                <p class=\"text-muted mb-0\">Métricas y estadísticas actualizadas</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    {# Right Column - Calendar & Quick Stats #}
    <div class=\"col-lg-4\">
      
      {# Mini Calendar #}
      <section class=\"card mb-4 glass-card\">
        <div class=\"card-header\">
          <h5 class=\"card-title mb-0\"><i class=\"bi bi-calendar3 text-primary me-2\"></i>Calendario</h5>
        </div>
        <div class=\"card-body\">
          <div id=\"mini-calendar\"></div>
          <div class=\"mt-3\">
            <div class=\"d-flex align-items-center mb-2\">
              <span class=\"badge bg-primary me-2\">&nbsp;</span>
              <small>Oficios</small>
            </div>
            <div class=\"d-flex align-items-center mb-2\">
              <span class=\"badge bg-success me-2\">&nbsp;</span>
              <small>Correspondencia</small>
            </div>
            <div class=\"d-flex align-items-center\">
              <span class=\"badge bg-warning me-2\">&nbsp;</span>
              <small>Circulares</small>
            </div>
          </div>
        </div>
      </section>

      {# Document Status #}
      <section class=\"card glass-card\">
        <div class=\"card-header\">
          <h5 class=\"card-title mb-0\"><i class=\"bi bi-pie-chart text-primary me-2\"></i>Estado de Documentos</h5>
        </div>
        <div class=\"card-body\">
          <canvas id=\"docStatusChart\" width=\"300\" height=\"200\"></canvas>
          <div class=\"mt-3 text-center\">
            <div class=\"row g-2\">
              <div class=\"col-4\">
                <div class=\"status-indicator bg-primary\">
                  <span class=\"count\">45%</span>
                  <small>En Proceso</small>
                </div>
              </div>
              <div class=\"col-4\">
                <div class=\"status-indicator bg-success\">
                  <span class=\"count\">35%</span>
                  <small>Completados</small>
                </div>
              </div>
              <div class=\"col-4\">
                <div class=\"status-indicator bg-warning\">
                  <span class=\"count\">20%</span>
                  <small>Pendientes</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  </div>
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
:root {
  --primary-color: #B2225D;
  --primary-dark: #8a1a4a;
  --gradient-primary: linear-gradient(135deg, #B2225D 0%, #8a1a4a 100%);
}

/* Hero Section */
.hero-section {
  background: var(--gradient-primary);
  position: relative;
  overflow: hidden;
}

.hero-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url(\"data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E\");
}

/* Cards */
.glass-card {
  background: rgba(255, 255, 255, 0.9);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 16px;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
}

.stat-card {
  border: none;
  border-radius: 16px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stat-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
}

/* Quick Actions */
.quick-action-card {
  text-decoration: none;
  color: inherit;
}

.hover-lift {
  transition: all 0.3s ease;
  border: 1px solid rgba(0, 0, 0, 0.05);
}

.hover-lift:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
  border-color: var(--primary-color);
}

/* Activity Timeline */
.activity-timeline {
  position: relative;
}

.activity-timeline::before {
  content: '';
  position: absolute;
  left: 25px;
  top: 0;
  bottom: 0;
  width: 2px;
  background: #e9ecef;
}

.activity-item {
  display: flex;
  align-items: flex-start;
  margin-bottom: 1.5rem;
  position: relative;
}

.activity-icon {
  width: 50px;
  height: 50px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  margin-right: 1rem;
  flex-shrink: 0;
  z-index: 2;
}

.activity-content {
  flex: 1;
}

.activity-content h6 {
  margin-bottom: 0.25rem;
  color: var(--primary-color);
}

/* Features */
.feature-card {
  text-align: center;
  padding: 1.5rem 1rem;
  border-radius: 12px;
  background: rgba(178, 34, 93, 0.05);
  transition: all 0.3s ease;
  height: 100%;
}

.feature-card:hover {
  background: rgba(178, 34, 93, 0.1);
  transform: translateY(-2px);
}

.feature-icon {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

/* Mini Calendar */
#mini-calendar {
  border-radius: 12px;
  overflow: hidden;
}

/* Status Indicators */
.status-indicator {
  padding: 0.75rem 0.5rem;
  border-radius: 8px;
  color: white;
  text-align: center;
}

.status-indicator .count {
  display: block;
  font-size: 1.25rem;
  font-weight: bold;
}

/* Responsive */
@media (max-width: 768px) {
  .hero-section .display-4 {
    font-size: 2rem;
  }
  
  .stat-card .display-6 {
    font-size: 2rem;
  }
  
  .activity-timeline::before {
    left: 20px;
  }
  
  .activity-icon {
    width: 40px;
    height: 40px;
  }
}
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Document Status Chart
  const ctx = document.getElementById('docStatusChart').getContext('2d');
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['En Proceso', 'Completados', 'Pendientes'],
      datasets: [{
        data: [45, 35, 20],
        backgroundColor: ['#B2225D', '#28a745', '#ffc107'],
        borderWidth: 0
      }]
    },
    options: {
      cutout: '70%',
      plugins: {
        legend: {
          display: false
        }
      },
      animation: {
        animateScale: true,
        animateRotate: true
      }
    }
  });

  // Mini Calendar (simplified version)
  const miniCalendar = document.getElementById('mini-calendar');
  if (miniCalendar) {
    const today = new Date();
    const month = today.toLocaleDateString('es', { month: 'long', year: 'numeric' });
    
    miniCalendar.innerHTML = `
      <div class=\"text-center mb-3\">
        <h6 class=\"text-primary mb-2\">\${month}</h6>
        <div class=\"calendar-grid\">
          \${['L', 'M', 'M', 'J', 'V', 'S', 'D'].map(day => 
            `<div class=\"calendar-header\">\${day}</div>`
          ).join('')}
          \${Array.from({length: 31}, (_, i) => {
            const day = i + 1;
            const isToday = day === today.getDate();
            return `<div class=\"calendar-day \${isToday ? 'today' : ''}\">\${day}</div>`;
          }).join('')}
        </div>
      </div>
    `;
  }

  // Add smooth animations
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

  // Observe cards for animation
  document.querySelectorAll('.card').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(card);
  });
});
</script>

<style>
.calendar-grid {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 4px;
  font-size: 0.875rem;
}

.calendar-header {
  font-weight: bold;
  color: var(--primary-color);
  text-align: center;
  padding: 4px;
}

.calendar-day {
  text-align: center;
  padding: 8px 4px;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.2s ease;
}

.calendar-day:hover {
  background: rgba(178, 34, 93, 0.1);
}

.calendar-day.today {
  background: var(--primary-color);
  color: white;
}
</style>
{% endblock %}", "main/index.html.twig", "/var/www/html/templates/main/index.html.twig");
    }
}
