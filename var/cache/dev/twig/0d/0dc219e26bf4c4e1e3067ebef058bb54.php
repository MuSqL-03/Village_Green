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

/* emails/commande_confirmation.html.twig */
class __TwigTemplate_ef8e3131a6e6098a87ed7af0cda283c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/commande_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/commande_confirmation.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Confirmation de commande</title>
</head>
<body>
    <hr>
    <h2>Bonjour ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        yield ",</h2>
    <hr>
    <p>Nous vous confirmons que votre commande a bien été enregistrée.</p>
    <hr>
    
    <p>Merci pour votre commande ! Voici les détails :</p>
    <hr>
    <h1>Détails de votre commande :</h1>
    <p><strong>Référence :</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 18, $this->source); })()), "reference", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
    <p><strong>Date :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 19, $this->source); })()), "createdAt", [], "any", false, false, false, 19), "d/m/Y H:i"), "html", null, true);
        yield "</p>
    <p><strong>Total :</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 20, $this->source); })()), "total", [], "any", false, false, false, 20), 2, ",", " "), "html", null, true);
        yield " €</p>
    <p><strong>Méthode de paiement :</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paymentMethode"]) || array_key_exists("paymentMethode", $context) ? $context["paymentMethode"] : (function () { throw new RuntimeError('Variable "paymentMethode" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>


    <h1>Adresse de livraison :</h1>
    <p>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 25, $this->source); })()), "adresseLivraison", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
    <p><strong>Date prévue :</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 26, $this->source); })()), "dateLivraison", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
        yield "</p>

    <h1>Détails des produits :</h1>
    <ul>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["quantite"]) {
            // line 31
            yield "            <li>Produit ID: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield " - Quantité: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["quantite"], "html", null, true);
            yield "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['id'], $context['quantite'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "    </ul>

    <h1>Total :</h1>
    <p><strong>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 36, $this->source); })()), "total", [], "any", false, false, false, 36), "html", null, true);
        yield " €</strong></p>

    <p>Votre commande est en cours de traitement. Vous recevrez un autre email lorsque votre commande sera expédiée.</p>

    <p>Merci de votre confiance,</p>
    <p>L'équipe de notre boutique</p>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/commande_confirmation.html.twig";
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
        return array (  120 => 36,  115 => 33,  104 => 31,  100 => 30,  93 => 26,  89 => 25,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Confirmation de commande</title>
</head>
<body>
    <hr>
    <h2>Bonjour {{ user.nom }},</h2>
    <hr>
    <p>Nous vous confirmons que votre commande a bien été enregistrée.</p>
    <hr>
    
    <p>Merci pour votre commande ! Voici les détails :</p>
    <hr>
    <h1>Détails de votre commande :</h1>
    <p><strong>Référence :</strong> {{ commande.reference }}</p>
    <p><strong>Date :</strong> {{ commande.createdAt|date('d/m/Y H:i') }}</p>
    <p><strong>Total :</strong> {{ commande.total|number_format(2, ',', ' ') }} €</p>
    <p><strong>Méthode de paiement :</strong> {{ paymentMethode.nom }}</p>


    <h1>Adresse de livraison :</h1>
    <p>{{ livraison.adresseLivraison }}</p>
    <p><strong>Date prévue :</strong> {{ livraison.dateLivraison|date('d/m/Y') }}</p>

    <h1>Détails des produits :</h1>
    <ul>
        {% for id, quantite in panier %}
            <li>Produit ID: {{ id }} - Quantité: {{ quantite }}</li>
        {% endfor %}
    </ul>

    <h1>Total :</h1>
    <p><strong>{{ commande.total }} €</strong></p>

    <p>Votre commande est en cours de traitement. Vous recevrez un autre email lorsque votre commande sera expédiée.</p>

    <p>Merci de votre confiance,</p>
    <p>L'équipe de notre boutique</p>
</body>
</html>", "emails/commande_confirmation.html.twig", "/home/mohamed-abshir/dev/CDA/Mon_Projet/avec Api+react/Vilage_Green/templates/emails/commande_confirmation.html.twig");
    }
}
