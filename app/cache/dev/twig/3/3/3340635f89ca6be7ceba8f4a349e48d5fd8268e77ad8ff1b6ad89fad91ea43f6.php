<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig */
class __TwigTemplate_3340635f89ca6be7ceba8f4a349e48d5fd8268e77ad8ff1b6ad89fad91ea43f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36041cab512c24e111d6381f59897781dc5f6fdc3b5a3904c4e5a1bff0f9a13c = $this->env->getExtension("native_profiler");
        $__internal_36041cab512c24e111d6381f59897781dc5f6fdc3b5a3904c4e5a1bff0f9a13c->enter($__internal_36041cab512c24e111d6381f59897781dc5f6fdc3b5a3904c4e5a1bff0f9a13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_36041cab512c24e111d6381f59897781dc5f6fdc3b5a3904c4e5a1bff0f9a13c->leave($__internal_36041cab512c24e111d6381f59897781dc5f6fdc3b5a3904c4e5a1bff0f9a13c_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_0f022ed83bdb1129c587742c180ff3280cbfb553d05c692f932636059964596e = $this->env->getExtension("native_profiler");
        $__internal_0f022ed83bdb1129c587742c180ff3280cbfb553d05c692f932636059964596e->enter($__internal_0f022ed83bdb1129c587742c180ff3280cbfb553d05c692f932636059964596e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentaje", array()), 'widget');
        echo "</div>
";
        
        $__internal_0f022ed83bdb1129c587742c180ff3280cbfb553d05c692f932636059964596e->leave($__internal_0f022ed83bdb1129c587742c180ff3280cbfb553d05c692f932636059964596e_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
