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
        $__internal_22e2d2cc674aad6db6cadbadfb06ad5d67e15f5470c8fa21c6fd346ca03831da = $this->env->getExtension("native_profiler");
        $__internal_22e2d2cc674aad6db6cadbadfb06ad5d67e15f5470c8fa21c6fd346ca03831da->enter($__internal_22e2d2cc674aad6db6cadbadfb06ad5d67e15f5470c8fa21c6fd346ca03831da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_22e2d2cc674aad6db6cadbadfb06ad5d67e15f5470c8fa21c6fd346ca03831da->leave($__internal_22e2d2cc674aad6db6cadbadfb06ad5d67e15f5470c8fa21c6fd346ca03831da_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_ada6d0de157454a47a26270d3aab19295d1d28aa8881d1542c4e23418eac8d16 = $this->env->getExtension("native_profiler");
        $__internal_ada6d0de157454a47a26270d3aab19295d1d28aa8881d1542c4e23418eac8d16->enter($__internal_ada6d0de157454a47a26270d3aab19295d1d28aa8881d1542c4e23418eac8d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ada6d0de157454a47a26270d3aab19295d1d28aa8881d1542c4e23418eac8d16->leave($__internal_ada6d0de157454a47a26270d3aab19295d1d28aa8881d1542c4e23418eac8d16_prof);

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
