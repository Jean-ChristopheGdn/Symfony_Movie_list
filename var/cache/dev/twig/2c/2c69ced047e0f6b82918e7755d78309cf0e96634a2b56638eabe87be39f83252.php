<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_9abaf92c95a1e7cbe117cfdbc0561a55ddb6af20b849c77432100a67b31247f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"jumbotron text-center bg-white\">
    <h1>WHITE WIDOW</h1>
    <p>White Widow est une souche de cannabis Indica créée par le producteur de cannabis australien Scott « Shantibaba » 
    Blakey. Son origine proviendrait d'un croisement entre une femelle Sativa brésilienne et un mâle Sativa/Indica du Sud 
    de l'Inde.</p>
</div>
    <div class=\"container\">
      <h1>Haze</h1>
      <div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicateurs -->
        <ul class=\"carousel-indicators\">
          <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#demo\" data-slide-to=\"1\"></li>
          <li data-target=\"#demo\" data-slide-to=\"2\"></li>
        </ul>

        <!-- Carrousel -->
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <img src=\"https://www.pierre-giraud.com/bootstrap-carrousel-slide-1.jpg\" alt=\"Carrousel slide 1\" class=\"d-block w-100\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h4>Purple</h4>
            </div>
          </div>
          <div class=\"carousel-item\">
            <img src=\"https://www.pierre-giraud.com/bootstrap-carrousel-slide-2.jpg\" alt=\"Carrousel slide 2\" class=\"d-block w-100\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h4>Skunk</h4>
            </div>
          </div>
          <div class=\"carousel-item\">
            <img src=\"https://www.pierre-giraud.com/bootstrap-carrousel-slide-3.jpg\" alt=\"Carrousel slide 3\" class=\"d-block w-100\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h4>Berry White</h4>
            </div>
          </div>
        </div>

        <!-- Contrôles -->
        <a class=\"carousel-control-prev\" href=\"#demo\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Précédent</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#demo\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Suivant</span>
        </a>
      </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Homepage!{% endblock %}

{% block body %}
<div class=\"jumbotron text-center bg-white\">
    <h1>WHITE WIDOW</h1>
    <p>White Widow est une souche de cannabis Indica créée par le producteur de cannabis australien Scott « Shantibaba » 
    Blakey. Son origine proviendrait d'un croisement entre une femelle Sativa brésilienne et un mâle Sativa/Indica du Sud 
    de l'Inde.</p>
</div>
    <div class=\"container\">
      <h1>Haze</h1>
      <div id=\"demo\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicateurs -->
        <ul class=\"carousel-indicators\">
          <li data-target=\"#demo\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#demo\" data-slide-to=\"1\"></li>
          <li data-target=\"#demo\" data-slide-to=\"2\"></li>
        </ul>

        <!-- Carrousel -->
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <img src=\"https://www.pierre-giraud.com/bootstrap-carrousel-slide-1.jpg\" alt=\"Carrousel slide 1\" class=\"d-block w-100\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h4>Purple</h4>
            </div>
          </div>
          <div class=\"carousel-item\">
            <img src=\"https://www.pierre-giraud.com/bootstrap-carrousel-slide-2.jpg\" alt=\"Carrousel slide 2\" class=\"d-block w-100\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h4>Skunk</h4>
            </div>
          </div>
          <div class=\"carousel-item\">
            <img src=\"https://www.pierre-giraud.com/bootstrap-carrousel-slide-3.jpg\" alt=\"Carrousel slide 3\" class=\"d-block w-100\">
            <div class=\"carousel-caption d-none d-md-block\">
              <h4>Berry White</h4>
            </div>
          </div>
        </div>

        <!-- Contrôles -->
        <a class=\"carousel-control-prev\" href=\"#demo\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Précédent</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#demo\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Suivant</span>
        </a>
      </div>
    </div>

{% endblock %}
", "home/index.html.twig", "/home/val/code/BlaxFontaine/symfony_project/templates/home/index.html.twig");
    }
}
