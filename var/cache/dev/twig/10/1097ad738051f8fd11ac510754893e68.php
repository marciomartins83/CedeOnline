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

/* admin/audit/index.html.twig */
class __TwigTemplate_3bc8c5ac0c34709fa913cead08a18c6f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/audit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/audit/index.html.twig"));

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

        yield "Logs de Auditoria";
        
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
                    <h3>Logs de Auditoria</h3>
                    <p class=\"text-muted mb-0\">Total de ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalLogs"]) || array_key_exists("totalLogs", $context) ? $context["totalLogs"] : (function () { throw new RuntimeError('Variable "totalLogs" does not exist.', 12, $this->source); })()), "html", null, true);
        yield " registros</p>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>Data/Hora</th>
                                    <th>Usuário</th>
                                    <th>Ação</th>
                                    <th>Entidade</th>
                                    <th>Módulo</th>
                                    <th>IP</th>
                                    <th>Detalhes</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 30
            yield "                                    <tr>
                                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "dataHora", [], "any", false, false, false, 31), "d/m/Y H:i:s"), "html", null, true);
            yield "</td>
                                        <td>
                                            ";
            // line 33
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["log"], "usuario", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "                                                <strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "usuario", [], "any", false, false, false, 34), "nome", [], "any", false, false, false, 34), "html", null, true);
                yield "</strong><br>
                                                <small class=\"text-muted\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "usuario", [], "any", false, false, false, 35), "email", [], "any", false, false, false, 35), "html", null, true);
                yield "</small>
                                            ";
            } else {
                // line 37
                yield "                                                <span class=\"text-muted\">Sistema</span>
                                            ";
            }
            // line 39
            yield "                                        </td>
                                        <td>
                                            ";
            // line 41
            $context["badgeClass"] = ["CREATE" => "bg-success", "UPDATE" => "bg-warning", "DELETE" => "bg-danger", "LOGIN" => "bg-info", "LOGOUT" => "bg-secondary", "PERMISSION_CHANGE" => "bg-primary"];
            // line 49
            yield "                                            <span class=\"badge ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["badgeClass"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "acao", [], "any", false, false, false, 49), [], "array", true, true, false, 49) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeClass"]) || array_key_exists("badgeClass", $context) ? $context["badgeClass"] : (function () { throw new RuntimeError('Variable "badgeClass" does not exist.', 49, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "acao", [], "any", false, false, false, 49), [], "array", false, false, false, 49)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeClass"]) || array_key_exists("badgeClass", $context) ? $context["badgeClass"] : (function () { throw new RuntimeError('Variable "badgeClass" does not exist.', 49, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "acao", [], "any", false, false, false, 49), [], "array", false, false, false, 49), "html", null, true)) : ("bg-secondary"));
            yield "\">
                                                ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "acao", [], "any", false, false, false, 50), "html", null, true);
            yield "
                                            </span>
                                        </td>
                                        <td>
                                            <strong>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "entidade", [], "any", false, false, false, 54), "html", null, true);
            yield "</strong>
                                            ";
            // line 55
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["log"], "entidadeId", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "                                                <br><small class=\"text-muted\">ID: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "entidadeId", [], "any", false, false, false, 56), "html", null, true);
                yield "</small>
                                            ";
            }
            // line 58
            yield "                                        </td>
                                        <td>
                                            ";
            // line 60
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["log"], "modulo", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 61
                yield "                                                <span class=\"badge bg-light text-dark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "modulo", [], "any", false, false, false, 61), "html", null, true);
                yield "</span>
                                            ";
            } else {
                // line 63
                yield "                                                <span class=\"text-muted\">-</span>
                                            ";
            }
            // line 65
            yield "                                        </td>
                                        <td>
                                            <small class=\"text-muted\">";
            // line 67
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "ip", [], "any", false, false, false, 67)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "ip", [], "any", false, false, false, 67), "html", null, true)) : ("-"));
            yield "</small>
                                        </td>
                                        <td>
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-info\" data-bs-toggle=\"modal\" data-bs-target=\"#logModal";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "id", [], "any", false, false, false, 70), "html", null, true);
            yield "\">
                                                <i class=\"fas fa-eye\"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Modal para detalhes -->
                                    <div class=\"modal fade\" id=\"logModal";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "id", [], "any", false, false, false, 77), "html", null, true);
            yield "\" tabindex=\"-1\">
                                        <div class=\"modal-dialog modal-lg\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\">Detalhes do Log</h5>
                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <h6>Informações Básicas</h6>
                                                            <table class=\"table table-sm\">
                                                                <tr><th>Data/Hora:</th><td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "dataHora", [], "any", false, false, false, 89), "d/m/Y H:i:s"), "html", null, true);
            yield "</td></tr>
                                                                <tr><th>Usuário:</th><td>";
            // line 90
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["log"], "usuario", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "usuario", [], "any", false, false, false, 90), "nome", [], "any", false, false, false, 90), "html", null, true)) : ("Sistema"));
            yield "</td></tr>
                                                                <tr><th>Ação:</th><td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "acao", [], "any", false, false, false, 91), "html", null, true);
            yield "</td></tr>
                                                                <tr><th>Entidade:</th><td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "entidade", [], "any", false, false, false, 92), "html", null, true);
            yield "</td></tr>
                                                                <tr><th>ID Entidade:</th><td>";
            // line 93
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "entidadeId", [], "any", false, false, false, 93)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "entidadeId", [], "any", false, false, false, 93), "html", null, true)) : ("-"));
            yield "</td></tr>
                                                                <tr><th>Módulo:</th><td>";
            // line 94
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "modulo", [], "any", false, false, false, 94)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "modulo", [], "any", false, false, false, 94), "html", null, true)) : ("-"));
            yield "</td></tr>
                                                                <tr><th>IP:</th><td>";
            // line 95
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "ip", [], "any", false, false, false, 95)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "ip", [], "any", false, false, false, 95), "html", null, true)) : ("-"));
            yield "</td></tr>
                                                            </table>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <h6>Dados</h6>
                                                            ";
            // line 100
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["log"], "dadosAnteriores", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 101
                yield "                                                                <h6 class=\"text-warning\">Dados Anteriores:</h6>
                                                                <pre class=\"bg-light p-2 rounded\"><code>";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "dadosAnteriores", [], "any", false, false, false, 102), (Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT") | Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_UNICODE"))), "html", null, true);
                yield "</code></pre>
                                                            ";
            }
            // line 104
            yield "                                                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["log"], "dadosNovos", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 105
                yield "                                                                <h6 class=\"text-success\">Dados Novos:</h6>
                                                                <pre class=\"bg-light p-2 rounded\"><code>";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "dadosNovos", [], "any", false, false, false, 106), (Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT") | Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_UNICODE"))), "html", null, true);
                yield "</code></pre>
                                                            ";
            }
            // line 108
            yield "                                                            ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["log"], "dadosAnteriores", [], "any", false, false, false, 108) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["log"], "dadosNovos", [], "any", false, false, false, 108))) {
                // line 109
                yield "                                                                <p class=\"text-muted\">Nenhum dado registrado</p>
                                                            ";
            }
            // line 111
            yield "                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
            $context['_iterated'] = true;
        }
        // line 117
        if (!$context['_iterated']) {
            // line 118
            yield "                                    <tr>
                                        <td colspan=\"7\" class=\"text-center\">Nenhum log encontrado</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['log'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                            </tbody>
                        </table>
                    </div>

                    ";
        // line 126
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 126, $this->source); })()) > 1)) {
            // line 127
            yield "                        <nav aria-label=\"Navegação de páginas\">
                            <ul class=\"pagination justify-content-center\">
                                ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 129, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 130
                yield "                                    <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 130, $this->source); })()))) ? ("active") : (""));
                yield "\">
                                        <a class=\"page-link\" href=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_audit_index", ["page" => $context["i"]]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            yield "                            </ul>
                        </nav>
                    ";
        }
        // line 137
        yield "                </div>
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
        return "admin/audit/index.html.twig";
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
        return array (  356 => 137,  351 => 134,  340 => 131,  335 => 130,  331 => 129,  327 => 127,  325 => 126,  319 => 122,  310 => 118,  308 => 117,  298 => 111,  294 => 109,  291 => 108,  286 => 106,  283 => 105,  280 => 104,  275 => 102,  272 => 101,  270 => 100,  262 => 95,  258 => 94,  254 => 93,  250 => 92,  246 => 91,  242 => 90,  238 => 89,  223 => 77,  213 => 70,  207 => 67,  203 => 65,  199 => 63,  193 => 61,  191 => 60,  187 => 58,  181 => 56,  179 => 55,  175 => 54,  168 => 50,  163 => 49,  161 => 41,  157 => 39,  153 => 37,  148 => 35,  143 => 34,  141 => 33,  136 => 31,  133 => 30,  128 => 29,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Logs de Auditoria{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3>Logs de Auditoria</h3>
                    <p class=\"text-muted mb-0\">Total de {{ totalLogs }} registros</p>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>Data/Hora</th>
                                    <th>Usuário</th>
                                    <th>Ação</th>
                                    <th>Entidade</th>
                                    <th>Módulo</th>
                                    <th>IP</th>
                                    <th>Detalhes</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for log in logs %}
                                    <tr>
                                        <td>{{ log.dataHora|date('d/m/Y H:i:s') }}</td>
                                        <td>
                                            {% if log.usuario %}
                                                <strong>{{ log.usuario.nome }}</strong><br>
                                                <small class=\"text-muted\">{{ log.usuario.email }}</small>
                                            {% else %}
                                                <span class=\"text-muted\">Sistema</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% set badgeClass = {
                                                'CREATE': 'bg-success',
                                                'UPDATE': 'bg-warning',
                                                'DELETE': 'bg-danger',
                                                'LOGIN': 'bg-info',
                                                'LOGOUT': 'bg-secondary',
                                                'PERMISSION_CHANGE': 'bg-primary'
                                            } %}
                                            <span class=\"badge {{ badgeClass[log.acao] ?? 'bg-secondary' }}\">
                                                {{ log.acao }}
                                            </span>
                                        </td>
                                        <td>
                                            <strong>{{ log.entidade }}</strong>
                                            {% if log.entidadeId %}
                                                <br><small class=\"text-muted\">ID: {{ log.entidadeId }}</small>
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if log.modulo %}
                                                <span class=\"badge bg-light text-dark\">{{ log.modulo }}</span>
                                            {% else %}
                                                <span class=\"text-muted\">-</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            <small class=\"text-muted\">{{ log.ip ?: '-' }}</small>
                                        </td>
                                        <td>
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-info\" data-bs-toggle=\"modal\" data-bs-target=\"#logModal{{ log.id }}\">
                                                <i class=\"fas fa-eye\"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Modal para detalhes -->
                                    <div class=\"modal fade\" id=\"logModal{{ log.id }}\" tabindex=\"-1\">
                                        <div class=\"modal-dialog modal-lg\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\">Detalhes do Log</h5>
                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <h6>Informações Básicas</h6>
                                                            <table class=\"table table-sm\">
                                                                <tr><th>Data/Hora:</th><td>{{ log.dataHora|date('d/m/Y H:i:s') }}</td></tr>
                                                                <tr><th>Usuário:</th><td>{{ log.usuario ? log.usuario.nome : 'Sistema' }}</td></tr>
                                                                <tr><th>Ação:</th><td>{{ log.acao }}</td></tr>
                                                                <tr><th>Entidade:</th><td>{{ log.entidade }}</td></tr>
                                                                <tr><th>ID Entidade:</th><td>{{ log.entidadeId ?: '-' }}</td></tr>
                                                                <tr><th>Módulo:</th><td>{{ log.modulo ?: '-' }}</td></tr>
                                                                <tr><th>IP:</th><td>{{ log.ip ?: '-' }}</td></tr>
                                                            </table>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <h6>Dados</h6>
                                                            {% if log.dadosAnteriores %}
                                                                <h6 class=\"text-warning\">Dados Anteriores:</h6>
                                                                <pre class=\"bg-light p-2 rounded\"><code>{{ log.dadosAnteriores|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_UNESCAPED_UNICODE')) }}</code></pre>
                                                            {% endif %}
                                                            {% if log.dadosNovos %}
                                                                <h6 class=\"text-success\">Dados Novos:</h6>
                                                                <pre class=\"bg-light p-2 rounded\"><code>{{ log.dadosNovos|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_UNESCAPED_UNICODE')) }}</code></pre>
                                                            {% endif %}
                                                            {% if not log.dadosAnteriores and not log.dadosNovos %}
                                                                <p class=\"text-muted\">Nenhum dado registrado</p>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% else %}
                                    <tr>
                                        <td colspan=\"7\" class=\"text-center\">Nenhum log encontrado</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    {% if totalPages > 1 %}
                        <nav aria-label=\"Navegação de páginas\">
                            <ul class=\"pagination justify-content-center\">
                                {% for i in 1..totalPages %}
                                    <li class=\"page-item {{ i == currentPage ? 'active' : '' }}\">
                                        <a class=\"page-link\" href=\"{{ path('admin_audit_index', {'page': i}) }}\">{{ i }}</a>
                                    </li>
                                {% endfor %}
                            </ul>
                        </nav>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "admin/audit/index.html.twig", "/srv/http/CedeOnline/templates/admin/audit/index.html.twig");
    }
}
