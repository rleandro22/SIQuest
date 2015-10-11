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
        $__internal_43da3662601d83cdfcf70af66002b917bbcc657e08242b1a7c9266dbaed3fa41 = $this->env->getExtension("native_profiler");
        $__internal_43da3662601d83cdfcf70af66002b917bbcc657e08242b1a7c9266dbaed3fa41->enter($__internal_43da3662601d83cdfcf70af66002b917bbcc657e08242b1a7c9266dbaed3fa41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Pregunta:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43da3662601d83cdfcf70af66002b917bbcc657e08242b1a7c9266dbaed3fa41->leave($__internal_43da3662601d83cdfcf70af66002b917bbcc657e08242b1a7c9266dbaed3fa41_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3d82f2aa428228814b6453216ddd620742ef92097ab7a0be13fd6652bef6d0d = $this->env->getExtension("native_profiler");
        $__internal_b3d82f2aa428228814b6453216ddd620742ef92097ab7a0be13fd6652bef6d0d->enter($__internal_b3d82f2aa428228814b6453216ddd620742ef92097ab7a0be13fd6652bef6d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b3d82f2aa428228814b6453216ddd620742ef92097ab7a0be13fd6652bef6d0d->leave($__internal_b3d82f2aa428228814b6453216ddd620742ef92097ab7a0be13fd6652bef6d0d_prof);

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
