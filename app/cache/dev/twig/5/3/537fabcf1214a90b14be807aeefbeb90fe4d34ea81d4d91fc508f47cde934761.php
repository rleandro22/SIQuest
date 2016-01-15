<?php

/* UciProfesorBundle::base.html.twig */
class __TwigTemplate_537fabcf1214a90b14be807aeefbeb90fe4d34ea81d4d91fc508f47cde934761 extends Twig_Template
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
        $__internal_7bc7e2843fd828c6eb0ccca974982706dda2d23605d07b8bfeb26ec0e18b296b = $this->env->getExtension("native_profiler");
        $__internal_7bc7e2843fd828c6eb0ccca974982706dda2d23605d07b8bfeb26ec0e18b296b->enter($__internal_7bc7e2843fd828c6eb0ccca974982706dda2d23605d07b8bfeb26ec0e18b296b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bc7e2843fd828c6eb0ccca974982706dda2d23605d07b8bfeb26ec0e18b296b->leave($__internal_7bc7e2843fd828c6eb0ccca974982706dda2d23605d07b8bfeb26ec0e18b296b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e862a5b9cd707487b884aabcd349d737c2a26841e3b20b8f43b41c3f9cd7763 = $this->env->getExtension("native_profiler");
        $__internal_0e862a5b9cd707487b884aabcd349d737c2a26841e3b20b8f43b41c3f9cd7763->enter($__internal_0e862a5b9cd707487b884aabcd349d737c2a26841e3b20b8f43b41c3f9cd7763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0e862a5b9cd707487b884aabcd349d737c2a26841e3b20b8f43b41c3f9cd7763->leave($__internal_0e862a5b9cd707487b884aabcd349d737c2a26841e3b20b8f43b41c3f9cd7763_prof);

    }

    // line 13
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_e14b70f103530472b52d312bdc7f4ba2a5c6ce6effcc10df45351748bcec86b6 = $this->env->getExtension("native_profiler");
        $__internal_e14b70f103530472b52d312bdc7f4ba2a5c6ce6effcc10df45351748bcec86b6->enter($__internal_e14b70f103530472b52d312bdc7f4ba2a5c6ce6effcc10df45351748bcec86b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

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
        
        $__internal_e14b70f103530472b52d312bdc7f4ba2a5c6ce6effcc10df45351748bcec86b6->leave($__internal_e14b70f103530472b52d312bdc7f4ba2a5c6ce6effcc10df45351748bcec86b6_prof);

    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_08597fdbaee4ab29a5332aa82b4941333ef15fa9a7d063011b5358fc428d8801 = $this->env->getExtension("native_profiler");
        $__internal_08597fdbaee4ab29a5332aa82b4941333ef15fa9a7d063011b5358fc428d8801->enter($__internal_08597fdbaee4ab29a5332aa82b4941333ef15fa9a7d063011b5358fc428d8801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_08597fdbaee4ab29a5332aa82b4941333ef15fa9a7d063011b5358fc428d8801->leave($__internal_08597fdbaee4ab29a5332aa82b4941333ef15fa9a7d063011b5358fc428d8801_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_a806d9680dcdd7afb1cf8e76c8c316c3b5993a32591bfc9e27cd094c23bba305 = $this->env->getExtension("native_profiler");
        $__internal_a806d9680dcdd7afb1cf8e76c8c316c3b5993a32591bfc9e27cd094c23bba305->enter($__internal_a806d9680dcdd7afb1cf8e76c8c316c3b5993a32591bfc9e27cd094c23bba305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_a806d9680dcdd7afb1cf8e76c8c316c3b5993a32591bfc9e27cd094c23bba305->leave($__internal_a806d9680dcdd7afb1cf8e76c8c316c3b5993a32591bfc9e27cd094c23bba305_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11fec078b5dc4b99e64b5d81d45762b09332968f09b9b28fbd3b41b9963096ac = $this->env->getExtension("native_profiler");
        $__internal_11fec078b5dc4b99e64b5d81d45762b09332968f09b9b28fbd3b41b9963096ac->enter($__internal_11fec078b5dc4b99e64b5d81d45762b09332968f09b9b28fbd3b41b9963096ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_11fec078b5dc4b99e64b5d81d45762b09332968f09b9b28fbd3b41b9963096ac->leave($__internal_11fec078b5dc4b99e64b5d81d45762b09332968f09b9b28fbd3b41b9963096ac_prof);

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
