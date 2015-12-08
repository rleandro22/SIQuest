<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig */
class __TwigTemplate_9ac031e3100438512c1a3107b1b084dc82d4db3a7f7dd42c5047e25e7a097d67 extends Twig_Template
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
        $__internal_5a729be9ef51625814a6bf5d9f5ea4ad432b2f32619c4200d5fea47ebd56a921 = $this->env->getExtension("native_profiler");
        $__internal_5a729be9ef51625814a6bf5d9f5ea4ad432b2f32619c4200d5fea47ebd56a921->enter($__internal_5a729be9ef51625814a6bf5d9f5ea4ad432b2f32619c4200d5fea47ebd56a921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a729be9ef51625814a6bf5d9f5ea4ad432b2f32619c4200d5fea47ebd56a921->leave($__internal_5a729be9ef51625814a6bf5d9f5ea4ad432b2f32619c4200d5fea47ebd56a921_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_4df638dcf52b2c4a2065474a6b3e0e0f08ba7668d412198d6f345e2e023ef83e = $this->env->getExtension("native_profiler");
        $__internal_4df638dcf52b2c4a2065474a6b3e0e0f08ba7668d412198d6f345e2e023ef83e->enter($__internal_4df638dcf52b2c4a2065474a6b3e0e0f08ba7668d412198d6f345e2e023ef83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), 'widget');
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
        
        $__internal_4df638dcf52b2c4a2065474a6b3e0e0f08ba7668d412198d6f345e2e023ef83e->leave($__internal_4df638dcf52b2c4a2065474a6b3e0e0f08ba7668d412198d6f345e2e023ef83e_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
