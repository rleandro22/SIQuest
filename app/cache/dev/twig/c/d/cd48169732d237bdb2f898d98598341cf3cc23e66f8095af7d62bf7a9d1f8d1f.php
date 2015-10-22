<?php

/* UciBaseDatosBundle:TipoRespuestaMultiple:edit.html.twig */
class __TwigTemplate_cd48169732d237bdb2f898d98598341cf3cc23e66f8095af7d62bf7a9d1f8d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:TipoRespuestaMultiple:edit.html.twig", 1);
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
        $__internal_8173c48c047834c558bd39c8ea3ff05754c2ebe9e4550fb22897fcf719f022c6 = $this->env->getExtension("native_profiler");
        $__internal_8173c48c047834c558bd39c8ea3ff05754c2ebe9e4550fb22897fcf719f022c6->enter($__internal_8173c48c047834c558bd39c8ea3ff05754c2ebe9e4550fb22897fcf719f022c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:TipoRespuestaMultiple:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8173c48c047834c558bd39c8ea3ff05754c2ebe9e4550fb22897fcf719f022c6->leave($__internal_8173c48c047834c558bd39c8ea3ff05754c2ebe9e4550fb22897fcf719f022c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_400fbfd7774626554627c203ae12e25255e8af290e7589725cb70ea5f4ed80db = $this->env->getExtension("native_profiler");
        $__internal_400fbfd7774626554627c203ae12e25255e8af290e7589725cb70ea5f4ed80db->enter($__internal_400fbfd7774626554627c203ae12e25255e8af290e7589725cb70ea5f4ed80db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TipoRespuestaMultiple edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("tiporespuestamultiple");
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
        
        $__internal_400fbfd7774626554627c203ae12e25255e8af290e7589725cb70ea5f4ed80db->leave($__internal_400fbfd7774626554627c203ae12e25255e8af290e7589725cb70ea5f4ed80db_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:TipoRespuestaMultiple:edit.html.twig";
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
