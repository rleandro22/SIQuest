<?php

/* UciProfesorBundle::base.html.twig */
class __TwigTemplate_ddf902ffe4db7d5d2f90f955eec0f9a85e151302fb40ab763303e7bab6a5f0c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "UciProfesorBundle::base.html.twig", 2);
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
        $__internal_7b138815b6bd9de46a456d8d55a22e09efbc14e34fdca30f97f2e6e8385d2cf6 = $this->env->getExtension("native_profiler");
        $__internal_7b138815b6bd9de46a456d8d55a22e09efbc14e34fdca30f97f2e6e8385d2cf6->enter($__internal_7b138815b6bd9de46a456d8d55a22e09efbc14e34fdca30f97f2e6e8385d2cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b138815b6bd9de46a456d8d55a22e09efbc14e34fdca30f97f2e6e8385d2cf6->leave($__internal_7b138815b6bd9de46a456d8d55a22e09efbc14e34fdca30f97f2e6e8385d2cf6_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa79177618ba6d9d47bd9cf854bb61064087fdbb72c08ad42713f6e61474e169 = $this->env->getExtension("native_profiler");
        $__internal_fa79177618ba6d9d47bd9cf854bb61064087fdbb72c08ad42713f6e61474e169->enter($__internal_fa79177618ba6d9d47bd9cf854bb61064087fdbb72c08ad42713f6e61474e169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/notificaciones.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/apagador.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_fa79177618ba6d9d47bd9cf854bb61064087fdbb72c08ad42713f6e61474e169->leave($__internal_fa79177618ba6d9d47bd9cf854bb61064087fdbb72c08ad42713f6e61474e169_prof);

    }

    // line 13
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_0c09bf89a10e6a234f01ca472f67e9d07acd47af9172d725b5b3d4fa4e893b5d = $this->env->getExtension("native_profiler");
        $__internal_0c09bf89a10e6a234f01ca472f67e9d07acd47af9172d725b5b3d4fa4e893b5d->enter($__internal_0c09bf89a10e6a234f01ca472f67e9d07acd47af9172d725b5b3d4fa4e893b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_profesor_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_0c09bf89a10e6a234f01ca472f67e9d07acd47af9172d725b5b3d4fa4e893b5d->leave($__internal_0c09bf89a10e6a234f01ca472f67e9d07acd47af9172d725b5b3d4fa4e893b5d_prof);

    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a7e738d22e79750b0125ea992de8d7b0aa0a61602dbe2e934fe3e6ee2e0215c0 = $this->env->getExtension("native_profiler");
        $__internal_a7e738d22e79750b0125ea992de8d7b0aa0a61602dbe2e934fe3e6ee2e0215c0->enter($__internal_a7e738d22e79750b0125ea992de8d7b0aa0a61602dbe2e934fe3e6ee2e0215c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 18
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("uci_profesor_homepage");
        echo "\">Inicio</a></li>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("uci_profesor_indicecuestionario");
        echo "\">Mantenimiento Cuestionarios</a></li>
                </ul>
            </li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li>
                <a class=\"btn\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_a7e738d22e79750b0125ea992de8d7b0aa0a61602dbe2e934fe3e6ee2e0215c0->leave($__internal_a7e738d22e79750b0125ea992de8d7b0aa0a61602dbe2e934fe3e6ee2e0215c0_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_c0f42e5ca40dad0636af8e58cf9767359ff8c218e86e7a33b6b5eb3c3eea8f4d = $this->env->getExtension("native_profiler");
        $__internal_c0f42e5ca40dad0636af8e58cf9767359ff8c218e86e7a33b6b5eb3c3eea8f4d->enter($__internal_c0f42e5ca40dad0636af8e58cf9767359ff8c218e86e7a33b6b5eb3c3eea8f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 36
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a> | 
        <a href=\"\">Solicitudes</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_c0f42e5ca40dad0636af8e58cf9767359ff8c218e86e7a33b6b5eb3c3eea8f4d->leave($__internal_c0f42e5ca40dad0636af8e58cf9767359ff8c218e86e7a33b6b5eb3c3eea8f4d_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b308adb3a52e388c17806e602714439a2cf4fd00fe7605fb0e77b7def0c11f21 = $this->env->getExtension("native_profiler");
        $__internal_b308adb3a52e388c17806e602714439a2cf4fd00fe7605fb0e77b7def0c11f21->enter($__internal_b308adb3a52e388c17806e602714439a2cf4fd00fe7605fb0e77b7def0c11f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_b308adb3a52e388c17806e602714439a2cf4fd00fe7605fb0e77b7def0c11f21->leave($__internal_b308adb3a52e388c17806e602714439a2cf4fd00fe7605fb0e77b7def0c11f21_prof);

    }

    public function getTemplateName()
    {
        return "UciProfesorBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 51,  176 => 50,  172 => 49,  168 => 48,  164 => 47,  159 => 46,  153 => 45,  143 => 40,  137 => 37,  134 => 36,  128 => 35,  117 => 30,  109 => 25,  101 => 20,  97 => 18,  91 => 17,  78 => 14,  70 => 13,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
