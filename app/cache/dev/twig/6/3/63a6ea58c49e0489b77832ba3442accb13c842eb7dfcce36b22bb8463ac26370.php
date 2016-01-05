<?php

/* UciAsistenteAcademicaBundle::base.html.twig */
class __TwigTemplate_63a6ea58c49e0489b77832ba3442accb13c842eb7dfcce36b22bb8463ac26370 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "UciAsistenteAcademicaBundle::base.html.twig", 2);
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
        $__internal_abd94d4c0d6b1162153b7a5e7d4af36b075dec699564c50abb828dc68f5c6043 = $this->env->getExtension("native_profiler");
        $__internal_abd94d4c0d6b1162153b7a5e7d4af36b075dec699564c50abb828dc68f5c6043->enter($__internal_abd94d4c0d6b1162153b7a5e7d4af36b075dec699564c50abb828dc68f5c6043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abd94d4c0d6b1162153b7a5e7d4af36b075dec699564c50abb828dc68f5c6043->leave($__internal_abd94d4c0d6b1162153b7a5e7d4af36b075dec699564c50abb828dc68f5c6043_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed382e5e62497fdffea0b0f4a881cdd0496a05582d8d365adf06898819aa6d1b = $this->env->getExtension("native_profiler");
        $__internal_ed382e5e62497fdffea0b0f4a881cdd0496a05582d8d365adf06898819aa6d1b->enter($__internal_ed382e5e62497fdffea0b0f4a881cdd0496a05582d8d365adf06898819aa6d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ed382e5e62497fdffea0b0f4a881cdd0496a05582d8d365adf06898819aa6d1b->leave($__internal_ed382e5e62497fdffea0b0f4a881cdd0496a05582d8d365adf06898819aa6d1b_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_7b8b6f21ae753948d14a2882947e0b2927dfb58f8224f168f8b8ff03089e4129 = $this->env->getExtension("native_profiler");
        $__internal_7b8b6f21ae753948d14a2882947e0b2927dfb58f8224f168f8b8ff03089e4129->enter($__internal_7b8b6f21ae753948d14a2882947e0b2927dfb58f8224f168f8b8ff03089e4129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_asistente_academica_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_7b8b6f21ae753948d14a2882947e0b2927dfb58f8224f168f8b8ff03089e4129->leave($__internal_7b8b6f21ae753948d14a2882947e0b2927dfb58f8224f168f8b8ff03089e4129_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_934a334791cea5f7d164ab9e12cc9eb0e3fe21b22658d2822ebe5b8ddcc94226 = $this->env->getExtension("native_profiler");
        $__internal_934a334791cea5f7d164ab9e12cc9eb0e3fe21b22658d2822ebe5b8ddcc94226->enter($__internal_934a334791cea5f7d164ab9e12cc9eb0e3fe21b22658d2822ebe5b8ddcc94226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 16
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"\">Solicitudes</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicecuestionario");
        echo "\">Mantenimiento Cuestionarios</a></li>
                </ul>
            </li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li>
                <a class=\"btn\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_934a334791cea5f7d164ab9e12cc9eb0e3fe21b22658d2822ebe5b8ddcc94226->leave($__internal_934a334791cea5f7d164ab9e12cc9eb0e3fe21b22658d2822ebe5b8ddcc94226_prof);

    }

    // line 33
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_207178f33ffc0e70aaee6c2401f43493765397a19a2ea13b13f7ece1b1b968b6 = $this->env->getExtension("native_profiler");
        $__internal_207178f33ffc0e70aaee6c2401f43493765397a19a2ea13b13f7ece1b1b968b6->enter($__internal_207178f33ffc0e70aaee6c2401f43493765397a19a2ea13b13f7ece1b1b968b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 34
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a> | 
        <a href=\"\">Solicitudes</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_207178f33ffc0e70aaee6c2401f43493765397a19a2ea13b13f7ece1b1b968b6->leave($__internal_207178f33ffc0e70aaee6c2401f43493765397a19a2ea13b13f7ece1b1b968b6_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0aab53e05e9af22e863e87c4c52bcd0be95d7e7eb4c751a87e0a90e2d3e8e605 = $this->env->getExtension("native_profiler");
        $__internal_0aab53e05e9af22e863e87c4c52bcd0be95d7e7eb4c751a87e0a90e2d3e8e605->enter($__internal_0aab53e05e9af22e863e87c4c52bcd0be95d7e7eb4c751a87e0a90e2d3e8e605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
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
        
        $__internal_0aab53e05e9af22e863e87c4c52bcd0be95d7e7eb4c751a87e0a90e2d3e8e605->leave($__internal_0aab53e05e9af22e863e87c4c52bcd0be95d7e7eb4c751a87e0a90e2d3e8e605_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 49,  168 => 48,  164 => 47,  160 => 46,  156 => 45,  151 => 44,  145 => 43,  135 => 38,  129 => 35,  126 => 34,  120 => 33,  109 => 28,  101 => 23,  93 => 18,  89 => 16,  83 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
