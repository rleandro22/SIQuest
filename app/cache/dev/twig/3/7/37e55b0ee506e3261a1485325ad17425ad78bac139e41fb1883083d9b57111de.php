<?php

/* UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig */
class __TwigTemplate_37e55b0ee506e3261a1485325ad17425ad78bac139e41fb1883083d9b57111de extends Twig_Template
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
        $__internal_855358dda512761f5f616dc3ad807f57ed44bca64f0ba43dde6d57d4fef2b7af = $this->env->getExtension("native_profiler");
        $__internal_855358dda512761f5f616dc3ad807f57ed44bca64f0ba43dde6d57d4fef2b7af->enter($__internal_855358dda512761f5f616dc3ad807f57ed44bca64f0ba43dde6d57d4fef2b7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_855358dda512761f5f616dc3ad807f57ed44bca64f0ba43dde6d57d4fef2b7af->leave($__internal_855358dda512761f5f616dc3ad807f57ed44bca64f0ba43dde6d57d4fef2b7af_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_3e01e6785d1a36d93a04d23aa4efe3d523b52f47f409aa553076919cef006852 = $this->env->getExtension("native_profiler");
        $__internal_3e01e6785d1a36d93a04d23aa4efe3d523b52f47f409aa553076919cef006852->enter($__internal_3e01e6785d1a36d93a04d23aa4efe3d523b52f47f409aa553076919cef006852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3e01e6785d1a36d93a04d23aa4efe3d523b52f47f409aa553076919cef006852->leave($__internal_3e01e6785d1a36d93a04d23aa4efe3d523b52f47f409aa553076919cef006852_prof);

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
