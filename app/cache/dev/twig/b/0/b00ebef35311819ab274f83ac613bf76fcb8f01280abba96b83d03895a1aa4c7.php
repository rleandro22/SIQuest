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
        $__internal_38db74c211d7fae2cd753a9d6c7eb38909724d75b541c734be7a7115c076d024 = $this->env->getExtension("native_profiler");
        $__internal_38db74c211d7fae2cd753a9d6c7eb38909724d75b541c734be7a7115c076d024->enter($__internal_38db74c211d7fae2cd753a9d6c7eb38909724d75b541c734be7a7115c076d024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaLibro:prototipoCapitulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_38db74c211d7fae2cd753a9d6c7eb38909724d75b541c734be7a7115c076d024->leave($__internal_38db74c211d7fae2cd753a9d6c7eb38909724d75b541c734be7a7115c076d024_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_e91d038652a49d12e8354b4e6c8ac01c354683b5f8b7abb88092592e6d534b07 = $this->env->getExtension("native_profiler");
        $__internal_e91d038652a49d12e8354b4e6c8ac01c354683b5f8b7abb88092592e6d534b07->enter($__internal_e91d038652a49d12e8354b4e6c8ac01c354683b5f8b7abb88092592e6d534b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e91d038652a49d12e8354b4e6c8ac01c354683b5f8b7abb88092592e6d534b07->leave($__internal_e91d038652a49d12e8354b4e6c8ac01c354683b5f8b7abb88092592e6d534b07_prof);

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
