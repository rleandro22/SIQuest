<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig */
class __TwigTemplate_300422edd4e6fc6bc06a15f596cf1bf45d54484c34406ff75c34f636cb13d60b extends Twig_Template
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
        $__internal_80f01505085fa56af9c42c76642244c218ec8bda73c0af8c10fb67a0e2d06f54 = $this->env->getExtension("native_profiler");
        $__internal_80f01505085fa56af9c42c76642244c218ec8bda73c0af8c10fb67a0e2d06f54->enter($__internal_80f01505085fa56af9c42c76642244c218ec8bda73c0af8c10fb67a0e2d06f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_80f01505085fa56af9c42c76642244c218ec8bda73c0af8c10fb67a0e2d06f54->leave($__internal_80f01505085fa56af9c42c76642244c218ec8bda73c0af8c10fb67a0e2d06f54_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a03b69752b3f62479a11aea129b1ba615faa394f6685a85cf31a57260b5de95c = $this->env->getExtension("native_profiler");
        $__internal_a03b69752b3f62479a11aea129b1ba615faa394f6685a85cf31a57260b5de95c->enter($__internal_a03b69752b3f62479a11aea129b1ba615faa394f6685a85cf31a57260b5de95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a03b69752b3f62479a11aea129b1ba615faa394f6685a85cf31a57260b5de95c->leave($__internal_a03b69752b3f62479a11aea129b1ba615faa394f6685a85cf31a57260b5de95c_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
