<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig */
class __TwigTemplate_ed64cbfc60ca4d7affaaeddd3b5014afa66f55b94f2af2cd4056cf525e38ae66 extends Twig_Template
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
        $__internal_812d963f11dd46e50e6f10b68de50909271b52aa120692fdd36bff33a564a8fa = $this->env->getExtension("native_profiler");
        $__internal_812d963f11dd46e50e6f10b68de50909271b52aa120692fdd36bff33a564a8fa->enter($__internal_812d963f11dd46e50e6f10b68de50909271b52aa120692fdd36bff33a564a8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_812d963f11dd46e50e6f10b68de50909271b52aa120692fdd36bff33a564a8fa->leave($__internal_812d963f11dd46e50e6f10b68de50909271b52aa120692fdd36bff33a564a8fa_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_07c09d2d8674e920728246a734fe25a33c672a846ce1fbf12d3f220f5fd00996 = $this->env->getExtension("native_profiler");
        $__internal_07c09d2d8674e920728246a734fe25a33c672a846ce1fbf12d3f220f5fd00996->enter($__internal_07c09d2d8674e920728246a734fe25a33c672a846ce1fbf12d3f220f5fd00996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'widget');
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
        
        $__internal_07c09d2d8674e920728246a734fe25a33c672a846ce1fbf12d3f220f5fd00996->leave($__internal_07c09d2d8674e920728246a734fe25a33c672a846ce1fbf12d3f220f5fd00996_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
