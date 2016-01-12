<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig */
class __TwigTemplate_6cca96e22fe0043b8cc05d11cb7d406b30eb10419dbd25af6b162f7d2dceab09 extends Twig_Template
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
        $__internal_ec760931d62b8d3c7bc586f705c42f727e43b0514ef48a0ddfa05c11ad438205 = $this->env->getExtension("native_profiler");
        $__internal_ec760931d62b8d3c7bc586f705c42f727e43b0514ef48a0ddfa05c11ad438205->enter($__internal_ec760931d62b8d3c7bc586f705c42f727e43b0514ef48a0ddfa05c11ad438205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ec760931d62b8d3c7bc586f705c42f727e43b0514ef48a0ddfa05c11ad438205->leave($__internal_ec760931d62b8d3c7bc586f705c42f727e43b0514ef48a0ddfa05c11ad438205_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_9024aa70e50aa0aaa8c0ab07aeef95e7bc957f949f7fe055aa006a371c736a5e = $this->env->getExtension("native_profiler");
        $__internal_9024aa70e50aa0aaa8c0ab07aeef95e7bc957f949f7fe055aa006a371c736a5e->enter($__internal_9024aa70e50aa0aaa8c0ab07aeef95e7bc957f949f7fe055aa006a371c736a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'widget');
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
        
        $__internal_9024aa70e50aa0aaa8c0ab07aeef95e7bc957f949f7fe055aa006a371c736a5e->leave($__internal_9024aa70e50aa0aaa8c0ab07aeef95e7bc957f949f7fe055aa006a371c736a5e_prof);

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
