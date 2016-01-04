<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTriangulo.html.twig */
class __TwigTemplate_259b87f3f62611449dec21069a6fd89c32357cc4dcf9106ba3cb6a09962e4f82 extends Twig_Template
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
        $__internal_3c59993ff0194d9af3a18298f3e2928d62b2013257b05a722e2bfead66bb5d9a = $this->env->getExtension("native_profiler");
        $__internal_3c59993ff0194d9af3a18298f3e2928d62b2013257b05a722e2bfead66bb5d9a->enter($__internal_3c59993ff0194d9af3a18298f3e2928d62b2013257b05a722e2bfead66bb5d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_3c59993ff0194d9af3a18298f3e2928d62b2013257b05a722e2bfead66bb5d9a->leave($__internal_3c59993ff0194d9af3a18298f3e2928d62b2013257b05a722e2bfead66bb5d9a_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c6d9d14e04f2eb1d643e31024125b9f88dd83dc536267ffb8f71ba9f74470197 = $this->env->getExtension("native_profiler");
        $__internal_c6d9d14e04f2eb1d643e31024125b9f88dd83dc536267ffb8f71ba9f74470197->enter($__internal_c6d9d14e04f2eb1d643e31024125b9f88dd83dc536267ffb8f71ba9f74470197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'widget');
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
        
        $__internal_c6d9d14e04f2eb1d643e31024125b9f88dd83dc536267ffb8f71ba9f74470197->leave($__internal_c6d9d14e04f2eb1d643e31024125b9f88dd83dc536267ffb8f71ba9f74470197_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTriangulo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
