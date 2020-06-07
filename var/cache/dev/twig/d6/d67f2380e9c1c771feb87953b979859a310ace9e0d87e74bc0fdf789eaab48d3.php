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

/* article/edit.html.twig */
class __TwigTemplate_ba1762bd3ddf8a5f258c18b311a1b2b2a82b54c53b98c0009f7c5b896cb312d3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "article/edit.html.twig", 1);
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
        echo "    <div class=\"form-group\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "


        <div class=\"form-text\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), 'label');
        echo "</div>
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "



        <div class=\"form-text\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 13, $this->source); })()), "contenu", [], "any", false, false, false, 13), 'label');
        echo "</div>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 14, $this->source); })()), "contenu", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        <div class=\"form-text\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 16, $this->source); })()), "dateAjout", [], "any", false, false, false, 16), 'label');
        echo "</div>

        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\"><i class=\"far fa-calendar-alt\"></i></span>
            </div>

            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 23, $this->source); })()), "dateAjout", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-text\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 25, $this->source); })()), "dateModif", [], "any", false, false, false, 25), 'label');
        echo "</div>

        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\"><i class=\"far fa-calendar-alt\"></i></span>
            </div>

            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 32, $this->source); })()), "dateModif", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-text\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 34, $this->source); })()), "photopath", [], "any", false, false, false, 34), 'label');
        echo "</div>
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 35, $this->source); })()), "photopath", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "foo"]]);
        echo "







        <div class=\"form-group\">
            <p></p>
            <input class=\"btn btn-info\" type=\"submit\" value=\"Modifier\"/>

            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 47, $this->source); })()), 'form_end');
        echo "

            <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">



        </div></div>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  131 => 35,  127 => 34,  122 => 32,  112 => 25,  107 => 23,  97 => 16,  92 => 14,  88 => 13,  81 => 9,  77 => 8,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block body %}
    <div class=\"form-group\">
        {{ form_start(edit_form) }}


        <div class=\"form-text\">{{ form_label(edit_form.titre)}}</div>
        {{ form_widget(edit_form.titre, {'attr':{'class':'form-control'}})}}



        <div class=\"form-text\">{{ form_label(edit_form.contenu)}}</div>
        {{ form_widget(edit_form.contenu,{'attr':{'class':'form-control'} })}}

        <div class=\"form-text\">{{ form_label(edit_form.dateAjout)}}</div>

        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\"><i class=\"far fa-calendar-alt\"></i></span>
            </div>

            {{ form_widget(edit_form.dateAjout,{'attr':{'class':'form-control'} })}}
        </div>
        <div class=\"form-text\">{{ form_label(edit_form.dateModif)}}</div>

        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\"><i class=\"far fa-calendar-alt\"></i></span>
            </div>

            {{ form_widget(edit_form.dateModif,{'attr':{'class':'form-control'} })}}
        </div>
        <div class=\"form-text\">{{ form_label(edit_form.photopath)}}</div>
        {{ form_widget(edit_form.photopath,{'attr':{'class':'foo'} })}}







        <div class=\"form-group\">
            <p></p>
            <input class=\"btn btn-info\" type=\"submit\" value=\"Modifier\"/>

            {{ form_end(edit_form) }}

            <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">



        </div></div>
    

{% endblock %}
", "article/edit.html.twig", "C:\\wamp64\\www\\Pi\\app\\Resources\\views\\article\\edit.html.twig");
    }
}
