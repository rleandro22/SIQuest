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
        $__internal_178f9d912321ad0cd72efa26649efabf5fda44ee956eadb523e0c7b505fa9365 = $this->env->getExtension("native_profiler");
        $__internal_178f9d912321ad0cd72efa26649efabf5fda44ee956eadb523e0c7b505fa9365->enter($__internal_178f9d912321ad0cd72efa26649efabf5fda44ee956eadb523e0c7b505fa9365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_178f9d912321ad0cd72efa26649efabf5fda44ee956eadb523e0c7b505fa9365->leave($__internal_178f9d912321ad0cd72efa26649efabf5fda44ee956eadb523e0c7b505fa9365_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_17057d0ee9f4538bbb790aadd91afc71bc7e23fe23dc5ee554e3a63e18bccacc = $this->env->getExtension("native_profiler");
        $__internal_17057d0ee9f4538bbb790aadd91afc71bc7e23fe23dc5ee554e3a63e18bccacc->enter($__internal_17057d0ee9f4538bbb790aadd91afc71bc7e23fe23dc5ee554e3a63e18bccacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_17057d0ee9f4538bbb790aadd91afc71bc7e23fe23dc5ee554e3a63e18bccacc->leave($__internal_17057d0ee9f4538bbb790aadd91afc71bc7e23fe23dc5ee554e3a63e18bccacc_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_430f36f76437da4d61907b2843827631d982f1a6f22d3514b07c94c4ceeb5b58 = $this->env->getExtension("native_profiler");
        $__internal_430f36f76437da4d61907b2843827631d982f1a6f22d3514b07c94c4ceeb5b58->enter($__internal_430f36f76437da4d61907b2843827631d982f1a6f22d3514b07c94c4ceeb5b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_430f36f76437da4d61907b2843827631d982f1a6f22d3514b07c94c4ceeb5b58->leave($__internal_430f36f76437da4d61907b2843827631d982f1a6f22d3514b07c94c4ceeb5b58_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_aecb1893ac81bd7f80dc7afe310ca166b91fd979fdb4f6282bce3792a362d883 = $this->env->getExtension("native_profiler");
        $__internal_aecb1893ac81bd7f80dc7afe310ca166b91fd979fdb4f6282bce3792a362d883->enter($__internal_aecb1893ac81bd7f80dc7afe310ca166b91fd979fdb4f6282bce3792a362d883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_aecb1893ac81bd7f80dc7afe310ca166b91fd979fdb4f6282bce3792a362d883->leave($__internal_aecb1893ac81bd7f80dc7afe310ca166b91fd979fdb4f6282bce3792a362d883_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_c9759c48b13cf3fb5cb70deebc9f7432ab0f464e601d571cb3b141adf21cdec8 = $this->env->getExtension("native_profiler");
        $__internal_c9759c48b13cf3fb5cb70deebc9f7432ab0f464e601d571cb3b141adf21cdec8->enter($__internal_c9759c48b13cf3fb5cb70deebc9f7432ab0f464e601d571cb3b141adf21cdec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_c9759c48b13cf3fb5cb70deebc9f7432ab0f464e601d571cb3b141adf21cdec8->leave($__internal_c9759c48b13cf3fb5cb70deebc9f7432ab0f464e601d571cb3b141adf21cdec8_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_1d8a93151cf3f24979e8e74afb2543a2e5eb5d09c9562f398f7cd46aa36e6d0e = $this->env->getExtension("native_profiler");
        $__internal_1d8a93151cf3f24979e8e74afb2543a2e5eb5d09c9562f398f7cd46aa36e6d0e->enter($__internal_1d8a93151cf3f24979e8e74afb2543a2e5eb5d09c9562f398f7cd46aa36e6d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_1d8a93151cf3f24979e8e74afb2543a2e5eb5d09c9562f398f7cd46aa36e6d0e->leave($__internal_1d8a93151cf3f24979e8e74afb2543a2e5eb5d09c9562f398f7cd46aa36e6d0e_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9009fcd25fa887967dfd530712efe909cc24114b67487c18beb2f846ae9d058 = $this->env->getExtension("native_profiler");
        $__internal_c9009fcd25fa887967dfd530712efe909cc24114b67487c18beb2f846ae9d058->enter($__internal_c9009fcd25fa887967dfd530712efe909cc24114b67487c18beb2f846ae9d058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_c9009fcd25fa887967dfd530712efe909cc24114b67487c18beb2f846ae9d058->leave($__internal_c9009fcd25fa887967dfd530712efe909cc24114b67487c18beb2f846ae9d058_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c42094094f00217c5c4c43d6de1ae95af3a2a2a97e31c47c1fa5a2653d090368 = $this->env->getExtension("native_profiler");
        $__internal_c42094094f00217c5c4c43d6de1ae95af3a2a2a97e31c47c1fa5a2653d090368->enter($__internal_c42094094f00217c5c4c43d6de1ae95af3a2a2a97e31c47c1fa5a2653d090368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_c42094094f00217c5c4c43d6de1ae95af3a2a2a97e31c47c1fa5a2653d090368->leave($__internal_c42094094f00217c5c4c43d6de1ae95af3a2a2a97e31c47c1fa5a2653d090368_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_f795cff05fa97332ed16361cb014f27cae474e5ef6d3832cbcc043f5e728c728 = $this->env->getExtension("native_profiler");
        $__internal_f795cff05fa97332ed16361cb014f27cae474e5ef6d3832cbcc043f5e728c728->enter($__internal_f795cff05fa97332ed16361cb014f27cae474e5ef6d3832cbcc043f5e728c728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_f795cff05fa97332ed16361cb014f27cae474e5ef6d3832cbcc043f5e728c728->leave($__internal_f795cff05fa97332ed16361cb014f27cae474e5ef6d3832cbcc043f5e728c728_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc63bcd54cef39e8741f87825a40a3a6ddc7d4bb1dac7f4d47f5b0aac594b62a = $this->env->getExtension("native_profiler");
        $__internal_bc63bcd54cef39e8741f87825a40a3a6ddc7d4bb1dac7f4d47f5b0aac594b62a->enter($__internal_bc63bcd54cef39e8741f87825a40a3a6ddc7d4bb1dac7f4d47f5b0aac594b62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bc63bcd54cef39e8741f87825a40a3a6ddc7d4bb1dac7f4d47f5b0aac594b62a->leave($__internal_bc63bcd54cef39e8741f87825a40a3a6ddc7d4bb1dac7f4d47f5b0aac594b62a_prof);

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
