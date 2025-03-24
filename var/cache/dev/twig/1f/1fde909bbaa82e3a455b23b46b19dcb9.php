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

/* products/index.html.twig */
class __TwigTemplate_7419ade811877de5ded83de69bc60b5d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/index.html.twig", 1);
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

        yield "Liste des Produits";
        
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
        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .product-card {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            max-width: 280px;
            text-align: center;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

      /*   .product-card img {
            width: 100%;
            max-width: 200px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            margin-bottom: 15px;
        } */

        .product-card h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .product-card p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 15px;
        }

        .btn-add-cart {
            display: inline-block;
            padding: 8px 16px;
            font-size: 0.9rem;
            font-weight: 600;
            color: #fff;
            background: #28a745;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .btn-add-cart:hover {
            background: #218838;
        }


        .product-wrapper {
    position: relative;
    border-left: 2px solid #28a745;  /* Green left vertical line */
    border-right: 2px solid #007bff; /* Blue right vertical line */
    border-bottom: 2px solid #ff5733; /* Orange bottom line */
    padding: 10px; /* Ensure spacing inside */
    margin-bottom: 15px; /* Space between rows */
    border-radius: 12px; /* Optional: Keep the rounded effect */
    background-color: #f8f9fa; /* Light gray background */
}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 94
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

        // line 95
        yield "    <div class=\"container py-4\">
        <h1 class=\"text-center mb-4\">Liste des Produits</h1>
        <div class=\"row justify-content-center\">
            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 98, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 99
            yield "                <div class=\"col-lg-3 col-md-4 col-sm-6 col-12 d-flex justify-content-center mb-4 product-wrapper\">
                    <div class=\"product-card\">
                        <img src=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "photo", [], "any", false, false, false, 101))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 101), "html", null, true);
            yield "\" class=\"img-fluid\">
                        <h3>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 102), "html", null, true);
            yield "</h3>
                        <p>💰";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 103) / 100), "html", null, true);
            yield " €</p>
                        <a href=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" class=\"btn-add-cart\">Ajouter au panier</a>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 109
        if (!$context['_iterated']) {
            // line 108
            yield "                <p class=\"text-center\">Aucun produit disponible pour le moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "        </div>
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
        return "products/index.html.twig";
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
        return array (  256 => 110,  249 => 108,  247 => 109,  239 => 104,  235 => 103,  231 => 102,  225 => 101,  221 => 99,  216 => 98,  211 => 95,  198 => 94,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Produits{% endblock %}

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
        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .product-card {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            max-width: 280px;
            text-align: center;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

      /*   .product-card img {
            width: 100%;
            max-width: 200px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            margin-bottom: 15px;
        } */

        .product-card h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .product-card p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 15px;
        }

        .btn-add-cart {
            display: inline-block;
            padding: 8px 16px;
            font-size: 0.9rem;
            font-weight: 600;
            color: #fff;
            background: #28a745;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s;
        }

        .btn-add-cart:hover {
            background: #218838;
        }


        .product-wrapper {
    position: relative;
    border-left: 2px solid #28a745;  /* Green left vertical line */
    border-right: 2px solid #007bff; /* Blue right vertical line */
    border-bottom: 2px solid #ff5733; /* Orange bottom line */
    padding: 10px; /* Ensure spacing inside */
    margin-bottom: 15px; /* Space between rows */
    border-radius: 12px; /* Optional: Keep the rounded effect */
    background-color: #f8f9fa; /* Light gray background */
}
    </style>
{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <h1 class=\"text-center mb-4\">Liste des Produits</h1>
        <div class=\"row justify-content-center\">
            {% for product in products %}
                <div class=\"col-lg-3 col-md-4 col-sm-6 col-12 d-flex justify-content-center mb-4 product-wrapper\">
                    <div class=\"product-card\">
                        <img src=\"{{ asset('uploads/Products/' ~ product.photo) }}\" alt=\"{{ product.nom }}\" class=\"img-fluid\">
                        <h3>{{ product.nom }}</h3>
                        <p>💰{{ product.prix / 100 }} €</p>
                        <a href=\"{{ path('cart_add', {id: product.id}) }}\" class=\"btn-add-cart\">Ajouter au panier</a>
                    </div>
                </div>
            {% else %}
                <p class=\"text-center\">Aucun produit disponible pour le moment.</p>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "products/index.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/products/index.html.twig");
    }
}
