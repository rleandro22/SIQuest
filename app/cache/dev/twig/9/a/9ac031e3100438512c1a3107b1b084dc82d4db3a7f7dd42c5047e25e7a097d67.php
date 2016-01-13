<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig */
class __TwigTemplate_9ac031e3100438512c1a3107b1b084dc82d4db3a7f7dd42c5047e25e7a097d67 extends Twig_Template
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
        $__internal_e809707c0ee9185341b7ecb0fbeda2a7b7e087bc1a43cd82f504a4b68386a8c4 = $this->env->getExtension("native_profiler");
        $__internal_e809707c0ee9185341b7ecb0fbeda2a7b7e087bc1a43cd82f504a4b68386a8c4->enter($__internal_e809707c0ee9185341b7ecb0fbeda2a7b7e087bc1a43cd82f504a4b68386a8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_e809707c0ee9185341b7ecb0fbeda2a7b7e087bc1a43cd82f504a4b68386a8c4->leave($__internal_e809707c0ee9185341b7ecb0fbeda2a7b7e087bc1a43cd82f504a4b68386a8c4_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c15c655873286483746fc2e213ca30312008a10f16b5b3fb0d5d39bba3c2eb63 = $this->env->getExtension("native_profiler");
        $__internal_c15c655873286483746fc2e213ca30312008a10f16b5b3fb0d5d39bba3c2eb63->enter($__internal_c15c655873286483746fc2e213ca30312008a10f16b5b3fb0d5d39bba3c2eb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), 'widget');
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
        
        $__internal_c15c655873286483746fc2e213ca30312008a10f16b5b3fb0d5d39bba3c2eb63->leave($__internal_c15c655873286483746fc2e213ca30312008a10f16b5b3fb0d5d39bba3c2eb63_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
