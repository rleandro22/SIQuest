<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig */
class __TwigTemplate_a495d8ac13c56454d03f5937efa04e67632ef481127cf8a05d57b1443eada9ef extends Twig_Template
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
        $__internal_06af53c519f47334a05e55d3cab2847a32d964f83fe897d34c2ba7d4e909e411 = $this->env->getExtension("native_profiler");
        $__internal_06af53c519f47334a05e55d3cab2847a32d964f83fe897d34c2ba7d4e909e411->enter($__internal_06af53c519f47334a05e55d3cab2847a32d964f83fe897d34c2ba7d4e909e411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_06af53c519f47334a05e55d3cab2847a32d964f83fe897d34c2ba7d4e909e411->leave($__internal_06af53c519f47334a05e55d3cab2847a32d964f83fe897d34c2ba7d4e909e411_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_6d1c5e2001666ea78a1c01dd370bf398256257685a348a72f8b03b1491d9537c = $this->env->getExtension("native_profiler");
        $__internal_6d1c5e2001666ea78a1c01dd370bf398256257685a348a72f8b03b1491d9537c->enter($__internal_6d1c5e2001666ea78a1c01dd370bf398256257685a348a72f8b03b1491d9537c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), 'widget');
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
        
        $__internal_6d1c5e2001666ea78a1c01dd370bf398256257685a348a72f8b03b1491d9537c->leave($__internal_6d1c5e2001666ea78a1c01dd370bf398256257685a348a72f8b03b1491d9537c_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
