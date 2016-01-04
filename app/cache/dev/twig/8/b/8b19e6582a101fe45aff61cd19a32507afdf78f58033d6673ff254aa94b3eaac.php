<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig */
class __TwigTemplate_8b19e6582a101fe45aff61cd19a32507afdf78f58033d6673ff254aa94b3eaac extends Twig_Template
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
        $__internal_b3fcd37a46abd0a6f19075c1aac1626f9d603b92710fa82b3c728e23f3742ea2 = $this->env->getExtension("native_profiler");
        $__internal_b3fcd37a46abd0a6f19075c1aac1626f9d603b92710fa82b3c728e23f3742ea2->enter($__internal_b3fcd37a46abd0a6f19075c1aac1626f9d603b92710fa82b3c728e23f3742ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_b3fcd37a46abd0a6f19075c1aac1626f9d603b92710fa82b3c728e23f3742ea2->leave($__internal_b3fcd37a46abd0a6f19075c1aac1626f9d603b92710fa82b3c728e23f3742ea2_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7371bd0f4347710cef00fde85524069c2ac9be944150023485e4ce6d67dc9a29 = $this->env->getExtension("native_profiler");
        $__internal_7371bd0f4347710cef00fde85524069c2ac9be944150023485e4ce6d67dc9a29->enter($__internal_7371bd0f4347710cef00fde85524069c2ac9be944150023485e4ce6d67dc9a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7371bd0f4347710cef00fde85524069c2ac9be944150023485e4ce6d67dc9a29->leave($__internal_7371bd0f4347710cef00fde85524069c2ac9be944150023485e4ce6d67dc9a29_prof);

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
