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
        $__internal_31af99210777e9bc297b73671335db1c2fd58d18bf3525c066bc3d48a5e2fc89 = $this->env->getExtension("native_profiler");
        $__internal_31af99210777e9bc297b73671335db1c2fd58d18bf3525c066bc3d48a5e2fc89->enter($__internal_31af99210777e9bc297b73671335db1c2fd58d18bf3525c066bc3d48a5e2fc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_31af99210777e9bc297b73671335db1c2fd58d18bf3525c066bc3d48a5e2fc89->leave($__internal_31af99210777e9bc297b73671335db1c2fd58d18bf3525c066bc3d48a5e2fc89_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ed1fdce46930e893508d0e98ffcb510be619e1c4c75de1bbacd46f3eff66833 = $this->env->getExtension("native_profiler");
        $__internal_0ed1fdce46930e893508d0e98ffcb510be619e1c4c75de1bbacd46f3eff66833->enter($__internal_0ed1fdce46930e893508d0e98ffcb510be619e1c4c75de1bbacd46f3eff66833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_0ed1fdce46930e893508d0e98ffcb510be619e1c4c75de1bbacd46f3eff66833->leave($__internal_0ed1fdce46930e893508d0e98ffcb510be619e1c4c75de1bbacd46f3eff66833_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5827833e85cb5c2bc1053d2579c88649f4f1d52199c53ef1c41b9efd9d62ba0f = $this->env->getExtension("native_profiler");
        $__internal_5827833e85cb5c2bc1053d2579c88649f4f1d52199c53ef1c41b9efd9d62ba0f->enter($__internal_5827833e85cb5c2bc1053d2579c88649f4f1d52199c53ef1c41b9efd9d62ba0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5827833e85cb5c2bc1053d2579c88649f4f1d52199c53ef1c41b9efd9d62ba0f->leave($__internal_5827833e85cb5c2bc1053d2579c88649f4f1d52199c53ef1c41b9efd9d62ba0f_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_39552f113b0d105e3c4e09221dd78b0266f0c45bbc59904c576c356e73a3e781 = $this->env->getExtension("native_profiler");
        $__internal_39552f113b0d105e3c4e09221dd78b0266f0c45bbc59904c576c356e73a3e781->enter($__internal_39552f113b0d105e3c4e09221dd78b0266f0c45bbc59904c576c356e73a3e781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_39552f113b0d105e3c4e09221dd78b0266f0c45bbc59904c576c356e73a3e781->leave($__internal_39552f113b0d105e3c4e09221dd78b0266f0c45bbc59904c576c356e73a3e781_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2781a2ed49072787ccb5f0521932104e0a22dad9d70c3729bd342a685b43f4dd = $this->env->getExtension("native_profiler");
        $__internal_2781a2ed49072787ccb5f0521932104e0a22dad9d70c3729bd342a685b43f4dd->enter($__internal_2781a2ed49072787ccb5f0521932104e0a22dad9d70c3729bd342a685b43f4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_2781a2ed49072787ccb5f0521932104e0a22dad9d70c3729bd342a685b43f4dd->leave($__internal_2781a2ed49072787ccb5f0521932104e0a22dad9d70c3729bd342a685b43f4dd_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_b08a9b354dce78202ee74ae6e60434a1b8a659b9583a841b5676aae7e7d77fca = $this->env->getExtension("native_profiler");
        $__internal_b08a9b354dce78202ee74ae6e60434a1b8a659b9583a841b5676aae7e7d77fca->enter($__internal_b08a9b354dce78202ee74ae6e60434a1b8a659b9583a841b5676aae7e7d77fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_b08a9b354dce78202ee74ae6e60434a1b8a659b9583a841b5676aae7e7d77fca->leave($__internal_b08a9b354dce78202ee74ae6e60434a1b8a659b9583a841b5676aae7e7d77fca_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_c03fb1583d1a777e3975f78572974a1cba5f8c813d33a8a2bd5fa44c83dcf376 = $this->env->getExtension("native_profiler");
        $__internal_c03fb1583d1a777e3975f78572974a1cba5f8c813d33a8a2bd5fa44c83dcf376->enter($__internal_c03fb1583d1a777e3975f78572974a1cba5f8c813d33a8a2bd5fa44c83dcf376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_c03fb1583d1a777e3975f78572974a1cba5f8c813d33a8a2bd5fa44c83dcf376->leave($__internal_c03fb1583d1a777e3975f78572974a1cba5f8c813d33a8a2bd5fa44c83dcf376_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_27c617614755840ca329f9bd79606f261c6b8bce8eaa33a7e26ceb0fc176d0da = $this->env->getExtension("native_profiler");
        $__internal_27c617614755840ca329f9bd79606f261c6b8bce8eaa33a7e26ceb0fc176d0da->enter($__internal_27c617614755840ca329f9bd79606f261c6b8bce8eaa33a7e26ceb0fc176d0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_27c617614755840ca329f9bd79606f261c6b8bce8eaa33a7e26ceb0fc176d0da->leave($__internal_27c617614755840ca329f9bd79606f261c6b8bce8eaa33a7e26ceb0fc176d0da_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_f12f93fa51f51192dc1c02872407027baab8b173171dbc279fd47b2dfc4621ff = $this->env->getExtension("native_profiler");
        $__internal_f12f93fa51f51192dc1c02872407027baab8b173171dbc279fd47b2dfc4621ff->enter($__internal_f12f93fa51f51192dc1c02872407027baab8b173171dbc279fd47b2dfc4621ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_f12f93fa51f51192dc1c02872407027baab8b173171dbc279fd47b2dfc4621ff->leave($__internal_f12f93fa51f51192dc1c02872407027baab8b173171dbc279fd47b2dfc4621ff_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_732baf31cf61495d24ec97bb85fa070aae68ee9b9968c2d704141e83f5017cbb = $this->env->getExtension("native_profiler");
        $__internal_732baf31cf61495d24ec97bb85fa070aae68ee9b9968c2d704141e83f5017cbb->enter($__internal_732baf31cf61495d24ec97bb85fa070aae68ee9b9968c2d704141e83f5017cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_732baf31cf61495d24ec97bb85fa070aae68ee9b9968c2d704141e83f5017cbb->leave($__internal_732baf31cf61495d24ec97bb85fa070aae68ee9b9968c2d704141e83f5017cbb_prof);

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
