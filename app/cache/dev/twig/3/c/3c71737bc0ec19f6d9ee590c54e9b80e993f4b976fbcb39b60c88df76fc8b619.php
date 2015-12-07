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
        $__internal_b1e6089ee4cc2bb98079f1b5b45161165064983df819b380e34ca6e5cc6b7faf = $this->env->getExtension("native_profiler");
        $__internal_b1e6089ee4cc2bb98079f1b5b45161165064983df819b380e34ca6e5cc6b7faf->enter($__internal_b1e6089ee4cc2bb98079f1b5b45161165064983df819b380e34ca6e5cc6b7faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1e6089ee4cc2bb98079f1b5b45161165064983df819b380e34ca6e5cc6b7faf->leave($__internal_b1e6089ee4cc2bb98079f1b5b45161165064983df819b380e34ca6e5cc6b7faf_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_5dbffba36faf736fd2683e7e192b72a122c45625c1dc7115524a57c8697a8e88 = $this->env->getExtension("native_profiler");
        $__internal_5dbffba36faf736fd2683e7e192b72a122c45625c1dc7115524a57c8697a8e88->enter($__internal_5dbffba36faf736fd2683e7e192b72a122c45625c1dc7115524a57c8697a8e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_5dbffba36faf736fd2683e7e192b72a122c45625c1dc7115524a57c8697a8e88->leave($__internal_5dbffba36faf736fd2683e7e192b72a122c45625c1dc7115524a57c8697a8e88_prof);

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
