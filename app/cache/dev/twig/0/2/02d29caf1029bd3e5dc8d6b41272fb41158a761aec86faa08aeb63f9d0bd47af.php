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
        $__internal_25328bba432764f5474a1f8aaa6ec2220c017017e7debdc2c030e675c8cfd8c7 = $this->env->getExtension("native_profiler");
        $__internal_25328bba432764f5474a1f8aaa6ec2220c017017e7debdc2c030e675c8cfd8c7->enter($__internal_25328bba432764f5474a1f8aaa6ec2220c017017e7debdc2c030e675c8cfd8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_25328bba432764f5474a1f8aaa6ec2220c017017e7debdc2c030e675c8cfd8c7->leave($__internal_25328bba432764f5474a1f8aaa6ec2220c017017e7debdc2c030e675c8cfd8c7_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_69ada4dc2c66b55b7fa2d239700bd6d4ad384dee7b5acea1c23229a74e8c7eef = $this->env->getExtension("native_profiler");
        $__internal_69ada4dc2c66b55b7fa2d239700bd6d4ad384dee7b5acea1c23229a74e8c7eef->enter($__internal_69ada4dc2c66b55b7fa2d239700bd6d4ad384dee7b5acea1c23229a74e8c7eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_69ada4dc2c66b55b7fa2d239700bd6d4ad384dee7b5acea1c23229a74e8c7eef->leave($__internal_69ada4dc2c66b55b7fa2d239700bd6d4ad384dee7b5acea1c23229a74e8c7eef_prof);

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
