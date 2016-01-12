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
        $__internal_752381ef31f3bfcb50e3af3dfc90e1557e4bcef491b44047a122c7b92760266a = $this->env->getExtension("native_profiler");
        $__internal_752381ef31f3bfcb50e3af3dfc90e1557e4bcef491b44047a122c7b92760266a->enter($__internal_752381ef31f3bfcb50e3af3dfc90e1557e4bcef491b44047a122c7b92760266a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_752381ef31f3bfcb50e3af3dfc90e1557e4bcef491b44047a122c7b92760266a->leave($__internal_752381ef31f3bfcb50e3af3dfc90e1557e4bcef491b44047a122c7b92760266a_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_dd747133178fffa1a5719dafbe06661c5968f2d99447abee9042d9c962c48252 = $this->env->getExtension("native_profiler");
        $__internal_dd747133178fffa1a5719dafbe06661c5968f2d99447abee9042d9c962c48252->enter($__internal_dd747133178fffa1a5719dafbe06661c5968f2d99447abee9042d9c962c48252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dd747133178fffa1a5719dafbe06661c5968f2d99447abee9042d9c962c48252->leave($__internal_dd747133178fffa1a5719dafbe06661c5968f2d99447abee9042d9c962c48252_prof);

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
