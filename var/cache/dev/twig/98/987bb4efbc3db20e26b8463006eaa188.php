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

/* _partials/_nav.html.twig */
class __TwigTemplate_b99e7b4b982a4a1c031e4d895392d656 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        // line 1
        yield "<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark shadow-lg py-3 fixed-top\">
    <div class=\"container\">
        <!-- Brand Name -->
        <a class=\"navbar-brand fw-bold text-gradient\" href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        yield "\">
            🛍️ Village Green
        </a>

        <!-- Navbar Toggler for Mobile -->
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" 
                aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Navbar Links -->
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        yield "\">🏠 Home</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        yield "\">📂 Categories</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_index");
        yield "\">🛍️ Products</a>
                </li>
            </ul>

            <!-- User Links -->
            <ul class=\"navbar-nav ms-auto align-items-center\">
                ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            yield "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-light fw-bold\" href=\"#\" id=\"userDropdown\" 
                           role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            👤 Account
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end\">
                            ";
            // line 38
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_COMMERCIAL") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT_PARTICULIER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT_PROFESSIONEL"))) {
                yield "                                <li><a class=\"dropdown-item text-warning\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                yield "\">⚙️ Admin</a></li>
                            ";
            }
            // line 40
            yield "                            <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_index");
            yield "\">👤 Profile</a></li>
                            <li><a class=\"dropdown-item text-danger logout-btn\" href=\"";
            // line 41
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">🚪 Logout</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 45
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link text-success fw-bold\" href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">📝 Sign Up</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-info fw-bold\" href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">🔑 Login</a>
                    </li>
                ";
        }
        // line 52
        yield "                
                <!-- Cart Link -->
                <li class=\"nav-item ms-3\">
                    <a class=\"nav-link fw-bold cart-link\" href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        yield "\">🛒 Panier</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Gradient Text Effect */
    .text-gradient {
        background: linear-gradient(45deg, #ff9a9e, #fad0c4, #a18cd1, #ffdde1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 1.7rem;
    }

    /* Navbar Styling */
    .navbar {
        background: linear-gradient(45deg, rgba(0,0,0,0.95), rgba(20,20,20,0.9));
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.6);
    }

    /* Navbar Links */
    .nav-link {
        transition: all 0.3s ease-in-out;
        font-size: 1.1rem;
        color: white !important;
    }

    .nav-link:hover {
        transform: scale(1.1);
        text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.8);
    }

    /* Cart Link Glow Effect */
    .cart-link {
        color: aqua !important;
        text-shadow: 0px 0px 10px rgba(0, 255, 255, 0.7);
        font-size: 1.3rem;
    }

    /* Logout Button Animation */
    .logout-btn {
        position: relative;
    }

    .logout-btn::after {
        content: \"\";
        position: absolute;
        bottom: -5px;
        left: 50%;
        width: 0%;
        height: 2px;
        background-color: red;
        transition: all 0.3s ease-in-out;
    }

    .logout-btn:hover::after {
        width: 100%;
        left: 0;
    }
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_partials/_nav.html.twig";
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
        return array (  141 => 55,  136 => 52,  130 => 49,  124 => 46,  121 => 45,  114 => 41,  109 => 40,  102 => 38,  94 => 32,  92 => 31,  83 => 25,  77 => 22,  71 => 19,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Navbar -->
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark shadow-lg py-3 fixed-top\">
    <div class=\"container\">
        <!-- Brand Name -->
        <a class=\"navbar-brand fw-bold text-gradient\" href=\"{{ path('main') }}\">
            🛍️ Village Green
        </a>

        <!-- Navbar Toggler for Mobile -->
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" 
                aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <!-- Navbar Links -->
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"{{ path('main') }}\">🏠 Home</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('main') }}\">📂 Categories</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('products_index') }}\">🛍️ Products</a>
                </li>
            </ul>

            <!-- User Links -->
            <ul class=\"navbar-nav ms-auto align-items-center\">
                {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle text-light fw-bold\" href=\"#\" id=\"userDropdown\" 
                           role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            👤 Account
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-end\">
                            {% if is_granted('ROLE_COMMERCIAL') or is_granted('ROLE_ADMIN') or is_granted('ROLE_CLIENT_PARTICULIER') or is_granted('ROLE_CLIENT_PROFESSIONEL') %}                                <li><a class=\"dropdown-item text-warning\" href=\"{{ path('admin_index') }}\">⚙️ Admin</a></li>
                            {% endif %}
                            <li><a class=\"dropdown-item\" href=\"{{ path('profile_index') }}\">👤 Profile</a></li>
                            <li><a class=\"dropdown-item text-danger logout-btn\" href=\"{{ path('app_logout') }}\">🚪 Logout</a></li>
                        </ul>
                    </li>
                {% else %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-success fw-bold\" href=\"{{ path('app_register') }}\">📝 Sign Up</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-info fw-bold\" href=\"{{ path('app_login') }}\">🔑 Login</a>
                    </li>
                {% endif %}
                
                <!-- Cart Link -->
                <li class=\"nav-item ms-3\">
                    <a class=\"nav-link fw-bold cart-link\" href=\"{{ path('cart_index') }}\">🛒 Panier</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Gradient Text Effect */
    .text-gradient {
        background: linear-gradient(45deg, #ff9a9e, #fad0c4, #a18cd1, #ffdde1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 1.7rem;
    }

    /* Navbar Styling */
    .navbar {
        background: linear-gradient(45deg, rgba(0,0,0,0.95), rgba(20,20,20,0.9));
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.6);
    }

    /* Navbar Links */
    .nav-link {
        transition: all 0.3s ease-in-out;
        font-size: 1.1rem;
        color: white !important;
    }

    .nav-link:hover {
        transform: scale(1.1);
        text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.8);
    }

    /* Cart Link Glow Effect */
    .cart-link {
        color: aqua !important;
        text-shadow: 0px 0px 10px rgba(0, 255, 255, 0.7);
        font-size: 1.3rem;
    }

    /* Logout Button Animation */
    .logout-btn {
        position: relative;
    }

    .logout-btn::after {
        content: \"\";
        position: absolute;
        bottom: -5px;
        left: 50%;
        width: 0%;
        height: 2px;
        background-color: red;
        transition: all 0.3s ease-in-out;
    }

    .logout-btn:hover::after {
        width: 100%;
        left: 0;
    }
</style>
", "_partials/_nav.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/_partials/_nav.html.twig");
    }
}
