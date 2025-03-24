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

        yield "Administration";
        
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
        yield "    <aside class=\"custom-sidebar\">
    <h2 class=\"admin-title\">Administration</h2> <!-- Titre ajouté ici -->

    <div class=\"card-container\">
        ";
        // line 10
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMMERCIAL"))) {
            // line 11
            yield "            <article class=\"card\">
                <div class=\"card-header\">
                    Catégories
                </div>
                <div class=\"card-body\">
                    <p><a href=\"";
            // line 16
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
            yield "\">Liste des catégories</a></p>
                    <p><a href=\"\">Ajouter une catégorie</a></p>
                </div>
            </article>
            <article class=\"card\">
                <div class=\"card-header\">
                    Produits
                </div>
                <div class=\"card-body\">
                    <p><a href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_index");
            yield "\">Liste des produits</a></p>
                    <p><a href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_app_produits_new");
            yield "\">Ajouter un produit</a></p>
                </div>
            </article>
        ";
        }
        // line 30
        yield "
        ";
        // line 31
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT_PARTICULIER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT_PROFESSIONEL"))) {
            // line 32
            yield "            <article class=\"card\">
                <div class=\"card-header\">
                    Utilisateurs
                </div>
                <div class=\"card-body\">
                    <p><a href=\"";
            // line 37
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_index");
            yield "\">Liste des utilisateurs</a></p>
                </div>
            </article>
        ";
        }
        // line 41
        yield "    </div>
</aside>

<style>
    /* Conteneur principal */
    .custom-sidebar {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        align-items: center; /* Centrer le contenu */
    }

    /* Titre Administration */
    .admin-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
    }

    /* Container des cartes */
    .card-container {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* Style des cartes */
    .card {
        width: 250px;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    /* Style des en-têtes */
    .card-header {
        background-color: #007bff;
        color: white;
        font-weight: bold;
        padding: 10px;
    }

    /* Contenu de la carte */
    .card-body {
        padding: 10px;
        flex-grow: 1;
    }

    /* Style des liens */
    .card-body a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
        transition: color 0.3s ease-in-out;
    }

    /* Effet au survol */
    .card-body a:hover {
        text-decoration: underline;
        color: #0056b3;
    }
</style>

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
        return array (  157 => 41,  150 => 37,  143 => 32,  141 => 31,  138 => 30,  131 => 26,  127 => 25,  115 => 16,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Administration{% endblock %}

{% block body %}
    <aside class=\"custom-sidebar\">
    <h2 class=\"admin-title\">Administration</h2> <!-- Titre ajouté ici -->

    <div class=\"card-container\">
        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_COMMERCIAL') %}
            <article class=\"card\">
                <div class=\"card-header\">
                    Catégories
                </div>
                <div class=\"card-body\">
                    <p><a href=\"{{ path('admin_categories_index') }}\">Liste des catégories</a></p>
                    <p><a href=\"\">Ajouter une catégorie</a></p>
                </div>
            </article>
            <article class=\"card\">
                <div class=\"card-header\">
                    Produits
                </div>
                <div class=\"card-body\">
                    <p><a href=\"{{ path('admin_products_index') }}\">Liste des produits</a></p>
                    <p><a href=\"{{ path('admin_products_app_produits_new') }}\">Ajouter un produit</a></p>
                </div>
            </article>
        {% endif %}

        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_CLIENT_PARTICULIER') or is_granted('ROLE_CLIENT_PROFESSIONEL') %}
            <article class=\"card\">
                <div class=\"card-header\">
                    Utilisateurs
                </div>
                <div class=\"card-body\">
                    <p><a href=\"{{ path('app_users_index') }}\">Liste des utilisateurs</a></p>
                </div>
            </article>
        {% endif %}
    </div>
</aside>

<style>
    /* Conteneur principal */
    .custom-sidebar {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        align-items: center; /* Centrer le contenu */
    }

    /* Titre Administration */
    .admin-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 15px;
    }

    /* Container des cartes */
    .card-container {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        justify-content: center;
    }

    /* Style des cartes */
    .card {
        width: 250px;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    /* Style des en-têtes */
    .card-header {
        background-color: #007bff;
        color: white;
        font-weight: bold;
        padding: 10px;
    }

    /* Contenu de la carte */
    .card-body {
        padding: 10px;
        flex-grow: 1;
    }

    /* Style des liens */
    .card-body a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
        transition: color 0.3s ease-in-out;
    }

    /* Effet au survol */
    .card-body a:hover {
        text-decoration: underline;
        color: #0056b3;
    }
</style>

{% endblock %}", "admin/index.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/admin/index.html.twig");
    }
}
