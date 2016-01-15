<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig */
class __TwigTemplate_68e29ee93916596d947a8d0812de96798c17c3a284bfb988b1fbb06b8bc90ca2 extends Twig_Template
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
        $__internal_dacb17ab67f470e472395b3a31a11cce29d06cd2e63fb54321afdddf5b555c27 = $this->env->getExtension("native_profiler");
        $__internal_dacb17ab67f470e472395b3a31a11cce29d06cd2e63fb54321afdddf5b555c27->enter($__internal_dacb17ab67f470e472395b3a31a11cce29d06cd2e63fb54321afdddf5b555c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_dacb17ab67f470e472395b3a31a11cce29d06cd2e63fb54321afdddf5b555c27->leave($__internal_dacb17ab67f470e472395b3a31a11cce29d06cd2e63fb54321afdddf5b555c27_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_227dd18ed2b35a7db4a6642bcb591829cf754c49102f6248bf62175b2e338907 = $this->env->getExtension("native_profiler");
        $__internal_227dd18ed2b35a7db4a6642bcb591829cf754c49102f6248bf62175b2e338907->enter($__internal_227dd18ed2b35a7db4a6642bcb591829cf754c49102f6248bf62175b2e338907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_227dd18ed2b35a7db4a6642bcb591829cf754c49102f6248bf62175b2e338907->leave($__internal_227dd18ed2b35a7db4a6642bcb591829cf754c49102f6248bf62175b2e338907_prof);

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
