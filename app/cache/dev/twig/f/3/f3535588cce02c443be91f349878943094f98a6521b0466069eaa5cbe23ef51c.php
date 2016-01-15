<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig */
class __TwigTemplate_f3535588cce02c443be91f349878943094f98a6521b0466069eaa5cbe23ef51c extends Twig_Template
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
        $__internal_359d2a8ce276dc0255ed91ecfbe6a354072fe66178f0955427ca5081f5315735 = $this->env->getExtension("native_profiler");
        $__internal_359d2a8ce276dc0255ed91ecfbe6a354072fe66178f0955427ca5081f5315735->enter($__internal_359d2a8ce276dc0255ed91ecfbe6a354072fe66178f0955427ca5081f5315735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_359d2a8ce276dc0255ed91ecfbe6a354072fe66178f0955427ca5081f5315735->leave($__internal_359d2a8ce276dc0255ed91ecfbe6a354072fe66178f0955427ca5081f5315735_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a457e5a2156e885d4e1676a5e985173227a20a465365f775fb6e22aa428babde = $this->env->getExtension("native_profiler");
        $__internal_a457e5a2156e885d4e1676a5e985173227a20a465365f775fb6e22aa428babde->enter($__internal_a457e5a2156e885d4e1676a5e985173227a20a465365f775fb6e22aa428babde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'widget');
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
        
        $__internal_a457e5a2156e885d4e1676a5e985173227a20a465365f775fb6e22aa428babde->leave($__internal_a457e5a2156e885d4e1676a5e985173227a20a465365f775fb6e22aa428babde_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
