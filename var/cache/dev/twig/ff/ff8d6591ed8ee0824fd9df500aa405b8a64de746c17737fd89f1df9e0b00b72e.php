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

/* commentaire/index.html.twig */
class __TwigTemplate_49be0e5c313cf5100101e4d7723476ae516a206f1109ae7ca9bd74e9a9731037 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "commentaire/index.html.twig", 1);
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
        echo "
    <div class=\"card callout callout-info\" data-toggle=\"collapse\" href=\"#collapseExample\" style=\" right: 0px;\">
        <div class=\"card-header\">
            <h5 class=\"card-title\"> <i class=\"fas fa-info\"></i> Note:</h5>
        <div class=\"card-tools\">
            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"collapse\" title=\"Collapse\">
                <i class=\"fas fa-minus\"></i></button>
        </div></div>
        <div class=\"card-body\" style=\"display: block;\">
            Vous avez <b>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 13, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 13), "html", null, true);
        echo " Commentaires </b> &nbsp;            <br/>


            <p>Ici vous pouvez gérer les <u> Commentaires des Utilisateurs !</u></p>

        </div>
    </div>

    <div class=\"float-right\" align=\"right\">
        <div class=\"container\">
            <section class=\"content-header\">
                <div class=\"pagination pagination-sm m-0 float-left\" align=\"right\">
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 25, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 26
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 26)) {
                // line 27
                echo "                    ";
                echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 27, $this->source); })()));
                echo "
                        ";
            }
            // line 29
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </div>

                <section>
                <tr>
                    <td>
                        <a type=\"button\" class=\"btn btn-info\"  href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_new");
        echo "\" ><i class=\"fas fa-plus\"></i> &nbsp;Nouveau Commentaire</a>
                    </td>




                </tr>

                </section>
            </section>
        </div>
    <div class=\"card\">
    <table class=\"table table-hover \"><br>

        <thead>
            <tr>
                <th class=\"content-header\">";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 51, $this->source); })()), "#", "bp.id");
        echo "</th>
                <th class=\"content-header\">Article</th>
                <th class=\"content-header\">Utilisateur</th>
                <th style=\"width:400px\" class=\"content-header\">Contenu</th>
                <th  class=\"content-header\">";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 55, $this->source); })()), "Ajouter", "bp.dateAjout");
        echo "</th>
                <th  class=\"content-header\">";
        // line 56
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 56, $this->source); })()), "Modifier", "bp.dateModif");
        echo "</th>
                <th class=\"content-header\">";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 57, $this->source); })()), "Likes", "bp.nbjaime");
        echo "</th>
                <th  style=\"width:200px\" align=\"center\" class=\"align-content-sm-center text-center\" >Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 63
            echo "            <tr>
                <td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_show", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "</a></td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentaire"], "idArticle", [], "any", false, false, false, 65), "titre", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "idUser", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "dateAjout", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "dateModif", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "nbjaime", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                <td>

        <ul>
                  <a class=\"btn bg-gradient-primary btn-sm\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_show", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\"><i class=\"fas fa-file\"></i></a>

                   <a class=\"btn bg-gradient-primary btn-sm\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\"><i class=\"fas fa-pencil-alt\"></i></a>

           <a class=\"btn bg-gradient-danger btn-sm\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\"><i class=\"fas fa-trash\"></i></a>

        </ul>    </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </tbody>
    </table></div>
        <tr>
            <td>
                <section class=\"content-header\">
                    <div class=\"pagination pagination-sm m-0 float-left\" align=\"right\">
                        ";
        // line 89
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 89, $this->source); })()));
        echo "
                    </div>

                    <section>
            </td>
            <td>
                <section class=\"card\" style=\"width: 18rem;\">

                    ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'form_start');
        echo "

                    <div >
                        <span class=\"input-group-text\" id=\"addon-wrapping\">";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "nbco", [], "any", false, false, false, 100), 'label', ["label" => "Nombre commentaire par page"]);
        echo "</span>

                        <span class=\"input-group-text\" id=\"addon-wrapping\">";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "nbco", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "custom-select custom-select-sm"]]);
        echo "  &nbsp;   <input type=\"submit\" class=\"btn btn-info\" value=\"Create\" />
</span>
                    </div>
                    ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_end');
        echo "

                </section>
            </td>
        </tr>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commentaire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 105,  274 => 102,  269 => 100,  263 => 97,  252 => 89,  244 => 83,  233 => 78,  228 => 76,  223 => 74,  216 => 70,  212 => 69,  208 => 68,  204 => 67,  200 => 66,  196 => 65,  190 => 64,  187 => 63,  183 => 62,  175 => 57,  171 => 56,  167 => 55,  160 => 51,  141 => 35,  134 => 30,  120 => 29,  114 => 27,  111 => 26,  94 => 25,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
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
            Vous avez <b>{{ commentaires.getTotalItemCount }} Commentaires </b> &nbsp;            <br/>


            <p>Ici vous pouvez gérer les <u> Commentaires des Utilisateurs !</u></p>

        </div>
    </div>

    <div class=\"float-right\" align=\"right\">
        <div class=\"container\">
            <section class=\"content-header\">
                <div class=\"pagination pagination-sm m-0 float-left\" align=\"right\">
                    {% for commentaire in commentaires  %}
                        {% if loop.first %}
                    {{ knp_pagination_render(commentaires) }}
                        {% endif %}
                    {% endfor %}
                </div>

                <section>
                <tr>
                    <td>
                        <a type=\"button\" class=\"btn btn-info\"  href=\"{{ path('commentaire_new') }}\" ><i class=\"fas fa-plus\"></i> &nbsp;Nouveau Commentaire</a>
                    </td>




                </tr>

                </section>
            </section>
        </div>
    <div class=\"card\">
    <table class=\"table table-hover \"><br>

        <thead>
            <tr>
                <th class=\"content-header\">{{ knp_pagination_sortable(commentaires, '#', 'bp.id') }}</th>
                <th class=\"content-header\">Article</th>
                <th class=\"content-header\">Utilisateur</th>
                <th style=\"width:400px\" class=\"content-header\">Contenu</th>
                <th  class=\"content-header\">{{ knp_pagination_sortable(commentaires, 'Ajouter', 'bp.dateAjout') }}</th>
                <th  class=\"content-header\">{{ knp_pagination_sortable(commentaires, 'Modifier', 'bp.dateModif') }}</th>
                <th class=\"content-header\">{{ knp_pagination_sortable(commentaires, 'Likes', 'bp.nbjaime') }}</th>
                <th  style=\"width:200px\" align=\"center\" class=\"align-content-sm-center text-center\" >Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for commentaire in commentaires  %}
            <tr>
                <td><a href=\"{{ path('commentaire_show', { 'id': commentaire.id }) }}\">{{ commentaire.id }}</a></td>
                <td>{{ commentaire.idArticle.titre }}</td>
                <td>{{ commentaire.idUser }}</td>
                <td>{{ commentaire.contenu }}</td>
                <td>{{ commentaire.dateAjout }}</td>
                <td>{{ commentaire.dateModif }}</td>
                <td>{{ commentaire.nbjaime}}</td>
                <td>

        <ul>
                  <a class=\"btn bg-gradient-primary btn-sm\" href=\"{{ path('commentaire_show', { 'id': commentaire.id }) }}\"><i class=\"fas fa-file\"></i></a>

                   <a class=\"btn bg-gradient-primary btn-sm\" href=\"{{ path('commentaire_edit', { 'id': commentaire.id }) }}\"><i class=\"fas fa-pencil-alt\"></i></a>

           <a class=\"btn bg-gradient-danger btn-sm\" href=\"{{ path('commentaire_delete', { 'id': commentaire.id }) }}\"><i class=\"fas fa-trash\"></i></a>

        </ul>    </td>
            </tr>
        {% endfor %}
        </tbody>
    </table></div>
        <tr>
            <td>
                <section class=\"content-header\">
                    <div class=\"pagination pagination-sm m-0 float-left\" align=\"right\">
                        {{ knp_pagination_render(commentaires) }}
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
        </tr>
    </div>


{% endblock %}
", "commentaire/index.html.twig", "C:\\wamp64\\www\\Pi\\app\\Resources\\views\\commentaire\\index.html.twig");
    }
}
