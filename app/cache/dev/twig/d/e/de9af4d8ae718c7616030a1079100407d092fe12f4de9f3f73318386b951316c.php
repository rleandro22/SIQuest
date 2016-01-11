<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPLibro.html.twig */
class __TwigTemplate_de9af4d8ae718c7616030a1079100407d092fe12f4de9f3f73318386b951316c extends Twig_Template
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
        $__internal_85784a6da06c766c924aefa654f0ca87bb9cc4f3b4263cda2ac345d92962bb80 = $this->env->getExtension("native_profiler");
        $__internal_85784a6da06c766c924aefa654f0ca87bb9cc4f3b4263cda2ac345d92962bb80->enter($__internal_85784a6da06c766c924aefa654f0ca87bb9cc4f3b4263cda2ac345d92962bb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_85784a6da06c766c924aefa654f0ca87bb9cc4f3b4263cda2ac345d92962bb80->leave($__internal_85784a6da06c766c924aefa654f0ca87bb9cc4f3b4263cda2ac345d92962bb80_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_1148e1f3e3ad660af1fa79d7c1a1a560b0752a8825392c672b2983508f4d7f49 = $this->env->getExtension("native_profiler");
        $__internal_1148e1f3e3ad660af1fa79d7c1a1a560b0752a8825392c672b2983508f4d7f49->enter($__internal_1148e1f3e3ad660af1fa79d7c1a1a560b0752a8825392c672b2983508f4d7f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget');
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
        
        $__internal_1148e1f3e3ad660af1fa79d7c1a1a560b0752a8825392c672b2983508f4d7f49->leave($__internal_1148e1f3e3ad660af1fa79d7c1a1a560b0752a8825392c672b2983508f4d7f49_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPLibro.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
