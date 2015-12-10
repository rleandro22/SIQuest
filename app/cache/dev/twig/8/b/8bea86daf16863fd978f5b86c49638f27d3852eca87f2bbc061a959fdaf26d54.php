<?php

/* UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig */
class __TwigTemplate_8bea86daf16863fd978f5b86c49638f27d3852eca87f2bbc061a959fdaf26d54 extends Twig_Template
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
        $__internal_a8944a4ffb88d495520557cc4445bbdc2a7e167e9e26a86a2cabea076cbda47e = $this->env->getExtension("native_profiler");
        $__internal_a8944a4ffb88d495520557cc4445bbdc2a7e167e9e26a86a2cabea076cbda47e->enter($__internal_a8944a4ffb88d495520557cc4445bbdc2a7e167e9e26a86a2cabea076cbda47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_a8944a4ffb88d495520557cc4445bbdc2a7e167e9e26a86a2cabea076cbda47e->leave($__internal_a8944a4ffb88d495520557cc4445bbdc2a7e167e9e26a86a2cabea076cbda47e_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_60b97d5b8a52aa9b0fb0302c43b2d0a3232be9fcbbbf15abc8c3042844772201 = $this->env->getExtension("native_profiler");
        $__internal_60b97d5b8a52aa9b0fb0302c43b2d0a3232be9fcbbbf15abc8c3042844772201->enter($__internal_60b97d5b8a52aa9b0fb0302c43b2d0a3232be9fcbbbf15abc8c3042844772201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<td class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-3\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroCapitulo", array()), 'widget');
        echo "
</td>
<td>
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreCapitulo", array()), 'widget');
        echo "
</td>

";
        
        $__internal_60b97d5b8a52aa9b0fb0302c43b2d0a3232be9fcbbbf15abc8c3042844772201->leave($__internal_60b97d5b8a52aa9b0fb0302c43b2d0a3232be9fcbbbf15abc8c3042844772201_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  38 => 3,  35 => 2,  23 => 1,);
    }
}
