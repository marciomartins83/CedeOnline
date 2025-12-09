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

/* home/index.html.twig */
class __TwigTemplate_81970a4bc75230bf96c991598f6bfdf8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "CedeOnline - Sistema de Gestão";
        
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
        yield "<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-12 text-center\">
            <h1 class=\"display-4 mb-4\">Bem-vindo ao CedeOnline</h1>
            <p class=\"lead mb-5\">Sistema de Gestão Empresarial</p>
        </div>
    </div>
    
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Acesso ao Sistema</h5>
                    <p class=\"card-text\">Faça login para acessar o painel de controle</p>
                    <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-primary btn-lg\">Entrar no Sistema</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row mt-5\">
        <div class=\"col-md-4\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Gestão de Usuários</h5>
                    <p class=\"card-text\">Gerencie usuários, permissões e acessos ao sistema</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Relatórios</h5>
                    <p class=\"card-text\">Visualize relatórios e estatísticas em tempo real</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Configurações</h5>
                    <p class=\"card-text\">Configure parâmetros e preferências do sistema</p>
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
        return "home/index.html.twig";
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
        return array (  116 => 20,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CedeOnline - Sistema de Gestão{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-12 text-center\">
            <h1 class=\"display-4 mb-4\">Bem-vindo ao CedeOnline</h1>
            <p class=\"lead mb-5\">Sistema de Gestão Empresarial</p>
        </div>
    </div>
    
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Acesso ao Sistema</h5>
                    <p class=\"card-text\">Faça login para acessar o painel de controle</p>
                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary btn-lg\">Entrar no Sistema</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row mt-5\">
        <div class=\"col-md-4\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Gestão de Usuários</h5>
                    <p class=\"card-text\">Gerencie usuários, permissões e acessos ao sistema</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Relatórios</h5>
                    <p class=\"card-text\">Visualize relatórios e estatísticas em tempo real</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">Configurações</h5>
                    <p class=\"card-text\">Configure parâmetros e preferências do sistema</p>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "home/index.html.twig", "/srv/http/CedeOnline/templates/home/index.html.twig");
    }
}
