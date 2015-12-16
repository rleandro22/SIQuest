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
        $__internal_4185b7abcf86ce0e1264156eb199e1cc4437d85863341d59849b9227d1f60d96 = $this->env->getExtension("native_profiler");
        $__internal_4185b7abcf86ce0e1264156eb199e1cc4437d85863341d59849b9227d1f60d96->enter($__internal_4185b7abcf86ce0e1264156eb199e1cc4437d85863341d59849b9227d1f60d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_4185b7abcf86ce0e1264156eb199e1cc4437d85863341d59849b9227d1f60d96->leave($__internal_4185b7abcf86ce0e1264156eb199e1cc4437d85863341d59849b9227d1f60d96_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_5e1611625566d6aef4219d73c9c1f225b058612298adf437e7ab438df1dc4d7a = $this->env->getExtension("native_profiler");
        $__internal_5e1611625566d6aef4219d73c9c1f225b058612298adf437e7ab438df1dc4d7a->enter($__internal_5e1611625566d6aef4219d73c9c1f225b058612298adf437e7ab438df1dc4d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e1611625566d6aef4219d73c9c1f225b058612298adf437e7ab438df1dc4d7a->leave($__internal_5e1611625566d6aef4219d73c9c1f225b058612298adf437e7ab438df1dc4d7a_prof);

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
