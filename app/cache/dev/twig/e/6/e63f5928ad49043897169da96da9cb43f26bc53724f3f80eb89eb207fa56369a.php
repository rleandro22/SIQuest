<?php

/* UciBaseDatosBundle:Usuario:edit.html.twig */
class __TwigTemplate_e63f5928ad49043897169da96da9cb43f26bc53724f3f80eb89eb207fa56369a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Usuario:edit.html.twig", 1);
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
        $__internal_a64388ec340771fed2d3f3ff4198db34e171e3330ce0840aee6e3c34aab5cf82 = $this->env->getExtension("native_profiler");
        $__internal_a64388ec340771fed2d3f3ff4198db34e171e3330ce0840aee6e3c34aab5cf82->enter($__internal_a64388ec340771fed2d3f3ff4198db34e171e3330ce0840aee6e3c34aab5cf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Usuario:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a64388ec340771fed2d3f3ff4198db34e171e3330ce0840aee6e3c34aab5cf82->leave($__internal_a64388ec340771fed2d3f3ff4198db34e171e3330ce0840aee6e3c34aab5cf82_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e262686acd6a1d4a921e1f7bf161c18dfb8a0c9c9ea52ebee91912553ad7c94f = $this->env->getExtension("native_profiler");
        $__internal_e262686acd6a1d4a921e1f7bf161c18dfb8a0c9c9ea52ebee91912553ad7c94f->enter($__internal_e262686acd6a1d4a921e1f7bf161c18dfb8a0c9c9ea52ebee91912553ad7c94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Usuario edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("usuario");
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
        
        $__internal_e262686acd6a1d4a921e1f7bf161c18dfb8a0c9c9ea52ebee91912553ad7c94f->leave($__internal_e262686acd6a1d4a921e1f7bf161c18dfb8a0c9c9ea52ebee91912553ad7c94f_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Usuario:edit.html.twig";
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
