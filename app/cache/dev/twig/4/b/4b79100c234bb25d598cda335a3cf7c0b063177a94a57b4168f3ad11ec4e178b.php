<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPGrupo.html.twig */
class __TwigTemplate_4b79100c234bb25d598cda335a3cf7c0b063177a94a57b4168f3ad11ec4e178b extends Twig_Template
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
        $__internal_a920a6b5b933923b31e1bc1c7766568dd6892a3fd165bed6448aae8d8ebcf311 = $this->env->getExtension("native_profiler");
        $__internal_a920a6b5b933923b31e1bc1c7766568dd6892a3fd165bed6448aae8d8ebcf311->enter($__internal_a920a6b5b933923b31e1bc1c7766568dd6892a3fd165bed6448aae8d8ebcf311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_a920a6b5b933923b31e1bc1c7766568dd6892a3fd165bed6448aae8d8ebcf311->leave($__internal_a920a6b5b933923b31e1bc1c7766568dd6892a3fd165bed6448aae8d8ebcf311_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_b60ba1435bbc5cb51a475fdef57377ac08323247ab7bb5412a5e50a92c86b15c = $this->env->getExtension("native_profiler");
        $__internal_b60ba1435bbc5cb51a475fdef57377ac08323247ab7bb5412a5e50a92c86b15c->enter($__internal_b60ba1435bbc5cb51a475fdef57377ac08323247ab7bb5412a5e50a92c86b15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b60ba1435bbc5cb51a475fdef57377ac08323247ab7bb5412a5e50a92c86b15c->leave($__internal_b60ba1435bbc5cb51a475fdef57377ac08323247ab7bb5412a5e50a92c86b15c_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPGrupo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
