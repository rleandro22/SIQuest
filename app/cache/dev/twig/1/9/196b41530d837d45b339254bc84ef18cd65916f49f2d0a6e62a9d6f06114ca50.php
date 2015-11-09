<?php

/* UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig */
class __TwigTemplate_196b41530d837d45b339254bc84ef18cd65916f49f2d0a6e62a9d6f06114ca50 extends Twig_Template
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
        $__internal_ab69442d6a8ea6f959f2682ce860fd20f632ca53c60fc611cb4ee51301f53290 = $this->env->getExtension("native_profiler");
        $__internal_ab69442d6a8ea6f959f2682ce860fd20f632ca53c60fc611cb4ee51301f53290->enter($__internal_ab69442d6a8ea6f959f2682ce860fd20f632ca53c60fc611cb4ee51301f53290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ab69442d6a8ea6f959f2682ce860fd20f632ca53c60fc611cb4ee51301f53290->leave($__internal_ab69442d6a8ea6f959f2682ce860fd20f632ca53c60fc611cb4ee51301f53290_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_b21eaa07d12d187b1011d314d71efee1f0bae11834aeb3b440ee69cfb5009de2 = $this->env->getExtension("native_profiler");
        $__internal_b21eaa07d12d187b1011d314d71efee1f0bae11834aeb3b440ee69cfb5009de2->enter($__internal_b21eaa07d12d187b1011d314d71efee1f0bae11834aeb3b440ee69cfb5009de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b21eaa07d12d187b1011d314d71efee1f0bae11834aeb3b440ee69cfb5009de2->leave($__internal_b21eaa07d12d187b1011d314d71efee1f0bae11834aeb3b440ee69cfb5009de2_prof);

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
