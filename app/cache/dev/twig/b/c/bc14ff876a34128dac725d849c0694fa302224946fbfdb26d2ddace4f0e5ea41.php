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
        $__internal_e4e71ad45e538ed2bc339a0e4a565660e1377acad1e5f6c506fbb5ebd22141f3 = $this->env->getExtension("native_profiler");
        $__internal_e4e71ad45e538ed2bc339a0e4a565660e1377acad1e5f6c506fbb5ebd22141f3->enter($__internal_e4e71ad45e538ed2bc339a0e4a565660e1377acad1e5f6c506fbb5ebd22141f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 119
        echo "
        ";
        // line 120
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "    </body>
</html>";
        
        $__internal_e4e71ad45e538ed2bc339a0e4a565660e1377acad1e5f6c506fbb5ebd22141f3->leave($__internal_e4e71ad45e538ed2bc339a0e4a565660e1377acad1e5f6c506fbb5ebd22141f3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b91f9fef2e0d0e7547ed6dca299fde3b2b32a255c89cb9989083bb60ac3c033 = $this->env->getExtension("native_profiler");
        $__internal_6b91f9fef2e0d0e7547ed6dca299fde3b2b32a255c89cb9989083bb60ac3c033->enter($__internal_6b91f9fef2e0d0e7547ed6dca299fde3b2b32a255c89cb9989083bb60ac3c033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_6b91f9fef2e0d0e7547ed6dca299fde3b2b32a255c89cb9989083bb60ac3c033->leave($__internal_6b91f9fef2e0d0e7547ed6dca299fde3b2b32a255c89cb9989083bb60ac3c033_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee2a7aa5e3a112a1cfa5ba7f056231c3d10be1fdd1a7479aded956b5f148d935 = $this->env->getExtension("native_profiler");
        $__internal_ee2a7aa5e3a112a1cfa5ba7f056231c3d10be1fdd1a7479aded956b5f148d935->enter($__internal_ee2a7aa5e3a112a1cfa5ba7f056231c3d10be1fdd1a7479aded956b5f148d935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ee2a7aa5e3a112a1cfa5ba7f056231c3d10be1fdd1a7479aded956b5f148d935->leave($__internal_ee2a7aa5e3a112a1cfa5ba7f056231c3d10be1fdd1a7479aded956b5f148d935_prof);

    }

    // line 22
    public function block_barra($context, array $blocks = array())
    {
        $__internal_1b8a6d32a5a1b713186dfcc2a46d2411dbd4da170efb3ac3c43324cbf4037fde = $this->env->getExtension("native_profiler");
        $__internal_1b8a6d32a5a1b713186dfcc2a46d2411dbd4da170efb3ac3c43324cbf4037fde->enter($__internal_1b8a6d32a5a1b713186dfcc2a46d2411dbd4da170efb3ac3c43324cbf4037fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

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
        
        $__internal_1b8a6d32a5a1b713186dfcc2a46d2411dbd4da170efb3ac3c43324cbf4037fde->leave($__internal_1b8a6d32a5a1b713186dfcc2a46d2411dbd4da170efb3ac3c43324cbf4037fde_prof);

    }

    // line 26
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_3a8d20ca3c6613ac277986f194e443dc7d72c75824de9df3bf32938120a12071 = $this->env->getExtension("native_profiler");
        $__internal_3a8d20ca3c6613ac277986f194e443dc7d72c75824de9df3bf32938120a12071->enter($__internal_3a8d20ca3c6613ac277986f194e443dc7d72c75824de9df3bf32938120a12071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_3a8d20ca3c6613ac277986f194e443dc7d72c75824de9df3bf32938120a12071->leave($__internal_3a8d20ca3c6613ac277986f194e443dc7d72c75824de9df3bf32938120a12071_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_30975645e4108e2038b6894a028e35eb4c0dd85a6880a870cffbd30811a87e28 = $this->env->getExtension("native_profiler");
        $__internal_30975645e4108e2038b6894a028e35eb4c0dd85a6880a870cffbd30811a87e28->enter($__internal_30975645e4108e2038b6894a028e35eb4c0dd85a6880a870cffbd30811a87e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_30975645e4108e2038b6894a028e35eb4c0dd85a6880a870cffbd30811a87e28->leave($__internal_30975645e4108e2038b6894a028e35eb4c0dd85a6880a870cffbd30811a87e28_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_0e5ceca950982d5e01b16ee57c6833a31a19a3b24dac2f47b810428ace4c74d7 = $this->env->getExtension("native_profiler");
        $__internal_0e5ceca950982d5e01b16ee57c6833a31a19a3b24dac2f47b810428ace4c74d7->enter($__internal_0e5ceca950982d5e01b16ee57c6833a31a19a3b24dac2f47b810428ace4c74d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "
        ";
        
        $__internal_0e5ceca950982d5e01b16ee57c6833a31a19a3b24dac2f47b810428ace4c74d7->leave($__internal_0e5ceca950982d5e01b16ee57c6833a31a19a3b24dac2f47b810428ace4c74d7_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_5621241927c1980f739f4740d54127cd57effeba13c6f5ceb8cb24bc24605355 = $this->env->getExtension("native_profiler");
        $__internal_5621241927c1980f739f4740d54127cd57effeba13c6f5ceb8cb24bc24605355->enter($__internal_5621241927c1980f739f4740d54127cd57effeba13c6f5ceb8cb24bc24605355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
        ";
        
        $__internal_5621241927c1980f739f4740d54127cd57effeba13c6f5ceb8cb24bc24605355->leave($__internal_5621241927c1980f739f4740d54127cd57effeba13c6f5ceb8cb24bc24605355_prof);

    }

    // line 55
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_de0e1419e577e246864c34c2ab631f8876f5e398bfbe169c94fde94baa883e78 = $this->env->getExtension("native_profiler");
        $__internal_de0e1419e577e246864c34c2ab631f8876f5e398bfbe169c94fde94baa883e78->enter($__internal_de0e1419e577e246864c34c2ab631f8876f5e398bfbe169c94fde94baa883e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        // line 56
        echo "        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 117
        echo "        </footer>\t
";
        
        $__internal_de0e1419e577e246864c34c2ab631f8876f5e398bfbe169c94fde94baa883e78->leave($__internal_de0e1419e577e246864c34c2ab631f8876f5e398bfbe169c94fde94baa883e78_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5b85206a0f8717d2e6fd1a8786a3714950faf322daf83c3a2216a3133deb0ac1 = $this->env->getExtension("native_profiler");
        $__internal_5b85206a0f8717d2e6fd1a8786a3714950faf322daf83c3a2216a3133deb0ac1->enter($__internal_5b85206a0f8717d2e6fd1a8786a3714950faf322daf83c3a2216a3133deb0ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 58
        echo "                <div class=\"footer1\">
                    <div class=\"container\">
                        <div class=\"row\">

                            <div class=\"col-md-6 widget\">
                                <h3 class=\"widget-title\">Contacto</h3>
                                <div class=\"widget-body\">
                                    <p>+5062283-6464<br>
                                        <a href=\"mailto:#\">webmaster@uci.ac.cr</a><br>
                                        <br>
                                        San José, Costa Rica
                                    </p>\t
                                </div>
                            </div>

                            <div class=\"col-md-6 widget\">
                                <h3 class=\"widget-title\">Redes Sociales</h3>
                                <div class=\"widget-body\">
                                    <p class=\"follow-me-icons\">
                                        <a href=\"https://twitter.com/ucicr\"><i class=\"fa fa-twitter fa-2\"></i></a>
                                        <a href=\"https://www.linkedin.com/edu/school?id=11677&trk=edu-cp-title\"><i class=\"fa fa-linkedin fa-2\"></i></a>
                                        <a href=\"https://plus.google.com/u/0/+UniversidadparalaCooperaci%C3%B3nInternacionalSanJos%C3%A9/posts\"><i class=\"fa fa-google-plus fa-2\"></i></a>
                                        <a href=\"https://www.instagram.com/uciuniversidad/\"><i class=\"fa fa-instagram fa-2\"></i></a>
                                    </p>\t
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
        // line 95
        $this->displayBlock('navegacionfooter', $context, $blocks);
        // line 102
        echo "                                </div>
                            </div>

                            <div class=\"col-md-6 widget\">
                                <div class=\"widget-body\">
                                    <p class=\"text-right\">
                                        Copyright &copy; 2016, Universidad para la Cooperación Internacional. 
                                    </p>
                                </div>
                            </div>

                        </div> <!-- /row of widgets -->
                    </div>
                </div>
            ";
        
        $__internal_5b85206a0f8717d2e6fd1a8786a3714950faf322daf83c3a2216a3133deb0ac1->leave($__internal_5b85206a0f8717d2e6fd1a8786a3714950faf322daf83c3a2216a3133deb0ac1_prof);

    }

    // line 95
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_0c6c4c2b2323f73e65f414529cca1a0bbb74c5add29a3d6e04ca73eda3ead78d = $this->env->getExtension("native_profiler");
        $__internal_0c6c4c2b2323f73e65f414529cca1a0bbb74c5add29a3d6e04ca73eda3ead78d->enter($__internal_0c6c4c2b2323f73e65f414529cca1a0bbb74c5add29a3d6e04ca73eda3ead78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 96
        echo "                                        <p class=\"simplenav\">
                                            <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
                                            <a href=\"about.html\">Ayuda</a> |
                                            <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Identificarse</a>
                                        </p>
                                    ";
        
        $__internal_0c6c4c2b2323f73e65f414529cca1a0bbb74c5add29a3d6e04ca73eda3ead78d->leave($__internal_0c6c4c2b2323f73e65f414529cca1a0bbb74c5add29a3d6e04ca73eda3ead78d_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_723479392ed6247cf2430c613b30de65f4bd68d9d29893e9fef06513d2cca8a9 = $this->env->getExtension("native_profiler");
        $__internal_723479392ed6247cf2430c613b30de65f4bd68d9d29893e9fef06513d2cca8a9->enter($__internal_723479392ed6247cf2430c613b30de65f4bd68d9d29893e9fef06513d2cca8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
        echo "            <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
            <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>  
            <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/headroom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jQuery.headroom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/template.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
            <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/numero.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
        ";
        
        $__internal_723479392ed6247cf2430c613b30de65f4bd68d9d29893e9fef06513d2cca8a9->leave($__internal_723479392ed6247cf2430c613b30de65f4bd68d9d29893e9fef06513d2cca8a9_prof);

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
        return array (  370 => 126,  366 => 125,  362 => 124,  358 => 123,  354 => 121,  348 => 120,  338 => 99,  333 => 97,  330 => 96,  324 => 95,  303 => 102,  301 => 95,  262 => 58,  256 => 57,  248 => 117,  246 => 57,  243 => 56,  237 => 55,  229 => 51,  223 => 50,  215 => 46,  209 => 45,  197 => 35,  193 => 33,  187 => 32,  175 => 26,  165 => 39,  163 => 32,  158 => 30,  151 => 26,  146 => 23,  140 => 22,  131 => 14,  126 => 12,  122 => 11,  118 => 10,  113 => 9,  107 => 8,  95 => 6,  87 => 128,  85 => 120,  82 => 119,  80 => 55,  75 => 52,  73 => 50,  68 => 47,  66 => 45,  61 => 42,  59 => 22,  51 => 17,  47 => 15,  45 => 8,  40 => 6,  33 => 1,);
    }
}
