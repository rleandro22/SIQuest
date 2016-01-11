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
        $__internal_d58c7a38b6e4869ee07816e92e4f8b720afa812f33168da287336876196aadad = $this->env->getExtension("native_profiler");
        $__internal_d58c7a38b6e4869ee07816e92e4f8b720afa812f33168da287336876196aadad->enter($__internal_d58c7a38b6e4869ee07816e92e4f8b720afa812f33168da287336876196aadad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d58c7a38b6e4869ee07816e92e4f8b720afa812f33168da287336876196aadad->leave($__internal_d58c7a38b6e4869ee07816e92e4f8b720afa812f33168da287336876196aadad_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_47fc1a4f23b600a2f801dc7e28fa86be66a06fe86e4feae096f31aa0a0fa50b1 = $this->env->getExtension("native_profiler");
        $__internal_47fc1a4f23b600a2f801dc7e28fa86be66a06fe86e4feae096f31aa0a0fa50b1->enter($__internal_47fc1a4f23b600a2f801dc7e28fa86be66a06fe86e4feae096f31aa0a0fa50b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_47fc1a4f23b600a2f801dc7e28fa86be66a06fe86e4feae096f31aa0a0fa50b1->leave($__internal_47fc1a4f23b600a2f801dc7e28fa86be66a06fe86e4feae096f31aa0a0fa50b1_prof);

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
