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
        $__internal_d3310f2d7564a66931a67e2c180a2a73d2846bb81e983fbc0631a1c3b00ea632 = $this->env->getExtension("native_profiler");
        $__internal_d3310f2d7564a66931a67e2c180a2a73d2846bb81e983fbc0631a1c3b00ea632->enter($__internal_d3310f2d7564a66931a67e2c180a2a73d2846bb81e983fbc0631a1c3b00ea632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d3310f2d7564a66931a67e2c180a2a73d2846bb81e983fbc0631a1c3b00ea632->leave($__internal_d3310f2d7564a66931a67e2c180a2a73d2846bb81e983fbc0631a1c3b00ea632_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_4900fd41d6fce5163084635cc35ad836e628faaab183d80388b66d607e6483f9 = $this->env->getExtension("native_profiler");
        $__internal_4900fd41d6fce5163084635cc35ad836e628faaab183d80388b66d607e6483f9->enter($__internal_4900fd41d6fce5163084635cc35ad836e628faaab183d80388b66d607e6483f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4900fd41d6fce5163084635cc35ad836e628faaab183d80388b66d607e6483f9->leave($__internal_4900fd41d6fce5163084635cc35ad836e628faaab183d80388b66d607e6483f9_prof);

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
