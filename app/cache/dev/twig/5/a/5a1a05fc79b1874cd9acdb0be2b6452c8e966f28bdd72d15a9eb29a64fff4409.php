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
        $__internal_929543c5cc4e6fd27d8776790639e54b00c0549926292f9f6970da7d9b6c5ec7 = $this->env->getExtension("native_profiler");
        $__internal_929543c5cc4e6fd27d8776790639e54b00c0549926292f9f6970da7d9b6c5ec7->enter($__internal_929543c5cc4e6fd27d8776790639e54b00c0549926292f9f6970da7d9b6c5ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_929543c5cc4e6fd27d8776790639e54b00c0549926292f9f6970da7d9b6c5ec7->leave($__internal_929543c5cc4e6fd27d8776790639e54b00c0549926292f9f6970da7d9b6c5ec7_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_922ef6e3c31ba3d33ff65b0b4d8d98d9ddc0d146aed3565e433be3ac2ff25d42 = $this->env->getExtension("native_profiler");
        $__internal_922ef6e3c31ba3d33ff65b0b4d8d98d9ddc0d146aed3565e433be3ac2ff25d42->enter($__internal_922ef6e3c31ba3d33ff65b0b4d8d98d9ddc0d146aed3565e433be3ac2ff25d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_922ef6e3c31ba3d33ff65b0b4d8d98d9ddc0d146aed3565e433be3ac2ff25d42->leave($__internal_922ef6e3c31ba3d33ff65b0b4d8d98d9ddc0d146aed3565e433be3ac2ff25d42_prof);

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
