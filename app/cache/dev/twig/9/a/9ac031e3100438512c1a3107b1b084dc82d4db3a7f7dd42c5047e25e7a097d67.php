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
        $__internal_6fdde72f4d6842f5e799514d19f91adcd70b0a25014a9f2a9af6ec55f80ab15e = $this->env->getExtension("native_profiler");
        $__internal_6fdde72f4d6842f5e799514d19f91adcd70b0a25014a9f2a9af6ec55f80ab15e->enter($__internal_6fdde72f4d6842f5e799514d19f91adcd70b0a25014a9f2a9af6ec55f80ab15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6fdde72f4d6842f5e799514d19f91adcd70b0a25014a9f2a9af6ec55f80ab15e->leave($__internal_6fdde72f4d6842f5e799514d19f91adcd70b0a25014a9f2a9af6ec55f80ab15e_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_4b3d4702c7295c0248180c6383b4b4390bcbc89397570c6daa6512cd2eae1f92 = $this->env->getExtension("native_profiler");
        $__internal_4b3d4702c7295c0248180c6383b4b4390bcbc89397570c6daa6512cd2eae1f92->enter($__internal_4b3d4702c7295c0248180c6383b4b4390bcbc89397570c6daa6512cd2eae1f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4b3d4702c7295c0248180c6383b4b4390bcbc89397570c6daa6512cd2eae1f92->leave($__internal_4b3d4702c7295c0248180c6383b4b4390bcbc89397570c6daa6512cd2eae1f92_prof);

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
