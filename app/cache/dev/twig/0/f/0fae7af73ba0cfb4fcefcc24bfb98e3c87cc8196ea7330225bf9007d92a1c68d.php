<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig */
class __TwigTemplate_0fae7af73ba0cfb4fcefcc24bfb98e3c87cc8196ea7330225bf9007d92a1c68d extends Twig_Template
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
        $__internal_b5f26ab562b554a3c70bcf08536f87157209f216fbed332fabba356c3e0740c8 = $this->env->getExtension("native_profiler");
        $__internal_b5f26ab562b554a3c70bcf08536f87157209f216fbed332fabba356c3e0740c8->enter($__internal_b5f26ab562b554a3c70bcf08536f87157209f216fbed332fabba356c3e0740c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_b5f26ab562b554a3c70bcf08536f87157209f216fbed332fabba356c3e0740c8->leave($__internal_b5f26ab562b554a3c70bcf08536f87157209f216fbed332fabba356c3e0740c8_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_3427bc5387f874d107600fcdf246de3308902e09d9c228b0f5491151aae2327f = $this->env->getExtension("native_profiler");
        $__internal_3427bc5387f874d107600fcdf246de3308902e09d9c228b0f5491151aae2327f->enter($__internal_3427bc5387f874d107600fcdf246de3308902e09d9c228b0f5491151aae2327f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'widget');
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
        
        $__internal_3427bc5387f874d107600fcdf246de3308902e09d9c228b0f5491151aae2327f->leave($__internal_3427bc5387f874d107600fcdf246de3308902e09d9c228b0f5491151aae2327f_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
