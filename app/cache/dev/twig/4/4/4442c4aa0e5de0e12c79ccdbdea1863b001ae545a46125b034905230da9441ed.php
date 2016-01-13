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
        $__internal_73e8a04366a297e486964f78747fde761cbd84bbceb65984569f96645050c981 = $this->env->getExtension("native_profiler");
        $__internal_73e8a04366a297e486964f78747fde761cbd84bbceb65984569f96645050c981->enter($__internal_73e8a04366a297e486964f78747fde761cbd84bbceb65984569f96645050c981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73e8a04366a297e486964f78747fde761cbd84bbceb65984569f96645050c981->leave($__internal_73e8a04366a297e486964f78747fde761cbd84bbceb65984569f96645050c981_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ac583c3d8c458d07d9b0bce85afa6000eaabd11974fcb2fe52a7f998f4ca1d9 = $this->env->getExtension("native_profiler");
        $__internal_2ac583c3d8c458d07d9b0bce85afa6000eaabd11974fcb2fe52a7f998f4ca1d9->enter($__internal_2ac583c3d8c458d07d9b0bce85afa6000eaabd11974fcb2fe52a7f998f4ca1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2ac583c3d8c458d07d9b0bce85afa6000eaabd11974fcb2fe52a7f998f4ca1d9->leave($__internal_2ac583c3d8c458d07d9b0bce85afa6000eaabd11974fcb2fe52a7f998f4ca1d9_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_77e4de7aec933940c9f1ac8982e8fe4a4704fa5109e307b5c4e112f97e090be8 = $this->env->getExtension("native_profiler");
        $__internal_77e4de7aec933940c9f1ac8982e8fe4a4704fa5109e307b5c4e112f97e090be8->enter($__internal_77e4de7aec933940c9f1ac8982e8fe4a4704fa5109e307b5c4e112f97e090be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

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
        
        $__internal_77e4de7aec933940c9f1ac8982e8fe4a4704fa5109e307b5c4e112f97e090be8->leave($__internal_77e4de7aec933940c9f1ac8982e8fe4a4704fa5109e307b5c4e112f97e090be8_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1932431ec6bb7212bdaed25448bb31d08f2baf2baca764804e1519d0ebe6b3bf = $this->env->getExtension("native_profiler");
        $__internal_1932431ec6bb7212bdaed25448bb31d08f2baf2baca764804e1519d0ebe6b3bf->enter($__internal_1932431ec6bb7212bdaed25448bb31d08f2baf2baca764804e1519d0ebe6b3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_1932431ec6bb7212bdaed25448bb31d08f2baf2baca764804e1519d0ebe6b3bf->leave($__internal_1932431ec6bb7212bdaed25448bb31d08f2baf2baca764804e1519d0ebe6b3bf_prof);

    }

    // line 37
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_9771e43b167e388de3b11be93f78b2c414deee86175601916f575e5a07d03b5a = $this->env->getExtension("native_profiler");
        $__internal_9771e43b167e388de3b11be93f78b2c414deee86175601916f575e5a07d03b5a->enter($__internal_9771e43b167e388de3b11be93f78b2c414deee86175601916f575e5a07d03b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_9771e43b167e388de3b11be93f78b2c414deee86175601916f575e5a07d03b5a->leave($__internal_9771e43b167e388de3b11be93f78b2c414deee86175601916f575e5a07d03b5a_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ccbd54d10664ba405ff50cc53ca9837498f9d0d69669fa1272b06158fe59fa9 = $this->env->getExtension("native_profiler");
        $__internal_0ccbd54d10664ba405ff50cc53ca9837498f9d0d69669fa1272b06158fe59fa9->enter($__internal_0ccbd54d10664ba405ff50cc53ca9837498f9d0d69669fa1272b06158fe59fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0ccbd54d10664ba405ff50cc53ca9837498f9d0d69669fa1272b06158fe59fa9->leave($__internal_0ccbd54d10664ba405ff50cc53ca9837498f9d0d69669fa1272b06158fe59fa9_prof);

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
