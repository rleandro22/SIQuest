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
        $__internal_dca21c1799a55ae945cb741d3403e8427352842afbd59e40acd0ac8b57e504b0 = $this->env->getExtension("native_profiler");
        $__internal_dca21c1799a55ae945cb741d3403e8427352842afbd59e40acd0ac8b57e504b0->enter($__internal_dca21c1799a55ae945cb741d3403e8427352842afbd59e40acd0ac8b57e504b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dca21c1799a55ae945cb741d3403e8427352842afbd59e40acd0ac8b57e504b0->leave($__internal_dca21c1799a55ae945cb741d3403e8427352842afbd59e40acd0ac8b57e504b0_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_63a9cd457f6d0f1b04925773ea89591a957e81a9974b9fe6f9902784e205a065 = $this->env->getExtension("native_profiler");
        $__internal_63a9cd457f6d0f1b04925773ea89591a957e81a9974b9fe6f9902784e205a065->enter($__internal_63a9cd457f6d0f1b04925773ea89591a957e81a9974b9fe6f9902784e205a065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_63a9cd457f6d0f1b04925773ea89591a957e81a9974b9fe6f9902784e205a065->leave($__internal_63a9cd457f6d0f1b04925773ea89591a957e81a9974b9fe6f9902784e205a065_prof);

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
