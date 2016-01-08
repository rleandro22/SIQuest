<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPArea.html.twig */
class __TwigTemplate_02d29caf1029bd3e5dc8d6b41272fb41158a761aec86faa08aeb63f9d0bd47af extends Twig_Template
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
        $__internal_fba9bb338a03fc08146a3eb6ebeb449e14e6424049bb4f3d3998a48f522fba22 = $this->env->getExtension("native_profiler");
        $__internal_fba9bb338a03fc08146a3eb6ebeb449e14e6424049bb4f3d3998a48f522fba22->enter($__internal_fba9bb338a03fc08146a3eb6ebeb449e14e6424049bb4f3d3998a48f522fba22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_fba9bb338a03fc08146a3eb6ebeb449e14e6424049bb4f3d3998a48f522fba22->leave($__internal_fba9bb338a03fc08146a3eb6ebeb449e14e6424049bb4f3d3998a48f522fba22_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_607c563208b6a1edb79e1687a26fa08ee6d3ae8f6f4c212884b5057dbc0dfc02 = $this->env->getExtension("native_profiler");
        $__internal_607c563208b6a1edb79e1687a26fa08ee6d3ae8f6f4c212884b5057dbc0dfc02->enter($__internal_607c563208b6a1edb79e1687a26fa08ee6d3ae8f6f4c212884b5057dbc0dfc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_607c563208b6a1edb79e1687a26fa08ee6d3ae8f6f4c212884b5057dbc0dfc02->leave($__internal_607c563208b6a1edb79e1687a26fa08ee6d3ae8f6f4c212884b5057dbc0dfc02_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPArea.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
