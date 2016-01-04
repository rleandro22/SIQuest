<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPArea.html.twig */
class __TwigTemplate_02d29caf1029bd3e5dc8d6b41272fb41158a761aec86faa08aeb63f9d0bd47af extends Twig_Template
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
        $__internal_fd52e5d3b1709adfdd7a007f6a5c318775ea538f48f59b8a35d1cb8386266e37 = $this->env->getExtension("native_profiler");
        $__internal_fd52e5d3b1709adfdd7a007f6a5c318775ea538f48f59b8a35d1cb8386266e37->enter($__internal_fd52e5d3b1709adfdd7a007f6a5c318775ea538f48f59b8a35d1cb8386266e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_fd52e5d3b1709adfdd7a007f6a5c318775ea538f48f59b8a35d1cb8386266e37->leave($__internal_fd52e5d3b1709adfdd7a007f6a5c318775ea538f48f59b8a35d1cb8386266e37_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_d8a494299d4412b2cdf152cb6c382a21425336b85ccf0385bde063b5af1ffa8c = $this->env->getExtension("native_profiler");
        $__internal_d8a494299d4412b2cdf152cb6c382a21425336b85ccf0385bde063b5af1ffa8c->enter($__internal_d8a494299d4412b2cdf152cb6c382a21425336b85ccf0385bde063b5af1ffa8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d8a494299d4412b2cdf152cb6c382a21425336b85ccf0385bde063b5af1ffa8c->leave($__internal_d8a494299d4412b2cdf152cb6c382a21425336b85ccf0385bde063b5af1ffa8c_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPArea.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
