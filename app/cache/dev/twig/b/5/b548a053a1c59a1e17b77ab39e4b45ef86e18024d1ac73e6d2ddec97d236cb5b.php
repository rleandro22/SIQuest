<?php

/* UciDataBaseBundle:Rol:new.html.twig */
class __TwigTemplate_b548a053a1c59a1e17b77ab39e4b45ef86e18024d1ac73e6d2ddec97d236cb5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciDataBaseBundle:Rol:new.html.twig", 1);
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
        $__internal_7c536ae20b7f0eaaca8d5cdac0e864cf07a51f8e61141dd3f138a77385edf01d = $this->env->getExtension("native_profiler");
        $__internal_7c536ae20b7f0eaaca8d5cdac0e864cf07a51f8e61141dd3f138a77385edf01d->enter($__internal_7c536ae20b7f0eaaca8d5cdac0e864cf07a51f8e61141dd3f138a77385edf01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciDataBaseBundle:Rol:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c536ae20b7f0eaaca8d5cdac0e864cf07a51f8e61141dd3f138a77385edf01d->leave($__internal_7c536ae20b7f0eaaca8d5cdac0e864cf07a51f8e61141dd3f138a77385edf01d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_381ffe548731bafc7c2fe53e0a139434fc92c023ee81509d183ded3c9f9f9fce = $this->env->getExtension("native_profiler");
        $__internal_381ffe548731bafc7c2fe53e0a139434fc92c023ee81509d183ded3c9f9f9fce->enter($__internal_381ffe548731bafc7c2fe53e0a139434fc92c023ee81509d183ded3c9f9f9fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_381ffe548731bafc7c2fe53e0a139434fc92c023ee81509d183ded3c9f9f9fce->leave($__internal_381ffe548731bafc7c2fe53e0a139434fc92c023ee81509d183ded3c9f9f9fce_prof);

    }

    public function getTemplateName()
    {
        return "UciDataBaseBundle:Rol:new.html.twig";
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
