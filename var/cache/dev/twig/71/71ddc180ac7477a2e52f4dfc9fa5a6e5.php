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

/* caixa/show.html.twig */
class __TwigTemplate_24a37328024d3411cb75130664d97ed3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "caixa/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "caixa/show.html.twig"));

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

        yield "Detalhes do Caixa - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caixa"]) || array_key_exists("caixa", $context) ? $context["caixa"] : (function () { throw new RuntimeError('Variable "caixa" does not exist.', 3, $this->source); })()), "nome", [], "any", false, false, false, 3), "html", null, true);
        
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
                    <h3>Detalhes do Caixa</h3>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caixa"]) || array_key_exists("caixa", $context) ? $context["caixa"] : (function () { throw new RuntimeError('Variable "caixa" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Nome:</th>
                                    <td><strong>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caixa"]) || array_key_exists("caixa", $context) ? $context["caixa"] : (function () { throw new RuntimeError('Variable "caixa" does not exist.', 24, $this->source); })()), "nome", [], "any", false, false, false, 24), "html", null, true);
        yield "</strong></td>
                                </tr>
                                <tr>
                                    <th>Local:</th>
                                    <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caixa"]) || array_key_exists("caixa", $context) ? $context["caixa"] : (function () { throw new RuntimeError('Variable "caixa" does not exist.', 28, $this->source); })()), "local", [], "any", false, false, false, 28), "nome", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Responsável:</th>
                                    <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caixa"]) || array_key_exists("caixa", $context) ? $context["caixa"] : (function () { throw new RuntimeError('Variable "caixa" does not exist.', 32, $this->source); })()), "responsavel", [], "any", false, false, false, 32), "nome", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        ";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["caixa"]) || array_key_exists("caixa", $context) ? $context["caixa"] : (function () { throw new RuntimeError('Variable "caixa" does not exist.', 37, $this->source); })()), "ativo", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "                                            <span class=\"badge bg-success\">Ativo</span>
                                        ";
        } else {
            // line 40
            yield "                                            <span class=\"badge bg-danger\">Inativo</span>
                                        ";
        }
        // line 42
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <th>Data Criação:</th>
                                    <td>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caixa"]) || array_key_exists("caixa", $context) ? $context["caixa"] : (function () { throw new RuntimeError('Variable "caixa" does not exist.', 46, $this->source); })()), "dataCriacao", [], "any", false, false, false, 46), "d/m/Y H:i:s"), "html", null, true);
        yield "</td>
                                </tr>
                            </table>
                        </div>
                        <div class=\"col-md-6\">
                            <h5>Informações Financeiras</h5>
                            <div class=\"card bg-light\">
                                <div class=\"card-body text-center\">
                                    <h4>Saldo Atual</h4>
                                    <h2 class=\"";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["caixa"]) || array_key_exists("caixa", $context) ? $context["caixa"] : (function () { throw new RuntimeError('Variable "caixa" does not exist.', 55, $this->source); })()), "saldoAtual", [], "any", false, false, false, 55) >= 0)) {
            yield "text-success";
        } else {
            yield "text-danger";
        }
        yield "\">
                                        R\$ ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caixa"]) || array_key_exists("caixa", $context) ? $context["caixa"] : (function () { throw new RuntimeError('Variable "caixa" does not exist.', 56, $this->source); })()), "saldoAtual", [], "any", false, false, false, 56), 2, ",", "."), "html", null, true);
        yield "
                                    </h2>
                                </div>
                            </div>
                            
                            ";
        // line 61
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["caixa"]) || array_key_exists("caixa", $context) ? $context["caixa"] : (function () { throw new RuntimeError('Variable "caixa" does not exist.', 61, $this->source); })()), "descricao", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "                                <div class=\"mt-3\">
                                    <h6>Descrição:</h6>
                                    <p>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caixa"]) || array_key_exists("caixa", $context) ? $context["caixa"] : (function () { throw new RuntimeError('Variable "caixa" does not exist.', 64, $this->source); })()), "descricao", [], "any", false, false, false, 64), "html", null, true);
            yield "</p>
                                </div>
                            ";
        }
        // line 67
        yield "                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("caixa_index");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Voltar
                        </a>
                        <div>
                            ";
        // line 75
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("MODULO_EDIT", "CAIXA")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("caixa_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["caixa"]) || array_key_exists("caixa", $context) ? $context["caixa"] : (function () { throw new RuntimeError('Variable "caixa" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">
                                    <i class=\"fas fa-edit\"></i> Editar
                                </a>
                            ";
        }
        // line 80
        yield "                        </div>
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
        return "caixa/show.html.twig";
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
        return array (  225 => 80,  217 => 76,  215 => 75,  208 => 71,  202 => 67,  196 => 64,  192 => 62,  190 => 61,  182 => 56,  174 => 55,  162 => 46,  156 => 42,  152 => 40,  148 => 38,  146 => 37,  138 => 32,  131 => 28,  124 => 24,  117 => 20,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Detalhes do Caixa - {{ caixa.nome }}{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3>Detalhes do Caixa</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h5>Informações Básicas</h5>
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th>ID:</th>
                                    <td>{{ caixa.id }}</td>
                                </tr>
                                <tr>
                                    <th>Nome:</th>
                                    <td><strong>{{ caixa.nome }}</strong></td>
                                </tr>
                                <tr>
                                    <th>Local:</th>
                                    <td>{{ caixa.local.nome }}</td>
                                </tr>
                                <tr>
                                    <th>Responsável:</th>
                                    <td>{{ caixa.responsavel.nome }}</td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        {% if caixa.ativo %}
                                            <span class=\"badge bg-success\">Ativo</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Inativo</span>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Data Criação:</th>
                                    <td>{{ caixa.dataCriacao|date('d/m/Y H:i:s') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class=\"col-md-6\">
                            <h5>Informações Financeiras</h5>
                            <div class=\"card bg-light\">
                                <div class=\"card-body text-center\">
                                    <h4>Saldo Atual</h4>
                                    <h2 class=\"{% if caixa.saldoAtual >= 0 %}text-success{% else %}text-danger{% endif %}\">
                                        R\$ {{ caixa.saldoAtual|number_format(2, ',', '.') }}
                                    </h2>
                                </div>
                            </div>
                            
                            {% if caixa.descricao %}
                                <div class=\"mt-3\">
                                    <h6>Descrição:</h6>
                                    <p>{{ caixa.descricao }}</p>
                                </div>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"{{ path('caixa_index') }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Voltar
                        </a>
                        <div>
                            {% if is_granted('MODULO_EDIT', 'CAIXA') %}
                                <a href=\"{{ path('caixa_edit', {'id': caixa.id}) }}\" class=\"btn btn-warning\">
                                    <i class=\"fas fa-edit\"></i> Editar
                                </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "caixa/show.html.twig", "/srv/http/CedeOnline/templates/caixa/show.html.twig");
    }
}
