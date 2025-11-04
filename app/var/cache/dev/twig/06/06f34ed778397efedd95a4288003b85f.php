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

/* correspondence/show.html.twig */
class __TwigTemplate_148b356b310d3c33528f24b694da07c6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "correspondence/show.html.twig"));

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

        yield "Correspondence";
        
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
        yield "    <h1>Correspondence</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 16, $this->source); })()), "subject", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Body</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 20, $this->source); })()), "body", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Sender</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 24, $this->source); })()), "sender", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Receiver</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 28, $this->source); })()), "receiver", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 32
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>File_path</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 36, $this->source); })()), "filePath", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Created_by</th>
                <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 40, $this->source); })()), "createdBy", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 44
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 44, $this->source); })()), "createdAt", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 44, $this->source); })()), "createdAt", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>";
        // line 48
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 48, $this->source); })()), "updatedAt", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 48, $this->source); })()), "updatedAt", [], "any", false, false, false, 48), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correspondence_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_correspondence_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["correspondence"]) || array_key_exists("correspondence", $context) ? $context["correspondence"] : (function () { throw new RuntimeError('Variable "correspondence" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 57
        yield Twig\Extension\CoreExtension::include($this->env, $context, "correspondence/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "correspondence/show.html.twig";
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
        return array (  174 => 57,  169 => 55,  164 => 53,  156 => 48,  149 => 44,  142 => 40,  135 => 36,  128 => 32,  121 => 28,  114 => 24,  107 => 20,  100 => 16,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Correspondence{% endblock %}

{% block body %}
    <h1>Correspondence</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ correspondence.id }}</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>{{ correspondence.subject }}</td>
            </tr>
            <tr>
                <th>Body</th>
                <td>{{ correspondence.body }}</td>
            </tr>
            <tr>
                <th>Sender</th>
                <td>{{ correspondence.sender }}</td>
            </tr>
            <tr>
                <th>Receiver</th>
                <td>{{ correspondence.receiver }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ correspondence.date ? correspondence.date|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>File_path</th>
                <td>{{ correspondence.filePath }}</td>
            </tr>
            <tr>
                <th>Created_by</th>
                <td>{{ correspondence.createdBy }}</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>{{ correspondence.createdAt ? correspondence.createdAt|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>{{ correspondence.updatedAt ? correspondence.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_correspondence_index') }}\">back to list</a>

    <a href=\"{{ path('app_correspondence_edit', {'id': correspondence.id}) }}\">edit</a>

    {{ include('correspondence/_delete_form.html.twig') }}
{% endblock %}
", "correspondence/show.html.twig", "/var/www/html/templates/correspondence/show.html.twig");
    }
}
