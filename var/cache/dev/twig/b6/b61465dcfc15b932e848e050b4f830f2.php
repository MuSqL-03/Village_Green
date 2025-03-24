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

/* main/index.html.twig */
class __TwigTemplate_87dcdd25d6a66a7e90db403e3969f9df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        /* Section Background */
        main {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Category Section Background Animation */
        .animated-section {
            animation: backgroundAnimation 10s infinite alternate ease-in-out;
            border-radius: 12px;
            padding: 20px;
            transition: all 0.5s ease-in-out;
        }

        /* Card Styling */
        .card {
            border-left: 4px solid #28a745;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 3s ease;
            overflow: hidden;
            background: #fff;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            background-color: #f8f9fa;
        }

        /* Image Container */
        .image-container {
            height: 220px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .category-image {
            max-height: 100%;
            width: auto;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .image-container:hover .category-image {
            transform: scale(1.1);
        }

        /* Product Wrapper */
        .product-wrapper {
            position: relative;
            border-left: 3px solid #28a745;
            border-right: 3px solid #007bff;
            border-bottom: 3px solid #ff5733;
            border-radius: 12px;
            background-color: #ffffff;
            padding: 15px;
            margin-bottom: 20px;
            transition: all 0.3s ease-in-out, background-color 3s ease;
        }

        .product-wrapper:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            background-color: #f1f1f1;
            transform: scale(1.05);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .image-container {
                height: 180px;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 98
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

        // line 99
        yield "    <section class=\"text-center\">
        <hr>
        <!-- Title Section -->
        <div class=\"col-12 mb-4\">
            <h1 class=\"display-4 text-primary fw-bold\">Bienvenue chez Village Green</h1>
            <p class=\"lead\">Découvrez notre incroyable sélection de produits</p>
        </div>
        <hr>

        <!-- Categories Section -->
        <div class=\"container\">
            <div class=\"row animated-section\">
                ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 111, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 112
            yield "                    <div class=\"col-md-4 mb-3\">
                        <div class=\"product-wrapper\">
                            <div class=\"card shadow-lg border-0\">
                                <div class=\"image-container overflow-hidden d-flex justify-content-center align-items-center\">
                                    <a href=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sous_categories", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            yield "\">
                                        <img class=\"card-img-top img-fluid category-image\" 
                                             src=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "photo", [], "any", false, false, false, 118))), "html", null, true);
            yield "\" 
                                             alt=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 119), "html", null, true);
            yield "\">
                                    </a>
                                </div>
                                <div class=\"card-body text-center\">
                                    <h5 class=\"card-title fw-bold\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "nom", [], "any", false, false, false, 123), "html", null, true);
            yield "</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
            // line 129
            if (((0 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 129) % 3) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 129))) {
                // line 130
                yield "                        </div><div class=\"row animated-section\"> <!-- Closes current row and starts a new one every 3 items -->
                    ";
            }
            // line 132
            yield "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
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
        return "main/index.html.twig";
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
        return array (  275 => 133,  261 => 132,  257 => 130,  255 => 129,  246 => 123,  239 => 119,  235 => 118,  230 => 116,  224 => 112,  207 => 111,  193 => 99,  180 => 98,  77 => 4,  64 => 3,  41 => 1,);
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

        /* Section Background */
        main {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Category Section Background Animation */
        .animated-section {
            animation: backgroundAnimation 10s infinite alternate ease-in-out;
            border-radius: 12px;
            padding: 20px;
            transition: all 0.5s ease-in-out;
        }

        /* Card Styling */
        .card {
            border-left: 4px solid #28a745;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 3s ease;
            overflow: hidden;
            background: #fff;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            background-color: #f8f9fa;
        }

        /* Image Container */
        .image-container {
            height: 220px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .category-image {
            max-height: 100%;
            width: auto;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .image-container:hover .category-image {
            transform: scale(1.1);
        }

        /* Product Wrapper */
        .product-wrapper {
            position: relative;
            border-left: 3px solid #28a745;
            border-right: 3px solid #007bff;
            border-bottom: 3px solid #ff5733;
            border-radius: 12px;
            background-color: #ffffff;
            padding: 15px;
            margin-bottom: 20px;
            transition: all 0.3s ease-in-out, background-color 3s ease;
        }

        .product-wrapper:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            background-color: #f1f1f1;
            transform: scale(1.05);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .image-container {
                height: 180px;
            }
        }
    </style>
{% endblock %}

{% block body %}
    <section class=\"text-center\">
        <hr>
        <!-- Title Section -->
        <div class=\"col-12 mb-4\">
            <h1 class=\"display-4 text-primary fw-bold\">Bienvenue chez Village Green</h1>
            <p class=\"lead\">Découvrez notre incroyable sélection de produits</p>
        </div>
        <hr>

        <!-- Categories Section -->
        <div class=\"container\">
            <div class=\"row animated-section\">
                {% for category in categories %}
                    <div class=\"col-md-4 mb-3\">
                        <div class=\"product-wrapper\">
                            <div class=\"card shadow-lg border-0\">
                                <div class=\"image-container overflow-hidden d-flex justify-content-center align-items-center\">
                                    <a href=\"{{ path('sous_categories', {id: category.id}) }}\">
                                        <img class=\"card-img-top img-fluid category-image\" 
                                             src=\"{{ asset('uploads/categories/' ~ category.photo) }}\" 
                                             alt=\"{{ category.nom }}\">
                                    </a>
                                </div>
                                <div class=\"card-body text-center\">
                                    <h5 class=\"card-title fw-bold\">{{ category.nom }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    {% if loop.index is divisible by(3) and not loop.last %}
                        </div><div class=\"row animated-section\"> <!-- Closes current row and starts a new one every 3 items -->
                    {% endif %}
                {% endfor %}
            </div>
        </div>
    </section>
{% endblock %}
", "main/index.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/main/index.html.twig");
    }
}
