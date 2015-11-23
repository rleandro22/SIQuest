<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig */
class __TwigTemplate_91c0abeaec5af2c1102f1388127f257a6fe53e77c18f35ee549c9d87e2a91c2a extends Twig_Template
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
        $__internal_d536be522d7fd3c6abbfb81114f97747c955d3f9ece10b9e11cd9df7216500de = $this->env->getExtension("native_profiler");
        $__internal_d536be522d7fd3c6abbfb81114f97747c955d3f9ece10b9e11cd9df7216500de->enter($__internal_d536be522d7fd3c6abbfb81114f97747c955d3f9ece10b9e11cd9df7216500de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d536be522d7fd3c6abbfb81114f97747c955d3f9ece10b9e11cd9df7216500de->leave($__internal_d536be522d7fd3c6abbfb81114f97747c955d3f9ece10b9e11cd9df7216500de_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_851fefae19f789a8d473248bdaf8d2d55023a0cf1cc00dfa8ae917718a44ef94 = $this->env->getExtension("native_profiler");
        $__internal_851fefae19f789a8d473248bdaf8d2d55023a0cf1cc00dfa8ae917718a44ef94->enter($__internal_851fefae19f789a8d473248bdaf8d2d55023a0cf1cc00dfa8ae917718a44ef94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_851fefae19f789a8d473248bdaf8d2d55023a0cf1cc00dfa8ae917718a44ef94->leave($__internal_851fefae19f789a8d473248bdaf8d2d55023a0cf1cc00dfa8ae917718a44ef94_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
