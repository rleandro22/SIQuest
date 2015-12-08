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
        $__internal_5d60dd8c1a549f0fd8535985310e8ba3923d940ed7dc3fa80d6905ca6644a9a4 = $this->env->getExtension("native_profiler");
        $__internal_5d60dd8c1a549f0fd8535985310e8ba3923d940ed7dc3fa80d6905ca6644a9a4->enter($__internal_5d60dd8c1a549f0fd8535985310e8ba3923d940ed7dc3fa80d6905ca6644a9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5d60dd8c1a549f0fd8535985310e8ba3923d940ed7dc3fa80d6905ca6644a9a4->leave($__internal_5d60dd8c1a549f0fd8535985310e8ba3923d940ed7dc3fa80d6905ca6644a9a4_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_d59f54e30afe00a6f66bdb81e7884555eb6093b2317f7c4ce8a24dd864744433 = $this->env->getExtension("native_profiler");
        $__internal_d59f54e30afe00a6f66bdb81e7884555eb6093b2317f7c4ce8a24dd864744433->enter($__internal_d59f54e30afe00a6f66bdb81e7884555eb6093b2317f7c4ce8a24dd864744433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d59f54e30afe00a6f66bdb81e7884555eb6093b2317f7c4ce8a24dd864744433->leave($__internal_d59f54e30afe00a6f66bdb81e7884555eb6093b2317f7c4ce8a24dd864744433_prof);

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
