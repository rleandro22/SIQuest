<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig */
class __TwigTemplate_5a1a05fc79b1874cd9acdb0be2b6452c8e966f28bdd72d15a9eb29a64fff4409 extends Twig_Template
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
        $__internal_8ae09f46c7f1dfa59be0f5796225675a787597ae14dfbb40d3f98ba145c34585 = $this->env->getExtension("native_profiler");
        $__internal_8ae09f46c7f1dfa59be0f5796225675a787597ae14dfbb40d3f98ba145c34585->enter($__internal_8ae09f46c7f1dfa59be0f5796225675a787597ae14dfbb40d3f98ba145c34585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8ae09f46c7f1dfa59be0f5796225675a787597ae14dfbb40d3f98ba145c34585->leave($__internal_8ae09f46c7f1dfa59be0f5796225675a787597ae14dfbb40d3f98ba145c34585_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_cd8896685a166a377cada4169564a92c3f1e2ce71a5e691fa5ebb668b353f199 = $this->env->getExtension("native_profiler");
        $__internal_cd8896685a166a377cada4169564a92c3f1e2ce71a5e691fa5ebb668b353f199->enter($__internal_cd8896685a166a377cada4169564a92c3f1e2ce71a5e691fa5ebb668b353f199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'widget');
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
        
        $__internal_cd8896685a166a377cada4169564a92c3f1e2ce71a5e691fa5ebb668b353f199->leave($__internal_cd8896685a166a377cada4169564a92c3f1e2ce71a5e691fa5ebb668b353f199_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
