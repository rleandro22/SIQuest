<?php

/* UciProfesorBundle:Vista:index.html.twig */
class __TwigTemplate_bcc553764c83866ee08deec04674f79f57646179f137cc0c02ea7c5194f8a1c0 extends Twig_Template
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
        $__internal_f4a29fc47f24fe177d516157edb9c344308eec5bc3f5afa36f110df04e19bbff = $this->env->getExtension("native_profiler");
        $__internal_f4a29fc47f24fe177d516157edb9c344308eec5bc3f5afa36f110df04e19bbff->enter($__internal_f4a29fc47f24fe177d516157edb9c344308eec5bc3f5afa36f110df04e19bbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4a29fc47f24fe177d516157edb9c344308eec5bc3f5afa36f110df04e19bbff->leave($__internal_f4a29fc47f24fe177d516157edb9c344308eec5bc3f5afa36f110df04e19bbff_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_11aa0ffb9801411ed036678854b628efdfdc1244abc27e5ff0924bdea5c5c03e = $this->env->getExtension("native_profiler");
        $__internal_11aa0ffb9801411ed036678854b628efdfdc1244abc27e5ff0924bdea5c5c03e->enter($__internal_11aa0ffb9801411ed036678854b628efdfdc1244abc27e5ff0924bdea5c5c03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_11aa0ffb9801411ed036678854b628efdfdc1244abc27e5ff0924bdea5c5c03e->leave($__internal_11aa0ffb9801411ed036678854b628efdfdc1244abc27e5ff0924bdea5c5c03e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_e78cd4cb4d7ea0ded01865f56cae0f4379fe46775287d015247d485d9a8be318 = $this->env->getExtension("native_profiler");
        $__internal_e78cd4cb4d7ea0ded01865f56cae0f4379fe46775287d015247d485d9a8be318->enter($__internal_e78cd4cb4d7ea0ded01865f56cae0f4379fe46775287d015247d485d9a8be318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e78cd4cb4d7ea0ded01865f56cae0f4379fe46775287d015247d485d9a8be318->leave($__internal_e78cd4cb4d7ea0ded01865f56cae0f4379fe46775287d015247d485d9a8be318_prof);

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
