<?php

/* UciProfesorBundle:Vista:index.html.twig */
class __TwigTemplate_14df50896ca2549d28d1e638afd99ebbdace23ed18c32b36f4641109544797e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciProfesorBundle::base.html.twig", "UciProfesorBundle:Vista:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciProfesorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92dd66cc36cb6f6447414479291b7cf34434e235bafd246a6059761d933c74ae = $this->env->getExtension("native_profiler");
        $__internal_92dd66cc36cb6f6447414479291b7cf34434e235bafd246a6059761d933c74ae->enter($__internal_92dd66cc36cb6f6447414479291b7cf34434e235bafd246a6059761d933c74ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92dd66cc36cb6f6447414479291b7cf34434e235bafd246a6059761d933c74ae->leave($__internal_92dd66cc36cb6f6447414479291b7cf34434e235bafd246a6059761d933c74ae_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_8d1e011f25d81625e62112a92c3e426594b93711074cffb83e7cf0d7b5adefe3 = $this->env->getExtension("native_profiler");
        $__internal_8d1e011f25d81625e62112a92c3e426594b93711074cffb83e7cf0d7b5adefe3->enter($__internal_8d1e011f25d81625e62112a92c3e426594b93711074cffb83e7cf0d7b5adefe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_8d1e011f25d81625e62112a92c3e426594b93711074cffb83e7cf0d7b5adefe3->leave($__internal_8d1e011f25d81625e62112a92c3e426594b93711074cffb83e7cf0d7b5adefe3_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c9b053957ea72ccd71026de1a5d82c540d216544611d53f98b2e3683f71846c = $this->env->getExtension("native_profiler");
        $__internal_2c9b053957ea72ccd71026de1a5d82c540d216544611d53f98b2e3683f71846c->enter($__internal_2c9b053957ea72ccd71026de1a5d82c540d216544611d53f98b2e3683f71846c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
    <!-- Intro -->
    <div class=\"container text-center\">
        <br> <br>
        <h2 class=\"thin\">Bienvenido Profesor ";
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
        
        $__internal_2c9b053957ea72ccd71026de1a5d82c540d216544611d53f98b2e3683f71846c->leave($__internal_2c9b053957ea72ccd71026de1a5d82c540d216544611d53f98b2e3683f71846c_prof);

    }

    public function getTemplateName()
    {
        return "UciProfesorBundle:Vista:index.html.twig";
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
