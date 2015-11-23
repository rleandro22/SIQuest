<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig */
class __TwigTemplate_837a313748587faba8991288c462ea87f6275ef1bffc4a4e0fe6b82442bd61f3 extends Twig_Template
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
        $__internal_d393fd6ef144dfe0c64335932ff1b802e8097a95a1faacfa1e3b7aa5557dbf05 = $this->env->getExtension("native_profiler");
        $__internal_d393fd6ef144dfe0c64335932ff1b802e8097a95a1faacfa1e3b7aa5557dbf05->enter($__internal_d393fd6ef144dfe0c64335932ff1b802e8097a95a1faacfa1e3b7aa5557dbf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d393fd6ef144dfe0c64335932ff1b802e8097a95a1faacfa1e3b7aa5557dbf05->leave($__internal_d393fd6ef144dfe0c64335932ff1b802e8097a95a1faacfa1e3b7aa5557dbf05_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_4b34f83fab3d20010cfa9316d31ccf544035062742956e377bd625c53f4eeed0 = $this->env->getExtension("native_profiler");
        $__internal_4b34f83fab3d20010cfa9316d31ccf544035062742956e377bd625c53f4eeed0->enter($__internal_4b34f83fab3d20010cfa9316d31ccf544035062742956e377bd625c53f4eeed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4b34f83fab3d20010cfa9316d31ccf544035062742956e377bd625c53f4eeed0->leave($__internal_4b34f83fab3d20010cfa9316d31ccf544035062742956e377bd625c53f4eeed0_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
