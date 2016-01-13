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
        $__internal_52a229243b2bbd7f61aae381b68bce7323524f1fc891497c1ae840cec341da36 = $this->env->getExtension("native_profiler");
        $__internal_52a229243b2bbd7f61aae381b68bce7323524f1fc891497c1ae840cec341da36->enter($__internal_52a229243b2bbd7f61aae381b68bce7323524f1fc891497c1ae840cec341da36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_52a229243b2bbd7f61aae381b68bce7323524f1fc891497c1ae840cec341da36->leave($__internal_52a229243b2bbd7f61aae381b68bce7323524f1fc891497c1ae840cec341da36_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7a2237ea40a9381471ab5335caea2f78de65dd3579c7b2df7c96f2319add563f = $this->env->getExtension("native_profiler");
        $__internal_7a2237ea40a9381471ab5335caea2f78de65dd3579c7b2df7c96f2319add563f->enter($__internal_7a2237ea40a9381471ab5335caea2f78de65dd3579c7b2df7c96f2319add563f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a2237ea40a9381471ab5335caea2f78de65dd3579c7b2df7c96f2319add563f->leave($__internal_7a2237ea40a9381471ab5335caea2f78de65dd3579c7b2df7c96f2319add563f_prof);

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
