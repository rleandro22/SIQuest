<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig */
class __TwigTemplate_809d86eb8ab824c1b6460dc71c710285a8a505e4c4fa20b104938e831e415080 extends Twig_Template
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
        $__internal_8002d5ed5b2e0b9541a9e2964fe063c480ba0cad256b23cd0f0387234eb1b244 = $this->env->getExtension("native_profiler");
        $__internal_8002d5ed5b2e0b9541a9e2964fe063c480ba0cad256b23cd0f0387234eb1b244->enter($__internal_8002d5ed5b2e0b9541a9e2964fe063c480ba0cad256b23cd0f0387234eb1b244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8002d5ed5b2e0b9541a9e2964fe063c480ba0cad256b23cd0f0387234eb1b244->leave($__internal_8002d5ed5b2e0b9541a9e2964fe063c480ba0cad256b23cd0f0387234eb1b244_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_3176731e48a8182d79c17c65623d92d4ea2562f54879ad80183810d94b497363 = $this->env->getExtension("native_profiler");
        $__internal_3176731e48a8182d79c17c65623d92d4ea2562f54879ad80183810d94b497363->enter($__internal_3176731e48a8182d79c17c65623d92d4ea2562f54879ad80183810d94b497363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'widget');
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
        
        $__internal_3176731e48a8182d79c17c65623d92d4ea2562f54879ad80183810d94b497363->leave($__internal_3176731e48a8182d79c17c65623d92d4ea2562f54879ad80183810d94b497363_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
