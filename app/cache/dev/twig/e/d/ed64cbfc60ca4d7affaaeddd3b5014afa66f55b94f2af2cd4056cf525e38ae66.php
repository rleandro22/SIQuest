<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig */
class __TwigTemplate_ed64cbfc60ca4d7affaaeddd3b5014afa66f55b94f2af2cd4056cf525e38ae66 extends Twig_Template
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
        $__internal_332f1705aa0b9b0344b7a6ed5964f7b8f1370967879a6cba8d28b066a9b82836 = $this->env->getExtension("native_profiler");
        $__internal_332f1705aa0b9b0344b7a6ed5964f7b8f1370967879a6cba8d28b066a9b82836->enter($__internal_332f1705aa0b9b0344b7a6ed5964f7b8f1370967879a6cba8d28b066a9b82836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_332f1705aa0b9b0344b7a6ed5964f7b8f1370967879a6cba8d28b066a9b82836->leave($__internal_332f1705aa0b9b0344b7a6ed5964f7b8f1370967879a6cba8d28b066a9b82836_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_24b49f9e1bd575e96e121a440e940bce6cd1669b51d240ecb8c57aada7759587 = $this->env->getExtension("native_profiler");
        $__internal_24b49f9e1bd575e96e121a440e940bce6cd1669b51d240ecb8c57aada7759587->enter($__internal_24b49f9e1bd575e96e121a440e940bce6cd1669b51d240ecb8c57aada7759587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadG", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeG", array()), 'widget');
        echo "</div>
";
        
        $__internal_24b49f9e1bd575e96e121a440e940bce6cd1669b51d240ecb8c57aada7759587->leave($__internal_24b49f9e1bd575e96e121a440e940bce6cd1669b51d240ecb8c57aada7759587_prof);

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
