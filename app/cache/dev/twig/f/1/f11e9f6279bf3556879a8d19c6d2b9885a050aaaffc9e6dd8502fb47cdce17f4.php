<?php

/* ::base.html.twig */
class __TwigTemplate_f11e9f6279bf3556879a8d19c6d2b9885a050aaaffc9e6dd8502fb47cdce17f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'barra' => array($this, 'block_barra'),
            'mensajeLogueado' => array($this, 'block_mensajeLogueado'),
            'navigation' => array($this, 'block_navigation'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'piepagina' => array($this, 'block_piepagina'),
            'footer' => array($this, 'block_footer'),
            'navegacionfooter' => array($this, 'block_navegacionfooter'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25f118b92359e905706b636e2986a6384a25d28242ed453dd0587dfad22d1b5b = $this->env->getExtension("native_profiler");
        $__internal_25f118b92359e905706b636e2986a6384a25d28242ed453dd0587dfad22d1b5b->enter($__internal_25f118b92359e905706b636e2986a6384a25d28242ed453dd0587dfad22d1b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        ";
        // line 22
        $this->displayBlock('barra', $context, $blocks);
        // line 42
        echo "  
        <!-- /.navbar -->

        ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 47
        echo "  


        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "  


        ";
        // line 55
        $this->displayBlock('piepagina', $context, $blocks);
        // line 127
        echo "
        ";
        // line 128
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "    </body>
</html>";
        
        $__internal_25f118b92359e905706b636e2986a6384a25d28242ed453dd0587dfad22d1b5b->leave($__internal_25f118b92359e905706b636e2986a6384a25d28242ed453dd0587dfad22d1b5b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_762db2fdc7ccbe3b43085bbad56ab1e264cf14678e726cbead4fc2721a021dd4 = $this->env->getExtension("native_profiler");
        $__internal_762db2fdc7ccbe3b43085bbad56ab1e264cf14678e726cbead4fc2721a021dd4->enter($__internal_762db2fdc7ccbe3b43085bbad56ab1e264cf14678e726cbead4fc2721a021dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_762db2fdc7ccbe3b43085bbad56ab1e264cf14678e726cbead4fc2721a021dd4->leave($__internal_762db2fdc7ccbe3b43085bbad56ab1e264cf14678e726cbead4fc2721a021dd4_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ee6e6d404be979cdc1b642b9e6d973e12ec29ef25e1284ee99553119004ac19 = $this->env->getExtension("native_profiler");
        $__internal_8ee6e6d404be979cdc1b642b9e6d973e12ec29ef25e1284ee99553119004ac19->enter($__internal_8ee6e6d404be979cdc1b642b9e6d973e12ec29ef25e1284ee99553119004ac19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
        ";
        
        $__internal_8ee6e6d404be979cdc1b642b9e6d973e12ec29ef25e1284ee99553119004ac19->leave($__internal_8ee6e6d404be979cdc1b642b9e6d973e12ec29ef25e1284ee99553119004ac19_prof);

    }

    // line 22
    public function block_barra($context, array $blocks = array())
    {
        $__internal_f85100c27845715b036f2233a346dce4bc15a03f6ac3413c86c234c648feb44d = $this->env->getExtension("native_profiler");
        $__internal_f85100c27845715b036f2233a346dce4bc15a03f6ac3413c86c234c648feb44d->enter($__internal_f85100c27845715b036f2233a346dce4bc15a03f6ac3413c86c234c648feb44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

        // line 23
        echo "            <!-- Fixed navbar -->
            <div class=\"navbar navbar-inverse navbar-fixed-top headroom\" >
                <div class=\"container\">
                    <div class=\"log-text\" >";
        // line 26
        $this->displayBlock('mensajeLogueado', $context, $blocks);
        echo "</div>
                    <div class=\"navbar-header\">
                        <!-- Button for smallest screens -->
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                        <a class=\"navbar-brand\" href=\"http://www.uci.ac.cr/\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"SIQuest\"></a>
                    </div>
                    ";
        // line 32
        $this->displayBlock('navigation', $context, $blocks);
        // line 39
        echo "  
                </div>
            </div> 
        ";
        
        $__internal_f85100c27845715b036f2233a346dce4bc15a03f6ac3413c86c234c648feb44d->leave($__internal_f85100c27845715b036f2233a346dce4bc15a03f6ac3413c86c234c648feb44d_prof);

    }

    // line 26
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_d12a67086abb42d129f6d1e24c416801d169f4abf9a17af4fac0783dc49701eb = $this->env->getExtension("native_profiler");
        $__internal_d12a67086abb42d129f6d1e24c416801d169f4abf9a17af4fac0783dc49701eb->enter($__internal_d12a67086abb42d129f6d1e24c416801d169f4abf9a17af4fac0783dc49701eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_d12a67086abb42d129f6d1e24c416801d169f4abf9a17af4fac0783dc49701eb->leave($__internal_d12a67086abb42d129f6d1e24c416801d169f4abf9a17af4fac0783dc49701eb_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_66ae59b41db852387abdce1092cfdccf5fb492ae17ad5f1e603795723db9be88 = $this->env->getExtension("native_profiler");
        $__internal_66ae59b41db852387abdce1092cfdccf5fb492ae17ad5f1e603795723db9be88->enter($__internal_66ae59b41db852387abdce1092cfdccf5fb492ae17ad5f1e603795723db9be88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 33
        echo "                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav pull-right\">
                                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Inicio</a></li>
                                <li><a href=\"about.html\">Ayuda</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    ";
        
        $__internal_66ae59b41db852387abdce1092cfdccf5fb492ae17ad5f1e603795723db9be88->leave($__internal_66ae59b41db852387abdce1092cfdccf5fb492ae17ad5f1e603795723db9be88_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_89eb5c9a4def7a375fdc96136b79b37d5d178c805805026a2adfef1068827cb3 = $this->env->getExtension("native_profiler");
        $__internal_89eb5c9a4def7a375fdc96136b79b37d5d178c805805026a2adfef1068827cb3->enter($__internal_89eb5c9a4def7a375fdc96136b79b37d5d178c805805026a2adfef1068827cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "
        ";
        
        $__internal_89eb5c9a4def7a375fdc96136b79b37d5d178c805805026a2adfef1068827cb3->leave($__internal_89eb5c9a4def7a375fdc96136b79b37d5d178c805805026a2adfef1068827cb3_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_48b9301141272db5250221d2a9717154b6f2d127c6f12f0b34ce6d9a79646e75 = $this->env->getExtension("native_profiler");
        $__internal_48b9301141272db5250221d2a9717154b6f2d127c6f12f0b34ce6d9a79646e75->enter($__internal_48b9301141272db5250221d2a9717154b6f2d127c6f12f0b34ce6d9a79646e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
        ";
        
        $__internal_48b9301141272db5250221d2a9717154b6f2d127c6f12f0b34ce6d9a79646e75->leave($__internal_48b9301141272db5250221d2a9717154b6f2d127c6f12f0b34ce6d9a79646e75_prof);

    }

    // line 55
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_75e3ad7118b51f04e5ccbaf64a346f11d363342ed351f412c7acfdecc92180ab = $this->env->getExtension("native_profiler");
        $__internal_75e3ad7118b51f04e5ccbaf64a346f11d363342ed351f412c7acfdecc92180ab->enter($__internal_75e3ad7118b51f04e5ccbaf64a346f11d363342ed351f412c7acfdecc92180ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        // line 56
        echo "        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "        </footer>\t
";
        
        $__internal_75e3ad7118b51f04e5ccbaf64a346f11d363342ed351f412c7acfdecc92180ab->leave($__internal_75e3ad7118b51f04e5ccbaf64a346f11d363342ed351f412c7acfdecc92180ab_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b4c35ed068b278c777cab90ae0860dcb84335d3bdc7275729b136f070535e993 = $this->env->getExtension("native_profiler");
        $__internal_b4c35ed068b278c777cab90ae0860dcb84335d3bdc7275729b136f070535e993->enter($__internal_b4c35ed068b278c777cab90ae0860dcb84335d3bdc7275729b136f070535e993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 58
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
        // line 103
        $this->displayBlock('navegacionfooter', $context, $blocks);
        // line 110
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
        
        $__internal_b4c35ed068b278c777cab90ae0860dcb84335d3bdc7275729b136f070535e993->leave($__internal_b4c35ed068b278c777cab90ae0860dcb84335d3bdc7275729b136f070535e993_prof);

    }

    // line 103
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_13a0d0434b8913471cbf15908e9c5338b7b198a5a09c7e91d559f8208c7d3f47 = $this->env->getExtension("native_profiler");
        $__internal_13a0d0434b8913471cbf15908e9c5338b7b198a5a09c7e91d559f8208c7d3f47->enter($__internal_13a0d0434b8913471cbf15908e9c5338b7b198a5a09c7e91d559f8208c7d3f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 104
        echo "                                        <p class=\"simplenav\">
                                            <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
                                            <a href=\"about.html\">Ayuda</a> |
                                            <a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Identificarse</a>
                                        </p>
                                    ";
        
        $__internal_13a0d0434b8913471cbf15908e9c5338b7b198a5a09c7e91d559f8208c7d3f47->leave($__internal_13a0d0434b8913471cbf15908e9c5338b7b198a5a09c7e91d559f8208c7d3f47_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d1a12eed613beb028f4b926560c2f7c46e0e450df542e15b1b505dc2b60c541 = $this->env->getExtension("native_profiler");
        $__internal_8d1a12eed613beb028f4b926560c2f7c46e0e450df542e15b1b505dc2b60c541->enter($__internal_8d1a12eed613beb028f4b926560c2f7c46e0e450df542e15b1b505dc2b60c541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 129
        echo "            <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
            <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>  
            <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/headroom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jQuery.headroom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/template.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
            <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/numero.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
        ";
        
        $__internal_8d1a12eed613beb028f4b926560c2f7c46e0e450df542e15b1b505dc2b60c541->leave($__internal_8d1a12eed613beb028f4b926560c2f7c46e0e450df542e15b1b505dc2b60c541_prof);

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
        return array (  378 => 134,  374 => 133,  370 => 132,  366 => 131,  362 => 129,  356 => 128,  346 => 107,  341 => 105,  338 => 104,  332 => 103,  311 => 110,  309 => 103,  262 => 58,  256 => 57,  248 => 125,  246 => 57,  243 => 56,  237 => 55,  229 => 51,  223 => 50,  215 => 46,  209 => 45,  197 => 35,  193 => 33,  187 => 32,  175 => 26,  165 => 39,  163 => 32,  158 => 30,  151 => 26,  146 => 23,  140 => 22,  131 => 14,  126 => 12,  122 => 11,  118 => 10,  113 => 9,  107 => 8,  95 => 6,  87 => 136,  85 => 128,  82 => 127,  80 => 55,  75 => 52,  73 => 50,  68 => 47,  66 => 45,  61 => 42,  59 => 22,  51 => 17,  47 => 15,  45 => 8,  40 => 6,  33 => 1,);
    }
}
