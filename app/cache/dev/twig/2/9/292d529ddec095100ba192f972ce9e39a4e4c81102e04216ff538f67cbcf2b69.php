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
        $__internal_bae7ecbe6f1a746e7b17cc0467977abae0727169f0703db88be1f32c30e1ae8a = $this->env->getExtension("native_profiler");
        $__internal_bae7ecbe6f1a746e7b17cc0467977abae0727169f0703db88be1f32c30e1ae8a->enter($__internal_bae7ecbe6f1a746e7b17cc0467977abae0727169f0703db88be1f32c30e1ae8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_bae7ecbe6f1a746e7b17cc0467977abae0727169f0703db88be1f32c30e1ae8a->leave($__internal_bae7ecbe6f1a746e7b17cc0467977abae0727169f0703db88be1f32c30e1ae8a_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_d421b160b980683d1db58039293cf237bc38c2d6397c0252993cf7a6b90a415d = $this->env->getExtension("native_profiler");
        $__internal_d421b160b980683d1db58039293cf237bc38c2d6397c0252993cf7a6b90a415d->enter($__internal_d421b160b980683d1db58039293cf237bc38c2d6397c0252993cf7a6b90a415d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d421b160b980683d1db58039293cf237bc38c2d6397c0252993cf7a6b90a415d->leave($__internal_d421b160b980683d1db58039293cf237bc38c2d6397c0252993cf7a6b90a415d_prof);

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
