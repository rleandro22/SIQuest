<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig */
class __TwigTemplate_3340635f89ca6be7ceba8f4a349e48d5fd8268e77ad8ff1b6ad89fad91ea43f6 extends Twig_Template
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
        $__internal_a9596fe5f8229b9e101f8755162971241faa1692b48ced73c962be10b72c395f = $this->env->getExtension("native_profiler");
        $__internal_a9596fe5f8229b9e101f8755162971241faa1692b48ced73c962be10b72c395f->enter($__internal_a9596fe5f8229b9e101f8755162971241faa1692b48ced73c962be10b72c395f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_a9596fe5f8229b9e101f8755162971241faa1692b48ced73c962be10b72c395f->leave($__internal_a9596fe5f8229b9e101f8755162971241faa1692b48ced73c962be10b72c395f_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_27528e80bfeb56197e6181db1d3ef55d86dba7c43dec0fb1d8a97a49eb876143 = $this->env->getExtension("native_profiler");
        $__internal_27528e80bfeb56197e6181db1d3ef55d86dba7c43dec0fb1d8a97a49eb876143->enter($__internal_27528e80bfeb56197e6181db1d3ef55d86dba7c43dec0fb1d8a97a49eb876143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_27528e80bfeb56197e6181db1d3ef55d86dba7c43dec0fb1d8a97a49eb876143->leave($__internal_27528e80bfeb56197e6181db1d3ef55d86dba7c43dec0fb1d8a97a49eb876143_prof);

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