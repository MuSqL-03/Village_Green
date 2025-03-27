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

/* admin/produits/index.html.twig */
class __TwigTemplate_946f79dcfd5e9d81e0fe33d2286b2c9c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produits/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produits/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/produits/index.html.twig", 1);
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

        yield "Product List";
        
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
        <h1 class=\"mb-4 text-primary text-center fw-bold\">Product Management</h1>

        <div class=\"card shadow-lg p-3 mb-5 bg-white rounded\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-bordered align-middle text-center\">
                        <thead class=\"table-dark\">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Prix(€)</th>
                                <th>Stock</th>
                                <th>Created At</th>
                                <th>Reference Fournisseur</th>
                                <th>Photo</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            yield "                                <tr>
                                    <td class=\"fw-bold\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                                    <td class=\"text-primary fw-semibold\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                                    <td class=\"text-muted\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                                    <td class=\"text-success fw-bold\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 33) / 100), "html", null, true);
            yield " €</td>
                                    <td class=\"fw-bold ";
            // line 34
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 34) > 0)) ? ("text-success") : ("text-danger"));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                                    <td>";
            // line 35
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "createdAt", [], "any", false, false, false, 35)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "createdAt", [], "any", false, false, false, 35), "Y-m-d H:i:s"), "html", null, true)) : ("N/A"));
            yield "</td>
                                    <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "referenceFournisseur", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                                    <td>
                                        <img src=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "photo", [], "any", false, false, false, 38))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "\" class=\"img-thumbnail rounded shadow\" style=\"max-width: 80px;\">
                                    </td>
                                    <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                    <td>
                                        <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_app_produits_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm me-1\" title=\"View\">
                                            <i class=\"bi bi-eye\">Voir</i>
                                        </a>
                                        <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_app_produits_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm me-1\" title=\"Edit\">
                                            <i class=\"bi bi-pencil\">Modifie</i>
                                        </a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 54
        if (!$context['_iterated']) {
            // line 51
            yield "                                <tr>
                                    <td colspan=\"10\" class=\"text-center text-muted py-3\">No records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_app_produits_new");
        yield "\" class=\"btn btn-success btn-lg shadow-sm\">
                <i class=\"bi bi-plus-circle\">Ajouter un produit</i> 
            </a>
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
        return "admin/produits/index.html.twig";
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
        return array (  211 => 62,  202 => 55,  193 => 51,  191 => 54,  181 => 45,  175 => 42,  170 => 40,  163 => 38,  158 => 36,  154 => 35,  148 => 34,  144 => 33,  140 => 32,  136 => 31,  132 => 30,  129 => 29,  124 => 28,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Product List{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4 text-primary text-center fw-bold\">Product Management</h1>

        <div class=\"card shadow-lg p-3 mb-5 bg-white rounded\">
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-bordered align-middle text-center\">
                        <thead class=\"table-dark\">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Prix(€)</th>
                                <th>Stock</th>
                                <th>Created At</th>
                                <th>Reference Fournisseur</th>
                                <th>Photo</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for product in products %}
                                <tr>
                                    <td class=\"fw-bold\">{{ product.id }}</td>
                                    <td class=\"text-primary fw-semibold\">{{ product.nom }}</td>
                                    <td class=\"text-muted\">{{ product.description }}</td>
                                    <td class=\"text-success fw-bold\">{{ product.prix / 100 }} €</td>
                                    <td class=\"fw-bold {{ product.stock > 0 ? 'text-success' : 'text-danger' }}\">{{ product.stock }}</td>
                                    <td>{{ product.createdAt ? product.createdAt|date('Y-m-d H:i:s') : 'N/A' }}</td>
                                    <td>{{ product.referenceFournisseur }}</td>
                                    <td>
                                        <img src=\"{{ asset('uploads/Products/' ~ product.photo) }}\" alt=\"{{ product.nom }}\" class=\"img-thumbnail rounded shadow\" style=\"max-width: 80px;\">
                                    </td>
                                    <td>{{ product.slug }}</td>
                                    <td>
                                        <a href=\"{{ path('admin_products_app_produits_show', {'id': product.id}) }}\" class=\"btn btn-info btn-sm me-1\" title=\"View\">
                                            <i class=\"bi bi-eye\">Voir</i>
                                        </a>
                                        <a href=\"{{ path('admin_products_app_produits_edit', {'id': product.id}) }}\" class=\"btn btn-warning btn-sm me-1\" title=\"Edit\">
                                            <i class=\"bi bi-pencil\">Modifie</i>
                                        </a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"10\" class=\"text-center text-muted py-3\">No records found</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"{{ path('admin_products_app_produits_new') }}\" class=\"btn btn-success btn-lg shadow-sm\">
                <i class=\"bi bi-plus-circle\">Ajouter un produit</i> 
            </a>
        </div>
    </div>
{% endblock %}
", "admin/produits/index.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/admin/produits/index.html.twig");
    }
}
