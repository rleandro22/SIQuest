<?php

/* base.html.twig */
class __TwigTemplate_16fa08bddddf75a27e3266705a7c23a8aab546d8cf33f5e3e76c829ca915cdc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24f6acd340c28f2e3cc920a86302bd040f177ac27d8a3180dacae5a083b439d0 = $this->env->getExtension("native_profiler");
        $__internal_24f6acd340c28f2e3cc920a86302bd040f177ac27d8a3180dacae5a083b439d0->enter($__internal_24f6acd340c28f2e3cc920a86302bd040f177ac27d8a3180dacae5a083b439d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/gt_favicon.png"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"home\">
        <!-- Fixed navbar -->
        <div class=\"navbar navbar-inverse navbar-fixed-top headroom\" >
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <!-- Button for smallest screens -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                    <a class=\"navbar-brand\" href=\"index.html\"><img src=\"assets/images/logo.png\" alt=\"Progressus HTML5 template\"></a>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav pull-right\">
                        ";
        // line 28
        $this->displayBlock('navigation', $context, $blocks);
        // line 40
        echo "                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 
        <!-- /.navbar -->

        <!-- Header -->
        <header id=\"head\">
            <div class=\"container\">
                <div class=\"row\">
                    <h1 class=\"lead\">UNIVERSIDAD PARA LA COOPERACIÓN INTERNACIONAL</h1>
                    <p class=\"tagline\">Sistema de generación de cuestionarios para la GSPM</p>
                    <p><a href=\"http://www.uci.ac.cr/\" class=\"btn btn-action btn-lg\" role=\"button\">Página UCI</a><a href=\"http://www.ucipfg.com/\" class=\"btn btn-default btn-lg\" role=\"button\">Campus virtual</a> </p>
                </div>
            </div>
        </header>
        <!-- /Header -->

        <!-- Intro -->
        <div class=\"container text-center\">
            <br> <br>
            <h2 class=\"thin\">Sistema de generación de cuestionarios para la GSPM</h2>
            <p class=\"text-muted\">
                Este sistema le ayudará a gestionar la preguntas para la generación de cuestionarios para la GSPM.
            </p>
        </div>
        <!-- /Intro-->

        <!-- Highlights - jumbotron -->
        <div class=\"jumbotron top-space\">
            <div class=\"container\">

                <h2 class=\"text-center top-space\">Temas importantes</h2>
                <br>

                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h3>¿Que me permite hacer SIQuest?</h3>
                        <p>Permite la generación de cuestionarios para diferentes examenes.</p>
                        <p class=\"text-center\"><a class=\"btn btn-primary btn-large\">Más información »</a></p>
                    </div>
                    <div class=\"col-sm-6\">
                        <h3>¿Quienes pueden acceder?</h3>
                        <p>
                            Unicamente los usuarios debidamente registrados</p>
                        <p class=\"text-center\"><a class=\"btn btn-primary btn-large\">Más información »</a></p>
                    </div>
                </div> <!-- /row -->
            </div>
            <!-- /Highlights -->

            <!-- container -->
            <div class=\"container\">


            </div>\t<!-- /container -->

            <!-- Social links. @TODO: replace by link/instructions in template -->
            <section id=\"social\">
                <div class=\"container\">
                    <div class=\"wrapper clearfix\">
                        <!-- AddThis Button BEGIN -->
                        <div class=\"addthis_toolbox addthis_default_style\">
                            <a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a>
                            <a class=\"addthis_button_tweet\"></a>
                            <a class=\"addthis_button_linkedin_counter\"></a>
                            <a class=\"addthis_button_google_plusone\" g:plusone:size=\"medium\"></a>
                        </div>
                        <!-- AddThis Button END -->
                    </div>
                </div>
            </section>
            <!-- /social links -->


            <footer id=\"footer\" class=\"top-space\">

                <div class=\"footer1\">
                    <div class=\"container\">
                        <div class=\"row\">

                            <div class=\"col-md-3 widget\">
                                <h3 class=\"widget-title\">Contacto</h3>
                                <div class=\"widget-body\">
                                    <p>+11111111<br>
                                        <a href=\"mailto:#\">webmaster@uci.ac.cr</a><br>
                                        <br>
                                        San José, Costa Rica
                                    </p>\t
                                </div>
                            </div>

                            <div class=\"col-md-3 widget\">
                                <h3 class=\"widget-title\">Redes Sociales</h3>
                                <div class=\"widget-body\">
                                    <p class=\"follow-me-icons\">
                                        <a href=\"\"><i class=\"fa fa-twitter fa-2\"></i></a>
                                        <a href=\"\"><i class=\"fa fa-dribbble fa-2\"></i></a>
                                        <a href=\"\"><i class=\"fa fa-github fa-2\"></i></a>
                                        <a href=\"\"><i class=\"fa fa-facebook fa-2\"></i></a>
                                    </p>\t
                                </div>
                            </div>

                            <div class=\"col-md-6 widget\">
                                <h3 class=\"widget-title\">Texto</h3>
                                <div class=\"widget-body\">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                                    <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                                </div>
                            </div>

                        </div> <!-- /row of widgets -->
                    </div>
                </div>

                <div class=\"footer2\">
                    <div class=\"container\">
                        <div class=\"row\">

                            <div class=\"col-md-6 widget\">
                                <div class=\"widget-body\">
                                    <p class=\"simplenav\">
                                        <a href=\"#\">Inicio</a> | 
                                        <a href=\"about.html\">Ayuda</a> |
                                        <a href=\"sidebar-right.html\">Identificarse</a> |
                                        <b><a href=\"signup.html\">Registrarse</a></b>
                                    </p>
                                </div>
                            </div>

                            <div class=\"col-md-6 widget\">
                                <div class=\"widget-body\">
                                    <p class=\"text-right\">
                                        Copyright &copy; 2015, Universidad para laCooperación Internacional. 
                                    </p>
                                </div>
                            </div>

                        </div> <!-- /row of widgets -->
                    </div>
                </div>

            </footer>\t





            <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
            <script src=\"assets/js/headroom.min.js\"></script>
            <script src=\"assets/js/jQuery.headroom.min.js\"></script>
            <script src=\"assets/js/template.js\"></script>
    </body>
</html>";
        
        $__internal_24f6acd340c28f2e3cc920a86302bd040f177ac27d8a3180dacae5a083b439d0->leave($__internal_24f6acd340c28f2e3cc920a86302bd040f177ac27d8a3180dacae5a083b439d0_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8bd54e2cc140231bf3add890f0fa4c043528182a4edfadf6be3e9921bdc23bf = $this->env->getExtension("native_profiler");
        $__internal_e8bd54e2cc140231bf3add890f0fa4c043528182a4edfadf6be3e9921bdc23bf->enter($__internal_e8bd54e2cc140231bf3add890f0fa4c043528182a4edfadf6be3e9921bdc23bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_e8bd54e2cc140231bf3add890f0fa4c043528182a4edfadf6be3e9921bdc23bf->leave($__internal_e8bd54e2cc140231bf3add890f0fa4c043528182a4edfadf6be3e9921bdc23bf_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f3bc1a65097f79d83580f77dc024ee1a0ca59de31c088e784481564843cf421d = $this->env->getExtension("native_profiler");
        $__internal_f3bc1a65097f79d83580f77dc024ee1a0ca59de31c088e784481564843cf421d->enter($__internal_f3bc1a65097f79d83580f77dc024ee1a0ca59de31c088e784481564843cf421d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
            <!-- Custom styles for our template -->
            <link href=\"";
        // line 10
        echo "css/bootstrap-theme.css";
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 11
        echo "css/bootstrap.min.css";
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 12
        echo "css/font-awesome.min.css";
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 13
        echo "css/main.css";
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_f3bc1a65097f79d83580f77dc024ee1a0ca59de31c088e784481564843cf421d->leave($__internal_f3bc1a65097f79d83580f77dc024ee1a0ca59de31c088e784481564843cf421d_prof);

    }

    // line 28
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_32c5872b4ec3ad79880d328a519a2bb668866e29a13f0111a1463d1bad47eb02 = $this->env->getExtension("native_profiler");
        $__internal_32c5872b4ec3ad79880d328a519a2bb668866e29a13f0111a1463d1bad47eb02->enter($__internal_32c5872b4ec3ad79880d328a519a2bb668866e29a13f0111a1463d1bad47eb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 29
        echo "                            <li class=\"active\"><a href=\"#\">Inicio</a></li>
                            <li><a href=\"about.html\">Ayuda</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"sidebar-left.html\">Mantenimiento Libros</a></li>
                                    <li class=\"active\"><a href=\"sidebar-right.html\">Mantenimiento Preguntas</a></li>
                                </ul>
                            </li>
                            <li><a class=\"btn\" href=\"signin.html\">Identificarse</a></li>
                            ";
        
        $__internal_32c5872b4ec3ad79880d328a519a2bb668866e29a13f0111a1463d1bad47eb02->leave($__internal_32c5872b4ec3ad79880d328a519a2bb668866e29a13f0111a1463d1bad47eb02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 29,  263 => 28,  254 => 13,  250 => 12,  246 => 11,  242 => 10,  238 => 8,  232 => 7,  220 => 6,  57 => 40,  55 => 28,  38 => 15,  36 => 7,  32 => 6,  25 => 1,);
    }
}
