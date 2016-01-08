<?php

/* UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig */
class __TwigTemplate_8bea86daf16863fd978f5b86c49638f27d3852eca87f2bbc061a959fdaf26d54 extends Twig_Template
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
        $__internal_d12bd663adae0b9cbfb27d2ffecc4954aad8d7580c1e17d972ce71ac53e0e11b = $this->env->getExtension("native_profiler");
        $__internal_d12bd663adae0b9cbfb27d2ffecc4954aad8d7580c1e17d972ce71ac53e0e11b->enter($__internal_d12bd663adae0b9cbfb27d2ffecc4954aad8d7580c1e17d972ce71ac53e0e11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d12bd663adae0b9cbfb27d2ffecc4954aad8d7580c1e17d972ce71ac53e0e11b->leave($__internal_d12bd663adae0b9cbfb27d2ffecc4954aad8d7580c1e17d972ce71ac53e0e11b_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_217575530cc639c0cc0a9a57c5c70667d6992d22430e80c655258ab35c2f0048 = $this->env->getExtension("native_profiler");
        $__internal_217575530cc639c0cc0a9a57c5c70667d6992d22430e80c655258ab35c2f0048->enter($__internal_217575530cc639c0cc0a9a57c5c70667d6992d22430e80c655258ab35c2f0048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_217575530cc639c0cc0a9a57c5c70667d6992d22430e80c655258ab35c2f0048->leave($__internal_217575530cc639c0cc0a9a57c5c70667d6992d22430e80c655258ab35c2f0048_prof);

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
