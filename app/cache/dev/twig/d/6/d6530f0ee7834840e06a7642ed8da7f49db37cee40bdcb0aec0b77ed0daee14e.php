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
        $__internal_c417b3a3f91357b92538fb3eed30a6d7acedfa7d0236847b0ad7ea42f21c48a0 = $this->env->getExtension("native_profiler");
        $__internal_c417b3a3f91357b92538fb3eed30a6d7acedfa7d0236847b0ad7ea42f21c48a0->enter($__internal_c417b3a3f91357b92538fb3eed30a6d7acedfa7d0236847b0ad7ea42f21c48a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c417b3a3f91357b92538fb3eed30a6d7acedfa7d0236847b0ad7ea42f21c48a0->leave($__internal_c417b3a3f91357b92538fb3eed30a6d7acedfa7d0236847b0ad7ea42f21c48a0_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_91b33eba8f185e0c4df5bc8ddab8f6a868a288c617930d73d405249358f1ce3f = $this->env->getExtension("native_profiler");
        $__internal_91b33eba8f185e0c4df5bc8ddab8f6a868a288c617930d73d405249358f1ce3f->enter($__internal_91b33eba8f185e0c4df5bc8ddab8f6a868a288c617930d73d405249358f1ce3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_91b33eba8f185e0c4df5bc8ddab8f6a868a288c617930d73d405249358f1ce3f->leave($__internal_91b33eba8f185e0c4df5bc8ddab8f6a868a288c617930d73d405249358f1ce3f_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c1dd970aa6b6d1225b64f186c10338e6f4b8c21529a6c8298eff059aef6fe99 = $this->env->getExtension("native_profiler");
        $__internal_4c1dd970aa6b6d1225b64f186c10338e6f4b8c21529a6c8298eff059aef6fe99->enter($__internal_4c1dd970aa6b6d1225b64f186c10338e6f4b8c21529a6c8298eff059aef6fe99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4c1dd970aa6b6d1225b64f186c10338e6f4b8c21529a6c8298eff059aef6fe99->leave($__internal_4c1dd970aa6b6d1225b64f186c10338e6f4b8c21529a6c8298eff059aef6fe99_prof);

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
