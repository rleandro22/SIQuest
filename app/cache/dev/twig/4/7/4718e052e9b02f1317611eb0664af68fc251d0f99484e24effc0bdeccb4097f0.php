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
        $__internal_d09b9f076c709ccf812ddc2dd0c25954cfbc62d0b744ffbba2addfd9f2976fc5 = $this->env->getExtension("native_profiler");
        $__internal_d09b9f076c709ccf812ddc2dd0c25954cfbc62d0b744ffbba2addfd9f2976fc5->enter($__internal_d09b9f076c709ccf812ddc2dd0c25954cfbc62d0b744ffbba2addfd9f2976fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Usuario:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d09b9f076c709ccf812ddc2dd0c25954cfbc62d0b744ffbba2addfd9f2976fc5->leave($__internal_d09b9f076c709ccf812ddc2dd0c25954cfbc62d0b744ffbba2addfd9f2976fc5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e79a570e6ee05162c772e2e6ca9411233b97f38a4a5d98f0ecb9d36a3e8d113 = $this->env->getExtension("native_profiler");
        $__internal_3e79a570e6ee05162c772e2e6ca9411233b97f38a4a5d98f0ecb9d36a3e8d113->enter($__internal_3e79a570e6ee05162c772e2e6ca9411233b97f38a4a5d98f0ecb9d36a3e8d113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3e79a570e6ee05162c772e2e6ca9411233b97f38a4a5d98f0ecb9d36a3e8d113->leave($__internal_3e79a570e6ee05162c772e2e6ca9411233b97f38a4a5d98f0ecb9d36a3e8d113_prof);

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
