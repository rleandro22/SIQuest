<?php

/* UciBaseDatosBundle:Capitulo:new.html.twig */
class __TwigTemplate_08e0776cde871b6de2d9434b0fddee2e1ac9b1c0cbd8c04b41378471d24ee68a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Capitulo:new.html.twig", 1);
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
        $__internal_5beb49c510ac551a15210261538dc2fbef7515e07aaad8435204fe967fa208d7 = $this->env->getExtension("native_profiler");
        $__internal_5beb49c510ac551a15210261538dc2fbef7515e07aaad8435204fe967fa208d7->enter($__internal_5beb49c510ac551a15210261538dc2fbef7515e07aaad8435204fe967fa208d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Capitulo:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5beb49c510ac551a15210261538dc2fbef7515e07aaad8435204fe967fa208d7->leave($__internal_5beb49c510ac551a15210261538dc2fbef7515e07aaad8435204fe967fa208d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45c8659fbda5c8f50596875495737fa80343f074ef9a6d5160b4fabc7226e36f = $this->env->getExtension("native_profiler");
        $__internal_45c8659fbda5c8f50596875495737fa80343f074ef9a6d5160b4fabc7226e36f->enter($__internal_45c8659fbda5c8f50596875495737fa80343f074ef9a6d5160b4fabc7226e36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Capitulo creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("capitulo");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_45c8659fbda5c8f50596875495737fa80343f074ef9a6d5160b4fabc7226e36f->leave($__internal_45c8659fbda5c8f50596875495737fa80343f074ef9a6d5160b4fabc7226e36f_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Capitulo:new.html.twig";
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
