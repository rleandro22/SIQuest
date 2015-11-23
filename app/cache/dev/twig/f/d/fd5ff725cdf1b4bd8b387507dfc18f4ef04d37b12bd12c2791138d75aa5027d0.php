<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig */
class __TwigTemplate_fd5ff725cdf1b4bd8b387507dfc18f4ef04d37b12bd12c2791138d75aa5027d0 extends Twig_Template
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
        $__internal_0ec78ef56bae97d90c3d0d7208ccef7c9cea93328ff791c261e1cf156fcae607 = $this->env->getExtension("native_profiler");
        $__internal_0ec78ef56bae97d90c3d0d7208ccef7c9cea93328ff791c261e1cf156fcae607->enter($__internal_0ec78ef56bae97d90c3d0d7208ccef7c9cea93328ff791c261e1cf156fcae607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_0ec78ef56bae97d90c3d0d7208ccef7c9cea93328ff791c261e1cf156fcae607->leave($__internal_0ec78ef56bae97d90c3d0d7208ccef7c9cea93328ff791c261e1cf156fcae607_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_6975297ed4a7b3b64b1c070c6889956d971875986fe5d6e1ac12a9014d9f6403 = $this->env->getExtension("native_profiler");
        $__internal_6975297ed4a7b3b64b1c070c6889956d971875986fe5d6e1ac12a9014d9f6403->enter($__internal_6975297ed4a7b3b64b1c070c6889956d971875986fe5d6e1ac12a9014d9f6403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6975297ed4a7b3b64b1c070c6889956d971875986fe5d6e1ac12a9014d9f6403->leave($__internal_6975297ed4a7b3b64b1c070c6889956d971875986fe5d6e1ac12a9014d9f6403_prof);

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
