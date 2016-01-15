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
        $__internal_ffccba23ca1d1d56bc3058557201a6996780fe09a16417cd1f19d156eb00bb22 = $this->env->getExtension("native_profiler");
        $__internal_ffccba23ca1d1d56bc3058557201a6996780fe09a16417cd1f19d156eb00bb22->enter($__internal_ffccba23ca1d1d56bc3058557201a6996780fe09a16417cd1f19d156eb00bb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffccba23ca1d1d56bc3058557201a6996780fe09a16417cd1f19d156eb00bb22->leave($__internal_ffccba23ca1d1d56bc3058557201a6996780fe09a16417cd1f19d156eb00bb22_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_ffca1868add6c147d2c739b1e3e7cb6d796d68b7dee20822788db9c394f52a0e = $this->env->getExtension("native_profiler");
        $__internal_ffca1868add6c147d2c739b1e3e7cb6d796d68b7dee20822788db9c394f52a0e->enter($__internal_ffca1868add6c147d2c739b1e3e7cb6d796d68b7dee20822788db9c394f52a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_ffca1868add6c147d2c739b1e3e7cb6d796d68b7dee20822788db9c394f52a0e->leave($__internal_ffca1868add6c147d2c739b1e3e7cb6d796d68b7dee20822788db9c394f52a0e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_a73f2b89c96aec55cf49a79336131a2662e90a4c012f303e0f39be9c9ce8be58 = $this->env->getExtension("native_profiler");
        $__internal_a73f2b89c96aec55cf49a79336131a2662e90a4c012f303e0f39be9c9ce8be58->enter($__internal_a73f2b89c96aec55cf49a79336131a2662e90a4c012f303e0f39be9c9ce8be58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
    <!-- Intro -->
    <div class=\"container text-center\">
        <br> <br>
        <h2 class=\"thin\">Bienvenido ";
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
                    <div class=\"h-caption\"><h4><i class=\"fa fa-check fa-5\"></i><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicesolicitudes");
        echo "\">Mantenimiento de Solicitudes</a></h4></div>
                    <div class=\"h-body text-center\">
                        <p>Desde aquí puede ver las solicitudes de cuestionarios.</p>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-book fa-5\"></i><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_registrarcuestionario");
        echo "\">Registrar Cuestionario</a></h4></div>
                    <div class=\"h-body text-center\">
                        <p>Desde aquí puede registrar un nuevo cuestionario.</p>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-bookmark-o fa-5\"></i><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicecuestionario");
        echo "\">Mantenimiento de Cuestionarios</a></h4></div>
                    <div class=\"h-body text-center\">
                        <p>Desde aquí puede ver todos los cuestionarios.</p>
                    </div>
                </div>
            </div> <!-- /row  -->

        </div>
    </div>
    <!-- /Highlights -->



";
        
        $__internal_a73f2b89c96aec55cf49a79336131a2662e90a4c012f303e0f39be9c9ce8be58->leave($__internal_a73f2b89c96aec55cf49a79336131a2662e90a4c012f303e0f39be9c9ce8be58_prof);

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
        return array (  107 => 47,  98 => 41,  89 => 35,  71 => 22,  65 => 18,  59 => 17,  41 => 4,  35 => 3,  11 => 1,);
    }
}
