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
        $__internal_f467616e62bb7d32c7b075a13f5ccd43bd9e146a1329007eeb05565d563ab893 = $this->env->getExtension("native_profiler");
        $__internal_f467616e62bb7d32c7b075a13f5ccd43bd9e146a1329007eeb05565d563ab893->enter($__internal_f467616e62bb7d32c7b075a13f5ccd43bd9e146a1329007eeb05565d563ab893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f467616e62bb7d32c7b075a13f5ccd43bd9e146a1329007eeb05565d563ab893->leave($__internal_f467616e62bb7d32c7b075a13f5ccd43bd9e146a1329007eeb05565d563ab893_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_20a4d7a48e3639c1ea3396ccc2105442b27edba8e66485edee8d78bb56a63a2e = $this->env->getExtension("native_profiler");
        $__internal_20a4d7a48e3639c1ea3396ccc2105442b27edba8e66485edee8d78bb56a63a2e->enter($__internal_20a4d7a48e3639c1ea3396ccc2105442b27edba8e66485edee8d78bb56a63a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_20a4d7a48e3639c1ea3396ccc2105442b27edba8e66485edee8d78bb56a63a2e->leave($__internal_20a4d7a48e3639c1ea3396ccc2105442b27edba8e66485edee8d78bb56a63a2e_prof);

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
