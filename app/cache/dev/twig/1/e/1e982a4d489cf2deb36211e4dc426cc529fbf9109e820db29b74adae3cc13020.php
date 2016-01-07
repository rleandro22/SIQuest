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
        $__internal_323e019eed02ed9324937bfb1fd09b14d19a3ef49a3bd28ecea3299923e46788 = $this->env->getExtension("native_profiler");
        $__internal_323e019eed02ed9324937bfb1fd09b14d19a3ef49a3bd28ecea3299923e46788->enter($__internal_323e019eed02ed9324937bfb1fd09b14d19a3ef49a3bd28ecea3299923e46788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_323e019eed02ed9324937bfb1fd09b14d19a3ef49a3bd28ecea3299923e46788->leave($__internal_323e019eed02ed9324937bfb1fd09b14d19a3ef49a3bd28ecea3299923e46788_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a7c38d8314a05dd6cd4e034811365d72e2801468ab0192819c12077df245bf2b = $this->env->getExtension("native_profiler");
        $__internal_a7c38d8314a05dd6cd4e034811365d72e2801468ab0192819c12077df245bf2b->enter($__internal_a7c38d8314a05dd6cd4e034811365d72e2801468ab0192819c12077df245bf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a7c38d8314a05dd6cd4e034811365d72e2801468ab0192819c12077df245bf2b->leave($__internal_a7c38d8314a05dd6cd4e034811365d72e2801468ab0192819c12077df245bf2b_prof);

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
