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
        $__internal_a90e2c6cf416ed39fc4df5c37e7eee78814e6073f3aa72e75434e6ce75a444b6 = $this->env->getExtension("native_profiler");
        $__internal_a90e2c6cf416ed39fc4df5c37e7eee78814e6073f3aa72e75434e6ce75a444b6->enter($__internal_a90e2c6cf416ed39fc4df5c37e7eee78814e6073f3aa72e75434e6ce75a444b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a90e2c6cf416ed39fc4df5c37e7eee78814e6073f3aa72e75434e6ce75a444b6->leave($__internal_a90e2c6cf416ed39fc4df5c37e7eee78814e6073f3aa72e75434e6ce75a444b6_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d6603b9a3dbbecd7b71ee5716bc44cc318d316ebaf26259ee159225027bc540 = $this->env->getExtension("native_profiler");
        $__internal_8d6603b9a3dbbecd7b71ee5716bc44cc318d316ebaf26259ee159225027bc540->enter($__internal_8d6603b9a3dbbecd7b71ee5716bc44cc318d316ebaf26259ee159225027bc540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_8d6603b9a3dbbecd7b71ee5716bc44cc318d316ebaf26259ee159225027bc540->leave($__internal_8d6603b9a3dbbecd7b71ee5716bc44cc318d316ebaf26259ee159225027bc540_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d9e130bed45a4b2f1c8d05f7fce3e44136bc1ffa88c73811321a6ccc686195e = $this->env->getExtension("native_profiler");
        $__internal_5d9e130bed45a4b2f1c8d05f7fce3e44136bc1ffa88c73811321a6ccc686195e->enter($__internal_5d9e130bed45a4b2f1c8d05f7fce3e44136bc1ffa88c73811321a6ccc686195e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5d9e130bed45a4b2f1c8d05f7fce3e44136bc1ffa88c73811321a6ccc686195e->leave($__internal_5d9e130bed45a4b2f1c8d05f7fce3e44136bc1ffa88c73811321a6ccc686195e_prof);

    }

    // line 22
    public function block_barra($context, array $blocks = array())
    {
        $__internal_bb533361049ef851b797e109854d9e6fdbd45d39c32fa7becd952c27e34ab474 = $this->env->getExtension("native_profiler");
        $__internal_bb533361049ef851b797e109854d9e6fdbd45d39c32fa7becd952c27e34ab474->enter($__internal_bb533361049ef851b797e109854d9e6fdbd45d39c32fa7becd952c27e34ab474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

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
                        <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
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
        
        $__internal_bb533361049ef851b797e109854d9e6fdbd45d39c32fa7becd952c27e34ab474->leave($__internal_bb533361049ef851b797e109854d9e6fdbd45d39c32fa7becd952c27e34ab474_prof);

    }

    // line 26
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_d27afea6b6244e2642d983138660895be79fdb712a7950912ed5957b10725d49 = $this->env->getExtension("native_profiler");
        $__internal_d27afea6b6244e2642d983138660895be79fdb712a7950912ed5957b10725d49->enter($__internal_d27afea6b6244e2642d983138660895be79fdb712a7950912ed5957b10725d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_d27afea6b6244e2642d983138660895be79fdb712a7950912ed5957b10725d49->leave($__internal_d27afea6b6244e2642d983138660895be79fdb712a7950912ed5957b10725d49_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_7f370401d5e2c33bb4b3e26a1ce5ce416afb9abfc56b01419316ccc2bce26195 = $this->env->getExtension("native_profiler");
        $__internal_7f370401d5e2c33bb4b3e26a1ce5ce416afb9abfc56b01419316ccc2bce26195->enter($__internal_7f370401d5e2c33bb4b3e26a1ce5ce416afb9abfc56b01419316ccc2bce26195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_7f370401d5e2c33bb4b3e26a1ce5ce416afb9abfc56b01419316ccc2bce26195->leave($__internal_7f370401d5e2c33bb4b3e26a1ce5ce416afb9abfc56b01419316ccc2bce26195_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_17b1296c2b0acfbff3dbe8469ec0327e401bb3a2903039c95ccfcf3088a493fe = $this->env->getExtension("native_profiler");
        $__internal_17b1296c2b0acfbff3dbe8469ec0327e401bb3a2903039c95ccfcf3088a493fe->enter($__internal_17b1296c2b0acfbff3dbe8469ec0327e401bb3a2903039c95ccfcf3088a493fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "
        ";
        
        $__internal_17b1296c2b0acfbff3dbe8469ec0327e401bb3a2903039c95ccfcf3088a493fe->leave($__internal_17b1296c2b0acfbff3dbe8469ec0327e401bb3a2903039c95ccfcf3088a493fe_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_8070f4a8aed0d1ac05748e055df9a30351b915506671e12a40a1aa423211b0ba = $this->env->getExtension("native_profiler");
        $__internal_8070f4a8aed0d1ac05748e055df9a30351b915506671e12a40a1aa423211b0ba->enter($__internal_8070f4a8aed0d1ac05748e055df9a30351b915506671e12a40a1aa423211b0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
        ";
        
        $__internal_8070f4a8aed0d1ac05748e055df9a30351b915506671e12a40a1aa423211b0ba->leave($__internal_8070f4a8aed0d1ac05748e055df9a30351b915506671e12a40a1aa423211b0ba_prof);

    }

    // line 55
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_72bfc52dccb3fc6a9ebb80f4a579d0f5aabd27a935edce061ebd96f0b978a763 = $this->env->getExtension("native_profiler");
        $__internal_72bfc52dccb3fc6a9ebb80f4a579d0f5aabd27a935edce061ebd96f0b978a763->enter($__internal_72bfc52dccb3fc6a9ebb80f4a579d0f5aabd27a935edce061ebd96f0b978a763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        // line 56
        echo "        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "        </footer>\t
";
        
        $__internal_72bfc52dccb3fc6a9ebb80f4a579d0f5aabd27a935edce061ebd96f0b978a763->leave($__internal_72bfc52dccb3fc6a9ebb80f4a579d0f5aabd27a935edce061ebd96f0b978a763_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_efdf0ae633722ba190740ee4398f8f9875467c344792133c000c210c5b752412 = $this->env->getExtension("native_profiler");
        $__internal_efdf0ae633722ba190740ee4398f8f9875467c344792133c000c210c5b752412->enter($__internal_efdf0ae633722ba190740ee4398f8f9875467c344792133c000c210c5b752412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_efdf0ae633722ba190740ee4398f8f9875467c344792133c000c210c5b752412->leave($__internal_efdf0ae633722ba190740ee4398f8f9875467c344792133c000c210c5b752412_prof);

    }

    // line 103
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_c21ff634348abb87fe61c5298aa2b4915c0863619dc5e19267f8836b17e7b406 = $this->env->getExtension("native_profiler");
        $__internal_c21ff634348abb87fe61c5298aa2b4915c0863619dc5e19267f8836b17e7b406->enter($__internal_c21ff634348abb87fe61c5298aa2b4915c0863619dc5e19267f8836b17e7b406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_c21ff634348abb87fe61c5298aa2b4915c0863619dc5e19267f8836b17e7b406->leave($__internal_c21ff634348abb87fe61c5298aa2b4915c0863619dc5e19267f8836b17e7b406_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07a35bea23b7a3eb28f3369ac7cf124bf1f1dce62044c3f97b79b7ea62bdc9b7 = $this->env->getExtension("native_profiler");
        $__internal_07a35bea23b7a3eb28f3369ac7cf124bf1f1dce62044c3f97b79b7ea62bdc9b7->enter($__internal_07a35bea23b7a3eb28f3369ac7cf124bf1f1dce62044c3f97b79b7ea62bdc9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_07a35bea23b7a3eb28f3369ac7cf124bf1f1dce62044c3f97b79b7ea62bdc9b7->leave($__internal_07a35bea23b7a3eb28f3369ac7cf124bf1f1dce62044c3f97b79b7ea62bdc9b7_prof);

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
