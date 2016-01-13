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
        $__internal_bf946ff493a95180ef5288d9321cc9aea1427d60c567ad8ae32080fdea2ed0db = $this->env->getExtension("native_profiler");
        $__internal_bf946ff493a95180ef5288d9321cc9aea1427d60c567ad8ae32080fdea2ed0db->enter($__internal_bf946ff493a95180ef5288d9321cc9aea1427d60c567ad8ae32080fdea2ed0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_bf946ff493a95180ef5288d9321cc9aea1427d60c567ad8ae32080fdea2ed0db->leave($__internal_bf946ff493a95180ef5288d9321cc9aea1427d60c567ad8ae32080fdea2ed0db_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_707319d988b86969b2cfa11c91d8fb115abe33bf56f73b9c2af0187578b74f11 = $this->env->getExtension("native_profiler");
        $__internal_707319d988b86969b2cfa11c91d8fb115abe33bf56f73b9c2af0187578b74f11->enter($__internal_707319d988b86969b2cfa11c91d8fb115abe33bf56f73b9c2af0187578b74f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_707319d988b86969b2cfa11c91d8fb115abe33bf56f73b9c2af0187578b74f11->leave($__internal_707319d988b86969b2cfa11c91d8fb115abe33bf56f73b9c2af0187578b74f11_prof);

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
