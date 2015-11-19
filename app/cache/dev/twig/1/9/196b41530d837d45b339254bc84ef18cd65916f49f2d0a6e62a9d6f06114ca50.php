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
        $__internal_90a40623b756b80f1309f1c51e93a3389d14a45e7cc0cb27e4a9776d8151ec80 = $this->env->getExtension("native_profiler");
        $__internal_90a40623b756b80f1309f1c51e93a3389d14a45e7cc0cb27e4a9776d8151ec80->enter($__internal_90a40623b756b80f1309f1c51e93a3389d14a45e7cc0cb27e4a9776d8151ec80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_90a40623b756b80f1309f1c51e93a3389d14a45e7cc0cb27e4a9776d8151ec80->leave($__internal_90a40623b756b80f1309f1c51e93a3389d14a45e7cc0cb27e4a9776d8151ec80_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_58d787f9d4bb71330736c3aff9e30dc64856685202fdef1a930388e6a39a8d2e = $this->env->getExtension("native_profiler");
        $__internal_58d787f9d4bb71330736c3aff9e30dc64856685202fdef1a930388e6a39a8d2e->enter($__internal_58d787f9d4bb71330736c3aff9e30dc64856685202fdef1a930388e6a39a8d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_58d787f9d4bb71330736c3aff9e30dc64856685202fdef1a930388e6a39a8d2e->leave($__internal_58d787f9d4bb71330736c3aff9e30dc64856685202fdef1a930388e6a39a8d2e_prof);

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
