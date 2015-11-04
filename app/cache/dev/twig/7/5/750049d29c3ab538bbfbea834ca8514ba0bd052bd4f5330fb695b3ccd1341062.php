<?php

/* UciSeguridadBundle::base.html.twig */
class __TwigTemplate_750049d29c3ab538bbfbea834ca8514ba0bd052bd4f5330fb695b3ccd1341062 extends Twig_Template
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
        $__internal_b4044f999aad500830b8c8ddcb5f2b5da725b0d007d3c6b83d48da460a847b33 = $this->env->getExtension("native_profiler");
        $__internal_b4044f999aad500830b8c8ddcb5f2b5da725b0d007d3c6b83d48da460a847b33->enter($__internal_b4044f999aad500830b8c8ddcb5f2b5da725b0d007d3c6b83d48da460a847b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4044f999aad500830b8c8ddcb5f2b5da725b0d007d3c6b83d48da460a847b33->leave($__internal_b4044f999aad500830b8c8ddcb5f2b5da725b0d007d3c6b83d48da460a847b33_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_433258c7dabf9208bbda9b53860020891aa42d85d915602ad34efac731586ac8 = $this->env->getExtension("native_profiler");
        $__internal_433258c7dabf9208bbda9b53860020891aa42d85d915602ad34efac731586ac8->enter($__internal_433258c7dabf9208bbda9b53860020891aa42d85d915602ad34efac731586ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_433258c7dabf9208bbda9b53860020891aa42d85d915602ad34efac731586ac8->leave($__internal_433258c7dabf9208bbda9b53860020891aa42d85d915602ad34efac731586ac8_prof);

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
