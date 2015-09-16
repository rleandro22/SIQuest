<?php

/* UciSeguridadBundle:VistaPrincipal:index.html.twig */
class __TwigTemplate_a0040700b304f19dcfd25f0c95f6548c9f82c2ee7c6dfb726b12c5a2163742a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("UciSeguridadBundle::base.html.twig", "UciSeguridadBundle:VistaPrincipal:index.html.twig", 2);
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
        $__internal_1f60c616bfb8627abf0629ad8291136a6593f7fe8cbdbba5018265d64b4e44ce = $this->env->getExtension("native_profiler");
        $__internal_1f60c616bfb8627abf0629ad8291136a6593f7fe8cbdbba5018265d64b4e44ce->enter($__internal_1f60c616bfb8627abf0629ad8291136a6593f7fe8cbdbba5018265d64b4e44ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle:VistaPrincipal:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f60c616bfb8627abf0629ad8291136a6593f7fe8cbdbba5018265d64b4e44ce->leave($__internal_1f60c616bfb8627abf0629ad8291136a6593f7fe8cbdbba5018265d64b4e44ce_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_42325a3f1c3c76ac137320047f1934b5cc36328a91d89fc7df2c1855fa2542ee = $this->env->getExtension("native_profiler");
        $__internal_42325a3f1c3c76ac137320047f1934b5cc36328a91d89fc7df2c1855fa2542ee->enter($__internal_42325a3f1c3c76ac137320047f1934b5cc36328a91d89fc7df2c1855fa2542ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_42325a3f1c3c76ac137320047f1934b5cc36328a91d89fc7df2c1855fa2542ee->leave($__internal_42325a3f1c3c76ac137320047f1934b5cc36328a91d89fc7df2c1855fa2542ee_prof);

    }

    public function getTemplateName()
    {
        return "UciSeguridadBundle:VistaPrincipal:index.html.twig";
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
