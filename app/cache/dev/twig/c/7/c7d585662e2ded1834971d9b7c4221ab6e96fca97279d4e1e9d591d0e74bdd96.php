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
        $__internal_83a29261c862acfddb989eb2bca80631ee0c8a84c0c3e6a043e46864ca9888fc = $this->env->getExtension("native_profiler");
        $__internal_83a29261c862acfddb989eb2bca80631ee0c8a84c0c3e6a043e46864ca9888fc->enter($__internal_83a29261c862acfddb989eb2bca80631ee0c8a84c0c3e6a043e46864ca9888fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 134
        echo "    </body>
</html>";
        
        $__internal_83a29261c862acfddb989eb2bca80631ee0c8a84c0c3e6a043e46864ca9888fc->leave($__internal_83a29261c862acfddb989eb2bca80631ee0c8a84c0c3e6a043e46864ca9888fc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce97594813b3a8f2edf533993ea0789ae09a07e16c902adac7326211ce91bbf9 = $this->env->getExtension("native_profiler");
        $__internal_ce97594813b3a8f2edf533993ea0789ae09a07e16c902adac7326211ce91bbf9->enter($__internal_ce97594813b3a8f2edf533993ea0789ae09a07e16c902adac7326211ce91bbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_ce97594813b3a8f2edf533993ea0789ae09a07e16c902adac7326211ce91bbf9->leave($__internal_ce97594813b3a8f2edf533993ea0789ae09a07e16c902adac7326211ce91bbf9_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f762e3f663d5ce65ea5e3eb241eec8b5a9d9f3afdcdd8957c7f3e5b7f78dec67 = $this->env->getExtension("native_profiler");
        $__internal_f762e3f663d5ce65ea5e3eb241eec8b5a9d9f3afdcdd8957c7f3e5b7f78dec67->enter($__internal_f762e3f663d5ce65ea5e3eb241eec8b5a9d9f3afdcdd8957c7f3e5b7f78dec67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f762e3f663d5ce65ea5e3eb241eec8b5a9d9f3afdcdd8957c7f3e5b7f78dec67->leave($__internal_f762e3f663d5ce65ea5e3eb241eec8b5a9d9f3afdcdd8957c7f3e5b7f78dec67_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_541dff8922373d966d9fb585eef34741b1089e00325c5632773731d1ce67535a = $this->env->getExtension("native_profiler");
        $__internal_541dff8922373d966d9fb585eef34741b1089e00325c5632773731d1ce67535a->enter($__internal_541dff8922373d966d9fb585eef34741b1089e00325c5632773731d1ce67535a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_541dff8922373d966d9fb585eef34741b1089e00325c5632773731d1ce67535a->leave($__internal_541dff8922373d966d9fb585eef34741b1089e00325c5632773731d1ce67535a_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_46fede5df83277572b97849bdcb5a57531bda59c2eed0f340c93a06683e0c04d = $this->env->getExtension("native_profiler");
        $__internal_46fede5df83277572b97849bdcb5a57531bda59c2eed0f340c93a06683e0c04d->enter($__internal_46fede5df83277572b97849bdcb5a57531bda59c2eed0f340c93a06683e0c04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_46fede5df83277572b97849bdcb5a57531bda59c2eed0f340c93a06683e0c04d->leave($__internal_46fede5df83277572b97849bdcb5a57531bda59c2eed0f340c93a06683e0c04d_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_7ba8acef8fb3cb95262ae2e675b9b26a2e6e83ccdb2cb7932b9bf7232b415145 = $this->env->getExtension("native_profiler");
        $__internal_7ba8acef8fb3cb95262ae2e675b9b26a2e6e83ccdb2cb7932b9bf7232b415145->enter($__internal_7ba8acef8fb3cb95262ae2e675b9b26a2e6e83ccdb2cb7932b9bf7232b415145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_7ba8acef8fb3cb95262ae2e675b9b26a2e6e83ccdb2cb7932b9bf7232b415145->leave($__internal_7ba8acef8fb3cb95262ae2e675b9b26a2e6e83ccdb2cb7932b9bf7232b415145_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_c889b9359c814338249d231d0e05f3fb372407bfc75b7740fcd26c7c792d1cb5 = $this->env->getExtension("native_profiler");
        $__internal_c889b9359c814338249d231d0e05f3fb372407bfc75b7740fcd26c7c792d1cb5->enter($__internal_c889b9359c814338249d231d0e05f3fb372407bfc75b7740fcd26c7c792d1cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_c889b9359c814338249d231d0e05f3fb372407bfc75b7740fcd26c7c792d1cb5->leave($__internal_c889b9359c814338249d231d0e05f3fb372407bfc75b7740fcd26c7c792d1cb5_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_92a87384a07e9e500bbc9d169bb4dede99fd759cb53a654a2cc10649ece2c3b8 = $this->env->getExtension("native_profiler");
        $__internal_92a87384a07e9e500bbc9d169bb4dede99fd759cb53a654a2cc10649ece2c3b8->enter($__internal_92a87384a07e9e500bbc9d169bb4dede99fd759cb53a654a2cc10649ece2c3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_92a87384a07e9e500bbc9d169bb4dede99fd759cb53a654a2cc10649ece2c3b8->leave($__internal_92a87384a07e9e500bbc9d169bb4dede99fd759cb53a654a2cc10649ece2c3b8_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_502124ce240bf1b18a9e395958a486eb4efcbbe046b15ade7c0812d7725bd5ba = $this->env->getExtension("native_profiler");
        $__internal_502124ce240bf1b18a9e395958a486eb4efcbbe046b15ade7c0812d7725bd5ba->enter($__internal_502124ce240bf1b18a9e395958a486eb4efcbbe046b15ade7c0812d7725bd5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_502124ce240bf1b18a9e395958a486eb4efcbbe046b15ade7c0812d7725bd5ba->leave($__internal_502124ce240bf1b18a9e395958a486eb4efcbbe046b15ade7c0812d7725bd5ba_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8dd9254b330c5c60e7b10d36f9a50f8a14c24114dcb687c45bc9a3f5e9635e42 = $this->env->getExtension("native_profiler");
        $__internal_8dd9254b330c5c60e7b10d36f9a50f8a14c24114dcb687c45bc9a3f5e9635e42->enter($__internal_8dd9254b330c5c60e7b10d36f9a50f8a14c24114dcb687c45bc9a3f5e9635e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/numero.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
        ";
        
        $__internal_8dd9254b330c5c60e7b10d36f9a50f8a14c24114dcb687c45bc9a3f5e9635e42->leave($__internal_8dd9254b330c5c60e7b10d36f9a50f8a14c24114dcb687c45bc9a3f5e9635e42_prof);

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
        return array (  343 => 132,  339 => 131,  335 => 130,  331 => 129,  327 => 127,  321 => 126,  311 => 105,  306 => 103,  303 => 102,  297 => 101,  276 => 108,  274 => 101,  227 => 56,  221 => 55,  213 => 49,  207 => 48,  199 => 44,  193 => 43,  181 => 34,  177 => 32,  171 => 31,  159 => 25,  150 => 14,  145 => 12,  141 => 11,  137 => 10,  132 => 9,  126 => 8,  114 => 6,  106 => 134,  104 => 126,  99 => 123,  97 => 55,  90 => 50,  88 => 48,  83 => 45,  81 => 43,  74 => 38,  72 => 31,  67 => 29,  60 => 25,  49 => 17,  45 => 15,  43 => 8,  38 => 6,  31 => 1,);
    }
}
