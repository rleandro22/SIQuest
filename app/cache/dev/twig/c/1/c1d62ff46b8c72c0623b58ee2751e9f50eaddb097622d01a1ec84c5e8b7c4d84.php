<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPConjunto.html.twig */
class __TwigTemplate_c1d62ff46b8c72c0623b58ee2751e9f50eaddb097622d01a1ec84c5e8b7c4d84 extends Twig_Template
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
        $__internal_97e9373a6d799e22c0490d8c0adbf8144d2be3c59a4e76e9ef404e9b7473dc69 = $this->env->getExtension("native_profiler");
        $__internal_97e9373a6d799e22c0490d8c0adbf8144d2be3c59a4e76e9ef404e9b7473dc69->enter($__internal_97e9373a6d799e22c0490d8c0adbf8144d2be3c59a4e76e9ef404e9b7473dc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPConjunto.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_97e9373a6d799e22c0490d8c0adbf8144d2be3c59a4e76e9ef404e9b7473dc69->leave($__internal_97e9373a6d799e22c0490d8c0adbf8144d2be3c59a4e76e9ef404e9b7473dc69_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_4c0239dfea113578182f54b293d61430183ba2b2c7e0184348b9f49ed5d83346 = $this->env->getExtension("native_profiler");
        $__internal_4c0239dfea113578182f54b293d61430183ba2b2c7e0184348b9f49ed5d83346->enter($__internal_4c0239dfea113578182f54b293d61430183ba2b2c7e0184348b9f49ed5d83346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <div class=\"col-sm-6\">
        <div class=\"row\">
            <div class=\"col-sm-12\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget');
        echo "</div>   
        </div>
        <div class=\"row top-margin\">
            <div class=\"col-sm-6\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPaginaDe", array()), 'widget');
        echo "</div>   
            <div class=\"col-sm-6\">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroPaginaHasta", array()), 'widget');
        echo "</div>  
        </div>
        <div class=\"row top-margin\">
            <div class=\"col-sm-12\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capitulo", array()), 'widget');
        echo "</div>   
        </div>
        <div class=\"row top-margin\">
            <div class=\"col-sm-12\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'widget');
        echo "</div>   
        </div>
        <div class=\"row top-margin\">
            <div class=\"col-sm-12\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'widget');
        echo "</div>   
        </div>
        <div class=\"row top-margin\">
            <div class=\"col-sm-12\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'widget');
        echo "</div>   
        </div>
        <div class=\"row top-margin\">
            <div class=\"col-sm-12\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'widget');
        echo "</div>   
        </div>
        <div class=\"row top-margin\">
            <div class=\"col-sm-12\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), 'widget');
        echo "</div>   
        </div>
    </div>
    <div class=\"col-sm-2\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget');
        echo "</div>
    <div class=\"col-sm-2\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentaje", array()), 'widget');
        echo "</div>
";
        
        $__internal_4c0239dfea113578182f54b293d61430183ba2b2c7e0184348b9f49ed5d83346->leave($__internal_4c0239dfea113578182f54b293d61430183ba2b2c7e0184348b9f49ed5d83346_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPConjunto.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  91 => 29,  85 => 26,  79 => 23,  73 => 20,  67 => 17,  61 => 14,  55 => 11,  49 => 8,  45 => 7,  39 => 4,  35 => 2,  23 => 1,);
    }
}
