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
        $__internal_9986b5a39587158e0f36946174e553c9dc18c20bc27a221380d3c846048fdb3d = $this->env->getExtension("native_profiler");
        $__internal_9986b5a39587158e0f36946174e553c9dc18c20bc27a221380d3c846048fdb3d->enter($__internal_9986b5a39587158e0f36946174e553c9dc18c20bc27a221380d3c846048fdb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9986b5a39587158e0f36946174e553c9dc18c20bc27a221380d3c846048fdb3d->leave($__internal_9986b5a39587158e0f36946174e553c9dc18c20bc27a221380d3c846048fdb3d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd89b41bf29818dd029054094addc32a29881c7093fd7c963057465ba22bcd12 = $this->env->getExtension("native_profiler");
        $__internal_bd89b41bf29818dd029054094addc32a29881c7093fd7c963057465ba22bcd12->enter($__internal_bd89b41bf29818dd029054094addc32a29881c7093fd7c963057465ba22bcd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_bd89b41bf29818dd029054094addc32a29881c7093fd7c963057465ba22bcd12->leave($__internal_bd89b41bf29818dd029054094addc32a29881c7093fd7c963057465ba22bcd12_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7bfd94776fd308af87e6eea2b34945989efbe1a57b52f7cc53a7e74b1fdb411 = $this->env->getExtension("native_profiler");
        $__internal_a7bfd94776fd308af87e6eea2b34945989efbe1a57b52f7cc53a7e74b1fdb411->enter($__internal_a7bfd94776fd308af87e6eea2b34945989efbe1a57b52f7cc53a7e74b1fdb411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a7bfd94776fd308af87e6eea2b34945989efbe1a57b52f7cc53a7e74b1fdb411->leave($__internal_a7bfd94776fd308af87e6eea2b34945989efbe1a57b52f7cc53a7e74b1fdb411_prof);

    }

    // line 22
    public function block_barra($context, array $blocks = array())
    {
        $__internal_95fbbd15cd5b3012856459f5881a4edec5dca01a804a8a5eba2d451a949a13d9 = $this->env->getExtension("native_profiler");
        $__internal_95fbbd15cd5b3012856459f5881a4edec5dca01a804a8a5eba2d451a949a13d9->enter($__internal_95fbbd15cd5b3012856459f5881a4edec5dca01a804a8a5eba2d451a949a13d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

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
        
        $__internal_95fbbd15cd5b3012856459f5881a4edec5dca01a804a8a5eba2d451a949a13d9->leave($__internal_95fbbd15cd5b3012856459f5881a4edec5dca01a804a8a5eba2d451a949a13d9_prof);

    }

    // line 26
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_f5797aba2327e327cda84b04ecb1c91a4d0c636d584e49fff4e5fda703a61e77 = $this->env->getExtension("native_profiler");
        $__internal_f5797aba2327e327cda84b04ecb1c91a4d0c636d584e49fff4e5fda703a61e77->enter($__internal_f5797aba2327e327cda84b04ecb1c91a4d0c636d584e49fff4e5fda703a61e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_f5797aba2327e327cda84b04ecb1c91a4d0c636d584e49fff4e5fda703a61e77->leave($__internal_f5797aba2327e327cda84b04ecb1c91a4d0c636d584e49fff4e5fda703a61e77_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_c847d420f4870d98523ea5fdc32cb572b492f95f4ac79e351f9502b3c2d7e144 = $this->env->getExtension("native_profiler");
        $__internal_c847d420f4870d98523ea5fdc32cb572b492f95f4ac79e351f9502b3c2d7e144->enter($__internal_c847d420f4870d98523ea5fdc32cb572b492f95f4ac79e351f9502b3c2d7e144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_c847d420f4870d98523ea5fdc32cb572b492f95f4ac79e351f9502b3c2d7e144->leave($__internal_c847d420f4870d98523ea5fdc32cb572b492f95f4ac79e351f9502b3c2d7e144_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_2f09739e554ac56f077eaab200eb2eb34d9033940b7c3c3416ee54d6735b8251 = $this->env->getExtension("native_profiler");
        $__internal_2f09739e554ac56f077eaab200eb2eb34d9033940b7c3c3416ee54d6735b8251->enter($__internal_2f09739e554ac56f077eaab200eb2eb34d9033940b7c3c3416ee54d6735b8251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "
        ";
        
        $__internal_2f09739e554ac56f077eaab200eb2eb34d9033940b7c3c3416ee54d6735b8251->leave($__internal_2f09739e554ac56f077eaab200eb2eb34d9033940b7c3c3416ee54d6735b8251_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bd31547ae36f522bf2d1bcca5ffe955037562022e33322fc770232ced9282f2 = $this->env->getExtension("native_profiler");
        $__internal_4bd31547ae36f522bf2d1bcca5ffe955037562022e33322fc770232ced9282f2->enter($__internal_4bd31547ae36f522bf2d1bcca5ffe955037562022e33322fc770232ced9282f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
        ";
        
        $__internal_4bd31547ae36f522bf2d1bcca5ffe955037562022e33322fc770232ced9282f2->leave($__internal_4bd31547ae36f522bf2d1bcca5ffe955037562022e33322fc770232ced9282f2_prof);

    }

    // line 55
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_760b7fe1a9c4a8ec94d680e4003da285818646ab3ce04b5186058c3100dd5631 = $this->env->getExtension("native_profiler");
        $__internal_760b7fe1a9c4a8ec94d680e4003da285818646ab3ce04b5186058c3100dd5631->enter($__internal_760b7fe1a9c4a8ec94d680e4003da285818646ab3ce04b5186058c3100dd5631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        // line 56
        echo "        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "        </footer>\t
";
        
        $__internal_760b7fe1a9c4a8ec94d680e4003da285818646ab3ce04b5186058c3100dd5631->leave($__internal_760b7fe1a9c4a8ec94d680e4003da285818646ab3ce04b5186058c3100dd5631_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_531c3ca6aeb0d46168751204b6f10fab057192b322d8d83321d7b8f4ac5c3e9c = $this->env->getExtension("native_profiler");
        $__internal_531c3ca6aeb0d46168751204b6f10fab057192b322d8d83321d7b8f4ac5c3e9c->enter($__internal_531c3ca6aeb0d46168751204b6f10fab057192b322d8d83321d7b8f4ac5c3e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_531c3ca6aeb0d46168751204b6f10fab057192b322d8d83321d7b8f4ac5c3e9c->leave($__internal_531c3ca6aeb0d46168751204b6f10fab057192b322d8d83321d7b8f4ac5c3e9c_prof);

    }

    // line 103
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_39cd51feefbc218eb9f7d3483db906013a64ba2a67af5fc9272c68bd1cce4a25 = $this->env->getExtension("native_profiler");
        $__internal_39cd51feefbc218eb9f7d3483db906013a64ba2a67af5fc9272c68bd1cce4a25->enter($__internal_39cd51feefbc218eb9f7d3483db906013a64ba2a67af5fc9272c68bd1cce4a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_39cd51feefbc218eb9f7d3483db906013a64ba2a67af5fc9272c68bd1cce4a25->leave($__internal_39cd51feefbc218eb9f7d3483db906013a64ba2a67af5fc9272c68bd1cce4a25_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_249e866e3999cf1665aae8263acf90f50fac2cdb932fb7ef9a07eca9f31f16b3 = $this->env->getExtension("native_profiler");
        $__internal_249e866e3999cf1665aae8263acf90f50fac2cdb932fb7ef9a07eca9f31f16b3->enter($__internal_249e866e3999cf1665aae8263acf90f50fac2cdb932fb7ef9a07eca9f31f16b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_249e866e3999cf1665aae8263acf90f50fac2cdb932fb7ef9a07eca9f31f16b3->leave($__internal_249e866e3999cf1665aae8263acf90f50fac2cdb932fb7ef9a07eca9f31f16b3_prof);

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
