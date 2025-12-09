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

/* admin/permissao/usuario.html.twig */
class __TwigTemplate_ad9a47ea2ce275a4c0a709fb451e3b69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/permissao/usuario.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/permissao/usuario.html.twig"));

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

        yield "Permissões do Usuário - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 3, $this->source); })()), "nome", [], "any", false, false, false, 3), "html", null, true);
        
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
                <div class=\"card-header\">
                    <h3>Permissões do Usuário: ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 11, $this->source); })()), "nome", [], "any", false, false, false, 11), "html", null, true);
        yield "</h3>
                    <p class=\"text-muted mb-0\">E-mail: ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), "html", null, true);
        yield " | Usuário: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 12, $this->source); })()), "username", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
                </div>
                <div class=\"card-body\">
                    <form method=\"post\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Módulo</th>
                                        <th>Descrição</th>
                                        <th class=\"text-center\">Visualizar</th>
                                        <th class=\"text-center\">Incluir</th>
                                        <th class=\"text-center\">Editar</th>
                                        <th class=\"text-center\">Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["modulos"]) || array_key_exists("modulos", $context) ? $context["modulos"] : (function () { throw new RuntimeError('Variable "modulos" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
            // line 30
            yield "                                        ";
            $context["permissao"] = null;
            // line 31
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["permissoes"]) || array_key_exists("permissoes", $context) ? $context["permissoes"] : (function () { throw new RuntimeError('Variable "permissoes" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 32
                yield "                                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "modulo", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32) == CoreExtension::getAttribute($this->env, $this->source, $context["modulo"], "id", [], "any", false, false, false, 32))) {
                    // line 33
                    yield "                                                ";
                    $context["permissao"] = $context["p"];
                    // line 34
                    yield "                                            ";
                }
                // line 35
                yield "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "                                        
                                        <tr>
                                            <td><strong>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modulo"], "nome", [], "any", false, false, false, 38), "html", null, true);
            yield "</strong></td>
                                            <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modulo"], "descricao", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                                            <td class=\"text-center\">
                                                <div class=\"form-check d-flex justify-content-center\">
                                                    <input type=\"checkbox\" class=\"form-check-input\" 
                                                           name=\"visualizar_";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modulo"], "id", [], "any", false, false, false, 43), "html", null, true);
            yield "\" 
                                                           ";
            // line 44
            if (((isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 44, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 44, $this->source); })()), "podeVisualizar", [], "any", false, false, false, 44))) {
                yield "checked";
            }
            yield ">
                                                </div>
                                            </td>
                                            <td class=\"text-center\">
                                                <div class=\"form-check d-flex justify-content-center\">
                                                    <input type=\"checkbox\" class=\"form-check-input\" 
                                                           name=\"incluir_";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modulo"], "id", [], "any", false, false, false, 50), "html", null, true);
            yield "\" 
                                                           ";
            // line 51
            if (((isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 51, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 51, $this->source); })()), "podeIncluir", [], "any", false, false, false, 51))) {
                yield "checked";
            }
            yield ">
                                                </div>
                                            </td>
                                            <td class=\"text-center\">
                                                <div class=\"form-check d-flex justify-content-center\">
                                                    <input type=\"checkbox\" class=\"form-check-input\" 
                                                           name=\"editar_";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modulo"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "\" 
                                                           ";
            // line 58
            if (((isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 58, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 58, $this->source); })()), "podeEditar", [], "any", false, false, false, 58))) {
                yield "checked";
            }
            yield ">
                                                </div>
                                            </td>
                                            <td class=\"text-center\">
                                                <div class=\"form-check d-flex justify-content-center\">
                                                    <input type=\"checkbox\" class=\"form-check-input\" 
                                                           name=\"excluir_";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modulo"], "id", [], "any", false, false, false, 64), "html", null, true);
            yield "\" 
                                                           ";
            // line 65
            if (((isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 65, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissao"]) || array_key_exists("permissao", $context) ? $context["permissao"] : (function () { throw new RuntimeError('Variable "permissao" does not exist.', 65, $this->source); })()), "podeExcluir", [], "any", false, false, false, 65))) {
                yield "checked";
            }
            yield ">
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 69
        if (!$context['_iterated']) {
            // line 70
            yield "                                        <tr>
                                            <td colspan=\"6\" class=\"text-center\">Nenhum módulo encontrado</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['modulo'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "                                </tbody>
                            </table>
                        </div>
                        
                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-arrow-left\"></i> Voltar
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-save\"></i> Salvar Permissões
                            </button>
                        </div>
                    </form>
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
        return "admin/permissao/usuario.html.twig";
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
        return array (  255 => 79,  248 => 74,  239 => 70,  237 => 69,  226 => 65,  222 => 64,  211 => 58,  207 => 57,  196 => 51,  192 => 50,  181 => 44,  177 => 43,  170 => 39,  166 => 38,  162 => 36,  156 => 35,  153 => 34,  150 => 33,  147 => 32,  142 => 31,  139 => 30,  134 => 29,  112 => 12,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Permissões do Usuário - {{ usuario.nome }}{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3>Permissões do Usuário: {{ usuario.nome }}</h3>
                    <p class=\"text-muted mb-0\">E-mail: {{ usuario.email }} | Usuário: {{ usuario.username }}</p>
                </div>
                <div class=\"card-body\">
                    <form method=\"post\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Módulo</th>
                                        <th>Descrição</th>
                                        <th class=\"text-center\">Visualizar</th>
                                        <th class=\"text-center\">Incluir</th>
                                        <th class=\"text-center\">Editar</th>
                                        <th class=\"text-center\">Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for modulo in modulos %}
                                        {% set permissao = null %}
                                        {% for p in permissoes %}
                                            {% if p.modulo.id == modulo.id %}
                                                {% set permissao = p %}
                                            {% endif %}
                                        {% endfor %}
                                        
                                        <tr>
                                            <td><strong>{{ modulo.nome }}</strong></td>
                                            <td>{{ modulo.descricao }}</td>
                                            <td class=\"text-center\">
                                                <div class=\"form-check d-flex justify-content-center\">
                                                    <input type=\"checkbox\" class=\"form-check-input\" 
                                                           name=\"visualizar_{{ modulo.id }}\" 
                                                           {% if permissao and permissao.podeVisualizar %}checked{% endif %}>
                                                </div>
                                            </td>
                                            <td class=\"text-center\">
                                                <div class=\"form-check d-flex justify-content-center\">
                                                    <input type=\"checkbox\" class=\"form-check-input\" 
                                                           name=\"incluir_{{ modulo.id }}\" 
                                                           {% if permissao and permissao.podeIncluir %}checked{% endif %}>
                                                </div>
                                            </td>
                                            <td class=\"text-center\">
                                                <div class=\"form-check d-flex justify-content-center\">
                                                    <input type=\"checkbox\" class=\"form-check-input\" 
                                                           name=\"editar_{{ modulo.id }}\" 
                                                           {% if permissao and permissao.podeEditar %}checked{% endif %}>
                                                </div>
                                            </td>
                                            <td class=\"text-center\">
                                                <div class=\"form-check d-flex justify-content-center\">
                                                    <input type=\"checkbox\" class=\"form-check-input\" 
                                                           name=\"excluir_{{ modulo.id }}\" 
                                                           {% if permissao and permissao.podeExcluir %}checked{% endif %}>
                                                </div>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"6\" class=\"text-center\">Nenhum módulo encontrado</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                        
                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"{{ path('admin_user_index') }}\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-arrow-left\"></i> Voltar
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-save\"></i> Salvar Permissões
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "admin/permissao/usuario.html.twig", "/srv/http/CedeOnline/templates/admin/permissao/usuario.html.twig");
    }
}
