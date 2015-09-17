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
        $__internal_c5f90a5d35cb1e67ad734cb9965878f95e02bb387d4fd4bf3ab0844a6dedec00 = $this->env->getExtension("native_profiler");
        $__internal_c5f90a5d35cb1e67ad734cb9965878f95e02bb387d4fd4bf3ab0844a6dedec00->enter($__internal_c5f90a5d35cb1e67ad734cb9965878f95e02bb387d4fd4bf3ab0844a6dedec00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
                <div class=\"navbar-header\">
                    <!-- Button for smallest screens -->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                    <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"SIQuest\"></a>
                </div>
                ";
        // line 29
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
        
        $__internal_c5f90a5d35cb1e67ad734cb9965878f95e02bb387d4fd4bf3ab0844a6dedec00->leave($__internal_c5f90a5d35cb1e67ad734cb9965878f95e02bb387d4fd4bf3ab0844a6dedec00_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_461edb70a19dc5e316853d383ef5443626c1c57b3ecf918bc0599cba6f7c4a9e = $this->env->getExtension("native_profiler");
        $__internal_461edb70a19dc5e316853d383ef5443626c1c57b3ecf918bc0599cba6f7c4a9e->enter($__internal_461edb70a19dc5e316853d383ef5443626c1c57b3ecf918bc0599cba6f7c4a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_461edb70a19dc5e316853d383ef5443626c1c57b3ecf918bc0599cba6f7c4a9e->leave($__internal_461edb70a19dc5e316853d383ef5443626c1c57b3ecf918bc0599cba6f7c4a9e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea4404b38f49145a34417e981563e9040ff9cd742dc3a13c9c409c22f82758da = $this->env->getExtension("native_profiler");
        $__internal_ea4404b38f49145a34417e981563e9040ff9cd742dc3a13c9c409c22f82758da->enter($__internal_ea4404b38f49145a34417e981563e9040ff9cd742dc3a13c9c409c22f82758da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ea4404b38f49145a34417e981563e9040ff9cd742dc3a13c9c409c22f82758da->leave($__internal_ea4404b38f49145a34417e981563e9040ff9cd742dc3a13c9c409c22f82758da_prof);

    }

    // line 29
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4dfb59fade0a20b58bc6e6aa3af98b8f2c805049360131a4472273cc34024498 = $this->env->getExtension("native_profiler");
        $__internal_4dfb59fade0a20b58bc6e6aa3af98b8f2c805049360131a4472273cc34024498->enter($__internal_4dfb59fade0a20b58bc6e6aa3af98b8f2c805049360131a4472273cc34024498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 30
        echo "                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav pull-right\">
                            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a></li>
                            <li><a href=\"about.html\">Ayuda</a></li>
                            <li><a class=\"btn\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Identificarse</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                ";
        
        $__internal_4dfb59fade0a20b58bc6e6aa3af98b8f2c805049360131a4472273cc34024498->leave($__internal_4dfb59fade0a20b58bc6e6aa3af98b8f2c805049360131a4472273cc34024498_prof);

    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        $__internal_b11f8ccbca3bf3e077e4bdad760c92dc8627e72a6d4408aa1d07ecc7e3c8f095 = $this->env->getExtension("native_profiler");
        $__internal_b11f8ccbca3bf3e077e4bdad760c92dc8627e72a6d4408aa1d07ecc7e3c8f095->enter($__internal_b11f8ccbca3bf3e077e4bdad760c92dc8627e72a6d4408aa1d07ecc7e3c8f095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 43
        echo "
        ";
        
        $__internal_b11f8ccbca3bf3e077e4bdad760c92dc8627e72a6d4408aa1d07ecc7e3c8f095->leave($__internal_b11f8ccbca3bf3e077e4bdad760c92dc8627e72a6d4408aa1d07ecc7e3c8f095_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_49a56d9b4b8258b0b6925eb97337a8b84918c2e3bbdc2dcbe14411f18a3460d9 = $this->env->getExtension("native_profiler");
        $__internal_49a56d9b4b8258b0b6925eb97337a8b84918c2e3bbdc2dcbe14411f18a3460d9->enter($__internal_49a56d9b4b8258b0b6925eb97337a8b84918c2e3bbdc2dcbe14411f18a3460d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
        ";
        
        $__internal_49a56d9b4b8258b0b6925eb97337a8b84918c2e3bbdc2dcbe14411f18a3460d9->leave($__internal_49a56d9b4b8258b0b6925eb97337a8b84918c2e3bbdc2dcbe14411f18a3460d9_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_70f97ff2cec6c8ecd235f5dc05e7bb682307d9e530ace1fb50fe97ea93206869 = $this->env->getExtension("native_profiler");
        $__internal_70f97ff2cec6c8ecd235f5dc05e7bb682307d9e530ace1fb50fe97ea93206869->enter($__internal_70f97ff2cec6c8ecd235f5dc05e7bb682307d9e530ace1fb50fe97ea93206869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_70f97ff2cec6c8ecd235f5dc05e7bb682307d9e530ace1fb50fe97ea93206869->leave($__internal_70f97ff2cec6c8ecd235f5dc05e7bb682307d9e530ace1fb50fe97ea93206869_prof);

    }

    // line 100
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_c9015f6029431c53405e3602dc8b50335ff5715a8688f64c408a601a70bda358 = $this->env->getExtension("native_profiler");
        $__internal_c9015f6029431c53405e3602dc8b50335ff5715a8688f64c408a601a70bda358->enter($__internal_c9015f6029431c53405e3602dc8b50335ff5715a8688f64c408a601a70bda358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_c9015f6029431c53405e3602dc8b50335ff5715a8688f64c408a601a70bda358->leave($__internal_c9015f6029431c53405e3602dc8b50335ff5715a8688f64c408a601a70bda358_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd8f330f91701e1b9dd237280489c0d8d368cf4c7b9e29301433c4500aeca2de = $this->env->getExtension("native_profiler");
        $__internal_dd8f330f91701e1b9dd237280489c0d8d368cf4c7b9e29301433c4500aeca2de->enter($__internal_dd8f330f91701e1b9dd237280489c0d8d368cf4c7b9e29301433c4500aeca2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_dd8f330f91701e1b9dd237280489c0d8d368cf4c7b9e29301433c4500aeca2de->leave($__internal_dd8f330f91701e1b9dd237280489c0d8d368cf4c7b9e29301433c4500aeca2de_prof);

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
        return array (  323 => 131,  319 => 130,  315 => 129,  310 => 126,  304 => 125,  294 => 104,  289 => 102,  286 => 101,  280 => 100,  259 => 107,  257 => 100,  210 => 55,  204 => 54,  196 => 48,  190 => 47,  182 => 43,  176 => 42,  165 => 34,  160 => 32,  156 => 30,  150 => 29,  140 => 12,  136 => 11,  132 => 10,  127 => 9,  121 => 8,  109 => 6,  101 => 133,  99 => 125,  94 => 122,  92 => 54,  85 => 49,  83 => 47,  78 => 44,  76 => 42,  69 => 37,  67 => 29,  62 => 27,  48 => 16,  44 => 14,  42 => 8,  37 => 6,  30 => 1,);
    }
}
