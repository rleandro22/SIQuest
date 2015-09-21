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
        $__internal_5b04244cd2b0e8be9efe8ff8e24f627220e65689cbc8a7b2c9d012190911b64b = $this->env->getExtension("native_profiler");
        $__internal_5b04244cd2b0e8be9efe8ff8e24f627220e65689cbc8a7b2c9d012190911b64b->enter($__internal_5b04244cd2b0e8be9efe8ff8e24f627220e65689cbc8a7b2c9d012190911b64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b04244cd2b0e8be9efe8ff8e24f627220e65689cbc8a7b2c9d012190911b64b->leave($__internal_5b04244cd2b0e8be9efe8ff8e24f627220e65689cbc8a7b2c9d012190911b64b_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_19bb372f3cc04ad17cc2d07631884cf4813495c94727110e3529bc0fe42ed09f = $this->env->getExtension("native_profiler");
        $__internal_19bb372f3cc04ad17cc2d07631884cf4813495c94727110e3529bc0fe42ed09f->enter($__internal_19bb372f3cc04ad17cc2d07631884cf4813495c94727110e3529bc0fe42ed09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    \t<!-- Header -->
\t<header id=\"head\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<h1 class=\"lead\">UNIVERSIDAD PARA LA COOPERACIÓN INTERNACIONAL</h1>
\t\t\t\t<p class=\"tagline\">Sistema de generación de cuestionarios para la GSPM</p>
\t\t\t\t<p><a href=\"http://www.uci.ac.cr/\" class=\"btn btn-action btn-lg\" role=\"button\">Página UCI</a><a href=\"http://www.ucipfg.com/\" class=\"btn btn-default btn-lg\" role=\"button\">Campus virtual</a> </p>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- /Header -->
    ";
        
        $__internal_19bb372f3cc04ad17cc2d07631884cf4813495c94727110e3529bc0fe42ed09f->leave($__internal_19bb372f3cc04ad17cc2d07631884cf4813495c94727110e3529bc0fe42ed09f_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b06492a355c76058b0b9e759a84b7777c9ee14587ed90c75152db1fdcaed569 = $this->env->getExtension("native_profiler");
        $__internal_0b06492a355c76058b0b9e759a84b7777c9ee14587ed90c75152db1fdcaed569->enter($__internal_0b06492a355c76058b0b9e759a84b7777c9ee14587ed90c75152db1fdcaed569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    
    




";
        
        $__internal_0b06492a355c76058b0b9e759a84b7777c9ee14587ed90c75152db1fdcaed569->leave($__internal_0b06492a355c76058b0b9e759a84b7777c9ee14587ed90c75152db1fdcaed569_prof);

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
        return array (  65 => 18,  59 => 17,  41 => 4,  35 => 3,  11 => 1,);
    }
}
