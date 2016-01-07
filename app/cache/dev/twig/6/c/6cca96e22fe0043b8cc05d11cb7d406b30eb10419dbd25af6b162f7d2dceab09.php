<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig */
class __TwigTemplate_6cca96e22fe0043b8cc05d11cb7d406b30eb10419dbd25af6b162f7d2dceab09 extends Twig_Template
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
        $__internal_5c4c6a62246d1ee1aeb35c875effbb4615f1cc1bae571508b31c3e2c8aff6b09 = $this->env->getExtension("native_profiler");
        $__internal_5c4c6a62246d1ee1aeb35c875effbb4615f1cc1bae571508b31c3e2c8aff6b09->enter($__internal_5c4c6a62246d1ee1aeb35c875effbb4615f1cc1bae571508b31c3e2c8aff6b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5c4c6a62246d1ee1aeb35c875effbb4615f1cc1bae571508b31c3e2c8aff6b09->leave($__internal_5c4c6a62246d1ee1aeb35c875effbb4615f1cc1bae571508b31c3e2c8aff6b09_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_5dc65a4d8ef9f0a51fbe3f7bde07777ff8a3c08533c118e1a8cad50116a7fd69 = $this->env->getExtension("native_profiler");
        $__internal_5dc65a4d8ef9f0a51fbe3f7bde07777ff8a3c08533c118e1a8cad50116a7fd69->enter($__internal_5dc65a4d8ef9f0a51fbe3f7bde07777ff8a3c08533c118e1a8cad50116a7fd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'widget');
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
        
        $__internal_5dc65a4d8ef9f0a51fbe3f7bde07777ff8a3c08533c118e1a8cad50116a7fd69->leave($__internal_5dc65a4d8ef9f0a51fbe3f7bde07777ff8a3c08533c118e1a8cad50116a7fd69_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
