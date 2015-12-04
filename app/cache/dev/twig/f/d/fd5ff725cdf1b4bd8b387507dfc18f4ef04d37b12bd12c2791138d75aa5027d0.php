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
        $__internal_2e65726debbd5b5eeba8ca2f65fd730605407c1606b7d06057a9838396a58414 = $this->env->getExtension("native_profiler");
        $__internal_2e65726debbd5b5eeba8ca2f65fd730605407c1606b7d06057a9838396a58414->enter($__internal_2e65726debbd5b5eeba8ca2f65fd730605407c1606b7d06057a9838396a58414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_2e65726debbd5b5eeba8ca2f65fd730605407c1606b7d06057a9838396a58414->leave($__internal_2e65726debbd5b5eeba8ca2f65fd730605407c1606b7d06057a9838396a58414_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_eafd4d071ea2abadae6989c39639b64885a72e4f66639bca874dd46688e73ed4 = $this->env->getExtension("native_profiler");
        $__internal_eafd4d071ea2abadae6989c39639b64885a72e4f66639bca874dd46688e73ed4->enter($__internal_eafd4d071ea2abadae6989c39639b64885a72e4f66639bca874dd46688e73ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'widget');
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
        
        $__internal_eafd4d071ea2abadae6989c39639b64885a72e4f66639bca874dd46688e73ed4->leave($__internal_eafd4d071ea2abadae6989c39639b64885a72e4f66639bca874dd46688e73ed4_prof);

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
