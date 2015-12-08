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
        $__internal_82dc411f9556348c9d4987b43d3a47ff220d07ddb3f6da246e775178cad3ad82 = $this->env->getExtension("native_profiler");
        $__internal_82dc411f9556348c9d4987b43d3a47ff220d07ddb3f6da246e775178cad3ad82->enter($__internal_82dc411f9556348c9d4987b43d3a47ff220d07ddb3f6da246e775178cad3ad82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_82dc411f9556348c9d4987b43d3a47ff220d07ddb3f6da246e775178cad3ad82->leave($__internal_82dc411f9556348c9d4987b43d3a47ff220d07ddb3f6da246e775178cad3ad82_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_06952f6158d94dbf538b8c18db1a3adf91ed11bb8c92b3a8c7aa6da20bc7ee24 = $this->env->getExtension("native_profiler");
        $__internal_06952f6158d94dbf538b8c18db1a3adf91ed11bb8c92b3a8c7aa6da20bc7ee24->enter($__internal_06952f6158d94dbf538b8c18db1a3adf91ed11bb8c92b3a8c7aa6da20bc7ee24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_06952f6158d94dbf538b8c18db1a3adf91ed11bb8c92b3a8c7aa6da20bc7ee24->leave($__internal_06952f6158d94dbf538b8c18db1a3adf91ed11bb8c92b3a8c7aa6da20bc7ee24_prof);

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
