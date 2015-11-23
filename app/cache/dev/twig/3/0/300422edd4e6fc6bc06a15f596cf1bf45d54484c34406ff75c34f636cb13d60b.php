<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig */
class __TwigTemplate_300422edd4e6fc6bc06a15f596cf1bf45d54484c34406ff75c34f636cb13d60b extends Twig_Template
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
        $__internal_d61275c4c7b7ec6509d1e2ef503bace9584307cd9c39f1ee3f883d3868f713b9 = $this->env->getExtension("native_profiler");
        $__internal_d61275c4c7b7ec6509d1e2ef503bace9584307cd9c39f1ee3f883d3868f713b9->enter($__internal_d61275c4c7b7ec6509d1e2ef503bace9584307cd9c39f1ee3f883d3868f713b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d61275c4c7b7ec6509d1e2ef503bace9584307cd9c39f1ee3f883d3868f713b9->leave($__internal_d61275c4c7b7ec6509d1e2ef503bace9584307cd9c39f1ee3f883d3868f713b9_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_9c2982c0c8497a63085fcd5762916651142cecb116bce6e964b4324951985bed = $this->env->getExtension("native_profiler");
        $__internal_9c2982c0c8497a63085fcd5762916651142cecb116bce6e964b4324951985bed->enter($__internal_9c2982c0c8497a63085fcd5762916651142cecb116bce6e964b4324951985bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'widget');
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
        
        $__internal_9c2982c0c8497a63085fcd5762916651142cecb116bce6e964b4324951985bed->leave($__internal_9c2982c0c8497a63085fcd5762916651142cecb116bce6e964b4324951985bed_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
