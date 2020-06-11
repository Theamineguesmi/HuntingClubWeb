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

/* commentaire/edit.html.twig */
class __TwigTemplate_46d13d723aa38a4d661e085122ae83fe35cfae9be7b38e9981d259960821b293 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/edit.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "commentaire/edit.html.twig", 1);
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
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group\">
            <div class=\"form-text\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 8, $this->source); })()), "idArticle", [], "any", false, false, false, 8), 'label');
        echo "</div>
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 9, $this->source); })()), "idArticle", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control", "readonly" => "true"]]);
        echo "

            <div class=\"form-text\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 11, $this->source); })()), "idUser", [], "any", false, false, false, 11), 'label');
        echo "</div>
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 12, $this->source); })()), "idUser", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control", "readonly" => "true"]]);
        echo "

            <div class=\"form-text\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 14, $this->source); })()), "contenu", [], "any", false, false, false, 14), 'label');
        echo "</div>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 15, $this->source); })()), "contenu", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

            <div class=\"form-text\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 17, $this->source); })()), "dateAjout", [], "any", false, false, false, 17), 'label');
        echo "</div>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 18, $this->source); })()), "dateAjout", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "readonly" => "true"]]);
        echo "

            <div class=\"form-text\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 20, $this->source); })()), "dateModif", [], "any", false, false, false, 20), 'label');
        echo "</div>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 21, $this->source); })()), "dateModif", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "readonly" => "true"]]);
        echo "

            <div class=\"form-text\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 23, $this->source); })()), "nbjaime", [], "any", false, false, false, 23), 'label');
        echo "</div>

            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 25, $this->source); })()), "nbjaime", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "readonly" => "true"]]);
        echo "






<div class=\"form-group\">
<p></p>
    <input class=\"btn btn-info\" type=\"submit\" value=\"Edit\"/>

    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "


            <a class=\"btn btn-info\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_index");
        echo "\">Back to the list</a>

            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 41, $this->source); })()), 'form_start');
        echo "

        <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 44, $this->source); })()), 'form_end');
        echo "

     </div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commentaire/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 44,  152 => 41,  147 => 39,  141 => 36,  127 => 25,  122 => 23,  117 => 21,  113 => 20,  108 => 18,  104 => 17,  99 => 15,  95 => 14,  90 => 12,  86 => 11,  81 => 9,  77 => 8,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block body %}
    <div class=\"form-group\">

        {{ form_start(edit_form) }}
        <div class=\"form-group\">
            <div class=\"form-text\">{{ form_label(edit_form.idArticle)}}</div>
            {{ form_widget(edit_form.idArticle, {'attr':{'class':'form-control','readonly': 'true'}})}}

            <div class=\"form-text\">{{ form_label(edit_form.idUser)}}</div>
            {{ form_widget(edit_form.idUser, {'attr':{'class':'form-control','readonly': 'true'}})}}

            <div class=\"form-text\">{{ form_label(edit_form.contenu)}}</div>
            {{ form_widget(edit_form.contenu, {'attr':{'class':'form-control'}})}}

            <div class=\"form-text\">{{ form_label(edit_form.dateAjout)}}</div>
            {{ form_widget(edit_form.dateAjout, {'attr':{'class':'form-control','readonly': 'true'}})}}

            <div class=\"form-text\">{{ form_label(edit_form.dateModif)}}</div>
            {{ form_widget(edit_form.dateModif, {'attr':{'class':'form-control','readonly': 'true'}})}}

            <div class=\"form-text\">{{ form_label(edit_form.nbjaime)}}</div>

            {{ form_widget(edit_form.nbjaime, {'attr':{'class':'form-control','readonly': 'true'}})}}






<div class=\"form-group\">
<p></p>
    <input class=\"btn btn-info\" type=\"submit\" value=\"Edit\"/>

    {{ form_end(edit_form) }}


            <a class=\"btn btn-info\" href=\"{{ path('commentaire_index') }}\">Back to the list</a>

            {{ form_start(delete_form) }}

        <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}

     </div></div>
{% endblock %}
", "commentaire/edit.html.twig", "C:\\wamp64\\www\\Pi\\app\\Resources\\views\\commentaire\\edit.html.twig");
    }
}
