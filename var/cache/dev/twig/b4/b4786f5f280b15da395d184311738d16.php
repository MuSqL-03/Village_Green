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

/* admin/index.html.twig */
class __TwigTemplate_bbc063aff9c9c8c3b8cf827e2b4fa276 extends Template
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
            'styles' => [$this, 'block_styles'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 3
        yield "    <style>
        /* Background Animation */
        @keyframes backgroundAnimation {
        0%   { background: linear-gradient(45deg, #141414, #ff9a9e); }  /* Soft Peach & Warm Pink */
        25%  { background: linear-gradient(45deg, #273DB4, #fad0c4); }  /* Romantic Blush */
        50%  { background: linear-gradient(45deg, #C50900, #a18cd1); }  /* Soft Lavender */
        75%  { background: linear-gradient(45deg, #F95CA4, #ffdde1); }  /* Dreamy Pastels */
        100% { background: linear-gradient(45deg, #ED7845, #ffebd2); } 
         /* Sunset Glow */
    }

        body {
            animation: backgroundAnimation 10s infinite alternate ease-in-out;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 20
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

        yield "Administration";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
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

        // line 23
        yield "    <aside class=\"container py-4\">
        <hr>
        <h2 class=\"text-center  fw-bold mb-4\">Administration</h2>
        <hr>

        <div class=\"row justify-content-center\">
            ";
        // line 29
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMMERCIAL"))) {
            // line 30
            yield "                <div class=\"col-md-4 mb-3\">
                    <div class=\"card shadow-sm border-0\">
                        <div class=\"card-header bg-primary text-white text-center fw-bold\">
                            Catégories
                        </div>
                        <div class=\"card-body text-center\">
                            <p><a href=\"";
            // line 36
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
            yield "\" class=\"btn btn-outline-primary w-100\">Liste des catégories</a></p>
                            <p><a href=\"#\" class=\"btn btn-outline-success w-100\">Ajouter une catégorie</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card shadow-sm border-0\">
                        <div class=\"card-header bg-primary text-white text-center fw-bold\">
                            Produits
                        </div>
                        <div class=\"card-body text-center\">
                            <p><a href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_index");
            yield "\" class=\"btn btn-outline-primary w-100\">Liste des produits</a></p>
                            <p><a href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_app_produits_new");
            yield "\" class=\"btn btn-outline-success w-100\">Ajouter un produit</a></p>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 53
        yield "
            ";
        // line 54
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT_PARTICULIER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT_PROFESSIONEL"))) {
            // line 55
            yield "                <div class=\"col-md-4 mb-3\">
                    <div class=\"card shadow-sm border-0\">
                        <div class=\"card-header bg-primary text-white text-center fw-bold\">
                            Utilisateurs
                        </div>
                        <div class=\"card-body text-center\">
                            <p><a href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
            yield "\" class=\"btn btn-outline-primary w-100\">Liste des utilisateurs</a></p>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 66
        yield "        </div>
        <hr>
    </aside>

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
        return "admin/index.html.twig";
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
        return array (  205 => 66,  197 => 61,  189 => 55,  187 => 54,  184 => 53,  176 => 48,  172 => 47,  158 => 36,  150 => 30,  148 => 29,  140 => 23,  127 => 22,  104 => 20,  78 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block styles %}
    <style>
        /* Background Animation */
        @keyframes backgroundAnimation {
        0%   { background: linear-gradient(45deg, #141414, #ff9a9e); }  /* Soft Peach & Warm Pink */
        25%  { background: linear-gradient(45deg, #273DB4, #fad0c4); }  /* Romantic Blush */
        50%  { background: linear-gradient(45deg, #C50900, #a18cd1); }  /* Soft Lavender */
        75%  { background: linear-gradient(45deg, #F95CA4, #ffdde1); }  /* Dreamy Pastels */
        100% { background: linear-gradient(45deg, #ED7845, #ffebd2); } 
         /* Sunset Glow */
    }

        body {
            animation: backgroundAnimation 10s infinite alternate ease-in-out;
        }
    </style>
{% endblock %}

{% block title %}Administration{% endblock %}

{% block body %}
    <aside class=\"container py-4\">
        <hr>
        <h2 class=\"text-center  fw-bold mb-4\">Administration</h2>
        <hr>

        <div class=\"row justify-content-center\">
            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_COMMERCIAL') %}
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card shadow-sm border-0\">
                        <div class=\"card-header bg-primary text-white text-center fw-bold\">
                            Catégories
                        </div>
                        <div class=\"card-body text-center\">
                            <p><a href=\"{{ path('admin_categories_index') }}\" class=\"btn btn-outline-primary w-100\">Liste des catégories</a></p>
                            <p><a href=\"#\" class=\"btn btn-outline-success w-100\">Ajouter une catégorie</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card shadow-sm border-0\">
                        <div class=\"card-header bg-primary text-white text-center fw-bold\">
                            Produits
                        </div>
                        <div class=\"card-body text-center\">
                            <p><a href=\"{{ path('admin_products_index') }}\" class=\"btn btn-outline-primary w-100\">Liste des produits</a></p>
                            <p><a href=\"{{ path('admin_products_app_produits_new') }}\" class=\"btn btn-outline-success w-100\">Ajouter un produit</a></p>
                        </div>
                    </div>
                </div>
            {% endif %}

            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CLIENT_PARTICULIER') or is_granted('ROLE_CLIENT_PROFESSIONEL') %}
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card shadow-sm border-0\">
                        <div class=\"card-header bg-primary text-white text-center fw-bold\">
                            Utilisateurs
                        </div>
                        <div class=\"card-body text-center\">
                            <p><a href=\"{{ path('app_users_index') }}\" class=\"btn btn-outline-primary w-100\">Liste des utilisateurs</a></p>
                        </div>
                    </div>
                </div>
            {% endif %}
        </div>
        <hr>
    </aside>

{% endblock %}
", "admin/index.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/admin/index.html.twig");
    }
}
