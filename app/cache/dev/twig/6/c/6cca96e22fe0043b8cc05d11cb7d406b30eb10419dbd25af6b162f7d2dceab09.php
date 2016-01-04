<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig */
class __TwigTemplate_6cca96e22fe0043b8cc05d11cb7d406b30eb10419dbd25af6b162f7d2dceab09 extends Twig_Template
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
        $__internal_0b185921a2c9e87bc5fa533affc82e433b8402410b4e34673c651cc00ae8b37c = $this->env->getExtension("native_profiler");
        $__internal_0b185921a2c9e87bc5fa533affc82e433b8402410b4e34673c651cc00ae8b37c->enter($__internal_0b185921a2c9e87bc5fa533affc82e433b8402410b4e34673c651cc00ae8b37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_0b185921a2c9e87bc5fa533affc82e433b8402410b4e34673c651cc00ae8b37c->leave($__internal_0b185921a2c9e87bc5fa533affc82e433b8402410b4e34673c651cc00ae8b37c_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_24757b1417e7ba2e84a16a5e172de816f064de83846fe868c3537664760e6982 = $this->env->getExtension("native_profiler");
        $__internal_24757b1417e7ba2e84a16a5e172de816f064de83846fe868c3537664760e6982->enter($__internal_24757b1417e7ba2e84a16a5e172de816f064de83846fe868c3537664760e6982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_24757b1417e7ba2e84a16a5e172de816f064de83846fe868c3537664760e6982->leave($__internal_24757b1417e7ba2e84a16a5e172de816f064de83846fe868c3537664760e6982_prof);

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
