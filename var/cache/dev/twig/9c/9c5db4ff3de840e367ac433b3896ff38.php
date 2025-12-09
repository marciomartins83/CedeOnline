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

/* admin/permissao/show.html.twig */
class __TwigTemplate_fb5a0f870943973b33901341a1c49853 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/permissao/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/permissao/show.html.twig"));

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

        yield "Detalhes da Permissão";
        
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
                    <h3>Detalhes da Permissão</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h5>Informações do Usuário</h5>
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th>Nome:</th>
                                    <td><strong>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 20, $this->source); })()), "usuario", [], "any", false, false, false, 20), "nome", [], "any", false, false, false, 20), "html", null, true);
        yield "</strong></td>
                                </tr>
                                <tr>
                                    <th>E-mail:</th>
                                    <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 24, $this->source); })()), "usuario", [], "any", false, false, false, 24), "email", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Usuário:</th>
                                    <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 28, $this->source); })()), "usuario", [], "any", false, false, false, 28), "username", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                                </tr>
                            </table>
                        </div>
                        <div class=\"col-md-6\">
                            <h5>Informações do Módulo</h5>
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th>Módulo:</th>
                                    <td><strong>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 37, $this->source); })()), "modulo", [], "any", false, false, false, 37), "nome", [], "any", false, false, false, 37), "html", null, true);
        yield "</strong></td>
                                </tr>
                                <tr>
                                    <th>Código:</th>
                                    <td><code>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 41, $this->source); })()), "modulo", [], "any", false, false, false, 41), "codigo", [], "any", false, false, false, 41), "html", null, true);
        yield "</code></td>
                                </tr>
                                <tr>
                                    <th>Descrição:</th>
                                    <td>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 45, $this->source); })()), "modulo", [], "any", false, false, false, 45), "descricao", [], "any", false, false, false, 45), "html", null, true);
        yield "</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class=\"row mt-4\">
                        <div class=\"col-md-12\">
                            <h5>Permissões</h5>
                            <div class=\"row\">
                                <div class=\"col-md-3\">
                                    <div class=\"card\">
                                        <div class=\"card-body text-center\">
                                            <h6>Visualizar</h6>
                                            ";
        // line 59
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 59, $this->source); })()), "podeVisualizar", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                                                <span class=\"badge bg-success\">Permitido</span>
                                            ";
        } else {
            // line 62
            yield "                                                <span class=\"badge bg-secondary\">Negado</span>
                                            ";
        }
        // line 64
        yield "                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-3\">
                                    <div class=\"card\">
                                        <div class=\"card-body text-center\">
                                            <h6>Incluir</h6>
                                            ";
        // line 71
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 71, $this->source); })()), "podeIncluir", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "                                                <span class=\"badge bg-success\">Permitido</span>
                                            ";
        } else {
            // line 74
            yield "                                                <span class=\"badge bg-secondary\">Negado</span>
                                            ";
        }
        // line 76
        yield "                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-3\">
                                    <div class=\"card\">
                                        <div class=\"card-body text-center\">
                                            <h6>Editar</h6>
                                            ";
        // line 83
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 83, $this->source); })()), "podeEditar", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "                                                <span class=\"badge bg-success\">Permitido</span>
                                            ";
        } else {
            // line 86
            yield "                                                <span class=\"badge bg-secondary\">Negado</span>
                                            ";
        }
        // line 88
        yield "                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-3\">
                                    <div class=\"card\">
                                        <div class=\"card-body text-center\">
                                            <h6>Excluir</h6>
                                            ";
        // line 95
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 95, $this->source); })()), "podeExcluir", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "                                                <span class=\"badge bg-success\">Permitido</span>
                                            ";
        } else {
            // line 98
            yield "                                                <span class=\"badge bg-secondary\">Negado</span>
                                            ";
        }
        // line 100
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row mt-4\">
                        <div class=\"col-md-12\">
                            <h5>Informações do Sistema</h5>
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th>Data Criação:</th>
                                    <td>";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 113, $this->source); })()), "dataCriacao", [], "any", false, false, false, 113), "d/m/Y H:i:s"), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Última Atualização:</th>
                                    <td>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 117, $this->source); })()), "dataAtualizacao", [], "any", false, false, false, 117), "d/m/Y H:i:s"), "html", null, true);
        yield "</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_permissao_index");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Voltar
                        </a>
                        <div>
                            <a href=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_permissao_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128)]), "html", null, true);
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
        return "admin/permissao/show.html.twig";
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
        return array (  279 => 128,  272 => 124,  262 => 117,  255 => 113,  240 => 100,  236 => 98,  232 => 96,  230 => 95,  221 => 88,  217 => 86,  213 => 84,  211 => 83,  202 => 76,  198 => 74,  194 => 72,  192 => 71,  183 => 64,  179 => 62,  175 => 60,  173 => 59,  156 => 45,  149 => 41,  142 => 37,  130 => 28,  123 => 24,  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Detalhes da Permissão{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3>Detalhes da Permissão</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h5>Informações do Usuário</h5>
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th>Nome:</th>
                                    <td><strong>{{ permissao.usuario.nome }}</strong></td>
                                </tr>
                                <tr>
                                    <th>E-mail:</th>
                                    <td>{{ permissao.usuario.email }}</td>
                                </tr>
                                <tr>
                                    <th>Usuário:</th>
                                    <td>{{ permissao.usuario.username }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class=\"col-md-6\">
                            <h5>Informações do Módulo</h5>
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th>Módulo:</th>
                                    <td><strong>{{ permissao.modulo.nome }}</strong></td>
                                </tr>
                                <tr>
                                    <th>Código:</th>
                                    <td><code>{{ permissao.modulo.codigo }}</code></td>
                                </tr>
                                <tr>
                                    <th>Descrição:</th>
                                    <td>{{ permissao.modulo.descricao }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class=\"row mt-4\">
                        <div class=\"col-md-12\">
                            <h5>Permissões</h5>
                            <div class=\"row\">
                                <div class=\"col-md-3\">
                                    <div class=\"card\">
                                        <div class=\"card-body text-center\">
                                            <h6>Visualizar</h6>
                                            {% if permissao.podeVisualizar %}
                                                <span class=\"badge bg-success\">Permitido</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">Negado</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-3\">
                                    <div class=\"card\">
                                        <div class=\"card-body text-center\">
                                            <h6>Incluir</h6>
                                            {% if permissao.podeIncluir %}
                                                <span class=\"badge bg-success\">Permitido</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">Negado</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-3\">
                                    <div class=\"card\">
                                        <div class=\"card-body text-center\">
                                            <h6>Editar</h6>
                                            {% if permissao.podeEditar %}
                                                <span class=\"badge bg-success\">Permitido</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">Negado</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-3\">
                                    <div class=\"card\">
                                        <div class=\"card-body text-center\">
                                            <h6>Excluir</h6>
                                            {% if permissao.podeExcluir %}
                                                <span class=\"badge bg-success\">Permitido</span>
                                            {% else %}
                                                <span class=\"badge bg-secondary\">Negado</span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row mt-4\">
                        <div class=\"col-md-12\">
                            <h5>Informações do Sistema</h5>
                            <table class=\"table table-borderless\">
                                <tr>
                                    <th>Data Criação:</th>
                                    <td>{{ permissao.dataCriacao|date('d/m/Y H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <th>Última Atualização:</th>
                                    <td>{{ permissao.dataAtualizacao|date('d/m/Y H:i:s') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"{{ path('admin_permissao_index') }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Voltar
                        </a>
                        <div>
                            <a href=\"{{ path('admin_permissao_edit', {'id': permissao.id}) }}\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit\"></i> Editar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "admin/permissao/show.html.twig", "/srv/http/CedeOnline/templates/admin/permissao/show.html.twig");
    }
}
