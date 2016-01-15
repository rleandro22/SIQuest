<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig */
class __TwigTemplate_5e9db6119c97f34a72e47657990c614271bdd334e5bcaf97dab02ca81183d898 extends Twig_Template
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
        $__internal_f3e066c39bea2d1ddf533168d8dc4ba5fd3101476ac4633316b0e98a740b6197 = $this->env->getExtension("native_profiler");
        $__internal_f3e066c39bea2d1ddf533168d8dc4ba5fd3101476ac4633316b0e98a740b6197->enter($__internal_f3e066c39bea2d1ddf533168d8dc4ba5fd3101476ac4633316b0e98a740b6197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f3e066c39bea2d1ddf533168d8dc4ba5fd3101476ac4633316b0e98a740b6197->leave($__internal_f3e066c39bea2d1ddf533168d8dc4ba5fd3101476ac4633316b0e98a740b6197_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_48ab51a631734a4ade2b0f6d466f16d329d0cd72ecf7dbee55baa8bb84bfebe8 = $this->env->getExtension("native_profiler");
        $__internal_48ab51a631734a4ade2b0f6d466f16d329d0cd72ecf7dbee55baa8bb84bfebe8->enter($__internal_48ab51a631734a4ade2b0f6d466f16d329d0cd72ecf7dbee55baa8bb84bfebe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_48ab51a631734a4ade2b0f6d466f16d329d0cd72ecf7dbee55baa8bb84bfebe8->leave($__internal_48ab51a631734a4ade2b0f6d466f16d329d0cd72ecf7dbee55baa8bb84bfebe8_prof);

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
