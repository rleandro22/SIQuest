<?php

/* UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig */
class __TwigTemplate_b00ebef35311819ab274f83ac613bf76fcb8f01280abba96b83d03895a1aa4c7 extends Twig_Template
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
        $__internal_35c13ba625e75b0254b691eb8fcd62fa8d063e6db7576418ab6dcb0cb70e13c4 = $this->env->getExtension("native_profiler");
        $__internal_35c13ba625e75b0254b691eb8fcd62fa8d063e6db7576418ab6dcb0cb70e13c4->enter($__internal_35c13ba625e75b0254b691eb8fcd62fa8d063e6db7576418ab6dcb0cb70e13c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_35c13ba625e75b0254b691eb8fcd62fa8d063e6db7576418ab6dcb0cb70e13c4->leave($__internal_35c13ba625e75b0254b691eb8fcd62fa8d063e6db7576418ab6dcb0cb70e13c4_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_ea20019f3f9c397c7da03200c53e8bfe0ef851858a81b028c78a3a8fbde956c3 = $this->env->getExtension("native_profiler");
        $__internal_ea20019f3f9c397c7da03200c53e8bfe0ef851858a81b028c78a3a8fbde956c3->enter($__internal_ea20019f3f9c397c7da03200c53e8bfe0ef851858a81b028c78a3a8fbde956c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ea20019f3f9c397c7da03200c53e8bfe0ef851858a81b028c78a3a8fbde956c3->leave($__internal_ea20019f3f9c397c7da03200c53e8bfe0ef851858a81b028c78a3a8fbde956c3_prof);

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
