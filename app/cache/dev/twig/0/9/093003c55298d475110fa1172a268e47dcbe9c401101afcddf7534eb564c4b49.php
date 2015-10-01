<?php

/* UciBaseDatosBundle:Curso:new.html.twig */
class __TwigTemplate_093003c55298d475110fa1172a268e47dcbe9c401101afcddf7534eb564c4b49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Curso:new.html.twig", 1);
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
        $__internal_3cc2238b5b69c19d5a4c3aa91ad2d50dc268be98a6a64258a3a04c6d01c00bc8 = $this->env->getExtension("native_profiler");
        $__internal_3cc2238b5b69c19d5a4c3aa91ad2d50dc268be98a6a64258a3a04c6d01c00bc8->enter($__internal_3cc2238b5b69c19d5a4c3aa91ad2d50dc268be98a6a64258a3a04c6d01c00bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Curso:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cc2238b5b69c19d5a4c3aa91ad2d50dc268be98a6a64258a3a04c6d01c00bc8->leave($__internal_3cc2238b5b69c19d5a4c3aa91ad2d50dc268be98a6a64258a3a04c6d01c00bc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_afa4406778bbbd849ba064e8cc475f17890d61fd71ee0e37e2ad74b944bc5919 = $this->env->getExtension("native_profiler");
        $__internal_afa4406778bbbd849ba064e8cc475f17890d61fd71ee0e37e2ad74b944bc5919->enter($__internal_afa4406778bbbd849ba064e8cc475f17890d61fd71ee0e37e2ad74b944bc5919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Curso creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_afa4406778bbbd849ba064e8cc475f17890d61fd71ee0e37e2ad74b944bc5919->leave($__internal_afa4406778bbbd849ba064e8cc475f17890d61fd71ee0e37e2ad74b944bc5919_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Curso:new.html.twig";
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
