<?php

/* UciAdministradorBundle::base.html.twig */
class __TwigTemplate_4442c4aa0e5de0e12c79ccdbdea1863b001ae545a46125b034905230da9441ed extends Twig_Template
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
        $__internal_256c9702d0fadfba290c6b2ea49b3107223f08bc90d51f8bc28757ccdc841474 = $this->env->getExtension("native_profiler");
        $__internal_256c9702d0fadfba290c6b2ea49b3107223f08bc90d51f8bc28757ccdc841474->enter($__internal_256c9702d0fadfba290c6b2ea49b3107223f08bc90d51f8bc28757ccdc841474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_256c9702d0fadfba290c6b2ea49b3107223f08bc90d51f8bc28757ccdc841474->leave($__internal_256c9702d0fadfba290c6b2ea49b3107223f08bc90d51f8bc28757ccdc841474_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc81246a12f48899498b3536c74094324c79206e5beabde061cf81aa6e18c19d = $this->env->getExtension("native_profiler");
        $__internal_dc81246a12f48899498b3536c74094324c79206e5beabde061cf81aa6e18c19d->enter($__internal_dc81246a12f48899498b3536c74094324c79206e5beabde061cf81aa6e18c19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_dc81246a12f48899498b3536c74094324c79206e5beabde061cf81aa6e18c19d->leave($__internal_dc81246a12f48899498b3536c74094324c79206e5beabde061cf81aa6e18c19d_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_026642ff94204aece71250eaffebb120a674943a87d3d1a2e3ceeafce9495d8c = $this->env->getExtension("native_profiler");
        $__internal_026642ff94204aece71250eaffebb120a674943a87d3d1a2e3ceeafce9495d8c->enter($__internal_026642ff94204aece71250eaffebb120a674943a87d3d1a2e3ceeafce9495d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_026642ff94204aece71250eaffebb120a674943a87d3d1a2e3ceeafce9495d8c->leave($__internal_026642ff94204aece71250eaffebb120a674943a87d3d1a2e3ceeafce9495d8c_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_88d44779e8dd08018cd4b880c7db384712788ad6f77afd17daa393b614c84155 = $this->env->getExtension("native_profiler");
        $__internal_88d44779e8dd08018cd4b880c7db384712788ad6f77afd17daa393b614c84155->enter($__internal_88d44779e8dd08018cd4b880c7db384712788ad6f77afd17daa393b614c84155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 16
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicesolicitudes");
        echo "\">Solicitudes</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"active\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecategoria");
        echo "\">Mantenimiento Categorias</a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\">Mantenimiento Cuestionarios</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Mantenimiento Libros</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\">Mantenimiento Preguntas</a></li>
                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Mantenimiento Usuarios</a></li>
                </ul>
            </li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li>
                <a class=\"btn\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_88d44779e8dd08018cd4b880c7db384712788ad6f77afd17daa393b614c84155->leave($__internal_88d44779e8dd08018cd4b880c7db384712788ad6f77afd17daa393b614c84155_prof);

    }

    // line 37
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_4c17e0de92f7c69261fd14ec127f05647dc74beb676541127b57549fa54fdeb0 = $this->env->getExtension("native_profiler");
        $__internal_4c17e0de92f7c69261fd14ec127f05647dc74beb676541127b57549fa54fdeb0->enter($__internal_4c17e0de92f7c69261fd14ec127f05647dc74beb676541127b57549fa54fdeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 38
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
        <a href=\"\">Solicitudes</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_4c17e0de92f7c69261fd14ec127f05647dc74beb676541127b57549fa54fdeb0->leave($__internal_4c17e0de92f7c69261fd14ec127f05647dc74beb676541127b57549fa54fdeb0_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c19931cd63a6ffa7dd4615d051600daed6c8f3b049ec03c08e9244bc827bdc44 = $this->env->getExtension("native_profiler");
        $__internal_c19931cd63a6ffa7dd4615d051600daed6c8f3b049ec03c08e9244bc827bdc44->enter($__internal_c19931cd63a6ffa7dd4615d051600daed6c8f3b049ec03c08e9244bc827bdc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_c19931cd63a6ffa7dd4615d051600daed6c8f3b049ec03c08e9244bc827bdc44->leave($__internal_c19931cd63a6ffa7dd4615d051600daed6c8f3b049ec03c08e9244bc827bdc44_prof);

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
        return array (  191 => 53,  187 => 52,  183 => 51,  179 => 50,  175 => 49,  170 => 48,  164 => 47,  154 => 42,  148 => 39,  145 => 38,  139 => 37,  128 => 32,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  97 => 19,  93 => 18,  89 => 16,  83 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
