<?php

/* ::base.html.twig */
class __TwigTemplate_f11e9f6279bf3556879a8d19c6d2b9885a050aaaffc9e6dd8502fb47cdce17f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'barra' => array($this, 'block_barra'),
            'mensajeLogueado' => array($this, 'block_mensajeLogueado'),
            'navigation' => array($this, 'block_navigation'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'piepagina' => array($this, 'block_piepagina'),
            'footer' => array($this, 'block_footer'),
            'navegacionfooter' => array($this, 'block_navegacionfooter'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89ba53d324a237b5682fad4da6989dfcc703ccf7bdc7996a268725d65eef67f5 = $this->env->getExtension("native_profiler");
        $__internal_89ba53d324a237b5682fad4da6989dfcc703ccf7bdc7996a268725d65eef67f5->enter($__internal_89ba53d324a237b5682fad4da6989dfcc703ccf7bdc7996a268725d65eef67f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        ";
        // line 22
        $this->displayBlock('barra', $context, $blocks);
        // line 42
        echo "  
        <!-- /.navbar -->

        ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 47
        echo "  


        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "  


        ";
        // line 55
        $this->displayBlock('piepagina', $context, $blocks);
        // line 127
        echo "
        ";
        // line 128
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "    </body>
</html>";
        
        $__internal_89ba53d324a237b5682fad4da6989dfcc703ccf7bdc7996a268725d65eef67f5->leave($__internal_89ba53d324a237b5682fad4da6989dfcc703ccf7bdc7996a268725d65eef67f5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_356c2dbf7bade62a038f41637ad6aaee965abb2424ea4c9d33336d5d245e0dd1 = $this->env->getExtension("native_profiler");
        $__internal_356c2dbf7bade62a038f41637ad6aaee965abb2424ea4c9d33336d5d245e0dd1->enter($__internal_356c2dbf7bade62a038f41637ad6aaee965abb2424ea4c9d33336d5d245e0dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_356c2dbf7bade62a038f41637ad6aaee965abb2424ea4c9d33336d5d245e0dd1->leave($__internal_356c2dbf7bade62a038f41637ad6aaee965abb2424ea4c9d33336d5d245e0dd1_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6477cb26ef3af2546bfeb6948e6f6b0a7bf4aa6d83868f53c96e5ce4cc22e3f1 = $this->env->getExtension("native_profiler");
        $__internal_6477cb26ef3af2546bfeb6948e6f6b0a7bf4aa6d83868f53c96e5ce4cc22e3f1->enter($__internal_6477cb26ef3af2546bfeb6948e6f6b0a7bf4aa6d83868f53c96e5ce4cc22e3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6477cb26ef3af2546bfeb6948e6f6b0a7bf4aa6d83868f53c96e5ce4cc22e3f1->leave($__internal_6477cb26ef3af2546bfeb6948e6f6b0a7bf4aa6d83868f53c96e5ce4cc22e3f1_prof);

    }

    // line 22
    public function block_barra($context, array $blocks = array())
    {
        $__internal_5ed72050d0c07b28e0ef4ef8eaad80456d8c27bc54272a55e29d815fa5c11bbd = $this->env->getExtension("native_profiler");
        $__internal_5ed72050d0c07b28e0ef4ef8eaad80456d8c27bc54272a55e29d815fa5c11bbd->enter($__internal_5ed72050d0c07b28e0ef4ef8eaad80456d8c27bc54272a55e29d815fa5c11bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

        // line 23
        echo "            <!-- Fixed navbar -->
            <div class=\"navbar navbar-inverse navbar-fixed-top headroom\" >
                <div class=\"container\">
                    <div class=\"log-text\" >";
        // line 26
        $this->displayBlock('mensajeLogueado', $context, $blocks);
        echo "</div>
                    <div class=\"navbar-header\">
                        <!-- Button for smallest screens -->
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                        <a class=\"navbar-brand\" href=\"http://www.uci.ac.cr/\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"SIQuest\"></a>
                    </div>
                    ";
        // line 32
        $this->displayBlock('navigation', $context, $blocks);
        // line 39
        echo "  
                </div>
            </div> 
        ";
        
        $__internal_5ed72050d0c07b28e0ef4ef8eaad80456d8c27bc54272a55e29d815fa5c11bbd->leave($__internal_5ed72050d0c07b28e0ef4ef8eaad80456d8c27bc54272a55e29d815fa5c11bbd_prof);

    }

    // line 26
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_0a3f472f7c6ef28e12091922bc4f249d7379e30a4ed3204d884c66cd462e5354 = $this->env->getExtension("native_profiler");
        $__internal_0a3f472f7c6ef28e12091922bc4f249d7379e30a4ed3204d884c66cd462e5354->enter($__internal_0a3f472f7c6ef28e12091922bc4f249d7379e30a4ed3204d884c66cd462e5354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_0a3f472f7c6ef28e12091922bc4f249d7379e30a4ed3204d884c66cd462e5354->leave($__internal_0a3f472f7c6ef28e12091922bc4f249d7379e30a4ed3204d884c66cd462e5354_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1be9e257f115e4064d46bb14322eaf4d4a3a85c5a44f177546ea5a83de1162a5 = $this->env->getExtension("native_profiler");
        $__internal_1be9e257f115e4064d46bb14322eaf4d4a3a85c5a44f177546ea5a83de1162a5->enter($__internal_1be9e257f115e4064d46bb14322eaf4d4a3a85c5a44f177546ea5a83de1162a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 33
        echo "                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav pull-right\">
                                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Inicio</a></li>
                                <li><a href=\"about.html\">Ayuda</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    ";
        
        $__internal_1be9e257f115e4064d46bb14322eaf4d4a3a85c5a44f177546ea5a83de1162a5->leave($__internal_1be9e257f115e4064d46bb14322eaf4d4a3a85c5a44f177546ea5a83de1162a5_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_3d9ec780893e6c507311290cf8da7e9a6976737dff49819dba7878ab62af7389 = $this->env->getExtension("native_profiler");
        $__internal_3d9ec780893e6c507311290cf8da7e9a6976737dff49819dba7878ab62af7389->enter($__internal_3d9ec780893e6c507311290cf8da7e9a6976737dff49819dba7878ab62af7389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "
        ";
        
        $__internal_3d9ec780893e6c507311290cf8da7e9a6976737dff49819dba7878ab62af7389->leave($__internal_3d9ec780893e6c507311290cf8da7e9a6976737dff49819dba7878ab62af7389_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_5601cb15bf37ce8c4692b1d10c1b01a4241f10a55e59d30b823231993a56f0fe = $this->env->getExtension("native_profiler");
        $__internal_5601cb15bf37ce8c4692b1d10c1b01a4241f10a55e59d30b823231993a56f0fe->enter($__internal_5601cb15bf37ce8c4692b1d10c1b01a4241f10a55e59d30b823231993a56f0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
        ";
        
        $__internal_5601cb15bf37ce8c4692b1d10c1b01a4241f10a55e59d30b823231993a56f0fe->leave($__internal_5601cb15bf37ce8c4692b1d10c1b01a4241f10a55e59d30b823231993a56f0fe_prof);

    }

    // line 55
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_49514bc928ed50acbf8dd539a0bef97759b8dd3dc1c72030e302a38e423c3528 = $this->env->getExtension("native_profiler");
        $__internal_49514bc928ed50acbf8dd539a0bef97759b8dd3dc1c72030e302a38e423c3528->enter($__internal_49514bc928ed50acbf8dd539a0bef97759b8dd3dc1c72030e302a38e423c3528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        // line 56
        echo "        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "        </footer>\t
";
        
        $__internal_49514bc928ed50acbf8dd539a0bef97759b8dd3dc1c72030e302a38e423c3528->leave($__internal_49514bc928ed50acbf8dd539a0bef97759b8dd3dc1c72030e302a38e423c3528_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_242ea098b4ac117cd39e68f4305236ca20fef3a186f0c96c855ae604cfc6eba7 = $this->env->getExtension("native_profiler");
        $__internal_242ea098b4ac117cd39e68f4305236ca20fef3a186f0c96c855ae604cfc6eba7->enter($__internal_242ea098b4ac117cd39e68f4305236ca20fef3a186f0c96c855ae604cfc6eba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 58
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
        // line 103
        $this->displayBlock('navegacionfooter', $context, $blocks);
        // line 110
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
        
        $__internal_242ea098b4ac117cd39e68f4305236ca20fef3a186f0c96c855ae604cfc6eba7->leave($__internal_242ea098b4ac117cd39e68f4305236ca20fef3a186f0c96c855ae604cfc6eba7_prof);

    }

    // line 103
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_539c28fb082993c76cdb1483403d8786bc3bef74e6ad829d18385d4e22e939a5 = $this->env->getExtension("native_profiler");
        $__internal_539c28fb082993c76cdb1483403d8786bc3bef74e6ad829d18385d4e22e939a5->enter($__internal_539c28fb082993c76cdb1483403d8786bc3bef74e6ad829d18385d4e22e939a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 104
        echo "                                        <p class=\"simplenav\">
                                            <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
                                            <a href=\"about.html\">Ayuda</a> |
                                            <a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Identificarse</a>
                                        </p>
                                    ";
        
        $__internal_539c28fb082993c76cdb1483403d8786bc3bef74e6ad829d18385d4e22e939a5->leave($__internal_539c28fb082993c76cdb1483403d8786bc3bef74e6ad829d18385d4e22e939a5_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a0ad547a7382d003fe9331073a6d10e9da15a16e8a5ce3dc40791a1a0535460 = $this->env->getExtension("native_profiler");
        $__internal_9a0ad547a7382d003fe9331073a6d10e9da15a16e8a5ce3dc40791a1a0535460->enter($__internal_9a0ad547a7382d003fe9331073a6d10e9da15a16e8a5ce3dc40791a1a0535460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 129
        echo "            <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
            <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>  
            <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/headroom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jQuery.headroom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/template.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
            <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/numero.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
        ";
        
        $__internal_9a0ad547a7382d003fe9331073a6d10e9da15a16e8a5ce3dc40791a1a0535460->leave($__internal_9a0ad547a7382d003fe9331073a6d10e9da15a16e8a5ce3dc40791a1a0535460_prof);

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
        return array (  378 => 134,  374 => 133,  370 => 132,  366 => 131,  362 => 129,  356 => 128,  346 => 107,  341 => 105,  338 => 104,  332 => 103,  311 => 110,  309 => 103,  262 => 58,  256 => 57,  248 => 125,  246 => 57,  243 => 56,  237 => 55,  229 => 51,  223 => 50,  215 => 46,  209 => 45,  197 => 35,  193 => 33,  187 => 32,  175 => 26,  165 => 39,  163 => 32,  158 => 30,  151 => 26,  146 => 23,  140 => 22,  131 => 14,  126 => 12,  122 => 11,  118 => 10,  113 => 9,  107 => 8,  95 => 6,  87 => 136,  85 => 128,  82 => 127,  80 => 55,  75 => 52,  73 => 50,  68 => 47,  66 => 45,  61 => 42,  59 => 22,  51 => 17,  47 => 15,  45 => 8,  40 => 6,  33 => 1,);
    }
}
