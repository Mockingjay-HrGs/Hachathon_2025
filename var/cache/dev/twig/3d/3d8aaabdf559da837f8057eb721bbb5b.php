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

/* histoire/croyances.html.twig */
class __TwigTemplate_026e4555afeb6b69963155ba44778076 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "histoire/croyances.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "histoire/croyances.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "histoire/croyances.html.twig", 1);
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

        yield "Des croyances authentiques";
        
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
        yield "<section class=\"section-container\">
  <div class=\"beliefs-header purple\">
    <h1>Des croyances authentiques</h1>
  </div>

  <div class=\"beliefs-content\">
    <h2>Pourquoi « La vérité crue » ?</h2>

    <p>
      D’abord, parce que Les Crudettes proposent des salades vertes et des salades composées fraîches
      et prêtes à manger, tous les jours de l’année, à tous les consommateurs en France (et aussi des crudités,
      des fruits, des herbes aromatiques, des jus de fruits, des soupes… toujours frais).
    </p>

    <p>
      Ensuite, parce qu’il est nécessaire de savoir dire les choses et les écouter, de façon simple, directe,
      sincère et cohérente pour réussir ensemble.
      Notre travail d’entrepreneur, c’est de construire un projet partagé avec les équipes internes, les clients,
      les producteurs, avec pour objectif la création de valeur et le mieux-vivre ensemble.
      Dit autrement, nous devons avoir les pieds sur terre, le cœur à l’ouvrage et la tête dans les étoiles !
    </p>

    <p>
      Enfin, parce que nous choisissons de regarder la réalité en face.
      Notre responsabilité fondamentale en tant qu’entreprise agroalimentaire, c’est de participer à créer
      le futur auquel nous aspirons collectivement,
      et de relever les défis de la nutrition, de la santé, de l’environnement, de l’aménagement du territoire,
      avec <strong>Ambition, Passion</strong> et <strong>Humanité</strong>.
    </p>

    <p class=\"quote\">« LA VÉRITÉ CRUE », POUR ÇA !</p>

    <p class=\"author\">
      Dominique DUPRAT<br>
      <span>DIRECTEUR GÉNÉRAL</span>
    </p>
  </div>
</section>
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
        return "histoire/croyances.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Des croyances authentiques{% endblock %}

{% block body %}
<section class=\"section-container\">
  <div class=\"beliefs-header purple\">
    <h1>Des croyances authentiques</h1>
  </div>

  <div class=\"beliefs-content\">
    <h2>Pourquoi « La vérité crue » ?</h2>

    <p>
      D’abord, parce que Les Crudettes proposent des salades vertes et des salades composées fraîches
      et prêtes à manger, tous les jours de l’année, à tous les consommateurs en France (et aussi des crudités,
      des fruits, des herbes aromatiques, des jus de fruits, des soupes… toujours frais).
    </p>

    <p>
      Ensuite, parce qu’il est nécessaire de savoir dire les choses et les écouter, de façon simple, directe,
      sincère et cohérente pour réussir ensemble.
      Notre travail d’entrepreneur, c’est de construire un projet partagé avec les équipes internes, les clients,
      les producteurs, avec pour objectif la création de valeur et le mieux-vivre ensemble.
      Dit autrement, nous devons avoir les pieds sur terre, le cœur à l’ouvrage et la tête dans les étoiles !
    </p>

    <p>
      Enfin, parce que nous choisissons de regarder la réalité en face.
      Notre responsabilité fondamentale en tant qu’entreprise agroalimentaire, c’est de participer à créer
      le futur auquel nous aspirons collectivement,
      et de relever les défis de la nutrition, de la santé, de l’environnement, de l’aménagement du territoire,
      avec <strong>Ambition, Passion</strong> et <strong>Humanité</strong>.
    </p>

    <p class=\"quote\">« LA VÉRITÉ CRUE », POUR ÇA !</p>

    <p class=\"author\">
      Dominique DUPRAT<br>
      <span>DIRECTEUR GÉNÉRAL</span>
    </p>
  </div>
</section>
{% endblock %}
", "histoire/croyances.html.twig", "C:\\Users\\dunis\\Documents\\Projet Webeol\\Webeol\\templates\\histoire\\croyances.html.twig");
    }
}
