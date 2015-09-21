<?php

/* UciSeguridadBundle:VistaIdentificacion:index.html.twig */
class __TwigTemplate_f3379671a4778d6bb9d0881297e4ee86dc262ed09ab395b92b4f9f309dc975da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("UciSeguridadBundle::base.html.twig", "UciSeguridadBundle:VistaIdentificacion:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciSeguridadBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c617326e3ca3070eaf87f14571a7e94bc60c6ff56b3920e3d6d94e81a136f1bb = $this->env->getExtension("native_profiler");
        $__internal_c617326e3ca3070eaf87f14571a7e94bc60c6ff56b3920e3d6d94e81a136f1bb->enter($__internal_c617326e3ca3070eaf87f14571a7e94bc60c6ff56b3920e3d6d94e81a136f1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle:VistaIdentificacion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c617326e3ca3070eaf87f14571a7e94bc60c6ff56b3920e3d6d94e81a136f1bb->leave($__internal_c617326e3ca3070eaf87f14571a7e94bc60c6ff56b3920e3d6d94e81a136f1bb_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f76875c53329609d53c68307b765416372e2c40e30ea21d533162ff6be9de794 = $this->env->getExtension("native_profiler");
        $__internal_f76875c53329609d53c68307b765416372e2c40e30ea21d533162ff6be9de794->enter($__internal_f76875c53329609d53c68307b765416372e2c40e30ea21d533162ff6be9de794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <!-- Intro -->
    <div class=\"container text-center\">
        <br> <br>
        <h2 class=\"thin\">Sistema de generación de cuestionarios para la GSPM</h2>
        <p class=\"text-muted\">
            Este sistema le ayudará a gestionar la preguntas para la generación de cuestionarios para la GSPM.
        </p>
    </div>
    <!-- /Intro-->
    <!-- Highlights - jumbotron -->
    <div class=\"jumbotron top-space\">
        <div class=\"container\">

            <h2 class=\"text-center top-space\">Temas importantes</h2>
            <br>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <h3>¿Que me permite hacer SIQuest?</h3>
                    <p>Permite la generación de cuestionarios para diferentes examenes.</p>
                    <p class=\"text-center\"><a class=\"btn btn-primary btn-large\">Más información »</a></p>
                </div>
                <div class=\"col-sm-6\">
                    <h3>¿Quienes pueden acceder?</h3>
                    <p>
                        Unicamente los usuarios debidamente registrados</p>
                    <p class=\"text-center\"><a class=\"btn btn-primary btn-large\">Más información »</a></p>
                </div>
            </div> <!-- /row -->
        </div>
        <!-- /Highlights -->
    </div>
";
        
        $__internal_f76875c53329609d53c68307b765416372e2c40e30ea21d533162ff6be9de794->leave($__internal_f76875c53329609d53c68307b765416372e2c40e30ea21d533162ff6be9de794_prof);

    }

    public function getTemplateName()
    {
        return "UciSeguridadBundle:VistaIdentificacion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
