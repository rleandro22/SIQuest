<?php

/* UciBaseDatosBundle:Capitulo:edit.html.twig */
class __TwigTemplate_fa88358a88e19c1270ec67dc16e1f6c8664d08285bc3e07d770e48497518e6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Capitulo:edit.html.twig", 1);
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
        $__internal_9d4ca5797a3c0e295e9ed877183b26b727e7a5115bb4af5b938ccd147cbd8ea3 = $this->env->getExtension("native_profiler");
        $__internal_9d4ca5797a3c0e295e9ed877183b26b727e7a5115bb4af5b938ccd147cbd8ea3->enter($__internal_9d4ca5797a3c0e295e9ed877183b26b727e7a5115bb4af5b938ccd147cbd8ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Capitulo:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d4ca5797a3c0e295e9ed877183b26b727e7a5115bb4af5b938ccd147cbd8ea3->leave($__internal_9d4ca5797a3c0e295e9ed877183b26b727e7a5115bb4af5b938ccd147cbd8ea3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2164525b5a3a1b8b8f52913cb709a31305738e5b31d8617541c5e240aa8926d = $this->env->getExtension("native_profiler");
        $__internal_c2164525b5a3a1b8b8f52913cb709a31305738e5b31d8617541c5e240aa8926d->enter($__internal_c2164525b5a3a1b8b8f52913cb709a31305738e5b31d8617541c5e240aa8926d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Capitulo edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("capitulo");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_c2164525b5a3a1b8b8f52913cb709a31305738e5b31d8617541c5e240aa8926d->leave($__internal_c2164525b5a3a1b8b8f52913cb709a31305738e5b31d8617541c5e240aa8926d_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Capitulo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
