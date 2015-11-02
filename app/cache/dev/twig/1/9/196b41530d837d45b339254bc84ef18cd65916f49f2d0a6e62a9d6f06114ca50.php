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
        $__internal_c9578167bf0f75d1e7bc7222c329935c03abc94ef030553b975db328e6fce314 = $this->env->getExtension("native_profiler");
        $__internal_c9578167bf0f75d1e7bc7222c329935c03abc94ef030553b975db328e6fce314->enter($__internal_c9578167bf0f75d1e7bc7222c329935c03abc94ef030553b975db328e6fce314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c9578167bf0f75d1e7bc7222c329935c03abc94ef030553b975db328e6fce314->leave($__internal_c9578167bf0f75d1e7bc7222c329935c03abc94ef030553b975db328e6fce314_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_1c79f30a19cd8ecf17b6985c1018681e85c3c22890a4cfb20cddb10108bed53a = $this->env->getExtension("native_profiler");
        $__internal_1c79f30a19cd8ecf17b6985c1018681e85c3c22890a4cfb20cddb10108bed53a->enter($__internal_1c79f30a19cd8ecf17b6985c1018681e85c3c22890a4cfb20cddb10108bed53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1c79f30a19cd8ecf17b6985c1018681e85c3c22890a4cfb20cddb10108bed53a->leave($__internal_1c79f30a19cd8ecf17b6985c1018681e85c3c22890a4cfb20cddb10108bed53a_prof);

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
