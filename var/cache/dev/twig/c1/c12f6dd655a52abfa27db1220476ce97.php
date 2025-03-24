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

/* base.html.twig */
class __TwigTemplate_2961b42808b788879cf60a69902602c9 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'styles' => [$this, 'block_styles'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    ";
        // line 9
        yield "    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    
    ";
        // line 12
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">

    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('styles', $context, $blocks);
        // line 15
        yield "</head>
<body>


    ";
        // line 20
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    ";
        // line 22
        yield from $this->loadTemplate("_partials/_nav.html.twig", "base.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "
    <!-- Hero Section -->
    <section class=\"hero-section position-relative text-center\">
        <img src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/image1.jpg"), "html", null, true);
        yield "\" alt=\"Background Image\" class=\"img-fluid w-100\" style=\"height: 400px;\">
        
       <!-- Search Bar Inside Image -->
<div class=\"position-absolute top-50 start-50 translate-middle search-container\">
    <form method=\"get\" action=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_search");
        yield "\" class=\"search-form d-flex align-items-center\">
        <input class=\"form-control search-input\" type=\"search\" name=\"search\" placeholder=\"🔍 Search for products...\" aria-label=\"Search\">
        <button class=\"btn search-btn\" type=\"submit\">
            <i class=\"fas fa-search\">Search</i>
        </button>
    </form>
</div>




    </section>


<style>
    /* Search Bar Container */
    .search-container {
        width: 50%;
        max-width: 500px;
    }

    /* Search Form Styling */
    .search-form {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 30px;
        padding: 5px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
    }

    /* Input Styling */
    .search-input {
        border: none;
        border-radius: 30px;
        padding: 12px 20px;
        outline: none;
        width: 100%;
        font-size: 1rem;
        background: transparent;
    }

    .search-input:focus {
        box-shadow: none;
    }

    /* Search Button */
    .search-btn {
        background: linear-gradient(45deg, #ff7eb3, #ff758c);
        border: none;
        color: white;
        padding: 10px 15px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease-in-out;
    }

    .search-btn:hover {
        background: linear-gradient(45deg, #ff4e8b, #ff5f9e);
        transform: scale(1.1);
    }

    .search-btn i {
        font-size: 1.2rem;
    }
</style>
    <!-- FontAwesome Icons -->
<script src=\"https://kit.fontawesome.com/yourkitcode.js\" crossorigin=\"anonymous\"></script>
    ";
        // line 99
        yield from $this->loadTemplate("_partials/_flash.html.twig", "base.html.twig", 99)->unwrap()->yield($context);
        // line 100
        yield "

    <!-- Main Content Block -->
    <div class=\"container mt-4\">
        ";
        // line 104
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 105
        yield "    </div>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Mon Site";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 104
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  241 => 104,  219 => 14,  196 => 6,  181 => 105,  179 => 104,  173 => 100,  171 => 99,  99 => 30,  92 => 26,  87 => 23,  85 => 22,  81 => 20,  75 => 15,  73 => 14,  67 => 12,  63 => 9,  58 => 6,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Mon Site{% endblock %}</title>

    {# Bootstrap CSS #}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    
    {# Custom CSS #}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">

    {% block styles %}{% endblock %}
</head>
<body>


    {# Bootstrap JS (Optional, for dropdowns, modals, etc.) #}
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    {% include \"_partials/_nav.html.twig\" %}

    <!-- Hero Section -->
    <section class=\"hero-section position-relative text-center\">
        <img src=\"{{ asset('uploads/image1.jpg') }}\" alt=\"Background Image\" class=\"img-fluid w-100\" style=\"height: 400px;\">
        
       <!-- Search Bar Inside Image -->
<div class=\"position-absolute top-50 start-50 translate-middle search-container\">
    <form method=\"get\" action=\"{{ path('products_search') }}\" class=\"search-form d-flex align-items-center\">
        <input class=\"form-control search-input\" type=\"search\" name=\"search\" placeholder=\"🔍 Search for products...\" aria-label=\"Search\">
        <button class=\"btn search-btn\" type=\"submit\">
            <i class=\"fas fa-search\">Search</i>
        </button>
    </form>
</div>




    </section>


<style>
    /* Search Bar Container */
    .search-container {
        width: 50%;
        max-width: 500px;
    }

    /* Search Form Styling */
    .search-form {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 30px;
        padding: 5px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
    }

    /* Input Styling */
    .search-input {
        border: none;
        border-radius: 30px;
        padding: 12px 20px;
        outline: none;
        width: 100%;
        font-size: 1rem;
        background: transparent;
    }

    .search-input:focus {
        box-shadow: none;
    }

    /* Search Button */
    .search-btn {
        background: linear-gradient(45deg, #ff7eb3, #ff758c);
        border: none;
        color: white;
        padding: 10px 15px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease-in-out;
    }

    .search-btn:hover {
        background: linear-gradient(45deg, #ff4e8b, #ff5f9e);
        transform: scale(1.1);
    }

    .search-btn i {
        font-size: 1.2rem;
    }
</style>
    <!-- FontAwesome Icons -->
<script src=\"https://kit.fontawesome.com/yourkitcode.js\" crossorigin=\"anonymous\"></script>
    {% include \"_partials/_flash.html.twig\" %}


    <!-- Main Content Block -->
    <div class=\"container mt-4\">
        {% block body %}{% endblock %}
    </div>

</body>
</html>
", "base.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/base.html.twig");
    }
}
