<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig */
class __TwigTemplate_8b19e6582a101fe45aff61cd19a32507afdf78f58033d6673ff254aa94b3eaac extends Twig_Template
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
        $__internal_0449a7f8b45933945e90c43a69b10599cf5cf26eb84448d0c801bf7c89820b74 = $this->env->getExtension("native_profiler");
        $__internal_0449a7f8b45933945e90c43a69b10599cf5cf26eb84448d0c801bf7c89820b74->enter($__internal_0449a7f8b45933945e90c43a69b10599cf5cf26eb84448d0c801bf7c89820b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_0449a7f8b45933945e90c43a69b10599cf5cf26eb84448d0c801bf7c89820b74->leave($__internal_0449a7f8b45933945e90c43a69b10599cf5cf26eb84448d0c801bf7c89820b74_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7ef14b81139c8a7b83a44b4598b255ba39e55d5e1dd17cccb4c60d5254b4962f = $this->env->getExtension("native_profiler");
        $__internal_7ef14b81139c8a7b83a44b4598b255ba39e55d5e1dd17cccb4c60d5254b4962f->enter($__internal_7ef14b81139c8a7b83a44b4598b255ba39e55d5e1dd17cccb4c60d5254b4962f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7ef14b81139c8a7b83a44b4598b255ba39e55d5e1dd17cccb4c60d5254b4962f->leave($__internal_7ef14b81139c8a7b83a44b4598b255ba39e55d5e1dd17cccb4c60d5254b4962f_prof);

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
