<?php

/* base.html.twig */
class __TwigTemplate_16fa08bddddf75a27e3266705a7c23a8aab546d8cf33f5e3e76c829ca915cdc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4b1313c7f1ead35fabbc050cf0db575fb5a3f3cb37f649aa934764411ae1a70 = $this->env->getExtension("native_profiler");
        $__internal_a4b1313c7f1ead35fabbc050cf0db575fb5a3f3cb37f649aa934764411ae1a70->enter($__internal_a4b1313c7f1ead35fabbc050cf0db575fb5a3f3cb37f649aa934764411ae1a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "  



        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 117
        echo "        </footer>\t


        ";
        // line 120
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "    </body>
</html>";
        
        $__internal_a4b1313c7f1ead35fabbc050cf0db575fb5a3f3cb37f649aa934764411ae1a70->leave($__internal_a4b1313c7f1ead35fabbc050cf0db575fb5a3f3cb37f649aa934764411ae1a70_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_46c654c26d0270f8a88ce897ae14c53779677e553d9e94c473193cc93aee9f36 = $this->env->getExtension("native_profiler");
        $__internal_46c654c26d0270f8a88ce897ae14c53779677e553d9e94c473193cc93aee9f36->enter($__internal_46c654c26d0270f8a88ce897ae14c53779677e553d9e94c473193cc93aee9f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_46c654c26d0270f8a88ce897ae14c53779677e553d9e94c473193cc93aee9f36->leave($__internal_46c654c26d0270f8a88ce897ae14c53779677e553d9e94c473193cc93aee9f36_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61915a4b0322706f2bd00e2f53a5371ab9bbdf7e55e1790daccf536b48290b6d = $this->env->getExtension("native_profiler");
        $__internal_61915a4b0322706f2bd00e2f53a5371ab9bbdf7e55e1790daccf536b48290b6d->enter($__internal_61915a4b0322706f2bd00e2f53a5371ab9bbdf7e55e1790daccf536b48290b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_61915a4b0322706f2bd00e2f53a5371ab9bbdf7e55e1790daccf536b48290b6d->leave($__internal_61915a4b0322706f2bd00e2f53a5371ab9bbdf7e55e1790daccf536b48290b6d_prof);

    }

    // line 29
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_15caa602d3b44507994a43f62ac9e7e7f3d5b9bffd5f9e414d41a8ca39be0106 = $this->env->getExtension("native_profiler");
        $__internal_15caa602d3b44507994a43f62ac9e7e7f3d5b9bffd5f9e414d41a8ca39be0106->enter($__internal_15caa602d3b44507994a43f62ac9e7e7f3d5b9bffd5f9e414d41a8ca39be0106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 30
        echo "                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav pull-right\">
                            <li><a href=\"index.html\">Inicio</a></li>
                            <li><a href=\"about.html\">Ayuda</a></li>
                            <li><a class=\"btn\" href=\"#\">Identificarse</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                ";
        
        $__internal_15caa602d3b44507994a43f62ac9e7e7f3d5b9bffd5f9e414d41a8ca39be0106->leave($__internal_15caa602d3b44507994a43f62ac9e7e7f3d5b9bffd5f9e414d41a8ca39be0106_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_971170d864e893e7c5b42b103855ee609065029116c7144d0886035a4860f55c = $this->env->getExtension("native_profiler");
        $__internal_971170d864e893e7c5b42b103855ee609065029116c7144d0886035a4860f55c->enter($__internal_971170d864e893e7c5b42b103855ee609065029116c7144d0886035a4860f55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "
        ";
        
        $__internal_971170d864e893e7c5b42b103855ee609065029116c7144d0886035a4860f55c->leave($__internal_971170d864e893e7c5b42b103855ee609065029116c7144d0886035a4860f55c_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_615230d1ba9cca6d025b7c03391368b0a3804003d2083012b491c47f7fe55673 = $this->env->getExtension("native_profiler");
        $__internal_615230d1ba9cca6d025b7c03391368b0a3804003d2083012b491c47f7fe55673->enter($__internal_615230d1ba9cca6d025b7c03391368b0a3804003d2083012b491c47f7fe55673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
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
                                    <p class=\"simplenav\">
                                        <a href=\"index.html\">Inicio</a> | 
                                        <a href=\"about.html\">Ayuda</a> |
                                        <a href=\"sidebar-right.html\">Identificarse</a> |
                                        <b><a href=\"#\">Registrarse</a></b>
                                    </p>
                                </div>
                            </div>

                            <div class=\"col-md-6 widget\">
                                <div class=\"widget-body\">
                                    <p class=\"text-right\">
                                        Copyright &copy; 2015, Universidad para laCooperación Internacional. 
                                    </p>
                                </div>
                            </div>

                        </div> <!-- /row of widgets -->
                    </div>
                </div>
            ";
        
        $__internal_615230d1ba9cca6d025b7c03391368b0a3804003d2083012b491c47f7fe55673->leave($__internal_615230d1ba9cca6d025b7c03391368b0a3804003d2083012b491c47f7fe55673_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6009890ba9fa95f6833f3474a8f14d138b110c512ccb46d5529e1db2ca416456 = $this->env->getExtension("native_profiler");
        $__internal_6009890ba9fa95f6833f3474a8f14d138b110c512ccb46d5529e1db2ca416456->enter($__internal_6009890ba9fa95f6833f3474a8f14d138b110c512ccb46d5529e1db2ca416456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
        echo "            <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>  
            <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/headroom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jQuery.headroom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/template.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_6009890ba9fa95f6833f3474a8f14d138b110c512ccb46d5529e1db2ca416456->leave($__internal_6009890ba9fa95f6833f3474a8f14d138b110c512ccb46d5529e1db2ca416456_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 126,  269 => 125,  265 => 124,  260 => 121,  254 => 120,  182 => 51,  176 => 50,  168 => 44,  162 => 43,  148 => 30,  142 => 29,  132 => 12,  128 => 11,  124 => 10,  119 => 9,  113 => 8,  101 => 6,  93 => 128,  91 => 120,  86 => 117,  84 => 50,  77 => 45,  75 => 43,  67 => 37,  65 => 29,  60 => 27,  46 => 16,  42 => 14,  40 => 8,  35 => 6,  28 => 1,);
    }
}
