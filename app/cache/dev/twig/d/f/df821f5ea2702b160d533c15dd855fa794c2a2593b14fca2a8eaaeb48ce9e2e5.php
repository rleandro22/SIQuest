<?php

/* UciBaseDatosBundle:Profesor:new.html.twig */
class __TwigTemplate_df821f5ea2702b160d533c15dd855fa794c2a2593b14fca2a8eaaeb48ce9e2e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Profesor:new.html.twig", 1);
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
        $__internal_df30b4226fb0adba5200c0eb029a433f1a2ce1d1f4909229415dcd57668ec06e = $this->env->getExtension("native_profiler");
        $__internal_df30b4226fb0adba5200c0eb029a433f1a2ce1d1f4909229415dcd57668ec06e->enter($__internal_df30b4226fb0adba5200c0eb029a433f1a2ce1d1f4909229415dcd57668ec06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Profesor:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df30b4226fb0adba5200c0eb029a433f1a2ce1d1f4909229415dcd57668ec06e->leave($__internal_df30b4226fb0adba5200c0eb029a433f1a2ce1d1f4909229415dcd57668ec06e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dc6295557d5c146c18fca38833d05399b6514577106df3e09b70b67eda02828 = $this->env->getExtension("native_profiler");
        $__internal_7dc6295557d5c146c18fca38833d05399b6514577106df3e09b70b67eda02828->enter($__internal_7dc6295557d5c146c18fca38833d05399b6514577106df3e09b70b67eda02828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Profesor creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("profesor");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_7dc6295557d5c146c18fca38833d05399b6514577106df3e09b70b67eda02828->leave($__internal_7dc6295557d5c146c18fca38833d05399b6514577106df3e09b70b67eda02828_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Profesor:new.html.twig";
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
