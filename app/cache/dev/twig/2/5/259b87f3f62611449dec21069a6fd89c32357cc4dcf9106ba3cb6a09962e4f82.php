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
        $__internal_ef028fdb17b98d88dbcd2c9221d07b323118472b1d0c303b9e362dfc815f5df2 = $this->env->getExtension("native_profiler");
        $__internal_ef028fdb17b98d88dbcd2c9221d07b323118472b1d0c303b9e362dfc815f5df2->enter($__internal_ef028fdb17b98d88dbcd2c9221d07b323118472b1d0c303b9e362dfc815f5df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ef028fdb17b98d88dbcd2c9221d07b323118472b1d0c303b9e362dfc815f5df2->leave($__internal_ef028fdb17b98d88dbcd2c9221d07b323118472b1d0c303b9e362dfc815f5df2_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7b32b93e1111069d234580aa0157f729e92528f528e1e4e6a0fc23753caa617b = $this->env->getExtension("native_profiler");
        $__internal_7b32b93e1111069d234580aa0157f729e92528f528e1e4e6a0fc23753caa617b->enter($__internal_7b32b93e1111069d234580aa0157f729e92528f528e1e4e6a0fc23753caa617b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b32b93e1111069d234580aa0157f729e92528f528e1e4e6a0fc23753caa617b->leave($__internal_7b32b93e1111069d234580aa0157f729e92528f528e1e4e6a0fc23753caa617b_prof);

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
