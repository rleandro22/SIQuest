<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig */
class __TwigTemplate_1e982a4d489cf2deb36211e4dc426cc529fbf9109e820db29b74adae3cc13020 extends Twig_Template
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
        $__internal_a66975590e223f81ea5910f984dd83cd51b46d8419b3611c8935945d009f1d67 = $this->env->getExtension("native_profiler");
        $__internal_a66975590e223f81ea5910f984dd83cd51b46d8419b3611c8935945d009f1d67->enter($__internal_a66975590e223f81ea5910f984dd83cd51b46d8419b3611c8935945d009f1d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_a66975590e223f81ea5910f984dd83cd51b46d8419b3611c8935945d009f1d67->leave($__internal_a66975590e223f81ea5910f984dd83cd51b46d8419b3611c8935945d009f1d67_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_8b3994cea662dc6f7ed08261c29af486a2e89fae19d0a7b2484d428c4db11419 = $this->env->getExtension("native_profiler");
        $__internal_8b3994cea662dc6f7ed08261c29af486a2e89fae19d0a7b2484d428c4db11419->enter($__internal_8b3994cea662dc6f7ed08261c29af486a2e89fae19d0a7b2484d428c4db11419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b3994cea662dc6f7ed08261c29af486a2e89fae19d0a7b2484d428c4db11419->leave($__internal_8b3994cea662dc6f7ed08261c29af486a2e89fae19d0a7b2484d428c4db11419_prof);

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
