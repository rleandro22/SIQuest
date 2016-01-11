<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig */
class __TwigTemplate_07939d70764a0e69263c9d82c895496b35d7b9fae884af5e7eb388b398e160c9 extends Twig_Template
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
        $__internal_841a4ed869414d837c3800c6c9712ba185b2e22f10fd83cfd919f004eccbbb95 = $this->env->getExtension("native_profiler");
        $__internal_841a4ed869414d837c3800c6c9712ba185b2e22f10fd83cfd919f004eccbbb95->enter($__internal_841a4ed869414d837c3800c6c9712ba185b2e22f10fd83cfd919f004eccbbb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_841a4ed869414d837c3800c6c9712ba185b2e22f10fd83cfd919f004eccbbb95->leave($__internal_841a4ed869414d837c3800c6c9712ba185b2e22f10fd83cfd919f004eccbbb95_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_6efa101630875be89279c4cdddf7b4aba8b57a627ad7993595628a90369fbccf = $this->env->getExtension("native_profiler");
        $__internal_6efa101630875be89279c4cdddf7b4aba8b57a627ad7993595628a90369fbccf->enter($__internal_6efa101630875be89279c4cdddf7b4aba8b57a627ad7993595628a90369fbccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), 'widget');
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
        
        $__internal_6efa101630875be89279c4cdddf7b4aba8b57a627ad7993595628a90369fbccf->leave($__internal_6efa101630875be89279c4cdddf7b4aba8b57a627ad7993595628a90369fbccf_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
