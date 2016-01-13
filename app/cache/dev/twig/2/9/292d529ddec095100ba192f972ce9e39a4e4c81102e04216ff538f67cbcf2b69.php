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
        $__internal_0f8d414f8f04dca73c99a39ecd8c252afda15e17510e7b09b0d979ec0fa67ad6 = $this->env->getExtension("native_profiler");
        $__internal_0f8d414f8f04dca73c99a39ecd8c252afda15e17510e7b09b0d979ec0fa67ad6->enter($__internal_0f8d414f8f04dca73c99a39ecd8c252afda15e17510e7b09b0d979ec0fa67ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_0f8d414f8f04dca73c99a39ecd8c252afda15e17510e7b09b0d979ec0fa67ad6->leave($__internal_0f8d414f8f04dca73c99a39ecd8c252afda15e17510e7b09b0d979ec0fa67ad6_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_319cfe457d5d11960a4d9f52a7e75c3e098421f27425dd640e0ce9169decbdcb = $this->env->getExtension("native_profiler");
        $__internal_319cfe457d5d11960a4d9f52a7e75c3e098421f27425dd640e0ce9169decbdcb->enter($__internal_319cfe457d5d11960a4d9f52a7e75c3e098421f27425dd640e0ce9169decbdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_319cfe457d5d11960a4d9f52a7e75c3e098421f27425dd640e0ce9169decbdcb->leave($__internal_319cfe457d5d11960a4d9f52a7e75c3e098421f27425dd640e0ce9169decbdcb_prof);

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
