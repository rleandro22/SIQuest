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
        $__internal_7b683c62a00b5eb01dd9e84edd416f56db15e1b28f437157ec30d937c650ce29 = $this->env->getExtension("native_profiler");
        $__internal_7b683c62a00b5eb01dd9e84edd416f56db15e1b28f437157ec30d937c650ce29->enter($__internal_7b683c62a00b5eb01dd9e84edd416f56db15e1b28f437157ec30d937c650ce29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_7b683c62a00b5eb01dd9e84edd416f56db15e1b28f437157ec30d937c650ce29->leave($__internal_7b683c62a00b5eb01dd9e84edd416f56db15e1b28f437157ec30d937c650ce29_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_db4d28b2c50dd4e22056dad053199a55daff1ffede2a9b31202e975492a6a456 = $this->env->getExtension("native_profiler");
        $__internal_db4d28b2c50dd4e22056dad053199a55daff1ffede2a9b31202e975492a6a456->enter($__internal_db4d28b2c50dd4e22056dad053199a55daff1ffede2a9b31202e975492a6a456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db4d28b2c50dd4e22056dad053199a55daff1ffede2a9b31202e975492a6a456->leave($__internal_db4d28b2c50dd4e22056dad053199a55daff1ffede2a9b31202e975492a6a456_prof);

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
