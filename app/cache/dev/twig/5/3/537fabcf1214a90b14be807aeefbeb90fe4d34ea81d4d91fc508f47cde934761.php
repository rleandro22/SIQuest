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
        $__internal_b89b9ef4d84c80cae0a3518f7a50aa2adbf9564ff9fcbd98d4fb4987635d0fa8 = $this->env->getExtension("native_profiler");
        $__internal_b89b9ef4d84c80cae0a3518f7a50aa2adbf9564ff9fcbd98d4fb4987635d0fa8->enter($__internal_b89b9ef4d84c80cae0a3518f7a50aa2adbf9564ff9fcbd98d4fb4987635d0fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b89b9ef4d84c80cae0a3518f7a50aa2adbf9564ff9fcbd98d4fb4987635d0fa8->leave($__internal_b89b9ef4d84c80cae0a3518f7a50aa2adbf9564ff9fcbd98d4fb4987635d0fa8_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e544f83fecec97e80ffe3819baba5df5ee0ed876d1106270adf7ddcdd60fc294 = $this->env->getExtension("native_profiler");
        $__internal_e544f83fecec97e80ffe3819baba5df5ee0ed876d1106270adf7ddcdd60fc294->enter($__internal_e544f83fecec97e80ffe3819baba5df5ee0ed876d1106270adf7ddcdd60fc294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e544f83fecec97e80ffe3819baba5df5ee0ed876d1106270adf7ddcdd60fc294->leave($__internal_e544f83fecec97e80ffe3819baba5df5ee0ed876d1106270adf7ddcdd60fc294_prof);

    }

    // line 13
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_410fbe9b561d67194abb11a257ae49ee2afdbdc9a4ffb7ef81a845b40736d656 = $this->env->getExtension("native_profiler");
        $__internal_410fbe9b561d67194abb11a257ae49ee2afdbdc9a4ffb7ef81a845b40736d656->enter($__internal_410fbe9b561d67194abb11a257ae49ee2afdbdc9a4ffb7ef81a845b40736d656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

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
        
        $__internal_410fbe9b561d67194abb11a257ae49ee2afdbdc9a4ffb7ef81a845b40736d656->leave($__internal_410fbe9b561d67194abb11a257ae49ee2afdbdc9a4ffb7ef81a845b40736d656_prof);

    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b190c674b836d649e069de38fdaf3e489e2a963ce84cd060bcae63aeccdfbb8f = $this->env->getExtension("native_profiler");
        $__internal_b190c674b836d649e069de38fdaf3e489e2a963ce84cd060bcae63aeccdfbb8f->enter($__internal_b190c674b836d649e069de38fdaf3e489e2a963ce84cd060bcae63aeccdfbb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_b190c674b836d649e069de38fdaf3e489e2a963ce84cd060bcae63aeccdfbb8f->leave($__internal_b190c674b836d649e069de38fdaf3e489e2a963ce84cd060bcae63aeccdfbb8f_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_2f4372f7170dcb787ae22578c095c83804a932603b53b5a313cfdd2147e127bc = $this->env->getExtension("native_profiler");
        $__internal_2f4372f7170dcb787ae22578c095c83804a932603b53b5a313cfdd2147e127bc->enter($__internal_2f4372f7170dcb787ae22578c095c83804a932603b53b5a313cfdd2147e127bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_2f4372f7170dcb787ae22578c095c83804a932603b53b5a313cfdd2147e127bc->leave($__internal_2f4372f7170dcb787ae22578c095c83804a932603b53b5a313cfdd2147e127bc_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d14d03ca197abb12adf3bbce1c3a33c09856ec97a14660db6db39e30e3b08f5 = $this->env->getExtension("native_profiler");
        $__internal_6d14d03ca197abb12adf3bbce1c3a33c09856ec97a14660db6db39e30e3b08f5->enter($__internal_6d14d03ca197abb12adf3bbce1c3a33c09856ec97a14660db6db39e30e3b08f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6d14d03ca197abb12adf3bbce1c3a33c09856ec97a14660db6db39e30e3b08f5->leave($__internal_6d14d03ca197abb12adf3bbce1c3a33c09856ec97a14660db6db39e30e3b08f5_prof);

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
