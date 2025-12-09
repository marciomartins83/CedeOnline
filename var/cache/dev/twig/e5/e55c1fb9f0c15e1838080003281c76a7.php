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

/* admin/permissao/index.html.twig */
class __TwigTemplate_c46e725b5298e5a8bb79acfc3a6390b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/permissao/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/permissao/index.html.twig"));

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

        yield "Gestão de Permissões";
        
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
                    <h3>Gestão de Permissões</h3>
                    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_permissao_new");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus\"></i> Nova Permissão
                    </a>
                </div>
                <div class=\"card-body\">
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Usuário</th>
                                    <th>Módulo</th>
                                    <th>Visualizar</th>
                                    <th>Incluir</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>
                                    <th>Data Criação</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["permissoes"]) || array_key_exists("permissoes", $context) ? $context["permissoes"] : (function () { throw new RuntimeError('Variable "permissoes" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["permissao"]) {
            // line 41
            yield "                                    <tr>
                                        <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                                        <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "usuario", [], "any", false, false, false, 43), "nome", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                        <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "modulo", [], "any", false, false, false, 44), "nome", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                                        <td>
                                            ";
            // line 46
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "podeVisualizar", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 47
                yield "                                                <span class=\"badge bg-success\">Sim</span>
                                            ";
            } else {
                // line 49
                yield "                                                <span class=\"badge bg-secondary\">Não</span>
                                            ";
            }
            // line 51
            yield "                                        </td>
                                        <td>
                                            ";
            // line 53
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "podeIncluir", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "                                                <span class=\"badge bg-success\">Sim</span>
                                            ";
            } else {
                // line 56
                yield "                                                <span class=\"badge bg-secondary\">Não</span>
                                            ";
            }
            // line 58
            yield "                                        </td>
                                        <td>
                                            ";
            // line 60
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "podeEditar", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 61
                yield "                                                <span class=\"badge bg-success\">Sim</span>
                                            ";
            } else {
                // line 63
                yield "                                                <span class=\"badge bg-secondary\">Não</span>
                                            ";
            }
            // line 65
            yield "                                        </td>
                                        <td>
                                            ";
            // line 67
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "podeExcluir", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "                                                <span class=\"badge bg-success\">Sim</span>
                                            ";
            } else {
                // line 70
                yield "                                                <span class=\"badge bg-secondary\">Não</span>
                                            ";
            }
            // line 72
            yield "                                        </td>
                                        <td>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "dataCriacao", [], "any", false, false, false, 73), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                        <td>
                                            <div class=\"btn-group\" role=\"group\">
                                                <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_permissao_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                                <a href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_permissao_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">
                                                    <i class=\"fas fa-edit\"></i>
                                                </a>
                                                <form method=\"post\" action=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_permissao_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" style=\"display: inline-block\" onsubmit=\"return confirm('Tem certeza que deseja excluir esta permissão?')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "id", [], "any", false, false, false, 83))), "html", null, true);
            yield "\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">
                                                        <i class=\"fas fa-trash\"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 91
        if (!$context['_iterated']) {
            // line 92
            yield "                                    <tr>
                                        <td colspan=\"9\" class=\"text-center\">Nenhuma permissão encontrada</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['permissao'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
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
        return "admin/permissao/index.html.twig";
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
        return array (  274 => 96,  265 => 92,  263 => 91,  250 => 83,  246 => 82,  240 => 79,  234 => 76,  228 => 73,  225 => 72,  221 => 70,  217 => 68,  215 => 67,  211 => 65,  207 => 63,  203 => 61,  201 => 60,  197 => 58,  193 => 56,  189 => 54,  187 => 53,  183 => 51,  179 => 49,  175 => 47,  173 => 46,  168 => 44,  164 => 43,  160 => 42,  157 => 41,  152 => 40,  133 => 23,  123 => 19,  120 => 18,  116 => 17,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestão de Permissões{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h3>Gestão de Permissões</h3>
                    <a href=\"{{ path('admin_permissao_new') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus\"></i> Nova Permissão
                    </a>
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
                                    <th>Usuário</th>
                                    <th>Módulo</th>
                                    <th>Visualizar</th>
                                    <th>Incluir</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>
                                    <th>Data Criação</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for permissao in permissoes %}
                                    <tr>
                                        <td>{{ permissao.id }}</td>
                                        <td>{{ permissao.usuario.nome }}</td>
                                        <td>{{ permissao.modulo.nome }}</td>
                                        <td>
                                            {% if permissao.podeVisualizar %}
                                                <span class=\"badge bg-success\">Sim</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">Não</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if permissao.podeIncluir %}
                                                <span class=\"badge bg-success\">Sim</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">Não</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if permissao.podeEditar %}
                                                <span class=\"badge bg-success\">Sim</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">Não</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if permissao.podeExcluir %}
                                                <span class=\"badge bg-success\">Sim</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">Não</span>
                                            {% endif %}
                                        </td>
                                        <td>{{ permissao.dataCriacao|date('d/m/Y H:i') }}</td>
                                        <td>
                                            <div class=\"btn-group\" role=\"group\">
                                                <a href=\"{{ path('admin_permissao_show', {'id': permissao.id}) }}\" class=\"btn btn-sm btn-info\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                                <a href=\"{{ path('admin_permissao_edit', {'id': permissao.id}) }}\" class=\"btn btn-sm btn-warning\">
                                                    <i class=\"fas fa-edit\"></i>
                                                </a>
                                                <form method=\"post\" action=\"{{ path('admin_permissao_delete', {'id': permissao.id}) }}\" style=\"display: inline-block\" onsubmit=\"return confirm('Tem certeza que deseja excluir esta permissão?')\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ permissao.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">
                                                        <i class=\"fas fa-trash\"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"9\" class=\"text-center\">Nenhuma permissão encontrada</td>
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
{% endblock %} ", "admin/permissao/index.html.twig", "/srv/http/CedeOnline/templates/admin/permissao/index.html.twig");
    }
}
