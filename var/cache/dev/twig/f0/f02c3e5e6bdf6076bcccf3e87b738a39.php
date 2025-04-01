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

/* home/index.html.twig */
class __TwigTemplate_be0ffc76239628d0a207e95af47b72a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Accueil";
        
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
        yield "<div class=\"layout\">
  <aside class=\"sidebar\">
    <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.webp"), "html", null, true);
        yield "\" alt=\"Logo Les Crudettes\" class=\"logo\">

    <nav class=\"nav-links\">
      <div class=\"menu-item\">
        <button class=\"menu-toggle\">Accueil</button>
      </div>

      <div class=\"menu-item\">
        <button class=\"menu-toggle\">Il était une fois ...</button>
        <div class=\"submenu\">
          <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("histoire_croyances");
        yield "\">Des croyances authentiques</a>
          <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("histoire_engagements");
        yield "\">Nos Salades s’engagent</a>
          <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("histoire_histoire");
        yield "\">Une véritable histoire</a>
          <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("histoire_metiers");
        yield "\">De vrais et beaux métiers</a>

        </div>
      </div>

      <div class=\"menu-item\">
        <button class=\"menu-toggle\">Des produits vraiment craquants</button>
        <div class=\"submenu\">
          <a href=\"#\">Salades et crudités pour fins gourmets</a>
          <a href=\"#\">Herbes et petits trucs pour grandes salades</a>
          <a href=\"#\">Nos légumes à cuire et à réchauffer</a>
        </div>
      </div>

      <div class=\"menu-item\">
        <button class=\"menu-toggle\">Et des astuces trop chouettes</button>
        <div class=\"submenu\">
          <a href=\"#\">Nos idées recettes, c’est par ici</a>
          <a href=\"#\">Nos vidéos recettes, c’est par ici</a>
          <a href=\"#\">L’actu toute fraîche, c’est par là</a>
          <a href=\"#\">Nos petites astuces, c’est tout le temps</a>
        </div>
      </div>

      <div class=\"menu-item\">
        <button class=\"menu-toggle\">Contact</button>
      </div>
    </nav>
  </aside>

  <main class=\"main-content\">

    <section class=\"slider-section\">
      <div class=\"slider\" id=\"slider\">
        <div class=\"slide active\">
          <img src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider7.webp"), "html", null, true);
        yield "\" alt=\"Baby carottes à partager\">
        </div>
        <div class=\"slide\">
          <img src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slider8.webp"), "html", null, true);
        yield "\" alt=\"Purée maison Les Crudettes\">
        </div>
      </div>

      <button class=\"slider-btn prev\" aria-label=\"Image précédente\">&#10094;</button>
      <button class=\"slider-btn next\" aria-label=\"Image suivante\">&#10095;</button>
    </section>


    <section class=\"slider-section section-container\">
        <section class=\"video-section\">
        <h2 class=\"video-intro\">
            LE PROJET SERRE DU FUTUR A PU VOIR LE JOUR GRÂCE AU SOUTIEN DE L’UNION EUROPÉENNE ET DE LA
            RÉGION CENTRE VAL DE LOIRE AU TRAVERS DU FONDS FEDER
        </h2>

        <div class=\"video-placeholder\" id=\"video-container\">
            <img src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/video-thumbnail.webp"), "html", null, true);
        yield "\" alt=\"Voir la vidéo\" id=\"load-video\" class=\"video-thumb\">
        </div>
        </section>
    </section>



  </main>
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
        return "home/index.html.twig";
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
        return array (  193 => 76,  173 => 59,  167 => 56,  129 => 21,  125 => 20,  121 => 19,  117 => 18,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
<div class=\"layout\">
  <aside class=\"sidebar\">
    <img src=\"{{ asset('images/logo.webp') }}\" alt=\"Logo Les Crudettes\" class=\"logo\">

    <nav class=\"nav-links\">
      <div class=\"menu-item\">
        <button class=\"menu-toggle\">Accueil</button>
      </div>

      <div class=\"menu-item\">
        <button class=\"menu-toggle\">Il était une fois ...</button>
        <div class=\"submenu\">
          <a href=\"{{ path('histoire_croyances') }}\">Des croyances authentiques</a>
          <a href=\"{{ path('histoire_engagements') }}\">Nos Salades s’engagent</a>
          <a href=\"{{ path('histoire_histoire') }}\">Une véritable histoire</a>
          <a href=\"{{ path('histoire_metiers') }}\">De vrais et beaux métiers</a>

        </div>
      </div>

      <div class=\"menu-item\">
        <button class=\"menu-toggle\">Des produits vraiment craquants</button>
        <div class=\"submenu\">
          <a href=\"#\">Salades et crudités pour fins gourmets</a>
          <a href=\"#\">Herbes et petits trucs pour grandes salades</a>
          <a href=\"#\">Nos légumes à cuire et à réchauffer</a>
        </div>
      </div>

      <div class=\"menu-item\">
        <button class=\"menu-toggle\">Et des astuces trop chouettes</button>
        <div class=\"submenu\">
          <a href=\"#\">Nos idées recettes, c’est par ici</a>
          <a href=\"#\">Nos vidéos recettes, c’est par ici</a>
          <a href=\"#\">L’actu toute fraîche, c’est par là</a>
          <a href=\"#\">Nos petites astuces, c’est tout le temps</a>
        </div>
      </div>

      <div class=\"menu-item\">
        <button class=\"menu-toggle\">Contact</button>
      </div>
    </nav>
  </aside>

  <main class=\"main-content\">

    <section class=\"slider-section\">
      <div class=\"slider\" id=\"slider\">
        <div class=\"slide active\">
          <img src=\"{{ asset('images/slider7.webp') }}\" alt=\"Baby carottes à partager\">
        </div>
        <div class=\"slide\">
          <img src=\"{{ asset('images/slider8.webp') }}\" alt=\"Purée maison Les Crudettes\">
        </div>
      </div>

      <button class=\"slider-btn prev\" aria-label=\"Image précédente\">&#10094;</button>
      <button class=\"slider-btn next\" aria-label=\"Image suivante\">&#10095;</button>
    </section>


    <section class=\"slider-section section-container\">
        <section class=\"video-section\">
        <h2 class=\"video-intro\">
            LE PROJET SERRE DU FUTUR A PU VOIR LE JOUR GRÂCE AU SOUTIEN DE L’UNION EUROPÉENNE ET DE LA
            RÉGION CENTRE VAL DE LOIRE AU TRAVERS DU FONDS FEDER
        </h2>

        <div class=\"video-placeholder\" id=\"video-container\">
            <img src=\"{{ asset('images/video-thumbnail.webp') }}\" alt=\"Voir la vidéo\" id=\"load-video\" class=\"video-thumb\">
        </div>
        </section>
    </section>



  </main>
</div>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\dunis\\Documents\\Projet Webeol\\Webeol\\templates\\home\\index.html.twig");
    }
}
