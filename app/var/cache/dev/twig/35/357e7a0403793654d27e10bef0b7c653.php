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

/* circular/show.html.twig */
class __TwigTemplate_91b47eb1c6daace60e8238ad40f0d41b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "circular/show.html.twig"));

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

        yield "Detalle de Circular";
        
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
        yield "    <div class=\"container mt-4\">
        <h1 class=\"text-center mb-4\"> Detalle de Circular</h1>

        <div class=\"card shadow-sm border-0 mb-4\">
            <div class=\"card-body\">
                <dl class=\"row\">
                    <dt class=\"col-sm-4\">ID</dt>
                    <dd class=\"col-sm-8\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["circular"]) || array_key_exists("circular", $context) ? $context["circular"] : (function () { throw new RuntimeError('Variable "circular" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "</dd>

                    <dt class=\"col-sm-4\">Título</dt>
                    <dd class=\"col-sm-8\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["circular"]) || array_key_exists("circular", $context) ? $context["circular"] : (function () { throw new RuntimeError('Variable "circular" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "</dd>

                    <dt class=\"col-sm-4\">Contenido</dt>
                    <dd class=\"col-sm-8\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["circular"]) || array_key_exists("circular", $context) ? $context["circular"] : (function () { throw new RuntimeError('Variable "circular" does not exist.', 19, $this->source); })()), "content", [], "any", false, false, false, 19), "html", null, true);
        yield "</dd>

                    <dt class=\"col-sm-4\">Grupo Destino</dt>
                    <dd class=\"col-sm-8\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["circular"]) || array_key_exists("circular", $context) ? $context["circular"] : (function () { throw new RuntimeError('Variable "circular" does not exist.', 22, $this->source); })()), "targetGroup", [], "any", false, false, false, 22), "html", null, true);
        yield "</dd>

                    <dt class=\"col-sm-4\">Fecha</dt>
                    <dd class=\"col-sm-8\">";
        // line 25
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["circular"]) || array_key_exists("circular", $context) ? $context["circular"] : (function () { throw new RuntimeError('Variable "circular" does not exist.', 25, $this->source); })()), "date", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["circular"]) || array_key_exists("circular", $context) ? $context["circular"] : (function () { throw new RuntimeError('Variable "circular" does not exist.', 25, $this->source); })()), "date", [], "any", false, false, false, 25), "Y-m-d H:i"), "html", null, true)) : (""));
        yield "</dd>

                    <dt class=\"col-sm-4\">Archivo</dt>
                    <dd class=\"col-sm-8\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["circular"]) || array_key_exists("circular", $context) ? $context["circular"] : (function () { throw new RuntimeError('Variable "circular" does not exist.', 28, $this->source); })()), "filePath", [], "any", false, false, false, 28), "html", null, true);
        yield "</dd>

                    <dt class=\"col-sm-4\">Creado por</dt>
                    <dd class=\"col-sm-8\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["circular"]) || array_key_exists("circular", $context) ? $context["circular"] : (function () { throw new RuntimeError('Variable "circular" does not exist.', 31, $this->source); })()), "createdBy", [], "any", false, false, false, 31), "html", null, true);
        yield "</dd>

                    <dt class=\"col-sm-4\">Creado el</dt>
                    <dd class=\"col-sm-8\">";
        // line 34
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["circular"]) || array_key_exists("circular", $context) ? $context["circular"] : (function () { throw new RuntimeError('Variable "circular" does not exist.', 34, $this->source); })()), "createdAt", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["circular"]) || array_key_exists("circular", $context) ? $context["circular"] : (function () { throw new RuntimeError('Variable "circular" does not exist.', 34, $this->source); })()), "createdAt", [], "any", false, false, false, 34), "Y-m-d H:i"), "html", null, true)) : (""));
        yield "</dd>

                    <dt class=\"col-sm-4\">Última actualización</dt>
                    <dd class=\"col-sm-8\">";
        // line 37
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["circular"]) || array_key_exists("circular", $context) ? $context["circular"] : (function () { throw new RuntimeError('Variable "circular" does not exist.', 37, $this->source); })()), "updatedAt", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["circular"]) || array_key_exists("circular", $context) ? $context["circular"] : (function () { throw new RuntimeError('Variable "circular" does not exist.', 37, $this->source); })()), "updatedAt", [], "any", false, false, false, 37), "Y-m-d H:i"), "html", null, true)) : (""));
        yield "</dd>
                </dl>
            </div>
        </div>

        <div class=\"d-flex justify-content-between\">
            <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_circular_index");
        yield "\" class=\"btn btn-secondary rounded-pill px-4\">← Volver</a>

            <div>
                <a href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_circular_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["circular"]) || array_key_exists("circular", $context) ? $context["circular"] : (function () { throw new RuntimeError('Variable "circular" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        yield "\" class=\"btn btn-primary rounded-pill px-4 me-2\">✏️ Editar</a>
                ";
        // line 47
        yield Twig\Extension\CoreExtension::include($this->env, $context, "circular/_delete_form.html.twig", ["class" => "d-inline"]);
        yield "
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
        return "circular/show.html.twig";
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
        return array (  161 => 47,  157 => 46,  151 => 43,  142 => 37,  136 => 34,  130 => 31,  124 => 28,  118 => 25,  112 => 22,  106 => 19,  100 => 16,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Detalle de Circular{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"text-center mb-4\"> Detalle de Circular</h1>

        <div class=\"card shadow-sm border-0 mb-4\">
            <div class=\"card-body\">
                <dl class=\"row\">
                    <dt class=\"col-sm-4\">ID</dt>
                    <dd class=\"col-sm-8\">{{ circular.id }}</dd>

                    <dt class=\"col-sm-4\">Título</dt>
                    <dd class=\"col-sm-8\">{{ circular.title }}</dd>

                    <dt class=\"col-sm-4\">Contenido</dt>
                    <dd class=\"col-sm-8\">{{ circular.content }}</dd>

                    <dt class=\"col-sm-4\">Grupo Destino</dt>
                    <dd class=\"col-sm-8\">{{ circular.targetGroup }}</dd>

                    <dt class=\"col-sm-4\">Fecha</dt>
                    <dd class=\"col-sm-8\">{{ circular.date ? circular.date|date('Y-m-d H:i') : '' }}</dd>

                    <dt class=\"col-sm-4\">Archivo</dt>
                    <dd class=\"col-sm-8\">{{ circular.filePath }}</dd>

                    <dt class=\"col-sm-4\">Creado por</dt>
                    <dd class=\"col-sm-8\">{{ circular.createdBy }}</dd>

                    <dt class=\"col-sm-4\">Creado el</dt>
                    <dd class=\"col-sm-8\">{{ circular.createdAt ? circular.createdAt|date('Y-m-d H:i') : '' }}</dd>

                    <dt class=\"col-sm-4\">Última actualización</dt>
                    <dd class=\"col-sm-8\">{{ circular.updatedAt ? circular.updatedAt|date('Y-m-d H:i') : '' }}</dd>
                </dl>
            </div>
        </div>

        <div class=\"d-flex justify-content-between\">
            <a href=\"{{ path('app_circular_index') }}\" class=\"btn btn-secondary rounded-pill px-4\">← Volver</a>

            <div>
                <a href=\"{{ path('app_circular_edit', {'id': circular.id}) }}\" class=\"btn btn-primary rounded-pill px-4 me-2\">✏️ Editar</a>
                {{ include('circular/_delete_form.html.twig', { 'class': 'd-inline' }) }}
            </div>
        </div>
    </div>
{% endblock %}
", "circular/show.html.twig", "/var/www/html/templates/circular/show.html.twig");
    }
}
