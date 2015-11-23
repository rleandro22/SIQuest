<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig */
class __TwigTemplate_ed64cbfc60ca4d7affaaeddd3b5014afa66f55b94f2af2cd4056cf525e38ae66 extends Twig_Template
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
        $__internal_f2d982927cf29d4a6a79394d5b1968cb7594ef636651fbeccf86e9c29f6dfe55 = $this->env->getExtension("native_profiler");
        $__internal_f2d982927cf29d4a6a79394d5b1968cb7594ef636651fbeccf86e9c29f6dfe55->enter($__internal_f2d982927cf29d4a6a79394d5b1968cb7594ef636651fbeccf86e9c29f6dfe55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f2d982927cf29d4a6a79394d5b1968cb7594ef636651fbeccf86e9c29f6dfe55->leave($__internal_f2d982927cf29d4a6a79394d5b1968cb7594ef636651fbeccf86e9c29f6dfe55_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_6fdf299359a11dfd3fce80506c6e5a6105afe50a24d4d1772a86d59439653d8e = $this->env->getExtension("native_profiler");
        $__internal_6fdf299359a11dfd3fce80506c6e5a6105afe50a24d4d1772a86d59439653d8e->enter($__internal_6fdf299359a11dfd3fce80506c6e5a6105afe50a24d4d1772a86d59439653d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "grupoProcesos", array()), 'widget');
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
        
        $__internal_6fdf299359a11dfd3fce80506c6e5a6105afe50a24d4d1772a86d59439653d8e->leave($__internal_6fdf299359a11dfd3fce80506c6e5a6105afe50a24d4d1772a86d59439653d8e_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
