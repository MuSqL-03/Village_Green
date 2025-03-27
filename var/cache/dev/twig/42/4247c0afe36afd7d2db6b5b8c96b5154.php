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

/* cart/checkout.html.twig */
class __TwigTemplate_0208a8c096e9ddd278427bc6f791980b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/checkout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/checkout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/checkout.html.twig", 1);
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

        yield "Finaliser la commande";
        
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
        /* Centered Container */
        .checkout-container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Form Labels */
        .form-label {
            font-weight: bold;
        }

        /* Input Fields */
        .form-control {
            border-radius: 8px;
            padding: 10px;
            border: 1px solid #ddd;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        /* Stripe Payment Button */
        .btn-checkout {
            display: block;
            width: 100%;
            padding: 12px;
            font-size: 1.1rem;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .btn-checkout:hover {
            background: linear-gradient(45deg, #0056b3, #003f7f);
            transform: scale(1.02);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .checkout-container {
                padding: 20px;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
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

        // line 78
        yield "    <div class=\"container\">
        <div class=\"checkout-container\">
            <h1 class=\"text-center text-primary\">🛒 Finaliser la commande</h1>
            <p class=\"text-center text-muted\">Veuillez remplir les informations ci-dessous pour procéder au paiement.</p>

            <form id=\"checkout-form\">
                <div class=\"mb-3\">
                    <label for=\"adresse_facture\" class=\"form-label\">🏠 Adresse de facturation</label>
                    <input type=\"text\" id=\"adresse_facture\" name=\"adresse_facture\" class=\"form-control\" required placeholder=\"Entrez votre adresse\">
                </div>

                <div class=\"mb-3\">
                    <label for=\"adresse_livraison\" class=\"form-label\">🚚 Adresse de livraison</label>
                    <input type=\"text\" id=\"adresse_livraison\" name=\"adresse_livraison\" class=\"form-control\" required placeholder=\"Entrez votre adresse de livraison\">
                </div>

                ";
        // line 94
        if (( !(null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })())) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "numeroSiret", [], "any", false, false, false, 94)))) {
            // line 95
            yield "                    <div class=\"mb-3\">
                        <label for=\"numero_siret\" class=\"form-label\">🏢 Numéro SIRET</label>
                        <input type=\"text\" id=\"numero_siret\" name=\"numero_siret\" class=\"form-control\" value=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "numeroSiret", [], "any", false, false, false, 97), "html", null, true);
            yield "\" readonly>
                    </div>
                ";
        }
        // line 100
        yield "
                <button type=\"button\" id=\"checkout-button\" class=\"btn-checkout\">💳 Payer avec Stripe</button>
            </form>
        </div>
    </div>

    <!-- Stripe Integration -->
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        document.getElementById(\"checkout-button\").addEventListener(\"click\", function () {
            fetch(\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_stripe_checkout");
        yield "\", { method: \"POST\" }) 
                .then(response => response.json())
                .then(session => {
                    if (session.id) {
                        var stripe = Stripe(\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripePublicKey"]) || array_key_exists("stripePublicKey", $context) ? $context["stripePublicKey"] : (function () { throw new RuntimeError('Variable "stripePublicKey" does not exist.', 114, $this->source); })()), "html", null, true);
        yield "\"); // ✅ Ensure stripePublicKey is correctly passed from the controller
                        stripe.redirectToCheckout({ sessionId: session.id });
                    } else {
                        alert(\"❌ Erreur lors de la création de la session Stripe.\");
                    }
                })
                .catch(error => {
                    console.error(\"Erreur:\", error);
                    alert(\"🚨 Une erreur est survenue. Veuillez réessayer.\");
                });
        });
    </script>
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
        return "cart/checkout.html.twig";
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
        return array (  243 => 114,  236 => 110,  224 => 100,  218 => 97,  214 => 95,  212 => 94,  194 => 78,  181 => 77,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Finaliser la commande{% endblock %}

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
        /* Centered Container */
        .checkout-container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Form Labels */
        .form-label {
            font-weight: bold;
        }

        /* Input Fields */
        .form-control {
            border-radius: 8px;
            padding: 10px;
            border: 1px solid #ddd;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        /* Stripe Payment Button */
        .btn-checkout {
            display: block;
            width: 100%;
            padding: 12px;
            font-size: 1.1rem;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .btn-checkout:hover {
            background: linear-gradient(45deg, #0056b3, #003f7f);
            transform: scale(1.02);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .checkout-container {
                padding: 20px;
            }
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"checkout-container\">
            <h1 class=\"text-center text-primary\">🛒 Finaliser la commande</h1>
            <p class=\"text-center text-muted\">Veuillez remplir les informations ci-dessous pour procéder au paiement.</p>

            <form id=\"checkout-form\">
                <div class=\"mb-3\">
                    <label for=\"adresse_facture\" class=\"form-label\">🏠 Adresse de facturation</label>
                    <input type=\"text\" id=\"adresse_facture\" name=\"adresse_facture\" class=\"form-control\" required placeholder=\"Entrez votre adresse\">
                </div>

                <div class=\"mb-3\">
                    <label for=\"adresse_livraison\" class=\"form-label\">🚚 Adresse de livraison</label>
                    <input type=\"text\" id=\"adresse_livraison\" name=\"adresse_livraison\" class=\"form-control\" required placeholder=\"Entrez votre adresse de livraison\">
                </div>

                {% if user is not null and user.numeroSiret is not null %}
                    <div class=\"mb-3\">
                        <label for=\"numero_siret\" class=\"form-label\">🏢 Numéro SIRET</label>
                        <input type=\"text\" id=\"numero_siret\" name=\"numero_siret\" class=\"form-control\" value=\"{{ user.numeroSiret }}\" readonly>
                    </div>
                {% endif %}

                <button type=\"button\" id=\"checkout-button\" class=\"btn-checkout\">💳 Payer avec Stripe</button>
            </form>
        </div>
    </div>

    <!-- Stripe Integration -->
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        document.getElementById(\"checkout-button\").addEventListener(\"click\", function () {
            fetch(\"{{ path('cart_stripe_checkout') }}\", { method: \"POST\" }) 
                .then(response => response.json())
                .then(session => {
                    if (session.id) {
                        var stripe = Stripe(\"{{ stripePublicKey }}\"); // ✅ Ensure stripePublicKey is correctly passed from the controller
                        stripe.redirectToCheckout({ sessionId: session.id });
                    } else {
                        alert(\"❌ Erreur lors de la création de la session Stripe.\");
                    }
                })
                .catch(error => {
                    console.error(\"Erreur:\", error);
                    alert(\"🚨 Une erreur est survenue. Veuillez réessayer.\");
                });
        });
    </script>
{% endblock %}
", "cart/checkout.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/cart/checkout.html.twig");
    }
}
