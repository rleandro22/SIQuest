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
        $__internal_21682e0ccaf7d9d8174cca887f05df3b58d1857c1bf9fe3d5f7f51940639c071 = $this->env->getExtension("native_profiler");
        $__internal_21682e0ccaf7d9d8174cca887f05df3b58d1857c1bf9fe3d5f7f51940639c071->enter($__internal_21682e0ccaf7d9d8174cca887f05df3b58d1857c1bf9fe3d5f7f51940639c071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_21682e0ccaf7d9d8174cca887f05df3b58d1857c1bf9fe3d5f7f51940639c071->leave($__internal_21682e0ccaf7d9d8174cca887f05df3b58d1857c1bf9fe3d5f7f51940639c071_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_89345660490bafd4a89513b4b7f618a7be96ace3d65795b35940de45b6c222e5 = $this->env->getExtension("native_profiler");
        $__internal_89345660490bafd4a89513b4b7f618a7be96ace3d65795b35940de45b6c222e5->enter($__internal_89345660490bafd4a89513b4b7f618a7be96ace3d65795b35940de45b6c222e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_89345660490bafd4a89513b4b7f618a7be96ace3d65795b35940de45b6c222e5->leave($__internal_89345660490bafd4a89513b4b7f618a7be96ace3d65795b35940de45b6c222e5_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b869619d732a7dc86dd93ae0b80d8c59b6b62b67f48eecfbce59453b9d710d2 = $this->env->getExtension("native_profiler");
        $__internal_7b869619d732a7dc86dd93ae0b80d8c59b6b62b67f48eecfbce59453b9d710d2->enter($__internal_7b869619d732a7dc86dd93ae0b80d8c59b6b62b67f48eecfbce59453b9d710d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7b869619d732a7dc86dd93ae0b80d8c59b6b62b67f48eecfbce59453b9d710d2->leave($__internal_7b869619d732a7dc86dd93ae0b80d8c59b6b62b67f48eecfbce59453b9d710d2_prof);

    }

    // line 22
    public function block_barra($context, array $blocks = array())
    {
        $__internal_123bd4643b37dcc2f4dc6362dbcde8a6e264293e827d5fb594b4a9da6571b9ee = $this->env->getExtension("native_profiler");
        $__internal_123bd4643b37dcc2f4dc6362dbcde8a6e264293e827d5fb594b4a9da6571b9ee->enter($__internal_123bd4643b37dcc2f4dc6362dbcde8a6e264293e827d5fb594b4a9da6571b9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

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
        
        $__internal_123bd4643b37dcc2f4dc6362dbcde8a6e264293e827d5fb594b4a9da6571b9ee->leave($__internal_123bd4643b37dcc2f4dc6362dbcde8a6e264293e827d5fb594b4a9da6571b9ee_prof);

    }

    // line 26
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_3c6b7af6f5e432e8f560a7e53d850f7033c06e96c3bfd52162ac60c397f77fa2 = $this->env->getExtension("native_profiler");
        $__internal_3c6b7af6f5e432e8f560a7e53d850f7033c06e96c3bfd52162ac60c397f77fa2->enter($__internal_3c6b7af6f5e432e8f560a7e53d850f7033c06e96c3bfd52162ac60c397f77fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_3c6b7af6f5e432e8f560a7e53d850f7033c06e96c3bfd52162ac60c397f77fa2->leave($__internal_3c6b7af6f5e432e8f560a7e53d850f7033c06e96c3bfd52162ac60c397f77fa2_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4ecd101b0ca1a8f4f700555d3a369bbe9b60bb378b4a725137b53479a173f9bd = $this->env->getExtension("native_profiler");
        $__internal_4ecd101b0ca1a8f4f700555d3a369bbe9b60bb378b4a725137b53479a173f9bd->enter($__internal_4ecd101b0ca1a8f4f700555d3a369bbe9b60bb378b4a725137b53479a173f9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_4ecd101b0ca1a8f4f700555d3a369bbe9b60bb378b4a725137b53479a173f9bd->leave($__internal_4ecd101b0ca1a8f4f700555d3a369bbe9b60bb378b4a725137b53479a173f9bd_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_601d68a1d7be04304c200aa1b5a386dc4128e5c9d38f2316fd352bb779100d29 = $this->env->getExtension("native_profiler");
        $__internal_601d68a1d7be04304c200aa1b5a386dc4128e5c9d38f2316fd352bb779100d29->enter($__internal_601d68a1d7be04304c200aa1b5a386dc4128e5c9d38f2316fd352bb779100d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "
        ";
        
        $__internal_601d68a1d7be04304c200aa1b5a386dc4128e5c9d38f2316fd352bb779100d29->leave($__internal_601d68a1d7be04304c200aa1b5a386dc4128e5c9d38f2316fd352bb779100d29_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_4686d3e8c923ec2ba2f482bbc0132065c52437751419c58bd6ea10aac5399b7c = $this->env->getExtension("native_profiler");
        $__internal_4686d3e8c923ec2ba2f482bbc0132065c52437751419c58bd6ea10aac5399b7c->enter($__internal_4686d3e8c923ec2ba2f482bbc0132065c52437751419c58bd6ea10aac5399b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
        ";
        
        $__internal_4686d3e8c923ec2ba2f482bbc0132065c52437751419c58bd6ea10aac5399b7c->leave($__internal_4686d3e8c923ec2ba2f482bbc0132065c52437751419c58bd6ea10aac5399b7c_prof);

    }

    // line 55
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_e7d82041cdb6a0abeedcdab686cb0a7cda3c6b8470bd4a5fa841d6a121deccfb = $this->env->getExtension("native_profiler");
        $__internal_e7d82041cdb6a0abeedcdab686cb0a7cda3c6b8470bd4a5fa841d6a121deccfb->enter($__internal_e7d82041cdb6a0abeedcdab686cb0a7cda3c6b8470bd4a5fa841d6a121deccfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        // line 56
        echo "        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 117
        echo "        </footer>\t
";
        
        $__internal_e7d82041cdb6a0abeedcdab686cb0a7cda3c6b8470bd4a5fa841d6a121deccfb->leave($__internal_e7d82041cdb6a0abeedcdab686cb0a7cda3c6b8470bd4a5fa841d6a121deccfb_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_028dd8ef85af204cc24ab8d6e7ec214c049572064bb98cd17b83d44990c7e053 = $this->env->getExtension("native_profiler");
        $__internal_028dd8ef85af204cc24ab8d6e7ec214c049572064bb98cd17b83d44990c7e053->enter($__internal_028dd8ef85af204cc24ab8d6e7ec214c049572064bb98cd17b83d44990c7e053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_028dd8ef85af204cc24ab8d6e7ec214c049572064bb98cd17b83d44990c7e053->leave($__internal_028dd8ef85af204cc24ab8d6e7ec214c049572064bb98cd17b83d44990c7e053_prof);

    }

    // line 95
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_159762d771dd0d8e1e317274e8e7df2cadb91f5677bfc58e68fe873cf69ff64d = $this->env->getExtension("native_profiler");
        $__internal_159762d771dd0d8e1e317274e8e7df2cadb91f5677bfc58e68fe873cf69ff64d->enter($__internal_159762d771dd0d8e1e317274e8e7df2cadb91f5677bfc58e68fe873cf69ff64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_159762d771dd0d8e1e317274e8e7df2cadb91f5677bfc58e68fe873cf69ff64d->leave($__internal_159762d771dd0d8e1e317274e8e7df2cadb91f5677bfc58e68fe873cf69ff64d_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe80c778a199c6d9e335d5a6b93cf4ba3aa4dbe8ad2b3e0067e7c10763f71aa4 = $this->env->getExtension("native_profiler");
        $__internal_fe80c778a199c6d9e335d5a6b93cf4ba3aa4dbe8ad2b3e0067e7c10763f71aa4->enter($__internal_fe80c778a199c6d9e335d5a6b93cf4ba3aa4dbe8ad2b3e0067e7c10763f71aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_fe80c778a199c6d9e335d5a6b93cf4ba3aa4dbe8ad2b3e0067e7c10763f71aa4->leave($__internal_fe80c778a199c6d9e335d5a6b93cf4ba3aa4dbe8ad2b3e0067e7c10763f71aa4_prof);

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
