<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig */
class __TwigTemplate_5e9db6119c97f34a72e47657990c614271bdd334e5bcaf97dab02ca81183d898 extends Twig_Template
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
        $__internal_0663376bbd234c9bbd0b49101dc157f7609090f865420dce9a9a3f3001e7cb6e = $this->env->getExtension("native_profiler");
        $__internal_0663376bbd234c9bbd0b49101dc157f7609090f865420dce9a9a3f3001e7cb6e->enter($__internal_0663376bbd234c9bbd0b49101dc157f7609090f865420dce9a9a3f3001e7cb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_0663376bbd234c9bbd0b49101dc157f7609090f865420dce9a9a3f3001e7cb6e->leave($__internal_0663376bbd234c9bbd0b49101dc157f7609090f865420dce9a9a3f3001e7cb6e_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_3a56f41b168909a07cf1720843ee1136508c6bc117ba950f8b455af7daeb212e = $this->env->getExtension("native_profiler");
        $__internal_3a56f41b168909a07cf1720843ee1136508c6bc117ba950f8b455af7daeb212e->enter($__internal_3a56f41b168909a07cf1720843ee1136508c6bc117ba950f8b455af7daeb212e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3a56f41b168909a07cf1720843ee1136508c6bc117ba950f8b455af7daeb212e->leave($__internal_3a56f41b168909a07cf1720843ee1136508c6bc117ba950f8b455af7daeb212e_prof);

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
