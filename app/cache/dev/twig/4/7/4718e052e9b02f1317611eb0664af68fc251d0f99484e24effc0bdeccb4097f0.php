<?php

/* UciBaseDatosBundle:Usuario:new.html.twig */
class __TwigTemplate_4718e052e9b02f1317611eb0664af68fc251d0f99484e24effc0bdeccb4097f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Usuario:new.html.twig", 1);
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
        $__internal_0cf78fd5a04f79f9fb6d65718c6df7f35d51fb5cfa0bd9e488ebad7ca946189c = $this->env->getExtension("native_profiler");
        $__internal_0cf78fd5a04f79f9fb6d65718c6df7f35d51fb5cfa0bd9e488ebad7ca946189c->enter($__internal_0cf78fd5a04f79f9fb6d65718c6df7f35d51fb5cfa0bd9e488ebad7ca946189c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Usuario:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cf78fd5a04f79f9fb6d65718c6df7f35d51fb5cfa0bd9e488ebad7ca946189c->leave($__internal_0cf78fd5a04f79f9fb6d65718c6df7f35d51fb5cfa0bd9e488ebad7ca946189c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c149b7e3027e6789a8fc395145d9038be3af1abb132a43c40bc07ea265178da = $this->env->getExtension("native_profiler");
        $__internal_8c149b7e3027e6789a8fc395145d9038be3af1abb132a43c40bc07ea265178da->enter($__internal_8c149b7e3027e6789a8fc395145d9038be3af1abb132a43c40bc07ea265178da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Usuario creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
        
        $__internal_8c149b7e3027e6789a8fc395145d9038be3af1abb132a43c40bc07ea265178da->leave($__internal_8c149b7e3027e6789a8fc395145d9038be3af1abb132a43c40bc07ea265178da_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Usuario:new.html.twig";
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
