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
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        /* Container */
        .user-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Heading */
        h1 {
            font-size: 2rem;
            color: #007bff;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Table Styling */
        .table {
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background: #007bff;
            color: white;
            font-weight: bold;
            text-align: center;
            vertical-align: middle;
        }

        .table td {
            text-align: center;
            vertical-align: middle;
        }

        /* Table row hover effect */
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Table stripe effect */
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f8f9fa;
        }

        /* Action Buttons */
        .btn-custom {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 18px;
            font-size: 14px;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
            text-decoration: none;
        }

        .btn-view {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-edit {
            background-color: #ffc107;
            color: white;
            border: none;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .btn-add {
            background-color: #28a745;
            color: white;
            border: none;
            font-size: 16px;
            padding: 12px 24px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-custom:hover {
            opacity: 0.85;
            transform: translateY(-2px);
        }

        /* Icons */
        .icon {
            font-size: 16px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .table {
                font-size: 14px;
            }

            .btn-custom {
                font-size: 12px;
                padding: 6px 12px;
            }

            .btn-add {
                font-size: 14px;
                padding: 10px 16px;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 130
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

        // line 131
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
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 152, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 153
            yield "                ";
            if (((CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "roles", [], "any", false, false, false, 153)) || (CoreExtension::inFilter("ROLE_CLIENT_PROFESSIONEL", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 154
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "user", [], "any", false, false, false, 154), "roles", [], "any", false, false, false, 154)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numeroSiret", [], "any", false, false, false, 154)))) || (CoreExtension::inFilter("ROLE_CLIENT_PARTICULIER", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 155
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "roles", [], "any", false, false, false, 155)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numeroSiret", [], "any", false, false, false, 155))))) {
                // line 156
                yield "                    
                <tr>
                    <td>";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 158), "html", null, true);
                yield "</td>
                    <td>";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 159), "html", null, true);
                yield "</td>
                    <td>";
                // line 160
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 160)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 160)), "html", null, true)) : (""));
                yield "</td>
                    <td>";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 161), "html", null, true);
                yield "</td>
                    <td>";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 162), "html", null, true);
                yield "</td>
                    <td>";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 163), "html", null, true);
                yield "</td>
                    <td>";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "codepostal", [], "any", false, false, false, 164), "html", null, true);
                yield "</td>
                    <td>";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "ville", [], "any", false, false, false, 165), "html", null, true);
                yield "</td>
                    <td>";
                // line 166
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 166)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 166), "Y-m-d H:i:s"), "html", null, true)) : (""));
                yield "</td>
                    <td>";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numeroSiret", [], "any", false, false, false, 167), "html", null, true);
                yield "</td>
                    <td>
                        <a href=\"";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 169)]), "html", null, true);
                yield "\" class=\"btn btn-custom btn-view btn-spacing\">
                            <i class=\"icon fas fa-eye\"></i> Voir
                        </a>
                        <a href=\"";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 172)]), "html", null, true);
                yield "\" class=\"btn btn-custom btn-edit\">
                            <i class=\"icon fas fa-edit\"></i> Modifier
                        </a>
                    </td>
                </tr>
                ";
            }
            // line 178
            yield "            ";
            $context['_iterated'] = true;
        }
        // line 182
        if (!$context['_iterated']) {
            // line 179
            yield "                <tr>
                    <td colspan=\"11\" class=\"text-center text-muted\">Aucun utilisateur trouvé</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        yield "            </tbody>
        </table>
    </div>

    <div class=\"text-center mt-4\">
        <a href=\"";
        // line 188
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
        return array (  362 => 188,  355 => 183,  346 => 179,  344 => 182,  340 => 178,  331 => 172,  325 => 169,  320 => 167,  316 => 166,  312 => 165,  308 => 164,  304 => 163,  300 => 162,  296 => 161,  292 => 160,  288 => 159,  284 => 158,  280 => 156,  278 => 155,  277 => 154,  275 => 153,  270 => 152,  247 => 131,  234 => 130,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des utilisateurs{% endblock %}

{% block styles %}
    <style>
        /* Page Background */
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        /* Container */
        .user-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Heading */
        h1 {
            font-size: 2rem;
            color: #007bff;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Table Styling */
        .table {
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background: #007bff;
            color: white;
            font-weight: bold;
            text-align: center;
            vertical-align: middle;
        }

        .table td {
            text-align: center;
            vertical-align: middle;
        }

        /* Table row hover effect */
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Table stripe effect */
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f8f9fa;
        }

        /* Action Buttons */
        .btn-custom {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 18px;
            font-size: 14px;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
            text-decoration: none;
        }

        .btn-view {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-edit {
            background-color: #ffc107;
            color: white;
            border: none;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .btn-add {
            background-color: #28a745;
            color: white;
            border: none;
            font-size: 16px;
            padding: 12px 24px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-custom:hover {
            opacity: 0.85;
            transform: translateY(-2px);
        }

        /* Icons */
        .icon {
            font-size: 16px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .table {
                font-size: 14px;
            }

            .btn-custom {
                font-size: 12px;
                padding: 6px 12px;
            }

            .btn-add {
                font-size: 14px;
                padding: 10px 16px;
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
                {% if 'ROLE_ADMIN' in app.user.roles or
                ('ROLE_CLIENT_PROFESSIONEL' in app.user.roles and user.numeroSiret is not empty) or
                ('ROLE_CLIENT_PARTICULIER' in app.user.roles and user.numeroSiret is empty) %}
                    
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
                    <td colspan=\"11\" class=\"text-center text-muted\">Aucun utilisateur trouvé</td>
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
{% endblock %}
", "admin/users/index.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/admin/users/index.html.twig");
    }
}
