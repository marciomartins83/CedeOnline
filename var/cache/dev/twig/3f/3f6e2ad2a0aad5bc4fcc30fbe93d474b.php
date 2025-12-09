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

/* admin/user/show.html.twig */
class __TwigTemplate_1ac5a2000a03c8d321a2163a2429e120 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/show.html.twig"));

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

        yield "Detalhes do Usuário - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "nome", [], "any", false, false, false, 3), "html", null, true);
        
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
                    <h3>Detalhes do Usuário</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h5>Informações Pessoais</h5>
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th>ID:</th>
                                    <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Nome:</th>
                                    <td><strong>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "nome", [], "any", false, false, false, 24), "html", null, true);
        yield "</strong></td>
                                </tr>
                                <tr>
                                    <th>E-mail:</th>
                                    <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Usuário:</th>
                                    <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "username", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        ";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "ativo", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "dataCriacao", [], "any", false, false, false, 46), "d/m/Y H:i:s"), "html", null, true);
        yield "</td>
                                </tr>
                            </table>
                        </div>
                        <div class=\"col-md-6\">
                            <h5>Perfis e Permissões</h5>
                            <div class=\"mb-3\">
                                <strong>Perfis:</strong>
                                <div class=\"mt-2\">
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "roles", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 56
            yield "                                        <span class=\"badge bg-primary me-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "</span>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <strong>Permissões por Módulo:</strong>
                                <div class=\"mt-2\">
                                    ";
        // line 63
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "permissoes", [], "any", false, false, false, 63)) > 0)) {
            // line 64
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "permissoes", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["permissao"]) {
                // line 65
                yield "                                            <div class=\"card mb-2\">
                                                <div class=\"card-body p-2\">
                                                    <strong>";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "modulo", [], "any", false, false, false, 67), "nome", [], "any", false, false, false, 67), "html", null, true);
                yield "</strong>
                                                    <div class=\"mt-1\">
                                                        ";
                // line 69
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "podeVisualizar", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 70
                    yield "                                                            <span class=\"badge bg-success me-1\">Ver</span>
                                                        ";
                }
                // line 72
                yield "                                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "podeIncluir", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 73
                    yield "                                                            <span class=\"badge bg-info me-1\">Incluir</span>
                                                        ";
                }
                // line 75
                yield "                                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "podeEditar", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 76
                    yield "                                                            <span class=\"badge bg-warning me-1\">Editar</span>
                                                        ";
                }
                // line 78
                yield "                                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["permissao"], "podeExcluir", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 79
                    yield "                                                            <span class=\"badge bg-danger me-1\">Excluir</span>
                                                        ";
                }
                // line 81
                yield "                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['permissao'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "                                    ";
        } else {
            // line 86
            yield "                                        <p class=\"text-muted\">Nenhuma permissão específica configurada.</p>
                                    ";
        }
        // line 88
        yield "                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Voltar
                        </a>
                        <div>
                            <a href=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_permissao_usuario", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98)]), "html", null, true);
        yield "\" class=\"btn btn-info\">
                                <i class=\"fas fa-key\"></i> Gerenciar Permissões
                            </a>
                            <a href=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
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
        return "admin/user/show.html.twig";
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
        return array (  274 => 101,  268 => 98,  261 => 94,  253 => 88,  249 => 86,  246 => 85,  237 => 81,  233 => 79,  230 => 78,  226 => 76,  223 => 75,  219 => 73,  216 => 72,  212 => 70,  210 => 69,  205 => 67,  201 => 65,  196 => 64,  194 => 63,  187 => 58,  178 => 56,  174 => 55,  162 => 46,  156 => 42,  152 => 40,  148 => 38,  146 => 37,  138 => 32,  131 => 28,  124 => 24,  117 => 20,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Detalhes do Usuário - {{ user.nome }}{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3>Detalhes do Usuário</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h5>Informações Pessoais</h5>
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th>ID:</th>
                                    <td>{{ user.id }}</td>
                                </tr>
                                <tr>
                                    <th>Nome:</th>
                                    <td><strong>{{ user.nome }}</strong></td>
                                </tr>
                                <tr>
                                    <th>E-mail:</th>
                                    <td>{{ user.email }}</td>
                                </tr>
                                <tr>
                                    <th>Usuário:</th>
                                    <td>{{ user.username }}</td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        {% if user.ativo %}
                                            <span class=\"badge bg-success\">Ativo</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Inativo</span>
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Data Criação:</th>
                                    <td>{{ user.dataCriacao|date('d/m/Y H:i:s') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class=\"col-md-6\">
                            <h5>Perfis e Permissões</h5>
                            <div class=\"mb-3\">
                                <strong>Perfis:</strong>
                                <div class=\"mt-2\">
                                    {% for role in user.roles %}
                                        <span class=\"badge bg-primary me-1\">{{ role }}</span>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <strong>Permissões por Módulo:</strong>
                                <div class=\"mt-2\">
                                    {% if user.permissoes|length > 0 %}
                                        {% for permissao in user.permissoes %}
                                            <div class=\"card mb-2\">
                                                <div class=\"card-body p-2\">
                                                    <strong>{{ permissao.modulo.nome }}</strong>
                                                    <div class=\"mt-1\">
                                                        {% if permissao.podeVisualizar %}
                                                            <span class=\"badge bg-success me-1\">Ver</span>
                                                        {% endif %}
                                                        {% if permissao.podeIncluir %}
                                                            <span class=\"badge bg-info me-1\">Incluir</span>
                                                        {% endif %}
                                                        {% if permissao.podeEditar %}
                                                            <span class=\"badge bg-warning me-1\">Editar</span>
                                                        {% endif %}
                                                        {% if permissao.podeExcluir %}
                                                            <span class=\"badge bg-danger me-1\">Excluir</span>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    {% else %}
                                        <p class=\"text-muted\">Nenhuma permissão específica configurada.</p>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"{{ path('admin_user_index') }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Voltar
                        </a>
                        <div>
                            <a href=\"{{ path('admin_permissao_usuario', {'id': user.id}) }}\" class=\"btn btn-info\">
                                <i class=\"fas fa-key\"></i> Gerenciar Permissões
                            </a>
                            <a href=\"{{ path('admin_user_edit', {'id': user.id}) }}\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit\"></i> Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "admin/user/show.html.twig", "/srv/http/CedeOnline/templates/admin/user/show.html.twig");
    }
}
