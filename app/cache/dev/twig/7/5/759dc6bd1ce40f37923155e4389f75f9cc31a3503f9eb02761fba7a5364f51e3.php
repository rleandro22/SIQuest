<?php

/* UciBaseDatosBundle:Profesor:edit.html.twig */
class __TwigTemplate_759dc6bd1ce40f37923155e4389f75f9cc31a3503f9eb02761fba7a5364f51e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Profesor:edit.html.twig", 1);
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
        $__internal_42ca7d0cbcc21784acb268bf1fb8df487c69bcb23a5c1655bb6bd1cf1776a6ee = $this->env->getExtension("native_profiler");
        $__internal_42ca7d0cbcc21784acb268bf1fb8df487c69bcb23a5c1655bb6bd1cf1776a6ee->enter($__internal_42ca7d0cbcc21784acb268bf1fb8df487c69bcb23a5c1655bb6bd1cf1776a6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Profesor:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42ca7d0cbcc21784acb268bf1fb8df487c69bcb23a5c1655bb6bd1cf1776a6ee->leave($__internal_42ca7d0cbcc21784acb268bf1fb8df487c69bcb23a5c1655bb6bd1cf1776a6ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb5a4ac01a3396361bf5eb3870889ab8f15a9928d7bbae226daba0ccbbf8309e = $this->env->getExtension("native_profiler");
        $__internal_fb5a4ac01a3396361bf5eb3870889ab8f15a9928d7bbae226daba0ccbbf8309e->enter($__internal_fb5a4ac01a3396361bf5eb3870889ab8f15a9928d7bbae226daba0ccbbf8309e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Profesor edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("profesor");
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
        
        $__internal_fb5a4ac01a3396361bf5eb3870889ab8f15a9928d7bbae226daba0ccbbf8309e->leave($__internal_fb5a4ac01a3396361bf5eb3870889ab8f15a9928d7bbae226daba0ccbbf8309e_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Profesor:edit.html.twig";
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
