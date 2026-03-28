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

/* security/login.html.twig */
class __TwigTemplate_7330f0901f87e55ea30aa2e30b27742f extends Template
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
        return "baselogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->load("baselogin.html.twig", 1);
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

        yield "Iniciar sesión";
        
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
        yield "<div class=\"container-fluid login-split\">
  <div class=\"row g-0 min-vh-100\">

    ";
        // line 10
        yield "    <div class=\"col-12 col-lg-6 welcome-pane d-flex align-items-center justify-content-center text-center\">
      <div class=\"px-4\">
        <h1 class=\"display-4 fw-bold text-white mb-2\">¡Bienvenido<br>de nuevo!</h1>
        <p class=\"text-white-50 mb-0\">Accede para continuar con tu gestión.</p>
      </div>
    </div>

    ";
        // line 18
        yield "    <div class=\"col-12 col-lg-6 d-flex align-items-center justify-content-center p-4 p-lg-5 bg-transparent\">
      <div class=\"login-card w-100\" style=\"max-width: 420px\">
        <h3 class=\"login-title fw-bold text-center\">Iniciar sesión</h3>
        <p class=\"text-muted text-center mb-4\">Ingresa tus credenciales para acceder a tu cuenta.</p>

        ";
        // line 23
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "          <div class=\"alert alert-danger text-center py-2\">
            ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageKey", [], "any", false, false, false, 25), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageData", [], "any", false, false, false, 25), "security"), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 28
        yield "
        <form method=\"post\" action=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

          <div class=\"mb-3\">
            <label for=\"inputEmail\" class=\"form-label\">Correo electrónico</label>
            <input type=\"email\" id=\"inputEmail\" name=\"email\" class=\"form-control\"
                   value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("last_username", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 35, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" required autofocus
                   placeholder=\"correo@ejemplo.com\">
          </div>

          <div class=\"mb-3\">
            <label for=\"inputPassword\" class=\"form-label\">Contraseña</label>
            <input type=\"password\" id=\"inputPassword\" name=\"password\" class=\"form-control\"
                   required placeholder=\"••••••••\">
          </div>

          <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\">
              <label class=\"form-check-label small text-muted\" for=\"remember_me\">Recordarme</label>
            </div>
            <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\" class=\"small text-decoration-none text-primary\">¿Olvidaste tu contraseña?</a>
          </div>

          <button type=\"submit\" class=\"login-submit\">Ingresar</button>

          <p class=\"mt-3 text-center small mb-0\">
            ¿Aún no tienes cuenta?
            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"fw-semibold text-primary text-decoration-none\">Regístrate</a>
          </p>
        </form>
      </div>
    </div>

  </div>
</div>

";
        // line 67
        yield "<style>
  .login-split{ background:
      radial-gradient(60% 80% at 10% 0%, rgba(178,34,93,0.10), transparent 60%),
      radial-gradient(60% 80% at 100% 10%, rgba(192,159,101,0.10), transparent 60%),
      var(--bg); }
  .welcome-pane{
    background: linear-gradient(135deg, #910f25ff 0%, #331b09ff 100%);
  }
  .welcome-pane h1{ line-height: .95; }
  @media (max-width: 991.98px){
    .welcome-pane{ min-height: 38vh; }
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
        return "security/login.html.twig";
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
        return array (  172 => 67,  160 => 57,  150 => 50,  132 => 35,  124 => 30,  120 => 29,  117 => 28,  111 => 25,  108 => 24,  106 => 23,  99 => 18,  90 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baselogin.html.twig' %}

{% block title %}Iniciar sesión{% endblock %}

{% block body %}
<div class=\"container-fluid login-split\">
  <div class=\"row g-0 min-vh-100\">

    {# Columna izquierda — bienvenida #}
    <div class=\"col-12 col-lg-6 welcome-pane d-flex align-items-center justify-content-center text-center\">
      <div class=\"px-4\">
        <h1 class=\"display-4 fw-bold text-white mb-2\">¡Bienvenido<br>de nuevo!</h1>
        <p class=\"text-white-50 mb-0\">Accede para continuar con tu gestión.</p>
      </div>
    </div>

    {# Columna derecha — formulario #}
    <div class=\"col-12 col-lg-6 d-flex align-items-center justify-content-center p-4 p-lg-5 bg-transparent\">
      <div class=\"login-card w-100\" style=\"max-width: 420px\">
        <h3 class=\"login-title fw-bold text-center\">Iniciar sesión</h3>
        <p class=\"text-muted text-center mb-4\">Ingresa tus credenciales para acceder a tu cuenta.</p>

        {% if error %}
          <div class=\"alert alert-danger text-center py-2\">
            {{ error.messageKey|trans(error.messageData, 'security') }}
          </div>
        {% endif %}

        <form method=\"post\" action=\"{{ path('app_login') }}\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

          <div class=\"mb-3\">
            <label for=\"inputEmail\" class=\"form-label\">Correo electrónico</label>
            <input type=\"email\" id=\"inputEmail\" name=\"email\" class=\"form-control\"
                   value=\"{{ last_username|default('') }}\" required autofocus
                   placeholder=\"correo@ejemplo.com\">
          </div>

          <div class=\"mb-3\">
            <label for=\"inputPassword\" class=\"form-label\">Contraseña</label>
            <input type=\"password\" id=\"inputPassword\" name=\"password\" class=\"form-control\"
                   required placeholder=\"••••••••\">
          </div>

          <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\">
              <label class=\"form-check-label small text-muted\" for=\"remember_me\">Recordarme</label>
            </div>
            <a href=\"{{ path('app_forgot_password') }}\" class=\"small text-decoration-none text-primary\">¿Olvidaste tu contraseña?</a>
          </div>

          <button type=\"submit\" class=\"login-submit\">Ingresar</button>

          <p class=\"mt-3 text-center small mb-0\">
            ¿Aún no tienes cuenta?
            <a href=\"{{ path('app_register') }}\" class=\"fw-semibold text-primary text-decoration-none\">Regístrate</a>
          </p>
        </form>
      </div>
    </div>

  </div>
</div>

{# ===== EXTRAS mínimos para esta pantalla (van con tu CSS Glass UI) ===== #}
<style>
  .login-split{ background:
      radial-gradient(60% 80% at 10% 0%, rgba(178,34,93,0.10), transparent 60%),
      radial-gradient(60% 80% at 100% 10%, rgba(192,159,101,0.10), transparent 60%),
      var(--bg); }
  .welcome-pane{
    background: linear-gradient(135deg, #910f25ff 0%, #331b09ff 100%);
  }
  .welcome-pane h1{ line-height: .95; }
  @media (max-width: 991.98px){
    .welcome-pane{ min-height: 38vh; }
  }
</style>
{% endblock %}
", "security/login.html.twig", "/var/www/html/templates/security/login.html.twig");
    }
}
