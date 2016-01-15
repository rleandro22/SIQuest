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
        $__internal_d2da9d6fce27e6c3c436ab513e9a52e18a2327541a9491ae324d61268c54b389 = $this->env->getExtension("native_profiler");
        $__internal_d2da9d6fce27e6c3c436ab513e9a52e18a2327541a9491ae324d61268c54b389->enter($__internal_d2da9d6fce27e6c3c436ab513e9a52e18a2327541a9491ae324d61268c54b389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2da9d6fce27e6c3c436ab513e9a52e18a2327541a9491ae324d61268c54b389->leave($__internal_d2da9d6fce27e6c3c436ab513e9a52e18a2327541a9491ae324d61268c54b389_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_30822525f4ba05e52f462a101b16b8eb4a2f8fab4489db17c30ab12bd7931f52 = $this->env->getExtension("native_profiler");
        $__internal_30822525f4ba05e52f462a101b16b8eb4a2f8fab4489db17c30ab12bd7931f52->enter($__internal_30822525f4ba05e52f462a101b16b8eb4a2f8fab4489db17c30ab12bd7931f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_30822525f4ba05e52f462a101b16b8eb4a2f8fab4489db17c30ab12bd7931f52->leave($__internal_30822525f4ba05e52f462a101b16b8eb4a2f8fab4489db17c30ab12bd7931f52_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_28d2ddd3e5a3fce9a16bd24be555ed000b9eb7e83af375776c2f2aa85b7141c0 = $this->env->getExtension("native_profiler");
        $__internal_28d2ddd3e5a3fce9a16bd24be555ed000b9eb7e83af375776c2f2aa85b7141c0->enter($__internal_28d2ddd3e5a3fce9a16bd24be555ed000b9eb7e83af375776c2f2aa85b7141c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_28d2ddd3e5a3fce9a16bd24be555ed000b9eb7e83af375776c2f2aa85b7141c0->leave($__internal_28d2ddd3e5a3fce9a16bd24be555ed000b9eb7e83af375776c2f2aa85b7141c0_prof);

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
