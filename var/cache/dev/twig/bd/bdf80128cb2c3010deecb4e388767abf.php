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

/* categories/list.html.twig */
class __TwigTemplate_808f9d9235b306f272fbc90a0f112b5f extends Template
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
            'styles' => [$this, 'block_styles'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categories/list.html.twig", 1);
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

        // line 4
        yield "    Liste des produits de la catégorie ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <style>
        /* Background Animation */
        @keyframes backgroundAnimation {
            0%   { background: linear-gradient(45deg, #141414, #ff9a9e); }  /* Dark Gray & Warm Pink */
            25%  { background: linear-gradient(45deg, #273DB4, #fad0c4); }  /* Blue & Soft Blush */
            50%  { background: linear-gradient(45deg, #C50900, #a18cd1); }  /* Red & Lavender */
            75%  { background: linear-gradient(45deg, #F95CA4, #ffdde1); }  /* Hot Pink & Pastel Pink */
            100% { background: linear-gradient(45deg, #ED7845, #ffebd2); }  /* Orange & Soft Peach */
        }

        body {
            animation: backgroundAnimation 10s infinite alternate ease-in-out;
        }

        .category-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .category-card {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            max-width: 280px;
            text-align: center;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .category-card h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .category-card p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 15px;
        }

        .product-wrapper {
            position: relative;
            border-left: 2px solid #28a745;  /* Green left vertical line */
            border-right: 2px solid #007bff; /* Blue right vertical line */
            border-bottom: 2px solid #ff5733; /* Orange bottom line */
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 12px;
            background-color: #f8f9fa;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
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

        // line 70
        yield "    <section class=\"row text-center\">
            <hr>
            <h1>Liste des produits de la catégorie ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 72, $this->source); })()), "nom", [], "any", false, false, false, 72), "html", null, true);
        yield " </h1>
            <hr>
        <div class=\"category-container\">
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 76
            yield "            <div class=\"category-card product-wrapper\">
                        <div class=\"image-container overflow-hidden\">
                        <a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\">
                            <img class=\"card-img-top\" src=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "photo", [], "any", false, false, false, 79))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 80, $this->source); })()), "nom", [], "any", false, false, false, 80), "html", null, true);
            yield "\" style=\"width:100%\">
                        </a>
                        <div class=\"card-body text-center\">
                            <h2 class=\"card-title\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 83), "html", null, true);
            yield "</h2>
                        </div>    


                    </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "        </div>
    </section>
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
        return "categories/list.html.twig";
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
        return array (  233 => 90,  220 => 83,  214 => 80,  210 => 79,  206 => 78,  202 => 76,  198 => 75,  192 => 72,  188 => 70,  175 => 69,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Liste des produits de la catégorie {{ category.nom }}
{% endblock %}

{% block styles %}
    <style>
        /* Background Animation */
        @keyframes backgroundAnimation {
            0%   { background: linear-gradient(45deg, #141414, #ff9a9e); }  /* Dark Gray & Warm Pink */
            25%  { background: linear-gradient(45deg, #273DB4, #fad0c4); }  /* Blue & Soft Blush */
            50%  { background: linear-gradient(45deg, #C50900, #a18cd1); }  /* Red & Lavender */
            75%  { background: linear-gradient(45deg, #F95CA4, #ffdde1); }  /* Hot Pink & Pastel Pink */
            100% { background: linear-gradient(45deg, #ED7845, #ffebd2); }  /* Orange & Soft Peach */
        }

        body {
            animation: backgroundAnimation 10s infinite alternate ease-in-out;
        }

        .category-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .category-card {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            max-width: 280px;
            text-align: center;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .category-card h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .category-card p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 15px;
        }

        .product-wrapper {
            position: relative;
            border-left: 2px solid #28a745;  /* Green left vertical line */
            border-right: 2px solid #007bff; /* Blue right vertical line */
            border-bottom: 2px solid #ff5733; /* Orange bottom line */
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 12px;
            background-color: #f8f9fa;
        }
    </style>
{% endblock %}

{% block body %}
    <section class=\"row text-center\">
            <hr>
            <h1>Liste des produits de la catégorie {{ category.nom }} </h1>
            <hr>
        <div class=\"category-container\">
        {% for product in products %}
            <div class=\"category-card product-wrapper\">
                        <div class=\"image-container overflow-hidden\">
                        <a href=\"{{ path('products_details', {'slug': product.slug }) }}\">
                            <img class=\"card-img-top\" src=\"{{ asset('uploads/Products/' ~ product.photo) }}\" 
                                 alt=\"{{ category.nom }}\" style=\"width:100%\">
                        </a>
                        <div class=\"card-body text-center\">
                            <h2 class=\"card-title\">{{ product.nom }}</h2>
                        </div>    


                    </div>
            </div>
        {% endfor %}
        </div>
    </section>
{% endblock %}
", "categories/list.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/categories/list.html.twig");
    }
}
