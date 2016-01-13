<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig */
class __TwigTemplate_292d529ddec095100ba192f972ce9e39a4e4c81102e04216ff538f67cbcf2b69 extends Twig_Template
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
        $__internal_600e7ace21ad11d39abe1c53c85ea72d7570b81ee76d05d06ff24d1ea7e63c9d = $this->env->getExtension("native_profiler");
        $__internal_600e7ace21ad11d39abe1c53c85ea72d7570b81ee76d05d06ff24d1ea7e63c9d->enter($__internal_600e7ace21ad11d39abe1c53c85ea72d7570b81ee76d05d06ff24d1ea7e63c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_600e7ace21ad11d39abe1c53c85ea72d7570b81ee76d05d06ff24d1ea7e63c9d->leave($__internal_600e7ace21ad11d39abe1c53c85ea72d7570b81ee76d05d06ff24d1ea7e63c9d_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_be1f26948c22cb116cfdb8c6f35e1bf21e1f7c1a425b85d152441e3112a9ac8a = $this->env->getExtension("native_profiler");
        $__internal_be1f26948c22cb116cfdb8c6f35e1bf21e1f7c1a425b85d152441e3112a9ac8a->enter($__internal_be1f26948c22cb116cfdb8c6f35e1bf21e1f7c1a425b85d152441e3112a9ac8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaConocimiento", array()), 'widget');
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
        
        $__internal_be1f26948c22cb116cfdb8c6f35e1bf21e1f7c1a425b85d152441e3112a9ac8a->leave($__internal_be1f26948c22cb116cfdb8c6f35e1bf21e1f7c1a425b85d152441e3112a9ac8a_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
