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
        $__internal_8e4293a262533b0a34431f115c16f2c13607a5a12c6723620ee49fa6cbe38065 = $this->env->getExtension("native_profiler");
        $__internal_8e4293a262533b0a34431f115c16f2c13607a5a12c6723620ee49fa6cbe38065->enter($__internal_8e4293a262533b0a34431f115c16f2c13607a5a12c6723620ee49fa6cbe38065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8e4293a262533b0a34431f115c16f2c13607a5a12c6723620ee49fa6cbe38065->leave($__internal_8e4293a262533b0a34431f115c16f2c13607a5a12c6723620ee49fa6cbe38065_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a01c3d3d9a788e429f1774b39ae74bd2e21107b40fdd1b8a477a9a3992206f70 = $this->env->getExtension("native_profiler");
        $__internal_a01c3d3d9a788e429f1774b39ae74bd2e21107b40fdd1b8a477a9a3992206f70->enter($__internal_a01c3d3d9a788e429f1774b39ae74bd2e21107b40fdd1b8a477a9a3992206f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a01c3d3d9a788e429f1774b39ae74bd2e21107b40fdd1b8a477a9a3992206f70->leave($__internal_a01c3d3d9a788e429f1774b39ae74bd2e21107b40fdd1b8a477a9a3992206f70_prof);

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
