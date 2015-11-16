<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig */
class __TwigTemplate_fd5ff725cdf1b4bd8b387507dfc18f4ef04d37b12bd12c2791138d75aa5027d0 extends Twig_Template
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
        $__internal_0b839163bad62d526f303db211bbd686b8901588bc9b0af8b6435a16c48aef5d = $this->env->getExtension("native_profiler");
        $__internal_0b839163bad62d526f303db211bbd686b8901588bc9b0af8b6435a16c48aef5d->enter($__internal_0b839163bad62d526f303db211bbd686b8901588bc9b0af8b6435a16c48aef5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_0b839163bad62d526f303db211bbd686b8901588bc9b0af8b6435a16c48aef5d->leave($__internal_0b839163bad62d526f303db211bbd686b8901588bc9b0af8b6435a16c48aef5d_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_5d0d6d0e594890c8b67d21362a7bf16564f7d0a3bffdd51157b46ad8043cacf6 = $this->env->getExtension("native_profiler");
        $__internal_5d0d6d0e594890c8b67d21362a7bf16564f7d0a3bffdd51157b46ad8043cacf6->enter($__internal_5d0d6d0e594890c8b67d21362a7bf16564f7d0a3bffdd51157b46ad8043cacf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadA", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeA", array()), 'widget');
        echo "</div>
";
        
        $__internal_5d0d6d0e594890c8b67d21362a7bf16564f7d0a3bffdd51157b46ad8043cacf6->leave($__internal_5d0d6d0e594890c8b67d21362a7bf16564f7d0a3bffdd51157b46ad8043cacf6_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
