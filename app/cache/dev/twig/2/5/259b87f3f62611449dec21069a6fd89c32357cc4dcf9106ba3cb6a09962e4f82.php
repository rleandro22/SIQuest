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
        $__internal_8419f8f2c160e659337251b2757ee920554184e7618f47c51db832b6f7cc9449 = $this->env->getExtension("native_profiler");
        $__internal_8419f8f2c160e659337251b2757ee920554184e7618f47c51db832b6f7cc9449->enter($__internal_8419f8f2c160e659337251b2757ee920554184e7618f47c51db832b6f7cc9449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8419f8f2c160e659337251b2757ee920554184e7618f47c51db832b6f7cc9449->leave($__internal_8419f8f2c160e659337251b2757ee920554184e7618f47c51db832b6f7cc9449_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_afa0859b5b7bcde069767363e11d29716521c1667014b394c50dd81da63f41e8 = $this->env->getExtension("native_profiler");
        $__internal_afa0859b5b7bcde069767363e11d29716521c1667014b394c50dd81da63f41e8->enter($__internal_afa0859b5b7bcde069767363e11d29716521c1667014b394c50dd81da63f41e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_afa0859b5b7bcde069767363e11d29716521c1667014b394c50dd81da63f41e8->leave($__internal_afa0859b5b7bcde069767363e11d29716521c1667014b394c50dd81da63f41e8_prof);

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
