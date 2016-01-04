<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig */
class __TwigTemplate_3340635f89ca6be7ceba8f4a349e48d5fd8268e77ad8ff1b6ad89fad91ea43f6 extends Twig_Template
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
        $__internal_c9eb3cd484767636ffccd9481868bd1ba360980e5c567a308dcf80d8f1e06734 = $this->env->getExtension("native_profiler");
        $__internal_c9eb3cd484767636ffccd9481868bd1ba360980e5c567a308dcf80d8f1e06734->enter($__internal_c9eb3cd484767636ffccd9481868bd1ba360980e5c567a308dcf80d8f1e06734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c9eb3cd484767636ffccd9481868bd1ba360980e5c567a308dcf80d8f1e06734->leave($__internal_c9eb3cd484767636ffccd9481868bd1ba360980e5c567a308dcf80d8f1e06734_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_8bfc1c17c6467e17984734dc28b1e7b5ef58a2bb15e4679959ebb1a7bcb39d94 = $this->env->getExtension("native_profiler");
        $__internal_8bfc1c17c6467e17984734dc28b1e7b5ef58a2bb15e4679959ebb1a7bcb39d94->enter($__internal_8bfc1c17c6467e17984734dc28b1e7b5ef58a2bb15e4679959ebb1a7bcb39d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget');
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
        
        $__internal_8bfc1c17c6467e17984734dc28b1e7b5ef58a2bb15e4679959ebb1a7bcb39d94->leave($__internal_8bfc1c17c6467e17984734dc28b1e7b5ef58a2bb15e4679959ebb1a7bcb39d94_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
