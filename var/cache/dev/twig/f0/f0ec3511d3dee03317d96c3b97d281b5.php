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

/* security/login.html.twig */
class __TwigTemplate_8c2b12568dd0a571172f3afbea4fea3d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Connexion";
        
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
        yield "<section class=\"vh-100\">
    <div class=\"container py-5 h-100\">
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
            <div class=\"col-xl-10\">
                <div class=\"card shadow-lg border-0\">
                    <div class=\"row g-0\">
                        <!-- Image à gauche (masquée sur mobile) -->
                        <div class=\"col-md-6 d-none d-md-block\">
                            <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image4.jpg"), "html", null, true);
        yield "\"
                                alt=\"login form\" class=\"img-fluid\"
                                style=\"border-radius: 1rem 0 0 1rem; height: 100%; object-fit: cover;\" />
                        </div>

                        <!-- Formulaire de connexion -->
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body p-4 p-lg-5 text-center\">
                                <h3 class=\"fw-bold mb-4\">Se connecter</h3>

                                ";
        // line 24
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })())) {
            // line 25
            yield "                                    <div class=\"alert alert-danger\">
                                        ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageKey", [], "any", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageData", [], "any", false, false, false, 26), "security"), "html", null, true);
            yield "
                                    </div>
                                ";
        }
        // line 29
        yield "
                                ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
            // line 31
            yield "                                    <div class=\"alert alert-info\">
                                        Vous êtes connecté(e) comme <strong>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "userIdentifier", [], "any", false, false, false, 32), "html", null, true);
            yield "</strong>.
                                        <a href=\"";
            // line 33
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"text-decoration-none\">Me déconnecter</a>
                                    </div>
                                ";
        }
        // line 36
        yield "
                                <form method=\"post\">
                                    <div class=\"mb-3\">
                                        <input type=\"email\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 39, $this->source); })()), "html", null, true);
        yield "\" name=\"email\"
                                            class=\"form-control rounded-pill\" placeholder=\"Email\" required autofocus>
                                    </div>
                                    <div class=\"mb-3\">
                                        <input type=\"password\" name=\"password\"
                                            class=\"form-control rounded-pill\" placeholder=\"Mot de passe\" required>
                                    </div>

                                    <input type=\"hidden\" name=\"_csrf_token\"
                                        value=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                                    <button class=\"btn btn-primary w-100 rounded-pill py-2 mt-2\" type=\"submit\">
                                        Me connecter
                                    </button>

                                    <p class=\"mt-3 text-muted\">
                                        Pas encore de compte ? 
                                        <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-decoration-none\">Inscrivez-vous</a>
                                    </p>

                                </form>
                            </div>
                        </div> <!-- Fin Formulaire -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Effet de fond avec gradient */
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

.card {
    border-radius: 1rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

.form-control {
    border-radius: 30px;
    padding: 10px;
}

.btn-primary {
    border-radius: 30px;
    background: linear-gradient(135deg, #9A616D, #6D5B8D);
    border: none;
    transition: 0.3s;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #6D5B8D, #9A616D);
}

.text-muted a {
    color: #6D5B8D;
    text-decoration: none;
    transition: 0.3s;
}

.text-muted a:hover {
    color: #9A616D;
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
        return "security/login.html.twig";
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
        return array (  180 => 56,  169 => 48,  157 => 39,  152 => 36,  146 => 33,  142 => 32,  139 => 31,  137 => 30,  134 => 29,  128 => 26,  125 => 25,  123 => 24,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
<section class=\"vh-100\">
    <div class=\"container py-5 h-100\">
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
            <div class=\"col-xl-10\">
                <div class=\"card shadow-lg border-0\">
                    <div class=\"row g-0\">
                        <!-- Image à gauche (masquée sur mobile) -->
                        <div class=\"col-md-6 d-none d-md-block\">
                            <img src=\"{{ asset('uploads/image4.jpg') }}\"
                                alt=\"login form\" class=\"img-fluid\"
                                style=\"border-radius: 1rem 0 0 1rem; height: 100%; object-fit: cover;\" />
                        </div>

                        <!-- Formulaire de connexion -->
                        <div class=\"col-md-6 d-flex align-items-center\">
                            <div class=\"card-body p-4 p-lg-5 text-center\">
                                <h3 class=\"fw-bold mb-4\">Se connecter</h3>

                                {% if error %}
                                    <div class=\"alert alert-danger\">
                                        {{ error.messageKey|trans(error.messageData, 'security') }}
                                    </div>
                                {% endif %}

                                {% if app.user %}
                                    <div class=\"alert alert-info\">
                                        Vous êtes connecté(e) comme <strong>{{ app.user.userIdentifier }}</strong>.
                                        <a href=\"{{ path('app_logout') }}\" class=\"text-decoration-none\">Me déconnecter</a>
                                    </div>
                                {% endif %}

                                <form method=\"post\">
                                    <div class=\"mb-3\">
                                        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\"
                                            class=\"form-control rounded-pill\" placeholder=\"Email\" required autofocus>
                                    </div>
                                    <div class=\"mb-3\">
                                        <input type=\"password\" name=\"password\"
                                            class=\"form-control rounded-pill\" placeholder=\"Mot de passe\" required>
                                    </div>

                                    <input type=\"hidden\" name=\"_csrf_token\"
                                        value=\"{{ csrf_token('authenticate') }}\">

                                    <button class=\"btn btn-primary w-100 rounded-pill py-2 mt-2\" type=\"submit\">
                                        Me connecter
                                    </button>

                                    <p class=\"mt-3 text-muted\">
                                        Pas encore de compte ? 
                                        <a href=\"{{ path('app_register') }}\" class=\"text-decoration-none\">Inscrivez-vous</a>
                                    </p>

                                </form>
                            </div>
                        </div> <!-- Fin Formulaire -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Effet de fond avec gradient */
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

.card {
    border-radius: 1rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

.form-control {
    border-radius: 30px;
    padding: 10px;
}

.btn-primary {
    border-radius: 30px;
    background: linear-gradient(135deg, #9A616D, #6D5B8D);
    border: none;
    transition: 0.3s;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #6D5B8D, #9A616D);
}

.text-muted a {
    color: #6D5B8D;
    text-decoration: none;
    transition: 0.3s;
}

.text-muted a:hover {
    color: #9A616D;
}
</style>

{% endblock %}
", "security/login.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/security/login.html.twig");
    }
}
