<?php

/* UciBaseDatosBundle:Pregunta:new.html.twig */
class __TwigTemplate_d3e2661e78cf5a750f51f572a5863da8c4e8e5eb6621c2064238b97c1a938342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Pregunta:new.html.twig", 1);
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
        $__internal_ba53834d7db11000f2d83221644e88c189f947f640dcfd1f08c71e15ef321e10 = $this->env->getExtension("native_profiler");
        $__internal_ba53834d7db11000f2d83221644e88c189f947f640dcfd1f08c71e15ef321e10->enter($__internal_ba53834d7db11000f2d83221644e88c189f947f640dcfd1f08c71e15ef321e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Pregunta:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba53834d7db11000f2d83221644e88c189f947f640dcfd1f08c71e15ef321e10->leave($__internal_ba53834d7db11000f2d83221644e88c189f947f640dcfd1f08c71e15ef321e10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f1e05dd71f9f424b5523913ade11a33bae2cc146b8b7f999a76098f1f528186 = $this->env->getExtension("native_profiler");
        $__internal_1f1e05dd71f9f424b5523913ade11a33bae2cc146b8b7f999a76098f1f528186->enter($__internal_1f1e05dd71f9f424b5523913ade11a33bae2cc146b8b7f999a76098f1f528186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pregunta creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_1f1e05dd71f9f424b5523913ade11a33bae2cc146b8b7f999a76098f1f528186->leave($__internal_1f1e05dd71f9f424b5523913ade11a33bae2cc146b8b7f999a76098f1f528186_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Pregunta:new.html.twig";
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
