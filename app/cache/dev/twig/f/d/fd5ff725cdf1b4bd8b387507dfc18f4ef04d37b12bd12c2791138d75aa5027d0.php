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
        $__internal_096a632e62658e9c8a88a14ba9b88ebeec5c327ccbcda1cc909ad68fa7f8bd21 = $this->env->getExtension("native_profiler");
        $__internal_096a632e62658e9c8a88a14ba9b88ebeec5c327ccbcda1cc909ad68fa7f8bd21->enter($__internal_096a632e62658e9c8a88a14ba9b88ebeec5c327ccbcda1cc909ad68fa7f8bd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_096a632e62658e9c8a88a14ba9b88ebeec5c327ccbcda1cc909ad68fa7f8bd21->leave($__internal_096a632e62658e9c8a88a14ba9b88ebeec5c327ccbcda1cc909ad68fa7f8bd21_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_94fc0c817b1644414cbbb73e7a7e9e944f2a8b2e9f9520af5eaa2c68efded4ae = $this->env->getExtension("native_profiler");
        $__internal_94fc0c817b1644414cbbb73e7a7e9e944f2a8b2e9f9520af5eaa2c68efded4ae->enter($__internal_94fc0c817b1644414cbbb73e7a7e9e944f2a8b2e9f9520af5eaa2c68efded4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_94fc0c817b1644414cbbb73e7a7e9e944f2a8b2e9f9520af5eaa2c68efded4ae->leave($__internal_94fc0c817b1644414cbbb73e7a7e9e944f2a8b2e9f9520af5eaa2c68efded4ae_prof);

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
