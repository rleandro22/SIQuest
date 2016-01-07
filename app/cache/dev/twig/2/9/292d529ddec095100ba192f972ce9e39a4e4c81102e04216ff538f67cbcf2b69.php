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
        $__internal_665005ebcaf2ccb067764cdb8a93e5fbddf085772968dadfddbb49e835ca0991 = $this->env->getExtension("native_profiler");
        $__internal_665005ebcaf2ccb067764cdb8a93e5fbddf085772968dadfddbb49e835ca0991->enter($__internal_665005ebcaf2ccb067764cdb8a93e5fbddf085772968dadfddbb49e835ca0991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_665005ebcaf2ccb067764cdb8a93e5fbddf085772968dadfddbb49e835ca0991->leave($__internal_665005ebcaf2ccb067764cdb8a93e5fbddf085772968dadfddbb49e835ca0991_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_fe59101298dd15f95cf797d1cf6df63740fc3a4ede3d2c83f4baf72b6d7644a9 = $this->env->getExtension("native_profiler");
        $__internal_fe59101298dd15f95cf797d1cf6df63740fc3a4ede3d2c83f4baf72b6d7644a9->enter($__internal_fe59101298dd15f95cf797d1cf6df63740fc3a4ede3d2c83f4baf72b6d7644a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fe59101298dd15f95cf797d1cf6df63740fc3a4ede3d2c83f4baf72b6d7644a9->leave($__internal_fe59101298dd15f95cf797d1cf6df63740fc3a4ede3d2c83f4baf72b6d7644a9_prof);

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
