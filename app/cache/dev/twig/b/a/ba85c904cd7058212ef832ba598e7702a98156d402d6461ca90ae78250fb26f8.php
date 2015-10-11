<?php

/* UciBaseDatosBundle:Libro:new.html.twig */
class __TwigTemplate_ba85c904cd7058212ef832ba598e7702a98156d402d6461ca90ae78250fb26f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Libro:new.html.twig", 1);
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
        $__internal_6eb5d72f7ca7b6e099c3b4e44c31bc98c7ff97de8557b6de4b1b5e2ebfd5e6e6 = $this->env->getExtension("native_profiler");
        $__internal_6eb5d72f7ca7b6e099c3b4e44c31bc98c7ff97de8557b6de4b1b5e2ebfd5e6e6->enter($__internal_6eb5d72f7ca7b6e099c3b4e44c31bc98c7ff97de8557b6de4b1b5e2ebfd5e6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Libro:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eb5d72f7ca7b6e099c3b4e44c31bc98c7ff97de8557b6de4b1b5e2ebfd5e6e6->leave($__internal_6eb5d72f7ca7b6e099c3b4e44c31bc98c7ff97de8557b6de4b1b5e2ebfd5e6e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d67ab46ae74e7a89c9f112ed919a79808598bdf54a8613e3ebace77c079c9fba = $this->env->getExtension("native_profiler");
        $__internal_d67ab46ae74e7a89c9f112ed919a79808598bdf54a8613e3ebace77c079c9fba->enter($__internal_d67ab46ae74e7a89c9f112ed919a79808598bdf54a8613e3ebace77c079c9fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Libro creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("libro");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_d67ab46ae74e7a89c9f112ed919a79808598bdf54a8613e3ebace77c079c9fba->leave($__internal_d67ab46ae74e7a89c9f112ed919a79808598bdf54a8613e3ebace77c079c9fba_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Libro:new.html.twig";
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
