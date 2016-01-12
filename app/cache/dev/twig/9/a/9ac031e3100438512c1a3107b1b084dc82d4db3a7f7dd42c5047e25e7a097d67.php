<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig */
class __TwigTemplate_9ac031e3100438512c1a3107b1b084dc82d4db3a7f7dd42c5047e25e7a097d67 extends Twig_Template
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
        $__internal_874858f7a076d4c0f2b0d2e5388f61eaac923638a81975640762601133f15353 = $this->env->getExtension("native_profiler");
        $__internal_874858f7a076d4c0f2b0d2e5388f61eaac923638a81975640762601133f15353->enter($__internal_874858f7a076d4c0f2b0d2e5388f61eaac923638a81975640762601133f15353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_874858f7a076d4c0f2b0d2e5388f61eaac923638a81975640762601133f15353->leave($__internal_874858f7a076d4c0f2b0d2e5388f61eaac923638a81975640762601133f15353_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7e3d1a8b4365fbf2153fd0cfb25c3e49eb33ce4fbc6482439c8cbab71eeb87e9 = $this->env->getExtension("native_profiler");
        $__internal_7e3d1a8b4365fbf2153fd0cfb25c3e49eb33ce4fbc6482439c8cbab71eeb87e9->enter($__internal_7e3d1a8b4365fbf2153fd0cfb25c3e49eb33ce4fbc6482439c8cbab71eeb87e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7e3d1a8b4365fbf2153fd0cfb25c3e49eb33ce4fbc6482439c8cbab71eeb87e9->leave($__internal_7e3d1a8b4365fbf2153fd0cfb25c3e49eb33ce4fbc6482439c8cbab71eeb87e9_prof);

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
