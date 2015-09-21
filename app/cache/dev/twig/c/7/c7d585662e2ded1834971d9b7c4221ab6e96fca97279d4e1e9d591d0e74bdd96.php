<?php

/* ::base.html.twig */
class __TwigTemplate_c7d585662e2ded1834971d9b7c4221ab6e96fca97279d4e1e9d591d0e74bdd96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'mensajeLogueado' => array($this, 'block_mensajeLogueado'),
            'navigation' => array($this, 'block_navigation'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'navegacionfooter' => array($this, 'block_navegacionfooter'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86a3e3dfbb7f2a7132e7b9fe978378f58ae90ee44a53098fbf7a23ce4f3bd442 = $this->env->getExtension("native_profiler");
        $__internal_86a3e3dfbb7f2a7132e7b9fe978378f58ae90ee44a53098fbf7a23ce4f3bd442->enter($__internal_86a3e3dfbb7f2a7132e7b9fe978378f58ae90ee44a53098fbf7a23ce4f3bd442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>     

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo " 

        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/gt_favicon.png"), "html", null, true);
        echo "\"/> 

    </head>

    <body>
        <!-- Fixed navbar -->
        <div class=\"navbar navbar-inverse navbar-fixed-top headroom\" >
            <div class=\"container\">
                <div class=\"log-text\" >";
        // line 24
        $this->displayBlock('mensajeLogueado', $context, $blocks);
        echo "</div>
                <div class=\"navbar-header\">
                    <!-- Button for smallest screens -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                    <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"SIQuest\"></a>
                </div>
                ";
        // line 30
        $this->displayBlock('navigation', $context, $blocks);
        // line 37
        echo "  
            </div>
        </div> 
        <!-- /.navbar -->

        ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "  


        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "  



        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 122
        echo "        </footer>\t


        ";
        // line 125
        $this->displayBlock('javascripts', $context, $blocks);
        // line 133
        echo "    </body>
</html>";
        
        $__internal_86a3e3dfbb7f2a7132e7b9fe978378f58ae90ee44a53098fbf7a23ce4f3bd442->leave($__internal_86a3e3dfbb7f2a7132e7b9fe978378f58ae90ee44a53098fbf7a23ce4f3bd442_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_58db33257e9b796444bb78b66ef86e31701c6d3ac309750a6a6ef9cf93f7874a = $this->env->getExtension("native_profiler");
        $__internal_58db33257e9b796444bb78b66ef86e31701c6d3ac309750a6a6ef9cf93f7874a->enter($__internal_58db33257e9b796444bb78b66ef86e31701c6d3ac309750a6a6ef9cf93f7874a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_58db33257e9b796444bb78b66ef86e31701c6d3ac309750a6a6ef9cf93f7874a->leave($__internal_58db33257e9b796444bb78b66ef86e31701c6d3ac309750a6a6ef9cf93f7874a_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e67e42700d163505353d55938bf3a14c42009ce050c3fb5bdd3549938a9129d5 = $this->env->getExtension("native_profiler");
        $__internal_e67e42700d163505353d55938bf3a14c42009ce050c3fb5bdd3549938a9129d5->enter($__internal_e67e42700d163505353d55938bf3a14c42009ce050c3fb5bdd3549938a9129d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
        ";
        
        $__internal_e67e42700d163505353d55938bf3a14c42009ce050c3fb5bdd3549938a9129d5->leave($__internal_e67e42700d163505353d55938bf3a14c42009ce050c3fb5bdd3549938a9129d5_prof);

    }

    // line 24
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_10229ed0adecb539cded4ac3dc74ad14e0219f0e6ffaaccc07f7eb0978bc1073 = $this->env->getExtension("native_profiler");
        $__internal_10229ed0adecb539cded4ac3dc74ad14e0219f0e6ffaaccc07f7eb0978bc1073->enter($__internal_10229ed0adecb539cded4ac3dc74ad14e0219f0e6ffaaccc07f7eb0978bc1073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_10229ed0adecb539cded4ac3dc74ad14e0219f0e6ffaaccc07f7eb0978bc1073->leave($__internal_10229ed0adecb539cded4ac3dc74ad14e0219f0e6ffaaccc07f7eb0978bc1073_prof);

    }

    // line 30
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_f6259a48d74168d8c994ca588f3a42e13dfedef2af5d8356e9c0b530bdb6598d = $this->env->getExtension("native_profiler");
        $__internal_f6259a48d74168d8c994ca588f3a42e13dfedef2af5d8356e9c0b530bdb6598d->enter($__internal_f6259a48d74168d8c994ca588f3a42e13dfedef2af5d8356e9c0b530bdb6598d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 31
        echo "                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav pull-right\">
                            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Inicio</a></li>
                            <li><a href=\"about.html\">Ayuda</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                ";
        
        $__internal_f6259a48d74168d8c994ca588f3a42e13dfedef2af5d8356e9c0b530bdb6598d->leave($__internal_f6259a48d74168d8c994ca588f3a42e13dfedef2af5d8356e9c0b530bdb6598d_prof);

    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        $__internal_4406a71cfbbe2e9bb53c81d3937d930fdc75bf2e4f222e09128e37e6227194d7 = $this->env->getExtension("native_profiler");
        $__internal_4406a71cfbbe2e9bb53c81d3937d930fdc75bf2e4f222e09128e37e6227194d7->enter($__internal_4406a71cfbbe2e9bb53c81d3937d930fdc75bf2e4f222e09128e37e6227194d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 43
        echo "
        ";
        
        $__internal_4406a71cfbbe2e9bb53c81d3937d930fdc75bf2e4f222e09128e37e6227194d7->leave($__internal_4406a71cfbbe2e9bb53c81d3937d930fdc75bf2e4f222e09128e37e6227194d7_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_83a5707aa771630d5ad1ccf6ef699fc45f272eec2327f2fa66e16ccd65820ada = $this->env->getExtension("native_profiler");
        $__internal_83a5707aa771630d5ad1ccf6ef699fc45f272eec2327f2fa66e16ccd65820ada->enter($__internal_83a5707aa771630d5ad1ccf6ef699fc45f272eec2327f2fa66e16ccd65820ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
        ";
        
        $__internal_83a5707aa771630d5ad1ccf6ef699fc45f272eec2327f2fa66e16ccd65820ada->leave($__internal_83a5707aa771630d5ad1ccf6ef699fc45f272eec2327f2fa66e16ccd65820ada_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1c22726a23d60c66d41d55e1c5789fadc7fef270b89197d09dfb6256f7d8f30f = $this->env->getExtension("native_profiler");
        $__internal_1c22726a23d60c66d41d55e1c5789fadc7fef270b89197d09dfb6256f7d8f30f->enter($__internal_1c22726a23d60c66d41d55e1c5789fadc7fef270b89197d09dfb6256f7d8f30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "                <div class=\"footer1\">
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
                                    ";
        // line 100
        $this->displayBlock('navegacionfooter', $context, $blocks);
        // line 107
        echo "                                </div>
                            </div>

                            <div class=\"col-md-6 widget\">
                                <div class=\"widget-body\">
                                    <p class=\"text-right\">
                                        Copyright &copy; 2015, Universidad para la Cooperación Internacional. 
                                    </p>
                                </div>
                            </div>

                        </div> <!-- /row of widgets -->
                    </div>
                </div>
            ";
        
        $__internal_1c22726a23d60c66d41d55e1c5789fadc7fef270b89197d09dfb6256f7d8f30f->leave($__internal_1c22726a23d60c66d41d55e1c5789fadc7fef270b89197d09dfb6256f7d8f30f_prof);

    }

    // line 100
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_50a177900c70d8d3fbd6d32fb4e5fad748ae79565ca71c5c0ea151e693d8f09a = $this->env->getExtension("native_profiler");
        $__internal_50a177900c70d8d3fbd6d32fb4e5fad748ae79565ca71c5c0ea151e693d8f09a->enter($__internal_50a177900c70d8d3fbd6d32fb4e5fad748ae79565ca71c5c0ea151e693d8f09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 101
        echo "                                        <p class=\"simplenav\">
                                            <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
                                            <a href=\"about.html\">Ayuda</a> |
                                            <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Identificarse</a>
                                        </p>
                                    ";
        
        $__internal_50a177900c70d8d3fbd6d32fb4e5fad748ae79565ca71c5c0ea151e693d8f09a->leave($__internal_50a177900c70d8d3fbd6d32fb4e5fad748ae79565ca71c5c0ea151e693d8f09a_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6791cd59be4469eab32f9bfcbfba0993a3b89463095ee56fc3b754faf6a59dd = $this->env->getExtension("native_profiler");
        $__internal_f6791cd59be4469eab32f9bfcbfba0993a3b89463095ee56fc3b754faf6a59dd->enter($__internal_f6791cd59be4469eab32f9bfcbfba0993a3b89463095ee56fc3b754faf6a59dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "            <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>  
            <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/headroom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jQuery.headroom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/template.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_f6791cd59be4469eab32f9bfcbfba0993a3b89463095ee56fc3b754faf6a59dd->leave($__internal_f6791cd59be4469eab32f9bfcbfba0993a3b89463095ee56fc3b754faf6a59dd_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 131,  332 => 130,  328 => 129,  323 => 126,  317 => 125,  307 => 104,  302 => 102,  299 => 101,  293 => 100,  272 => 107,  270 => 100,  223 => 55,  217 => 54,  209 => 48,  203 => 47,  195 => 43,  189 => 42,  177 => 33,  173 => 31,  167 => 30,  155 => 24,  145 => 12,  141 => 11,  137 => 10,  132 => 9,  126 => 8,  114 => 6,  106 => 133,  104 => 125,  99 => 122,  97 => 54,  90 => 49,  88 => 47,  83 => 44,  81 => 42,  74 => 37,  72 => 30,  67 => 28,  60 => 24,  49 => 16,  45 => 14,  43 => 8,  38 => 6,  31 => 1,);
    }
}
