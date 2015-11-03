<?php

/* UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig */
class __TwigTemplate_37e55b0ee506e3261a1485325ad17425ad78bac139e41fb1883083d9b57111de extends Twig_Template
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
        $__internal_83c50551c3bc982c97831319ddbbaf92426d0311c2ff220080709dbc3a1ab2f0 = $this->env->getExtension("native_profiler");
        $__internal_83c50551c3bc982c97831319ddbbaf92426d0311c2ff220080709dbc3a1ab2f0->enter($__internal_83c50551c3bc982c97831319ddbbaf92426d0311c2ff220080709dbc3a1ab2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_83c50551c3bc982c97831319ddbbaf92426d0311c2ff220080709dbc3a1ab2f0->leave($__internal_83c50551c3bc982c97831319ddbbaf92426d0311c2ff220080709dbc3a1ab2f0_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c52bb1e49bef633d9bf876255e413d484ea3ba8b8b12ba53adea83e10401dfc7 = $this->env->getExtension("native_profiler");
        $__internal_c52bb1e49bef633d9bf876255e413d484ea3ba8b8b12ba53adea83e10401dfc7->enter($__internal_c52bb1e49bef633d9bf876255e413d484ea3ba8b8b12ba53adea83e10401dfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<td class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-3\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroCapitulo", array()), 'widget');
        echo "
</td>
<td>
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreCapitulo", array()), 'widget');
        echo "
</td>

";
        
        $__internal_c52bb1e49bef633d9bf876255e413d484ea3ba8b8b12ba53adea83e10401dfc7->leave($__internal_c52bb1e49bef633d9bf876255e413d484ea3ba8b8b12ba53adea83e10401dfc7_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  38 => 3,  35 => 2,  23 => 1,);
    }
}
