<?php

/* UciBaseDatosBundle:AreaConocimiento:new.html.twig */
class __TwigTemplate_c0b20f8dec63450c17dfd29e55b6b7855d8302e4cc19839481dadeed484fb81a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:AreaConocimiento:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1548fcaad94796c62bb7c5219028ce35d60558973db23b81d901cf603d85201a = $this->env->getExtension("native_profiler");
        $__internal_1548fcaad94796c62bb7c5219028ce35d60558973db23b81d901cf603d85201a->enter($__internal_1548fcaad94796c62bb7c5219028ce35d60558973db23b81d901cf603d85201a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:AreaConocimiento:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1548fcaad94796c62bb7c5219028ce35d60558973db23b81d901cf603d85201a->leave($__internal_1548fcaad94796c62bb7c5219028ce35d60558973db23b81d901cf603d85201a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6bd8d3c350bbca8c47d6e4c9d42d8d9831dbd857219fdc0871d4b1ce0e2dd7e = $this->env->getExtension("native_profiler");
        $__internal_f6bd8d3c350bbca8c47d6e4c9d42d8d9831dbd857219fdc0871d4b1ce0e2dd7e->enter($__internal_f6bd8d3c350bbca8c47d6e4c9d42d8d9831dbd857219fdc0871d4b1ce0e2dd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>AreaConocimiento creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("areaconocimiento");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_f6bd8d3c350bbca8c47d6e4c9d42d8d9831dbd857219fdc0871d4b1ce0e2dd7e->leave($__internal_f6bd8d3c350bbca8c47d6e4c9d42d8d9831dbd857219fdc0871d4b1ce0e2dd7e_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:AreaConocimiento:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
