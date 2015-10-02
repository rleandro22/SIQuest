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
        $__internal_a8d2a6a47d22e7d21dad2f8a4ad06974b134b1999f90d473f3ceff8ace756f84 = $this->env->getExtension("native_profiler");
        $__internal_a8d2a6a47d22e7d21dad2f8a4ad06974b134b1999f90d473f3ceff8ace756f84->enter($__internal_a8d2a6a47d22e7d21dad2f8a4ad06974b134b1999f90d473f3ceff8ace756f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a8d2a6a47d22e7d21dad2f8a4ad06974b134b1999f90d473f3ceff8ace756f84->leave($__internal_a8d2a6a47d22e7d21dad2f8a4ad06974b134b1999f90d473f3ceff8ace756f84_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_98b1df04cb4edd96680674ec4603913c346e346543e685262f9401987d485d40 = $this->env->getExtension("native_profiler");
        $__internal_98b1df04cb4edd96680674ec4603913c346e346543e685262f9401987d485d40->enter($__internal_98b1df04cb4edd96680674ec4603913c346e346543e685262f9401987d485d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_98b1df04cb4edd96680674ec4603913c346e346543e685262f9401987d485d40->leave($__internal_98b1df04cb4edd96680674ec4603913c346e346543e685262f9401987d485d40_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a58496c683647a476fbb0806b201ecbb5ceedc790b0c5162d6aef8cfd928f40 = $this->env->getExtension("native_profiler");
        $__internal_9a58496c683647a476fbb0806b201ecbb5ceedc790b0c5162d6aef8cfd928f40->enter($__internal_9a58496c683647a476fbb0806b201ecbb5ceedc790b0c5162d6aef8cfd928f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9a58496c683647a476fbb0806b201ecbb5ceedc790b0c5162d6aef8cfd928f40->leave($__internal_9a58496c683647a476fbb0806b201ecbb5ceedc790b0c5162d6aef8cfd928f40_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_9ba2e5e594680baee34439a32fa9d6f75560cfe6d416d52ca78ba3c0756d4b86 = $this->env->getExtension("native_profiler");
        $__internal_9ba2e5e594680baee34439a32fa9d6f75560cfe6d416d52ca78ba3c0756d4b86->enter($__internal_9ba2e5e594680baee34439a32fa9d6f75560cfe6d416d52ca78ba3c0756d4b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_9ba2e5e594680baee34439a32fa9d6f75560cfe6d416d52ca78ba3c0756d4b86->leave($__internal_9ba2e5e594680baee34439a32fa9d6f75560cfe6d416d52ca78ba3c0756d4b86_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_60f48bd0f2ae974bf5ffea2dd89fd7630db404fc0f73d428b52d1a00ad76f888 = $this->env->getExtension("native_profiler");
        $__internal_60f48bd0f2ae974bf5ffea2dd89fd7630db404fc0f73d428b52d1a00ad76f888->enter($__internal_60f48bd0f2ae974bf5ffea2dd89fd7630db404fc0f73d428b52d1a00ad76f888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_60f48bd0f2ae974bf5ffea2dd89fd7630db404fc0f73d428b52d1a00ad76f888->leave($__internal_60f48bd0f2ae974bf5ffea2dd89fd7630db404fc0f73d428b52d1a00ad76f888_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_04b5aaa3eb4a80b13b2fed0bb066720875fce61f96ef5625d920606574e7c126 = $this->env->getExtension("native_profiler");
        $__internal_04b5aaa3eb4a80b13b2fed0bb066720875fce61f96ef5625d920606574e7c126->enter($__internal_04b5aaa3eb4a80b13b2fed0bb066720875fce61f96ef5625d920606574e7c126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_04b5aaa3eb4a80b13b2fed0bb066720875fce61f96ef5625d920606574e7c126->leave($__internal_04b5aaa3eb4a80b13b2fed0bb066720875fce61f96ef5625d920606574e7c126_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_d727daa49524e9c6419b5c03c00fcb57960feaf007970374923b73d48f6579c8 = $this->env->getExtension("native_profiler");
        $__internal_d727daa49524e9c6419b5c03c00fcb57960feaf007970374923b73d48f6579c8->enter($__internal_d727daa49524e9c6419b5c03c00fcb57960feaf007970374923b73d48f6579c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_d727daa49524e9c6419b5c03c00fcb57960feaf007970374923b73d48f6579c8->leave($__internal_d727daa49524e9c6419b5c03c00fcb57960feaf007970374923b73d48f6579c8_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7dd34ea8ca25bac718165e2f1d129548cb3cd6e9aa68dc3dbe4fe69548a78f33 = $this->env->getExtension("native_profiler");
        $__internal_7dd34ea8ca25bac718165e2f1d129548cb3cd6e9aa68dc3dbe4fe69548a78f33->enter($__internal_7dd34ea8ca25bac718165e2f1d129548cb3cd6e9aa68dc3dbe4fe69548a78f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_7dd34ea8ca25bac718165e2f1d129548cb3cd6e9aa68dc3dbe4fe69548a78f33->leave($__internal_7dd34ea8ca25bac718165e2f1d129548cb3cd6e9aa68dc3dbe4fe69548a78f33_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_7664a3cbc8da9a0c9a86511592faf75c2f34bb983e55845c8952e8c4d209161b = $this->env->getExtension("native_profiler");
        $__internal_7664a3cbc8da9a0c9a86511592faf75c2f34bb983e55845c8952e8c4d209161b->enter($__internal_7664a3cbc8da9a0c9a86511592faf75c2f34bb983e55845c8952e8c4d209161b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_7664a3cbc8da9a0c9a86511592faf75c2f34bb983e55845c8952e8c4d209161b->leave($__internal_7664a3cbc8da9a0c9a86511592faf75c2f34bb983e55845c8952e8c4d209161b_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_950fc1d402eec251195563a0fe3fe63f52ac92037dcc2686fe7089fd0c809c0b = $this->env->getExtension("native_profiler");
        $__internal_950fc1d402eec251195563a0fe3fe63f52ac92037dcc2686fe7089fd0c809c0b->enter($__internal_950fc1d402eec251195563a0fe3fe63f52ac92037dcc2686fe7089fd0c809c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_950fc1d402eec251195563a0fe3fe63f52ac92037dcc2686fe7089fd0c809c0b->leave($__internal_950fc1d402eec251195563a0fe3fe63f52ac92037dcc2686fe7089fd0c809c0b_prof);

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
