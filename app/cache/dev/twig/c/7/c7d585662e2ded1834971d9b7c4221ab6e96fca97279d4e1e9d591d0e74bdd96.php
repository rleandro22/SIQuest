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
        $__internal_a30c9c3c95ae0f89d63cb01e93707c3360f02d77789a8df3414443a3012a6615 = $this->env->getExtension("native_profiler");
        $__internal_a30c9c3c95ae0f89d63cb01e93707c3360f02d77789a8df3414443a3012a6615->enter($__internal_a30c9c3c95ae0f89d63cb01e93707c3360f02d77789a8df3414443a3012a6615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 15
        echo " 

        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/gt_favicon.png"), "html", null, true);
        echo "\"/> 

    </head>

    <body>
        <!-- Fixed navbar -->
        <div class=\"navbar navbar-inverse navbar-fixed-top headroom\" >
            <div class=\"container\">
                <div class=\"log-text\" >";
        // line 25
        $this->displayBlock('mensajeLogueado', $context, $blocks);
        echo "</div>
                <div class=\"navbar-header\">
                    <!-- Button for smallest screens -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                    <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"SIQuest\"></a>
                </div>
                ";
        // line 31
        $this->displayBlock('navigation', $context, $blocks);
        // line 38
        echo "  
            </div>
        </div> 
        <!-- /.navbar -->

        ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 45
        echo "  


        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "  



        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 123
        echo "        </footer>\t


        ";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 133
        echo "    </body>
</html>";
        
        $__internal_a30c9c3c95ae0f89d63cb01e93707c3360f02d77789a8df3414443a3012a6615->leave($__internal_a30c9c3c95ae0f89d63cb01e93707c3360f02d77789a8df3414443a3012a6615_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_14fe3441cbf2b30b4eab57b353c4448d30266275437b22b7c9ad586cb6e11b3a = $this->env->getExtension("native_profiler");
        $__internal_14fe3441cbf2b30b4eab57b353c4448d30266275437b22b7c9ad586cb6e11b3a->enter($__internal_14fe3441cbf2b30b4eab57b353c4448d30266275437b22b7c9ad586cb6e11b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_14fe3441cbf2b30b4eab57b353c4448d30266275437b22b7c9ad586cb6e11b3a->leave($__internal_14fe3441cbf2b30b4eab57b353c4448d30266275437b22b7c9ad586cb6e11b3a_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d06d3d95fca303ffa44c9e60a425d2c5148a4edeffa569f47418f9e9d66bed2b = $this->env->getExtension("native_profiler");
        $__internal_d06d3d95fca303ffa44c9e60a425d2c5148a4edeffa569f47418f9e9d66bed2b->enter($__internal_d06d3d95fca303ffa44c9e60a425d2c5148a4edeffa569f47418f9e9d66bed2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\" type=\"text/javascript\"></script>
        ";
        
        $__internal_d06d3d95fca303ffa44c9e60a425d2c5148a4edeffa569f47418f9e9d66bed2b->leave($__internal_d06d3d95fca303ffa44c9e60a425d2c5148a4edeffa569f47418f9e9d66bed2b_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_0b1402b9051843863ff8aec583823a5afead1769408ff40b821981cf306a0ec7 = $this->env->getExtension("native_profiler");
        $__internal_0b1402b9051843863ff8aec583823a5afead1769408ff40b821981cf306a0ec7->enter($__internal_0b1402b9051843863ff8aec583823a5afead1769408ff40b821981cf306a0ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_0b1402b9051843863ff8aec583823a5afead1769408ff40b821981cf306a0ec7->leave($__internal_0b1402b9051843863ff8aec583823a5afead1769408ff40b821981cf306a0ec7_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_8abaadde3bf498fcb179766dd6d255900e7ad88bd3fab8a5ebf2773ec1073f35 = $this->env->getExtension("native_profiler");
        $__internal_8abaadde3bf498fcb179766dd6d255900e7ad88bd3fab8a5ebf2773ec1073f35->enter($__internal_8abaadde3bf498fcb179766dd6d255900e7ad88bd3fab8a5ebf2773ec1073f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 32
        echo "                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav pull-right\">
                            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Inicio</a></li>
                            <li><a href=\"about.html\">Ayuda</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                ";
        
        $__internal_8abaadde3bf498fcb179766dd6d255900e7ad88bd3fab8a5ebf2773ec1073f35->leave($__internal_8abaadde3bf498fcb179766dd6d255900e7ad88bd3fab8a5ebf2773ec1073f35_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_1d674ddc9f2f8b7ca523fb0c51c2d8d642feb594f4e582d218d5f397ba1e562d = $this->env->getExtension("native_profiler");
        $__internal_1d674ddc9f2f8b7ca523fb0c51c2d8d642feb594f4e582d218d5f397ba1e562d->enter($__internal_1d674ddc9f2f8b7ca523fb0c51c2d8d642feb594f4e582d218d5f397ba1e562d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_1d674ddc9f2f8b7ca523fb0c51c2d8d642feb594f4e582d218d5f397ba1e562d->leave($__internal_1d674ddc9f2f8b7ca523fb0c51c2d8d642feb594f4e582d218d5f397ba1e562d_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3f31058c84c75452b3f65baa313e9b2a8a12bc982876eede6cc7b8c0d7fd99d = $this->env->getExtension("native_profiler");
        $__internal_e3f31058c84c75452b3f65baa313e9b2a8a12bc982876eede6cc7b8c0d7fd99d->enter($__internal_e3f31058c84c75452b3f65baa313e9b2a8a12bc982876eede6cc7b8c0d7fd99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_e3f31058c84c75452b3f65baa313e9b2a8a12bc982876eede6cc7b8c0d7fd99d->leave($__internal_e3f31058c84c75452b3f65baa313e9b2a8a12bc982876eede6cc7b8c0d7fd99d_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0d2e45ba3f6c3f87b9d430f3f2302220ca36e98bf5c338d71eeda3eddfbe6b06 = $this->env->getExtension("native_profiler");
        $__internal_0d2e45ba3f6c3f87b9d430f3f2302220ca36e98bf5c338d71eeda3eddfbe6b06->enter($__internal_0d2e45ba3f6c3f87b9d430f3f2302220ca36e98bf5c338d71eeda3eddfbe6b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
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
        // line 101
        $this->displayBlock('navegacionfooter', $context, $blocks);
        // line 108
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
        
        $__internal_0d2e45ba3f6c3f87b9d430f3f2302220ca36e98bf5c338d71eeda3eddfbe6b06->leave($__internal_0d2e45ba3f6c3f87b9d430f3f2302220ca36e98bf5c338d71eeda3eddfbe6b06_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_d3fa9556dcdcd7757897b5ef9c61f98652f90f7afa50fa12ab4ef2db9fac6cc1 = $this->env->getExtension("native_profiler");
        $__internal_d3fa9556dcdcd7757897b5ef9c61f98652f90f7afa50fa12ab4ef2db9fac6cc1->enter($__internal_d3fa9556dcdcd7757897b5ef9c61f98652f90f7afa50fa12ab4ef2db9fac6cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 102
        echo "                                        <p class=\"simplenav\">
                                            <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
                                            <a href=\"about.html\">Ayuda</a> |
                                            <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Identificarse</a>
                                        </p>
                                    ";
        
        $__internal_d3fa9556dcdcd7757897b5ef9c61f98652f90f7afa50fa12ab4ef2db9fac6cc1->leave($__internal_d3fa9556dcdcd7757897b5ef9c61f98652f90f7afa50fa12ab4ef2db9fac6cc1_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8659d4f73a9f82539710b92dd2418e1600c1e73f63b1d3a8b87b78372e6feb2 = $this->env->getExtension("native_profiler");
        $__internal_a8659d4f73a9f82539710b92dd2418e1600c1e73f63b1d3a8b87b78372e6feb2->enter($__internal_a8659d4f73a9f82539710b92dd2418e1600c1e73f63b1d3a8b87b78372e6feb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "            <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
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
        
        $__internal_a8659d4f73a9f82539710b92dd2418e1600c1e73f63b1d3a8b87b78372e6feb2->leave($__internal_a8659d4f73a9f82539710b92dd2418e1600c1e73f63b1d3a8b87b78372e6feb2_prof);

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
        return array (  336 => 131,  332 => 130,  328 => 129,  324 => 127,  318 => 126,  308 => 105,  303 => 103,  300 => 102,  294 => 101,  273 => 108,  271 => 101,  224 => 56,  218 => 55,  210 => 49,  204 => 48,  196 => 44,  190 => 43,  178 => 34,  174 => 32,  168 => 31,  156 => 25,  145 => 12,  141 => 11,  137 => 10,  132 => 9,  126 => 8,  114 => 6,  106 => 133,  104 => 126,  99 => 123,  97 => 55,  90 => 50,  88 => 48,  83 => 45,  81 => 43,  74 => 38,  72 => 31,  67 => 29,  60 => 25,  49 => 17,  45 => 15,  43 => 8,  38 => 6,  31 => 1,);
    }
}
