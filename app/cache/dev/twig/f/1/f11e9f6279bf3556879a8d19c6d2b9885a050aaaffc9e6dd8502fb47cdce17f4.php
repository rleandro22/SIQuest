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
        $__internal_9b62d53eb097c461fff9739f19251cfaaf2882f6fe059e65c3cc8fd092eaec75 = $this->env->getExtension("native_profiler");
        $__internal_9b62d53eb097c461fff9739f19251cfaaf2882f6fe059e65c3cc8fd092eaec75->enter($__internal_9b62d53eb097c461fff9739f19251cfaaf2882f6fe059e65c3cc8fd092eaec75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9b62d53eb097c461fff9739f19251cfaaf2882f6fe059e65c3cc8fd092eaec75->leave($__internal_9b62d53eb097c461fff9739f19251cfaaf2882f6fe059e65c3cc8fd092eaec75_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_eab0d62c6de4e3022dceeaabd3fc523306d0cdafeab1e08d47a33e2e949aeb89 = $this->env->getExtension("native_profiler");
        $__internal_eab0d62c6de4e3022dceeaabd3fc523306d0cdafeab1e08d47a33e2e949aeb89->enter($__internal_eab0d62c6de4e3022dceeaabd3fc523306d0cdafeab1e08d47a33e2e949aeb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SIQuest";
        
        $__internal_eab0d62c6de4e3022dceeaabd3fc523306d0cdafeab1e08d47a33e2e949aeb89->leave($__internal_eab0d62c6de4e3022dceeaabd3fc523306d0cdafeab1e08d47a33e2e949aeb89_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f641d279b30e159be0ebf3811f82cddb77c4de7d59cddb562c1eeaa5a9950b1d = $this->env->getExtension("native_profiler");
        $__internal_f641d279b30e159be0ebf3811f82cddb77c4de7d59cddb562c1eeaa5a9950b1d->enter($__internal_f641d279b30e159be0ebf3811f82cddb77c4de7d59cddb562c1eeaa5a9950b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f641d279b30e159be0ebf3811f82cddb77c4de7d59cddb562c1eeaa5a9950b1d->leave($__internal_f641d279b30e159be0ebf3811f82cddb77c4de7d59cddb562c1eeaa5a9950b1d_prof);

    }

    // line 22
    public function block_barra($context, array $blocks = array())
    {
        $__internal_c113a5279e47c732d2615e5cf3b4b57adf0320a9523bda2f0d0f0a54be5f46c2 = $this->env->getExtension("native_profiler");
        $__internal_c113a5279e47c732d2615e5cf3b4b57adf0320a9523bda2f0d0f0a54be5f46c2->enter($__internal_c113a5279e47c732d2615e5cf3b4b57adf0320a9523bda2f0d0f0a54be5f46c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

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
        
        $__internal_c113a5279e47c732d2615e5cf3b4b57adf0320a9523bda2f0d0f0a54be5f46c2->leave($__internal_c113a5279e47c732d2615e5cf3b4b57adf0320a9523bda2f0d0f0a54be5f46c2_prof);

    }

    // line 26
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_4327b8ba54f3f81877dace88261f14c89e7bc995f2110697bf749ead8d8e64f8 = $this->env->getExtension("native_profiler");
        $__internal_4327b8ba54f3f81877dace88261f14c89e7bc995f2110697bf749ead8d8e64f8->enter($__internal_4327b8ba54f3f81877dace88261f14c89e7bc995f2110697bf749ead8d8e64f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " ";
        
        $__internal_4327b8ba54f3f81877dace88261f14c89e7bc995f2110697bf749ead8d8e64f8->leave($__internal_4327b8ba54f3f81877dace88261f14c89e7bc995f2110697bf749ead8d8e64f8_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_8fce4b58e6d3300a50b9ab7e4fdf0a6e67672970c3744ce54d55960d0a4f1cbf = $this->env->getExtension("native_profiler");
        $__internal_8fce4b58e6d3300a50b9ab7e4fdf0a6e67672970c3744ce54d55960d0a4f1cbf->enter($__internal_8fce4b58e6d3300a50b9ab7e4fdf0a6e67672970c3744ce54d55960d0a4f1cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_8fce4b58e6d3300a50b9ab7e4fdf0a6e67672970c3744ce54d55960d0a4f1cbf->leave($__internal_8fce4b58e6d3300a50b9ab7e4fdf0a6e67672970c3744ce54d55960d0a4f1cbf_prof);

    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        $__internal_c439501fecd46e239e887aa9918756d81105abac5243cb1add9013c37890b2fa = $this->env->getExtension("native_profiler");
        $__internal_c439501fecd46e239e887aa9918756d81105abac5243cb1add9013c37890b2fa->enter($__internal_c439501fecd46e239e887aa9918756d81105abac5243cb1add9013c37890b2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "
        ";
        
        $__internal_c439501fecd46e239e887aa9918756d81105abac5243cb1add9013c37890b2fa->leave($__internal_c439501fecd46e239e887aa9918756d81105abac5243cb1add9013c37890b2fa_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_8309420b32697e5add7930a3d1ee52d2397bc1da52bf7899d8d919667edd0761 = $this->env->getExtension("native_profiler");
        $__internal_8309420b32697e5add7930a3d1ee52d2397bc1da52bf7899d8d919667edd0761->enter($__internal_8309420b32697e5add7930a3d1ee52d2397bc1da52bf7899d8d919667edd0761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "
        ";
        
        $__internal_8309420b32697e5add7930a3d1ee52d2397bc1da52bf7899d8d919667edd0761->leave($__internal_8309420b32697e5add7930a3d1ee52d2397bc1da52bf7899d8d919667edd0761_prof);

    }

    // line 55
    public function block_piepagina($context, array $blocks = array())
    {
        $__internal_1d57efa6bd4febffea5b6ccbaa30dc8a236663949e4da19de56a1930eb0df04e = $this->env->getExtension("native_profiler");
        $__internal_1d57efa6bd4febffea5b6ccbaa30dc8a236663949e4da19de56a1930eb0df04e->enter($__internal_1d57efa6bd4febffea5b6ccbaa30dc8a236663949e4da19de56a1930eb0df04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "piepagina"));

        // line 56
        echo "        <footer id=\"footer\" class=\"top-space\">
            ";
        // line 57
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "        </footer>\t
";
        
        $__internal_1d57efa6bd4febffea5b6ccbaa30dc8a236663949e4da19de56a1930eb0df04e->leave($__internal_1d57efa6bd4febffea5b6ccbaa30dc8a236663949e4da19de56a1930eb0df04e_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dce12c66d3eb76e057b02e5bf0594341b3037730097a0781b46cb5d09056a562 = $this->env->getExtension("native_profiler");
        $__internal_dce12c66d3eb76e057b02e5bf0594341b3037730097a0781b46cb5d09056a562->enter($__internal_dce12c66d3eb76e057b02e5bf0594341b3037730097a0781b46cb5d09056a562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_dce12c66d3eb76e057b02e5bf0594341b3037730097a0781b46cb5d09056a562->leave($__internal_dce12c66d3eb76e057b02e5bf0594341b3037730097a0781b46cb5d09056a562_prof);

    }

    // line 103
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_0bb9534625f049d48e76a29138f6f2f078f6ae2743ddf9f988c126df8ad9e7e9 = $this->env->getExtension("native_profiler");
        $__internal_0bb9534625f049d48e76a29138f6f2f078f6ae2743ddf9f988c126df8ad9e7e9->enter($__internal_0bb9534625f049d48e76a29138f6f2f078f6ae2743ddf9f988c126df8ad9e7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_0bb9534625f049d48e76a29138f6f2f078f6ae2743ddf9f988c126df8ad9e7e9->leave($__internal_0bb9534625f049d48e76a29138f6f2f078f6ae2743ddf9f988c126df8ad9e7e9_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c96dd95581e595e8ce6cc36b86d5109b9f4f00fe26c0446bd9def9c4847ac91 = $this->env->getExtension("native_profiler");
        $__internal_5c96dd95581e595e8ce6cc36b86d5109b9f4f00fe26c0446bd9def9c4847ac91->enter($__internal_5c96dd95581e595e8ce6cc36b86d5109b9f4f00fe26c0446bd9def9c4847ac91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_5c96dd95581e595e8ce6cc36b86d5109b9f4f00fe26c0446bd9def9c4847ac91->leave($__internal_5c96dd95581e595e8ce6cc36b86d5109b9f4f00fe26c0446bd9def9c4847ac91_prof);

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
