<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig */
class __TwigTemplate_292d529ddec095100ba192f972ce9e39a4e4c81102e04216ff538f67cbcf2b69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_862d230a261fcfde8b918c050f71a6aed8bf1d3df4c22fde72487060a6d651e6 = $this->env->getExtension("native_profiler");
        $__internal_862d230a261fcfde8b918c050f71a6aed8bf1d3df4c22fde72487060a6d651e6->enter($__internal_862d230a261fcfde8b918c050f71a6aed8bf1d3df4c22fde72487060a6d651e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_862d230a261fcfde8b918c050f71a6aed8bf1d3df4c22fde72487060a6d651e6->leave($__internal_862d230a261fcfde8b918c050f71a6aed8bf1d3df4c22fde72487060a6d651e6_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7b295e6b3a808c730c88e59e3779c573fa9ae4accda6d4d0af16bfb87800592c = $this->env->getExtension("native_profiler");
        $__internal_7b295e6b3a808c730c88e59e3779c573fa9ae4accda6d4d0af16bfb87800592c->enter($__internal_7b295e6b3a808c730c88e59e3779c573fa9ae4accda6d4d0af16bfb87800592c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentaje", array()), 'widget');
        echo "</div>
";
        
        $__internal_7b295e6b3a808c730c88e59e3779c573fa9ae4accda6d4d0af16bfb87800592c->leave($__internal_7b295e6b3a808c730c88e59e3779c573fa9ae4accda6d4d0af16bfb87800592c_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
