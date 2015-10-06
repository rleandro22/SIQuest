<?php

/* UciBaseDatosBundle:Curso:edit.html.twig */
class __TwigTemplate_55e943440b26d8aec57ea89fbcf914c35d0e10c5e26027540d3e168523b50f29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Curso:edit.html.twig", 1);
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
        $__internal_0cac78c991a75913d9b8203c99b1cc197fb15afd13b2d7811d3de823c2d93414 = $this->env->getExtension("native_profiler");
        $__internal_0cac78c991a75913d9b8203c99b1cc197fb15afd13b2d7811d3de823c2d93414->enter($__internal_0cac78c991a75913d9b8203c99b1cc197fb15afd13b2d7811d3de823c2d93414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Curso:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cac78c991a75913d9b8203c99b1cc197fb15afd13b2d7811d3de823c2d93414->leave($__internal_0cac78c991a75913d9b8203c99b1cc197fb15afd13b2d7811d3de823c2d93414_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbc0ded29fa1109bedf2050bb1d0af0fe6a6dfbd2307f18efb4038347675ca47 = $this->env->getExtension("native_profiler");
        $__internal_cbc0ded29fa1109bedf2050bb1d0af0fe6a6dfbd2307f18efb4038347675ca47->enter($__internal_cbc0ded29fa1109bedf2050bb1d0af0fe6a6dfbd2307f18efb4038347675ca47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Curso edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("curso");
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
        
        $__internal_cbc0ded29fa1109bedf2050bb1d0af0fe6a6dfbd2307f18efb4038347675ca47->leave($__internal_cbc0ded29fa1109bedf2050bb1d0af0fe6a6dfbd2307f18efb4038347675ca47_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Curso:edit.html.twig";
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
