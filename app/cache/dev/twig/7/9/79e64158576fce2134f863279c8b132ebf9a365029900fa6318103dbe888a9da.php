<?php

/* UciAdministradorBundle:Vista:index.html.twig */
class __TwigTemplate_79e64158576fce2134f863279c8b132ebf9a365029900fa6318103dbe888a9da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:Vista:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc3a40bee71942365096d4db77b1e050df17b071db250fb14cebe39449f62ea1 = $this->env->getExtension("native_profiler");
        $__internal_fc3a40bee71942365096d4db77b1e050df17b071db250fb14cebe39449f62ea1->enter($__internal_fc3a40bee71942365096d4db77b1e050df17b071db250fb14cebe39449f62ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc3a40bee71942365096d4db77b1e050df17b071db250fb14cebe39449f62ea1->leave($__internal_fc3a40bee71942365096d4db77b1e050df17b071db250fb14cebe39449f62ea1_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_278539b0bbc3e2d6021962dffe3c9f583794ef511b77733096d858aab1ced9ff = $this->env->getExtension("native_profiler");
        $__internal_278539b0bbc3e2d6021962dffe3c9f583794ef511b77733096d858aab1ced9ff->enter($__internal_278539b0bbc3e2d6021962dffe3c9f583794ef511b77733096d858aab1ced9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_278539b0bbc3e2d6021962dffe3c9f583794ef511b77733096d858aab1ced9ff->leave($__internal_278539b0bbc3e2d6021962dffe3c9f583794ef511b77733096d858aab1ced9ff_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a83f866a9fcff384ced4e477ab2f43354e3351921b4c82186e4da0ca2f7b6d1 = $this->env->getExtension("native_profiler");
        $__internal_7a83f866a9fcff384ced4e477ab2f43354e3351921b4c82186e4da0ca2f7b6d1->enter($__internal_7a83f866a9fcff384ced4e477ab2f43354e3351921b4c82186e4da0ca2f7b6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
    <!-- Intro -->
    <div class=\"container text-center\">
        <br> <br>
        <h2 class=\"thin\">Bienvenido Decano ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
                    <div class=\"h-caption\"><h4><i class=\"fa fa-book fa-5\"></i><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Mantenimiento de Libros</a></h4></div>
                    <div class=\"h-body text-center\">
                        <p>Desde aquí puede gestionar todos los datos de los libros.</p>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-users fa-5\"></i><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Mantenimiento de Usuarios</a></h4></div>
                    <div class=\"h-body text-center\">
                        <p>Desde aquí puede gestionar todos los datos de los usuarios que acceden a la aplicación.</p>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-question fa-5\"></i><a href=\"#\">Mantenimiento de Preguntas</a></h4></div>
                    <div class=\"h-body text-center\">
                        <p>Desde aquí puede gestionar todos los datos de las preguntas almacenadas en la base de datos.</p>
                    </div>
                </div>
            </div> <!-- /row  -->

        </div>
    </div>
    <!-- /Highlights -->



";
        
        $__internal_7a83f866a9fcff384ced4e477ab2f43354e3351921b4c82186e4da0ca2f7b6d1->leave($__internal_7a83f866a9fcff384ced4e477ab2f43354e3351921b4c82186e4da0ca2f7b6d1_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Vista:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 41,  87 => 35,  71 => 22,  65 => 18,  59 => 17,  41 => 4,  35 => 3,  11 => 1,);
    }
}
