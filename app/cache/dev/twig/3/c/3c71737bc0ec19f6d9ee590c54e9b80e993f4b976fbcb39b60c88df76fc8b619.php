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
        $__internal_d08320578ff0e5ab0780207dd62ded2ea3f7dd4dc10591e2a752e314f5958c60 = $this->env->getExtension("native_profiler");
        $__internal_d08320578ff0e5ab0780207dd62ded2ea3f7dd4dc10591e2a752e314f5958c60->enter($__internal_d08320578ff0e5ab0780207dd62ded2ea3f7dd4dc10591e2a752e314f5958c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d08320578ff0e5ab0780207dd62ded2ea3f7dd4dc10591e2a752e314f5958c60->leave($__internal_d08320578ff0e5ab0780207dd62ded2ea3f7dd4dc10591e2a752e314f5958c60_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_1acc67e86d1a3121722fce1f077b336daec3bb7d02066093b8843744d30d5b6f = $this->env->getExtension("native_profiler");
        $__internal_1acc67e86d1a3121722fce1f077b336daec3bb7d02066093b8843744d30d5b6f->enter($__internal_1acc67e86d1a3121722fce1f077b336daec3bb7d02066093b8843744d30d5b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_1acc67e86d1a3121722fce1f077b336daec3bb7d02066093b8843744d30d5b6f->leave($__internal_1acc67e86d1a3121722fce1f077b336daec3bb7d02066093b8843744d30d5b6f_prof);

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
