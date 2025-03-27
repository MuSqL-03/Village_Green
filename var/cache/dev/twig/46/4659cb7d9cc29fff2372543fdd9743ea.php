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
    0%   { background: linear-gradient(45deg, #141414, #ff9a9e); }  
    25%  { background: linear-gradient(45deg, #273DB4, #fad0c4); }  
    50%  { background: linear-gradient(45deg, #C50900, #a18cd1); }  
    75%  { background: linear-gradient(45deg, #F95CA4, #ffdde1); }  
    100% { background: linear-gradient(45deg, #ED7845, #ffebd2, #FFB48F); }  
}

body {
    animation: backgroundAnimation 10s infinite alternate ease-in-out;
    font-family: 'Arial', sans-serif;

}



/* Container Styling */
.registration-container {
    max-width: 1000px; 
    height: 950px;
    background:whitesmoke;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    overflow: hidden;
}

/* Image Styling */
.registration-image {
    object-fit: cover;
    width: 100%;
    height: 100%;
    border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
}

/* Form Styling */
.form-container {
    padding: 0;
    max-width: 450px;
    margin: auto;
}

.form-container h1 {
    font-size: 1.8rem;
    font-weight: bold;
}

.form-container fieldset {
    border: none;
    padding: 0;
    margin-bottom: 10px;
}

.form-container legend {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 10px;
}

/* Button Styling */
.btn-primary {
    background-color: #273DB4;
    border: none;
}

.btn-primary:hover {
    background-color: #1F2F8C;
}

.btn-outline-secondary:hover {
    background-color: #f8f9fa;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
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

        // line 85
        yield "    
    <section class=\"container d-flex justify-content-center align-items-center\">    
        <div class=\"row  py-5 h-100\">
        <div class=\"row registration-container py-2 h-100\"> 
                    <!-- Left side image -->
        <div class=\"col-md-6 d-none d-md-block p-0\">
            <img src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image7.jpg"), "html", null, true);
        yield "\" alt=\"Inscription Image\" class=\"registration-image\">
        </div>
                <!-- Right side form -->  
                 
            <div class=\"col-md-6 d-flex align-items-center\">
               <div class=\"form-container w-100\">
                 <h1 class=\"text-center mb-3\">Inscription</h1>

            ";
        // line 99
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 99, $this->source); })()), 'form_start');
        yield "
                <fieldset>
                    <legend>Mon Identité</legend>
                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), "nom", [], "any", false, false, false, 102), 'row');
        yield "
                    ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 103, $this->source); })()), "prenom", [], "any", false, false, false, 103), 'row');
        yield "
                    ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 104, $this->source); })()), "email", [], "any", false, false, false, 104), 'row');
        yield "
                </fieldset>
                
                <fieldset>
                    <legend>Mes Coordonnées</legend>
                    ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 109, $this->source); })()), "adresse", [], "any", false, false, false, 109), 'row');
        yield "
                    ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 110, $this->source); })()), "codepostal", [], "any", false, false, false, 110), 'row');
        yield "
                    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 111, $this->source); })()), "ville", [], "any", false, false, false, 111), 'row');
        yield "
                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 112, $this->source); })()), "usertype", [], "any", false, false, false, 112), 'row');
        yield "
                     <!--Numero SIRET (hidden unless user is \"professionnel\") -->
                <div id=\"numeroSiretField\" style=\"display: none;\">
                    ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 115, $this->source); })()), "numeroSiret", [], "any", false, false, false, 115), 'row');
        yield "
                </div>
                </fieldset>    

                ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 119, $this->source); })()), "password", [], "any", false, false, false, 119), 'row');
        yield "

               

                <div class=\"d-grid gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                        <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-outline-secondary\">Me connecter</a>
                </div>
                ";
        // line 127
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 127, $this->source); })()), 'form_end');
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
        return array (  281 => 127,  276 => 125,  267 => 119,  260 => 115,  254 => 112,  250 => 111,  246 => 110,  242 => 109,  234 => 104,  230 => 103,  226 => 102,  220 => 99,  209 => 91,  201 => 85,  188 => 84,  101 => 5,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}
    {% block styles %}

<style>
/* Background Animation */
@keyframes backgroundAnimation {
    0%   { background: linear-gradient(45deg, #141414, #ff9a9e); }  
    25%  { background: linear-gradient(45deg, #273DB4, #fad0c4); }  
    50%  { background: linear-gradient(45deg, #C50900, #a18cd1); }  
    75%  { background: linear-gradient(45deg, #F95CA4, #ffdde1); }  
    100% { background: linear-gradient(45deg, #ED7845, #ffebd2, #FFB48F); }  
}

body {
    animation: backgroundAnimation 10s infinite alternate ease-in-out;
    font-family: 'Arial', sans-serif;

}



/* Container Styling */
.registration-container {
    max-width: 1000px; 
    height: 950px;
    background:whitesmoke;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    overflow: hidden;
}

/* Image Styling */
.registration-image {
    object-fit: cover;
    width: 100%;
    height: 100%;
    border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
}

/* Form Styling */
.form-container {
    padding: 0;
    max-width: 450px;
    margin: auto;
}

.form-container h1 {
    font-size: 1.8rem;
    font-weight: bold;
}

.form-container fieldset {
    border: none;
    padding: 0;
    margin-bottom: 10px;
}

.form-container legend {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 10px;
}

/* Button Styling */
.btn-primary {
    background-color: #273DB4;
    border: none;
}

.btn-primary:hover {
    background-color: #1F2F8C;
}

.btn-outline-secondary:hover {
    background-color: #f8f9fa;
}
</style>
{% endblock %}


{% block body %}
    
    <section class=\"container d-flex justify-content-center align-items-center\">    
        <div class=\"row  py-5 h-100\">
        <div class=\"row registration-container py-2 h-100\"> 
                    <!-- Left side image -->
        <div class=\"col-md-6 d-none d-md-block p-0\">
            <img src=\"{{ asset('uploads/image7.jpg') }}\" alt=\"Inscription Image\" class=\"registration-image\">
        </div>
                <!-- Right side form -->  
                 
            <div class=\"col-md-6 d-flex align-items-center\">
               <div class=\"form-container w-100\">
                 <h1 class=\"text-center mb-3\">Inscription</h1>

            {{ form_start(registrationForm) }}
                <fieldset>
                    <legend>Mon Identité</legend>
                    {{ form_row(registrationForm.nom) }}
                    {{ form_row(registrationForm.prenom) }}
                    {{ form_row(registrationForm.email) }}
                </fieldset>
                
                <fieldset>
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

               

                <div class=\"d-grid gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                        <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-secondary\">Me connecter</a>
                </div>
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
