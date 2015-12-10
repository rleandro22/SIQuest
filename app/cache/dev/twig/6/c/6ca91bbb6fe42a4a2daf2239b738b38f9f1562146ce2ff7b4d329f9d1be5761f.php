<?php

/* UciAdministradorBundle:Vista:index.html.twig */
class __TwigTemplate_6ca91bbb6fe42a4a2daf2239b738b38f9f1562146ce2ff7b4d329f9d1be5761f extends Twig_Template
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
        $__internal_73e4d4553811f9fccd890d9b4fc2cbc3519ba38a765570985b3fa41ff8bcea25 = $this->env->getExtension("native_profiler");
        $__internal_73e4d4553811f9fccd890d9b4fc2cbc3519ba38a765570985b3fa41ff8bcea25->enter($__internal_73e4d4553811f9fccd890d9b4fc2cbc3519ba38a765570985b3fa41ff8bcea25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73e4d4553811f9fccd890d9b4fc2cbc3519ba38a765570985b3fa41ff8bcea25->leave($__internal_73e4d4553811f9fccd890d9b4fc2cbc3519ba38a765570985b3fa41ff8bcea25_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_26e6f2525150956b051493bc5573c6e39078600f55c8cffa20eff4ccd0415d1f = $this->env->getExtension("native_profiler");
        $__internal_26e6f2525150956b051493bc5573c6e39078600f55c8cffa20eff4ccd0415d1f->enter($__internal_26e6f2525150956b051493bc5573c6e39078600f55c8cffa20eff4ccd0415d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_26e6f2525150956b051493bc5573c6e39078600f55c8cffa20eff4ccd0415d1f->leave($__internal_26e6f2525150956b051493bc5573c6e39078600f55c8cffa20eff4ccd0415d1f_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ed03080e4223325bf0c1ec2c49f82f827ff34da0c5432f5b272c3b32a54e093 = $this->env->getExtension("native_profiler");
        $__internal_8ed03080e4223325bf0c1ec2c49f82f827ff34da0c5432f5b272c3b32a54e093->enter($__internal_8ed03080e4223325bf0c1ec2c49f82f827ff34da0c5432f5b272c3b32a54e093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8ed03080e4223325bf0c1ec2c49f82f827ff34da0c5432f5b272c3b32a54e093->leave($__internal_8ed03080e4223325bf0c1ec2c49f82f827ff34da0c5432f5b272c3b32a54e093_prof);

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
