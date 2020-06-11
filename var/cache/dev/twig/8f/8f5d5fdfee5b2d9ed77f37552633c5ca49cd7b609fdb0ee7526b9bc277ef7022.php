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

/* base.html.twig */
class __TwigTemplate_5dca727aa5f041298294d946366bebe8000b96105b5175ea86dc596d254bda78 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "

</head>
<body>

";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 102
        echo "


    ";
        // line 105
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('footer', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('js', $context, $blocks);
        // line 185
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


        <!-- Font Awesome CSS-->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Google fonts - Montserrat for headings, Raleway for copy-->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,700\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\">
        <!-- owl carousel-->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel/assets/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel/assets/owl.theme.default.css"), "html", null, true);
        echo "\">
        <!-- theme stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.default.css"), "html", null, true);
        echo "\" id=\"theme-stylesheet\">
        <!-- Custom stylesheet - for your changes-->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">
        <!-- Favicon-->
        <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/rating.css"), "html", null, true);
        echo "\" />

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 34
        echo "    <header class=\"header\">
        <div class=\"topbar\">
            <div class=\"container\">
                <div class=\"topbar__content row\">
                    <div class=\"col-md-3 ml-auto d-md-block d-none\">
                        <form class=\"topbar__search\">
                            <div class=\"input-group\"><span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn\"><i class=\"fa fa-search\"></i></button></span>
                                <input type=\"text\" placeholder=\"SEARCH\" class=\"form-control\">
                            </div>
                        </form>
                    </div>
                    <div class=\"col-md-4 topbar__logo\"><a href=\"index-2.html\"><img src=\"img/logo.png\" alt=\"\" class=\"topbar__logo__normal d-none d-md-inline-block\"><img src=\"img/logo-small.png\" alt=\"\" class=\"topbar__logo__small d-inline-block d-md-none\"></a></div>
                    <div class=\"col-md-3 ml-auto d-md-block d-none\">
                        <div class=\"topbar__cart\"><a href=\"basket.html\" class=\"btn btn-outline-dark\"><i class=\"fa fa-shopping-cart\"></i><span>3 Items in cart</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container d-flex justify-content-center\">
                <button type=\"button\" data-toggle=\"collapse\" data-target=\".collapsed-search\" class=\"navbar-toggler btn btn-outline-dark\"><i class=\"fa fa-search\"></i><span class=\"sr-only\">Toggle navigation</span></button><a href=\"basket.html\" class=\"navbar-toggler btn btn-outline-dark\"><i class=\"fa fa-shopping-cart\"></i><span class=\"d-none d-lg-block\">3 Items in cart</span></a>
                <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" class=\"navbar-toggler btn btn-outline-dark\"><i class=\"fa fa-align-justify\"></i><span class=\"sr-only\">Toggle navigation</span></button>
                <div id=\"navigation\" class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav mx-auto\">
                        <li class=\"nav-item dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle nav-link active\">Homepage <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"nav-item\"><a href=\"index-2.html\" class=\"nav-link\">Homepage - Big Slider</a></li>
                                <li class=\"nav-item\"><a href=\"index2.html\" class=\"nav-link\">Homepage - Intro Image</a></li>
                                <li class=\"nav-item\"><a href=\"index3.html\" class=\"nav-link\">Homepage - Small Slider</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Shop</a></li>
                        <li class=\"nav-item\"><a href=\"text.html\" class=\"nav-link\">About</a></li>
                        <li class=\"nav-item dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle\">Theme Content <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"nav-item\"><a href=\"index-2.html\" class=\"nav-link\">Homepage - Big Slider</a></li>
                                <li class=\"nav-item\"><a href=\"index2.html\" class=\"nav-link\">Homepage - Intro Image</a></li>
                                <li class=\"nav-item\"><a href=\"index3.html\" class=\"nav-link\">Homepage - Small Slider</a></li>
                                <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Shop</a></li>
                                <li class=\"nav-item\"><a href=\"category-full.html\" class=\"nav-link\">Shop - Full Width</a></li>
                                <li class=\"nav-item\"><a href=\"detail.html\" class=\"nav-link\">Product</a></li>
                                <li class=\"nav-item\"><a href=\"basket.html\" class=\"nav-link\">Shopping Cart</a></li>
                                <li class=\"nav-item\"><a href=\"checkout1.html\" class=\"nav-link\">Checkout (4 steps)</a></li>
                                <li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
                                <li class=\"nav-item\"><a href=\"post.html\" class=\"nav-link\">Blog Post</a></li>
                                <li class=\"nav-item\"><a href=\"text.html\" class=\"nav-link\">Text page</a></li>
                                <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact page</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
                    </ul>
                </div>
                <div class=\"collapsed-search collapse\">
                    <form>
                        <div class=\"input-group\">
                            <input type=\"text\" placeholder=\"Search\" class=\"form-control\">
                            <div class=\"input-group-append\">
                                <button type=\"button\" class=\"btn outline-dark\"><i class=\"fa fa-search\"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
        <!-- Header  -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 106
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 111
        echo "    <footer class=\"footer\">
        <div class=\"footer__block\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-md-6\">
                        <h4>About Robert Hunter</h4>
                        <p>Robert Hunter is a Bootstrap 4 e-commerce theme developed in the middle of Europe by <a href=\"http://ondrejsvestka.cz/\">Ondrej Svestka</a>.</p>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <h4>This Theme</h4>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"index-2.html\">Home</a></li>
                            <li><a href=\"category.html\">Shop</a></li>
                            <li><a href=\"detail.html\">Product Detail</a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"blog.html\">Blog</a></li>
                            <li><a href=\"post.html\">Blog Post</a></li>
                            <li><a href=\"text.html\">Text page</a></li>
                            <li><a href=\"basket.html\">Shopping Cart + Order process </a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <h4>Popular Categories</h4>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\">T-Shirts</a></li>
                            <li><a href=\"#\">Shirts</a></li>
                            <li><a href=\"#\">Jackets</a></li>
                            <li><a href=\"#\">Snakes</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <h4>Let's be Friends</h4>
                        <p class=\"social\"><a href=\"#\" data-animate-hover=\"pulse\" class=\"external facebook\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\" data-animate-hover=\"pulse\" class=\"external gplus\"><i class=\"fa fa-google-plus\"></i></a><a href=\"#\" data-animate-hover=\"pulse\" class=\"external twitter\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\" data-animate-hover=\"pulse\" class=\"email\"><i class=\"fa fa-envelope\"></i></a></p>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <h4>News and Updates</h4>
                        <p>Sign up to get the latest on sales, new releases and more …</p>
                        <form class=\"footer__newsletter\">
                            <div class=\"input-group\">
                                <input type=\"text\" placeholder=\"Enter your email address\" class=\"form-control\">
                                <div class=\"input-group-append\">
                                    <div class=\"input-group-text p-0 bg-white\">
                                        <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-send\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer__copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-left\">
                        <p>&copy; 2018 Robert Hunter Ltd.</p>
                    </div>
                    <div class=\"col-md-6 text-center text-md-right mt-3 mt-md-0\">
                        <p class=\"credit\">Theme by <a href=\"http://ondrejsvestka.cz/\">Ondrej Svestka</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <!-- footer  -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 181
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 182
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/rating.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  395 => 183,  390 => 182,  380 => 181,  302 => 111,  292 => 110,  280 => 106,  270 => 105,  193 => 34,  183 => 33,  170 => 25,  166 => 24,  162 => 23,  157 => 21,  152 => 19,  147 => 17,  143 => 16,  135 => 11,  127 => 7,  117 => 6,  99 => 5,  87 => 185,  85 => 181,  82 => 180,  80 => 110,  77 => 109,  75 => 105,  70 => 102,  68 => 33,  61 => 28,  59 => 6,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}{% endblock %}</title>
    {% block stylesheets %}
        <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">


        <!-- Font Awesome CSS-->
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\">
        <!-- Google fonts - Montserrat for headings, Raleway for copy-->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,700\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\">
        <!-- owl carousel-->
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/owl.carousel/assets/owl.carousel.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/owl.carousel/assets/owl.theme.default.css') }}\">
        <!-- theme stylesheet-->
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.default.css') }}\" id=\"theme-stylesheet\">
        <!-- Custom stylesheet - for your changes-->
        <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\">
        <!-- Favicon-->
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.png') }}\">
    <link href=\"{{ asset('css/style.default.css') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/rating.css') }}\" />

    {% endblock %}


</head>
<body>

{% block header %}
    <header class=\"header\">
        <div class=\"topbar\">
            <div class=\"container\">
                <div class=\"topbar__content row\">
                    <div class=\"col-md-3 ml-auto d-md-block d-none\">
                        <form class=\"topbar__search\">
                            <div class=\"input-group\"><span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn\"><i class=\"fa fa-search\"></i></button></span>
                                <input type=\"text\" placeholder=\"SEARCH\" class=\"form-control\">
                            </div>
                        </form>
                    </div>
                    <div class=\"col-md-4 topbar__logo\"><a href=\"index-2.html\"><img src=\"img/logo.png\" alt=\"\" class=\"topbar__logo__normal d-none d-md-inline-block\"><img src=\"img/logo-small.png\" alt=\"\" class=\"topbar__logo__small d-inline-block d-md-none\"></a></div>
                    <div class=\"col-md-3 ml-auto d-md-block d-none\">
                        <div class=\"topbar__cart\"><a href=\"basket.html\" class=\"btn btn-outline-dark\"><i class=\"fa fa-shopping-cart\"></i><span>3 Items in cart</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <nav class=\"navbar navbar-expand-lg\">
            <div class=\"container d-flex justify-content-center\">
                <button type=\"button\" data-toggle=\"collapse\" data-target=\".collapsed-search\" class=\"navbar-toggler btn btn-outline-dark\"><i class=\"fa fa-search\"></i><span class=\"sr-only\">Toggle navigation</span></button><a href=\"basket.html\" class=\"navbar-toggler btn btn-outline-dark\"><i class=\"fa fa-shopping-cart\"></i><span class=\"d-none d-lg-block\">3 Items in cart</span></a>
                <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" class=\"navbar-toggler btn btn-outline-dark\"><i class=\"fa fa-align-justify\"></i><span class=\"sr-only\">Toggle navigation</span></button>
                <div id=\"navigation\" class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav mx-auto\">
                        <li class=\"nav-item dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle nav-link active\">Homepage <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"nav-item\"><a href=\"index-2.html\" class=\"nav-link\">Homepage - Big Slider</a></li>
                                <li class=\"nav-item\"><a href=\"index2.html\" class=\"nav-link\">Homepage - Intro Image</a></li>
                                <li class=\"nav-item\"><a href=\"index3.html\" class=\"nav-link\">Homepage - Small Slider</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Shop</a></li>
                        <li class=\"nav-item\"><a href=\"text.html\" class=\"nav-link\">About</a></li>
                        <li class=\"nav-item dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle\">Theme Content <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"nav-item\"><a href=\"index-2.html\" class=\"nav-link\">Homepage - Big Slider</a></li>
                                <li class=\"nav-item\"><a href=\"index2.html\" class=\"nav-link\">Homepage - Intro Image</a></li>
                                <li class=\"nav-item\"><a href=\"index3.html\" class=\"nav-link\">Homepage - Small Slider</a></li>
                                <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Shop</a></li>
                                <li class=\"nav-item\"><a href=\"category-full.html\" class=\"nav-link\">Shop - Full Width</a></li>
                                <li class=\"nav-item\"><a href=\"detail.html\" class=\"nav-link\">Product</a></li>
                                <li class=\"nav-item\"><a href=\"basket.html\" class=\"nav-link\">Shopping Cart</a></li>
                                <li class=\"nav-item\"><a href=\"checkout1.html\" class=\"nav-link\">Checkout (4 steps)</a></li>
                                <li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
                                <li class=\"nav-item\"><a href=\"post.html\" class=\"nav-link\">Blog Post</a></li>
                                <li class=\"nav-item\"><a href=\"text.html\" class=\"nav-link\">Text page</a></li>
                                <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact page</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
                    </ul>
                </div>
                <div class=\"collapsed-search collapse\">
                    <form>
                        <div class=\"input-group\">
                            <input type=\"text\" placeholder=\"Search\" class=\"form-control\">
                            <div class=\"input-group-append\">
                                <button type=\"button\" class=\"btn outline-dark\"><i class=\"fa fa-search\"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
        <!-- Header  -->
    {% endblock %}



    {% block body %}


    {% endblock %}

{% block footer %}
    <footer class=\"footer\">
        <div class=\"footer__block\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-md-6\">
                        <h4>About Robert Hunter</h4>
                        <p>Robert Hunter is a Bootstrap 4 e-commerce theme developed in the middle of Europe by <a href=\"http://ondrejsvestka.cz/\">Ondrej Svestka</a>.</p>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <h4>This Theme</h4>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"index-2.html\">Home</a></li>
                            <li><a href=\"category.html\">Shop</a></li>
                            <li><a href=\"detail.html\">Product Detail</a></li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"blog.html\">Blog</a></li>
                            <li><a href=\"post.html\">Blog Post</a></li>
                            <li><a href=\"text.html\">Text page</a></li>
                            <li><a href=\"basket.html\">Shopping Cart + Order process </a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <h4>Popular Categories</h4>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\">T-Shirts</a></li>
                            <li><a href=\"#\">Shirts</a></li>
                            <li><a href=\"#\">Jackets</a></li>
                            <li><a href=\"#\">Snakes</a></li>
                        </ul>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <h4>Let's be Friends</h4>
                        <p class=\"social\"><a href=\"#\" data-animate-hover=\"pulse\" class=\"external facebook\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\" data-animate-hover=\"pulse\" class=\"external gplus\"><i class=\"fa fa-google-plus\"></i></a><a href=\"#\" data-animate-hover=\"pulse\" class=\"external twitter\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\" data-animate-hover=\"pulse\" class=\"email\"><i class=\"fa fa-envelope\"></i></a></p>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <h4>News and Updates</h4>
                        <p>Sign up to get the latest on sales, new releases and more …</p>
                        <form class=\"footer__newsletter\">
                            <div class=\"input-group\">
                                <input type=\"text\" placeholder=\"Enter your email address\" class=\"form-control\">
                                <div class=\"input-group-append\">
                                    <div class=\"input-group-text p-0 bg-white\">
                                        <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-send\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer__copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-left\">
                        <p>&copy; 2018 Robert Hunter Ltd.</p>
                    </div>
                    <div class=\"col-md-6 text-center text-md-right mt-3 mt-md-0\">
                        <p class=\"credit\">Theme by <a href=\"http://ondrejsvestka.cz/\">Ondrej Svestka</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <!-- footer  -->
{% endblock %}

{% block js %}
    <script src=\"{{ asset('bundles/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/rating.js') }}\"></script>
{% endblock %}
</body>

</html>", "base.html.twig", "C:\\wamp64\\www\\Pi\\app\\Resources\\views\\base.html.twig");
    }
}
