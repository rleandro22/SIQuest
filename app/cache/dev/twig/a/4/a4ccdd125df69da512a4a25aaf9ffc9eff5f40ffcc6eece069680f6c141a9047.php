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
        $__internal_0a0adef3e6e94a96c5f750fa478b560967d2b19c24513f474fa6355d72d799e6 = $this->env->getExtension("native_profiler");
        $__internal_0a0adef3e6e94a96c5f750fa478b560967d2b19c24513f474fa6355d72d799e6->enter($__internal_0a0adef3e6e94a96c5f750fa478b560967d2b19c24513f474fa6355d72d799e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a0adef3e6e94a96c5f750fa478b560967d2b19c24513f474fa6355d72d799e6->leave($__internal_0a0adef3e6e94a96c5f750fa478b560967d2b19c24513f474fa6355d72d799e6_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_ebd4572fa908ca4670d39026721872ca5a65425b984e9f881cc7cc22c0eb6796 = $this->env->getExtension("native_profiler");
        $__internal_ebd4572fa908ca4670d39026721872ca5a65425b984e9f881cc7cc22c0eb6796->enter($__internal_ebd4572fa908ca4670d39026721872ca5a65425b984e9f881cc7cc22c0eb6796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_ebd4572fa908ca4670d39026721872ca5a65425b984e9f881cc7cc22c0eb6796->leave($__internal_ebd4572fa908ca4670d39026721872ca5a65425b984e9f881cc7cc22c0eb6796_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_59c452168586c5f0ed308ebe5e0c7cb2f52190c8ab8fc5462d3846b13fa3a82a = $this->env->getExtension("native_profiler");
        $__internal_59c452168586c5f0ed308ebe5e0c7cb2f52190c8ab8fc5462d3846b13fa3a82a->enter($__internal_59c452168586c5f0ed308ebe5e0c7cb2f52190c8ab8fc5462d3846b13fa3a82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59c452168586c5f0ed308ebe5e0c7cb2f52190c8ab8fc5462d3846b13fa3a82a->leave($__internal_59c452168586c5f0ed308ebe5e0c7cb2f52190c8ab8fc5462d3846b13fa3a82a_prof);

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
