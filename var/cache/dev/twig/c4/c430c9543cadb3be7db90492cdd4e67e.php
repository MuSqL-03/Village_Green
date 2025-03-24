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

/* cart/index.html.twig */
class __TwigTemplate_9f5a1dc43b07f218afb78e622fb3f7e4 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
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
        /* Table Styling */
        .table th {
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        .table td {
            vertical-align: middle;
            text-align: center;
        }

        /* Product Image */
        .product-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 10px;
        }

        /* Action Buttons */
        .btn-cart {
            font-size: 0.9rem;
            padding: 5px 10px;
            margin: 2px;
        }

        /* Empty Cart Message */
        .empty-cart {
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
            color: #dc3545;
            padding: 20px;
        }

        /* Checkout Button */
        .checkout-btn {
            display: block;
            width: fit-content;
            margin: 20px auto;
            font-size: 1rem;
            font-weight: bold;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
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

        // line 67
        yield "    <main class=\"container py-4\">
        <section class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"text-center mb-4\">🛒 Votre Panier</h1>  
                <table class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 82, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 83
            yield "                            <tr>
                                <td class=\"d-flex align-items-center\">
                                    <img src=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 85), "photo", [], "any", false, false, false, 85))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 85), "nom", [], "any", false, false, false, 85), "html", null, true);
            yield "\" class=\"product-img\">
                                    ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 86), "nom", [], "any", false, false, false, 86), "html", null, true);
            yield "
                                </td>
                                <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 88), "prix", [], "any", false, false, false, 88) / 100), "html", null, true);
            yield " €</td>
                                <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 89), "html", null, true);
            yield "</td>
                                <td>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 90) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 90), "prix", [], "any", false, false, false, 90)) / 100), "html", null, true);
            yield " €</td>
                                <td>
                                    <a href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-cart\">+</a>
                                    <a href=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-cart\">-</a>
                                    <a href=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-cart\">🗑️</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 102
        if (!$context['_iterated']) {
            // line 98
            yield "                            
                            <tr>
                                <td colspan=\"5\" class=\"empty-cart\">Votre panier est vide 😞</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['element'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                    </tbody>
                    ";
        // line 104
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })())) > 0)) {
            // line 105
            yield "                        <tfoot>
                            <tr>
                                <td colspan=\"3\" class=\"fw-bold\">Total</td>
                                <td class=\"fw-bold\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 108, $this->source); })()) / 100), "html", null, true);
            yield " €</td>
                                <td>
                                    <a href=\"";
            // line 110
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_empty");
            yield "\" class=\"btn btn-danger\">🗑️ Vider</a>
                                </td>
                            </tr>
                        </tfoot>
                    ";
        }
        // line 115
        yield "                </table>    

                ";
        // line 117
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 117, $this->source); })())) > 0)) {
            // line 118
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_checkout");
            yield "\" class=\"btn btn-primary checkout-btn\">✅ Commander</a>
                ";
        }
        // line 120
        yield "            </div>
        </section>
    </main>
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
        return "cart/index.html.twig";
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
        return array (  274 => 120,  268 => 118,  266 => 117,  262 => 115,  254 => 110,  249 => 108,  244 => 105,  242 => 104,  239 => 103,  229 => 98,  227 => 102,  219 => 94,  215 => 93,  211 => 92,  206 => 90,  202 => 89,  198 => 88,  193 => 86,  187 => 85,  183 => 83,  178 => 82,  161 => 67,  148 => 66,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

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
        /* Table Styling */
        .table th {
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        .table td {
            vertical-align: middle;
            text-align: center;
        }

        /* Product Image */
        .product-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 10px;
        }

        /* Action Buttons */
        .btn-cart {
            font-size: 0.9rem;
            padding: 5px 10px;
            margin: 2px;
        }

        /* Empty Cart Message */
        .empty-cart {
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
            color: #dc3545;
            padding: 20px;
        }

        /* Checkout Button */
        .checkout-btn {
            display: block;
            width: fit-content;
            margin: 20px auto;
            font-size: 1rem;
            font-weight: bold;
        }
    </style>
{% endblock %}

{% block body %}
    <main class=\"container py-4\">
        <section class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"text-center mb-4\">🛒 Votre Panier</h1>  
                <table class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for element in data %}
                            <tr>
                                <td class=\"d-flex align-items-center\">
                                    <img src=\"{{ asset('uploads/Products/' ~ element.product.photo) }}\" alt=\"{{ element.product.nom }}\" class=\"product-img\">
                                    {{ element.product.nom }}
                                </td>
                                <td>{{ element.product.prix / 100 }} €</td>
                                <td>{{ element.quantite }}</td>
                                <td>{{ (element.quantite * element.product.prix) / 100 }} €</td>
                                <td>
                                    <a href=\"{{ path('cart_add', {id: element.product.id}) }}\" class=\"btn btn-success btn-cart\">+</a>
                                    <a href=\"{{ path('cart_remove', {id: element.product.id}) }}\" class=\"btn btn-warning btn-cart\">-</a>
                                    <a href=\"{{ path('cart_delete', {id: element.product.id}) }}\" class=\"btn btn-danger btn-cart\">🗑️</a>
                                </td>
                            </tr>
                        {% else %}
                            
                            <tr>
                                <td colspan=\"5\" class=\"empty-cart\">Votre panier est vide 😞</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                    {% if data|length > 0 %}
                        <tfoot>
                            <tr>
                                <td colspan=\"3\" class=\"fw-bold\">Total</td>
                                <td class=\"fw-bold\">{{ total / 100 }} €</td>
                                <td>
                                    <a href=\"{{ path('cart_empty') }}\" class=\"btn btn-danger\">🗑️ Vider</a>
                                </td>
                            </tr>
                        </tfoot>
                    {% endif %}
                </table>    

                {% if data|length > 0 %}
                    <a href=\"{{ path('cart_checkout') }}\" class=\"btn btn-primary checkout-btn\">✅ Commander</a>
                {% endif %}
            </div>
        </section>
    </main>
{% endblock %}
", "cart/index.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/cart/index.html.twig");
    }
}
