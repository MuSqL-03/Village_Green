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

/* admin/produits/show.html.twig */
class __TwigTemplate_9acd0068fe99c7856a1e6df4de8da517 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produits/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produits/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/produits/show.html.twig", 1);
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

        yield "Product Details";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4 text-primary text-center fw-bold\">Product Details</h1>

        <div class=\"card shadow-lg p-4 mb-5 bg-white rounded\">
            <div class=\"card-body\">
                <table class=\"table table-hover table-bordered align-middle text-center\">
                    <tbody>
                        <tr>
                            <th class=\"bg-light\">ID</th>
                            <td class=\"fw-bold\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Nom</th>
                            <td class=\"text-primary fw-semibold\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Description</th>
                            <td class=\"text-muted\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Prix (€)</th>
                            <td class=\"text-success fw-bold\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "prix", [], "any", false, false, false, 27) / 100), "html", null, true);
        yield " €</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Stock</th>
                            <td class=\"fw-bold ";
        // line 31
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "stock", [], "any", false, false, false, 31) > 0)) ? ("text-success") : ("text-danger"));
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "stock", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Created At</th>
                            <td>";
        // line 35
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "createdAt", [], "any", false, false, false, 35)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "createdAt", [], "any", false, false, false, 35), "Y-m-d H:i:s"), "html", null, true)) : ("N/A"));
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Reference Fournisseur</th>
                            <td>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "referenceFournisseur", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Photo</th>
                            <td>
                                <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "photo", [], "any", false, false, false, 44))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44), "html", null, true);
        yield "\" class=\"img-thumbnail rounded shadow\" style=\"max-width: 150px;\">
                            </td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Slug</th>
                            <td>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "slug", [], "any", false, false, false, 49), "html", null, true);
        yield "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_index");
        yield "\" class=\"btn btn-secondary btn-lg me-2\">
                <i class=\"bi bi-arrow-left\">Retour </i> 
            </a>
            <a href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_app_produits_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
        yield "\" class=\"btn btn-warning btn-lg me-2\">
                <i class=\"bi bi-pencil\">Modifie</i> 
            </a>
            ";
        // line 63
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/produits/_delete_form.html.twig");
        yield "
        </div>
    </div>
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
        return "admin/produits/show.html.twig";
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
        return array (  196 => 63,  190 => 60,  184 => 57,  173 => 49,  163 => 44,  155 => 39,  148 => 35,  139 => 31,  132 => 27,  125 => 23,  118 => 19,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Product Details{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4 text-primary text-center fw-bold\">Product Details</h1>

        <div class=\"card shadow-lg p-4 mb-5 bg-white rounded\">
            <div class=\"card-body\">
                <table class=\"table table-hover table-bordered align-middle text-center\">
                    <tbody>
                        <tr>
                            <th class=\"bg-light\">ID</th>
                            <td class=\"fw-bold\">{{ product.id }}</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Nom</th>
                            <td class=\"text-primary fw-semibold\">{{ product.nom }}</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Description</th>
                            <td class=\"text-muted\">{{ product.description }}</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Prix (€)</th>
                            <td class=\"text-success fw-bold\">{{ product.prix / 100 }} €</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Stock</th>
                            <td class=\"fw-bold {{ product.stock > 0 ? 'text-success' : 'text-danger' }}\">{{ product.stock }}</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Created At</th>
                            <td>{{ product.createdAt ? product.createdAt|date('Y-m-d H:i:s') : 'N/A' }}</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Reference Fournisseur</th>
                            <td>{{ product.referenceFournisseur }}</td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Photo</th>
                            <td>
                                <img src=\"{{ asset('uploads/Products/' ~ product.photo) }}\" alt=\"{{ product.nom }}\" class=\"img-thumbnail rounded shadow\" style=\"max-width: 150px;\">
                            </td>
                        </tr>
                        <tr>
                            <th class=\"bg-light\">Slug</th>
                            <td>{{ product.slug }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"{{ path('admin_products_index') }}\" class=\"btn btn-secondary btn-lg me-2\">
                <i class=\"bi bi-arrow-left\">Retour </i> 
            </a>
            <a href=\"{{ path('admin_products_app_produits_edit', {'id': product.id}) }}\" class=\"btn btn-warning btn-lg me-2\">
                <i class=\"bi bi-pencil\">Modifie</i> 
            </a>
            {{ include('admin/produits/_delete_form.html.twig') }}
        </div>
    </div>
{% endblock %}", "admin/produits/show.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/admin/produits/show.html.twig");
    }
}
