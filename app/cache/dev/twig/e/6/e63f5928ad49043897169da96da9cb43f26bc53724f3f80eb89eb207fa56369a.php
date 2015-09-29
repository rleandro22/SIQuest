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
        $__internal_59919687ac3e81fe1d6c6920da9a8e3ffbb33cf937f0ec8ff0d06442386a393a = $this->env->getExtension("native_profiler");
        $__internal_59919687ac3e81fe1d6c6920da9a8e3ffbb33cf937f0ec8ff0d06442386a393a->enter($__internal_59919687ac3e81fe1d6c6920da9a8e3ffbb33cf937f0ec8ff0d06442386a393a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Usuario:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59919687ac3e81fe1d6c6920da9a8e3ffbb33cf937f0ec8ff0d06442386a393a->leave($__internal_59919687ac3e81fe1d6c6920da9a8e3ffbb33cf937f0ec8ff0d06442386a393a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ed7b96983a1f9320b690028121bc30083ee8b17ed291699dd3b6f56f869fa22 = $this->env->getExtension("native_profiler");
        $__internal_1ed7b96983a1f9320b690028121bc30083ee8b17ed291699dd3b6f56f869fa22->enter($__internal_1ed7b96983a1f9320b690028121bc30083ee8b17ed291699dd3b6f56f869fa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
</ul>
";
        
        $__internal_1ed7b96983a1f9320b690028121bc30083ee8b17ed291699dd3b6f56f869fa22->leave($__internal_1ed7b96983a1f9320b690028121bc30083ee8b17ed291699dd3b6f56f869fa22_prof);

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
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
