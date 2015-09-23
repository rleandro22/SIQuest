<?php

/* UciBaseDatosBundle:Rol:new.html.twig */
class __TwigTemplate_f69acda82cfa1faed9e898196b3af3c1eac9d9dba0c0fbb2c3cbb6d73421a731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Rol:new.html.twig", 1);
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
        $__internal_7c6277d9fa21ef120e1c5fe4d086c8feda8c0593abfe98eb2bb459628ea91463 = $this->env->getExtension("native_profiler");
        $__internal_7c6277d9fa21ef120e1c5fe4d086c8feda8c0593abfe98eb2bb459628ea91463->enter($__internal_7c6277d9fa21ef120e1c5fe4d086c8feda8c0593abfe98eb2bb459628ea91463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Rol:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c6277d9fa21ef120e1c5fe4d086c8feda8c0593abfe98eb2bb459628ea91463->leave($__internal_7c6277d9fa21ef120e1c5fe4d086c8feda8c0593abfe98eb2bb459628ea91463_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dc5d3049bc028a90f7c585f647c46f41b0f16465bb62f0bfd6dc9364bb23089 = $this->env->getExtension("native_profiler");
        $__internal_8dc5d3049bc028a90f7c585f647c46f41b0f16465bb62f0bfd6dc9364bb23089->enter($__internal_8dc5d3049bc028a90f7c585f647c46f41b0f16465bb62f0bfd6dc9364bb23089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Rol creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("rol");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_8dc5d3049bc028a90f7c585f647c46f41b0f16465bb62f0bfd6dc9364bb23089->leave($__internal_8dc5d3049bc028a90f7c585f647c46f41b0f16465bb62f0bfd6dc9364bb23089_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Rol:new.html.twig";
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
