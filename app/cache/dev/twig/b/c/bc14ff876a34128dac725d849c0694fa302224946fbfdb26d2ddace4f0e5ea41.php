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
        $__internal_04fa846a1d903953e52df5352c2f73cf591cafd8906fdd3dddc73d7928aa7f4c = $this->env->getExtension("native_profiler");
        $__internal_04fa846a1d903953e52df5352c2f73cf591cafd8906fdd3dddc73d7928aa7f4c->enter($__internal_04fa846a1d903953e52df5352c2f73cf591cafd8906fdd3dddc73d7928aa7f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 134
        echo "    </body>
</html>";
        
        $__internal_04fa846a1d903953e52df5352c2f73cf591cafd8906fdd3dddc73d7928aa7f4c->leave($__internal_04fa846a1d903953e52df5352c2f73cf591cafd8906fdd3dddc73d7928aa7f4c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_24fa7b9f720fd599fc3442e9c5955d162a389e2804a1155b64a209d21497a23e = $this->env->getExtension("native_profiler");
        $__internal_24fa7b9f720fd599fc3442e9c5955d162a389e2804a1155b64a209d21497a23e->enter($__internal_24fa7b9f720fd599fc3442e9c5955d162a389e2804a1155b64a209d21497a23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_24fa7b9f720fd599fc3442e9c5955d162a389e2804a1155b64a209d21497a23e->leave($__internal_24fa7b9f720fd599fc3442e9c5955d162a389e2804a1155b64a209d21497a23e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa40625e94ae921c9b32131857c39e7fc582ad73cd3c47817495e00601ff5763 = $this->env->getExtension("native_profiler");
        $__internal_aa40625e94ae921c9b32131857c39e7fc582ad73cd3c47817495e00601ff5763->enter($__internal_aa40625e94ae921c9b32131857c39e7fc582ad73cd3c47817495e00601ff5763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_aa40625e94ae921c9b32131857c39e7fc582ad73cd3c47817495e00601ff5763->leave($__internal_aa40625e94ae921c9b32131857c39e7fc582ad73cd3c47817495e00601ff5763_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_595cff9587c4311624a1a22ccf74ffde5ef297d38fd48e8cdf0478d215afcd74 = $this->env->getExtension("native_profiler");
        $__internal_595cff9587c4311624a1a22ccf74ffde5ef297d38fd48e8cdf0478d215afcd74->enter($__internal_595cff9587c4311624a1a22ccf74ffde5ef297d38fd48e8cdf0478d215afcd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_595cff9587c4311624a1a22ccf74ffde5ef297d38fd48e8cdf0478d215afcd74->leave($__internal_595cff9587c4311624a1a22ccf74ffde5ef297d38fd48e8cdf0478d215afcd74_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a17ac2d772b136541ab5c1e5ca1f5c45980c40cd478a452f1fe2848b8c591e14 = $this->env->getExtension("native_profiler");
        $__internal_a17ac2d772b136541ab5c1e5ca1f5c45980c40cd478a452f1fe2848b8c591e14->enter($__internal_a17ac2d772b136541ab5c1e5ca1f5c45980c40cd478a452f1fe2848b8c591e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_a17ac2d772b136541ab5c1e5ca1f5c45980c40cd478a452f1fe2848b8c591e14->leave($__internal_a17ac2d772b136541ab5c1e5ca1f5c45980c40cd478a452f1fe2848b8c591e14_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_0aed0eaa2f2e652b0ca05dfa23fff6d5ce70542f8813ac934ace21da2ab58e47 = $this->env->getExtension("native_profiler");
        $__internal_0aed0eaa2f2e652b0ca05dfa23fff6d5ce70542f8813ac934ace21da2ab58e47->enter($__internal_0aed0eaa2f2e652b0ca05dfa23fff6d5ce70542f8813ac934ace21da2ab58e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_0aed0eaa2f2e652b0ca05dfa23fff6d5ce70542f8813ac934ace21da2ab58e47->leave($__internal_0aed0eaa2f2e652b0ca05dfa23fff6d5ce70542f8813ac934ace21da2ab58e47_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_70938b4262d48ebcfe7e9cf6a9ae6faedea40442eb0d28180158eea9ce72227b = $this->env->getExtension("native_profiler");
        $__internal_70938b4262d48ebcfe7e9cf6a9ae6faedea40442eb0d28180158eea9ce72227b->enter($__internal_70938b4262d48ebcfe7e9cf6a9ae6faedea40442eb0d28180158eea9ce72227b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_70938b4262d48ebcfe7e9cf6a9ae6faedea40442eb0d28180158eea9ce72227b->leave($__internal_70938b4262d48ebcfe7e9cf6a9ae6faedea40442eb0d28180158eea9ce72227b_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_749467167426a617432f2b51d3e4899ad40d87f49f42268a1f63ce43ddbb0302 = $this->env->getExtension("native_profiler");
        $__internal_749467167426a617432f2b51d3e4899ad40d87f49f42268a1f63ce43ddbb0302->enter($__internal_749467167426a617432f2b51d3e4899ad40d87f49f42268a1f63ce43ddbb0302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_749467167426a617432f2b51d3e4899ad40d87f49f42268a1f63ce43ddbb0302->leave($__internal_749467167426a617432f2b51d3e4899ad40d87f49f42268a1f63ce43ddbb0302_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_a6147dba15d052bab3fbe5b914fb3fdfe70cb456772a4b7df4e02ddefda7d3f3 = $this->env->getExtension("native_profiler");
        $__internal_a6147dba15d052bab3fbe5b914fb3fdfe70cb456772a4b7df4e02ddefda7d3f3->enter($__internal_a6147dba15d052bab3fbe5b914fb3fdfe70cb456772a4b7df4e02ddefda7d3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_a6147dba15d052bab3fbe5b914fb3fdfe70cb456772a4b7df4e02ddefda7d3f3->leave($__internal_a6147dba15d052bab3fbe5b914fb3fdfe70cb456772a4b7df4e02ddefda7d3f3_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0025efdfb0ac76bb1f9c1e8cc61f392b37133181e4c44eb9b1ccf1ba44af5bcd = $this->env->getExtension("native_profiler");
        $__internal_0025efdfb0ac76bb1f9c1e8cc61f392b37133181e4c44eb9b1ccf1ba44af5bcd->enter($__internal_0025efdfb0ac76bb1f9c1e8cc61f392b37133181e4c44eb9b1ccf1ba44af5bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/numero.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
        ";
        
        $__internal_0025efdfb0ac76bb1f9c1e8cc61f392b37133181e4c44eb9b1ccf1ba44af5bcd->leave($__internal_0025efdfb0ac76bb1f9c1e8cc61f392b37133181e4c44eb9b1ccf1ba44af5bcd_prof);

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
        return array (  343 => 132,  339 => 131,  335 => 130,  331 => 129,  327 => 127,  321 => 126,  311 => 105,  306 => 103,  303 => 102,  297 => 101,  276 => 108,  274 => 101,  227 => 56,  221 => 55,  213 => 49,  207 => 48,  199 => 44,  193 => 43,  181 => 34,  177 => 32,  171 => 31,  159 => 25,  150 => 14,  145 => 12,  141 => 11,  137 => 10,  132 => 9,  126 => 8,  114 => 6,  106 => 134,  104 => 126,  99 => 123,  97 => 55,  90 => 50,  88 => 48,  83 => 45,  81 => 43,  74 => 38,  72 => 31,  67 => 29,  60 => 25,  49 => 17,  45 => 15,  43 => 8,  38 => 6,  31 => 1,);
    }
}
