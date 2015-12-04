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
        $__internal_dbd6f0072762885732958ff68dc5b029ddcc6b5cca41205eab30c55c59dc556f = $this->env->getExtension("native_profiler");
        $__internal_dbd6f0072762885732958ff68dc5b029ddcc6b5cca41205eab30c55c59dc556f->enter($__internal_dbd6f0072762885732958ff68dc5b029ddcc6b5cca41205eab30c55c59dc556f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_dbd6f0072762885732958ff68dc5b029ddcc6b5cca41205eab30c55c59dc556f->leave($__internal_dbd6f0072762885732958ff68dc5b029ddcc6b5cca41205eab30c55c59dc556f_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c172ee0cdded307b3fbd5899767e22ec7fb023952ce33ab3cbf64bca2496275a = $this->env->getExtension("native_profiler");
        $__internal_c172ee0cdded307b3fbd5899767e22ec7fb023952ce33ab3cbf64bca2496275a->enter($__internal_c172ee0cdded307b3fbd5899767e22ec7fb023952ce33ab3cbf64bca2496275a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c172ee0cdded307b3fbd5899767e22ec7fb023952ce33ab3cbf64bca2496275a->leave($__internal_c172ee0cdded307b3fbd5899767e22ec7fb023952ce33ab3cbf64bca2496275a_prof);

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
