<?php

/* UciBaseDatosBundle:Respuesta:new.html.twig */
class __TwigTemplate_c19731bd1fcf9bf3383a83c2f5474394442d67c81902e0ccb0b5910ed0e133f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Respuesta:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0ae721f4fe560993c1c7b1ff927a11b915c1aedb6c6efd0e6d2ce050ad7a229 = $this->env->getExtension("native_profiler");
        $__internal_d0ae721f4fe560993c1c7b1ff927a11b915c1aedb6c6efd0e6d2ce050ad7a229->enter($__internal_d0ae721f4fe560993c1c7b1ff927a11b915c1aedb6c6efd0e6d2ce050ad7a229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Respuesta:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0ae721f4fe560993c1c7b1ff927a11b915c1aedb6c6efd0e6d2ce050ad7a229->leave($__internal_d0ae721f4fe560993c1c7b1ff927a11b915c1aedb6c6efd0e6d2ce050ad7a229_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3de15aec4e87eefd349b40e4c0318e83b2b914875b58e38d102858472ea23642 = $this->env->getExtension("native_profiler");
        $__internal_3de15aec4e87eefd349b40e4c0318e83b2b914875b58e38d102858472ea23642->enter($__internal_3de15aec4e87eefd349b40e4c0318e83b2b914875b58e38d102858472ea23642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Respuesta creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("respuesta");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_3de15aec4e87eefd349b40e4c0318e83b2b914875b58e38d102858472ea23642->leave($__internal_3de15aec4e87eefd349b40e4c0318e83b2b914875b58e38d102858472ea23642_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Respuesta:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
