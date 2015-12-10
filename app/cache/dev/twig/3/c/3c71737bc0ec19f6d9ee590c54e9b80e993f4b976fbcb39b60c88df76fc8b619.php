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
        $__internal_985d6d4814d6dc1d0bc9b5f4bcd8399c22255b219f31770dc61aea01ddcbe695 = $this->env->getExtension("native_profiler");
        $__internal_985d6d4814d6dc1d0bc9b5f4bcd8399c22255b219f31770dc61aea01ddcbe695->enter($__internal_985d6d4814d6dc1d0bc9b5f4bcd8399c22255b219f31770dc61aea01ddcbe695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_985d6d4814d6dc1d0bc9b5f4bcd8399c22255b219f31770dc61aea01ddcbe695->leave($__internal_985d6d4814d6dc1d0bc9b5f4bcd8399c22255b219f31770dc61aea01ddcbe695_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_73c0d38cd060bf98b29efaadcc6c2dfd3435114bafcf5f41495b2569673aab66 = $this->env->getExtension("native_profiler");
        $__internal_73c0d38cd060bf98b29efaadcc6c2dfd3435114bafcf5f41495b2569673aab66->enter($__internal_73c0d38cd060bf98b29efaadcc6c2dfd3435114bafcf5f41495b2569673aab66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_73c0d38cd060bf98b29efaadcc6c2dfd3435114bafcf5f41495b2569673aab66->leave($__internal_73c0d38cd060bf98b29efaadcc6c2dfd3435114bafcf5f41495b2569673aab66_prof);

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
