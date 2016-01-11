<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPGrupo.html.twig */
class __TwigTemplate_4b79100c234bb25d598cda335a3cf7c0b063177a94a57b4168f3ad11ec4e178b extends Twig_Template
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
        $__internal_99dd98ba174faa02d4caf5b15192bb8eaaee9177da8dc8ab278b4e745d2a46e7 = $this->env->getExtension("native_profiler");
        $__internal_99dd98ba174faa02d4caf5b15192bb8eaaee9177da8dc8ab278b4e745d2a46e7->enter($__internal_99dd98ba174faa02d4caf5b15192bb8eaaee9177da8dc8ab278b4e745d2a46e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_99dd98ba174faa02d4caf5b15192bb8eaaee9177da8dc8ab278b4e745d2a46e7->leave($__internal_99dd98ba174faa02d4caf5b15192bb8eaaee9177da8dc8ab278b4e745d2a46e7_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_697e9aac94ae0ff4d1e56169bb7a7b0241dd79fa32a2b672a93aaeefe584d0f0 = $this->env->getExtension("native_profiler");
        $__internal_697e9aac94ae0ff4d1e56169bb7a7b0241dd79fa32a2b672a93aaeefe584d0f0->enter($__internal_697e9aac94ae0ff4d1e56169bb7a7b0241dd79fa32a2b672a93aaeefe584d0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'widget');
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
        
        $__internal_697e9aac94ae0ff4d1e56169bb7a7b0241dd79fa32a2b672a93aaeefe584d0f0->leave($__internal_697e9aac94ae0ff4d1e56169bb7a7b0241dd79fa32a2b672a93aaeefe584d0f0_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPGrupo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
