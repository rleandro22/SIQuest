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
        $__internal_0a1def1b657a450b92f0f3d20aa1d87706a213c38e1d6f2f09536e3f51846758 = $this->env->getExtension("native_profiler");
        $__internal_0a1def1b657a450b92f0f3d20aa1d87706a213c38e1d6f2f09536e3f51846758->enter($__internal_0a1def1b657a450b92f0f3d20aa1d87706a213c38e1d6f2f09536e3f51846758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0a1def1b657a450b92f0f3d20aa1d87706a213c38e1d6f2f09536e3f51846758->leave($__internal_0a1def1b657a450b92f0f3d20aa1d87706a213c38e1d6f2f09536e3f51846758_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_672eaad5262344f147dd3fa7c91ac19940e58981bf23a9e186d57c40be58c9ab = $this->env->getExtension("native_profiler");
        $__internal_672eaad5262344f147dd3fa7c91ac19940e58981bf23a9e186d57c40be58c9ab->enter($__internal_672eaad5262344f147dd3fa7c91ac19940e58981bf23a9e186d57c40be58c9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_672eaad5262344f147dd3fa7c91ac19940e58981bf23a9e186d57c40be58c9ab->leave($__internal_672eaad5262344f147dd3fa7c91ac19940e58981bf23a9e186d57c40be58c9ab_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd73fa05f9d0d6db3a42afaed7fd661e9c1c0aee62cf6f2146d4f974938a4ac5 = $this->env->getExtension("native_profiler");
        $__internal_dd73fa05f9d0d6db3a42afaed7fd661e9c1c0aee62cf6f2146d4f974938a4ac5->enter($__internal_dd73fa05f9d0d6db3a42afaed7fd661e9c1c0aee62cf6f2146d4f974938a4ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_dd73fa05f9d0d6db3a42afaed7fd661e9c1c0aee62cf6f2146d4f974938a4ac5->leave($__internal_dd73fa05f9d0d6db3a42afaed7fd661e9c1c0aee62cf6f2146d4f974938a4ac5_prof);

    }

    // line 24
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_e2103ec735f3d2668262b8bc2d0cb978845818d0673e6cb8789ff1b43f78db09 = $this->env->getExtension("native_profiler");
        $__internal_e2103ec735f3d2668262b8bc2d0cb978845818d0673e6cb8789ff1b43f78db09->enter($__internal_e2103ec735f3d2668262b8bc2d0cb978845818d0673e6cb8789ff1b43f78db09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_e2103ec735f3d2668262b8bc2d0cb978845818d0673e6cb8789ff1b43f78db09->leave($__internal_e2103ec735f3d2668262b8bc2d0cb978845818d0673e6cb8789ff1b43f78db09_prof);

    }

    // line 30
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_72c75dcd4abe668e82702b3e6bc71b730f1e795fc16103b2fe9777ba331e01c3 = $this->env->getExtension("native_profiler");
        $__internal_72c75dcd4abe668e82702b3e6bc71b730f1e795fc16103b2fe9777ba331e01c3->enter($__internal_72c75dcd4abe668e82702b3e6bc71b730f1e795fc16103b2fe9777ba331e01c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_72c75dcd4abe668e82702b3e6bc71b730f1e795fc16103b2fe9777ba331e01c3->leave($__internal_72c75dcd4abe668e82702b3e6bc71b730f1e795fc16103b2fe9777ba331e01c3_prof);

    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        $__internal_5e69bbf788d2087ebd219468ece9cc33cbe7b55e02471b34244b6e865c9e98e8 = $this->env->getExtension("native_profiler");
        $__internal_5e69bbf788d2087ebd219468ece9cc33cbe7b55e02471b34244b6e865c9e98e8->enter($__internal_5e69bbf788d2087ebd219468ece9cc33cbe7b55e02471b34244b6e865c9e98e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 43
        echo "
        ";
        
        $__internal_5e69bbf788d2087ebd219468ece9cc33cbe7b55e02471b34244b6e865c9e98e8->leave($__internal_5e69bbf788d2087ebd219468ece9cc33cbe7b55e02471b34244b6e865c9e98e8_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_645bc38f9f933afb5462df1adafd38244057296237e34ce8415a76a056ba4cee = $this->env->getExtension("native_profiler");
        $__internal_645bc38f9f933afb5462df1adafd38244057296237e34ce8415a76a056ba4cee->enter($__internal_645bc38f9f933afb5462df1adafd38244057296237e34ce8415a76a056ba4cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
        ";
        
        $__internal_645bc38f9f933afb5462df1adafd38244057296237e34ce8415a76a056ba4cee->leave($__internal_645bc38f9f933afb5462df1adafd38244057296237e34ce8415a76a056ba4cee_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7805e531d4ff804b177f3cd45aeaa8ced924edd49bd0474a4842881d8fc2310a = $this->env->getExtension("native_profiler");
        $__internal_7805e531d4ff804b177f3cd45aeaa8ced924edd49bd0474a4842881d8fc2310a->enter($__internal_7805e531d4ff804b177f3cd45aeaa8ced924edd49bd0474a4842881d8fc2310a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_7805e531d4ff804b177f3cd45aeaa8ced924edd49bd0474a4842881d8fc2310a->leave($__internal_7805e531d4ff804b177f3cd45aeaa8ced924edd49bd0474a4842881d8fc2310a_prof);

    }

    // line 100
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_3c0b59b9d878bce670b0ccb2183428db944e6b454b084acb8d6e2adf7107eba7 = $this->env->getExtension("native_profiler");
        $__internal_3c0b59b9d878bce670b0ccb2183428db944e6b454b084acb8d6e2adf7107eba7->enter($__internal_3c0b59b9d878bce670b0ccb2183428db944e6b454b084acb8d6e2adf7107eba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_3c0b59b9d878bce670b0ccb2183428db944e6b454b084acb8d6e2adf7107eba7->leave($__internal_3c0b59b9d878bce670b0ccb2183428db944e6b454b084acb8d6e2adf7107eba7_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2980b769974aab0b703a4ed2837d284c2f51aa1ed5ccffc17b98104685c90ba = $this->env->getExtension("native_profiler");
        $__internal_d2980b769974aab0b703a4ed2837d284c2f51aa1ed5ccffc17b98104685c90ba->enter($__internal_d2980b769974aab0b703a4ed2837d284c2f51aa1ed5ccffc17b98104685c90ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d2980b769974aab0b703a4ed2837d284c2f51aa1ed5ccffc17b98104685c90ba->leave($__internal_d2980b769974aab0b703a4ed2837d284c2f51aa1ed5ccffc17b98104685c90ba_prof);

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
