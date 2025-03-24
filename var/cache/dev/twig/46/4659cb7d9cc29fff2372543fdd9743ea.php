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

/* registration/register.html.twig */
class __TwigTemplate_744e2bd024dceb8b839d97d3abe8d82b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
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
        yield "
<style>
/* Background Animation */
@keyframes backgroundAnimation {
0%   { background: linear-gradient(45deg, #141414, #ff9a9e); }  /* Soft Peach & Warm Pink */
25%  { background: linear-gradient(45deg, #273DB4, #fad0c4); }  /* Romantic Blush */
50%  { background: linear-gradient(45deg, #C50900, #a18cd1); }  /* Soft Lavender */
75%  { background: linear-gradient(45deg, #F95CA4, #ffdde1); }  /* Dreamy Pastels */
100% { background: linear-gradient(45deg, #ED7845, #ffebd2); }  /* Sunset Glow */
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

    // line 24
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

        // line 25
        yield "    
<section class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <h1>Inscription</h1>

            ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), 'form_start');
        yield "
                <fieldset class=\"mb-3\">
                    <legend>Mon Identité</legend>
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'row');
        yield "
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'row');
        yield "
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'row');
        yield "
                </fieldset>
                
                <fieldset class=\"mb-3\">
                    <legend>Mes Coordonnées</legend>
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "adresse", [], "any", false, false, false, 41), 'row');
        yield "
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "codepostal", [], "any", false, false, false, 42), 'row');
        yield "
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "ville", [], "any", false, false, false, 43), 'row');
        yield "
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "usertype", [], "any", false, false, false, 44), 'row');
        yield "
                     <!--Numero SIRET (hidden unless user is \"professionnel\") -->
                <div id=\"numeroSiretField\" style=\"display: none;\">
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "numeroSiret", [], "any", false, false, false, 47), 'row');
        yield "
                </div>
                </fieldset>    

                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "password", [], "any", false, false, false, 51), 'row');
        yield "

               

                <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>

                <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-secondary\">Me connecter</a>
                ";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    let usertypeField = document.querySelector('[name=\"registration_form[usertype]\"]');
    let numeroSiretField = document.getElementById('numeroSiretField');

    function toggleNumeroSiret() {
        console.log(\"toggle...\")
        let selection = usertypeField.options[usertypeField.value]
        console.dir(selection)
        if (selection && selection.text === 'Professionnel') {
            numeroSiretField.style.display = 'block';
        } else {
            numeroSiretField.style.display = 'none';
        }
    }

    // Run on page load
    toggleNumeroSiret();

    // Run when user changes selection
    usertypeField.addEventListener('change', toggleNumeroSiret);
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
        return "registration/register.html.twig";
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
        return array (  209 => 58,  205 => 57,  196 => 51,  189 => 47,  183 => 44,  179 => 43,  175 => 42,  171 => 41,  163 => 36,  159 => 35,  155 => 34,  149 => 31,  141 => 25,  128 => 24,  101 => 5,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}
    {% block styles %}

<style>
/* Background Animation */
@keyframes backgroundAnimation {
0%   { background: linear-gradient(45deg, #141414, #ff9a9e); }  /* Soft Peach & Warm Pink */
25%  { background: linear-gradient(45deg, #273DB4, #fad0c4); }  /* Romantic Blush */
50%  { background: linear-gradient(45deg, #C50900, #a18cd1); }  /* Soft Lavender */
75%  { background: linear-gradient(45deg, #F95CA4, #ffdde1); }  /* Dreamy Pastels */
100% { background: linear-gradient(45deg, #ED7845, #ffebd2); }  /* Sunset Glow */
}

body {
animation: backgroundAnimation 10s infinite alternate ease-in-out;

}
</style>
{% endblock %}


{% block body %}
    
<section class=\"container\">
    <div class=\"row\">
        <div class=\"col\">
            <h1>Inscription</h1>

            {{ form_start(registrationForm) }}
                <fieldset class=\"mb-3\">
                    <legend>Mon Identité</legend>
                    {{ form_row(registrationForm.nom) }}
                    {{ form_row(registrationForm.prenom) }}
                    {{ form_row(registrationForm.email) }}
                </fieldset>
                
                <fieldset class=\"mb-3\">
                    <legend>Mes Coordonnées</legend>
                    {{ form_row(registrationForm.adresse) }}
                    {{ form_row(registrationForm.codepostal) }}
                    {{ form_row(registrationForm.ville) }}
                    {{ form_row(registrationForm.usertype) }}
                     <!--Numero SIRET (hidden unless user is \"professionnel\") -->
                <div id=\"numeroSiretField\" style=\"display: none;\">
                    {{ form_row(registrationForm.numeroSiret) }}
                </div>
                </fieldset>    

                {{ form_row(registrationForm.password) }}

               

                <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>

                <a href=\"{{ path('app_login') }}\" class=\"btn btn-secondary\">Me connecter</a>
                {{ form_end(registrationForm) }}
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    let usertypeField = document.querySelector('[name=\"registration_form[usertype]\"]');
    let numeroSiretField = document.getElementById('numeroSiretField');

    function toggleNumeroSiret() {
        console.log(\"toggle...\")
        let selection = usertypeField.options[usertypeField.value]
        console.dir(selection)
        if (selection && selection.text === 'Professionnel') {
            numeroSiretField.style.display = 'block';
        } else {
            numeroSiretField.style.display = 'none';
        }
    }

    // Run on page load
    toggleNumeroSiret();

    // Run when user changes selection
    usertypeField.addEventListener('change', toggleNumeroSiret);
});
</script>


{% endblock %}
", "registration/register.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/registration/register.html.twig");
    }
}
