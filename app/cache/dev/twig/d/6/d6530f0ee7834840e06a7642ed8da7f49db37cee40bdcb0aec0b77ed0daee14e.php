<?php

/* UciAsistenteAcademicaBundle:Vista:index.html.twig */
class __TwigTemplate_d6530f0ee7834840e06a7642ed8da7f49db37cee40bdcb0aec0b77ed0daee14e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAsistenteAcademicaBundle::base.html.twig", "UciAsistenteAcademicaBundle:Vista:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAsistenteAcademicaBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ecb57ed01437d11b68f9d93b92c1973c12a3c3da20ec62b3abf1a8d076cf4ca = $this->env->getExtension("native_profiler");
        $__internal_1ecb57ed01437d11b68f9d93b92c1973c12a3c3da20ec62b3abf1a8d076cf4ca->enter($__internal_1ecb57ed01437d11b68f9d93b92c1973c12a3c3da20ec62b3abf1a8d076cf4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ecb57ed01437d11b68f9d93b92c1973c12a3c3da20ec62b3abf1a8d076cf4ca->leave($__internal_1ecb57ed01437d11b68f9d93b92c1973c12a3c3da20ec62b3abf1a8d076cf4ca_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_8f54256a358f8ba27914b03d7300d91e0f7a8f7e0c52cf57935636df30723a67 = $this->env->getExtension("native_profiler");
        $__internal_8f54256a358f8ba27914b03d7300d91e0f7a8f7e0c52cf57935636df30723a67->enter($__internal_8f54256a358f8ba27914b03d7300d91e0f7a8f7e0c52cf57935636df30723a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <!-- Header -->
    <header id=\"head\">
        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"lead\">Escuela Global de Administración de Proyectos</h1>
                <p class=\"tagline\">Sistema de generación de cuestionarios para la GSPM</p>
                <p><a href=\"http://www.uci.ac.cr/\" class=\"btn btn-action btn-lg\" role=\"button\">Página UCI</a><a href=\"http://www.ucipfg.com/\" class=\"btn btn-default btn-lg\" role=\"button\">Campus virtual</a> </p>
            </div>
        </div>
    </header>
    <!-- /Header -->
";
        
        $__internal_8f54256a358f8ba27914b03d7300d91e0f7a8f7e0c52cf57935636df30723a67->leave($__internal_8f54256a358f8ba27914b03d7300d91e0f7a8f7e0c52cf57935636df30723a67_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0104c3d8728e11ab73970cc60a858fa99ff5b8a6a83d6f0681abf70dbaf250d = $this->env->getExtension("native_profiler");
        $__internal_c0104c3d8728e11ab73970cc60a858fa99ff5b8a6a83d6f0681abf70dbaf250d->enter($__internal_c0104c3d8728e11ab73970cc60a858fa99ff5b8a6a83d6f0681abf70dbaf250d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
    <!-- Intro -->
    <div class=\"container text-center\">
        <br> <br>
        <h2 class=\"thin\">Bienvenido Asistente ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array()), "html", null, true);
        echo "</h2>
        <p class=\"text-muted\">
            A continuación se le presentan secciones importantes que le pueden interesar.
        </p>
    </div>
    <!-- /Intro-->

    <!-- Highlights - jumbotron -->
    <div class=\"jumbotron top-space\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-book fa-5\"></i><a href=\"\">Mantenimiento de Libros</a></h4></div>
                    <div class=\"h-body text-center\">
                        <p>Desde aquí puede gestionar todos los datos de los libros.</p>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-users fa-5\"></i><a href=\"\">Mantenimiento de Usuarios</a></h4></div>
                    <div class=\"h-body text-center\">
                        <p>Desde aquí puede gestionar todos los datos de los usuarios que acceden a la aplicación.</p>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-question fa-5\"></i><a href=\"\">Mantenimiento de Preguntas</a></h4></div>
                    <div class=\"h-body text-center\">
                        <p>Desde aquí puede gestionar todos los datos de las preguntas almacenadas en la base de datos.</p>
                    </div>
                </div>
            </div> <!-- /row  -->

        </div>
    </div>
    <!-- /Highlights -->



";
        
        $__internal_c0104c3d8728e11ab73970cc60a858fa99ff5b8a6a83d6f0681abf70dbaf250d->leave($__internal_c0104c3d8728e11ab73970cc60a858fa99ff5b8a6a83d6f0681abf70dbaf250d_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:Vista:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  65 => 18,  59 => 17,  41 => 4,  35 => 3,  11 => 1,);
    }
}
