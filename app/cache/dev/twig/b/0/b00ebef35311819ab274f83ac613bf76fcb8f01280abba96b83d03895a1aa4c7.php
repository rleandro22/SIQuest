<?php

/* UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig */
class __TwigTemplate_b00ebef35311819ab274f83ac613bf76fcb8f01280abba96b83d03895a1aa4c7 extends Twig_Template
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
        $__internal_433d593579ca51a5f73d56a92179bce6a7b2757eaa2a10e51684d95f5368b8af = $this->env->getExtension("native_profiler");
        $__internal_433d593579ca51a5f73d56a92179bce6a7b2757eaa2a10e51684d95f5368b8af->enter($__internal_433d593579ca51a5f73d56a92179bce6a7b2757eaa2a10e51684d95f5368b8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_433d593579ca51a5f73d56a92179bce6a7b2757eaa2a10e51684d95f5368b8af->leave($__internal_433d593579ca51a5f73d56a92179bce6a7b2757eaa2a10e51684d95f5368b8af_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_88cef5f1a8257662bdc67db9ab1fa55e59578aac5d43e751724ff0246d84d1a2 = $this->env->getExtension("native_profiler");
        $__internal_88cef5f1a8257662bdc67db9ab1fa55e59578aac5d43e751724ff0246d84d1a2->enter($__internal_88cef5f1a8257662bdc67db9ab1fa55e59578aac5d43e751724ff0246d84d1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_88cef5f1a8257662bdc67db9ab1fa55e59578aac5d43e751724ff0246d84d1a2->leave($__internal_88cef5f1a8257662bdc67db9ab1fa55e59578aac5d43e751724ff0246d84d1a2_prof);

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
