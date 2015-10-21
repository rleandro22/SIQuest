<?php

/* UciSeguridadBundle::base.html.twig */
class __TwigTemplate_58f1e180d6cd3cca227f7b9fa8a6d7a915e410cd55abd81f3fa70e766cf8caff extends Twig_Template
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
        $__internal_9ff2889b40250de4f8448b8095716687b7e312a10255d5a2d30e5e8806b3b9c7 = $this->env->getExtension("native_profiler");
        $__internal_9ff2889b40250de4f8448b8095716687b7e312a10255d5a2d30e5e8806b3b9c7->enter($__internal_9ff2889b40250de4f8448b8095716687b7e312a10255d5a2d30e5e8806b3b9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff2889b40250de4f8448b8095716687b7e312a10255d5a2d30e5e8806b3b9c7->leave($__internal_9ff2889b40250de4f8448b8095716687b7e312a10255d5a2d30e5e8806b3b9c7_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_ca5915141278a47848efffe80eece571bfab6a033aa030b4e29362629def63f4 = $this->env->getExtension("native_profiler");
        $__internal_ca5915141278a47848efffe80eece571bfab6a033aa030b4e29362629def63f4->enter($__internal_ca5915141278a47848efffe80eece571bfab6a033aa030b4e29362629def63f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_ca5915141278a47848efffe80eece571bfab6a033aa030b4e29362629def63f4->leave($__internal_ca5915141278a47848efffe80eece571bfab6a033aa030b4e29362629def63f4_prof);

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
