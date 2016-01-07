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
        $__internal_3c0a8868afdef38cdae5e40e8d4dbd9e9936ccc006c7a6606d51c0e7e3640064 = $this->env->getExtension("native_profiler");
        $__internal_3c0a8868afdef38cdae5e40e8d4dbd9e9936ccc006c7a6606d51c0e7e3640064->enter($__internal_3c0a8868afdef38cdae5e40e8d4dbd9e9936ccc006c7a6606d51c0e7e3640064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_3c0a8868afdef38cdae5e40e8d4dbd9e9936ccc006c7a6606d51c0e7e3640064->leave($__internal_3c0a8868afdef38cdae5e40e8d4dbd9e9936ccc006c7a6606d51c0e7e3640064_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a9c73cae7e9339a5547b2468b500d948aa4daec26c978ef1a57535847d5126d5 = $this->env->getExtension("native_profiler");
        $__internal_a9c73cae7e9339a5547b2468b500d948aa4daec26c978ef1a57535847d5126d5->enter($__internal_a9c73cae7e9339a5547b2468b500d948aa4daec26c978ef1a57535847d5126d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a9c73cae7e9339a5547b2468b500d948aa4daec26c978ef1a57535847d5126d5->leave($__internal_a9c73cae7e9339a5547b2468b500d948aa4daec26c978ef1a57535847d5126d5_prof);

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
