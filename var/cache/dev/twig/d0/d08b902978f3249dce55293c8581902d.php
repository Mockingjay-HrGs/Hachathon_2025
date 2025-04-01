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

/* base.html.twig */
class __TwigTemplate_b606ae3d0038c7d3553c82a457420d6a extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
        ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 10
        yield "    </head>
        ";
        // line 11
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 16
        yield "
    <body>
        ";
        // line 18
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 19
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "attributes", [], "any", false, false, false, 19), "get", ["_route"], "method", false, false, false, 19) != "home")) {
            // line 20
            yield "          <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            yield "\" class=\"top-home-button\">🏠 Accueil</a>
        ";
        }
        // line 22
        yield "



        <footer class=\"footer\">
          <div class=\"footer-top\">
            <p><strong>ON VOUS DIT TOUT !</strong></p>
            <p>
              Retrouvez les informations sur les qualités et caractéristiques environnementales de nos produits
              en application de la loi AGEC (Anti-gaspillage pour une économie circulaire) sur le site mutualisé de la Société Coopérative d’Intérêt Collectif NumAlim :
              <a href=\"https://www.numalim.fr\" target=\"_blank\" rel=\"noopener noreferrer\">www.numalim.fr</a>
            </p>
          </div>

          <div class=\"footer-links\">
            <div class=\"footer-nav\">
              <a href=\"#\">Contactez-nous</a> -
              <a href=\"#\">Recrutement</a> -
              <a href=\"#\">Mentions légales</a> -
              <a href=\"#\">Nos engagements</a>
            </div>
            <div class=\"footer-nav\">
              <a href=\"#\">Plan du site</a> -
              <a href=\"#\">Cookies</a> -
              <a href=\"#\">Charte pour la protection des données</a>
            </div>
          </div>

          <div class=\"footer-social\">
            <a href=\"#\"><img src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/social/instagram.svg"), "html", null, true);
        yield "\" alt=\"Instagram\" width=\"20\"></a>
            <a href=\"#\"><img src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/social/facebook.svg"), "html", null, true);
        yield "\" alt=\"Facebook\" width=\"20\"></a>
            <a href=\"#\"><img src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/social/linkedin.svg"), "html", null, true);
        yield "\" alt=\"LinkedIn\" width=\"20\"></a>
            <a href=\"#\"><img src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/social/youtube.svg"), "html", null, true);
        yield "\" alt=\"YouTube\" width=\"20\"></a>
          </div>

          <div class=\"footer-bottom\">
            <p>&copy; Les Crudettes – Réalisation Atmedia</p>
          </div>
        </footer>

    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        yield "          <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sidebar.js"), "html", null, true);
        yield "\"></script>
          <script src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/video.js"), "html", null, true);
        yield "\"></script>
          <script src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slider.js"), "html", null, true);
        yield "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  236 => 18,  223 => 14,  219 => 13,  214 => 12,  201 => 11,  190 => 9,  177 => 8,  154 => 5,  132 => 54,  128 => 53,  124 => 52,  120 => 51,  89 => 22,  83 => 20,  80 => 19,  78 => 18,  74 => 16,  72 => 11,  69 => 10,  67 => 8,  63 => 7,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        {% block stylesheets %}
        {% endblock %}
    </head>
        {% block javascripts %}
          <script src=\"{{ asset('js/sidebar.js') }}\"></script>
          <script src=\"{{ asset('js/video.js') }}\"></script>
          <script src=\"{{ asset('js/slider.js') }}\"></script>
        {% endblock %}

    <body>
        {% block body %}{% endblock %}
        {% if app.request.attributes.get('_route') != 'home' %}
          <a href=\"{{ path('home') }}\" class=\"top-home-button\">🏠 Accueil</a>
        {% endif %}




        <footer class=\"footer\">
          <div class=\"footer-top\">
            <p><strong>ON VOUS DIT TOUT !</strong></p>
            <p>
              Retrouvez les informations sur les qualités et caractéristiques environnementales de nos produits
              en application de la loi AGEC (Anti-gaspillage pour une économie circulaire) sur le site mutualisé de la Société Coopérative d’Intérêt Collectif NumAlim :
              <a href=\"https://www.numalim.fr\" target=\"_blank\" rel=\"noopener noreferrer\">www.numalim.fr</a>
            </p>
          </div>

          <div class=\"footer-links\">
            <div class=\"footer-nav\">
              <a href=\"#\">Contactez-nous</a> -
              <a href=\"#\">Recrutement</a> -
              <a href=\"#\">Mentions légales</a> -
              <a href=\"#\">Nos engagements</a>
            </div>
            <div class=\"footer-nav\">
              <a href=\"#\">Plan du site</a> -
              <a href=\"#\">Cookies</a> -
              <a href=\"#\">Charte pour la protection des données</a>
            </div>
          </div>

          <div class=\"footer-social\">
            <a href=\"#\"><img src=\"{{ asset('images/social/instagram.svg') }}\" alt=\"Instagram\" width=\"20\"></a>
            <a href=\"#\"><img src=\"{{ asset('images/social/facebook.svg') }}\" alt=\"Facebook\" width=\"20\"></a>
            <a href=\"#\"><img src=\"{{ asset('images/social/linkedin.svg') }}\" alt=\"LinkedIn\" width=\"20\"></a>
            <a href=\"#\"><img src=\"{{ asset('images/social/youtube.svg') }}\" alt=\"YouTube\" width=\"20\"></a>
          </div>

          <div class=\"footer-bottom\">
            <p>&copy; Les Crudettes – Réalisation Atmedia</p>
          </div>
        </footer>

    </body>
</html>
", "base.html.twig", "C:\\Users\\dunis\\Documents\\Projet Webeol\\Webeol\\templates\\base.html.twig");
    }
}
