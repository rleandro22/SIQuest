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
        $__internal_bf31966266033a65d15a209467c6f1206397fa5628ec98f7ec77a5f556497b42 = $this->env->getExtension("native_profiler");
        $__internal_bf31966266033a65d15a209467c6f1206397fa5628ec98f7ec77a5f556497b42->enter($__internal_bf31966266033a65d15a209467c6f1206397fa5628ec98f7ec77a5f556497b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_bf31966266033a65d15a209467c6f1206397fa5628ec98f7ec77a5f556497b42->leave($__internal_bf31966266033a65d15a209467c6f1206397fa5628ec98f7ec77a5f556497b42_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_854deaed8a3e8680f717016a578dd155a2fa120e4036965085ea0e09fb790ae3 = $this->env->getExtension("native_profiler");
        $__internal_854deaed8a3e8680f717016a578dd155a2fa120e4036965085ea0e09fb790ae3->enter($__internal_854deaed8a3e8680f717016a578dd155a2fa120e4036965085ea0e09fb790ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_854deaed8a3e8680f717016a578dd155a2fa120e4036965085ea0e09fb790ae3->leave($__internal_854deaed8a3e8680f717016a578dd155a2fa120e4036965085ea0e09fb790ae3_prof);

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
