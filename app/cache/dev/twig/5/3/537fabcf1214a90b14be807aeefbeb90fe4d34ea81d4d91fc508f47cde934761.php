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
        $__internal_ca2460bac39a421ec8ed5a27707f04e68496c16cf33b2ac19ae9862b5fbf74ec = $this->env->getExtension("native_profiler");
        $__internal_ca2460bac39a421ec8ed5a27707f04e68496c16cf33b2ac19ae9862b5fbf74ec->enter($__internal_ca2460bac39a421ec8ed5a27707f04e68496c16cf33b2ac19ae9862b5fbf74ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca2460bac39a421ec8ed5a27707f04e68496c16cf33b2ac19ae9862b5fbf74ec->leave($__internal_ca2460bac39a421ec8ed5a27707f04e68496c16cf33b2ac19ae9862b5fbf74ec_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8bba763315861d00d4a9611dc391dc5e71f20e52bed520b0452cf811b0ce83f5 = $this->env->getExtension("native_profiler");
        $__internal_8bba763315861d00d4a9611dc391dc5e71f20e52bed520b0452cf811b0ce83f5->enter($__internal_8bba763315861d00d4a9611dc391dc5e71f20e52bed520b0452cf811b0ce83f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8bba763315861d00d4a9611dc391dc5e71f20e52bed520b0452cf811b0ce83f5->leave($__internal_8bba763315861d00d4a9611dc391dc5e71f20e52bed520b0452cf811b0ce83f5_prof);

    }

    // line 13
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_91afca3bf87033c7ca0d8dbe21eb20db2428519bdd8261b4f7fc994f966fe2f7 = $this->env->getExtension("native_profiler");
        $__internal_91afca3bf87033c7ca0d8dbe21eb20db2428519bdd8261b4f7fc994f966fe2f7->enter($__internal_91afca3bf87033c7ca0d8dbe21eb20db2428519bdd8261b4f7fc994f966fe2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

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
        
        $__internal_91afca3bf87033c7ca0d8dbe21eb20db2428519bdd8261b4f7fc994f966fe2f7->leave($__internal_91afca3bf87033c7ca0d8dbe21eb20db2428519bdd8261b4f7fc994f966fe2f7_prof);

    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_82e59bac5b439a350ac55239bdf134a911e6817a8124fa317d85d944f46474cb = $this->env->getExtension("native_profiler");
        $__internal_82e59bac5b439a350ac55239bdf134a911e6817a8124fa317d85d944f46474cb->enter($__internal_82e59bac5b439a350ac55239bdf134a911e6817a8124fa317d85d944f46474cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_82e59bac5b439a350ac55239bdf134a911e6817a8124fa317d85d944f46474cb->leave($__internal_82e59bac5b439a350ac55239bdf134a911e6817a8124fa317d85d944f46474cb_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_79c3c6d3553cbbdb2f07b342e7ee855d4a293985f4012ef2a03ddb54d3201f65 = $this->env->getExtension("native_profiler");
        $__internal_79c3c6d3553cbbdb2f07b342e7ee855d4a293985f4012ef2a03ddb54d3201f65->enter($__internal_79c3c6d3553cbbdb2f07b342e7ee855d4a293985f4012ef2a03ddb54d3201f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 36
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("uci_profesor_homepage");
        echo "\">Inicio</a> | 
        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("uci_profesor_indicecuestionario");
        echo "\">Cuestionarios</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_79c3c6d3553cbbdb2f07b342e7ee855d4a293985f4012ef2a03ddb54d3201f65->leave($__internal_79c3c6d3553cbbdb2f07b342e7ee855d4a293985f4012ef2a03ddb54d3201f65_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_36a60baf8459fddd970b709ddf7464a31029d7e814da03a172cb1e4195b7d29b = $this->env->getExtension("native_profiler");
        $__internal_36a60baf8459fddd970b709ddf7464a31029d7e814da03a172cb1e4195b7d29b->enter($__internal_36a60baf8459fddd970b709ddf7464a31029d7e814da03a172cb1e4195b7d29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_36a60baf8459fddd970b709ddf7464a31029d7e814da03a172cb1e4195b7d29b->leave($__internal_36a60baf8459fddd970b709ddf7464a31029d7e814da03a172cb1e4195b7d29b_prof);

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
        return array (  183 => 51,  179 => 50,  175 => 49,  171 => 48,  167 => 47,  162 => 46,  156 => 45,  146 => 40,  141 => 38,  137 => 37,  134 => 36,  128 => 35,  117 => 30,  109 => 25,  101 => 20,  97 => 18,  91 => 17,  78 => 14,  70 => 13,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
