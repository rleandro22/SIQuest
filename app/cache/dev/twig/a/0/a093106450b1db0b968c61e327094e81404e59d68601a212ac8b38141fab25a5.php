<?php

/* UciBaseDatosBundle:Pmbok:edit.html.twig */
class __TwigTemplate_a093106450b1db0b968c61e327094e81404e59d68601a212ac8b38141fab25a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Pmbok:edit.html.twig", 1);
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
        $__internal_cc8583d79240715f7133ce020957495958fb27b7df84a3c981add26e0ee41d99 = $this->env->getExtension("native_profiler");
        $__internal_cc8583d79240715f7133ce020957495958fb27b7df84a3c981add26e0ee41d99->enter($__internal_cc8583d79240715f7133ce020957495958fb27b7df84a3c981add26e0ee41d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Pmbok:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc8583d79240715f7133ce020957495958fb27b7df84a3c981add26e0ee41d99->leave($__internal_cc8583d79240715f7133ce020957495958fb27b7df84a3c981add26e0ee41d99_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05d57e924e3cc65ab0e1ad481446e0fd8127f8e088a84261ce2a32d667bb9a37 = $this->env->getExtension("native_profiler");
        $__internal_05d57e924e3cc65ab0e1ad481446e0fd8127f8e088a84261ce2a32d667bb9a37->enter($__internal_05d57e924e3cc65ab0e1ad481446e0fd8127f8e088a84261ce2a32d667bb9a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pmbok edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("pmbok");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_05d57e924e3cc65ab0e1ad481446e0fd8127f8e088a84261ce2a32d667bb9a37->leave($__internal_05d57e924e3cc65ab0e1ad481446e0fd8127f8e088a84261ce2a32d667bb9a37_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Pmbok:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
