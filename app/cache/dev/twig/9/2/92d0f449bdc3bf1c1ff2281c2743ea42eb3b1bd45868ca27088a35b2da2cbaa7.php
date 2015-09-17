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
        $__internal_a0635a1f1cbb811191211031af0590737d91addaf3d8e435dadd735884ee6c6e = $this->env->getExtension("native_profiler");
        $__internal_a0635a1f1cbb811191211031af0590737d91addaf3d8e435dadd735884ee6c6e->enter($__internal_a0635a1f1cbb811191211031af0590737d91addaf3d8e435dadd735884ee6c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0635a1f1cbb811191211031af0590737d91addaf3d8e435dadd735884ee6c6e->leave($__internal_a0635a1f1cbb811191211031af0590737d91addaf3d8e435dadd735884ee6c6e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_123836e792637e97bcdcfc60f4cdf475fd4330f879efb56298d7c81da7a9c6a0 = $this->env->getExtension("native_profiler");
        $__internal_123836e792637e97bcdcfc60f4cdf475fd4330f879efb56298d7c81da7a9c6a0->enter($__internal_123836e792637e97bcdcfc60f4cdf475fd4330f879efb56298d7c81da7a9c6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_123836e792637e97bcdcfc60f4cdf475fd4330f879efb56298d7c81da7a9c6a0->leave($__internal_123836e792637e97bcdcfc60f4cdf475fd4330f879efb56298d7c81da7a9c6a0_prof);

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
