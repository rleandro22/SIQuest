<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig */
class __TwigTemplate_7ff25972e57bf9266a1979f51ef7fcb2bbc3bb583e6167fb1c7950596fc80b88 extends Twig_Template
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
        $__internal_cde88cb5821e89a487cae35e180b1cacad9e3eae247c2c75273073a4dbd3d0f1 = $this->env->getExtension("native_profiler");
        $__internal_cde88cb5821e89a487cae35e180b1cacad9e3eae247c2c75273073a4dbd3d0f1->enter($__internal_cde88cb5821e89a487cae35e180b1cacad9e3eae247c2c75273073a4dbd3d0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_cde88cb5821e89a487cae35e180b1cacad9e3eae247c2c75273073a4dbd3d0f1->leave($__internal_cde88cb5821e89a487cae35e180b1cacad9e3eae247c2c75273073a4dbd3d0f1_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_81adca094fa16584159a467e443f4ddef41465e053f7e11be128692329593ae8 = $this->env->getExtension("native_profiler");
        $__internal_81adca094fa16584159a467e443f4ddef41465e053f7e11be128692329593ae8->enter($__internal_81adca094fa16584159a467e443f4ddef41465e053f7e11be128692329593ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_81adca094fa16584159a467e443f4ddef41465e053f7e11be128692329593ae8->leave($__internal_81adca094fa16584159a467e443f4ddef41465e053f7e11be128692329593ae8_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPConjunto.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  91 => 29,  85 => 26,  79 => 23,  73 => 20,  67 => 17,  61 => 14,  55 => 11,  49 => 8,  45 => 7,  39 => 4,  35 => 2,  23 => 1,);
    }
}
