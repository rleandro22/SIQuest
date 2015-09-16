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
        $__internal_fc8bfdecc815bc3e8bcad0346ddbe6ddc6dcb2b15eee9098164bd72912d4d0ea = $this->env->getExtension("native_profiler");
        $__internal_fc8bfdecc815bc3e8bcad0346ddbe6ddc6dcb2b15eee9098164bd72912d4d0ea->enter($__internal_fc8bfdecc815bc3e8bcad0346ddbe6ddc6dcb2b15eee9098164bd72912d4d0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 123
        echo "        </footer>\t


        ";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 134
        echo "    </body>
</html>";
        
        $__internal_fc8bfdecc815bc3e8bcad0346ddbe6ddc6dcb2b15eee9098164bd72912d4d0ea->leave($__internal_fc8bfdecc815bc3e8bcad0346ddbe6ddc6dcb2b15eee9098164bd72912d4d0ea_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2caf04f19fdcc3e1efb3f1b2037381c85f834e007de891c543c0012795d3e475 = $this->env->getExtension("native_profiler");
        $__internal_2caf04f19fdcc3e1efb3f1b2037381c85f834e007de891c543c0012795d3e475->enter($__internal_2caf04f19fdcc3e1efb3f1b2037381c85f834e007de891c543c0012795d3e475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_2caf04f19fdcc3e1efb3f1b2037381c85f834e007de891c543c0012795d3e475->leave($__internal_2caf04f19fdcc3e1efb3f1b2037381c85f834e007de891c543c0012795d3e475_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d148a604dd06ad0422c7af302c08b9934c5bb3b71a95c299ade8f270f8d2d124 = $this->env->getExtension("native_profiler");
        $__internal_d148a604dd06ad0422c7af302c08b9934c5bb3b71a95c299ade8f270f8d2d124->enter($__internal_d148a604dd06ad0422c7af302c08b9934c5bb3b71a95c299ade8f270f8d2d124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d148a604dd06ad0422c7af302c08b9934c5bb3b71a95c299ade8f270f8d2d124->leave($__internal_d148a604dd06ad0422c7af302c08b9934c5bb3b71a95c299ade8f270f8d2d124_prof);

    }

    // line 29
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b611418ae88aa04bd6cbc44c26957239dea056e1f6faed55f79e5b5da7ba3502 = $this->env->getExtension("native_profiler");
        $__internal_b611418ae88aa04bd6cbc44c26957239dea056e1f6faed55f79e5b5da7ba3502->enter($__internal_b611418ae88aa04bd6cbc44c26957239dea056e1f6faed55f79e5b5da7ba3502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 30
        echo "                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav pull-right\">
                            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a></li>
                            <li><a href=\"about.html\">Ayuda</a></li>
                            <li><a class=\"btn\" href=\"#\">Identificarse</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                ";
        
        $__internal_b611418ae88aa04bd6cbc44c26957239dea056e1f6faed55f79e5b5da7ba3502->leave($__internal_b611418ae88aa04bd6cbc44c26957239dea056e1f6faed55f79e5b5da7ba3502_prof);

    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        $__internal_a676eb189c7be63c54b35aa716b7d840fa0c6dafe851819d874b23219a9777d4 = $this->env->getExtension("native_profiler");
        $__internal_a676eb189c7be63c54b35aa716b7d840fa0c6dafe851819d874b23219a9777d4->enter($__internal_a676eb189c7be63c54b35aa716b7d840fa0c6dafe851819d874b23219a9777d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 43
        echo "
        ";
        
        $__internal_a676eb189c7be63c54b35aa716b7d840fa0c6dafe851819d874b23219a9777d4->leave($__internal_a676eb189c7be63c54b35aa716b7d840fa0c6dafe851819d874b23219a9777d4_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_bffc2d12c20e05f296f51400e601ee168853e9ce3c541cabd115cff242d6ba1d = $this->env->getExtension("native_profiler");
        $__internal_bffc2d12c20e05f296f51400e601ee168853e9ce3c541cabd115cff242d6ba1d->enter($__internal_bffc2d12c20e05f296f51400e601ee168853e9ce3c541cabd115cff242d6ba1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
        ";
        
        $__internal_bffc2d12c20e05f296f51400e601ee168853e9ce3c541cabd115cff242d6ba1d->leave($__internal_bffc2d12c20e05f296f51400e601ee168853e9ce3c541cabd115cff242d6ba1d_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4300ac5343a16d99346ae132170dbf9398a152ac766227605c5b898f94c7c5b1 = $this->env->getExtension("native_profiler");
        $__internal_4300ac5343a16d99346ae132170dbf9398a152ac766227605c5b898f94c7c5b1->enter($__internal_4300ac5343a16d99346ae132170dbf9398a152ac766227605c5b898f94c7c5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        // line 108
        echo "                                </div>
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
        
        $__internal_4300ac5343a16d99346ae132170dbf9398a152ac766227605c5b898f94c7c5b1->leave($__internal_4300ac5343a16d99346ae132170dbf9398a152ac766227605c5b898f94c7c5b1_prof);

    }

    // line 100
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_41dd2749bccd63989f8ea549a7851ec9645250909a890f16696c349a9de4a8cd = $this->env->getExtension("native_profiler");
        $__internal_41dd2749bccd63989f8ea549a7851ec9645250909a890f16696c349a9de4a8cd->enter($__internal_41dd2749bccd63989f8ea549a7851ec9645250909a890f16696c349a9de4a8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 101
        echo "                                        <p class=\"simplenav\">
                                            <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
                                            <a href=\"about.html\">Ayuda</a> |
                                            <a href=\"sidebar-right.html\">Identificarse</a> |
                                            <b><a href=\"#\">Registrarse</a></b>
                                        </p>
                                    ";
        
        $__internal_41dd2749bccd63989f8ea549a7851ec9645250909a890f16696c349a9de4a8cd->leave($__internal_41dd2749bccd63989f8ea549a7851ec9645250909a890f16696c349a9de4a8cd_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_241d3434fb982fc16d8a8e162be1b94cb89acfcce57f92e102e78e70d8b76533 = $this->env->getExtension("native_profiler");
        $__internal_241d3434fb982fc16d8a8e162be1b94cb89acfcce57f92e102e78e70d8b76533->enter($__internal_241d3434fb982fc16d8a8e162be1b94cb89acfcce57f92e102e78e70d8b76533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "            <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>  
            <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/headroom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jQuery.headroom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/template.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_241d3434fb982fc16d8a8e162be1b94cb89acfcce57f92e102e78e70d8b76533->leave($__internal_241d3434fb982fc16d8a8e162be1b94cb89acfcce57f92e102e78e70d8b76533_prof);

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
        return array (  318 => 132,  314 => 131,  310 => 130,  305 => 127,  299 => 126,  286 => 102,  283 => 101,  277 => 100,  256 => 108,  254 => 100,  207 => 55,  201 => 54,  193 => 48,  187 => 47,  179 => 43,  173 => 42,  160 => 32,  156 => 30,  150 => 29,  140 => 12,  136 => 11,  132 => 10,  127 => 9,  121 => 8,  109 => 6,  101 => 134,  99 => 126,  94 => 123,  92 => 54,  85 => 49,  83 => 47,  78 => 44,  76 => 42,  69 => 37,  67 => 29,  62 => 27,  48 => 16,  44 => 14,  42 => 8,  37 => 6,  30 => 1,);
    }
}
