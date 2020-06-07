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

/* article/frontPost.html.twig */
class __TwigTemplate_18a0b00c9b2268fd26f3ca63ce368d2d9e35c9dd1a40c40b8b6e6ad16dfc0f7c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/frontPost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/frontPost.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/frontPost.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 2, $this->source); })()), "titre", [], "any", false, false, false, 2), "html", null, true);
        echo " | CODEHUNT ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
    <div class=\"container\" xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"row\"> </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <nav aria-label=\"breadcrumb\" class=\"d-flex justify-content-center\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"index-2.html\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_liste");
        echo "\">Blog</a></li>
                        <li aria-current=\"page\" class=\"breadcrumb-item active\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "titre", [], "any", false, false, false, 13), "html", null, true);
        echo "</li>
                    </ol>
                </nav>
                <div class=\"row page-top\">
                    <div class=\"col-md-8 mx-auto text-center\">
                        <h1>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), "html", null, true);
        echo "</h1>
                        ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "                        <a class=\"btn bg-gradient-primary btn-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">Editer</a>
                        ";
        }
        // line 22
        echo "                        <p class=\"author-date-top\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "dateajout", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                        <img class=\"img-fluid\"  src=\"..\\..\\..\\web\\images\\";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "photopath", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
                        <br/>
                        <br/>
                        <br/>
                        <br/>


                    </div>
                </div>
            </div>
            <div class=\"col-lg-9\"\">
            <p align=\"left\">";
        // line 34
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 34, $this->source); })()), "contenu", [], "any", false, false, false, 34);
        echo "</p>
        </div>
        </div>
        <div class=\"row\">
            <div id=\"blog-post\" class=\"col-lg-9\">
                <div id=\"post-content\">




                <!-- /#post-content-->


                    <div id=\"comments\">
                        ";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 49
            echo "
                        ";
            // line 50
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_start');
            echo "
                        <div class=\"form-group\">


                            <div class=\"col-md-12 text-right\">
                                <div >

                                    ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "contenu", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                </div><br/>
                                <div>
                                <button type=\"submit\" class=\"btn btn-outline-primary\" style=\"right: 100px;\" value=\"Create\" /> Post comment</button
                            </div>

                            <div class=\"col-md-12 text-right\" align=\"right\"  >
                            </div>
                            </div>


                            ";
            // line 68
            if ((true == true)) {
                // line 69
                echo "                                ";
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "nbjaime", [], "any", false, false, false, 69), "setRendered", [], "method", false, false, false, 69);
                // line 70
                echo "                                ";
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "dateAjout", [], "any", false, false, false, 70), "setRendered", [], "method", false, false, false, 70);
                // line 71
                echo "                                ";
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "idUser", [], "any", false, false, false, 71), "setRendered", [], "method", false, false, false, 71);
                // line 72
                echo "                                ";
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "idArticle", [], "any", false, false, false, 72), "setRendered", [], "method", false, false, false, 72);
                // line 73
                echo "                                ";
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "dateModif", [], "any", false, false, false, 73), "setRendered", [], "method", false, false, false, 73);
                // line 74
                echo "

                            ";
            }
            // line 77
            echo "


                        </div>
                        ";
            // line 81
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
            echo "
                        ";
        } else {
            // line 82
            echo " <!-- ken mech co !-->
                        <div class=\"callout-info\">





                            <span href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\" class=\"required\"><h5  for=\"comment\">
                                    <a href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Connectez-vous pour commenter !</a></h5></span>
                            </div><br/><br/>

                        ";
        }
        // line 94
        echo "
                        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $context["commentaire"], true));
        $context['_iterated'] = false;
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
            // line 96
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 96)) {
                // line 97
                echo "                                <h4>Nombre de commentaire : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 97), "html", null, true);
                echo "</h4>


                            ";
            }
            // line 101
            echo "                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 102
            echo "                            <h4>Soyez le premier à commenter </h4>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $context["commentaire"], true));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 105
            echo "
                            ";
            // line 106
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 107
                echo "
                            <div class=\"row comment\">                                <a type=\"like\"  href=\"?like=1&comid=";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 108), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-circle-up\"></i></a><br>&nbsp;

                                <h1>";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "nbjaime", [], "any", false, false, false, 110), "html", null, true);
                echo "</h1>
                                <a type=\"like\"  href=\"?like=-1&comid=";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 111), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-circle-down\"></i></a>
                                <div class=\"col-md-3 col-lg-2 text-center text-md-left\">
                            ";
            } else {
                // line 114
                echo "                                    <div class=\"row comment\">
                                        <a type=\"like\"  href=\"";
                // line 115
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
                echo "\"><i class=\"fa fa-chevron-circle-up\"></i></a><br>&nbsp;

                                        <h1>";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "nbjaime", [], "any", false, false, false, 117), "html", null, true);
                echo "</h1>
                                        <a type=\"like\"  href=\"";
                // line 118
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
                echo "\"><i class=\"fa fa-chevron-circle-down\"></i></a>
                                        <div class=\"col-md-3 col-lg-2 text-center text-md-left\">
                            ";
            }
            // line 121
            echo "
                          <div class=\"group-text\" > <h5>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "idUser", [], "any", false, false, false, 122), "html", null, true);
            echo "</h5> </div>
                            <p class=\"posted\"><i class=\"fa fa-clock-o\"></i>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "dateAjout", [], "any", false, false, false, 123), "html", null, true);
            echo "</p>
                            <p>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 124), "html", null, true);
            echo "</p>



                                    ";
            // line 128
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 129
                echo "                                    ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129), "username", [], "any", false, false, false, 129) == twig_get_attribute($this->env, $this->source, $context["commentaire"], "idUser", [], "any", false, false, false, 129)) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") == false))) {
                    // line 130
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_deleteFront", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 130)]), "html", null, true);
                    echo "\">Delete</a>

                                        ";
                }
                // line 133
                echo "
                            ";
                // line 134
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 135
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_deleteFront", ["id" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 135)]), "html", null, true);
                    echo "\">Delete</a>
                            ";
                }
                // line 137
                echo "                                    ";
            }
            // line 138
            echo "
                        </div>
                    </div>





                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "
                        </div>
                    <!-- /.comment-->

                    </div>
                    <!-- /.comment-->
                </div>
                <!-- /#comments-->

                </div>

            </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/frontPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 147,  384 => 138,  381 => 137,  375 => 135,  373 => 134,  370 => 133,  363 => 130,  360 => 129,  358 => 128,  351 => 124,  347 => 123,  343 => 122,  340 => 121,  334 => 118,  330 => 117,  325 => 115,  322 => 114,  316 => 111,  312 => 110,  307 => 108,  304 => 107,  302 => 106,  299 => 105,  294 => 104,  287 => 102,  274 => 101,  266 => 97,  263 => 96,  245 => 95,  242 => 94,  235 => 90,  231 => 89,  222 => 82,  217 => 81,  211 => 77,  206 => 74,  203 => 73,  200 => 72,  197 => 71,  194 => 70,  191 => 69,  189 => 68,  175 => 57,  165 => 50,  162 => 49,  160 => 48,  143 => 34,  129 => 23,  124 => 22,  118 => 20,  116 => 19,  112 => 18,  104 => 13,  100 => 12,  90 => 4,  80 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} {{ article.titre }} | CODEHUNT {% endblock %}
{% block body %}

    <div class=\"container\" xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"row\"> </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <nav aria-label=\"breadcrumb\" class=\"d-flex justify-content-center\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"index-2.html\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('article_liste')}}\">Blog</a></li>
                        <li aria-current=\"page\" class=\"breadcrumb-item active\">{{ article.titre }}</li>
                    </ol>
                </nav>
                <div class=\"row page-top\">
                    <div class=\"col-md-8 mx-auto text-center\">
                        <h1>{{ article.titre }}</h1>
                        {% if is_granted('ROLE_ADMIN') %}
                        <a class=\"btn bg-gradient-primary btn-sm\" href=\"{{ path('article_edit', { 'id': article.id }) }}\">Editer</a>
                        {% endif %}
                        <p class=\"author-date-top\">{{ article.dateajout }}</p>
                        <img class=\"img-fluid\"  src=\"..\\..\\..\\web\\images\\{{article.photopath}}\">
                        <br/>
                        <br/>
                        <br/>
                        <br/>


                    </div>
                </div>
            </div>
            <div class=\"col-lg-9\"\">
            <p align=\"left\">{{ article.contenu|raw  }}</p>
        </div>
        </div>
        <div class=\"row\">
            <div id=\"blog-post\" class=\"col-lg-9\">
                <div id=\"post-content\">




                <!-- /#post-content-->


                    <div id=\"comments\">
                        {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}

                        {{ form_start(form) }}
                        <div class=\"form-group\">


                            <div class=\"col-md-12 text-right\">
                                <div >

                                    {{ form_widget(form.contenu, {'attr':{'class':'form-control'}})}}
                                </div><br/>
                                <div>
                                <button type=\"submit\" class=\"btn btn-outline-primary\" style=\"right: 100px;\" value=\"Create\" /> Post comment</button
                            </div>

                            <div class=\"col-md-12 text-right\" align=\"right\"  >
                            </div>
                            </div>


                            {% if true == true %}
                                {% do form.nbjaime.setRendered() %}
                                {% do form.dateAjout.setRendered() %}
                                {% do form.idUser.setRendered() %}
                                {% do form.idArticle.setRendered() %}
                                {% do form.dateModif.setRendered() %}


                            {% endif %}



                        </div>
                        {{ form_end(form) }}
                        {% else %} <!-- ken mech co !-->
                        <div class=\"callout-info\">





                            <span href=\"{{ path('fos_user_security_login') }}\" class=\"required\"><h5  for=\"comment\">
                                    <a href=\"{{ path('fos_user_security_login') }}\">Connectez-vous pour commenter !</a></h5></span>
                            </div><br/><br/>

                        {% endif %}

                        {% for commentaire in commentaire |reverse(true) %}
                            {% if loop.first %}
                                <h4>Nombre de commentaire : {{loop.length}}</h4>


                            {% endif %}
                        {% else %}
                            <h4>Soyez le premier à commenter </h4>
                        {% endfor %}
                        {% for commentaire in commentaire |reverse(true) %}

                            {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}

                            <div class=\"row comment\">                                <a type=\"like\"  href=\"?like=1&comid={{commentaire.id}}\"><i class=\"fa fa-chevron-circle-up\"></i></a><br>&nbsp;

                                <h1>{{ commentaire.nbjaime }}</h1>
                                <a type=\"like\"  href=\"?like=-1&comid={{commentaire.id}}\"><i class=\"fa fa-chevron-circle-down\"></i></a>
                                <div class=\"col-md-3 col-lg-2 text-center text-md-left\">
                            {% else %}
                                    <div class=\"row comment\">
                                        <a type=\"like\"  href=\"{{ path('fos_user_security_login') }}\"><i class=\"fa fa-chevron-circle-up\"></i></a><br>&nbsp;

                                        <h1>{{ commentaire.nbjaime }}</h1>
                                        <a type=\"like\"  href=\"{{ path('fos_user_security_login') }}\"><i class=\"fa fa-chevron-circle-down\"></i></a>
                                        <div class=\"col-md-3 col-lg-2 text-center text-md-left\">
                            {% endif %}

                          <div class=\"group-text\" > <h5>{{commentaire.idUser}}</h5> </div>
                            <p class=\"posted\"><i class=\"fa fa-clock-o\"></i>{{commentaire.dateAjout}}</p>
                            <p>{{commentaire.contenu}}</p>



                                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                                    {% if (app.user.username == commentaire.idUser ) and ( is_granted('ROLE_ADMIN') == false) %}
                                        <a href=\"{{ path('commentaire_deleteFront', {'id': commentaire.id }) }}\">Delete</a>

                                        {% endif %}

                            {% if is_granted('ROLE_ADMIN') %}
                                <a href=\"{{ path('commentaire_deleteFront', {'id': commentaire.id }) }}\">Delete</a>
                            {% endif %}
                                    {% endif %}

                        </div>
                    </div>





                        {% endfor %}

                        </div>
                    <!-- /.comment-->

                    </div>
                    <!-- /.comment-->
                </div>
                <!-- /#comments-->

                </div>

            </div>
{% endblock %}", "article/frontPost.html.twig", "C:\\wamp64\\www\\Pi\\app\\Resources\\views\\article\\frontPost.html.twig");
    }
}
