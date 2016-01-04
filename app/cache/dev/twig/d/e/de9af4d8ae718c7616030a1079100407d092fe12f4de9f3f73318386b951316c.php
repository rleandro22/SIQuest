<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPLibro.html.twig */
class __TwigTemplate_de9af4d8ae718c7616030a1079100407d092fe12f4de9f3f73318386b951316c extends Twig_Template
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
        $__internal_53b0c1a0712219cf67e4d6bbb0251989154542cf4047ea09bd0054ffe47a7b18 = $this->env->getExtension("native_profiler");
        $__internal_53b0c1a0712219cf67e4d6bbb0251989154542cf4047ea09bd0054ffe47a7b18->enter($__internal_53b0c1a0712219cf67e4d6bbb0251989154542cf4047ea09bd0054ffe47a7b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_53b0c1a0712219cf67e4d6bbb0251989154542cf4047ea09bd0054ffe47a7b18->leave($__internal_53b0c1a0712219cf67e4d6bbb0251989154542cf4047ea09bd0054ffe47a7b18_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_3e6afcaf5bcef07845fcd8b485c62fe1e5b4b0d2017f1e9d7c7fca3dabd4aae8 = $this->env->getExtension("native_profiler");
        $__internal_3e6afcaf5bcef07845fcd8b485c62fe1e5b4b0d2017f1e9d7c7fca3dabd4aae8->enter($__internal_3e6afcaf5bcef07845fcd8b485c62fe1e5b4b0d2017f1e9d7c7fca3dabd4aae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget');
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
        
        $__internal_3e6afcaf5bcef07845fcd8b485c62fe1e5b4b0d2017f1e9d7c7fca3dabd4aae8->leave($__internal_3e6afcaf5bcef07845fcd8b485c62fe1e5b4b0d2017f1e9d7c7fca3dabd4aae8_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPLibro.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
