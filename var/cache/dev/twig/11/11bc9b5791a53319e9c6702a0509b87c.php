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

/* admin/users/index.html.twig */
class __TwigTemplate_e3b3b478237258a3cdab35e7304fde0b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users/index.html.twig", 1);
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

        yield "Liste des utilisateurs";
        
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
        /* Page Background */
        body {
            background-color: #f4f4f4;
        }

        /* Container */
        .user-container {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Table Styling */
        .table {
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }

        .table th {
            background: #007bff;
            color: white;
            text-align: center;
        }

        .table td {
            text-align: center;
            vertical-align: middle;
        }

        /* Buttons */
        .btn-custom {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            font-size: 14px;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
        }

        .btn-view {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-edit {
            background-color: #ff9800;
            color: white;
            border: none;
        }

        .btn-add {
            background-color: #28a745;
            color: white;
            border: none;
            font-size: 16px;
            padding: 10px 18px;
        }

        .btn-custom:hover {
            opacity: 0.85;
            transform: translateY(-2px);
        }

        /* Icons */
        .icon {
            font-size: 16px;
        }

        /* Button Spacing */
        .btn-spacing {
            margin-right: 8px; /* Space between buttons */
        }

        /* Responsive Table */
        @media (max-width: 768px) {
            .table {
                font-size: 14px;
            }

            .btn-custom {
                font-size: 12px;
                padding: 6px 10px;
            }

            .btn-add {
                font-size: 14px;
                padding: 8px 14px;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 103
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

        // line 104
        yield "<div class=\"container mt-5 user-container\">
    <h1 class=\"text-primary fw-bold text-center mb-4\">Liste des Utilisateurs</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Code Postal</th>
                    <th>Ville</th>
                    <th>Créé le</th>
                    <th>N° Siret</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 125, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 126
            yield "                ";
            if (((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126), "roles", [], "any", false, false, false, 126)) || (CoreExtension::inFilter("ROLE_CLIENT_PROFESSIONEL", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 127
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127), "roles", [], "any", false, false, false, 127)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numeroSiret", [], "any", false, false, false, 127)))) || (CoreExtension::inFilter("ROLE_CLIENT_PARTICULIER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 128
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "roles", [], "any", false, false, false, 128)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numeroSiret", [], "any", false, false, false, 128))))) {
                // line 131
                yield "                    
                <tr>
                    <td>";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 133), "html", null, true);
                yield "</td>
                    <td>";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 134), "html", null, true);
                yield "</td>
                    <td>";
                // line 135
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 135)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 135)), "html", null, true)) : (""));
                yield "</td>
                    <td>";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 136), "html", null, true);
                yield "</td>
                    <td>";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 137), "html", null, true);
                yield "</td>
                    <td>";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 138), "html", null, true);
                yield "</td>
                    <td>";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "codepostal", [], "any", false, false, false, 139), "html", null, true);
                yield "</td>
                    <td>";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "ville", [], "any", false, false, false, 140), "html", null, true);
                yield "</td>
                    <td>";
                // line 141
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 141)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 141), "Y-m-d H:i:s"), "html", null, true)) : (""));
                yield "</td>
                    <td>";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numeroSiret", [], "any", false, false, false, 142), "html", null, true);
                yield "</td>
                    <td>
                        <a href=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                yield "\" class=\"btn btn-custom btn-view btn-spacing\">
                            <i class=\"icon fas fa-eye\"></i> Voir
                        </a>
                        <a href=\"";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 147)]), "html", null, true);
                yield "\" class=\"btn btn-custom btn-edit\">
                            <i class=\"icon fas fa-edit\"></i> Modifier
                        </a>
                    </td>
                </tr>
                ";
            }
            // line 153
            yield "
            ";
            $context['_iterated'] = true;
        }
        // line 158
        if (!$context['_iterated']) {
            // line 155
            yield "                <tr>
                    <td colspan=\"10\" class=\"text-center text-muted\">Aucun utilisateur trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "            </tbody>
        </table>
    </div>

    <div class=\"text-center mt-4\">
        <a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_new");
        yield "\" class=\"btn btn-custom btn-add\">
            <i class=\"icon fas fa-plus\"></i> Ajouter un utilisateur
        </a>
    </div>
</div>

<!-- FontAwesome Icons -->
<script src=\"https://kit.fontawesome.com/your-fontawesome-kit.js\" crossorigin=\"anonymous\"></script>
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
        return "admin/users/index.html.twig";
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
        return array (  336 => 164,  329 => 159,  320 => 155,  318 => 158,  313 => 153,  304 => 147,  298 => 144,  293 => 142,  289 => 141,  285 => 140,  281 => 139,  277 => 138,  273 => 137,  269 => 136,  265 => 135,  261 => 134,  257 => 133,  253 => 131,  251 => 128,  250 => 127,  248 => 126,  243 => 125,  220 => 104,  207 => 103,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des utilisateurs{% endblock %}

{% block styles %}
    <style>
        /* Page Background */
        body {
            background-color: #f4f4f4;
        }

        /* Container */
        .user-container {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Table Styling */
        .table {
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }

        .table th {
            background: #007bff;
            color: white;
            text-align: center;
        }

        .table td {
            text-align: center;
            vertical-align: middle;
        }

        /* Buttons */
        .btn-custom {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            font-size: 14px;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
        }

        .btn-view {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-edit {
            background-color: #ff9800;
            color: white;
            border: none;
        }

        .btn-add {
            background-color: #28a745;
            color: white;
            border: none;
            font-size: 16px;
            padding: 10px 18px;
        }

        .btn-custom:hover {
            opacity: 0.85;
            transform: translateY(-2px);
        }

        /* Icons */
        .icon {
            font-size: 16px;
        }

        /* Button Spacing */
        .btn-spacing {
            margin-right: 8px; /* Space between buttons */
        }

        /* Responsive Table */
        @media (max-width: 768px) {
            .table {
                font-size: 14px;
            }

            .btn-custom {
                font-size: 12px;
                padding: 6px 10px;
            }

            .btn-add {
                font-size: 14px;
                padding: 8px 14px;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container mt-5 user-container\">
    <h1 class=\"text-primary fw-bold text-center mb-4\">Liste des Utilisateurs</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Code Postal</th>
                    <th>Ville</th>
                    <th>Créé le</th>
                    <th>N° Siret</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for user in users %}
                {% if  'ROLE_ADMIN' in app.user.roles or 
                ('ROLE_CLIENT_PROFESSIONEL' in app.user.roles and user.numeroSiret is not empty) or 
                ('ROLE_CLIENT_PARTICULIER' in app.user.roles and user.numeroSiret is empty)
                
                %}
                    
                <tr>
                    <td>{{ user.id }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
                    <td>{{ user.nom }}</td>
                    <td>{{ user.prenom }}</td>
                    <td>{{ user.adresse }}</td>
                    <td>{{ user.codepostal }}</td>
                    <td>{{ user.ville }}</td>
                    <td>{{ user.createdAt ? user.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                    <td>{{ user.numeroSiret }}</td>
                    <td>
                        <a href=\"{{ path('app_users_show', {'id': user.id}) }}\" class=\"btn btn-custom btn-view btn-spacing\">
                            <i class=\"icon fas fa-eye\"></i> Voir
                        </a>
                        <a href=\"{{ path('app_users_edit', {'id': user.id}) }}\" class=\"btn btn-custom btn-edit\">
                            <i class=\"icon fas fa-edit\"></i> Modifier
                        </a>
                    </td>
                </tr>
                {% endif %}

            {% else %}
                <tr>
                    <td colspan=\"10\" class=\"text-center text-muted\">Aucun utilisateur trouvé</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"text-center mt-4\">
        <a href=\"{{ path('app_users_new') }}\" class=\"btn btn-custom btn-add\">
            <i class=\"icon fas fa-plus\"></i> Ajouter un utilisateur
        </a>
    </div>
</div>

<!-- FontAwesome Icons -->
<script src=\"https://kit.fontawesome.com/your-fontawesome-kit.js\" crossorigin=\"anonymous\"></script>
{% endblock %}", "admin/users/index.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/admin/users/index.html.twig");
    }
}
