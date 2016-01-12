<?php

/* UciSeguridadBundle::base.html.twig */
class __TwigTemplate_3c71737bc0ec19f6d9ee590c54e9b80e993f4b976fbcb39b60c88df76fc8b619 extends Twig_Template
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
        $__internal_955c7d7937f34a8a7d0dd496ed45cbefb3c01e6c9e58ef43b2ebf3b548ed7648 = $this->env->getExtension("native_profiler");
        $__internal_955c7d7937f34a8a7d0dd496ed45cbefb3c01e6c9e58ef43b2ebf3b548ed7648->enter($__internal_955c7d7937f34a8a7d0dd496ed45cbefb3c01e6c9e58ef43b2ebf3b548ed7648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_955c7d7937f34a8a7d0dd496ed45cbefb3c01e6c9e58ef43b2ebf3b548ed7648->leave($__internal_955c7d7937f34a8a7d0dd496ed45cbefb3c01e6c9e58ef43b2ebf3b548ed7648_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_6f0375a673977ff55a39028ad554cd273ff22b679ed70b7c13adacd21af970d7 = $this->env->getExtension("native_profiler");
        $__internal_6f0375a673977ff55a39028ad554cd273ff22b679ed70b7c13adacd21af970d7->enter($__internal_6f0375a673977ff55a39028ad554cd273ff22b679ed70b7c13adacd21af970d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_6f0375a673977ff55a39028ad554cd273ff22b679ed70b7c13adacd21af970d7->leave($__internal_6f0375a673977ff55a39028ad554cd273ff22b679ed70b7c13adacd21af970d7_prof);

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
