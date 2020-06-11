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

/* article/index.html.twig */
class __TwigTemplate_399ce67a3ead2fb37b37407e07a3a876fcfafbd2afe9a5b7dd37119a7912de08 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "article/index.html.twig", 1);
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
        echo "    <div class=\"card callout callout-info\" data-toggle=\"collapse\" href=\"#collapseExample\" style=\" right: 0px;\">
        <div class=\"card-header\">
            <h5 class=\"card-title\"> <i class=\"fas fa-info\"></i> Note:</h5>
            <div class=\"card-tools\">
                <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"collapse\" title=\"Collapse\">
                    <i class=\"fas fa-minus\"></i></button>
            </div></div>
        <div class=\"card-body\" style=\"display: block;\">
            <a href=";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_liste");
        echo ">Consuler le blog</a><br><br/>
            <p>Vous avez ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 13, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 13), "html", null, true);
        echo " Articles &nbsp;<br> Ici vous pouvez gérer vos <b> articles !</b></p>

        </div>
    </div>

    <div class=\"float-right\" align=\"right\">

        <div class=\"container\">
            <section class=\"content-header\">
                <div class=\"pagination pagination-sm m-0 float-left\" align=\"right\">
                    ";
        // line 23
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 23, $this->source); })()));
        echo "
                </div>
                <tr>
                    <td>
                        <a type=\"button\" class=\"btn btn-info\"  href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        echo "\" ><i class=\"fas fa-plus\"></i> &nbsp;\tNouveau Article</a>
                    </td>
                </tr>



            </section>

        </div>
        <div class=\"card\">

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th class=\"content-header\">";
        // line 41
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 41, $this->source); })()), "#", "bp.id");
        echo "</th>
                    <th class=\"content-header\">";
        // line 42
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 42, $this->source); })()), "Titre", "bp.titre");
        echo "</th>

                    <th style=\"width:400px\" class=\"content-header\">";
        // line 44
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 44, $this->source); })()), "Contenu", "bp.contenu");
        echo "</th>
                    <th  class=\"content-header\">";
        // line 45
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 45, $this->source); })()), "Ajouter", "bp.dateAjout");
        echo "</th>
                    <th  class=\"content-header\">";
        // line 46
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 46, $this->source); })()), "Modifier", "bp.dateModif");
        echo "</th>
                    <th style=\"width:200px\">Photopath</th>
                    <th  style=\"width:200px\" align=\"center\" class=\"align-content-sm-center text-center\"  >Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 53
            echo "                    <tr>
                        <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 56), 0, 500), "html", null, true);
            echo "</td>
                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateAjout", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateModif", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                        <td style=\"width:200px\">  <img class=\"img img-thumbnail\"  src=\"..\\..\\..\\web\\images\\";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "photopath", [], "any", false, false, false, 59), "html", null, true);
            echo "\"></td>
                        <td>

                            <ul>
                                <a class=\"btn bg-gradient-primary btn-sm\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\"><i class=\"fas fa-file\"></i></a>

                                <a class=\"btn bg-gradient-primary btn-sm\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">Editer</a>

                                <a class=\"btn bg-gradient-danger btn-sm\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\"><i class=\"fas fa-trash\"></i></a>

                            </ul>    </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </tbody>
            </table></div>

            <td>
                <section class=\"content-header\">
                    <div class=\"pagination pagination-sm m-0 float-left\" align=\"right\">
                        ";
        // line 78
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 78, $this->source); })()));
        echo "
                    </div>

                    <section>
            </td>
            <td>
                <section class=\"card\" style=\"width: 18rem;\">

                    ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_start');
        echo "

                    <div >
                        <span class=\"input-group-text\" id=\"addon-wrapping\">";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "nbco", [], "any", false, false, false, 89), 'label', ["label" => "Nombre commentaire par page"]);
        echo "</span>

                        <span class=\"input-group-text\" id=\"addon-wrapping\">";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "nbco", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "custom-select custom-select-sm"]]);
        echo "  &nbsp;   <input type=\"submit\" class=\"btn btn-info\" value=\"Create\" />
</span>
                    </div>
                    ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        echo "

                </section>
            </td>

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 94,  232 => 91,  227 => 89,  221 => 86,  210 => 78,  202 => 72,  191 => 67,  186 => 65,  181 => 63,  174 => 59,  170 => 58,  166 => 57,  162 => 56,  158 => 55,  152 => 54,  149 => 53,  145 => 52,  136 => 46,  132 => 45,  128 => 44,  123 => 42,  119 => 41,  102 => 27,  95 => 23,  82 => 13,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block body %}
    <div class=\"card callout callout-info\" data-toggle=\"collapse\" href=\"#collapseExample\" style=\" right: 0px;\">
        <div class=\"card-header\">
            <h5 class=\"card-title\"> <i class=\"fas fa-info\"></i> Note:</h5>
            <div class=\"card-tools\">
                <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"collapse\" title=\"Collapse\">
                    <i class=\"fas fa-minus\"></i></button>
            </div></div>
        <div class=\"card-body\" style=\"display: block;\">
            <a href={{ path('article_liste') }}>Consuler le blog</a><br><br/>
            <p>Vous avez {{ articles.getTotalItemCount }} Articles &nbsp;<br> Ici vous pouvez gérer vos <b> articles !</b></p>

        </div>
    </div>

    <div class=\"float-right\" align=\"right\">

        <div class=\"container\">
            <section class=\"content-header\">
                <div class=\"pagination pagination-sm m-0 float-left\" align=\"right\">
                    {{ knp_pagination_render(articles) }}
                </div>
                <tr>
                    <td>
                        <a type=\"button\" class=\"btn btn-info\"  href=\"{{ path('article_new') }}\" ><i class=\"fas fa-plus\"></i> &nbsp;\tNouveau Article</a>
                    </td>
                </tr>



            </section>

        </div>
        <div class=\"card\">

            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th class=\"content-header\">{{ knp_pagination_sortable(articles, '#', 'bp.id') }}</th>
                    <th class=\"content-header\">{{ knp_pagination_sortable(articles, 'Titre', 'bp.titre') }}</th>

                    <th style=\"width:400px\" class=\"content-header\">{{ knp_pagination_sortable(articles, 'Contenu', 'bp.contenu') }}</th>
                    <th  class=\"content-header\">{{ knp_pagination_sortable(articles, 'Ajouter', 'bp.dateAjout') }}</th>
                    <th  class=\"content-header\">{{ knp_pagination_sortable(articles, 'Modifier', 'bp.dateModif') }}</th>
                    <th style=\"width:200px\">Photopath</th>
                    <th  style=\"width:200px\" align=\"center\" class=\"align-content-sm-center text-center\"  >Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for article in articles %}
                    <tr>
                        <td><a href=\"{{ path('article_show', { 'id': article.id }) }}\">{{ article.id }}</a></td>
                        <td>{{ article.titre }}</td>
                        <td>{{ article.contenu|slice(0, 500) }}</td>
                        <td>{{ article.dateAjout }}</td>
                        <td>{{ article.dateModif }}</td>
                        <td style=\"width:200px\">  <img class=\"img img-thumbnail\"  src=\"..\\..\\..\\web\\images\\{{article.photopath}}\"></td>
                        <td>

                            <ul>
                                <a class=\"btn bg-gradient-primary btn-sm\" href=\"{{ path('article_show', { 'id': article.id }) }}\"><i class=\"fas fa-file\"></i></a>

                                <a class=\"btn bg-gradient-primary btn-sm\" href=\"{{ path('article_edit', { 'id': article.id }) }}\">Editer</a>

                                <a class=\"btn bg-gradient-danger btn-sm\" href=\"{{ path('article_delete', { 'id': article.id }) }}\"><i class=\"fas fa-trash\"></i></a>

                            </ul>    </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table></div>

            <td>
                <section class=\"content-header\">
                    <div class=\"pagination pagination-sm m-0 float-left\" align=\"right\">
                        {{ knp_pagination_render(articles) }}
                    </div>

                    <section>
            </td>
            <td>
                <section class=\"card\" style=\"width: 18rem;\">

                    {{ form_start(form) }}

                    <div >
                        <span class=\"input-group-text\" id=\"addon-wrapping\">{{ form_label(form.nbco,'Nombre commentaire par page')}}</span>

                        <span class=\"input-group-text\" id=\"addon-wrapping\">{{ form_widget(form.nbco, {'attr':{'class':'custom-select custom-select-sm'}})}}  &nbsp;   <input type=\"submit\" class=\"btn btn-info\" value=\"Create\" />
</span>
                    </div>
                    {{ form_end(form) }}

                </section>
            </td>

    </div>


{% endblock %}
", "article/index.html.twig", "C:\\wamp64\\www\\Pi\\app\\Resources\\views\\article\\index.html.twig");
    }
}
