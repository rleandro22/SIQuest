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
        $__internal_3a322ec1f0b6eb7d6f94ad37ce3c8df48c84ff848059f2065daedf7082ba2cf2 = $this->env->getExtension("native_profiler");
        $__internal_3a322ec1f0b6eb7d6f94ad37ce3c8df48c84ff848059f2065daedf7082ba2cf2->enter($__internal_3a322ec1f0b6eb7d6f94ad37ce3c8df48c84ff848059f2065daedf7082ba2cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3a322ec1f0b6eb7d6f94ad37ce3c8df48c84ff848059f2065daedf7082ba2cf2->leave($__internal_3a322ec1f0b6eb7d6f94ad37ce3c8df48c84ff848059f2065daedf7082ba2cf2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ce8f9cd277c210552642f82ffe07dd629745fed95d6c0aeb4aa0f08d038bd4a = $this->env->getExtension("native_profiler");
        $__internal_6ce8f9cd277c210552642f82ffe07dd629745fed95d6c0aeb4aa0f08d038bd4a->enter($__internal_6ce8f9cd277c210552642f82ffe07dd629745fed95d6c0aeb4aa0f08d038bd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_6ce8f9cd277c210552642f82ffe07dd629745fed95d6c0aeb4aa0f08d038bd4a->leave($__internal_6ce8f9cd277c210552642f82ffe07dd629745fed95d6c0aeb4aa0f08d038bd4a_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f01d13532f27ddc339214a91193cc6cadc47ecc0cc5f07fd39cb5dec3aaf96b5 = $this->env->getExtension("native_profiler");
        $__internal_f01d13532f27ddc339214a91193cc6cadc47ecc0cc5f07fd39cb5dec3aaf96b5->enter($__internal_f01d13532f27ddc339214a91193cc6cadc47ecc0cc5f07fd39cb5dec3aaf96b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f01d13532f27ddc339214a91193cc6cadc47ecc0cc5f07fd39cb5dec3aaf96b5->leave($__internal_f01d13532f27ddc339214a91193cc6cadc47ecc0cc5f07fd39cb5dec3aaf96b5_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_07c993bd7d8a04c887b71fabd97360327351e5ed51443b90c3e13566f8335521 = $this->env->getExtension("native_profiler");
        $__internal_07c993bd7d8a04c887b71fabd97360327351e5ed51443b90c3e13566f8335521->enter($__internal_07c993bd7d8a04c887b71fabd97360327351e5ed51443b90c3e13566f8335521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_07c993bd7d8a04c887b71fabd97360327351e5ed51443b90c3e13566f8335521->leave($__internal_07c993bd7d8a04c887b71fabd97360327351e5ed51443b90c3e13566f8335521_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ce3a24c999cc27ec1a648ee1466130b212bd58a4a666e550b708ad8e003bcc1a = $this->env->getExtension("native_profiler");
        $__internal_ce3a24c999cc27ec1a648ee1466130b212bd58a4a666e550b708ad8e003bcc1a->enter($__internal_ce3a24c999cc27ec1a648ee1466130b212bd58a4a666e550b708ad8e003bcc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_ce3a24c999cc27ec1a648ee1466130b212bd58a4a666e550b708ad8e003bcc1a->leave($__internal_ce3a24c999cc27ec1a648ee1466130b212bd58a4a666e550b708ad8e003bcc1a_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_daeb387cf7f3318992e8484bb2bad88151c88a290c11bde79f28adbe701e4770 = $this->env->getExtension("native_profiler");
        $__internal_daeb387cf7f3318992e8484bb2bad88151c88a290c11bde79f28adbe701e4770->enter($__internal_daeb387cf7f3318992e8484bb2bad88151c88a290c11bde79f28adbe701e4770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_daeb387cf7f3318992e8484bb2bad88151c88a290c11bde79f28adbe701e4770->leave($__internal_daeb387cf7f3318992e8484bb2bad88151c88a290c11bde79f28adbe701e4770_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_511725be09345c4415245b2c9115040a5ded81975c8cef909657e1d437dbdbb5 = $this->env->getExtension("native_profiler");
        $__internal_511725be09345c4415245b2c9115040a5ded81975c8cef909657e1d437dbdbb5->enter($__internal_511725be09345c4415245b2c9115040a5ded81975c8cef909657e1d437dbdbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_511725be09345c4415245b2c9115040a5ded81975c8cef909657e1d437dbdbb5->leave($__internal_511725be09345c4415245b2c9115040a5ded81975c8cef909657e1d437dbdbb5_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_62accb54235556e5df8e6357cf881b30f82c9f0fe8bec2afd290e08d02292f2f = $this->env->getExtension("native_profiler");
        $__internal_62accb54235556e5df8e6357cf881b30f82c9f0fe8bec2afd290e08d02292f2f->enter($__internal_62accb54235556e5df8e6357cf881b30f82c9f0fe8bec2afd290e08d02292f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_62accb54235556e5df8e6357cf881b30f82c9f0fe8bec2afd290e08d02292f2f->leave($__internal_62accb54235556e5df8e6357cf881b30f82c9f0fe8bec2afd290e08d02292f2f_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_b7c24cab1a7ef57d7d7a9e651a6b51e342647134bf97817f95dbbfb6d69471ee = $this->env->getExtension("native_profiler");
        $__internal_b7c24cab1a7ef57d7d7a9e651a6b51e342647134bf97817f95dbbfb6d69471ee->enter($__internal_b7c24cab1a7ef57d7d7a9e651a6b51e342647134bf97817f95dbbfb6d69471ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_b7c24cab1a7ef57d7d7a9e651a6b51e342647134bf97817f95dbbfb6d69471ee->leave($__internal_b7c24cab1a7ef57d7d7a9e651a6b51e342647134bf97817f95dbbfb6d69471ee_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01fb887c35a42a3d6fed69f7a64a0385574c05e381e863ff62a03baa627165c0 = $this->env->getExtension("native_profiler");
        $__internal_01fb887c35a42a3d6fed69f7a64a0385574c05e381e863ff62a03baa627165c0->enter($__internal_01fb887c35a42a3d6fed69f7a64a0385574c05e381e863ff62a03baa627165c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_01fb887c35a42a3d6fed69f7a64a0385574c05e381e863ff62a03baa627165c0->leave($__internal_01fb887c35a42a3d6fed69f7a64a0385574c05e381e863ff62a03baa627165c0_prof);

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
