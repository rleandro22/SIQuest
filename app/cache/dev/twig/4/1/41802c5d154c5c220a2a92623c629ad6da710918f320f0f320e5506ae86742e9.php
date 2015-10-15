<?php

/* UciAdministradorBundle:Vista:index.html.twig */
class __TwigTemplate_41802c5d154c5c220a2a92623c629ad6da710918f320f0f320e5506ae86742e9 extends Twig_Template
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
        $__internal_a4f6822a9d977d1428c73e577268f5511b76531a669c95112cbb58c5f7c96511 = $this->env->getExtension("native_profiler");
        $__internal_a4f6822a9d977d1428c73e577268f5511b76531a669c95112cbb58c5f7c96511->enter($__internal_a4f6822a9d977d1428c73e577268f5511b76531a669c95112cbb58c5f7c96511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4f6822a9d977d1428c73e577268f5511b76531a669c95112cbb58c5f7c96511->leave($__internal_a4f6822a9d977d1428c73e577268f5511b76531a669c95112cbb58c5f7c96511_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d1ce68fae103fbf0649e815dbcafd6284b22856a783cd6bfe2c5bc463f81d8fd = $this->env->getExtension("native_profiler");
        $__internal_d1ce68fae103fbf0649e815dbcafd6284b22856a783cd6bfe2c5bc463f81d8fd->enter($__internal_d1ce68fae103fbf0649e815dbcafd6284b22856a783cd6bfe2c5bc463f81d8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_d1ce68fae103fbf0649e815dbcafd6284b22856a783cd6bfe2c5bc463f81d8fd->leave($__internal_d1ce68fae103fbf0649e815dbcafd6284b22856a783cd6bfe2c5bc463f81d8fd_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f9db22171bd073e3890f08b119d45cdc52c707b7339d076e96773c520f91824 = $this->env->getExtension("native_profiler");
        $__internal_4f9db22171bd073e3890f08b119d45cdc52c707b7339d076e96773c520f91824->enter($__internal_4f9db22171bd073e3890f08b119d45cdc52c707b7339d076e96773c520f91824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4f9db22171bd073e3890f08b119d45cdc52c707b7339d076e96773c520f91824->leave($__internal_4f9db22171bd073e3890f08b119d45cdc52c707b7339d076e96773c520f91824_prof);

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