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

/* histoire/engagements.html.twig */
class __TwigTemplate_e2dba2362307da0c872e032ace1398e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "histoire/engagements.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "histoire/engagements.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "histoire/engagements.html.twig", 1);
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

        yield "Nos Salades s’engagent";
        
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
  <div class=\"beliefs-header green\">
    <h1>Nos Salades s’engagent</h1>
  </div>

  <div class=\"beliefs-content\">
    <p>
      Derrière cette belle enseigne nous sommes plus de <strong>600 personnes engagées</strong> pour vous offrir ce qu’il y a de mieux.
      Parce que ça a l’air simple comme ça de faire des salades en sachet et autres crudités… mais en fait c’est un peu plus complexe que ça.
    </p>

    <p>
      Derrière la fraîcheur de ces sachets se cache un processus complexe et maîtrisé
      et une qualité nutritionnelle indiscutablement indiscutée.
    </p>

    <p>
      Depuis 37 ans, Les Crudettes travaillent en partenariat avec des producteurs experts de la terre,
      implantés au plus proche de nos usines selon les saisons afin de disposer toute l’année d’une qualité irréprochable.
      Ce qui est important, c’est que ces mêmes producteurs travaillent dans le respect du cahier des charges rigoureux
      <strong>« Filière Les Crudettes »</strong>… pour satisfaire votre exigence à vous, nos chers clients.
    </p>

    <h3 class=\"video-title\">
      Voici les témoignages de l’un de nos producteurs et d’un responsable achat Les Crudettes :
    </h3>

    <div class=\"video-wrapper\">
      <video controls preload=\"none\" width=\"640\" poster=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/video-thumbnail.webp"), "html", null, true);
        yield "\">
        <source src=\"https://www.lescrudettes.com/squelettes/interface2/nos-salades%20s-engagent.mp4\" type=\"video/mp4\">
        Votre navigateur ne prend pas en charge la lecture vidéo.
      </video>
    </div>

    <p>
      Cet engagement limite l’utilisation des fertilisants et des produits de traitements.
      Grâce à des analyses fréquentes, vous avez l’assurance que les salades que nous vous proposons sont de qualité
      et cultivées selon des pratiques saines.
    </p>

    <p>
      Nous maîtrisons également la traçabilité de la parcelle au sachet grâce à une organisation rigoureuse.
      Et surtout, nous garantissons le maintien des salades au froid de la cueillette jusqu’à votre magasin.
      Parce que si la chaîne du froid est coupée, nos beaux efforts n’auront servi à rien !
    </p>

    <p>
      Nos usines reproduisent à grande échelle les gestes manuels faits par les humains.
      Les salades sont lavées, triées, et seules les feuilles parfaites sont conservées.
    </p>

    <p>
      Nous avons même un procédé de lavage breveté qui respecte la feuille sans l’abîmer et sans conservateur.
      Le froid seul permet la conservation.
    </p>

    <p>
      ♻️ Last but not least, nos déchets verts sont recyclés (alimentation animale & compost),
      et nos emballages aussi → <a href=\"https://www.consignesdetri.fr\" target=\"_blank\">consignesdetri.fr</a>
    </p>

    <p>
      Et (point important), nous faisons attention à l’eau que nous utilisons pour laver nos légumes :
      économisée, filtrée, et rendue propre à la nature.
    </p>

    <p class=\"quote\">Voilà, vous savez tout !</p>
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
        return "histoire/engagements.html.twig";
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
        return array (  130 => 34,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos Salades s’engagent{% endblock %}

{% block body %}
<section class=\"section-container\">
  <div class=\"beliefs-header green\">
    <h1>Nos Salades s’engagent</h1>
  </div>

  <div class=\"beliefs-content\">
    <p>
      Derrière cette belle enseigne nous sommes plus de <strong>600 personnes engagées</strong> pour vous offrir ce qu’il y a de mieux.
      Parce que ça a l’air simple comme ça de faire des salades en sachet et autres crudités… mais en fait c’est un peu plus complexe que ça.
    </p>

    <p>
      Derrière la fraîcheur de ces sachets se cache un processus complexe et maîtrisé
      et une qualité nutritionnelle indiscutablement indiscutée.
    </p>

    <p>
      Depuis 37 ans, Les Crudettes travaillent en partenariat avec des producteurs experts de la terre,
      implantés au plus proche de nos usines selon les saisons afin de disposer toute l’année d’une qualité irréprochable.
      Ce qui est important, c’est que ces mêmes producteurs travaillent dans le respect du cahier des charges rigoureux
      <strong>« Filière Les Crudettes »</strong>… pour satisfaire votre exigence à vous, nos chers clients.
    </p>

    <h3 class=\"video-title\">
      Voici les témoignages de l’un de nos producteurs et d’un responsable achat Les Crudettes :
    </h3>

    <div class=\"video-wrapper\">
      <video controls preload=\"none\" width=\"640\" poster=\"{{ asset('images/video-thumbnail.webp') }}\">
        <source src=\"https://www.lescrudettes.com/squelettes/interface2/nos-salades%20s-engagent.mp4\" type=\"video/mp4\">
        Votre navigateur ne prend pas en charge la lecture vidéo.
      </video>
    </div>

    <p>
      Cet engagement limite l’utilisation des fertilisants et des produits de traitements.
      Grâce à des analyses fréquentes, vous avez l’assurance que les salades que nous vous proposons sont de qualité
      et cultivées selon des pratiques saines.
    </p>

    <p>
      Nous maîtrisons également la traçabilité de la parcelle au sachet grâce à une organisation rigoureuse.
      Et surtout, nous garantissons le maintien des salades au froid de la cueillette jusqu’à votre magasin.
      Parce que si la chaîne du froid est coupée, nos beaux efforts n’auront servi à rien !
    </p>

    <p>
      Nos usines reproduisent à grande échelle les gestes manuels faits par les humains.
      Les salades sont lavées, triées, et seules les feuilles parfaites sont conservées.
    </p>

    <p>
      Nous avons même un procédé de lavage breveté qui respecte la feuille sans l’abîmer et sans conservateur.
      Le froid seul permet la conservation.
    </p>

    <p>
      ♻️ Last but not least, nos déchets verts sont recyclés (alimentation animale & compost),
      et nos emballages aussi → <a href=\"https://www.consignesdetri.fr\" target=\"_blank\">consignesdetri.fr</a>
    </p>

    <p>
      Et (point important), nous faisons attention à l’eau que nous utilisons pour laver nos légumes :
      économisée, filtrée, et rendue propre à la nature.
    </p>

    <p class=\"quote\">Voilà, vous savez tout !</p>
  </div>
</section>
{% endblock %}
", "histoire/engagements.html.twig", "C:\\Users\\dunis\\Documents\\Projet Webeol\\Webeol\\templates\\histoire\\engagements.html.twig");
    }
}
