<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig */
class __TwigTemplate_3340635f89ca6be7ceba8f4a349e48d5fd8268e77ad8ff1b6ad89fad91ea43f6 extends Twig_Template
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
        $__internal_bb4be89a034e4eded21ffb826db637248a2149b927a3d460b72967ec2a1ff69a = $this->env->getExtension("native_profiler");
        $__internal_bb4be89a034e4eded21ffb826db637248a2149b927a3d460b72967ec2a1ff69a->enter($__internal_bb4be89a034e4eded21ffb826db637248a2149b927a3d460b72967ec2a1ff69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_bb4be89a034e4eded21ffb826db637248a2149b927a3d460b72967ec2a1ff69a->leave($__internal_bb4be89a034e4eded21ffb826db637248a2149b927a3d460b72967ec2a1ff69a_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_cec989a809935797e27e5ae8a83fd351b69254101e47dd0a53be1bd0120207e7 = $this->env->getExtension("native_profiler");
        $__internal_cec989a809935797e27e5ae8a83fd351b69254101e47dd0a53be1bd0120207e7->enter($__internal_cec989a809935797e27e5ae8a83fd351b69254101e47dd0a53be1bd0120207e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cec989a809935797e27e5ae8a83fd351b69254101e47dd0a53be1bd0120207e7->leave($__internal_cec989a809935797e27e5ae8a83fd351b69254101e47dd0a53be1bd0120207e7_prof);

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
