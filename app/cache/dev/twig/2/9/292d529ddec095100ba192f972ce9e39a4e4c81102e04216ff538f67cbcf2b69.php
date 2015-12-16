<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig */
class __TwigTemplate_292d529ddec095100ba192f972ce9e39a4e4c81102e04216ff538f67cbcf2b69 extends Twig_Template
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
        $__internal_ff03619b62f8abe618f95861bbf5aa30683eb7ecc478e64f872de0439507112c = $this->env->getExtension("native_profiler");
        $__internal_ff03619b62f8abe618f95861bbf5aa30683eb7ecc478e64f872de0439507112c->enter($__internal_ff03619b62f8abe618f95861bbf5aa30683eb7ecc478e64f872de0439507112c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ff03619b62f8abe618f95861bbf5aa30683eb7ecc478e64f872de0439507112c->leave($__internal_ff03619b62f8abe618f95861bbf5aa30683eb7ecc478e64f872de0439507112c_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_2f540e75571fabaa97bee04fad6911a008bb1264a4718c60eb7a55a5a64e1556 = $this->env->getExtension("native_profiler");
        $__internal_2f540e75571fabaa97bee04fad6911a008bb1264a4718c60eb7a55a5a64e1556->enter($__internal_2f540e75571fabaa97bee04fad6911a008bb1264a4718c60eb7a55a5a64e1556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f540e75571fabaa97bee04fad6911a008bb1264a4718c60eb7a55a5a64e1556->leave($__internal_2f540e75571fabaa97bee04fad6911a008bb1264a4718c60eb7a55a5a64e1556_prof);

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
