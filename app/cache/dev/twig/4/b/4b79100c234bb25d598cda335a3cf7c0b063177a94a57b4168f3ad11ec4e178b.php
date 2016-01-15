<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPGrupo.html.twig */
class __TwigTemplate_4b79100c234bb25d598cda335a3cf7c0b063177a94a57b4168f3ad11ec4e178b extends Twig_Template
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
        $__internal_cd0eca064b6bdea22f37c0ea0b6bc495b94fe2af9df6c808fc056b8ab78ca634 = $this->env->getExtension("native_profiler");
        $__internal_cd0eca064b6bdea22f37c0ea0b6bc495b94fe2af9df6c808fc056b8ab78ca634->enter($__internal_cd0eca064b6bdea22f37c0ea0b6bc495b94fe2af9df6c808fc056b8ab78ca634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_cd0eca064b6bdea22f37c0ea0b6bc495b94fe2af9df6c808fc056b8ab78ca634->leave($__internal_cd0eca064b6bdea22f37c0ea0b6bc495b94fe2af9df6c808fc056b8ab78ca634_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_1cbb9365e248ef48c5dace3eb59ef30ff7a3c22a11587a25a80c885e9f70a409 = $this->env->getExtension("native_profiler");
        $__internal_1cbb9365e248ef48c5dace3eb59ef30ff7a3c22a11587a25a80c885e9f70a409->enter($__internal_1cbb9365e248ef48c5dace3eb59ef30ff7a3c22a11587a25a80c885e9f70a409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1cbb9365e248ef48c5dace3eb59ef30ff7a3c22a11587a25a80c885e9f70a409->leave($__internal_1cbb9365e248ef48c5dace3eb59ef30ff7a3c22a11587a25a80c885e9f70a409_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPGrupo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
