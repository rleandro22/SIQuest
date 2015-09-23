<?php

/* UciSeguridadBundle::base.html.twig */
class __TwigTemplate_92d0f449bdc3bf1c1ff2281c2743ea42eb3b1bd45868ca27088a35b2da2cbaa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "UciSeguridadBundle::base.html.twig", 2);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_707b2640f2efbfd0831bf419325d47c5efde264ba8f3f58897b42f2622f36cae = $this->env->getExtension("native_profiler");
        $__internal_707b2640f2efbfd0831bf419325d47c5efde264ba8f3f58897b42f2622f36cae->enter($__internal_707b2640f2efbfd0831bf419325d47c5efde264ba8f3f58897b42f2622f36cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_707b2640f2efbfd0831bf419325d47c5efde264ba8f3f58897b42f2622f36cae->leave($__internal_707b2640f2efbfd0831bf419325d47c5efde264ba8f3f58897b42f2622f36cae_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_bfa1dfaaf5604c0b2f2d13eb8eec3d9ebefda796ed2cfe0de81588a6423cf724 = $this->env->getExtension("native_profiler");
        $__internal_bfa1dfaaf5604c0b2f2d13eb8eec3d9ebefda796ed2cfe0de81588a6423cf724->enter($__internal_bfa1dfaaf5604c0b2f2d13eb8eec3d9ebefda796ed2cfe0de81588a6423cf724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <!-- Header -->
    <header id=\"head\">
        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"lead\">UNIVERSIDAD PARA LA COOPERACIÓN INTERNACIONAL</h1>
                <p class=\"tagline\">Sistema de generación de cuestionarios para la GSPM</p>
                <p><a href=\"http://www.uci.ac.cr/\" class=\"btn btn-action btn-lg\" role=\"button\">Página UCI</a><a href=\"http://www.ucipfg.com/\" class=\"btn btn-default btn-lg\" role=\"button\">Campus virtual</a> </p>
            </div>
        </div>
    </header>
    <!-- /Header -->
";
        
        $__internal_bfa1dfaaf5604c0b2f2d13eb8eec3d9ebefda796ed2cfe0de81588a6423cf724->leave($__internal_bfa1dfaaf5604c0b2f2d13eb8eec3d9ebefda796ed2cfe0de81588a6423cf724_prof);

    }

    public function getTemplateName()
    {
        return "UciSeguridadBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 2,);
    }
}
