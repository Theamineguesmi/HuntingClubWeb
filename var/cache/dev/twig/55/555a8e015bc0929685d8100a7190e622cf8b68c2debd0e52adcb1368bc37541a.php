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

/* template.html.twig */
class __TwigTemplate_53bc2e483c9d515f5963acc6002bc63b8e3ce8aaf9fddc9a1722c0d2d4dcd3f0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>CodeHunt | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/daterangepicker/daterangepicker.css\""), "html", null, true);
        echo ">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/summernote/summernote-bs4.css\""), "html", null, true);
        echo ">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">


    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    ";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 47
            echo "                    <a href=\"#\" class=\"d-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "username", [], "any", false, false, false, 47), "html", null, true);
            echo "</a>

                        <a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\" >
                            ";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 53
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.login", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 55
        echo "
                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class=\"nav-item has-treeview menu-open\">
                    <a href=\"#\" class=\"nav-link active\">
                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                        <p>
                            Blog
                            <i class=\"right fas fa-angle-left\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\" class=\"nav-link active\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Article</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_index");
        echo "\" class=\"nav-link actives\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Commentaire</p>
                            </a>
                        </li>

                    </ul>
                </li>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0 text-dark\">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class=\"content-header\">
          <div>
            <div class=\"container\">
                <div class=\"row\">
                    ";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 120
        echo "                </div>
            </div>

        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class=\"float-right d-none d-sm-inline-block\">
            <b>Version</b> 3.0.3-pre
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\" ";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- ChartJS -->
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
<!-- JQVMap -->
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Summernote -->
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
<!-- overlayScrollbars -->
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 118
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 118,  337 => 117,  323 => 177,  318 => 175,  313 => 173,  308 => 171,  303 => 169,  298 => 167,  293 => 165,  289 => 164,  284 => 162,  279 => 160,  275 => 159,  270 => 157,  265 => 155,  260 => 153,  251 => 147,  246 => 145,  219 => 120,  217 => 117,  176 => 79,  167 => 73,  147 => 55,  139 => 53,  133 => 50,  129 => 49,  123 => 47,  121 => 46,  115 => 43,  95 => 26,  90 => 24,  85 => 22,  80 => 20,  75 => 18,  70 => 16,  65 => 14,  60 => 12,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>CodeHunt | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/plugins/fontawesome-free/css/all.min.css')}}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}\">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/plugins/jqvmap/jqvmap.min.css')}}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/dist/css/adminlte.min.css')}}\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/plugins/daterangepicker/daterangepicker.css\"')}}>
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"{{ asset ('BackOffice/plugins/summernote/summernote-bs4.css\"')}}>
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">


    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"{{ asset ('BackOffice/dist/img/user2-160x160.jpg')}}\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <a href=\"#\" class=\"d-block\">{{ app.user.username }}</a>

                        <a href=\"{{ path('fos_user_security_logout') }}\" >
                            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                        </a>
                    {% else %}
                        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                    {% endif %}

                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class=\"nav-item has-treeview menu-open\">
                    <a href=\"#\" class=\"nav-link active\">
                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                        <p>
                            Blog
                            <i class=\"right fas fa-angle-left\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('article_index') }}\" class=\"nav-link active\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Article</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('commentaire_index') }}\" class=\"nav-link actives\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Commentaire</p>
                            </a>
                        </li>

                    </ul>
                </li>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0 text-dark\">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class=\"content-header\">
          <div>
            <div class=\"container\">
                <div class=\"row\">
                    {% block body %}

                    {% endblock %}
                </div>
            </div>

        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class=\"float-right d-none d-sm-inline-block\">
            <b>Version</b> 3.0.3-pre
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"{{ asset ('BackOffice/plugins/jquery/jquery.min.js')}}\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\" {{ asset ('BackOffice/plugins/jquery-ui/jquery-ui.min.js')}}\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"{{ asset ('BackOffice/plugins/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<!-- ChartJS -->
<script src=\"{{ asset ('BackOffice/plugins/chart.js/Chart.min.js')}}\"></script>
<!-- Sparkline -->
<script src=\"{{ asset ('BackOffice/plugins/sparklines/sparkline.js')}}\"></script>
<!-- JQVMap -->
<script src=\"{{ asset ('BackOffice/plugins/jqvmap/jquery.vmap.min.js')}}\"></script>
<script src=\"{{ asset ('BackOffice/plugins/jqvmap/maps/jquery.vmap.usa.js')}}\"></script>
<!-- jQuery Knob Chart -->
<script src=\"{{ asset ('BackOffice/plugins/jquery-knob/jquery.knob.min.js')}}\"></script>
<!-- daterangepicker -->
<script src=\"{{ asset ('BackOffice/plugins/moment/moment.min.js')}}\"></script>
<script src=\"{{ asset ('BackOffice/plugins/daterangepicker/daterangepicker.js')}}\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"{{ asset ('BackOffice/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}\"></script>
<!-- Summernote -->
<script src=\"{{ asset ('BackOffice/plugins/summernote/summernote-bs4.min.js')}}\"></script>
<!-- overlayScrollbars -->
<script src=\"{{ asset ('BackOffice/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset ('BackOffice/dist/js/adminlte.js')}}\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"{{ asset ('BackOffice/dist/js/pages/dashboard.js')}}\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"{{ asset ('BackOffice/dist/js/demo.js')}}\"></script>
</body>
</html>
", "template.html.twig", "C:\\wamp64\\www\\Pi\\app\\Resources\\views\\template.html.twig");
    }
}
