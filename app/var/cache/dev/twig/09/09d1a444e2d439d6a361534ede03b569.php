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

/* base.html.twig */
class __TwigTemplate_efc6b7affbfa1782bd33f62da7229e92 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar_extra' => [$this, 'block_sidebar_extra'],
            'module_title' => [$this, 'block_module_title'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"theme-color\" content=\"#B2225D\">

  ";
        // line 10
        yield "  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Inter:wght@400;600;700;800&display=swap\" rel=\"stylesheet\">

  ";
        // line 15
        yield "  <link rel=\"icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        yield "\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        yield "\">
  <link rel=\"icon\" type=\"image/svg+xml\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon.svg"), "html", null, true);
        yield "\">
  <link rel=\"apple-touch-icon\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/apple-touch-icon.png"), "html", null, true);
        yield "\">

  ";
        // line 21
        yield "  <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">

  ";
        // line 24
        yield "  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css\" rel=\"stylesheet\">

  ";
        // line 28
        yield "  ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 29
        yield "</head>
<body>
  <a class=\"skip-link\" href=\"#main-content\">Saltar al contenido</a>

  <div class=\"app-wrap\">
    <!-- Sidebar lateral (glass) -->
    <aside id=\"sidebar\" class=\"sidebar\" aria-label=\"Navegación principal\">
      <div class=\"brand\">
        <span class=\"logo-dot\" aria-hidden=\"true\"></span>
        <span class=\"label\">C.A.I.</span>
      </div>

      <nav class=\"nav\" role=\"navigation\">
        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"
           aria-current=\"";
        // line 43
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "attributes", [], "any", false, false, false, 43), "get", ["_route"], "method", false, false, false, 43) == "app_home")) ? ("page") : (null));
        yield "\"
           class=\"";
        // line 44
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "attributes", [], "any", false, false, false, 44), "get", ["_route"], "method", false, false, false, 44) == "app_home")) ? ("active") : (""));
        yield "\">
          <i class=\"bi bi-house\" aria-hidden=\"true\"></i><span class=\"label\">Inicio</span>
        </a>

        <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\"
           aria-current=\"";
        // line 49
        yield (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", ["_route"], "method", false, false, false, 49)) && is_string($_v1 = "app_dashboard") && str_starts_with($_v0, $_v1))) ? ("page") : (null));
        yield "\"
           class=\"";
        // line 50
        yield (((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "attributes", [], "any", false, false, false, 50), "get", ["_route"], "method", false, false, false, 50)) && is_string($_v3 = "app_dashboard") && str_starts_with($_v2, $_v3))) ? ("active") : (""));
        yield "\">
          <i class=\"bi bi-speedometer2\" aria-hidden=\"true\"></i><span class=\"label\">Dashboard</span>
        </a>

        <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_index");
        yield "\"
           aria-current=\"";
        // line 55
        yield (((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "attributes", [], "any", false, false, false, 55), "get", ["_route"], "method", false, false, false, 55)) && is_string($_v5 = "app_oficio") && str_starts_with($_v4, $_v5))) ? ("page") : (null));
        yield "\"
           class=\"";
        // line 56
        yield (((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "attributes", [], "any", false, false, false, 56), "get", ["_route"], "method", false, false, false, 56)) && is_string($_v7 = "app_oficio") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\">
          <i class=\"bi bi-file-earmark-text\" aria-hidden=\"true\"></i><span class=\"label\">Oficios</span>
        </a>

        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correspondence_index");
        yield "\"
           aria-current=\"";
        // line 61
        yield (((is_string($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "attributes", [], "any", false, false, false, 61), "get", ["_route"], "method", false, false, false, 61)) && is_string($_v9 = "app_correspondence") && str_starts_with($_v8, $_v9))) ? ("page") : (null));
        yield "\"
           class=\"";
        // line 62
        yield (((is_string($_v10 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "attributes", [], "any", false, false, false, 62), "get", ["_route"], "method", false, false, false, 62)) && is_string($_v11 = "app_correspondence") && str_starts_with($_v10, $_v11))) ? ("active") : (""));
        yield "\">
          <i class=\"bi bi-envelope\" aria-hidden=\"true\"></i><span class=\"label\">Correspondencia</span>
        </a>

        <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_circular_index");
        yield "\"
           aria-current=\"";
        // line 67
        yield (((is_string($_v12 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "attributes", [], "any", false, false, false, 67), "get", ["_route"], "method", false, false, false, 67)) && is_string($_v13 = "app_circular") && str_starts_with($_v12, $_v13))) ? ("page") : (null));
        yield "\"
           class=\"";
        // line 68
        yield (((is_string($_v14 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "attributes", [], "any", false, false, false, 68), "get", ["_route"], "method", false, false, false, 68)) && is_string($_v15 = "app_circular") && str_starts_with($_v14, $_v15))) ? ("active") : (""));
        yield "\">
          <i class=\"bi bi-arrow-repeat\" aria-hidden=\"true\"></i><span class=\"label\">Circulares</span>
        </a>

        <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_scanner_index");
        yield "\"
           aria-current=\"";
        // line 73
        yield (((is_string($_v16 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "attributes", [], "any", false, false, false, 73), "get", ["_route"], "method", false, false, false, 73)) && is_string($_v17 = "app_scanner") && str_starts_with($_v16, $_v17))) ? ("page") : (null));
        yield "\"
           class=\"";
        // line 74
        yield (((is_string($_v18 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "request", [], "any", false, false, false, 74), "attributes", [], "any", false, false, false, 74), "get", ["_route"], "method", false, false, false, 74)) && is_string($_v19 = "app_scanner") && str_starts_with($_v18, $_v19))) ? ("active") : (""));
        yield "\">
          <i class=\"bi bi-scanner\" aria-hidden=\"true\"></i><span class=\"label\">Escáner</span>
        </a>

        ";
        // line 78
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "          <div class=\"mt-2 small text-uppercase opacity-75 px-3\">Administración</div>
          <a href=\"";
            // line 80
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\"
             aria-current=\"";
            // line 81
            yield (((is_string($_v20 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "attributes", [], "any", false, false, false, 81), "get", ["_route"], "method", false, false, false, 81)) && is_string($_v21 = "app_user") && str_starts_with($_v20, $_v21))) ? ("page") : (null));
            yield "\"
             class=\"";
            // line 82
            yield (((is_string($_v22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "attributes", [], "any", false, false, false, 82), "get", ["_route"], "method", false, false, false, 82)) && is_string($_v23 = "app_user") && str_starts_with($_v22, $_v23))) ? ("active") : (""));
            yield "\">
            <i class=\"bi bi-people\" aria-hidden=\"true\"></i><span class=\"label\">Usuarios</span>
          </a>
          <a href=\"";
            // line 85
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_role_index");
            yield "\"
             aria-current=\"";
            // line 86
            yield (((is_string($_v24 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "request", [], "any", false, false, false, 86), "attributes", [], "any", false, false, false, 86), "get", ["_route"], "method", false, false, false, 86)) && is_string($_v25 = "app_role") && str_starts_with($_v24, $_v25))) ? ("page") : (null));
            yield "\"
             class=\"";
            // line 87
            yield (((is_string($_v26 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "request", [], "any", false, false, false, 87), "attributes", [], "any", false, false, false, 87), "get", ["_route"], "method", false, false, false, 87)) && is_string($_v27 = "app_role") && str_starts_with($_v26, $_v27))) ? ("active") : (""));
            yield "\">
            <i class=\"bi bi-shield-lock\" aria-hidden=\"true\"></i><span class=\"label\">Roles</span>
          </a>
        ";
        }
        // line 91
        yield "
        ";
        // line 92
        yield from $this->unwrap()->yieldBlock('sidebar_extra', $context, $blocks);
        // line 93
        yield "      </nav>

      <button class=\"toggle\" type=\"button\" id=\"toggleSidebar\" aria-label=\"Contraer/expandir menú lateral\">
        <i class=\"bi bi-layout-sidebar-inset\" aria-hidden=\"true\"></i><span class=\"txt\"></span>
      </button>
    </aside>

    <!-- Zona principal -->
    <div class=\"main\">
      <header class=\"topbar glass\" role=\"banner\">
        <button class=\"btn btn-outline-light btn-sm btn-mobile\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#mobileMenu\"
                aria-controls=\"mobileMenu\"
                aria-label=\"Abrir menú\">
          <i class=\"bi bi-list\" aria-hidden=\"true\"></i> Menú
        </button>

        <div class=\"module-title\">";
        // line 112
        yield from $this->unwrap()->yieldBlock('module_title', $context, $blocks);
        yield "</div>
        <div class=\"spacer\" aria-hidden=\"true\"></div>

        <div class=\"user-actions\">
          ";
        // line 116
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 117
            yield "            <span class=\"user-name\">";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 117), "nombre", [], "any", true, true, false, 117) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "nombre", [], "any", false, false, false, 117)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "nombre", [], "any", false, false, false, 117), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 117), "userIdentifier", [], "any", true, true, false, 117) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "userIdentifier", [], "any", false, false, false, 117)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "userIdentifier", [], "any", false, false, false, 117), "html", null, true)) : ("Usuario"))));
            yield "</span>
            <a class=\"logout-btn\" href=\"";
            // line 118
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" title=\"Cerrar sesión\">Salir</a>
          ";
        } else {
            // line 120
            yield "            <a class=\"login-btn\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" title=\"Iniciar sesión\">Ingresar</a>
          ";
        }
        // line 122
        yield "        </div>
      </header>

      <main id=\"main-content\" class=\"content\" role=\"main\">
        ";
        // line 126
        yield from $this->unwrap()->yieldBlock('breadcrumbs', $context, $blocks);
        // line 127
        yield "
        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "flashes", [], "any", false, false, false, 128));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 129
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 130
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " shadow-sm\" role=\"status\">";
                yield $context["message"];
                yield "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "
        ";
        // line 134
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 135
        yield "      </main>

      <footer role=\"contentinfo\">
        &copy; ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Alcaldía – Todos los derechos reservados
      </footer>
    </div>
  </div>

  ";
        // line 144
        yield "  <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"mobileMenu\" aria-labelledby=\"mobileMenuLabel\">
    <div class=\"offcanvas-header\">
      <h5 class=\"offcanvas-title\" id=\"mobileMenuLabel\">Menú</h5>
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Cerrar\"></button>
    </div>
    <div class=\"offcanvas-body\">
      <nav class=\"nav flex-column gap-1\" role=\"navigation\" aria-label=\"Menú móvil\">
        <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "request", [], "any", false, false, false, 151), "attributes", [], "any", false, false, false, 151), "get", ["_route"], "method", false, false, false, 151) == "app_home")) ? ("active") : (""));
        yield "\">Inicio</a>
        <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"nav-link ";
        yield (((is_string($_v28 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "request", [], "any", false, false, false, 152), "attributes", [], "any", false, false, false, 152), "get", ["_route"], "method", false, false, false, 152)) && is_string($_v29 = "app_dashboard") && str_starts_with($_v28, $_v29))) ? ("active") : (""));
        yield "\">Dashboard</a>
        <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_oficio_index");
        yield "\" class=\"nav-link ";
        yield (((is_string($_v30 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "request", [], "any", false, false, false, 153), "attributes", [], "any", false, false, false, 153), "get", ["_route"], "method", false, false, false, 153)) && is_string($_v31 = "app_oficio") && str_starts_with($_v30, $_v31))) ? ("active") : (""));
        yield "\">Oficios</a>
        <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correspondence_index");
        yield "\" class=\"nav-link ";
        yield (((is_string($_v32 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "request", [], "any", false, false, false, 154), "attributes", [], "any", false, false, false, 154), "get", ["_route"], "method", false, false, false, 154)) && is_string($_v33 = "app_correspondence") && str_starts_with($_v32, $_v33))) ? ("active") : (""));
        yield "\">Correspondencia</a>
        <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_circular_index");
        yield "\" class=\"nav-link ";
        yield (((is_string($_v34 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "request", [], "any", false, false, false, 155), "attributes", [], "any", false, false, false, 155), "get", ["_route"], "method", false, false, false, 155)) && is_string($_v35 = "app_circular") && str_starts_with($_v34, $_v35))) ? ("active") : (""));
        yield "\">Circulares</a>
        <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_scanner_index");
        yield "\" class=\"nav-link ";
        yield (((is_string($_v36 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "request", [], "any", false, false, false, 156), "attributes", [], "any", false, false, false, 156), "get", ["_route"], "method", false, false, false, 156)) && is_string($_v37 = "app_scanner") && str_starts_with($_v36, $_v37))) ? ("active") : (""));
        yield "\">Escáner</a>
        ";
        // line 157
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "          <div class=\"mt-2 small text-uppercase opacity-75\">Administración</div>
          <a href=\"";
            // line 159
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            yield "\" class=\"nav-link ";
            yield (((is_string($_v38 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "request", [], "any", false, false, false, 159), "attributes", [], "any", false, false, false, 159), "get", ["_route"], "method", false, false, false, 159)) && is_string($_v39 = "app_user") && str_starts_with($_v38, $_v39))) ? ("active") : (""));
            yield "\">Usuarios</a>
          <a href=\"";
            // line 160
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_role_index");
            yield "\" class=\"nav-link ";
            yield (((is_string($_v40 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "request", [], "any", false, false, false, 160), "attributes", [], "any", false, false, false, 160), "get", ["_route"], "method", false, false, false, 160)) && is_string($_v41 = "app_role") && str_starts_with($_v40, $_v41))) ? ("active") : (""));
            yield "\">Roles</a>
        ";
        }
        // line 162
        yield "      </nav>
    </div>
  </div>

  ";
        // line 167
        yield "  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Toggle mini sidebar con persistencia
      const sb = document.getElementById('sidebar');
      const btn = document.getElementById('toggleSidebar');
      const KEY = 'sidebar-mini';
      if(localStorage.getItem(KEY)==='1'){ sb.classList.add('mini'); }
      btn?.addEventListener('click', ()=>{
        sb.classList.toggle('mini');
        localStorage.setItem(KEY, sb.classList.contains('mini') ? '1' : '0');
      });
    });
  </script>

  ";
        // line 183
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 184
        yield "</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Sistema de Reportes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
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

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_extra(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_extra"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_module_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "module_title"));

        yield from         $this->unwrap()->yieldBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_breadcrumbs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 134
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 183
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  544 => 183,  528 => 134,  512 => 126,  495 => 112,  479 => 92,  463 => 28,  446 => 5,  437 => 184,  435 => 183,  417 => 167,  411 => 162,  404 => 160,  398 => 159,  395 => 158,  393 => 157,  387 => 156,  381 => 155,  375 => 154,  369 => 153,  363 => 152,  357 => 151,  348 => 144,  340 => 138,  335 => 135,  333 => 134,  330 => 133,  324 => 132,  313 => 130,  308 => 129,  304 => 128,  301 => 127,  299 => 126,  293 => 122,  287 => 120,  282 => 118,  277 => 117,  275 => 116,  268 => 112,  247 => 93,  245 => 92,  242 => 91,  235 => 87,  231 => 86,  227 => 85,  221 => 82,  217 => 81,  213 => 80,  210 => 79,  208 => 78,  201 => 74,  197 => 73,  193 => 72,  186 => 68,  182 => 67,  178 => 66,  171 => 62,  167 => 61,  163 => 60,  156 => 56,  152 => 55,  148 => 54,  141 => 50,  137 => 49,  133 => 48,  126 => 44,  122 => 43,  118 => 42,  103 => 29,  100 => 28,  95 => 24,  89 => 21,  84 => 18,  80 => 17,  76 => 16,  71 => 15,  65 => 10,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"UTF-8\">
  <title>{% block title %}Sistema de Reportes{% endblock %}</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"theme-color\" content=\"#B2225D\">

  {# Fuentes #}
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Inter:wght@400;600;700;800&display=swap\" rel=\"stylesheet\">

  {# Favicons / Icons #}
  <link rel=\"icon\" href=\"{{ asset('images/favicon.ico') }}\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('images/favicon.png') }}\">
  <link rel=\"icon\" type=\"image/svg+xml\" href=\"{{ asset('images/icon.svg') }}\">
  <link rel=\"apple-touch-icon\" href=\"{{ asset('images/apple-touch-icon.png') }}\">

  {# CSS propio #}
  <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">

  {# Bootstrap + Icons #}
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css\" rel=\"stylesheet\">

  {# Hook opcional para CSS extra #}
  {% block stylesheets %}{% endblock %}
</head>
<body>
  <a class=\"skip-link\" href=\"#main-content\">Saltar al contenido</a>

  <div class=\"app-wrap\">
    <!-- Sidebar lateral (glass) -->
    <aside id=\"sidebar\" class=\"sidebar\" aria-label=\"Navegación principal\">
      <div class=\"brand\">
        <span class=\"logo-dot\" aria-hidden=\"true\"></span>
        <span class=\"label\">C.A.I.</span>
      </div>

      <nav class=\"nav\" role=\"navigation\">
        <a href=\"{{ path('app_home') }}\"
           aria-current=\"{{ app.request.attributes.get('_route') == 'app_home' ? 'page' : null }}\"
           class=\"{{ app.request.attributes.get('_route') == 'app_home' ? 'active' : '' }}\">
          <i class=\"bi bi-house\" aria-hidden=\"true\"></i><span class=\"label\">Inicio</span>
        </a>

        <a href=\"{{ path('app_dashboard') }}\"
           aria-current=\"{{ app.request.attributes.get('_route') starts with 'app_dashboard' ? 'page' : null }}\"
           class=\"{{ app.request.attributes.get('_route') starts with 'app_dashboard' ? 'active' : '' }}\">
          <i class=\"bi bi-speedometer2\" aria-hidden=\"true\"></i><span class=\"label\">Dashboard</span>
        </a>

        <a href=\"{{ path('app_oficio_index') }}\"
           aria-current=\"{{ app.request.attributes.get('_route') starts with 'app_oficio' ? 'page' : null }}\"
           class=\"{{ app.request.attributes.get('_route') starts with 'app_oficio' ? 'active' : '' }}\">
          <i class=\"bi bi-file-earmark-text\" aria-hidden=\"true\"></i><span class=\"label\">Oficios</span>
        </a>

        <a href=\"{{ path('app_correspondence_index') }}\"
           aria-current=\"{{ app.request.attributes.get('_route') starts with 'app_correspondence' ? 'page' : null }}\"
           class=\"{{ app.request.attributes.get('_route') starts with 'app_correspondence' ? 'active' : '' }}\">
          <i class=\"bi bi-envelope\" aria-hidden=\"true\"></i><span class=\"label\">Correspondencia</span>
        </a>

        <a href=\"{{ path('app_circular_index') }}\"
           aria-current=\"{{ app.request.attributes.get('_route') starts with 'app_circular' ? 'page' : null }}\"
           class=\"{{ app.request.attributes.get('_route') starts with 'app_circular' ? 'active' : '' }}\">
          <i class=\"bi bi-arrow-repeat\" aria-hidden=\"true\"></i><span class=\"label\">Circulares</span>
        </a>

        <a href=\"{{ path('app_scanner_index') }}\"
           aria-current=\"{{ app.request.attributes.get('_route') starts with 'app_scanner' ? 'page' : null }}\"
           class=\"{{ app.request.attributes.get('_route') starts with 'app_scanner' ? 'active' : '' }}\">
          <i class=\"bi bi-scanner\" aria-hidden=\"true\"></i><span class=\"label\">Escáner</span>
        </a>

        {% if is_granted('ROLE_ADMIN') %}
          <div class=\"mt-2 small text-uppercase opacity-75 px-3\">Administración</div>
          <a href=\"{{ path('app_user_index') }}\"
             aria-current=\"{{ app.request.attributes.get('_route') starts with 'app_user' ? 'page' : null }}\"
             class=\"{{ app.request.attributes.get('_route') starts with 'app_user' ? 'active' : '' }}\">
            <i class=\"bi bi-people\" aria-hidden=\"true\"></i><span class=\"label\">Usuarios</span>
          </a>
          <a href=\"{{ path('app_role_index') }}\"
             aria-current=\"{{ app.request.attributes.get('_route') starts with 'app_role' ? 'page' : null }}\"
             class=\"{{ app.request.attributes.get('_route') starts with 'app_role' ? 'active' : '' }}\">
            <i class=\"bi bi-shield-lock\" aria-hidden=\"true\"></i><span class=\"label\">Roles</span>
          </a>
        {% endif %}

        {% block sidebar_extra %}{% endblock %}
      </nav>

      <button class=\"toggle\" type=\"button\" id=\"toggleSidebar\" aria-label=\"Contraer/expandir menú lateral\">
        <i class=\"bi bi-layout-sidebar-inset\" aria-hidden=\"true\"></i><span class=\"txt\"></span>
      </button>
    </aside>

    <!-- Zona principal -->
    <div class=\"main\">
      <header class=\"topbar glass\" role=\"banner\">
        <button class=\"btn btn-outline-light btn-sm btn-mobile\"
                type=\"button\"
                data-bs-toggle=\"offcanvas\"
                data-bs-target=\"#mobileMenu\"
                aria-controls=\"mobileMenu\"
                aria-label=\"Abrir menú\">
          <i class=\"bi bi-list\" aria-hidden=\"true\"></i> Menú
        </button>

        <div class=\"module-title\">{% block module_title %}{{ block('title') }}{% endblock %}</div>
        <div class=\"spacer\" aria-hidden=\"true\"></div>

        <div class=\"user-actions\">
          {% if app.user %}
            <span class=\"user-name\">{{ app.user.nombre ?? app.user.userIdentifier ?? 'Usuario' }}</span>
            <a class=\"logout-btn\" href=\"{{ path('app_logout') }}\" title=\"Cerrar sesión\">Salir</a>
          {% else %}
            <a class=\"login-btn\" href=\"{{ path('app_login') }}\" title=\"Iniciar sesión\">Ingresar</a>
          {% endif %}
        </div>
      </header>

      <main id=\"main-content\" class=\"content\" role=\"main\">
        {% block breadcrumbs %}{% endblock %}

        {% for label, messages in app.flashes %}
          {% for message in messages %}
            <div class=\"alert alert-{{ label }} shadow-sm\" role=\"status\">{{ message|raw }}</div>
          {% endfor %}
        {% endfor %}

        {% block body %}{% endblock %}
      </main>

      <footer role=\"contentinfo\">
        &copy; {{ \"now\"|date(\"Y\") }} Alcaldía – Todos los derechos reservados
      </footer>
    </div>
  </div>

  {# Offcanvas móvil #}
  <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"mobileMenu\" aria-labelledby=\"mobileMenuLabel\">
    <div class=\"offcanvas-header\">
      <h5 class=\"offcanvas-title\" id=\"mobileMenuLabel\">Menú</h5>
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Cerrar\"></button>
    </div>
    <div class=\"offcanvas-body\">
      <nav class=\"nav flex-column gap-1\" role=\"navigation\" aria-label=\"Menú móvil\">
        <a href=\"{{ path('app_home') }}\" class=\"nav-link {{ app.request.attributes.get('_route') == 'app_home' ? 'active' : '' }}\">Inicio</a>
        <a href=\"{{ path('app_dashboard') }}\" class=\"nav-link {{ app.request.attributes.get('_route') starts with 'app_dashboard' ? 'active' : '' }}\">Dashboard</a>
        <a href=\"{{ path('app_oficio_index') }}\" class=\"nav-link {{ app.request.attributes.get('_route') starts with 'app_oficio' ? 'active' : '' }}\">Oficios</a>
        <a href=\"{{ path('app_correspondence_index') }}\" class=\"nav-link {{ app.request.attributes.get('_route') starts with 'app_correspondence' ? 'active' : '' }}\">Correspondencia</a>
        <a href=\"{{ path('app_circular_index') }}\" class=\"nav-link {{ app.request.attributes.get('_route') starts with 'app_circular' ? 'active' : '' }}\">Circulares</a>
        <a href=\"{{ path('app_scanner_index') }}\" class=\"nav-link {{ app.request.attributes.get('_route') starts with 'app_scanner' ? 'active' : '' }}\">Escáner</a>
        {% if is_granted('ROLE_ADMIN') %}
          <div class=\"mt-2 small text-uppercase opacity-75\">Administración</div>
          <a href=\"{{ path('app_user_index') }}\" class=\"nav-link {{ app.request.attributes.get('_route') starts with 'app_user' ? 'active' : '' }}\">Usuarios</a>
          <a href=\"{{ path('app_role_index') }}\" class=\"nav-link {{ app.request.attributes.get('_route') starts with 'app_role' ? 'active' : '' }}\">Roles</a>
        {% endif %}
      </nav>
    </div>
  </div>

  {# JS #}
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Toggle mini sidebar con persistencia
      const sb = document.getElementById('sidebar');
      const btn = document.getElementById('toggleSidebar');
      const KEY = 'sidebar-mini';
      if(localStorage.getItem(KEY)==='1'){ sb.classList.add('mini'); }
      btn?.addEventListener('click', ()=>{
        sb.classList.toggle('mini');
        localStorage.setItem(KEY, sb.classList.contains('mini') ? '1' : '0');
      });
    });
  </script>

  {% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
