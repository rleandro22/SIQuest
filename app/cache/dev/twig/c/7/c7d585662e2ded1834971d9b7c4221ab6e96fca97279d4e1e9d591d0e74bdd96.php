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
        $__internal_766dfc0eb4aa2f91f8f740831b386011dc071fdd88ed8ad0d07013ab47d3a01b = $this->env->getExtension("native_profiler");
        $__internal_766dfc0eb4aa2f91f8f740831b386011dc071fdd88ed8ad0d07013ab47d3a01b->enter($__internal_766dfc0eb4aa2f91f8f740831b386011dc071fdd88ed8ad0d07013ab47d3a01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_766dfc0eb4aa2f91f8f740831b386011dc071fdd88ed8ad0d07013ab47d3a01b->leave($__internal_766dfc0eb4aa2f91f8f740831b386011dc071fdd88ed8ad0d07013ab47d3a01b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ab4ffdb77a12c362704ff547a25249b83eaddea6334ccee133e69a73f17690e = $this->env->getExtension("native_profiler");
        $__internal_0ab4ffdb77a12c362704ff547a25249b83eaddea6334ccee133e69a73f17690e->enter($__internal_0ab4ffdb77a12c362704ff547a25249b83eaddea6334ccee133e69a73f17690e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_0ab4ffdb77a12c362704ff547a25249b83eaddea6334ccee133e69a73f17690e->leave($__internal_0ab4ffdb77a12c362704ff547a25249b83eaddea6334ccee133e69a73f17690e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_79c316c9303b7887c5d35451fa2dc2dfe79e8fe9ef87423b8ee2f8099fa516a1 = $this->env->getExtension("native_profiler");
        $__internal_79c316c9303b7887c5d35451fa2dc2dfe79e8fe9ef87423b8ee2f8099fa516a1->enter($__internal_79c316c9303b7887c5d35451fa2dc2dfe79e8fe9ef87423b8ee2f8099fa516a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_79c316c9303b7887c5d35451fa2dc2dfe79e8fe9ef87423b8ee2f8099fa516a1->leave($__internal_79c316c9303b7887c5d35451fa2dc2dfe79e8fe9ef87423b8ee2f8099fa516a1_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_37fec0fa8401738046140d1cf1eb4c8f46e0e7358d8a9264f85bd049864120dc = $this->env->getExtension("native_profiler");
        $__internal_37fec0fa8401738046140d1cf1eb4c8f46e0e7358d8a9264f85bd049864120dc->enter($__internal_37fec0fa8401738046140d1cf1eb4c8f46e0e7358d8a9264f85bd049864120dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_37fec0fa8401738046140d1cf1eb4c8f46e0e7358d8a9264f85bd049864120dc->leave($__internal_37fec0fa8401738046140d1cf1eb4c8f46e0e7358d8a9264f85bd049864120dc_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_c4c8d7ada3062b077f3fc108931fedd39dc97bf406a14cca6ff92755d66ac771 = $this->env->getExtension("native_profiler");
        $__internal_c4c8d7ada3062b077f3fc108931fedd39dc97bf406a14cca6ff92755d66ac771->enter($__internal_c4c8d7ada3062b077f3fc108931fedd39dc97bf406a14cca6ff92755d66ac771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_c4c8d7ada3062b077f3fc108931fedd39dc97bf406a14cca6ff92755d66ac771->leave($__internal_c4c8d7ada3062b077f3fc108931fedd39dc97bf406a14cca6ff92755d66ac771_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_ed320107d19032e7112bbc973ce04a4db31287d527ea4abda7a903b1f9b8296e = $this->env->getExtension("native_profiler");
        $__internal_ed320107d19032e7112bbc973ce04a4db31287d527ea4abda7a903b1f9b8296e->enter($__internal_ed320107d19032e7112bbc973ce04a4db31287d527ea4abda7a903b1f9b8296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_ed320107d19032e7112bbc973ce04a4db31287d527ea4abda7a903b1f9b8296e->leave($__internal_ed320107d19032e7112bbc973ce04a4db31287d527ea4abda7a903b1f9b8296e_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e08f586eb06fde921edbee1424e197411b3f10bbfbbaac29b6941c61597ad85 = $this->env->getExtension("native_profiler");
        $__internal_4e08f586eb06fde921edbee1424e197411b3f10bbfbbaac29b6941c61597ad85->enter($__internal_4e08f586eb06fde921edbee1424e197411b3f10bbfbbaac29b6941c61597ad85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_4e08f586eb06fde921edbee1424e197411b3f10bbfbbaac29b6941c61597ad85->leave($__internal_4e08f586eb06fde921edbee1424e197411b3f10bbfbbaac29b6941c61597ad85_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_21cf643c79739799d07a3b3da1155abf2ed276cc54157218622127a0d8ccea05 = $this->env->getExtension("native_profiler");
        $__internal_21cf643c79739799d07a3b3da1155abf2ed276cc54157218622127a0d8ccea05->enter($__internal_21cf643c79739799d07a3b3da1155abf2ed276cc54157218622127a0d8ccea05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_21cf643c79739799d07a3b3da1155abf2ed276cc54157218622127a0d8ccea05->leave($__internal_21cf643c79739799d07a3b3da1155abf2ed276cc54157218622127a0d8ccea05_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_55ee08c5acee45e7e40792272cb0afa4ad52b6b3ca46664af38855efa7f28178 = $this->env->getExtension("native_profiler");
        $__internal_55ee08c5acee45e7e40792272cb0afa4ad52b6b3ca46664af38855efa7f28178->enter($__internal_55ee08c5acee45e7e40792272cb0afa4ad52b6b3ca46664af38855efa7f28178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_55ee08c5acee45e7e40792272cb0afa4ad52b6b3ca46664af38855efa7f28178->leave($__internal_55ee08c5acee45e7e40792272cb0afa4ad52b6b3ca46664af38855efa7f28178_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a93a8126c2cb24fa6be0137df6d7bf412a5de42fc86891d76e0479807151d96c = $this->env->getExtension("native_profiler");
        $__internal_a93a8126c2cb24fa6be0137df6d7bf412a5de42fc86891d76e0479807151d96c->enter($__internal_a93a8126c2cb24fa6be0137df6d7bf412a5de42fc86891d76e0479807151d96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a93a8126c2cb24fa6be0137df6d7bf412a5de42fc86891d76e0479807151d96c->leave($__internal_a93a8126c2cb24fa6be0137df6d7bf412a5de42fc86891d76e0479807151d96c_prof);

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
