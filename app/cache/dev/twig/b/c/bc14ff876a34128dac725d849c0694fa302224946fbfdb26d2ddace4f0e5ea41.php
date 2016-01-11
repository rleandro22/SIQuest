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
        $__internal_849fae49087ae7eded9e26f8b384925760f934a78b6f9f5fa1319050dae2d5f9 = $this->env->getExtension("native_profiler");
        $__internal_849fae49087ae7eded9e26f8b384925760f934a78b6f9f5fa1319050dae2d5f9->enter($__internal_849fae49087ae7eded9e26f8b384925760f934a78b6f9f5fa1319050dae2d5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_849fae49087ae7eded9e26f8b384925760f934a78b6f9f5fa1319050dae2d5f9->leave($__internal_849fae49087ae7eded9e26f8b384925760f934a78b6f9f5fa1319050dae2d5f9_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b94e5fb6ee05d523e9fb11fa280720aeb1e43edf916280521ab7556eefa90be4 = $this->env->getExtension("native_profiler");
        $__internal_b94e5fb6ee05d523e9fb11fa280720aeb1e43edf916280521ab7556eefa90be4->enter($__internal_b94e5fb6ee05d523e9fb11fa280720aeb1e43edf916280521ab7556eefa90be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_b94e5fb6ee05d523e9fb11fa280720aeb1e43edf916280521ab7556eefa90be4->leave($__internal_b94e5fb6ee05d523e9fb11fa280720aeb1e43edf916280521ab7556eefa90be4_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_479daa249d5e867052733ea7a46cd68750d508c98ca507c9dc5eb4872ef5f915 = $this->env->getExtension("native_profiler");
        $__internal_479daa249d5e867052733ea7a46cd68750d508c98ca507c9dc5eb4872ef5f915->enter($__internal_479daa249d5e867052733ea7a46cd68750d508c98ca507c9dc5eb4872ef5f915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_479daa249d5e867052733ea7a46cd68750d508c98ca507c9dc5eb4872ef5f915->leave($__internal_479daa249d5e867052733ea7a46cd68750d508c98ca507c9dc5eb4872ef5f915_prof);

    }

    // line 22
    public function block_barra($context, array $blocks = array())
    {
        $__internal_8d5788a285371de1a54f5e21287939ef2b68d5c7c4409a8019412fead4b52305 = $this->env->getExtension("native_profiler");
        $__internal_8d5788a285371de1a54f5e21287939ef2b68d5c7c4409a8019412fead4b52305->enter($__internal_8d5788a285371de1a54f5e21287939ef2b68d5c7c4409a8019412fead4b52305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

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
        
        $__internal_8d5788a285371de1a54f5e21287939ef2b68d5c7c4409a8019412fead4b52305->leave($__internal_8d5788a285371de1a54f5e21287939ef2b68d5c7c4409a8019412fead4b52305_prof);

    }

    // line 26
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_40909308f873fa616b004d522849a33a7779414e7680b1e231978963bb573b63 = $this->env->getExtension("native_profiler");
        $__internal_40909308f873fa616b004d522849a33a7779414e7680b1e231978963bb573b63->enter($__internal_40909308f873fa616b004d522849a33a7779414e7680b1e231978963bb573b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_40909308f873fa616b004d522849a33a7779414e7680b1e231978963bb573b63->leave($__internal_40909308f873fa616b004d522849a33a7779414e7680b1e231978963bb573b63_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_9b878a63e5ce0eb22d94ccc2207d52abc680bbc651973eadafefb4a166ee27ba = $this->env->getExtension("native_profiler");
        $__internal_9b878a63e5ce0eb22d94ccc2207d52abc680bbc651973eadafefb4a166ee27ba->enter($__internal_9b878a63e5ce0eb22d94ccc2207d52abc680bbc651973eadafefb4a166ee27ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_9b878a63e5ce0eb22d94ccc2207d52abc680bbc651973eadafefb4a166ee27ba->leave($__internal_9b878a63e5ce0eb22d94ccc2207d52abc680bbc651973eadafefb4a166ee27ba_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_fbedd9335ffd6152a385bd12f504af7f3ddb6833fda5eaf9a7946b718b966114 = $this->env->getExtension("native_profiler");
        $__internal_fbedd9335ffd6152a385bd12f504af7f3ddb6833fda5eaf9a7946b718b966114->enter($__internal_fbedd9335ffd6152a385bd12f504af7f3ddb6833fda5eaf9a7946b718b966114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "
        ";
        
        $__internal_fbedd9335ffd6152a385bd12f504af7f3ddb6833fda5eaf9a7946b718b966114->leave($__internal_fbedd9335ffd6152a385bd12f504af7f3ddb6833fda5eaf9a7946b718b966114_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_62fad22825daf187f3429efd2621bf5569266df1d90935f715b3c17543c45ed8 = $this->env->getExtension("native_profiler");
        $__internal_62fad22825daf187f3429efd2621bf5569266df1d90935f715b3c17543c45ed8->enter($__internal_62fad22825daf187f3429efd2621bf5569266df1d90935f715b3c17543c45ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
        ";
        
        $__internal_62fad22825daf187f3429efd2621bf5569266df1d90935f715b3c17543c45ed8->leave($__internal_62fad22825daf187f3429efd2621bf5569266df1d90935f715b3c17543c45ed8_prof);

    }

    // line 55
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_5f4a3f4c6cd2f2017fac9059327c0ff73f0e3213e4eff514538c4e17782817d1 = $this->env->getExtension("native_profiler");
        $__internal_5f4a3f4c6cd2f2017fac9059327c0ff73f0e3213e4eff514538c4e17782817d1->enter($__internal_5f4a3f4c6cd2f2017fac9059327c0ff73f0e3213e4eff514538c4e17782817d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        // line 56
        echo "        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "        </footer>\t
";
        
        $__internal_5f4a3f4c6cd2f2017fac9059327c0ff73f0e3213e4eff514538c4e17782817d1->leave($__internal_5f4a3f4c6cd2f2017fac9059327c0ff73f0e3213e4eff514538c4e17782817d1_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6a1b66a8b38ad220393a7915d1f5a36d597822ef1cd8953bdc33cc70bab09f97 = $this->env->getExtension("native_profiler");
        $__internal_6a1b66a8b38ad220393a7915d1f5a36d597822ef1cd8953bdc33cc70bab09f97->enter($__internal_6a1b66a8b38ad220393a7915d1f5a36d597822ef1cd8953bdc33cc70bab09f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_6a1b66a8b38ad220393a7915d1f5a36d597822ef1cd8953bdc33cc70bab09f97->leave($__internal_6a1b66a8b38ad220393a7915d1f5a36d597822ef1cd8953bdc33cc70bab09f97_prof);

    }

    // line 103
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_41b38f7fabeb1ae274ecce78e40a52b3e68160dbac3f9c44b7b48e3f2f92f923 = $this->env->getExtension("native_profiler");
        $__internal_41b38f7fabeb1ae274ecce78e40a52b3e68160dbac3f9c44b7b48e3f2f92f923->enter($__internal_41b38f7fabeb1ae274ecce78e40a52b3e68160dbac3f9c44b7b48e3f2f92f923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_41b38f7fabeb1ae274ecce78e40a52b3e68160dbac3f9c44b7b48e3f2f92f923->leave($__internal_41b38f7fabeb1ae274ecce78e40a52b3e68160dbac3f9c44b7b48e3f2f92f923_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_259abfcd128a50f1135c1cd9dfc36ed1e04896246d56a2713f56aeac8c2e4cfb = $this->env->getExtension("native_profiler");
        $__internal_259abfcd128a50f1135c1cd9dfc36ed1e04896246d56a2713f56aeac8c2e4cfb->enter($__internal_259abfcd128a50f1135c1cd9dfc36ed1e04896246d56a2713f56aeac8c2e4cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_259abfcd128a50f1135c1cd9dfc36ed1e04896246d56a2713f56aeac8c2e4cfb->leave($__internal_259abfcd128a50f1135c1cd9dfc36ed1e04896246d56a2713f56aeac8c2e4cfb_prof);

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
