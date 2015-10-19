<?php

/* UciBaseDatosBundle:GrupoProcesos:edit.html.twig */
class __TwigTemplate_55ccc076ac8f3cc2cbd1dafde911ab401690abdbf3c7647ae6b26a36ec154d6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:GrupoProcesos:edit.html.twig", 1);
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
        $__internal_a5ba57e55114be3fc10f5803814375f36efe78803009f1011cddde89e4ecfc79 = $this->env->getExtension("native_profiler");
        $__internal_a5ba57e55114be3fc10f5803814375f36efe78803009f1011cddde89e4ecfc79->enter($__internal_a5ba57e55114be3fc10f5803814375f36efe78803009f1011cddde89e4ecfc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:GrupoProcesos:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5ba57e55114be3fc10f5803814375f36efe78803009f1011cddde89e4ecfc79->leave($__internal_a5ba57e55114be3fc10f5803814375f36efe78803009f1011cddde89e4ecfc79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2ef9e785210013fe074c5e3e48d258c2017a3d1bccadd14a499eca972eec6a8 = $this->env->getExtension("native_profiler");
        $__internal_d2ef9e785210013fe074c5e3e48d258c2017a3d1bccadd14a499eca972eec6a8->enter($__internal_d2ef9e785210013fe074c5e3e48d258c2017a3d1bccadd14a499eca972eec6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>GrupoProcesos edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("grupoprocesos");
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
        
        $__internal_d2ef9e785210013fe074c5e3e48d258c2017a3d1bccadd14a499eca972eec6a8->leave($__internal_d2ef9e785210013fe074c5e3e48d258c2017a3d1bccadd14a499eca972eec6a8_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:GrupoProcesos:edit.html.twig";
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
