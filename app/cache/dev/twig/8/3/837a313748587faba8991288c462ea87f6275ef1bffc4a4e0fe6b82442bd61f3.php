<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig */
class __TwigTemplate_837a313748587faba8991288c462ea87f6275ef1bffc4a4e0fe6b82442bd61f3 extends Twig_Template
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
        $__internal_fd5d5c799ecab49beda96ae7e7617ec4dadc7a665e5339b5484e7110a4c15dbc = $this->env->getExtension("native_profiler");
        $__internal_fd5d5c799ecab49beda96ae7e7617ec4dadc7a665e5339b5484e7110a4c15dbc->enter($__internal_fd5d5c799ecab49beda96ae7e7617ec4dadc7a665e5339b5484e7110a4c15dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_fd5d5c799ecab49beda96ae7e7617ec4dadc7a665e5339b5484e7110a4c15dbc->leave($__internal_fd5d5c799ecab49beda96ae7e7617ec4dadc7a665e5339b5484e7110a4c15dbc_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_604126ba18360e31de73d513b859c3eecb1e6a2b50b0caa23dca58ddcec417cb = $this->env->getExtension("native_profiler");
        $__internal_604126ba18360e31de73d513b859c3eecb1e6a2b50b0caa23dca58ddcec417cb->enter($__internal_604126ba18360e31de73d513b859c3eecb1e6a2b50b0caa23dca58ddcec417cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadL", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeL", array()), 'widget');
        echo "</div>
";
        
        $__internal_604126ba18360e31de73d513b859c3eecb1e6a2b50b0caa23dca58ddcec417cb->leave($__internal_604126ba18360e31de73d513b859c3eecb1e6a2b50b0caa23dca58ddcec417cb_prof);

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
