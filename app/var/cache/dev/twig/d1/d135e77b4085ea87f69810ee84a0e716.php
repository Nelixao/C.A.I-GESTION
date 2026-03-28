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

/* security/register.html.twig */
class __TwigTemplate_03eb00b5618071d2638ab3797b21e5c8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

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

        yield "Crear cuenta";
        
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
        yield "<div class=\"login-container\">
  <div class=\"login-card\">
    <h1 class=\"login-title\">Crear cuenta</h1>

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 11
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
    <form method=\"post\" action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("register"), "html", null, true);
        yield "\">
      <div class=\"form-group\">
        <label for=\"nombre\">Nombre</label>
        <input type=\"text\" id=\"nombre\" name=\"nombre\" required placeholder=\"Tu nombre\">
      </div>
      <div class=\"form-group\">
        <label for=\"email\">Correo electrónico</label>
        <input type=\"email\" id=\"email\" name=\"email\" required placeholder=\"correo@ejemplo.com\">
      </div>
      <div class=\"form-group\">
        <label for=\"password\">Contraseña</label>
        <input type=\"password\" id=\"password\" name=\"password\" required placeholder=\"Mínimo 6 caracteres\">
      </div>
      <button class=\"login-submit\" type=\"submit\">Crear cuenta</button>
    </form>

    <div class=\"login-links\">
      <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Ya tengo cuenta</a>
    </div>
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
        return "security/register.html.twig";
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
        return array (  144 => 34,  124 => 17,  120 => 16,  117 => 15,  111 => 14,  100 => 12,  95 => 11,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baselogin.html.twig' %}

{% block title %}Crear cuenta{% endblock %}

{% block body %}
<div class=\"login-container\">
  <div class=\"login-card\">
    <h1 class=\"login-title\">Crear cuenta</h1>

    {% for label, messages in app.flashes %}
      {% for message in messages %}
        <div class=\"alert alert-{{ label }}\">{{ message }}</div>
      {% endfor %}
    {% endfor %}

    <form method=\"post\" action=\"{{ path('app_register') }}\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('register') }}\">
      <div class=\"form-group\">
        <label for=\"nombre\">Nombre</label>
        <input type=\"text\" id=\"nombre\" name=\"nombre\" required placeholder=\"Tu nombre\">
      </div>
      <div class=\"form-group\">
        <label for=\"email\">Correo electrónico</label>
        <input type=\"email\" id=\"email\" name=\"email\" required placeholder=\"correo@ejemplo.com\">
      </div>
      <div class=\"form-group\">
        <label for=\"password\">Contraseña</label>
        <input type=\"password\" id=\"password\" name=\"password\" required placeholder=\"Mínimo 6 caracteres\">
      </div>
      <button class=\"login-submit\" type=\"submit\">Crear cuenta</button>
    </form>

    <div class=\"login-links\">
      <a href=\"{{ path('app_login') }}\">Ya tengo cuenta</a>
    </div>
  </div>
</div>
{% endblock %}
", "security/register.html.twig", "/var/www/html/templates/security/register.html.twig");
    }
}
