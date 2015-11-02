<?php

/* UciSeguridadBundle::base.html.twig */
class __TwigTemplate_81c3247db7895fca11d8f5d8b8146f6348a928fb17fb2e654aba79363cd805ac extends Twig_Template
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
        $__internal_400e6f99d360d4c6f305562db1bfcc6638eb66804a18b3b95685fdd45dcbdd58 = $this->env->getExtension("native_profiler");
        $__internal_400e6f99d360d4c6f305562db1bfcc6638eb66804a18b3b95685fdd45dcbdd58->enter($__internal_400e6f99d360d4c6f305562db1bfcc6638eb66804a18b3b95685fdd45dcbdd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_400e6f99d360d4c6f305562db1bfcc6638eb66804a18b3b95685fdd45dcbdd58->leave($__internal_400e6f99d360d4c6f305562db1bfcc6638eb66804a18b3b95685fdd45dcbdd58_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_e6abb18447f0ab95b8db75de8bfaf4177f8af4e044545ca743f945c9122d6695 = $this->env->getExtension("native_profiler");
        $__internal_e6abb18447f0ab95b8db75de8bfaf4177f8af4e044545ca743f945c9122d6695->enter($__internal_e6abb18447f0ab95b8db75de8bfaf4177f8af4e044545ca743f945c9122d6695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_e6abb18447f0ab95b8db75de8bfaf4177f8af4e044545ca743f945c9122d6695->leave($__internal_e6abb18447f0ab95b8db75de8bfaf4177f8af4e044545ca743f945c9122d6695_prof);

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
