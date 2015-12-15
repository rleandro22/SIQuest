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
            'footer' => array($this, 'block_footer'),
            'navegacionfooter' => array($this, 'block_navegacionfooter'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80c4f06d3e29e3b9458d718dd3fe505768ed91024b76b5897f82c72371d28bf9 = $this->env->getExtension("native_profiler");
        $__internal_80c4f06d3e29e3b9458d718dd3fe505768ed91024b76b5897f82c72371d28bf9->enter($__internal_80c4f06d3e29e3b9458d718dd3fe505768ed91024b76b5897f82c72371d28bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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



        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "        </footer>\t


        ";
        // line 128
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "    </body>
</html>";
        
        $__internal_80c4f06d3e29e3b9458d718dd3fe505768ed91024b76b5897f82c72371d28bf9->leave($__internal_80c4f06d3e29e3b9458d718dd3fe505768ed91024b76b5897f82c72371d28bf9_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_08baca26fe13f633b0feffc821e6723755aa6e857bfff18ec9018a527206210d = $this->env->getExtension("native_profiler");
        $__internal_08baca26fe13f633b0feffc821e6723755aa6e857bfff18ec9018a527206210d->enter($__internal_08baca26fe13f633b0feffc821e6723755aa6e857bfff18ec9018a527206210d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_08baca26fe13f633b0feffc821e6723755aa6e857bfff18ec9018a527206210d->leave($__internal_08baca26fe13f633b0feffc821e6723755aa6e857bfff18ec9018a527206210d_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_76aa174b459882d3a5b29f60ed8d14966004d721eeaa0c064f0cc257ef834684 = $this->env->getExtension("native_profiler");
        $__internal_76aa174b459882d3a5b29f60ed8d14966004d721eeaa0c064f0cc257ef834684->enter($__internal_76aa174b459882d3a5b29f60ed8d14966004d721eeaa0c064f0cc257ef834684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_76aa174b459882d3a5b29f60ed8d14966004d721eeaa0c064f0cc257ef834684->leave($__internal_76aa174b459882d3a5b29f60ed8d14966004d721eeaa0c064f0cc257ef834684_prof);

    }

    // line 22
    public function block_barra($context, array $blocks = array())
    {
        $__internal_4d3019906d10016e49396ab6214a3754f8214334b65267971bb6173ccdec6437 = $this->env->getExtension("native_profiler");
        $__internal_4d3019906d10016e49396ab6214a3754f8214334b65267971bb6173ccdec6437->enter($__internal_4d3019906d10016e49396ab6214a3754f8214334b65267971bb6173ccdec6437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

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
        
        $__internal_4d3019906d10016e49396ab6214a3754f8214334b65267971bb6173ccdec6437->leave($__internal_4d3019906d10016e49396ab6214a3754f8214334b65267971bb6173ccdec6437_prof);

    }

    // line 26
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_19d13b2342c5d85b997932b5479ab3b3421df9f4d7ba775a704328b41a8e6afd = $this->env->getExtension("native_profiler");
        $__internal_19d13b2342c5d85b997932b5479ab3b3421df9f4d7ba775a704328b41a8e6afd->enter($__internal_19d13b2342c5d85b997932b5479ab3b3421df9f4d7ba775a704328b41a8e6afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_19d13b2342c5d85b997932b5479ab3b3421df9f4d7ba775a704328b41a8e6afd->leave($__internal_19d13b2342c5d85b997932b5479ab3b3421df9f4d7ba775a704328b41a8e6afd_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_bb0e3a3bc7821c7bb46e4f205c36c7a793650b85dff0e694605f8ccf7f221b36 = $this->env->getExtension("native_profiler");
        $__internal_bb0e3a3bc7821c7bb46e4f205c36c7a793650b85dff0e694605f8ccf7f221b36->enter($__internal_bb0e3a3bc7821c7bb46e4f205c36c7a793650b85dff0e694605f8ccf7f221b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_bb0e3a3bc7821c7bb46e4f205c36c7a793650b85dff0e694605f8ccf7f221b36->leave($__internal_bb0e3a3bc7821c7bb46e4f205c36c7a793650b85dff0e694605f8ccf7f221b36_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_b04c67e826848ec1cb4053330e44b1631e20ef4345e0a5d3dd4d2cd5408ebcda = $this->env->getExtension("native_profiler");
        $__internal_b04c67e826848ec1cb4053330e44b1631e20ef4345e0a5d3dd4d2cd5408ebcda->enter($__internal_b04c67e826848ec1cb4053330e44b1631e20ef4345e0a5d3dd4d2cd5408ebcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "
        ";
        
        $__internal_b04c67e826848ec1cb4053330e44b1631e20ef4345e0a5d3dd4d2cd5408ebcda->leave($__internal_b04c67e826848ec1cb4053330e44b1631e20ef4345e0a5d3dd4d2cd5408ebcda_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a916b06985dfb20c4219e3af917306f85faf2a62e7b8b98bd05caeadc0d613f = $this->env->getExtension("native_profiler");
        $__internal_2a916b06985dfb20c4219e3af917306f85faf2a62e7b8b98bd05caeadc0d613f->enter($__internal_2a916b06985dfb20c4219e3af917306f85faf2a62e7b8b98bd05caeadc0d613f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
        ";
        
        $__internal_2a916b06985dfb20c4219e3af917306f85faf2a62e7b8b98bd05caeadc0d613f->leave($__internal_2a916b06985dfb20c4219e3af917306f85faf2a62e7b8b98bd05caeadc0d613f_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c63157cf637039bc7f55c0207181df1c7b4d1d95e567cc5f4d393a431833c833 = $this->env->getExtension("native_profiler");
        $__internal_c63157cf637039bc7f55c0207181df1c7b4d1d95e567cc5f4d393a431833c833->enter($__internal_c63157cf637039bc7f55c0207181df1c7b4d1d95e567cc5f4d393a431833c833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_c63157cf637039bc7f55c0207181df1c7b4d1d95e567cc5f4d393a431833c833->leave($__internal_c63157cf637039bc7f55c0207181df1c7b4d1d95e567cc5f4d393a431833c833_prof);

    }

    // line 103
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_7c91845df21ebd0fcf54c72b9c451ddb3dd99aed2345c44ec18502f5c5240a86 = $this->env->getExtension("native_profiler");
        $__internal_7c91845df21ebd0fcf54c72b9c451ddb3dd99aed2345c44ec18502f5c5240a86->enter($__internal_7c91845df21ebd0fcf54c72b9c451ddb3dd99aed2345c44ec18502f5c5240a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_7c91845df21ebd0fcf54c72b9c451ddb3dd99aed2345c44ec18502f5c5240a86->leave($__internal_7c91845df21ebd0fcf54c72b9c451ddb3dd99aed2345c44ec18502f5c5240a86_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dfd78fed594cba2bf95081af8058f239642466160ec6df15a5cd722b826a1606 = $this->env->getExtension("native_profiler");
        $__internal_dfd78fed594cba2bf95081af8058f239642466160ec6df15a5cd722b826a1606->enter($__internal_dfd78fed594cba2bf95081af8058f239642466160ec6df15a5cd722b826a1606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_dfd78fed594cba2bf95081af8058f239642466160ec6df15a5cd722b826a1606->leave($__internal_dfd78fed594cba2bf95081af8058f239642466160ec6df15a5cd722b826a1606_prof);

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
        return array (  362 => 134,  358 => 133,  354 => 132,  350 => 131,  346 => 129,  340 => 128,  330 => 107,  325 => 105,  322 => 104,  316 => 103,  295 => 110,  293 => 103,  246 => 58,  240 => 57,  232 => 51,  226 => 50,  218 => 46,  212 => 45,  200 => 35,  196 => 33,  190 => 32,  178 => 26,  168 => 39,  166 => 32,  161 => 30,  154 => 26,  149 => 23,  143 => 22,  134 => 14,  129 => 12,  125 => 11,  121 => 10,  116 => 9,  110 => 8,  98 => 6,  90 => 136,  88 => 128,  83 => 125,  81 => 57,  74 => 52,  72 => 50,  67 => 47,  65 => 45,  60 => 42,  58 => 22,  50 => 17,  46 => 15,  44 => 8,  39 => 6,  32 => 1,);
    }
}
