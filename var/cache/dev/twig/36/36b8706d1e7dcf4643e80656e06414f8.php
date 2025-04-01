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

/* histoire/histoire.html.twig */
class __TwigTemplate_66c4100164d271ce31b53eaf9fc0573f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "histoire/histoire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "histoire/histoire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "histoire/histoire.html.twig", 1);
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

        yield "Une véritable histoire";
        
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
  <div class=\"beliefs-header blue\">
    <h1>Une véritable histoire</h1>
  </div>

  <div class=\"beliefs-content\">

    <p>
      <span class=\"highlight\">Tout a commencé en 1984</span> avec la création du premier site de production Les Crudettes à Cavaillon.
      À partir de cette date on vous passe les détails, mais en gros ce fut une gentille et belle ascension,
      doucement mais sûrement, parce qu’une entreprise aussi ça se cultive et que ça a besoin de temps
      et d’investissement pour germer, pousser et puis s’élever.
    </p>

    <p>
      <span class=\"highlight\">Depuis 2013</span>, nous avons rejoint le groupe <strong>LSDH</strong>,
      avec lequel nous partageons la vision : <strong>Passion, Ambition et Humanité</strong>.
      Un élan supplémentaire à notre développement.
    </p>

    <p>
      Alors 37 ans plus tard nous voilà là.
      Un peu fiers mais pas trop, juste ce qu’il faut.
      Quand on se retourne, on est content du chemin parcouru et des terres labourées.
      Mais comme ce n’est pas dans cette direction-là qu’on va (en arrière),
      on continue de regarder devant, direction le plaisir lié aux innovations et à la création.
      Et c’est très excitant. Vraiment.
    </p>

    <p>
      En fait – si vous voulez tout savoir – on s’est fixé comme mission de vous proposer ce qu’il y a de meilleur et de plus cru.
      Des salades mais aussi des crudités donc.
      Et comme on aime bien varier les plaisirs et innover, notre offre s’enrichit de plus en plus pour
      <span class=\"pink\">s’adapter à vos vies autant qu’à vos envies</span>.
    </p>

    <p>
      Aujourd’hui des salades snacking, des soupes froides et plein de petits trucs en plus
      pour rendre vos salades sexy en diable.
      Et demain des jus plus frais, des mélanges de saveurs audacieux et délicieux.
      Bref, on a hâte de vous présenter ça !
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
        return "histoire/histoire.html.twig";
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

{% block title %}Une véritable histoire{% endblock %}

{% block body %}
<section class=\"section-container\">
  <div class=\"beliefs-header blue\">
    <h1>Une véritable histoire</h1>
  </div>

  <div class=\"beliefs-content\">

    <p>
      <span class=\"highlight\">Tout a commencé en 1984</span> avec la création du premier site de production Les Crudettes à Cavaillon.
      À partir de cette date on vous passe les détails, mais en gros ce fut une gentille et belle ascension,
      doucement mais sûrement, parce qu’une entreprise aussi ça se cultive et que ça a besoin de temps
      et d’investissement pour germer, pousser et puis s’élever.
    </p>

    <p>
      <span class=\"highlight\">Depuis 2013</span>, nous avons rejoint le groupe <strong>LSDH</strong>,
      avec lequel nous partageons la vision : <strong>Passion, Ambition et Humanité</strong>.
      Un élan supplémentaire à notre développement.
    </p>

    <p>
      Alors 37 ans plus tard nous voilà là.
      Un peu fiers mais pas trop, juste ce qu’il faut.
      Quand on se retourne, on est content du chemin parcouru et des terres labourées.
      Mais comme ce n’est pas dans cette direction-là qu’on va (en arrière),
      on continue de regarder devant, direction le plaisir lié aux innovations et à la création.
      Et c’est très excitant. Vraiment.
    </p>

    <p>
      En fait – si vous voulez tout savoir – on s’est fixé comme mission de vous proposer ce qu’il y a de meilleur et de plus cru.
      Des salades mais aussi des crudités donc.
      Et comme on aime bien varier les plaisirs et innover, notre offre s’enrichit de plus en plus pour
      <span class=\"pink\">s’adapter à vos vies autant qu’à vos envies</span>.
    </p>

    <p>
      Aujourd’hui des salades snacking, des soupes froides et plein de petits trucs en plus
      pour rendre vos salades sexy en diable.
      Et demain des jus plus frais, des mélanges de saveurs audacieux et délicieux.
      Bref, on a hâte de vous présenter ça !
    </p>

  </div>
</section>
{% endblock %}
", "histoire/histoire.html.twig", "C:\\Users\\dunis\\Documents\\Projet Webeol\\Webeol\\templates\\histoire\\histoire.html.twig");
    }
}
