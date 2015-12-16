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
        $__internal_f3dbecd0604bde19306fdc08a94645709f8a31bf6b99642a6b36d6c3ab78d2df = $this->env->getExtension("native_profiler");
        $__internal_f3dbecd0604bde19306fdc08a94645709f8a31bf6b99642a6b36d6c3ab78d2df->enter($__internal_f3dbecd0604bde19306fdc08a94645709f8a31bf6b99642a6b36d6c3ab78d2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f3dbecd0604bde19306fdc08a94645709f8a31bf6b99642a6b36d6c3ab78d2df->leave($__internal_f3dbecd0604bde19306fdc08a94645709f8a31bf6b99642a6b36d6c3ab78d2df_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_447829d8ff2a0b41897475526e39ad9b96635b8294832626f891e47ca17a3399 = $this->env->getExtension("native_profiler");
        $__internal_447829d8ff2a0b41897475526e39ad9b96635b8294832626f891e47ca17a3399->enter($__internal_447829d8ff2a0b41897475526e39ad9b96635b8294832626f891e47ca17a3399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_447829d8ff2a0b41897475526e39ad9b96635b8294832626f891e47ca17a3399->leave($__internal_447829d8ff2a0b41897475526e39ad9b96635b8294832626f891e47ca17a3399_prof);

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
