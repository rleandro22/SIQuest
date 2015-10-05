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
        $__internal_e250379667c25857dfeb2e251540f879b1a6b313a78be7b7a8cb46ef4f97ef1a = $this->env->getExtension("native_profiler");
        $__internal_e250379667c25857dfeb2e251540f879b1a6b313a78be7b7a8cb46ef4f97ef1a->enter($__internal_e250379667c25857dfeb2e251540f879b1a6b313a78be7b7a8cb46ef4f97ef1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e250379667c25857dfeb2e251540f879b1a6b313a78be7b7a8cb46ef4f97ef1a->leave($__internal_e250379667c25857dfeb2e251540f879b1a6b313a78be7b7a8cb46ef4f97ef1a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff1c5530b19c137a6bb127cc95f4834ae1f19d127aa8cf7b83f804d3a8eb69ca = $this->env->getExtension("native_profiler");
        $__internal_ff1c5530b19c137a6bb127cc95f4834ae1f19d127aa8cf7b83f804d3a8eb69ca->enter($__internal_ff1c5530b19c137a6bb127cc95f4834ae1f19d127aa8cf7b83f804d3a8eb69ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_ff1c5530b19c137a6bb127cc95f4834ae1f19d127aa8cf7b83f804d3a8eb69ca->leave($__internal_ff1c5530b19c137a6bb127cc95f4834ae1f19d127aa8cf7b83f804d3a8eb69ca_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b690f3d73df1f627da912c64960b144dda470e9c4a78683fdccdeacf845263d = $this->env->getExtension("native_profiler");
        $__internal_3b690f3d73df1f627da912c64960b144dda470e9c4a78683fdccdeacf845263d->enter($__internal_3b690f3d73df1f627da912c64960b144dda470e9c4a78683fdccdeacf845263d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3b690f3d73df1f627da912c64960b144dda470e9c4a78683fdccdeacf845263d->leave($__internal_3b690f3d73df1f627da912c64960b144dda470e9c4a78683fdccdeacf845263d_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_c5dba6f9cf22ac5f68d39380c8d5d69fc72728f03fcc990febd9b277cd4215c4 = $this->env->getExtension("native_profiler");
        $__internal_c5dba6f9cf22ac5f68d39380c8d5d69fc72728f03fcc990febd9b277cd4215c4->enter($__internal_c5dba6f9cf22ac5f68d39380c8d5d69fc72728f03fcc990febd9b277cd4215c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_c5dba6f9cf22ac5f68d39380c8d5d69fc72728f03fcc990febd9b277cd4215c4->leave($__internal_c5dba6f9cf22ac5f68d39380c8d5d69fc72728f03fcc990febd9b277cd4215c4_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_f78c92ad9f3f81c474c48f7ee485d295ce2f7d319debda1ddb4998a0723c4717 = $this->env->getExtension("native_profiler");
        $__internal_f78c92ad9f3f81c474c48f7ee485d295ce2f7d319debda1ddb4998a0723c4717->enter($__internal_f78c92ad9f3f81c474c48f7ee485d295ce2f7d319debda1ddb4998a0723c4717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_f78c92ad9f3f81c474c48f7ee485d295ce2f7d319debda1ddb4998a0723c4717->leave($__internal_f78c92ad9f3f81c474c48f7ee485d295ce2f7d319debda1ddb4998a0723c4717_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_4c7b3e51f1ad83eb19f937cc7aa9a219ef33369e72af4316a58069547e85e127 = $this->env->getExtension("native_profiler");
        $__internal_4c7b3e51f1ad83eb19f937cc7aa9a219ef33369e72af4316a58069547e85e127->enter($__internal_4c7b3e51f1ad83eb19f937cc7aa9a219ef33369e72af4316a58069547e85e127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_4c7b3e51f1ad83eb19f937cc7aa9a219ef33369e72af4316a58069547e85e127->leave($__internal_4c7b3e51f1ad83eb19f937cc7aa9a219ef33369e72af4316a58069547e85e127_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_859cdd40d53dbcc99ccbff14066027c195daa0733d128dad05d7e6ad4c9a0e49 = $this->env->getExtension("native_profiler");
        $__internal_859cdd40d53dbcc99ccbff14066027c195daa0733d128dad05d7e6ad4c9a0e49->enter($__internal_859cdd40d53dbcc99ccbff14066027c195daa0733d128dad05d7e6ad4c9a0e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_859cdd40d53dbcc99ccbff14066027c195daa0733d128dad05d7e6ad4c9a0e49->leave($__internal_859cdd40d53dbcc99ccbff14066027c195daa0733d128dad05d7e6ad4c9a0e49_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e04583aee1216d18dd7d119c2a523caed26d99d1a8f3e1ceba20fd786e7b51c3 = $this->env->getExtension("native_profiler");
        $__internal_e04583aee1216d18dd7d119c2a523caed26d99d1a8f3e1ceba20fd786e7b51c3->enter($__internal_e04583aee1216d18dd7d119c2a523caed26d99d1a8f3e1ceba20fd786e7b51c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_e04583aee1216d18dd7d119c2a523caed26d99d1a8f3e1ceba20fd786e7b51c3->leave($__internal_e04583aee1216d18dd7d119c2a523caed26d99d1a8f3e1ceba20fd786e7b51c3_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_c6849a4be18f50a4e33889971758d2fe6f2cf04e098e112a71dffe6e4eb02b51 = $this->env->getExtension("native_profiler");
        $__internal_c6849a4be18f50a4e33889971758d2fe6f2cf04e098e112a71dffe6e4eb02b51->enter($__internal_c6849a4be18f50a4e33889971758d2fe6f2cf04e098e112a71dffe6e4eb02b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_c6849a4be18f50a4e33889971758d2fe6f2cf04e098e112a71dffe6e4eb02b51->leave($__internal_c6849a4be18f50a4e33889971758d2fe6f2cf04e098e112a71dffe6e4eb02b51_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47c30a2f3d00c171f98dbde83df807f18070f4a2a6d02aef07febe948b420f88 = $this->env->getExtension("native_profiler");
        $__internal_47c30a2f3d00c171f98dbde83df807f18070f4a2a6d02aef07febe948b420f88->enter($__internal_47c30a2f3d00c171f98dbde83df807f18070f4a2a6d02aef07febe948b420f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_47c30a2f3d00c171f98dbde83df807f18070f4a2a6d02aef07febe948b420f88->leave($__internal_47c30a2f3d00c171f98dbde83df807f18070f4a2a6d02aef07febe948b420f88_prof);

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
