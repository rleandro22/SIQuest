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
        $__internal_353131f9668f26b0456ca3b5f7857c73bed15f486a678095731bdfc8e730c413 = $this->env->getExtension("native_profiler");
        $__internal_353131f9668f26b0456ca3b5f7857c73bed15f486a678095731bdfc8e730c413->enter($__internal_353131f9668f26b0456ca3b5f7857c73bed15f486a678095731bdfc8e730c413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_353131f9668f26b0456ca3b5f7857c73bed15f486a678095731bdfc8e730c413->leave($__internal_353131f9668f26b0456ca3b5f7857c73bed15f486a678095731bdfc8e730c413_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a37f5a6bb86f1938382504fa53e0daa9d08c0f7f2a57a41fdcb6b6428dd3e19 = $this->env->getExtension("native_profiler");
        $__internal_5a37f5a6bb86f1938382504fa53e0daa9d08c0f7f2a57a41fdcb6b6428dd3e19->enter($__internal_5a37f5a6bb86f1938382504fa53e0daa9d08c0f7f2a57a41fdcb6b6428dd3e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5a37f5a6bb86f1938382504fa53e0daa9d08c0f7f2a57a41fdcb6b6428dd3e19->leave($__internal_5a37f5a6bb86f1938382504fa53e0daa9d08c0f7f2a57a41fdcb6b6428dd3e19_prof);

    }

    // line 13
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_e0515b25bdb3b3fb9362bbc943bddd85a0361c2bd80843713a7d1bc497ad3685 = $this->env->getExtension("native_profiler");
        $__internal_e0515b25bdb3b3fb9362bbc943bddd85a0361c2bd80843713a7d1bc497ad3685->enter($__internal_e0515b25bdb3b3fb9362bbc943bddd85a0361c2bd80843713a7d1bc497ad3685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

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
        
        $__internal_e0515b25bdb3b3fb9362bbc943bddd85a0361c2bd80843713a7d1bc497ad3685->leave($__internal_e0515b25bdb3b3fb9362bbc943bddd85a0361c2bd80843713a7d1bc497ad3685_prof);

    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_0cbfbbfa93529d3f9b9aac939e5c0ca706d392780fdb3db95bcc92d7f88e72d8 = $this->env->getExtension("native_profiler");
        $__internal_0cbfbbfa93529d3f9b9aac939e5c0ca706d392780fdb3db95bcc92d7f88e72d8->enter($__internal_0cbfbbfa93529d3f9b9aac939e5c0ca706d392780fdb3db95bcc92d7f88e72d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 18
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("uci_profesor_homepage");
        echo "\">Inicio</a></li>
            <li>    <a href=\"\" id=\"notificationLink\">Solicitudes</a>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("uci_profesor_indicecuestionario");
        echo "\">Mantenimiento Cuestionarios</a></li>
                </ul>
            </li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li>
                <a class=\"btn\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_0cbfbbfa93529d3f9b9aac939e5c0ca706d392780fdb3db95bcc92d7f88e72d8->leave($__internal_0cbfbbfa93529d3f9b9aac939e5c0ca706d392780fdb3db95bcc92d7f88e72d8_prof);

    }

    // line 36
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_6cb135263bbb06883025b9b7da0ac648831015d1982fbd584516d52684b1dd8b = $this->env->getExtension("native_profiler");
        $__internal_6cb135263bbb06883025b9b7da0ac648831015d1982fbd584516d52684b1dd8b->enter($__internal_6cb135263bbb06883025b9b7da0ac648831015d1982fbd584516d52684b1dd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 37
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a> | 
        <a href=\"\">Solicitudes</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_6cb135263bbb06883025b9b7da0ac648831015d1982fbd584516d52684b1dd8b->leave($__internal_6cb135263bbb06883025b9b7da0ac648831015d1982fbd584516d52684b1dd8b_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2d661f617d788132db4810babc256dba65586184e2f2b4c3c742c26695bf052 = $this->env->getExtension("native_profiler");
        $__internal_f2d661f617d788132db4810babc256dba65586184e2f2b4c3c742c26695bf052->enter($__internal_f2d661f617d788132db4810babc256dba65586184e2f2b4c3c742c26695bf052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_f2d661f617d788132db4810babc256dba65586184e2f2b4c3c742c26695bf052->leave($__internal_f2d661f617d788132db4810babc256dba65586184e2f2b4c3c742c26695bf052_prof);

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
        return array (  181 => 52,  177 => 51,  173 => 50,  169 => 49,  165 => 48,  160 => 47,  154 => 46,  144 => 41,  138 => 38,  135 => 37,  129 => 36,  118 => 31,  110 => 26,  101 => 20,  97 => 18,  91 => 17,  78 => 14,  70 => 13,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
