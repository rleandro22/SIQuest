<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig */
class __TwigTemplate_f3535588cce02c443be91f349878943094f98a6521b0466069eaa5cbe23ef51c extends Twig_Template
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
        $__internal_dbbbdbc268e76bdcd55a981e3e6f19aa691b7e6e0c7d81f6590d86b83c98f0c7 = $this->env->getExtension("native_profiler");
        $__internal_dbbbdbc268e76bdcd55a981e3e6f19aa691b7e6e0c7d81f6590d86b83c98f0c7->enter($__internal_dbbbdbc268e76bdcd55a981e3e6f19aa691b7e6e0c7d81f6590d86b83c98f0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_dbbbdbc268e76bdcd55a981e3e6f19aa691b7e6e0c7d81f6590d86b83c98f0c7->leave($__internal_dbbbdbc268e76bdcd55a981e3e6f19aa691b7e6e0c7d81f6590d86b83c98f0c7_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_998383eea1512efbfd1bb663f0bef4bbe1fd29f3f372f5375e5f0e8c90fc9476 = $this->env->getExtension("native_profiler");
        $__internal_998383eea1512efbfd1bb663f0bef4bbe1fd29f3f372f5375e5f0e8c90fc9476->enter($__internal_998383eea1512efbfd1bb663f0bef4bbe1fd29f3f372f5375e5f0e8c90fc9476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_998383eea1512efbfd1bb663f0bef4bbe1fd29f3f372f5375e5f0e8c90fc9476->leave($__internal_998383eea1512efbfd1bb663f0bef4bbe1fd29f3f372f5375e5f0e8c90fc9476_prof);

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
