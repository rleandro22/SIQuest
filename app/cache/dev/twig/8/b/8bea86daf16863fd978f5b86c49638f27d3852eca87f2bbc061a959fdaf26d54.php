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
        $__internal_81768252375aab8e4240b3d7519b6f0c112ebd84eafefac24567b5b9a31b61cd = $this->env->getExtension("native_profiler");
        $__internal_81768252375aab8e4240b3d7519b6f0c112ebd84eafefac24567b5b9a31b61cd->enter($__internal_81768252375aab8e4240b3d7519b6f0c112ebd84eafefac24567b5b9a31b61cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_81768252375aab8e4240b3d7519b6f0c112ebd84eafefac24567b5b9a31b61cd->leave($__internal_81768252375aab8e4240b3d7519b6f0c112ebd84eafefac24567b5b9a31b61cd_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_6426fe78de6de083dca10cb5f3bba00c14f0643ab2a810fc61e16a3c303115e3 = $this->env->getExtension("native_profiler");
        $__internal_6426fe78de6de083dca10cb5f3bba00c14f0643ab2a810fc61e16a3c303115e3->enter($__internal_6426fe78de6de083dca10cb5f3bba00c14f0643ab2a810fc61e16a3c303115e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6426fe78de6de083dca10cb5f3bba00c14f0643ab2a810fc61e16a3c303115e3->leave($__internal_6426fe78de6de083dca10cb5f3bba00c14f0643ab2a810fc61e16a3c303115e3_prof);

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
