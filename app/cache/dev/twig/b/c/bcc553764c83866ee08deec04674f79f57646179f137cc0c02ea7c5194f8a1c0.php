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
        $__internal_94e2d5a1043ed573e6650945a1037d6644dfc17728b814f6f839a464bafd5695 = $this->env->getExtension("native_profiler");
        $__internal_94e2d5a1043ed573e6650945a1037d6644dfc17728b814f6f839a464bafd5695->enter($__internal_94e2d5a1043ed573e6650945a1037d6644dfc17728b814f6f839a464bafd5695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94e2d5a1043ed573e6650945a1037d6644dfc17728b814f6f839a464bafd5695->leave($__internal_94e2d5a1043ed573e6650945a1037d6644dfc17728b814f6f839a464bafd5695_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_b3b8000e7529ea0000ae15a4a2f4f3da38af97bc918b5a01ef5bb67821842fad = $this->env->getExtension("native_profiler");
        $__internal_b3b8000e7529ea0000ae15a4a2f4f3da38af97bc918b5a01ef5bb67821842fad->enter($__internal_b3b8000e7529ea0000ae15a4a2f4f3da38af97bc918b5a01ef5bb67821842fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_b3b8000e7529ea0000ae15a4a2f4f3da38af97bc918b5a01ef5bb67821842fad->leave($__internal_b3b8000e7529ea0000ae15a4a2f4f3da38af97bc918b5a01ef5bb67821842fad_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_3121e1727cd1e1357bd308cd420904aee9ef3b3cbb5d61c01a8f73885914724d = $this->env->getExtension("native_profiler");
        $__internal_3121e1727cd1e1357bd308cd420904aee9ef3b3cbb5d61c01a8f73885914724d->enter($__internal_3121e1727cd1e1357bd308cd420904aee9ef3b3cbb5d61c01a8f73885914724d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <div class=\"col-md-12 col-sm-12 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-book fa-5\"></i><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("uci_profesor_indicecuestionario");
        echo "\">Ver Cuestionarios</a></h4></div>
                    <div class=\"h-body text-center\">
                        <p>Desde aquí puede ver los cuestionarios de sus cursos.</p>
                    </div>
                </div>
            </div> <!-- /row  -->

        </div>
    </div>
    <!-- /Highlights -->



";
        
        $__internal_3121e1727cd1e1357bd308cd420904aee9ef3b3cbb5d61c01a8f73885914724d->leave($__internal_3121e1727cd1e1357bd308cd420904aee9ef3b3cbb5d61c01a8f73885914724d_prof);

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
        return array (  89 => 35,  71 => 22,  65 => 18,  59 => 17,  41 => 4,  35 => 3,  11 => 1,);
    }
}
