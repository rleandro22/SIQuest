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
        $__internal_7073b0a9f47c69f16ca6312c10fbaf44bd273209881c2a2de051c12fddfe5285 = $this->env->getExtension("native_profiler");
        $__internal_7073b0a9f47c69f16ca6312c10fbaf44bd273209881c2a2de051c12fddfe5285->enter($__internal_7073b0a9f47c69f16ca6312c10fbaf44bd273209881c2a2de051c12fddfe5285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_7073b0a9f47c69f16ca6312c10fbaf44bd273209881c2a2de051c12fddfe5285->leave($__internal_7073b0a9f47c69f16ca6312c10fbaf44bd273209881c2a2de051c12fddfe5285_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_0388715a34473dd14a768a4f66e44dd3ffb1d2e5c90e5ad977c108ee532b16e0 = $this->env->getExtension("native_profiler");
        $__internal_0388715a34473dd14a768a4f66e44dd3ffb1d2e5c90e5ad977c108ee532b16e0->enter($__internal_0388715a34473dd14a768a4f66e44dd3ffb1d2e5c90e5ad977c108ee532b16e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0388715a34473dd14a768a4f66e44dd3ffb1d2e5c90e5ad977c108ee532b16e0->leave($__internal_0388715a34473dd14a768a4f66e44dd3ffb1d2e5c90e5ad977c108ee532b16e0_prof);

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
