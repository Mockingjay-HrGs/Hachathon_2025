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

/* product/herbes.html.twig */
class __TwigTemplate_8031565fa1e4e473588f928eecc298cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/herbes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/herbes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/herbes.html.twig", 1);
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

        yield "Herbes";
        
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
        yield "<section style=\"
    background-color: #f5f5f5;
    padding: 3rem 2rem;
    border-radius: 12px;
    max-width: 900px;
    margin: 2rem auto;
    text-align: center;
\">
    <h1 style=\"font-size: 2rem; margin-bottom: 1rem;\">
        <span style=\"color: #00a0df;\">HERBES</span>
        & <span style=\"background-color: #7e1e85; color: white; padding: 0.2rem 0.6rem; display: inline-block;\">PETITS TRUCS</span><br>
        POUR GRANDES SALADES
    </h1>

    <p style=\"line-height: 1.7; font-size: 1.1rem; color: #333;\">
        Parfumez vos salades, relevez vos plats et surprenez vos papilles avec notre sélection d’herbes fraîches.<br>
        Basilic, ciboulette, coriandre... tous les petits trucs pour créer de grandes salades !
    </p>
</section>

<div class=\"grid\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 28
            yield "        <div class=\"carte-produit\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "\">
            <img src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 29), ["public/" => ""])), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "titre", [], "any", false, false, false, 29), "html", null, true);
            yield "\" class=\"produit-img\" loading=\"lazy\">
            <h3>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "titre", [], "any", false, false, false, 30), "html", null, true);
            yield "</h3>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 32
        if (!$context['_iterated']) {
            // line 33
            yield "        <p>Aucun produit trouvé.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "</div>

<!-- Modale (même que pour les salades) -->
<div id=\"modal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" id=\"close-modal\">&times;</span>
        <div id=\"modal-body\"></div>
    </div>
</div>

<script src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modal.js"), "html", null, true);
        yield "\"></script>
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
        return "product/herbes.html.twig";
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
        return array (  167 => 45,  155 => 35,  148 => 33,  146 => 32,  139 => 30,  133 => 29,  128 => 28,  123 => 27,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Herbes{% endblock %}

{% block body %}
<section style=\"
    background-color: #f5f5f5;
    padding: 3rem 2rem;
    border-radius: 12px;
    max-width: 900px;
    margin: 2rem auto;
    text-align: center;
\">
    <h1 style=\"font-size: 2rem; margin-bottom: 1rem;\">
        <span style=\"color: #00a0df;\">HERBES</span>
        & <span style=\"background-color: #7e1e85; color: white; padding: 0.2rem 0.6rem; display: inline-block;\">PETITS TRUCS</span><br>
        POUR GRANDES SALADES
    </h1>

    <p style=\"line-height: 1.7; font-size: 1.1rem; color: #333;\">
        Parfumez vos salades, relevez vos plats et surprenez vos papilles avec notre sélection d’herbes fraîches.<br>
        Basilic, ciboulette, coriandre... tous les petits trucs pour créer de grandes salades !
    </p>
</section>

<div class=\"grid\">
    {% for produit in produits %}
        <div class=\"carte-produit\" data-id=\"{{ produit.id }}\">
            <img src=\"{{ asset(produit.image|replace({'public/': ''})) }}\" alt=\"{{ produit.titre }}\" class=\"produit-img\" loading=\"lazy\">
            <h3>{{ produit.titre }}</h3>
        </div>
    {% else %}
        <p>Aucun produit trouvé.</p>
    {% endfor %}
</div>

<!-- Modale (même que pour les salades) -->
<div id=\"modal\" class=\"modal\" style=\"display: none;\">
    <div class=\"modal-content\">
        <span class=\"close\" id=\"close-modal\">&times;</span>
        <div id=\"modal-body\"></div>
    </div>
</div>

<script src=\"{{ asset('js/modal.js') }}\"></script>
{% endblock %}
", "product/herbes.html.twig", "C:\\Users\\dunis\\OneDrive\\Documents\\Projet Webeol\\Webeol\\templates\\product\\herbes.html.twig");
    }
}
