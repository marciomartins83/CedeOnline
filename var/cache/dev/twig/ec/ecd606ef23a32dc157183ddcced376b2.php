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

/* admin/modulo/show.html.twig */
class __TwigTemplate_fe89a3ef1133c5c7bdfa66c94ff9de74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/modulo/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/modulo/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Detalhes do Módulo - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modulo"]) || array_key_exists("modulo", $context) ? $context["modulo"] : (function () { throw new RuntimeError('Variable "modulo" does not exist.', 3, $this->source); })()), "nome", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mt-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3>Detalhes do Módulo</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h5>Informações Básicas</h5>
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th>ID:</th>
                                    <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modulo"]) || array_key_exists("modulo", $context) ? $context["modulo"] : (function () { throw new RuntimeError('Variable "modulo" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Nome:</th>
                                    <td><strong>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modulo"]) || array_key_exists("modulo", $context) ? $context["modulo"] : (function () { throw new RuntimeError('Variable "modulo" does not exist.', 24, $this->source); })()), "nome", [], "any", false, false, false, 24), "html", null, true);
        yield "</strong></td>
                                </tr>
                                <tr>
                                    <th>Código:</th>
                                    <td><code>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modulo"]) || array_key_exists("modulo", $context) ? $context["modulo"] : (function () { throw new RuntimeError('Variable "modulo" does not exist.', 28, $this->source); })()), "codigo", [], "any", false, false, false, 28), "html", null, true);
        yield "</code></td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["modulo"]) || array_key_exists("modulo", $context) ? $context["modulo"] : (function () { throw new RuntimeError('Variable "modulo" does not exist.', 33, $this->source); })()), "ativo", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "                                            <span class=\"badge bg-success\">Ativo</span>
                                        ";
        } else {
            // line 36
            yield "                                            <span class=\"badge bg-danger\">Inativo</span>
                                        ";
        }
        // line 38
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <th>Data Criação:</th>
                                    <td>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modulo"]) || array_key_exists("modulo", $context) ? $context["modulo"] : (function () { throw new RuntimeError('Variable "modulo" does not exist.', 42, $this->source); })()), "dataCriacao", [], "any", false, false, false, 42), "d/m/Y H:i:s"), "html", null, true);
        yield "</td>
                                </tr>
                            </table>
                        </div>
                        <div class=\"col-md-6\">
                            <h5>Descrição</h5>
                            <p>";
        // line 48
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["modulo"]) || array_key_exists("modulo", $context) ? $context["modulo"] : (function () { throw new RuntimeError('Variable "modulo" does not exist.', 48, $this->source); })()), "descricao", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modulo"]) || array_key_exists("modulo", $context) ? $context["modulo"] : (function () { throw new RuntimeError('Variable "modulo" does not exist.', 48, $this->source); })()), "descricao", [], "any", false, false, false, 48), "html", null, true)) : ("Nenhuma descrição fornecida."));
        yield "</p>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modulo_index");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Voltar
                        </a>
                        <div>
                            <a href=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modulo_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["modulo"]) || array_key_exists("modulo", $context) ? $context["modulo"] : (function () { throw new RuntimeError('Variable "modulo" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit\"></i> Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/modulo/show.html.twig";
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
        return array (  179 => 57,  172 => 53,  164 => 48,  155 => 42,  149 => 38,  145 => 36,  141 => 34,  139 => 33,  131 => 28,  124 => 24,  117 => 20,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Detalhes do Módulo - {{ modulo.nome }}{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3>Detalhes do Módulo</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h5>Informações Básicas</h5>
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th>ID:</th>
                                    <td>{{ modulo.id }}</td>
                                </tr>
                                <tr>
                                    <th>Nome:</th>
                                    <td><strong>{{ modulo.nome }}</strong></td>
                                </tr>
                                <tr>
                                    <th>Código:</th>
                                    <td><code>{{ modulo.codigo }}</code></td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        {% if modulo.ativo %}
                                            <span class=\"badge bg-success\">Ativo</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Inativo</span>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Data Criação:</th>
                                    <td>{{ modulo.dataCriacao|date('d/m/Y H:i:s') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class=\"col-md-6\">
                            <h5>Descrição</h5>
                            <p>{{ modulo.descricao ?: 'Nenhuma descrição fornecida.' }}</p>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"{{ path('admin_modulo_index') }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Voltar
                        </a>
                        <div>
                            <a href=\"{{ path('admin_modulo_edit', {'id': modulo.id}) }}\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit\"></i> Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "admin/modulo/show.html.twig", "/srv/http/CedeOnline/templates/admin/modulo/show.html.twig");
    }
}
