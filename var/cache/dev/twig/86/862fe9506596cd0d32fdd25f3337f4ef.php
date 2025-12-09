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

/* caixa/index.html.twig */
class __TwigTemplate_65014e79e840de8878a5e9eea84f65c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "caixa/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "caixa/index.html.twig"));

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

        yield "Gestão de Caixas";
        
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
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h3>Gestão de Caixas</h3>
                    ";
        // line 12
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("MODULO_CREATE", "CAIXA")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("caixa_new");
            yield "\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus\"></i> Novo Caixa
                        </a>
                    ";
        }
        // line 17
        yield "                </div>
                <div class=\"card-body\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Local</th>
                                    <th>Responsável</th>
                                    <th>Saldo Atual</th>
                                    <th>Status</th>
                                    <th>Data Criação</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["caixas"]) || array_key_exists("caixas", $context) ? $context["caixas"] : (function () { throw new RuntimeError('Variable "caixas" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["caixa"]) {
            // line 42
            yield "                                    <tr>
                                        <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caixa"], "id", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                        <td><strong>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["caixa"], "nome", [], "any", false, false, false, 44), "html", null, true);
            yield "</strong></td>
                                        <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caixa"], "local", [], "any", false, false, false, 45), "nome", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                        <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["caixa"], "responsavel", [], "any", false, false, false, 46), "nome", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                        <td>
                                            <span class=\"badge ";
            // line 48
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["caixa"], "saldoAtual", [], "any", false, false, false, 48) >= 0)) {
                yield "bg-success";
            } else {
                yield "bg-danger";
            }
            yield "\">
                                                R\$ ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["caixa"], "saldoAtual", [], "any", false, false, false, 49), 2, ",", "."), "html", null, true);
            yield "
                                            </span>
                                        </td>
                                        <td>
                                            ";
            // line 53
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["caixa"], "ativo", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "                                                <span class=\"badge bg-success\">Ativo</span>
                                            ";
            } else {
                // line 56
                yield "                                                <span class=\"badge bg-danger\">Inativo</span>
                                            ";
            }
            // line 58
            yield "                                        </td>
                                        <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["caixa"], "dataCriacao", [], "any", false, false, false, 59), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                        <td>
                                            <div class=\"btn-group\" role=\"group\">
                                                ";
            // line 62
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("MODULO_VIEW", "CAIXA")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("caixa_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["caixa"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-info\">
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                ";
            }
            // line 67
            yield "                                                ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("MODULO_EDIT", "CAIXA")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "                                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("caixa_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["caixa"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-warning\">
                                                        <i class=\"fas fa-edit\"></i>
                                                    </a>
                                                ";
            }
            // line 72
            yield "                                                ";
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("MODULO_DELETE", "CAIXA")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 73
                yield "                                                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("caixa_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["caixa"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                yield "\" style=\"display: inline-block\" onsubmit=\"return confirm('Tem certeza que deseja excluir este caixa?')\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["caixa"], "id", [], "any", false, false, false, 74))), "html", null, true);
                yield "\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-danger\">
                                                            <i class=\"fas fa-trash\"></i>
                                                        </button>
                                                    </form>
                                                ";
            }
            // line 80
            yield "                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 83
        if (!$context['_iterated']) {
            // line 84
            yield "                                    <tr>
                                        <td colspan=\"8\" class=\"text-center\">Nenhum caixa encontrado</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['caixa'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                            </tbody>
                        </table>
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
        return "caixa/index.html.twig";
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
        return array (  272 => 88,  263 => 84,  261 => 83,  254 => 80,  245 => 74,  240 => 73,  237 => 72,  229 => 68,  226 => 67,  218 => 63,  216 => 62,  210 => 59,  207 => 58,  203 => 56,  199 => 54,  197 => 53,  190 => 49,  182 => 48,  177 => 46,  173 => 45,  169 => 44,  165 => 43,  162 => 42,  157 => 41,  139 => 25,  129 => 21,  126 => 20,  122 => 19,  118 => 17,  110 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestão de Caixas{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h3>Gestão de Caixas</h3>
                    {% if is_granted('MODULO_CREATE', 'CAIXA') %}
                        <a href=\"{{ path('caixa_new') }}\" class=\"btn btn-primary\">
                            <i class=\"fas fa-plus\"></i> Novo Caixa
                        </a>
                    {% endif %}
                </div>
                <div class=\"card-body\">
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            {{ message }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    {% endfor %}

                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Local</th>
                                    <th>Responsável</th>
                                    <th>Saldo Atual</th>
                                    <th>Status</th>
                                    <th>Data Criação</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for caixa in caixas %}
                                    <tr>
                                        <td>{{ caixa.id }}</td>
                                        <td><strong>{{ caixa.nome }}</strong></td>
                                        <td>{{ caixa.local.nome }}</td>
                                        <td>{{ caixa.responsavel.nome }}</td>
                                        <td>
                                            <span class=\"badge {% if caixa.saldoAtual >= 0 %}bg-success{% else %}bg-danger{% endif %}\">
                                                R\$ {{ caixa.saldoAtual|number_format(2, ',', '.') }}
                                            </span>
                                        </td>
                                        <td>
                                            {% if caixa.ativo %}
                                                <span class=\"badge bg-success\">Ativo</span>
                                            {% else %}
                                                <span class=\"badge bg-danger\">Inativo</span>
                                            {% endif %}
                                        </td>
                                        <td>{{ caixa.dataCriacao|date('d/m/Y H:i') }}</td>
                                        <td>
                                            <div class=\"btn-group\" role=\"group\">
                                                {% if is_granted('MODULO_VIEW', 'CAIXA') %}
                                                    <a href=\"{{ path('caixa_show', {'id': caixa.id}) }}\" class=\"btn btn-sm btn-info\">
                                                        <i class=\"fas fa-eye\"></i>
                                                    </a>
                                                {% endif %}
                                                {% if is_granted('MODULO_EDIT', 'CAIXA') %}
                                                    <a href=\"{{ path('caixa_edit', {'id': caixa.id}) }}\" class=\"btn btn-sm btn-warning\">
                                                        <i class=\"fas fa-edit\"></i>
                                                    </a>
                                                {% endif %}
                                                {% if is_granted('MODULO_DELETE', 'CAIXA') %}
                                                    <form method=\"post\" action=\"{{ path('caixa_delete', {'id': caixa.id}) }}\" style=\"display: inline-block\" onsubmit=\"return confirm('Tem certeza que deseja excluir este caixa?')\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ caixa.id) }}\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-danger\">
                                                            <i class=\"fas fa-trash\"></i>
                                                        </button>
                                                    </form>
                                                {% endif %}
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"8\" class=\"text-center\">Nenhum caixa encontrado</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "caixa/index.html.twig", "/srv/http/CedeOnline/templates/caixa/index.html.twig");
    }
}
