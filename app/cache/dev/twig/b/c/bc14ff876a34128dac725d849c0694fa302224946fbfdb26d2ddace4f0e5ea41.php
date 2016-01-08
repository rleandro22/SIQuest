<?php

/* ::base.html.twig */
class __TwigTemplate_bc14ff876a34128dac725d849c0694fa302224946fbfdb26d2ddace4f0e5ea41 extends Twig_Template
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
        $__internal_7ebbd31b297c6c3a737e5d8bfd4f35dc0b0c9b0655412f533a598d9c84445507 = $this->env->getExtension("native_profiler");
        $__internal_7ebbd31b297c6c3a737e5d8bfd4f35dc0b0c9b0655412f533a598d9c84445507->enter($__internal_7ebbd31b297c6c3a737e5d8bfd4f35dc0b0c9b0655412f533a598d9c84445507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7ebbd31b297c6c3a737e5d8bfd4f35dc0b0c9b0655412f533a598d9c84445507->leave($__internal_7ebbd31b297c6c3a737e5d8bfd4f35dc0b0c9b0655412f533a598d9c84445507_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_206290df86884825036e324027fc3af8e699b1b4226bed927c81b81712fd370e = $this->env->getExtension("native_profiler");
        $__internal_206290df86884825036e324027fc3af8e699b1b4226bed927c81b81712fd370e->enter($__internal_206290df86884825036e324027fc3af8e699b1b4226bed927c81b81712fd370e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_206290df86884825036e324027fc3af8e699b1b4226bed927c81b81712fd370e->leave($__internal_206290df86884825036e324027fc3af8e699b1b4226bed927c81b81712fd370e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94f11b75eee3fcaf398ef19356665b5758e5db9b7af9dc19edea5a3e8ea5ec35 = $this->env->getExtension("native_profiler");
        $__internal_94f11b75eee3fcaf398ef19356665b5758e5db9b7af9dc19edea5a3e8ea5ec35->enter($__internal_94f11b75eee3fcaf398ef19356665b5758e5db9b7af9dc19edea5a3e8ea5ec35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_94f11b75eee3fcaf398ef19356665b5758e5db9b7af9dc19edea5a3e8ea5ec35->leave($__internal_94f11b75eee3fcaf398ef19356665b5758e5db9b7af9dc19edea5a3e8ea5ec35_prof);

    }

    // line 22
    public function block_barra($context, array $blocks = array())
    {
        $__internal_a168eaa0632b9c6747e857b81b197754b65e51231e7de77247e3fcc5ca80f871 = $this->env->getExtension("native_profiler");
        $__internal_a168eaa0632b9c6747e857b81b197754b65e51231e7de77247e3fcc5ca80f871->enter($__internal_a168eaa0632b9c6747e857b81b197754b65e51231e7de77247e3fcc5ca80f871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

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
        
        $__internal_a168eaa0632b9c6747e857b81b197754b65e51231e7de77247e3fcc5ca80f871->leave($__internal_a168eaa0632b9c6747e857b81b197754b65e51231e7de77247e3fcc5ca80f871_prof);

    }

    // line 26
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_c82a268d6573052a2309c10e5d99e3411d1ecd201837e22b699966c339e62fe7 = $this->env->getExtension("native_profiler");
        $__internal_c82a268d6573052a2309c10e5d99e3411d1ecd201837e22b699966c339e62fe7->enter($__internal_c82a268d6573052a2309c10e5d99e3411d1ecd201837e22b699966c339e62fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_c82a268d6573052a2309c10e5d99e3411d1ecd201837e22b699966c339e62fe7->leave($__internal_c82a268d6573052a2309c10e5d99e3411d1ecd201837e22b699966c339e62fe7_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2db1fa85cc8af4b018e760c6ea9ce27b081fc6ea0e84a9cd725e5918d5295a90 = $this->env->getExtension("native_profiler");
        $__internal_2db1fa85cc8af4b018e760c6ea9ce27b081fc6ea0e84a9cd725e5918d5295a90->enter($__internal_2db1fa85cc8af4b018e760c6ea9ce27b081fc6ea0e84a9cd725e5918d5295a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_2db1fa85cc8af4b018e760c6ea9ce27b081fc6ea0e84a9cd725e5918d5295a90->leave($__internal_2db1fa85cc8af4b018e760c6ea9ce27b081fc6ea0e84a9cd725e5918d5295a90_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_a077eac0b065feedc61b8c8e01287bf198dbaad70b25a10aceec659997a73865 = $this->env->getExtension("native_profiler");
        $__internal_a077eac0b065feedc61b8c8e01287bf198dbaad70b25a10aceec659997a73865->enter($__internal_a077eac0b065feedc61b8c8e01287bf198dbaad70b25a10aceec659997a73865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "
        ";
        
        $__internal_a077eac0b065feedc61b8c8e01287bf198dbaad70b25a10aceec659997a73865->leave($__internal_a077eac0b065feedc61b8c8e01287bf198dbaad70b25a10aceec659997a73865_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_27a7449e5fda11485f7fb7c0a6b9784ab01b3705c4ae106a5da8cbdb010b0813 = $this->env->getExtension("native_profiler");
        $__internal_27a7449e5fda11485f7fb7c0a6b9784ab01b3705c4ae106a5da8cbdb010b0813->enter($__internal_27a7449e5fda11485f7fb7c0a6b9784ab01b3705c4ae106a5da8cbdb010b0813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
        ";
        
        $__internal_27a7449e5fda11485f7fb7c0a6b9784ab01b3705c4ae106a5da8cbdb010b0813->leave($__internal_27a7449e5fda11485f7fb7c0a6b9784ab01b3705c4ae106a5da8cbdb010b0813_prof);

    }

    // line 55
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_20666312c443a1ab36cf7fb379410c609c0c84d9fedb05fd924d67198079661e = $this->env->getExtension("native_profiler");
        $__internal_20666312c443a1ab36cf7fb379410c609c0c84d9fedb05fd924d67198079661e->enter($__internal_20666312c443a1ab36cf7fb379410c609c0c84d9fedb05fd924d67198079661e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        // line 56
        echo "        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "        </footer>\t
";
        
        $__internal_20666312c443a1ab36cf7fb379410c609c0c84d9fedb05fd924d67198079661e->leave($__internal_20666312c443a1ab36cf7fb379410c609c0c84d9fedb05fd924d67198079661e_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_60a2fa1a55161175677308d0f0171c1cc100fed16c84c60a91086e1b24feb7e3 = $this->env->getExtension("native_profiler");
        $__internal_60a2fa1a55161175677308d0f0171c1cc100fed16c84c60a91086e1b24feb7e3->enter($__internal_60a2fa1a55161175677308d0f0171c1cc100fed16c84c60a91086e1b24feb7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_60a2fa1a55161175677308d0f0171c1cc100fed16c84c60a91086e1b24feb7e3->leave($__internal_60a2fa1a55161175677308d0f0171c1cc100fed16c84c60a91086e1b24feb7e3_prof);

    }

    // line 103
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_85b5537a68ddea8c98d02954bd13c3fae6bb37711857a55b9d23a2fc58944112 = $this->env->getExtension("native_profiler");
        $__internal_85b5537a68ddea8c98d02954bd13c3fae6bb37711857a55b9d23a2fc58944112->enter($__internal_85b5537a68ddea8c98d02954bd13c3fae6bb37711857a55b9d23a2fc58944112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_85b5537a68ddea8c98d02954bd13c3fae6bb37711857a55b9d23a2fc58944112->leave($__internal_85b5537a68ddea8c98d02954bd13c3fae6bb37711857a55b9d23a2fc58944112_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d34b9ac5113df48001a9c40d5659e6d2a3cb2142a0b604701d97348394c16c5 = $this->env->getExtension("native_profiler");
        $__internal_7d34b9ac5113df48001a9c40d5659e6d2a3cb2142a0b604701d97348394c16c5->enter($__internal_7d34b9ac5113df48001a9c40d5659e6d2a3cb2142a0b604701d97348394c16c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7d34b9ac5113df48001a9c40d5659e6d2a3cb2142a0b604701d97348394c16c5->leave($__internal_7d34b9ac5113df48001a9c40d5659e6d2a3cb2142a0b604701d97348394c16c5_prof);

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
