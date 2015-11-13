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
        $__internal_b7de3f417cb24622b0554d5f2c17a3805aa0929cc0a550d35c37a19454269f9a = $this->env->getExtension("native_profiler");
        $__internal_b7de3f417cb24622b0554d5f2c17a3805aa0929cc0a550d35c37a19454269f9a->enter($__internal_b7de3f417cb24622b0554d5f2c17a3805aa0929cc0a550d35c37a19454269f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_b7de3f417cb24622b0554d5f2c17a3805aa0929cc0a550d35c37a19454269f9a->leave($__internal_b7de3f417cb24622b0554d5f2c17a3805aa0929cc0a550d35c37a19454269f9a_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a5287e3272459a2c3fea2bafc1a1b30a7eed7484e320ef27086f0cde6c45eac9 = $this->env->getExtension("native_profiler");
        $__internal_a5287e3272459a2c3fea2bafc1a1b30a7eed7484e320ef27086f0cde6c45eac9->enter($__internal_a5287e3272459a2c3fea2bafc1a1b30a7eed7484e320ef27086f0cde6c45eac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadTR", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeTR", array()), 'widget');
        echo "</div>
";
        
        $__internal_a5287e3272459a2c3fea2bafc1a1b30a7eed7484e320ef27086f0cde6c45eac9->leave($__internal_a5287e3272459a2c3fea2bafc1a1b30a7eed7484e320ef27086f0cde6c45eac9_prof);

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
