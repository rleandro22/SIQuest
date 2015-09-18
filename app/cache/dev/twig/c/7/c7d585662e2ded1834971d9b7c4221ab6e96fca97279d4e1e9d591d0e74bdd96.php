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
        $__internal_79a1d465d084cf97c1876adf34f17fe740237dc41524c4e058d391ca1280c4bc = $this->env->getExtension("native_profiler");
        $__internal_79a1d465d084cf97c1876adf34f17fe740237dc41524c4e058d391ca1280c4bc->enter($__internal_79a1d465d084cf97c1876adf34f17fe740237dc41524c4e058d391ca1280c4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_79a1d465d084cf97c1876adf34f17fe740237dc41524c4e058d391ca1280c4bc->leave($__internal_79a1d465d084cf97c1876adf34f17fe740237dc41524c4e058d391ca1280c4bc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c2af623601a035a7726b73c6ef3b3aaa7c4a55ccf7b6efffd33d4ff6827f2b7 = $this->env->getExtension("native_profiler");
        $__internal_6c2af623601a035a7726b73c6ef3b3aaa7c4a55ccf7b6efffd33d4ff6827f2b7->enter($__internal_6c2af623601a035a7726b73c6ef3b3aaa7c4a55ccf7b6efffd33d4ff6827f2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_6c2af623601a035a7726b73c6ef3b3aaa7c4a55ccf7b6efffd33d4ff6827f2b7->leave($__internal_6c2af623601a035a7726b73c6ef3b3aaa7c4a55ccf7b6efffd33d4ff6827f2b7_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f9d3ddde3c29ea7508e289e92c88962424dd8ac684bd600db523a5c05a5e2ee9 = $this->env->getExtension("native_profiler");
        $__internal_f9d3ddde3c29ea7508e289e92c88962424dd8ac684bd600db523a5c05a5e2ee9->enter($__internal_f9d3ddde3c29ea7508e289e92c88962424dd8ac684bd600db523a5c05a5e2ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f9d3ddde3c29ea7508e289e92c88962424dd8ac684bd600db523a5c05a5e2ee9->leave($__internal_f9d3ddde3c29ea7508e289e92c88962424dd8ac684bd600db523a5c05a5e2ee9_prof);

    }

    // line 29
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a2defe0efbb9cb9ccbae54510610f0aeae713fb14cb07df8cca331ff1ed875c5 = $this->env->getExtension("native_profiler");
        $__internal_a2defe0efbb9cb9ccbae54510610f0aeae713fb14cb07df8cca331ff1ed875c5->enter($__internal_a2defe0efbb9cb9ccbae54510610f0aeae713fb14cb07df8cca331ff1ed875c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_a2defe0efbb9cb9ccbae54510610f0aeae713fb14cb07df8cca331ff1ed875c5->leave($__internal_a2defe0efbb9cb9ccbae54510610f0aeae713fb14cb07df8cca331ff1ed875c5_prof);

    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        $__internal_a21933d511bd1b4652350f8c4df4e17bed52ecd0e48c8f9462c770171efb1351 = $this->env->getExtension("native_profiler");
        $__internal_a21933d511bd1b4652350f8c4df4e17bed52ecd0e48c8f9462c770171efb1351->enter($__internal_a21933d511bd1b4652350f8c4df4e17bed52ecd0e48c8f9462c770171efb1351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 43
        echo "
        ";
        
        $__internal_a21933d511bd1b4652350f8c4df4e17bed52ecd0e48c8f9462c770171efb1351->leave($__internal_a21933d511bd1b4652350f8c4df4e17bed52ecd0e48c8f9462c770171efb1351_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ef47618885095c1862fbf45abe4c368226123fccf603bf1bad4b2bdcd9de814 = $this->env->getExtension("native_profiler");
        $__internal_0ef47618885095c1862fbf45abe4c368226123fccf603bf1bad4b2bdcd9de814->enter($__internal_0ef47618885095c1862fbf45abe4c368226123fccf603bf1bad4b2bdcd9de814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
        ";
        
        $__internal_0ef47618885095c1862fbf45abe4c368226123fccf603bf1bad4b2bdcd9de814->leave($__internal_0ef47618885095c1862fbf45abe4c368226123fccf603bf1bad4b2bdcd9de814_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_640d5c3b79e4edc8fd1091424c2f949d8e136b6c305ffa44b04e63f8fd88ce95 = $this->env->getExtension("native_profiler");
        $__internal_640d5c3b79e4edc8fd1091424c2f949d8e136b6c305ffa44b04e63f8fd88ce95->enter($__internal_640d5c3b79e4edc8fd1091424c2f949d8e136b6c305ffa44b04e63f8fd88ce95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_640d5c3b79e4edc8fd1091424c2f949d8e136b6c305ffa44b04e63f8fd88ce95->leave($__internal_640d5c3b79e4edc8fd1091424c2f949d8e136b6c305ffa44b04e63f8fd88ce95_prof);

    }

    // line 100
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_6238d2e0cd15554d6cf1e2d477b0c639c05d14c5791ef2a814d90a56d13cbf9a = $this->env->getExtension("native_profiler");
        $__internal_6238d2e0cd15554d6cf1e2d477b0c639c05d14c5791ef2a814d90a56d13cbf9a->enter($__internal_6238d2e0cd15554d6cf1e2d477b0c639c05d14c5791ef2a814d90a56d13cbf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_6238d2e0cd15554d6cf1e2d477b0c639c05d14c5791ef2a814d90a56d13cbf9a->leave($__internal_6238d2e0cd15554d6cf1e2d477b0c639c05d14c5791ef2a814d90a56d13cbf9a_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecfc6bbfde3c6a03ba626f5320a0e16b8da2cd8b14c625a5c8620da80c4594cb = $this->env->getExtension("native_profiler");
        $__internal_ecfc6bbfde3c6a03ba626f5320a0e16b8da2cd8b14c625a5c8620da80c4594cb->enter($__internal_ecfc6bbfde3c6a03ba626f5320a0e16b8da2cd8b14c625a5c8620da80c4594cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ecfc6bbfde3c6a03ba626f5320a0e16b8da2cd8b14c625a5c8620da80c4594cb->leave($__internal_ecfc6bbfde3c6a03ba626f5320a0e16b8da2cd8b14c625a5c8620da80c4594cb_prof);

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
