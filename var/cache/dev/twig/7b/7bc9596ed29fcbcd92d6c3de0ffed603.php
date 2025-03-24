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

/* products/details.html.twig */
class __TwigTemplate_345d474106c00898ddf21a68d424d414 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/details.html.twig", 1);
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

        yield "Détails de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <style>
        /* Background Animation */
        @keyframes backgroundAnimation {
            0%   { background: linear-gradient(45deg, #141414, #ff9a9e); }
            25%  { background: linear-gradient(45deg, #273DB4, #fad0c4); }
            50%  { background: linear-gradient(45deg, #C50900, #a18cd1); }
            75%  { background: linear-gradient(45deg, #F95CA4, #ffdde1); }
            100% { background: linear-gradient(45deg, #ED7845, #ffebd2); }
        }

        body {
            animation: backgroundAnimation 10s infinite alternate ease-in-out;
            font-family: 'Arial', sans-serif;
        }

        /* Product Section */
        .product-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            max-width: 1100px;
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        /* Product Image */
        .product-image-container {
            flex: 1;
            text-align: center;
        }

        .product-image {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease-in-out;
        }

        .product-image:hover {
            transform: scale(1.05);
        }

        /* Product Info */
        .product-info {
            flex: 1;
            padding: 20px;
        }

        .product-info h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #343a40;
            margin-bottom: 15px;
        }

        .product-info p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #28a745;
            margin-bottom: 20px;
        }

        /* Buttons */
        .btn-add-cart {
            display: inline-block;
            padding: 12px 24px;
            font-size: 1rem;
            font-weight: bold;
            color: #fff;
            background: #28a745;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s, transform 0.2s;
        }

        .btn-add-cart:hover {
            background: #218838;
            transform: scale(1.05);
        }

        .out-of-stock {
            font-size: 1.2rem;
            font-weight: bold;
            color: red;
            margin-top: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .product-container {
                flex-direction: column;
                text-align: center;
            }

            .product-info {
                padding: 20px 10px;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 125
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

        // line 126
        yield "    <section class=\"product-section\">
        <h1 class=\"text-primary fw-bold text-center\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 127, $this->source); })()), "nom", [], "any", false, false, false, 127), "html", null, true);
        yield "</h1>

        <div class=\"product-container\">
            <!-- Product Image -->
            <div class=\"product-image-container\">
                <img src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 132, $this->source); })()), "photo", [], "any", false, false, false, 132))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 132, $this->source); })()), "nom", [], "any", false, false, false, 132), "html", null, true);
        yield "\" class=\"product-image\">
            </div>

            <!-- Product Info -->
            <div class=\"product-info\">
                <h1>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 137, $this->source); })()), "nom", [], "any", false, false, false, 137), "html", null, true);
        yield "</h1>
                <p>";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 138, $this->source); })()), "description", [], "any", false, false, false, 138), "html", null, true);
        yield "</p>
                <p><strong>Catégorie :</strong> ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 139, $this->source); })()), "categories", [], "any", false, false, false, 139), "nom", [], "any", false, false, false, 139), "html", null, true);
        yield "</p>
                <p class=\"product-price\">Prix : 💰 ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 140, $this->source); })()), "prix", [], "any", false, false, false, 140) / 100), "html", null, true);
        yield " €</p>

                ";
        // line 142
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 142, $this->source); })()), "stock", [], "any", false, false, false, 142) > 0)) {
            // line 143
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 143, $this->source); })()), "id", [], "any", false, false, false, 143)]), "html", null, true);
            yield "\" class=\"btn-add-cart\">🛒 Ajouter au panier</a>
                ";
        } else {
            // line 145
            yield "                    <p class=\"out-of-stock\">⚠️ Temporairement en rupture de stock</p>
                ";
        }
        // line 147
        yield "            </div>
        </div>
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
        return "products/details.html.twig";
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
        return array (  293 => 147,  289 => 145,  283 => 143,  281 => 142,  276 => 140,  272 => 139,  268 => 138,  264 => 137,  254 => 132,  246 => 127,  243 => 126,  230 => 125,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de {{ product.nom }}{% endblock %}

{% block styles %}
    <style>
        /* Background Animation */
        @keyframes backgroundAnimation {
            0%   { background: linear-gradient(45deg, #141414, #ff9a9e); }
            25%  { background: linear-gradient(45deg, #273DB4, #fad0c4); }
            50%  { background: linear-gradient(45deg, #C50900, #a18cd1); }
            75%  { background: linear-gradient(45deg, #F95CA4, #ffdde1); }
            100% { background: linear-gradient(45deg, #ED7845, #ffebd2); }
        }

        body {
            animation: backgroundAnimation 10s infinite alternate ease-in-out;
            font-family: 'Arial', sans-serif;
        }

        /* Product Section */
        .product-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            max-width: 1100px;
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        /* Product Image */
        .product-image-container {
            flex: 1;
            text-align: center;
        }

        .product-image {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease-in-out;
        }

        .product-image:hover {
            transform: scale(1.05);
        }

        /* Product Info */
        .product-info {
            flex: 1;
            padding: 20px;
        }

        .product-info h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #343a40;
            margin-bottom: 15px;
        }

        .product-info p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #28a745;
            margin-bottom: 20px;
        }

        /* Buttons */
        .btn-add-cart {
            display: inline-block;
            padding: 12px 24px;
            font-size: 1rem;
            font-weight: bold;
            color: #fff;
            background: #28a745;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s, transform 0.2s;
        }

        .btn-add-cart:hover {
            background: #218838;
            transform: scale(1.05);
        }

        .out-of-stock {
            font-size: 1.2rem;
            font-weight: bold;
            color: red;
            margin-top: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .product-container {
                flex-direction: column;
                text-align: center;
            }

            .product-info {
                padding: 20px 10px;
            }
        }
    </style>
{% endblock %}

{% block body %}
    <section class=\"product-section\">
        <h1 class=\"text-primary fw-bold text-center\">{{ product.nom }}</h1>

        <div class=\"product-container\">
            <!-- Product Image -->
            <div class=\"product-image-container\">
                <img src=\"{{ asset('uploads/Products/' ~ product.photo) }}\" alt=\"{{ product.nom }}\" class=\"product-image\">
            </div>

            <!-- Product Info -->
            <div class=\"product-info\">
                <h1>{{ product.nom }}</h1>
                <p>{{ product.description }}</p>
                <p><strong>Catégorie :</strong> {{ product.categories.nom }}</p>
                <p class=\"product-price\">Prix : 💰 {{ product.prix / 100 }} €</p>

                {% if product.stock > 0 %}
                    <a href=\"{{ path('cart_add', {id: product.id}) }}\" class=\"btn-add-cart\">🛒 Ajouter au panier</a>
                {% else %}
                    <p class=\"out-of-stock\">⚠️ Temporairement en rupture de stock</p>
                {% endif %}
            </div>
        </div>
    </section>
{% endblock %}
", "products/details.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/products/details.html.twig");
    }
}
