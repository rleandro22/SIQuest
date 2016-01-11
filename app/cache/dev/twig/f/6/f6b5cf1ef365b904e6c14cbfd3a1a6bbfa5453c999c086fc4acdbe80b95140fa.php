<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig */
class __TwigTemplate_f6b5cf1ef365b904e6c14cbfd3a1a6bbfa5453c999c086fc4acdbe80b95140fa extends Twig_Template
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
        $__internal_c07091468c1154435d4d8cc1d6bc6d03c82a67539160cdcbfef2227ec14dbfcb = $this->env->getExtension("native_profiler");
        $__internal_c07091468c1154435d4d8cc1d6bc6d03c82a67539160cdcbfef2227ec14dbfcb->enter($__internal_c07091468c1154435d4d8cc1d6bc6d03c82a67539160cdcbfef2227ec14dbfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c07091468c1154435d4d8cc1d6bc6d03c82a67539160cdcbfef2227ec14dbfcb->leave($__internal_c07091468c1154435d4d8cc1d6bc6d03c82a67539160cdcbfef2227ec14dbfcb_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_63c0558f5966dd64f851add288e30beeaa427ac82e6b4a6a829195b5342008b0 = $this->env->getExtension("native_profiler");
        $__internal_63c0558f5966dd64f851add288e30beeaa427ac82e6b4a6a829195b5342008b0->enter($__internal_63c0558f5966dd64f851add288e30beeaa427ac82e6b4a6a829195b5342008b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget');
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
        
        $__internal_63c0558f5966dd64f851add288e30beeaa427ac82e6b4a6a829195b5342008b0->leave($__internal_63c0558f5966dd64f851add288e30beeaa427ac82e6b4a6a829195b5342008b0_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
