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
        $__internal_d2bdda2a2fc1d26274b026bb67c424af9ea08a13ae702dd823ca5d790283a6c9 = $this->env->getExtension("native_profiler");
        $__internal_d2bdda2a2fc1d26274b026bb67c424af9ea08a13ae702dd823ca5d790283a6c9->enter($__internal_d2bdda2a2fc1d26274b026bb67c424af9ea08a13ae702dd823ca5d790283a6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Profesor:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2bdda2a2fc1d26274b026bb67c424af9ea08a13ae702dd823ca5d790283a6c9->leave($__internal_d2bdda2a2fc1d26274b026bb67c424af9ea08a13ae702dd823ca5d790283a6c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eab79a06c871ea95ce3845a9e512ea47261f9631a2ac3a33fa1c21e3593ac9d4 = $this->env->getExtension("native_profiler");
        $__internal_eab79a06c871ea95ce3845a9e512ea47261f9631a2ac3a33fa1c21e3593ac9d4->enter($__internal_eab79a06c871ea95ce3845a9e512ea47261f9631a2ac3a33fa1c21e3593ac9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eab79a06c871ea95ce3845a9e512ea47261f9631a2ac3a33fa1c21e3593ac9d4->leave($__internal_eab79a06c871ea95ce3845a9e512ea47261f9631a2ac3a33fa1c21e3593ac9d4_prof);

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
