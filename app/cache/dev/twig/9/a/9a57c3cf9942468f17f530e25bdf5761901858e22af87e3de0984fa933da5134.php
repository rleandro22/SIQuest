<?php

/* ::base.html.twig */
class __TwigTemplate_9a57c3cf9942468f17f530e25bdf5761901858e22af87e3de0984fa933da5134 extends Twig_Template
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
        $__internal_9e1c68d061787283c89a242b0a128860ed7974a19b2255a101e1606c393e57db = $this->env->getExtension("native_profiler");
        $__internal_9e1c68d061787283c89a242b0a128860ed7974a19b2255a101e1606c393e57db->enter($__internal_9e1c68d061787283c89a242b0a128860ed7974a19b2255a101e1606c393e57db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9e1c68d061787283c89a242b0a128860ed7974a19b2255a101e1606c393e57db->leave($__internal_9e1c68d061787283c89a242b0a128860ed7974a19b2255a101e1606c393e57db_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_17f7e0f6a49438a54ce74f0ed7a22a245b4b421bfee1f1c1389cabab38c50d07 = $this->env->getExtension("native_profiler");
        $__internal_17f7e0f6a49438a54ce74f0ed7a22a245b4b421bfee1f1c1389cabab38c50d07->enter($__internal_17f7e0f6a49438a54ce74f0ed7a22a245b4b421bfee1f1c1389cabab38c50d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_17f7e0f6a49438a54ce74f0ed7a22a245b4b421bfee1f1c1389cabab38c50d07->leave($__internal_17f7e0f6a49438a54ce74f0ed7a22a245b4b421bfee1f1c1389cabab38c50d07_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d9a21d4f453740bb6a8b7b482dab3f85c477be069072e10ec08b581587f01c3 = $this->env->getExtension("native_profiler");
        $__internal_0d9a21d4f453740bb6a8b7b482dab3f85c477be069072e10ec08b581587f01c3->enter($__internal_0d9a21d4f453740bb6a8b7b482dab3f85c477be069072e10ec08b581587f01c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0d9a21d4f453740bb6a8b7b482dab3f85c477be069072e10ec08b581587f01c3->leave($__internal_0d9a21d4f453740bb6a8b7b482dab3f85c477be069072e10ec08b581587f01c3_prof);

    }

    // line 25
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_896d23d68040cf45e6bd92508778d4b5c3ba8745f15bc7607a740b72218adf09 = $this->env->getExtension("native_profiler");
        $__internal_896d23d68040cf45e6bd92508778d4b5c3ba8745f15bc7607a740b72218adf09->enter($__internal_896d23d68040cf45e6bd92508778d4b5c3ba8745f15bc7607a740b72218adf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_896d23d68040cf45e6bd92508778d4b5c3ba8745f15bc7607a740b72218adf09->leave($__internal_896d23d68040cf45e6bd92508778d4b5c3ba8745f15bc7607a740b72218adf09_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_82584aa123dd22999995544497841fbac75d6ea381664ed841987676d7b88cec = $this->env->getExtension("native_profiler");
        $__internal_82584aa123dd22999995544497841fbac75d6ea381664ed841987676d7b88cec->enter($__internal_82584aa123dd22999995544497841fbac75d6ea381664ed841987676d7b88cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_82584aa123dd22999995544497841fbac75d6ea381664ed841987676d7b88cec->leave($__internal_82584aa123dd22999995544497841fbac75d6ea381664ed841987676d7b88cec_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_1f08656aa8bb3b387567f8a6a7be4a5261ddd154fbc8502c4e7dee02fe8baf34 = $this->env->getExtension("native_profiler");
        $__internal_1f08656aa8bb3b387567f8a6a7be4a5261ddd154fbc8502c4e7dee02fe8baf34->enter($__internal_1f08656aa8bb3b387567f8a6a7be4a5261ddd154fbc8502c4e7dee02fe8baf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "
        ";
        
        $__internal_1f08656aa8bb3b387567f8a6a7be4a5261ddd154fbc8502c4e7dee02fe8baf34->leave($__internal_1f08656aa8bb3b387567f8a6a7be4a5261ddd154fbc8502c4e7dee02fe8baf34_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_33989664ef212c1407f6dc74ba434c47f6201de2daf08c19cbb3800cd8ac084f = $this->env->getExtension("native_profiler");
        $__internal_33989664ef212c1407f6dc74ba434c47f6201de2daf08c19cbb3800cd8ac084f->enter($__internal_33989664ef212c1407f6dc74ba434c47f6201de2daf08c19cbb3800cd8ac084f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_33989664ef212c1407f6dc74ba434c47f6201de2daf08c19cbb3800cd8ac084f->leave($__internal_33989664ef212c1407f6dc74ba434c47f6201de2daf08c19cbb3800cd8ac084f_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a29e6173fbd4318c87edc1ac8de45b5f0a2edc353db558430383227f61d30722 = $this->env->getExtension("native_profiler");
        $__internal_a29e6173fbd4318c87edc1ac8de45b5f0a2edc353db558430383227f61d30722->enter($__internal_a29e6173fbd4318c87edc1ac8de45b5f0a2edc353db558430383227f61d30722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_a29e6173fbd4318c87edc1ac8de45b5f0a2edc353db558430383227f61d30722->leave($__internal_a29e6173fbd4318c87edc1ac8de45b5f0a2edc353db558430383227f61d30722_prof);

    }

    // line 101
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_fe3abbf5e16e850617675befc3db4f8ad170705af1b4a3815571b548b3ef32d3 = $this->env->getExtension("native_profiler");
        $__internal_fe3abbf5e16e850617675befc3db4f8ad170705af1b4a3815571b548b3ef32d3->enter($__internal_fe3abbf5e16e850617675befc3db4f8ad170705af1b4a3815571b548b3ef32d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_fe3abbf5e16e850617675befc3db4f8ad170705af1b4a3815571b548b3ef32d3->leave($__internal_fe3abbf5e16e850617675befc3db4f8ad170705af1b4a3815571b548b3ef32d3_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f261ffd3fb9535ea7c6984bbc50ff73e92ecd04c36db434172377e01d7ed3e5f = $this->env->getExtension("native_profiler");
        $__internal_f261ffd3fb9535ea7c6984bbc50ff73e92ecd04c36db434172377e01d7ed3e5f->enter($__internal_f261ffd3fb9535ea7c6984bbc50ff73e92ecd04c36db434172377e01d7ed3e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f261ffd3fb9535ea7c6984bbc50ff73e92ecd04c36db434172377e01d7ed3e5f->leave($__internal_f261ffd3fb9535ea7c6984bbc50ff73e92ecd04c36db434172377e01d7ed3e5f_prof);

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
