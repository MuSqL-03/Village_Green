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

/* products/search_results.html.twig */
class __TwigTemplate_b927474920904e035e6dc142074b7c88 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/search_results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/search_results.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/search_results.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
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
        /* Page Styling */
        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Product List */
        .product-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        /* Product Card */
        .product-card {
            background: #fff;
            border-radius: 12px;
            padding: 15px;
            max-width: 280px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            text-align: center;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        /* Product Image */
        .product-card img {
            width: 100%;
            max-height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        /* Product Title */
        .product-card a {
            font-size: 1.2rem;
            font-weight: bold;
            color: #007bff;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
        }

        .product-card a:hover {
            text-decoration: underline;
        }

        /* Price Styling */
        .product-price {
            font-size: 1.1rem;
            font-weight: bold;
            color: #28a745;
        }

        /* No Results Message */
        .no-results {
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
            color: #dc3545;
            padding: 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
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

        // line 94
        yield "    <div class=\"container py-4\">
        <div class=\"search-container\">
            <h2>🔍 Résultats de la Recherche</h2>
        </div>

        ";
        // line 99
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 99, $this->source); })()))) {
            // line 100
            yield "            <p class=\"no-results\">Aucun produit ne correspond à votre recherche. 😞</p>
        ";
        } else {
            // line 102
            yield "            <ul class=\"product-list\">
                ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 103, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 104
                yield "                    <li class=\"product-card\">
                        <a href=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 105)]), "html", null, true);
                yield "\">
                            ";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 106), "html", null, true);
                yield "
                        </a>
                        <img src=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "photo", [], "any", false, false, false, 108))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 108), "html", null, true);
                yield "\">
                        <p>";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 109), "html", null, true);
                yield "</p>
                        <p class=\"product-price\">💰 ";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 110) / 100), "html", null, true);
                yield " €</p>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            yield "            </ul>
        ";
        }
        // line 115
        yield "    </div>
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
        return "products/search_results.html.twig";
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
        return array (  242 => 115,  238 => 113,  229 => 110,  225 => 109,  219 => 108,  214 => 106,  210 => 105,  207 => 104,  203 => 103,  200 => 102,  196 => 100,  194 => 99,  187 => 94,  174 => 93,  77 => 5,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/products/search_results.html.twig #}
{% extends 'base.html.twig' %}

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
        /* Page Styling */
        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Product List */
        .product-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        /* Product Card */
        .product-card {
            background: #fff;
            border-radius: 12px;
            padding: 15px;
            max-width: 280px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            text-align: center;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        /* Product Image */
        .product-card img {
            width: 100%;
            max-height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        /* Product Title */
        .product-card a {
            font-size: 1.2rem;
            font-weight: bold;
            color: #007bff;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
        }

        .product-card a:hover {
            text-decoration: underline;
        }

        /* Price Styling */
        .product-price {
            font-size: 1.1rem;
            font-weight: bold;
            color: #28a745;
        }

        /* No Results Message */
        .no-results {
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
            color: #dc3545;
            padding: 20px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <div class=\"search-container\">
            <h2>🔍 Résultats de la Recherche</h2>
        </div>

        {% if products is empty %}
            <p class=\"no-results\">Aucun produit ne correspond à votre recherche. 😞</p>
        {% else %}
            <ul class=\"product-list\">
                {% for product in products %}
                    <li class=\"product-card\">
                        <a href=\"{{ path('products_details', {'slug': product.slug}) }}\">
                            {{ product.nom }}
                        </a>
                        <img src=\"{{ asset('uploads/Products/' ~ product.photo) }}\" alt=\"{{ product.nom }}\">
                        <p>{{ product.description }}</p>
                        <p class=\"product-price\">💰 {{ product.prix / 100 }} €</p>
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
{% endblock %}
", "products/search_results.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/products/search_results.html.twig");
    }
}
