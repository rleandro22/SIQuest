<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig */
class __TwigTemplate_837a313748587faba8991288c462ea87f6275ef1bffc4a4e0fe6b82442bd61f3 extends Twig_Template
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
        $__internal_2264631a8d5030bd6d853f0571ab4ed491cac3b3dad8994721a052250e597612 = $this->env->getExtension("native_profiler");
        $__internal_2264631a8d5030bd6d853f0571ab4ed491cac3b3dad8994721a052250e597612->enter($__internal_2264631a8d5030bd6d853f0571ab4ed491cac3b3dad8994721a052250e597612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_2264631a8d5030bd6d853f0571ab4ed491cac3b3dad8994721a052250e597612->leave($__internal_2264631a8d5030bd6d853f0571ab4ed491cac3b3dad8994721a052250e597612_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_434d068ff6e90041d98b0cc51436f60aa2a685d3c26ce75a3b522892fea33ff1 = $this->env->getExtension("native_profiler");
        $__internal_434d068ff6e90041d98b0cc51436f60aa2a685d3c26ce75a3b522892fea33ff1->enter($__internal_434d068ff6e90041d98b0cc51436f60aa2a685d3c26ce75a3b522892fea33ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget');
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
        
        $__internal_434d068ff6e90041d98b0cc51436f60aa2a685d3c26ce75a3b522892fea33ff1->leave($__internal_434d068ff6e90041d98b0cc51436f60aa2a685d3c26ce75a3b522892fea33ff1_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
