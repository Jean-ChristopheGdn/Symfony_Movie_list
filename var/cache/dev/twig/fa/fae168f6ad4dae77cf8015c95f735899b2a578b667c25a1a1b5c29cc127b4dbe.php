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

/* search/index.html.twig */
class __TwigTemplate_7b6152a8e5fd6416ce88e91758a9056fc31691681a122eed7393aaf5f00bf75c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/index.html.twig", 1);
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

        echo "Look for movies!";
        
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
        echo "
<div class=\"container\">
  <div class=\"jumbotron text-center\">
    <h1>Welcome to the movie search engine</h1>
    <form action='' method='POST' class=\"form-inline d-flex justify-content-center md-form form-sm mt-0\">
      <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
      <input name=\"keyword\" class=\"form-control form-control-sm ml-3 w-75\" type=\"text\" placeholder=\"Look for a movie...\"
        aria-label=\"Search\">
    </form>
  </div>

  <div class=\"row row-cols-1 row-cols-md-3\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 19
            echo "      <div class=\"col mb-4\">
        <div class=\"card h-100\">
          <!-- Card image -->
          <div class=\"view overlay\">
            <img class=\"card-img-top\" src=\"https://image.tmdb.org/t/p/w500";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "poster_path", [], "array", false, false, false, 23), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "array", false, false, false, 23), "html", null, true);
            echo "\">
            <a>
              <div class=\"mask rgba-white-slight\"></div>
            </a>
          </div>
          <!-- Social buttons -->
          <div class=\"card-share\">
            <!-- Button action -->
            <a class=\"btn-floating btn-action share-toggle ml-auto mr-4 float-right\"><i class=\"fas fa-star\"></i></a>
          </div>
          <!-- Card content -->
          <div class=\"card-body\">
            <!-- Title -->
            <h4 class=\"card-title\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "array", false, false, false, 36), "html", null, true);
            echo "</h4>
            <hr>
            <!-- Text -->
            <p class=\"card-text\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "overview", [], "array", false, false, false, 39), "html", null, true);
            echo "</p>
            ";
            // line 41
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_show", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "array", false, false, false, 41)]), "html", null, true);
            echo "\"><button class=\"btn btn-dark\">Read more</button></a>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 41,  136 => 39,  130 => 36,  112 => 23,  106 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Look for movies!{% endblock %}

{% block body %}

<div class=\"container\">
  <div class=\"jumbotron text-center\">
    <h1>Welcome to the movie search engine</h1>
    <form action='' method='POST' class=\"form-inline d-flex justify-content-center md-form form-sm mt-0\">
      <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
      <input name=\"keyword\" class=\"form-control form-control-sm ml-3 w-75\" type=\"text\" placeholder=\"Look for a movie...\"
        aria-label=\"Search\">
    </form>
  </div>

  <div class=\"row row-cols-1 row-cols-md-3\">
    {% for movie in movies %}
      <div class=\"col mb-4\">
        <div class=\"card h-100\">
          <!-- Card image -->
          <div class=\"view overlay\">
            <img class=\"card-img-top\" src=\"https://image.tmdb.org/t/p/w500{{movie['poster_path']}}\" alt=\"{{movie['title']}}\">
            <a>
              <div class=\"mask rgba-white-slight\"></div>
            </a>
          </div>
          <!-- Social buttons -->
          <div class=\"card-share\">
            <!-- Button action -->
            <a class=\"btn-floating btn-action share-toggle ml-auto mr-4 float-right\"><i class=\"fas fa-star\"></i></a>
          </div>
          <!-- Card content -->
          <div class=\"card-body\">
            <!-- Title -->
            <h4 class=\"card-title\">{{movie['title']}}</h4>
            <hr>
            <!-- Text -->
            <p class=\"card-text\">{{movie['overview']}}</p>
            {# <button class=\"btn\"></button> #}
            <a href=\"{{ path('search_show', {'id': movie['id']}) }}\"><button class=\"btn btn-dark\">Read more</button></a>
          </div>
        </div>
      </div>
    {% endfor %}
{% endblock %}


", "search/index.html.twig", "/home/val/code/BlaxFontaine/symfony_project/templates/search/index.html.twig");
    }
}
