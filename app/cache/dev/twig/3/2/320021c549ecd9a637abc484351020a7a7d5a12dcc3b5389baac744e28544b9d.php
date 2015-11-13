<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig */
class __TwigTemplate_320021c549ecd9a637abc484351020a7a7d5a12dcc3b5389baac744e28544b9d extends Twig_Template
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
        $__internal_1cfc811f82795e2a98572f27b2aba11bcd082eca20b698e1352e73f97bfae10a = $this->env->getExtension("native_profiler");
        $__internal_1cfc811f82795e2a98572f27b2aba11bcd082eca20b698e1352e73f97bfae10a->enter($__internal_1cfc811f82795e2a98572f27b2aba11bcd082eca20b698e1352e73f97bfae10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_1cfc811f82795e2a98572f27b2aba11bcd082eca20b698e1352e73f97bfae10a->leave($__internal_1cfc811f82795e2a98572f27b2aba11bcd082eca20b698e1352e73f97bfae10a_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_b31cf188229aefdb0e5406bac07c2f87094fc71f611f139605b3eeec226f47e4 = $this->env->getExtension("native_profiler");
        $__internal_b31cf188229aefdb0e5406bac07c2f87094fc71f611f139605b3eeec226f47e4->enter($__internal_b31cf188229aefdb0e5406bac07c2f87094fc71f611f139605b3eeec226f47e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <div class=\"col-sm-6\">
        <div class=\"row\">
            <div class=\"col-sm-12\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget');
        echo "</div>   
        </div>
        <div class=\"row top-margin\">
            <div class=\"col-sm-6\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPaginaDe", array()), 'widget');
        echo "</div>   
            <div class=\"col-sm-6\">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPaginaHasta", array()), 'widget');
        echo "</div>  
        </div>
        <div class=\"row top-margin\">
            <div class=\"col-sm-12\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'widget');
        echo "</div>   
        </div>
        <div class=\"row top-margin\">
            <div class=\"col-sm-12\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'widget');
        echo "</div>   
        </div>
        <div class=\"row top-margin\">
            <div class=\"col-sm-12\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'widget');
        echo "</div>   
        </div>
        <div class=\"row top-margin\">
            <div class=\"col-sm-12\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'widget');
        echo "</div>   
        </div>
        <div class=\"row top-margin\">
            <div class=\"col-sm-12\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), 'widget');
        echo "</div>   
        </div>
    </div>
    <div class=\"col-sm-2\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadC", array()), 'widget');
        echo "</div>
    <div class=\"col-sm-2\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeC", array()), 'widget');
        echo "</div>
";
        
        $__internal_b31cf188229aefdb0e5406bac07c2f87094fc71f611f139605b3eeec226f47e4->leave($__internal_b31cf188229aefdb0e5406bac07c2f87094fc71f611f139605b3eeec226f47e4_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  85 => 26,  79 => 23,  73 => 20,  67 => 17,  61 => 14,  55 => 11,  49 => 8,  45 => 7,  39 => 4,  35 => 2,  23 => 1,);
    }
}
