<?php

/* UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig */
class __TwigTemplate_b00ebef35311819ab274f83ac613bf76fcb8f01280abba96b83d03895a1aa4c7 extends Twig_Template
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
        $__internal_6c13268459554cc668d9d0aa352f84a2b169f4116cb309eb2051399df4f67e76 = $this->env->getExtension("native_profiler");
        $__internal_6c13268459554cc668d9d0aa352f84a2b169f4116cb309eb2051399df4f67e76->enter($__internal_6c13268459554cc668d9d0aa352f84a2b169f4116cb309eb2051399df4f67e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6c13268459554cc668d9d0aa352f84a2b169f4116cb309eb2051399df4f67e76->leave($__internal_6c13268459554cc668d9d0aa352f84a2b169f4116cb309eb2051399df4f67e76_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_14e37a84edd6d935c3af92ed13c8cde45d0240395ba071de2ec78023cf01edbd = $this->env->getExtension("native_profiler");
        $__internal_14e37a84edd6d935c3af92ed13c8cde45d0240395ba071de2ec78023cf01edbd->enter($__internal_14e37a84edd6d935c3af92ed13c8cde45d0240395ba071de2ec78023cf01edbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_14e37a84edd6d935c3af92ed13c8cde45d0240395ba071de2ec78023cf01edbd->leave($__internal_14e37a84edd6d935c3af92ed13c8cde45d0240395ba071de2ec78023cf01edbd_prof);

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
