<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig */
class __TwigTemplate_07939d70764a0e69263c9d82c895496b35d7b9fae884af5e7eb388b398e160c9 extends Twig_Template
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
        $__internal_89c3d0448705309b24f3852d7b4149f2a834b54ad919582f17a358fce8cf99ea = $this->env->getExtension("native_profiler");
        $__internal_89c3d0448705309b24f3852d7b4149f2a834b54ad919582f17a358fce8cf99ea->enter($__internal_89c3d0448705309b24f3852d7b4149f2a834b54ad919582f17a358fce8cf99ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_89c3d0448705309b24f3852d7b4149f2a834b54ad919582f17a358fce8cf99ea->leave($__internal_89c3d0448705309b24f3852d7b4149f2a834b54ad919582f17a358fce8cf99ea_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a847d015d65c06a95ced315c41e9f19859967407df59ebad764bec5fff0f8184 = $this->env->getExtension("native_profiler");
        $__internal_a847d015d65c06a95ced315c41e9f19859967407df59ebad764bec5fff0f8184->enter($__internal_a847d015d65c06a95ced315c41e9f19859967407df59ebad764bec5fff0f8184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a847d015d65c06a95ced315c41e9f19859967407df59ebad764bec5fff0f8184->leave($__internal_a847d015d65c06a95ced315c41e9f19859967407df59ebad764bec5fff0f8184_prof);

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
