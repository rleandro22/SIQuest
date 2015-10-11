<?php

/* UciBaseDatosBundle:Capitulo:new.html.twig */
class __TwigTemplate_08e0776cde871b6de2d9434b0fddee2e1ac9b1c0cbd8c04b41378471d24ee68a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Capitulo:new.html.twig", 1);
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
        $__internal_1cb06c6b0ef1979353830c16b415c76b2a82bb1ceef1ac0a351956b451aee96d = $this->env->getExtension("native_profiler");
        $__internal_1cb06c6b0ef1979353830c16b415c76b2a82bb1ceef1ac0a351956b451aee96d->enter($__internal_1cb06c6b0ef1979353830c16b415c76b2a82bb1ceef1ac0a351956b451aee96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Capitulo:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cb06c6b0ef1979353830c16b415c76b2a82bb1ceef1ac0a351956b451aee96d->leave($__internal_1cb06c6b0ef1979353830c16b415c76b2a82bb1ceef1ac0a351956b451aee96d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cea96228760393da3ef8455b2d02bf31a4f0d30fdd3cc55af534b2a3751aa8f4 = $this->env->getExtension("native_profiler");
        $__internal_cea96228760393da3ef8455b2d02bf31a4f0d30fdd3cc55af534b2a3751aa8f4->enter($__internal_cea96228760393da3ef8455b2d02bf31a4f0d30fdd3cc55af534b2a3751aa8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Capitulo creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_cea96228760393da3ef8455b2d02bf31a4f0d30fdd3cc55af534b2a3751aa8f4->leave($__internal_cea96228760393da3ef8455b2d02bf31a4f0d30fdd3cc55af534b2a3751aa8f4_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Capitulo:new.html.twig";
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
