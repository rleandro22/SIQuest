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
        $__internal_f82d726ae265a34986f5744d82d6cd1c9d7691f40df10c8dda323ec6320752d3 = $this->env->getExtension("native_profiler");
        $__internal_f82d726ae265a34986f5744d82d6cd1c9d7691f40df10c8dda323ec6320752d3->enter($__internal_f82d726ae265a34986f5744d82d6cd1c9d7691f40df10c8dda323ec6320752d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f82d726ae265a34986f5744d82d6cd1c9d7691f40df10c8dda323ec6320752d3->leave($__internal_f82d726ae265a34986f5744d82d6cd1c9d7691f40df10c8dda323ec6320752d3_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_8710ad6742bfda07b0143ac8dcbb9795f53d7db0fc89b54b23aca10a768aa9d8 = $this->env->getExtension("native_profiler");
        $__internal_8710ad6742bfda07b0143ac8dcbb9795f53d7db0fc89b54b23aca10a768aa9d8->enter($__internal_8710ad6742bfda07b0143ac8dcbb9795f53d7db0fc89b54b23aca10a768aa9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8710ad6742bfda07b0143ac8dcbb9795f53d7db0fc89b54b23aca10a768aa9d8->leave($__internal_8710ad6742bfda07b0143ac8dcbb9795f53d7db0fc89b54b23aca10a768aa9d8_prof);

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
