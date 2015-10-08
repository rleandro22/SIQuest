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
        $__internal_1493e51cca3c426b40f78e0d3e13198aa405270c37e0e6032e5f044af92a3a72 = $this->env->getExtension("native_profiler");
        $__internal_1493e51cca3c426b40f78e0d3e13198aa405270c37e0e6032e5f044af92a3a72->enter($__internal_1493e51cca3c426b40f78e0d3e13198aa405270c37e0e6032e5f044af92a3a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1493e51cca3c426b40f78e0d3e13198aa405270c37e0e6032e5f044af92a3a72->leave($__internal_1493e51cca3c426b40f78e0d3e13198aa405270c37e0e6032e5f044af92a3a72_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_cde48f24081a92423c1fead99f595e98f83029829a1a92b891f14a5732056bab = $this->env->getExtension("native_profiler");
        $__internal_cde48f24081a92423c1fead99f595e98f83029829a1a92b891f14a5732056bab->enter($__internal_cde48f24081a92423c1fead99f595e98f83029829a1a92b891f14a5732056bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_cde48f24081a92423c1fead99f595e98f83029829a1a92b891f14a5732056bab->leave($__internal_cde48f24081a92423c1fead99f595e98f83029829a1a92b891f14a5732056bab_prof);

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
