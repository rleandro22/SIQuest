<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig */
class __TwigTemplate_5a1a05fc79b1874cd9acdb0be2b6452c8e966f28bdd72d15a9eb29a64fff4409 extends Twig_Template
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
        $__internal_e2385c2e0d65ea23fec6dc617bb931002a310b5d0616d98a8941401c2138ee6c = $this->env->getExtension("native_profiler");
        $__internal_e2385c2e0d65ea23fec6dc617bb931002a310b5d0616d98a8941401c2138ee6c->enter($__internal_e2385c2e0d65ea23fec6dc617bb931002a310b5d0616d98a8941401c2138ee6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_e2385c2e0d65ea23fec6dc617bb931002a310b5d0616d98a8941401c2138ee6c->leave($__internal_e2385c2e0d65ea23fec6dc617bb931002a310b5d0616d98a8941401c2138ee6c_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_1b906c7fb666f87919f559cc0ad143a8989c036abb55502bfc4fed7485c30be1 = $this->env->getExtension("native_profiler");
        $__internal_1b906c7fb666f87919f559cc0ad143a8989c036abb55502bfc4fed7485c30be1->enter($__internal_1b906c7fb666f87919f559cc0ad143a8989c036abb55502bfc4fed7485c30be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadTP", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeTP", array()), 'widget');
        echo "</div>
";
        
        $__internal_1b906c7fb666f87919f559cc0ad143a8989c036abb55502bfc4fed7485c30be1->leave($__internal_1b906c7fb666f87919f559cc0ad143a8989c036abb55502bfc4fed7485c30be1_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
