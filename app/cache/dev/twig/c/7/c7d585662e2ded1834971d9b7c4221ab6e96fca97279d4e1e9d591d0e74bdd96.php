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
        $__internal_296776bd39475b22e142bb1bbd5b5bdc9180696c883d0b9cb0ef68cdee507fdc = $this->env->getExtension("native_profiler");
        $__internal_296776bd39475b22e142bb1bbd5b5bdc9180696c883d0b9cb0ef68cdee507fdc->enter($__internal_296776bd39475b22e142bb1bbd5b5bdc9180696c883d0b9cb0ef68cdee507fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_296776bd39475b22e142bb1bbd5b5bdc9180696c883d0b9cb0ef68cdee507fdc->leave($__internal_296776bd39475b22e142bb1bbd5b5bdc9180696c883d0b9cb0ef68cdee507fdc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6999582db3816342a1466445a96ac6caec3b212a9877a2b61b9cfeb200c3980a = $this->env->getExtension("native_profiler");
        $__internal_6999582db3816342a1466445a96ac6caec3b212a9877a2b61b9cfeb200c3980a->enter($__internal_6999582db3816342a1466445a96ac6caec3b212a9877a2b61b9cfeb200c3980a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_6999582db3816342a1466445a96ac6caec3b212a9877a2b61b9cfeb200c3980a->leave($__internal_6999582db3816342a1466445a96ac6caec3b212a9877a2b61b9cfeb200c3980a_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16b45e58431c952d96f16b79aa0d20199fb4549f3cb1a097c8f7b17aacb12bb1 = $this->env->getExtension("native_profiler");
        $__internal_16b45e58431c952d96f16b79aa0d20199fb4549f3cb1a097c8f7b17aacb12bb1->enter($__internal_16b45e58431c952d96f16b79aa0d20199fb4549f3cb1a097c8f7b17aacb12bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_16b45e58431c952d96f16b79aa0d20199fb4549f3cb1a097c8f7b17aacb12bb1->leave($__internal_16b45e58431c952d96f16b79aa0d20199fb4549f3cb1a097c8f7b17aacb12bb1_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_bf6fddc563af2a96f2fb4415b61139e4a584ca700574e981c4d5a12fff973175 = $this->env->getExtension("native_profiler");
        $__internal_bf6fddc563af2a96f2fb4415b61139e4a584ca700574e981c4d5a12fff973175->enter($__internal_bf6fddc563af2a96f2fb4415b61139e4a584ca700574e981c4d5a12fff973175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_bf6fddc563af2a96f2fb4415b61139e4a584ca700574e981c4d5a12fff973175->leave($__internal_bf6fddc563af2a96f2fb4415b61139e4a584ca700574e981c4d5a12fff973175_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_8aab513b81b8f4b298109e9f74678afec0abe0b33c7704da60def4fdf929999d = $this->env->getExtension("native_profiler");
        $__internal_8aab513b81b8f4b298109e9f74678afec0abe0b33c7704da60def4fdf929999d->enter($__internal_8aab513b81b8f4b298109e9f74678afec0abe0b33c7704da60def4fdf929999d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_8aab513b81b8f4b298109e9f74678afec0abe0b33c7704da60def4fdf929999d->leave($__internal_8aab513b81b8f4b298109e9f74678afec0abe0b33c7704da60def4fdf929999d_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_7900abf8110faa8cc702e937d7c049abed2b7d6278ed01c3a2813a954bc437e2 = $this->env->getExtension("native_profiler");
        $__internal_7900abf8110faa8cc702e937d7c049abed2b7d6278ed01c3a2813a954bc437e2->enter($__internal_7900abf8110faa8cc702e937d7c049abed2b7d6278ed01c3a2813a954bc437e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_7900abf8110faa8cc702e937d7c049abed2b7d6278ed01c3a2813a954bc437e2->leave($__internal_7900abf8110faa8cc702e937d7c049abed2b7d6278ed01c3a2813a954bc437e2_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b77328a4ab71b09dfbb400b9d54b60270f4ac38e7de57aa8213024ee82ce512 = $this->env->getExtension("native_profiler");
        $__internal_0b77328a4ab71b09dfbb400b9d54b60270f4ac38e7de57aa8213024ee82ce512->enter($__internal_0b77328a4ab71b09dfbb400b9d54b60270f4ac38e7de57aa8213024ee82ce512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_0b77328a4ab71b09dfbb400b9d54b60270f4ac38e7de57aa8213024ee82ce512->leave($__internal_0b77328a4ab71b09dfbb400b9d54b60270f4ac38e7de57aa8213024ee82ce512_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_758ad1a16c8c964d732d2aa139712df858b796611b2284a232ddabecc2017a9f = $this->env->getExtension("native_profiler");
        $__internal_758ad1a16c8c964d732d2aa139712df858b796611b2284a232ddabecc2017a9f->enter($__internal_758ad1a16c8c964d732d2aa139712df858b796611b2284a232ddabecc2017a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_758ad1a16c8c964d732d2aa139712df858b796611b2284a232ddabecc2017a9f->leave($__internal_758ad1a16c8c964d732d2aa139712df858b796611b2284a232ddabecc2017a9f_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_8b19b580c6fdc3e613d776038c0d86a40b064c85c8f9249878c350ab283fe50a = $this->env->getExtension("native_profiler");
        $__internal_8b19b580c6fdc3e613d776038c0d86a40b064c85c8f9249878c350ab283fe50a->enter($__internal_8b19b580c6fdc3e613d776038c0d86a40b064c85c8f9249878c350ab283fe50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_8b19b580c6fdc3e613d776038c0d86a40b064c85c8f9249878c350ab283fe50a->leave($__internal_8b19b580c6fdc3e613d776038c0d86a40b064c85c8f9249878c350ab283fe50a_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a8d90c7d9751ab7e5cfa4b4768ba0bf7430f39ef394b6d422759c8421426c24 = $this->env->getExtension("native_profiler");
        $__internal_5a8d90c7d9751ab7e5cfa4b4768ba0bf7430f39ef394b6d422759c8421426c24->enter($__internal_5a8d90c7d9751ab7e5cfa4b4768ba0bf7430f39ef394b6d422759c8421426c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5a8d90c7d9751ab7e5cfa4b4768ba0bf7430f39ef394b6d422759c8421426c24->leave($__internal_5a8d90c7d9751ab7e5cfa4b4768ba0bf7430f39ef394b6d422759c8421426c24_prof);

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
