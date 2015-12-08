<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig */
class __TwigTemplate_1e982a4d489cf2deb36211e4dc426cc529fbf9109e820db29b74adae3cc13020 extends Twig_Template
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
        $__internal_71dfea9f4eff6ff4c17fa95b62265db0b4c0cb2811d8ba87cef08b602f8a2cdb = $this->env->getExtension("native_profiler");
        $__internal_71dfea9f4eff6ff4c17fa95b62265db0b4c0cb2811d8ba87cef08b602f8a2cdb->enter($__internal_71dfea9f4eff6ff4c17fa95b62265db0b4c0cb2811d8ba87cef08b602f8a2cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_71dfea9f4eff6ff4c17fa95b62265db0b4c0cb2811d8ba87cef08b602f8a2cdb->leave($__internal_71dfea9f4eff6ff4c17fa95b62265db0b4c0cb2811d8ba87cef08b602f8a2cdb_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_aef775569cfc0592f6f58680319c36372fb112a048841fa8eaf39a34f67e6701 = $this->env->getExtension("native_profiler");
        $__internal_aef775569cfc0592f6f58680319c36372fb112a048841fa8eaf39a34f67e6701->enter($__internal_aef775569cfc0592f6f58680319c36372fb112a048841fa8eaf39a34f67e6701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'widget');
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
        
        $__internal_aef775569cfc0592f6f58680319c36372fb112a048841fa8eaf39a34f67e6701->leave($__internal_aef775569cfc0592f6f58680319c36372fb112a048841fa8eaf39a34f67e6701_prof);

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
