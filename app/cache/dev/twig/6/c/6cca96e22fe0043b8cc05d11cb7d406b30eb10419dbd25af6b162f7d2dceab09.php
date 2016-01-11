<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig */
class __TwigTemplate_6cca96e22fe0043b8cc05d11cb7d406b30eb10419dbd25af6b162f7d2dceab09 extends Twig_Template
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
        $__internal_1e96582e9543a0c20dca85accfa4e35cef93007de5b4b2f2f7f58b4d6fe5a7bd = $this->env->getExtension("native_profiler");
        $__internal_1e96582e9543a0c20dca85accfa4e35cef93007de5b4b2f2f7f58b4d6fe5a7bd->enter($__internal_1e96582e9543a0c20dca85accfa4e35cef93007de5b4b2f2f7f58b4d6fe5a7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_1e96582e9543a0c20dca85accfa4e35cef93007de5b4b2f2f7f58b4d6fe5a7bd->leave($__internal_1e96582e9543a0c20dca85accfa4e35cef93007de5b4b2f2f7f58b4d6fe5a7bd_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_2dbd0443b017daa8b5c05b6ce41a6fc48555e1a7ea1ce675f3ef9da3f81a8484 = $this->env->getExtension("native_profiler");
        $__internal_2dbd0443b017daa8b5c05b6ce41a6fc48555e1a7ea1ce675f3ef9da3f81a8484->enter($__internal_2dbd0443b017daa8b5c05b6ce41a6fc48555e1a7ea1ce675f3ef9da3f81a8484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'widget');
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
        
        $__internal_2dbd0443b017daa8b5c05b6ce41a6fc48555e1a7ea1ce675f3ef9da3f81a8484->leave($__internal_2dbd0443b017daa8b5c05b6ce41a6fc48555e1a7ea1ce675f3ef9da3f81a8484_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
