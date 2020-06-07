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

/* article/show.html.twig */
class __TwigTemplate_4ea574e9a6330a057388ca6027d087c2c59a335a60f63db8de0e688349dc46ce extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table>
        <tbody>
        <div class=\"card\">

            <h3 class=\"card-header\">ID</h3>
            <div class=\"card-body\">
                ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "
            </div>
        </div>&nbsp;&nbsp;
        <div class=\"card\">
            <h3 class=\"card-header\">titre</h3>
            <div class=\"card-body\">
                ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        echo "
            </div>
        </div>&nbsp;&nbsp;

        </div>&nbsp;&nbsp;

        <div class=\"card\">

            <h3 class=\"card-header\">Dateajout</h3>
            <div class=\"card-body\">
                ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 26, $this->source); })()), "dateAjout", [], "any", false, false, false, 26), "html", null, true);
        echo "
            </div>
        </div>&nbsp;&nbsp;


        <div class=\"card\">

            <h3 class=\"card-header \">Datemodif</h3>
            <div class=\"card-body\">
                ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "dateModif", [], "any", false, false, false, 35), "html", null, true);
        echo "
            </div>
        </div>&nbsp;&nbsp;


        <div class=\"card\">

            <h3 class=\"card-header\">photo</h3>
            <div class=\"card-body\">
                ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 44, $this->source); })()), "photopath", [], "any", false, false, false, 44), "html", null, true);
        echo "
            </div>
        </div>&nbsp;&nbsp;</tbody>
        <br><tbody><tr><td>
                <div class=\"card\">

                    <h3 class=\"card-header\">Contenu</h3>
                    <div class=\"card-body\">
                        ";
        // line 52
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 52, $this->source); })()), "contenu", [], "any", false, false, false, 52);
        echo "
                    </div>
                </div></td></tr></tbody>
        <!-- /.card-body -->




        </div>
        </tbody>
    </table>
    <br>
    &nbsp;&nbsp;
    <a  class=\"btn btn-info\"  href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\">Retour a la liste</a> &nbsp;

    <a  class=\"btn btn-info\"  href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
        echo "\">Modifier</a>&nbsp;

    ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 69, $this->source); })()), 'form_start');
        echo "
    <input type=\"button\" class=\"btn btn-danger\"  type=\"submit\" value=\"Supprimer\">
    ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 71,  159 => 69,  154 => 67,  149 => 65,  133 => 52,  122 => 44,  110 => 35,  98 => 26,  85 => 16,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block body %}
    <table>
        <tbody>
        <div class=\"card\">

            <h3 class=\"card-header\">ID</h3>
            <div class=\"card-body\">
                {{ article.id }}
            </div>
        </div>&nbsp;&nbsp;
        <div class=\"card\">
            <h3 class=\"card-header\">titre</h3>
            <div class=\"card-body\">
                {{ article.titre }}
            </div>
        </div>&nbsp;&nbsp;

        </div>&nbsp;&nbsp;

        <div class=\"card\">

            <h3 class=\"card-header\">Dateajout</h3>
            <div class=\"card-body\">
                {{ article.dateAjout }}
            </div>
        </div>&nbsp;&nbsp;


        <div class=\"card\">

            <h3 class=\"card-header \">Datemodif</h3>
            <div class=\"card-body\">
                {{ article.dateModif }}
            </div>
        </div>&nbsp;&nbsp;


        <div class=\"card\">

            <h3 class=\"card-header\">photo</h3>
            <div class=\"card-body\">
                {{ article.photopath }}
            </div>
        </div>&nbsp;&nbsp;</tbody>
        <br><tbody><tr><td>
                <div class=\"card\">

                    <h3 class=\"card-header\">Contenu</h3>
                    <div class=\"card-body\">
                        {{ article.contenu|raw }}
                    </div>
                </div></td></tr></tbody>
        <!-- /.card-body -->




        </div>
        </tbody>
    </table>
    <br>
    &nbsp;&nbsp;
    <a  class=\"btn btn-info\"  href=\"{{ path('article_index') }}\">Retour a la liste</a> &nbsp;

    <a  class=\"btn btn-info\"  href=\"{{ path('article_edit', { 'id': article.id }) }}\">Modifier</a>&nbsp;

    {{ form_start(delete_form) }}
    <input type=\"button\" class=\"btn btn-danger\"  type=\"submit\" value=\"Supprimer\">
    {{ form_end(delete_form) }}


{% endblock %}
", "article/show.html.twig", "C:\\wamp64\\www\\Pi\\app\\Resources\\views\\article\\show.html.twig");
    }
}
