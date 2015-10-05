<?php

/* UciAdministradorBundle:Vista:index.html.twig */
class __TwigTemplate_a4ccdd125df69da512a4a25aaf9ffc9eff5f40ffcc6eece069680f6c141a9047 extends Twig_Template
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
        $__internal_a58a6e81f43760a73db3d3f9c5006004b1879b25f97567902f60a0ffaab80d21 = $this->env->getExtension("native_profiler");
        $__internal_a58a6e81f43760a73db3d3f9c5006004b1879b25f97567902f60a0ffaab80d21->enter($__internal_a58a6e81f43760a73db3d3f9c5006004b1879b25f97567902f60a0ffaab80d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a58a6e81f43760a73db3d3f9c5006004b1879b25f97567902f60a0ffaab80d21->leave($__internal_a58a6e81f43760a73db3d3f9c5006004b1879b25f97567902f60a0ffaab80d21_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_816948ab1ee8bfd4cacd069ca6097b40e2461cf9c113bad94fea4599766284d3 = $this->env->getExtension("native_profiler");
        $__internal_816948ab1ee8bfd4cacd069ca6097b40e2461cf9c113bad94fea4599766284d3->enter($__internal_816948ab1ee8bfd4cacd069ca6097b40e2461cf9c113bad94fea4599766284d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_816948ab1ee8bfd4cacd069ca6097b40e2461cf9c113bad94fea4599766284d3->leave($__internal_816948ab1ee8bfd4cacd069ca6097b40e2461cf9c113bad94fea4599766284d3_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_3072b7e946ff3f1a710948f8067b4042a015570559d1739a6c7e1f0e468ddcf2 = $this->env->getExtension("native_profiler");
        $__internal_3072b7e946ff3f1a710948f8067b4042a015570559d1739a6c7e1f0e468ddcf2->enter($__internal_3072b7e946ff3f1a710948f8067b4042a015570559d1739a6c7e1f0e468ddcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <div class=\"h-caption\"><h4><i class=\"fa fa-cogs fa-5\"></i><a href=\"#\">Mantenimiento de Libros</a></h4></div>
                    <div class=\"h-body text-center\">
                        <p>Desde aquí puede gestionar todos los datos de los libros.</p>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-flash fa-5\"></i><a href=\"#\">Mantenimiento de Usuarios</a></h4></div>
                    <div class=\"h-body text-center\">
                        <p>Desde aquí puede gestionar todos los datos de los usuarios que acceden a la aplicación.</p>
                    </div>
                </div>
                <div class=\"col-md-4 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-globe fa-5\"></i><a href=\"#\">Mantenimiento de Preguntas</a></h4></div>
                    <div class=\"h-body text-center\">
                        <p>Desde aquí puede gestionar todos los datos de las preguntas almacenadas en la base de datos.</p>
                    </div>
                </div>
            </div> <!-- /row  -->

        </div>
    </div>
    <!-- /Highlights -->



";
        
        $__internal_3072b7e946ff3f1a710948f8067b4042a015570559d1739a6c7e1f0e468ddcf2->leave($__internal_3072b7e946ff3f1a710948f8067b4042a015570559d1739a6c7e1f0e468ddcf2_prof);

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
        return array (  71 => 22,  65 => 18,  59 => 17,  41 => 4,  35 => 3,  11 => 1,);
    }
}
