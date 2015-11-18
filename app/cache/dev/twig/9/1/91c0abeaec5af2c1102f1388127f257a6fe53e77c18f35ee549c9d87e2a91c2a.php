<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig */
class __TwigTemplate_91c0abeaec5af2c1102f1388127f257a6fe53e77c18f35ee549c9d87e2a91c2a extends Twig_Template
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
        $__internal_b316aaa85c2d7c6f59d010694de8da7bae7c6978d1bacbb1b0a8aafc61cd02c7 = $this->env->getExtension("native_profiler");
        $__internal_b316aaa85c2d7c6f59d010694de8da7bae7c6978d1bacbb1b0a8aafc61cd02c7->enter($__internal_b316aaa85c2d7c6f59d010694de8da7bae7c6978d1bacbb1b0a8aafc61cd02c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_b316aaa85c2d7c6f59d010694de8da7bae7c6978d1bacbb1b0a8aafc61cd02c7->leave($__internal_b316aaa85c2d7c6f59d010694de8da7bae7c6978d1bacbb1b0a8aafc61cd02c7_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_478883103acaf9c9fa0567b0049e197688295546f914b74ca96aca9d921dc26e = $this->env->getExtension("native_profiler");
        $__internal_478883103acaf9c9fa0567b0049e197688295546f914b74ca96aca9d921dc26e->enter($__internal_478883103acaf9c9fa0567b0049e197688295546f914b74ca96aca9d921dc26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), 'widget');
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
        
        $__internal_478883103acaf9c9fa0567b0049e197688295546f914b74ca96aca9d921dc26e->leave($__internal_478883103acaf9c9fa0567b0049e197688295546f914b74ca96aca9d921dc26e_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
