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
        $__internal_7801be0d1ead00da4bba71d6132dc02ad3c0e22589aeec8744de55136cd37db9 = $this->env->getExtension("native_profiler");
        $__internal_7801be0d1ead00da4bba71d6132dc02ad3c0e22589aeec8744de55136cd37db9->enter($__internal_7801be0d1ead00da4bba71d6132dc02ad3c0e22589aeec8744de55136cd37db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7801be0d1ead00da4bba71d6132dc02ad3c0e22589aeec8744de55136cd37db9->leave($__internal_7801be0d1ead00da4bba71d6132dc02ad3c0e22589aeec8744de55136cd37db9_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ec4056de561927a252d6fc7e85d9f85ae9c2b0256677ac7187cba136852e918 = $this->env->getExtension("native_profiler");
        $__internal_8ec4056de561927a252d6fc7e85d9f85ae9c2b0256677ac7187cba136852e918->enter($__internal_8ec4056de561927a252d6fc7e85d9f85ae9c2b0256677ac7187cba136852e918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_8ec4056de561927a252d6fc7e85d9f85ae9c2b0256677ac7187cba136852e918->leave($__internal_8ec4056de561927a252d6fc7e85d9f85ae9c2b0256677ac7187cba136852e918_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59bc84611ef646e878227c560d4a3135c3e9f7a0bf5824adaf626458b853811c = $this->env->getExtension("native_profiler");
        $__internal_59bc84611ef646e878227c560d4a3135c3e9f7a0bf5824adaf626458b853811c->enter($__internal_59bc84611ef646e878227c560d4a3135c3e9f7a0bf5824adaf626458b853811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_59bc84611ef646e878227c560d4a3135c3e9f7a0bf5824adaf626458b853811c->leave($__internal_59bc84611ef646e878227c560d4a3135c3e9f7a0bf5824adaf626458b853811c_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_dc338acf932dbcf256e3eaa78858618ce9ab89c9164079f5f374d2a4344b3851 = $this->env->getExtension("native_profiler");
        $__internal_dc338acf932dbcf256e3eaa78858618ce9ab89c9164079f5f374d2a4344b3851->enter($__internal_dc338acf932dbcf256e3eaa78858618ce9ab89c9164079f5f374d2a4344b3851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_dc338acf932dbcf256e3eaa78858618ce9ab89c9164079f5f374d2a4344b3851->leave($__internal_dc338acf932dbcf256e3eaa78858618ce9ab89c9164079f5f374d2a4344b3851_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_5bc9155d93cf5ac53106e4be9b563bcb8636d6ec6b7234b786f6e79b2a765637 = $this->env->getExtension("native_profiler");
        $__internal_5bc9155d93cf5ac53106e4be9b563bcb8636d6ec6b7234b786f6e79b2a765637->enter($__internal_5bc9155d93cf5ac53106e4be9b563bcb8636d6ec6b7234b786f6e79b2a765637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_5bc9155d93cf5ac53106e4be9b563bcb8636d6ec6b7234b786f6e79b2a765637->leave($__internal_5bc9155d93cf5ac53106e4be9b563bcb8636d6ec6b7234b786f6e79b2a765637_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_90467cda3683c68edbbfab392e2979fcd683338fb7d0267bfd450faad746389c = $this->env->getExtension("native_profiler");
        $__internal_90467cda3683c68edbbfab392e2979fcd683338fb7d0267bfd450faad746389c->enter($__internal_90467cda3683c68edbbfab392e2979fcd683338fb7d0267bfd450faad746389c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_90467cda3683c68edbbfab392e2979fcd683338fb7d0267bfd450faad746389c->leave($__internal_90467cda3683c68edbbfab392e2979fcd683338fb7d0267bfd450faad746389c_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_60b9ce1ce8709905225542e0f08b7b2bd3442c893bf88417a3501531799b6cb9 = $this->env->getExtension("native_profiler");
        $__internal_60b9ce1ce8709905225542e0f08b7b2bd3442c893bf88417a3501531799b6cb9->enter($__internal_60b9ce1ce8709905225542e0f08b7b2bd3442c893bf88417a3501531799b6cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_60b9ce1ce8709905225542e0f08b7b2bd3442c893bf88417a3501531799b6cb9->leave($__internal_60b9ce1ce8709905225542e0f08b7b2bd3442c893bf88417a3501531799b6cb9_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7769e9b40543dde8b4b9b7d51c23e8dcb8045a8cc95ca184464f6c66dd57c1cc = $this->env->getExtension("native_profiler");
        $__internal_7769e9b40543dde8b4b9b7d51c23e8dcb8045a8cc95ca184464f6c66dd57c1cc->enter($__internal_7769e9b40543dde8b4b9b7d51c23e8dcb8045a8cc95ca184464f6c66dd57c1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_7769e9b40543dde8b4b9b7d51c23e8dcb8045a8cc95ca184464f6c66dd57c1cc->leave($__internal_7769e9b40543dde8b4b9b7d51c23e8dcb8045a8cc95ca184464f6c66dd57c1cc_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_10ab985da1974863cacda32ead3cb2470925c2d5f87ad32a8d6315c9796639a2 = $this->env->getExtension("native_profiler");
        $__internal_10ab985da1974863cacda32ead3cb2470925c2d5f87ad32a8d6315c9796639a2->enter($__internal_10ab985da1974863cacda32ead3cb2470925c2d5f87ad32a8d6315c9796639a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_10ab985da1974863cacda32ead3cb2470925c2d5f87ad32a8d6315c9796639a2->leave($__internal_10ab985da1974863cacda32ead3cb2470925c2d5f87ad32a8d6315c9796639a2_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a442de290e1eb532b30ea5e9634a1f4fc86e043b72c72725f4c209e2aa627dbc = $this->env->getExtension("native_profiler");
        $__internal_a442de290e1eb532b30ea5e9634a1f4fc86e043b72c72725f4c209e2aa627dbc->enter($__internal_a442de290e1eb532b30ea5e9634a1f4fc86e043b72c72725f4c209e2aa627dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a442de290e1eb532b30ea5e9634a1f4fc86e043b72c72725f4c209e2aa627dbc->leave($__internal_a442de290e1eb532b30ea5e9634a1f4fc86e043b72c72725f4c209e2aa627dbc_prof);

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
        return array (  339 => 131,  335 => 130,  331 => 129,  327 => 127,  321 => 126,  311 => 105,  306 => 103,  303 => 102,  297 => 101,  276 => 108,  274 => 101,  227 => 56,  221 => 55,  213 => 49,  207 => 48,  199 => 44,  193 => 43,  181 => 34,  177 => 32,  171 => 31,  159 => 25,  150 => 14,  145 => 12,  141 => 11,  137 => 10,  132 => 9,  126 => 8,  114 => 6,  106 => 133,  104 => 126,  99 => 123,  97 => 55,  90 => 50,  88 => 48,  83 => 45,  81 => 43,  74 => 38,  72 => 31,  67 => 29,  60 => 25,  49 => 17,  45 => 15,  43 => 8,  38 => 6,  31 => 1,);
    }
}
