<?php

/* UciBaseDatosBundle:Cuestionario:new.html.twig */
class __TwigTemplate_2b2758a43fda5ee0a72f9e27bfe330491e8e3d44d93255095cdac9cc22b733eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Cuestionario:new.html.twig", 1);
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
        $__internal_a0f6171c36eb51ffb268c5a391353b000aaa1c11a2fc7803c5c1287b46c0f366 = $this->env->getExtension("native_profiler");
        $__internal_a0f6171c36eb51ffb268c5a391353b000aaa1c11a2fc7803c5c1287b46c0f366->enter($__internal_a0f6171c36eb51ffb268c5a391353b000aaa1c11a2fc7803c5c1287b46c0f366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Cuestionario:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0f6171c36eb51ffb268c5a391353b000aaa1c11a2fc7803c5c1287b46c0f366->leave($__internal_a0f6171c36eb51ffb268c5a391353b000aaa1c11a2fc7803c5c1287b46c0f366_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ac4c43cd7a8a7e7204b748277848e8f366e658f878d1a68d4367c982c8244b7 = $this->env->getExtension("native_profiler");
        $__internal_8ac4c43cd7a8a7e7204b748277848e8f366e658f878d1a68d4367c982c8244b7->enter($__internal_8ac4c43cd7a8a7e7204b748277848e8f366e658f878d1a68d4367c982c8244b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Cuestionario creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("cuestionario");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_8ac4c43cd7a8a7e7204b748277848e8f366e658f878d1a68d4367c982c8244b7->leave($__internal_8ac4c43cd7a8a7e7204b748277848e8f366e658f878d1a68d4367c982c8244b7_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Cuestionario:new.html.twig";
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
