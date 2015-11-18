<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig */
class __TwigTemplate_fd5ff725cdf1b4bd8b387507dfc18f4ef04d37b12bd12c2791138d75aa5027d0 extends Twig_Template
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
        $__internal_4f0c7ad6269e560c6b7121bc02c9eb38231baae1aef3a343d71e935a2696e5bd = $this->env->getExtension("native_profiler");
        $__internal_4f0c7ad6269e560c6b7121bc02c9eb38231baae1aef3a343d71e935a2696e5bd->enter($__internal_4f0c7ad6269e560c6b7121bc02c9eb38231baae1aef3a343d71e935a2696e5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPArea.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_4f0c7ad6269e560c6b7121bc02c9eb38231baae1aef3a343d71e935a2696e5bd->leave($__internal_4f0c7ad6269e560c6b7121bc02c9eb38231baae1aef3a343d71e935a2696e5bd_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_b74dd30a08363ec5af02a351efe6392d0f4eeb7b553ce924beac2cfa0b719f48 = $this->env->getExtension("native_profiler");
        $__internal_b74dd30a08363ec5af02a351efe6392d0f4eeb7b553ce924beac2cfa0b719f48->enter($__internal_b74dd30a08363ec5af02a351efe6392d0f4eeb7b553ce924beac2cfa0b719f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b74dd30a08363ec5af02a351efe6392d0f4eeb7b553ce924beac2cfa0b719f48->leave($__internal_b74dd30a08363ec5af02a351efe6392d0f4eeb7b553ce924beac2cfa0b719f48_prof);

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
