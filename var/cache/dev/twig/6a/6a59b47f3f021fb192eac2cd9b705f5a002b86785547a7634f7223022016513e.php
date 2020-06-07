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

/* article/frontShow.html.twig */
class __TwigTemplate_53eb4f020e3ac0818915e44b05aab48c3f7e5ee62e8f9d67eb5335ee2aadb276 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/frontShow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/frontShow.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/frontShow.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Blog
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 9, $this->source); })()), true));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "<div class=\"container\">
<div class=\"row\">
        <div class=\"col-lg-9\">
                <div class=\"post mb-5\">
                        <h2><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_post", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 14), "html", null, true);
            echo "</a></h2>

                        <p class=\"date-comments\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_post", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\"><i class=\"fa fa-calendar-o\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateajout", [], "any", false, false, false, 16), "html", null, true);
            echo "</a><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_post", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">
                                        </a></p>
                        <div class=\"image\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_post", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\"> <img class=\"img-fluid \"  src=\"..\\..\\..\\web\\images\\";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "photopath", [], "any", false, false, false, 18), "html", null, true);
            echo "\"></a></div>
                       <br> <p class=\"post-intro\" style=\"max-height:300px;max-width:1500px;;\">";
            // line 19
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 19)), 0, 500), "html", null, true);
            echo "</p>
                        <p class=\"read-more\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_post", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Continue reading</a></p>
                </div>
                </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    <nav class=\"  text-align: center;\">
        <ul class=\"pagination d-flex justify-content-center mb-5\">
            ";
        // line 27
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 27, $this->source); })()));
        echo "</ul>
    </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/frontShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 27,  140 => 25,  129 => 20,  125 => 19,  119 => 18,  110 => 16,  103 => 14,  97 => 10,  93 => 9,  90 => 8,  80 => 7,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}
Blog
{% endblock %}
{% block body %}

{% for article in articles |reverse(true) %}
<div class=\"container\">
<div class=\"row\">
        <div class=\"col-lg-9\">
                <div class=\"post mb-5\">
                        <h2><a href=\"{{ path('article_post', { 'id': article.id }) }}\">{{ article.titre }}</a></h2>

                        <p class=\"date-comments\"><a href=\"{{ path('article_post', { 'id': article.id }) }}\"><i class=\"fa fa-calendar-o\"></i> {{ article.dateajout }}</a><a href=\"{{ path('article_post', { 'id': article.id }) }}\">
                                        </a></p>
                        <div class=\"image\"><a href=\"{{ path('article_post', { 'id': article.id }) }}\"> <img class=\"img-fluid \"  src=\"..\\..\\..\\web\\images\\{{article.photopath}}\"></a></div>
                       <br> <p class=\"post-intro\" style=\"max-height:300px;max-width:1500px;;\">{{ article.contenu|striptags|slice(0, 500)   }}</p>
                        <p class=\"read-more\"><a href=\"{{ path('article_post', { 'id': article.id }) }}\" class=\"btn btn-outline-primary\">Continue reading</a></p>
                </div>
                </div>
        </div>
        {% endfor %}
    <nav class=\"  text-align: center;\">
        <ul class=\"pagination d-flex justify-content-center mb-5\">
            {{ knp_pagination_render(articles) }}</ul>
    </nav>
        {% endblock %}
", "article/frontShow.html.twig", "C:\\wamp64\\www\\Pi\\app\\Resources\\views\\article\\frontShow.html.twig");
    }
}
