<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig */
class __TwigTemplate_8b19e6582a101fe45aff61cd19a32507afdf78f58033d6673ff254aa94b3eaac extends Twig_Template
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
        $__internal_c28083725e949c0d89ff93c58332fc32410eb71ba9cfdafbf818b7dd53bc1bf6 = $this->env->getExtension("native_profiler");
        $__internal_c28083725e949c0d89ff93c58332fc32410eb71ba9cfdafbf818b7dd53bc1bf6->enter($__internal_c28083725e949c0d89ff93c58332fc32410eb71ba9cfdafbf818b7dd53bc1bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c28083725e949c0d89ff93c58332fc32410eb71ba9cfdafbf818b7dd53bc1bf6->leave($__internal_c28083725e949c0d89ff93c58332fc32410eb71ba9cfdafbf818b7dd53bc1bf6_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_d2430282afb34d9f38494d7a9172065d7646ededcbf0130fa02246a28ce60de8 = $this->env->getExtension("native_profiler");
        $__internal_d2430282afb34d9f38494d7a9172065d7646ededcbf0130fa02246a28ce60de8->enter($__internal_d2430282afb34d9f38494d7a9172065d7646ededcbf0130fa02246a28ce60de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d2430282afb34d9f38494d7a9172065d7646ededcbf0130fa02246a28ce60de8->leave($__internal_d2430282afb34d9f38494d7a9172065d7646ededcbf0130fa02246a28ce60de8_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
