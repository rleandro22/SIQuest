<?php

/* UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig */
class __TwigTemplate_4aa0808e3555cbfa4e7de72484948af0759a01bdba6652412435b7ec84bace22 extends Twig_Template
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
        $__internal_30d0a5c1a8ca98dfc54c0ef4efcbf001b3db3134a7a9e371932df04d2a50b5ba = $this->env->getExtension("native_profiler");
        $__internal_30d0a5c1a8ca98dfc54c0ef4efcbf001b3db3134a7a9e371932df04d2a50b5ba->enter($__internal_30d0a5c1a8ca98dfc54c0ef4efcbf001b3db3134a7a9e371932df04d2a50b5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_30d0a5c1a8ca98dfc54c0ef4efcbf001b3db3134a7a9e371932df04d2a50b5ba->leave($__internal_30d0a5c1a8ca98dfc54c0ef4efcbf001b3db3134a7a9e371932df04d2a50b5ba_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_1604c26dd020ebfa720ecde97ca42405c8ab576fc18370c398471a4a1d0c216c = $this->env->getExtension("native_profiler");
        $__internal_1604c26dd020ebfa720ecde97ca42405c8ab576fc18370c398471a4a1d0c216c->enter($__internal_1604c26dd020ebfa720ecde97ca42405c8ab576fc18370c398471a4a1d0c216c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1604c26dd020ebfa720ecde97ca42405c8ab576fc18370c398471a4a1d0c216c->leave($__internal_1604c26dd020ebfa720ecde97ca42405c8ab576fc18370c398471a4a1d0c216c_prof);

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
