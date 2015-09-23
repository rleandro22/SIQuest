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
        $__internal_efaa451e062da4dbb7b1817607ddfe869c5bf1e5fddfd4f53550b5ce4673f4c7 = $this->env->getExtension("native_profiler");
        $__internal_efaa451e062da4dbb7b1817607ddfe869c5bf1e5fddfd4f53550b5ce4673f4c7->enter($__internal_efaa451e062da4dbb7b1817607ddfe869c5bf1e5fddfd4f53550b5ce4673f4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_efaa451e062da4dbb7b1817607ddfe869c5bf1e5fddfd4f53550b5ce4673f4c7->leave($__internal_efaa451e062da4dbb7b1817607ddfe869c5bf1e5fddfd4f53550b5ce4673f4c7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_90661d9790efd51c4a9dba8e670a73213e9d0746d99e529b7f1540ae13385e70 = $this->env->getExtension("native_profiler");
        $__internal_90661d9790efd51c4a9dba8e670a73213e9d0746d99e529b7f1540ae13385e70->enter($__internal_90661d9790efd51c4a9dba8e670a73213e9d0746d99e529b7f1540ae13385e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_90661d9790efd51c4a9dba8e670a73213e9d0746d99e529b7f1540ae13385e70->leave($__internal_90661d9790efd51c4a9dba8e670a73213e9d0746d99e529b7f1540ae13385e70_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1cb6afa960ccd402b2f576251175d6d3273068d8881d47d76257d22f8430c8bd = $this->env->getExtension("native_profiler");
        $__internal_1cb6afa960ccd402b2f576251175d6d3273068d8881d47d76257d22f8430c8bd->enter($__internal_1cb6afa960ccd402b2f576251175d6d3273068d8881d47d76257d22f8430c8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1cb6afa960ccd402b2f576251175d6d3273068d8881d47d76257d22f8430c8bd->leave($__internal_1cb6afa960ccd402b2f576251175d6d3273068d8881d47d76257d22f8430c8bd_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_604a2eacc96106ca2e6293ef6b5141d3e2702ddd8a2e36a3b80ef44a77c80d7e = $this->env->getExtension("native_profiler");
        $__internal_604a2eacc96106ca2e6293ef6b5141d3e2702ddd8a2e36a3b80ef44a77c80d7e->enter($__internal_604a2eacc96106ca2e6293ef6b5141d3e2702ddd8a2e36a3b80ef44a77c80d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_604a2eacc96106ca2e6293ef6b5141d3e2702ddd8a2e36a3b80ef44a77c80d7e->leave($__internal_604a2eacc96106ca2e6293ef6b5141d3e2702ddd8a2e36a3b80ef44a77c80d7e_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_261715baba32d3715cfaefe0317355cf940dc2f5130d5301c22969220ae926c0 = $this->env->getExtension("native_profiler");
        $__internal_261715baba32d3715cfaefe0317355cf940dc2f5130d5301c22969220ae926c0->enter($__internal_261715baba32d3715cfaefe0317355cf940dc2f5130d5301c22969220ae926c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_261715baba32d3715cfaefe0317355cf940dc2f5130d5301c22969220ae926c0->leave($__internal_261715baba32d3715cfaefe0317355cf940dc2f5130d5301c22969220ae926c0_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_c850596d06f2d5a7f12710ae05e21cbdc74a13f6d6262e6a7c4b3d8e92c7d0af = $this->env->getExtension("native_profiler");
        $__internal_c850596d06f2d5a7f12710ae05e21cbdc74a13f6d6262e6a7c4b3d8e92c7d0af->enter($__internal_c850596d06f2d5a7f12710ae05e21cbdc74a13f6d6262e6a7c4b3d8e92c7d0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_c850596d06f2d5a7f12710ae05e21cbdc74a13f6d6262e6a7c4b3d8e92c7d0af->leave($__internal_c850596d06f2d5a7f12710ae05e21cbdc74a13f6d6262e6a7c4b3d8e92c7d0af_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_13923efb1dc0b70286a5ad93d0b1c48bd5c30869c2e89085a320049569c47bf7 = $this->env->getExtension("native_profiler");
        $__internal_13923efb1dc0b70286a5ad93d0b1c48bd5c30869c2e89085a320049569c47bf7->enter($__internal_13923efb1dc0b70286a5ad93d0b1c48bd5c30869c2e89085a320049569c47bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_13923efb1dc0b70286a5ad93d0b1c48bd5c30869c2e89085a320049569c47bf7->leave($__internal_13923efb1dc0b70286a5ad93d0b1c48bd5c30869c2e89085a320049569c47bf7_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3d77e0b079c552a7da0d5f0f931f2360ac1b4e3e61771256369885059b541c9c = $this->env->getExtension("native_profiler");
        $__internal_3d77e0b079c552a7da0d5f0f931f2360ac1b4e3e61771256369885059b541c9c->enter($__internal_3d77e0b079c552a7da0d5f0f931f2360ac1b4e3e61771256369885059b541c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_3d77e0b079c552a7da0d5f0f931f2360ac1b4e3e61771256369885059b541c9c->leave($__internal_3d77e0b079c552a7da0d5f0f931f2360ac1b4e3e61771256369885059b541c9c_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_ca4472a131eaec0eb973d6d464fcd7bcb267d82b1620568f9dc7e3c85fa377a0 = $this->env->getExtension("native_profiler");
        $__internal_ca4472a131eaec0eb973d6d464fcd7bcb267d82b1620568f9dc7e3c85fa377a0->enter($__internal_ca4472a131eaec0eb973d6d464fcd7bcb267d82b1620568f9dc7e3c85fa377a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_ca4472a131eaec0eb973d6d464fcd7bcb267d82b1620568f9dc7e3c85fa377a0->leave($__internal_ca4472a131eaec0eb973d6d464fcd7bcb267d82b1620568f9dc7e3c85fa377a0_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be31ab3ace99514c18a9c02405dda37fcfeb3f10013d4eae18a16f790314d4ea = $this->env->getExtension("native_profiler");
        $__internal_be31ab3ace99514c18a9c02405dda37fcfeb3f10013d4eae18a16f790314d4ea->enter($__internal_be31ab3ace99514c18a9c02405dda37fcfeb3f10013d4eae18a16f790314d4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_be31ab3ace99514c18a9c02405dda37fcfeb3f10013d4eae18a16f790314d4ea->leave($__internal_be31ab3ace99514c18a9c02405dda37fcfeb3f10013d4eae18a16f790314d4ea_prof);

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
