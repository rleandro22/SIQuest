<?php

/* UciDataBaseBundle:Default:index.html.twig */
class __TwigTemplate_235dd6cf4fa13dbcf97e6fc2442d25669b0cf6ea22d455de3032b1c635881f1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4153d7734e9e2184aa30a7954fd208768034e7d55254f497bd5d85d574b39511 = $this->env->getExtension("native_profiler");
        $__internal_4153d7734e9e2184aa30a7954fd208768034e7d55254f497bd5d85d574b39511->enter($__internal_4153d7734e9e2184aa30a7954fd208768034e7d55254f497bd5d85d574b39511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciDataBaseBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_4153d7734e9e2184aa30a7954fd208768034e7d55254f497bd5d85d574b39511->leave($__internal_4153d7734e9e2184aa30a7954fd208768034e7d55254f497bd5d85d574b39511_prof);

    }

    public function getTemplateName()
    {
        return "UciDataBaseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
