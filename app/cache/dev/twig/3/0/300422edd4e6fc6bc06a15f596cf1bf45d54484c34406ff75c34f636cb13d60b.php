<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig */
class __TwigTemplate_300422edd4e6fc6bc06a15f596cf1bf45d54484c34406ff75c34f636cb13d60b extends Twig_Template
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
        $__internal_6f4c929ecf292c70a12b916c3bc777e7da55a040bc1ad4d8ad256d56b6463d9c = $this->env->getExtension("native_profiler");
        $__internal_6f4c929ecf292c70a12b916c3bc777e7da55a040bc1ad4d8ad256d56b6463d9c->enter($__internal_6f4c929ecf292c70a12b916c3bc777e7da55a040bc1ad4d8ad256d56b6463d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f4c929ecf292c70a12b916c3bc777e7da55a040bc1ad4d8ad256d56b6463d9c->leave($__internal_6f4c929ecf292c70a12b916c3bc777e7da55a040bc1ad4d8ad256d56b6463d9c_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_2ae4db795886091d21171dbb84476691b08e6cbf8ee24388f56420a5b33f630f = $this->env->getExtension("native_profiler");
        $__internal_2ae4db795886091d21171dbb84476691b08e6cbf8ee24388f56420a5b33f630f->enter($__internal_2ae4db795886091d21171dbb84476691b08e6cbf8ee24388f56420a5b33f630f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadT", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeT", array()), 'widget');
        echo "</div>
";
        
        $__internal_2ae4db795886091d21171dbb84476691b08e6cbf8ee24388f56420a5b33f630f->leave($__internal_2ae4db795886091d21171dbb84476691b08e6cbf8ee24388f56420a5b33f630f_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
