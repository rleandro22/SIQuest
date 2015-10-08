<?php

/* UciBaseDatosBundle:AsistenteAcademica:edit.html.twig */
class __TwigTemplate_65341995e74e55efbfacf91062b30362b266369552f2d3557998e35bcfaa4143 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:AsistenteAcademica:edit.html.twig", 1);
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
        $__internal_7506c239ec8a43185381392a0bb6a36ed6e80ac02560477d6fbed8190d4b5bba = $this->env->getExtension("native_profiler");
        $__internal_7506c239ec8a43185381392a0bb6a36ed6e80ac02560477d6fbed8190d4b5bba->enter($__internal_7506c239ec8a43185381392a0bb6a36ed6e80ac02560477d6fbed8190d4b5bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:AsistenteAcademica:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7506c239ec8a43185381392a0bb6a36ed6e80ac02560477d6fbed8190d4b5bba->leave($__internal_7506c239ec8a43185381392a0bb6a36ed6e80ac02560477d6fbed8190d4b5bba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e9527da271a2668d7522de56a4fb91081d8f05849df8efabb839853b18e0fdd = $this->env->getExtension("native_profiler");
        $__internal_4e9527da271a2668d7522de56a4fb91081d8f05849df8efabb839853b18e0fdd->enter($__internal_4e9527da271a2668d7522de56a4fb91081d8f05849df8efabb839853b18e0fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>AsistenteAcademica edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("asistenteacademica");
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
        
        $__internal_4e9527da271a2668d7522de56a4fb91081d8f05849df8efabb839853b18e0fdd->leave($__internal_4e9527da271a2668d7522de56a4fb91081d8f05849df8efabb839853b18e0fdd_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:AsistenteAcademica:edit.html.twig";
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
