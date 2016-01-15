<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig */
class __TwigTemplate_f6b5cf1ef365b904e6c14cbfd3a1a6bbfa5453c999c086fc4acdbe80b95140fa extends Twig_Template
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
        $__internal_4cc844fabd94c217dd77460df1e5af43208480d22930f2d782c9eaca1e503363 = $this->env->getExtension("native_profiler");
        $__internal_4cc844fabd94c217dd77460df1e5af43208480d22930f2d782c9eaca1e503363->enter($__internal_4cc844fabd94c217dd77460df1e5af43208480d22930f2d782c9eaca1e503363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_4cc844fabd94c217dd77460df1e5af43208480d22930f2d782c9eaca1e503363->leave($__internal_4cc844fabd94c217dd77460df1e5af43208480d22930f2d782c9eaca1e503363_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_dca0dfd9755f2653a83b0d837371f8b8c2791682746fc4f8b9a9047db6d025d3 = $this->env->getExtension("native_profiler");
        $__internal_dca0dfd9755f2653a83b0d837371f8b8c2791682746fc4f8b9a9047db6d025d3->enter($__internal_dca0dfd9755f2653a83b0d837371f8b8c2791682746fc4f8b9a9047db6d025d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dca0dfd9755f2653a83b0d837371f8b8c2791682746fc4f8b9a9047db6d025d3->leave($__internal_dca0dfd9755f2653a83b0d837371f8b8c2791682746fc4f8b9a9047db6d025d3_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
