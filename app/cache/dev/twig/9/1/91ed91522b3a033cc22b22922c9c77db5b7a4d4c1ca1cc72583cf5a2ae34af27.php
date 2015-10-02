<?php

/* UciAdministradorBundle:VistaCategoria:editarCategoria.html.twig */
class __TwigTemplate_91ed91522b3a033cc22b22922c9c77db5b7a4d4c1ca1cc72583cf5a2ae34af27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc67d5f09c39972f9946f3d1f4b0e93c9c287ad37e5695d341de31bfc8ee5f90 = $this->env->getExtension("native_profiler");
        $__internal_bc67d5f09c39972f9946f3d1f4b0e93c9c287ad37e5695d341de31bfc8ee5f90->enter($__internal_bc67d5f09c39972f9946f3d1f4b0e93c9c287ad37e5695d341de31bfc8ee5f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:editarCategoria.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
       <fieldset>
           ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "generacion", array()), 'row');
        echo "
       </fieldset>
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        
        $__internal_bc67d5f09c39972f9946f3d1f4b0e93c9c287ad37e5695d341de31bfc8ee5f90->leave($__internal_bc67d5f09c39972f9946f3d1f4b0e93c9c287ad37e5695d341de31bfc8ee5f90_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCategoria:editarCategoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  27 => 3,  22 => 1,);
    }
}
