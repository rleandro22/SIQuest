<?php

/* UciAdministradorBundle::base.html.twig */
class __TwigTemplate_59aecf009bfb9029046f014f1c5485877e398abfdea395e47349aec5071c1542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "UciAdministradorBundle::base.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'mensajeLogueado' => array($this, 'block_mensajeLogueado'),
            'navigation' => array($this, 'block_navigation'),
            'navegacionfooter' => array($this, 'block_navegacionfooter'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb9c8209036b0d0f72c54e40b75bcf0ba180fd87d3e5450c3fd40aa2ecbc44b4 = $this->env->getExtension("native_profiler");
        $__internal_bb9c8209036b0d0f72c54e40b75bcf0ba180fd87d3e5450c3fd40aa2ecbc44b4->enter($__internal_bb9c8209036b0d0f72c54e40b75bcf0ba180fd87d3e5450c3fd40aa2ecbc44b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb9c8209036b0d0f72c54e40b75bcf0ba180fd87d3e5450c3fd40aa2ecbc44b4->leave($__internal_bb9c8209036b0d0f72c54e40b75bcf0ba180fd87d3e5450c3fd40aa2ecbc44b4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b77b1e936b030ba342372075e9d1a08ac23cdfa00b514cd179fb148179efd87 = $this->env->getExtension("native_profiler");
        $__internal_4b77b1e936b030ba342372075e9d1a08ac23cdfa00b514cd179fb148179efd87->enter($__internal_4b77b1e936b030ba342372075e9d1a08ac23cdfa00b514cd179fb148179efd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/menuvertcss.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footable-demos.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_4b77b1e936b030ba342372075e9d1a08ac23cdfa00b514cd179fb148179efd87->leave($__internal_4b77b1e936b030ba342372075e9d1a08ac23cdfa00b514cd179fb148179efd87_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_daa872b247a425ad2c7ec6577f3661c4cd0a21c7dd1780cf1e7838cee54e7b77 = $this->env->getExtension("native_profiler");
        $__internal_daa872b247a425ad2c7ec6577f3661c4cd0a21c7dd1780cf1e7838cee54e7b77->enter($__internal_daa872b247a425ad2c7ec6577f3661c4cd0a21c7dd1780cf1e7838cee54e7b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_daa872b247a425ad2c7ec6577f3661c4cd0a21c7dd1780cf1e7838cee54e7b77->leave($__internal_daa872b247a425ad2c7ec6577f3661c4cd0a21c7dd1780cf1e7838cee54e7b77_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a6180a586faa7961311808fccc1da0177d83849b1bdc9c9519fcbc28d2ec49e0 = $this->env->getExtension("native_profiler");
        $__internal_a6180a586faa7961311808fccc1da0177d83849b1bdc9c9519fcbc28d2ec49e0->enter($__internal_a6180a586faa7961311808fccc1da0177d83849b1bdc9c9519fcbc28d2ec49e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 16
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"active\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Mantenimiento Usuarios</a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecategoria");
        echo "\">Mantenimiento Categorias</a></li>
                    <li><a href=\"sidebar-left.html\">Mantenimiento Libros</a></li>
                    <li><a href=\"sidebar-right.html\">Mantenimiento Preguntas</a></li>
                </ul>
            </li>
            <li>
                <a class=\"btn\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_a6180a586faa7961311808fccc1da0177d83849b1bdc9c9519fcbc28d2ec49e0->leave($__internal_a6180a586faa7961311808fccc1da0177d83849b1bdc9c9519fcbc28d2ec49e0_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_6a4bc9a42961cf066eecda648d2d912b5b41b2aa3bd0920f882bf7fe7ab5bbe0 = $this->env->getExtension("native_profiler");
        $__internal_6a4bc9a42961cf066eecda648d2d912b5b41b2aa3bd0920f882bf7fe7ab5bbe0->enter($__internal_6a4bc9a42961cf066eecda648d2d912b5b41b2aa3bd0920f882bf7fe7ab5bbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 36
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
        <a href=\"about.html\">Ayuda</a> |
        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_6a4bc9a42961cf066eecda648d2d912b5b41b2aa3bd0920f882bf7fe7ab5bbe0->leave($__internal_6a4bc9a42961cf066eecda648d2d912b5b41b2aa3bd0920f882bf7fe7ab5bbe0_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5d8263a2fab5fd4e2e873789768a78b9e9dca199ffd25216cb20303fec874c2 = $this->env->getExtension("native_profiler");
        $__internal_c5d8263a2fab5fd4e2e873789768a78b9e9dca199ffd25216cb20303fec874c2->enter($__internal_c5d8263a2fab5fd4e2e873789768a78b9e9dca199ffd25216cb20303fec874c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_c5d8263a2fab5fd4e2e873789768a78b9e9dca199ffd25216cb20303fec874c2->leave($__internal_c5d8263a2fab5fd4e2e873789768a78b9e9dca199ffd25216cb20303fec874c2_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 49,  164 => 48,  160 => 47,  156 => 46,  151 => 45,  145 => 44,  135 => 39,  130 => 37,  127 => 36,  121 => 35,  110 => 30,  101 => 24,  97 => 23,  89 => 18,  85 => 16,  79 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
