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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a7a3b4461a719121af705120e3d680d8f8b8025b7f7a09fb5f21922aa39fa5c = $this->env->getExtension("native_profiler");
        $__internal_8a7a3b4461a719121af705120e3d680d8f8b8025b7f7a09fb5f21922aa39fa5c->enter($__internal_8a7a3b4461a719121af705120e3d680d8f8b8025b7f7a09fb5f21922aa39fa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a7a3b4461a719121af705120e3d680d8f8b8025b7f7a09fb5f21922aa39fa5c->leave($__internal_8a7a3b4461a719121af705120e3d680d8f8b8025b7f7a09fb5f21922aa39fa5c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0edbad33d640743b09fc82c78d648dc30d15af67e81a86b9c1c4319bf6bd9d1 = $this->env->getExtension("native_profiler");
        $__internal_a0edbad33d640743b09fc82c78d648dc30d15af67e81a86b9c1c4319bf6bd9d1->enter($__internal_a0edbad33d640743b09fc82c78d648dc30d15af67e81a86b9c1c4319bf6bd9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a0edbad33d640743b09fc82c78d648dc30d15af67e81a86b9c1c4319bf6bd9d1->leave($__internal_a0edbad33d640743b09fc82c78d648dc30d15af67e81a86b9c1c4319bf6bd9d1_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_2b99423dfd995ed595e36fc0caadcca941ac29cc21b7a92302f1c532e460abf2 = $this->env->getExtension("native_profiler");
        $__internal_2b99423dfd995ed595e36fc0caadcca941ac29cc21b7a92302f1c532e460abf2->enter($__internal_2b99423dfd995ed595e36fc0caadcca941ac29cc21b7a92302f1c532e460abf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_2b99423dfd995ed595e36fc0caadcca941ac29cc21b7a92302f1c532e460abf2->leave($__internal_2b99423dfd995ed595e36fc0caadcca941ac29cc21b7a92302f1c532e460abf2_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b43a681ec61415e10025242eb5539e5154a49e856323b27616c17ad8a1e593e6 = $this->env->getExtension("native_profiler");
        $__internal_b43a681ec61415e10025242eb5539e5154a49e856323b27616c17ad8a1e593e6->enter($__internal_b43a681ec61415e10025242eb5539e5154a49e856323b27616c17ad8a1e593e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_b43a681ec61415e10025242eb5539e5154a49e856323b27616c17ad8a1e593e6->leave($__internal_b43a681ec61415e10025242eb5539e5154a49e856323b27616c17ad8a1e593e6_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1065a046a70ec5d3cf5cbe7e24e123655a2f8250d31c637fd6d4dc65d003a936 = $this->env->getExtension("native_profiler");
        $__internal_1065a046a70ec5d3cf5cbe7e24e123655a2f8250d31c637fd6d4dc65d003a936->enter($__internal_1065a046a70ec5d3cf5cbe7e24e123655a2f8250d31c637fd6d4dc65d003a936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_1065a046a70ec5d3cf5cbe7e24e123655a2f8250d31c637fd6d4dc65d003a936->leave($__internal_1065a046a70ec5d3cf5cbe7e24e123655a2f8250d31c637fd6d4dc65d003a936_prof);

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
        return array (  143 => 41,  139 => 40,  135 => 39,  131 => 38,  126 => 37,  120 => 36,  109 => 30,  100 => 24,  96 => 23,  88 => 18,  84 => 16,  78 => 15,  69 => 12,  61 => 11,  52 => 8,  48 => 7,  43 => 6,  37 => 5,  11 => 2,);
    }
}
