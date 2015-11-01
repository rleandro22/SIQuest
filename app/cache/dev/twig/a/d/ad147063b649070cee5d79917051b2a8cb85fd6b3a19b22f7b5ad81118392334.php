<?php

/* ::base.html.twig */
class __TwigTemplate_ad147063b649070cee5d79917051b2a8cb85fd6b3a19b22f7b5ad81118392334 extends Twig_Template
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
        $__internal_8a595893f54548dcb422595c288f04c055dc4d5725017ee98035421daf2d316f = $this->env->getExtension("native_profiler");
        $__internal_8a595893f54548dcb422595c288f04c055dc4d5725017ee98035421daf2d316f->enter($__internal_8a595893f54548dcb422595c288f04c055dc4d5725017ee98035421daf2d316f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8a595893f54548dcb422595c288f04c055dc4d5725017ee98035421daf2d316f->leave($__internal_8a595893f54548dcb422595c288f04c055dc4d5725017ee98035421daf2d316f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b72080147b39e1a1c2f1f9ded4bca157117d49d84ec8fa69dc886f0a48ab4b1a = $this->env->getExtension("native_profiler");
        $__internal_b72080147b39e1a1c2f1f9ded4bca157117d49d84ec8fa69dc886f0a48ab4b1a->enter($__internal_b72080147b39e1a1c2f1f9ded4bca157117d49d84ec8fa69dc886f0a48ab4b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_b72080147b39e1a1c2f1f9ded4bca157117d49d84ec8fa69dc886f0a48ab4b1a->leave($__internal_b72080147b39e1a1c2f1f9ded4bca157117d49d84ec8fa69dc886f0a48ab4b1a_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdc2bad5f5627f318fefbbf9c597703050dc823166ed7faa9d88d224ef3d08ea = $this->env->getExtension("native_profiler");
        $__internal_fdc2bad5f5627f318fefbbf9c597703050dc823166ed7faa9d88d224ef3d08ea->enter($__internal_fdc2bad5f5627f318fefbbf9c597703050dc823166ed7faa9d88d224ef3d08ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fdc2bad5f5627f318fefbbf9c597703050dc823166ed7faa9d88d224ef3d08ea->leave($__internal_fdc2bad5f5627f318fefbbf9c597703050dc823166ed7faa9d88d224ef3d08ea_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_d9fdb08341928d70c63f8688a3ec80432ca6c774dab93597cb0ed3285165b4b3 = $this->env->getExtension("native_profiler");
        $__internal_d9fdb08341928d70c63f8688a3ec80432ca6c774dab93597cb0ed3285165b4b3->enter($__internal_d9fdb08341928d70c63f8688a3ec80432ca6c774dab93597cb0ed3285165b4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_d9fdb08341928d70c63f8688a3ec80432ca6c774dab93597cb0ed3285165b4b3->leave($__internal_d9fdb08341928d70c63f8688a3ec80432ca6c774dab93597cb0ed3285165b4b3_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d5fb1daf652b20c3379f21e5a8cce27825ac83d6c59cf2ab239f3c26d9e86b1f = $this->env->getExtension("native_profiler");
        $__internal_d5fb1daf652b20c3379f21e5a8cce27825ac83d6c59cf2ab239f3c26d9e86b1f->enter($__internal_d5fb1daf652b20c3379f21e5a8cce27825ac83d6c59cf2ab239f3c26d9e86b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_d5fb1daf652b20c3379f21e5a8cce27825ac83d6c59cf2ab239f3c26d9e86b1f->leave($__internal_d5fb1daf652b20c3379f21e5a8cce27825ac83d6c59cf2ab239f3c26d9e86b1f_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_c094a411504c9d02138f0ea59690e4915bd26029a7006519ec4c8c80a9274e0d = $this->env->getExtension("native_profiler");
        $__internal_c094a411504c9d02138f0ea59690e4915bd26029a7006519ec4c8c80a9274e0d->enter($__internal_c094a411504c9d02138f0ea59690e4915bd26029a7006519ec4c8c80a9274e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_c094a411504c9d02138f0ea59690e4915bd26029a7006519ec4c8c80a9274e0d->leave($__internal_c094a411504c9d02138f0ea59690e4915bd26029a7006519ec4c8c80a9274e0d_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_53172cdfdd21197139c47f253f15036191c392e272e0a4039c8f5bbed4694df2 = $this->env->getExtension("native_profiler");
        $__internal_53172cdfdd21197139c47f253f15036191c392e272e0a4039c8f5bbed4694df2->enter($__internal_53172cdfdd21197139c47f253f15036191c392e272e0a4039c8f5bbed4694df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_53172cdfdd21197139c47f253f15036191c392e272e0a4039c8f5bbed4694df2->leave($__internal_53172cdfdd21197139c47f253f15036191c392e272e0a4039c8f5bbed4694df2_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2f8bec3c0e48917cf5a21b6601d56cd2476b7abe98a77e4a5341f8f2ffa1a50b = $this->env->getExtension("native_profiler");
        $__internal_2f8bec3c0e48917cf5a21b6601d56cd2476b7abe98a77e4a5341f8f2ffa1a50b->enter($__internal_2f8bec3c0e48917cf5a21b6601d56cd2476b7abe98a77e4a5341f8f2ffa1a50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_2f8bec3c0e48917cf5a21b6601d56cd2476b7abe98a77e4a5341f8f2ffa1a50b->leave($__internal_2f8bec3c0e48917cf5a21b6601d56cd2476b7abe98a77e4a5341f8f2ffa1a50b_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_4ae57668fdffb12799ed4471227fed611181c2815a67c31e41a7beae51e3ce62 = $this->env->getExtension("native_profiler");
        $__internal_4ae57668fdffb12799ed4471227fed611181c2815a67c31e41a7beae51e3ce62->enter($__internal_4ae57668fdffb12799ed4471227fed611181c2815a67c31e41a7beae51e3ce62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_4ae57668fdffb12799ed4471227fed611181c2815a67c31e41a7beae51e3ce62->leave($__internal_4ae57668fdffb12799ed4471227fed611181c2815a67c31e41a7beae51e3ce62_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_201938bcc4192dc8239b03687439a2e33f65b7a989f62586c658750f561ec2be = $this->env->getExtension("native_profiler");
        $__internal_201938bcc4192dc8239b03687439a2e33f65b7a989f62586c658750f561ec2be->enter($__internal_201938bcc4192dc8239b03687439a2e33f65b7a989f62586c658750f561ec2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_201938bcc4192dc8239b03687439a2e33f65b7a989f62586c658750f561ec2be->leave($__internal_201938bcc4192dc8239b03687439a2e33f65b7a989f62586c658750f561ec2be_prof);

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
        return array (  339 => 131,  335 => 130,  331 => 129,  327 => 127,  321 => 126,  311 => 105,  306 => 103,  303 => 102,  297 => 101,  276 => 108,  274 => 101,  227 => 56,  221 => 55,  213 => 49,  207 => 48,  199 => 44,  193 => 43,  181 => 34,  177 => 32,  171 => 31,  159 => 25,  150 => 14,  145 => 12,  141 => 11,  137 => 10,  132 => 9,  126 => 8,  114 => 6,  106 => 133,  104 => 126,  99 => 123,  97 => 55,  90 => 50,  88 => 48,  83 => 45,  81 => 43,  74 => 38,  72 => 31,  67 => 29,  60 => 25,  49 => 17,  45 => 15,  43 => 8,  38 => 6,  31 => 1,);
    }
}
