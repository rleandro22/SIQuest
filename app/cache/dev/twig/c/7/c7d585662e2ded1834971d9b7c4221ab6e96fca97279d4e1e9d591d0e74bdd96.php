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
        $__internal_8f661ac354f49a0481d5e4b97f009879733d8e79bc45e59f4a36ad1d4fb9d854 = $this->env->getExtension("native_profiler");
        $__internal_8f661ac354f49a0481d5e4b97f009879733d8e79bc45e59f4a36ad1d4fb9d854->enter($__internal_8f661ac354f49a0481d5e4b97f009879733d8e79bc45e59f4a36ad1d4fb9d854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 14
        echo " 

        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/gt_favicon.png"), "html", null, true);
        echo "\"/> 

    </head>

    <body>
        <!-- Fixed navbar -->
        <div class=\"navbar navbar-inverse navbar-fixed-top headroom\" >
            <div class=\"container\">
                <div class=\"log-text\" >";
        // line 24
        $this->displayBlock('mensajeLogueado', $context, $blocks);
        echo "</div>
                <div class=\"navbar-header\">
                    <!-- Button for smallest screens -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                    <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"SIQuest\"></a>
                </div>
                ";
        // line 30
        $this->displayBlock('navigation', $context, $blocks);
        // line 37
        echo "  
            </div>
        </div> 
        <!-- /.navbar -->

        ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "  


        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "  



        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 122
        echo "        </footer>\t


        ";
        // line 125
        $this->displayBlock('javascripts', $context, $blocks);
        // line 133
        echo "    </body>
</html>";
        
        $__internal_8f661ac354f49a0481d5e4b97f009879733d8e79bc45e59f4a36ad1d4fb9d854->leave($__internal_8f661ac354f49a0481d5e4b97f009879733d8e79bc45e59f4a36ad1d4fb9d854_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fbdfae57ed147cb5c1d5e77a5696706ceb25d5990b830e2009829bef0f5562a = $this->env->getExtension("native_profiler");
        $__internal_4fbdfae57ed147cb5c1d5e77a5696706ceb25d5990b830e2009829bef0f5562a->enter($__internal_4fbdfae57ed147cb5c1d5e77a5696706ceb25d5990b830e2009829bef0f5562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_4fbdfae57ed147cb5c1d5e77a5696706ceb25d5990b830e2009829bef0f5562a->leave($__internal_4fbdfae57ed147cb5c1d5e77a5696706ceb25d5990b830e2009829bef0f5562a_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5e9005cb7cbd9cd63875e51677cfbbe0cc2abddbb4af4890e9173e26777a8747 = $this->env->getExtension("native_profiler");
        $__internal_5e9005cb7cbd9cd63875e51677cfbbe0cc2abddbb4af4890e9173e26777a8747->enter($__internal_5e9005cb7cbd9cd63875e51677cfbbe0cc2abddbb4af4890e9173e26777a8747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        ";
        
        $__internal_5e9005cb7cbd9cd63875e51677cfbbe0cc2abddbb4af4890e9173e26777a8747->leave($__internal_5e9005cb7cbd9cd63875e51677cfbbe0cc2abddbb4af4890e9173e26777a8747_prof);

    }

    // line 24
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_e75dc9a0f9a5552c5898594acd1a9cda39473afad839e11174e46b49c2517fa7 = $this->env->getExtension("native_profiler");
        $__internal_e75dc9a0f9a5552c5898594acd1a9cda39473afad839e11174e46b49c2517fa7->enter($__internal_e75dc9a0f9a5552c5898594acd1a9cda39473afad839e11174e46b49c2517fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_e75dc9a0f9a5552c5898594acd1a9cda39473afad839e11174e46b49c2517fa7->leave($__internal_e75dc9a0f9a5552c5898594acd1a9cda39473afad839e11174e46b49c2517fa7_prof);

    }

    // line 30
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_43f0f12e90fbdd98288b07d947252e1a83611b9bcddfa0c457d20fb5071c6c7e = $this->env->getExtension("native_profiler");
        $__internal_43f0f12e90fbdd98288b07d947252e1a83611b9bcddfa0c457d20fb5071c6c7e->enter($__internal_43f0f12e90fbdd98288b07d947252e1a83611b9bcddfa0c457d20fb5071c6c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 31
        echo "                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav pull-right\">
                            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Inicio</a></li>
                            <li><a href=\"about.html\">Ayuda</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                ";
        
        $__internal_43f0f12e90fbdd98288b07d947252e1a83611b9bcddfa0c457d20fb5071c6c7e->leave($__internal_43f0f12e90fbdd98288b07d947252e1a83611b9bcddfa0c457d20fb5071c6c7e_prof);

    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        $__internal_05f86a371b92546b45a26dee375f646c72a08aff31954927f1d72d15b0c80ebf = $this->env->getExtension("native_profiler");
        $__internal_05f86a371b92546b45a26dee375f646c72a08aff31954927f1d72d15b0c80ebf->enter($__internal_05f86a371b92546b45a26dee375f646c72a08aff31954927f1d72d15b0c80ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 43
        echo "
        ";
        
        $__internal_05f86a371b92546b45a26dee375f646c72a08aff31954927f1d72d15b0c80ebf->leave($__internal_05f86a371b92546b45a26dee375f646c72a08aff31954927f1d72d15b0c80ebf_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8718fb24c77a6ce7fc6587ca2a3c70137895c4c5017e1a2b0724acd20951c10 = $this->env->getExtension("native_profiler");
        $__internal_e8718fb24c77a6ce7fc6587ca2a3c70137895c4c5017e1a2b0724acd20951c10->enter($__internal_e8718fb24c77a6ce7fc6587ca2a3c70137895c4c5017e1a2b0724acd20951c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
        ";
        
        $__internal_e8718fb24c77a6ce7fc6587ca2a3c70137895c4c5017e1a2b0724acd20951c10->leave($__internal_e8718fb24c77a6ce7fc6587ca2a3c70137895c4c5017e1a2b0724acd20951c10_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0bc08f49098ff6ed12e6280f69fea03c657d2bc4ad22a8064feba3a1e4345649 = $this->env->getExtension("native_profiler");
        $__internal_0bc08f49098ff6ed12e6280f69fea03c657d2bc4ad22a8064feba3a1e4345649->enter($__internal_0bc08f49098ff6ed12e6280f69fea03c657d2bc4ad22a8064feba3a1e4345649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
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
        // line 100
        $this->displayBlock('navegacionfooter', $context, $blocks);
        // line 107
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
        
        $__internal_0bc08f49098ff6ed12e6280f69fea03c657d2bc4ad22a8064feba3a1e4345649->leave($__internal_0bc08f49098ff6ed12e6280f69fea03c657d2bc4ad22a8064feba3a1e4345649_prof);

    }

    // line 100
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_2cd3632c9acd1bef6e9ccd3bab9a7b2697ee7355a98a4aecd2fdff23627b0857 = $this->env->getExtension("native_profiler");
        $__internal_2cd3632c9acd1bef6e9ccd3bab9a7b2697ee7355a98a4aecd2fdff23627b0857->enter($__internal_2cd3632c9acd1bef6e9ccd3bab9a7b2697ee7355a98a4aecd2fdff23627b0857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 101
        echo "                                        <p class=\"simplenav\">
                                            <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
                                            <a href=\"about.html\">Ayuda</a> |
                                            <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Identificarse</a>
                                        </p>
                                    ";
        
        $__internal_2cd3632c9acd1bef6e9ccd3bab9a7b2697ee7355a98a4aecd2fdff23627b0857->leave($__internal_2cd3632c9acd1bef6e9ccd3bab9a7b2697ee7355a98a4aecd2fdff23627b0857_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_55155787a6d1c7175a0e2ab51471b34d5372ec75c0750ee6974bab64b986ecf5 = $this->env->getExtension("native_profiler");
        $__internal_55155787a6d1c7175a0e2ab51471b34d5372ec75c0750ee6974bab64b986ecf5->enter($__internal_55155787a6d1c7175a0e2ab51471b34d5372ec75c0750ee6974bab64b986ecf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "            <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
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
        
        $__internal_55155787a6d1c7175a0e2ab51471b34d5372ec75c0750ee6974bab64b986ecf5->leave($__internal_55155787a6d1c7175a0e2ab51471b34d5372ec75c0750ee6974bab64b986ecf5_prof);

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
        return array (  336 => 131,  332 => 130,  328 => 129,  323 => 126,  317 => 125,  307 => 104,  302 => 102,  299 => 101,  293 => 100,  272 => 107,  270 => 100,  223 => 55,  217 => 54,  209 => 48,  203 => 47,  195 => 43,  189 => 42,  177 => 33,  173 => 31,  167 => 30,  155 => 24,  145 => 12,  141 => 11,  137 => 10,  132 => 9,  126 => 8,  114 => 6,  106 => 133,  104 => 125,  99 => 122,  97 => 54,  90 => 49,  88 => 47,  83 => 44,  81 => 42,  74 => 37,  72 => 30,  67 => 28,  60 => 24,  49 => 16,  45 => 14,  43 => 8,  38 => 6,  31 => 1,);
    }
}
