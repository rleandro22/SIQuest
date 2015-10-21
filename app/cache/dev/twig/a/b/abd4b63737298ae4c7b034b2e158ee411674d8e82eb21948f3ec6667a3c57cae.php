<?php

/* UciBaseDatosBundle:Pregunta:edit.html.twig */
class __TwigTemplate_abd4b63737298ae4c7b034b2e158ee411674d8e82eb21948f3ec6667a3c57cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Pregunta:edit.html.twig", 1);
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
        $__internal_2ef48add54e1280ee09e8e4290d0e648f4a11c6913ad30e14239f7fe08b5284b = $this->env->getExtension("native_profiler");
        $__internal_2ef48add54e1280ee09e8e4290d0e648f4a11c6913ad30e14239f7fe08b5284b->enter($__internal_2ef48add54e1280ee09e8e4290d0e648f4a11c6913ad30e14239f7fe08b5284b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Pregunta:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ef48add54e1280ee09e8e4290d0e648f4a11c6913ad30e14239f7fe08b5284b->leave($__internal_2ef48add54e1280ee09e8e4290d0e648f4a11c6913ad30e14239f7fe08b5284b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52b859580af22c20e3dbe737f00f6a79276da5388ab00c68c59393b7c7d6c86a = $this->env->getExtension("native_profiler");
        $__internal_52b859580af22c20e3dbe737f00f6a79276da5388ab00c68c59393b7c7d6c86a->enter($__internal_52b859580af22c20e3dbe737f00f6a79276da5388ab00c68c59393b7c7d6c86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pregunta edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("pregunta");
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
        
        $__internal_52b859580af22c20e3dbe737f00f6a79276da5388ab00c68c59393b7c7d6c86a->leave($__internal_52b859580af22c20e3dbe737f00f6a79276da5388ab00c68c59393b7c7d6c86a_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Pregunta:edit.html.twig";
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
