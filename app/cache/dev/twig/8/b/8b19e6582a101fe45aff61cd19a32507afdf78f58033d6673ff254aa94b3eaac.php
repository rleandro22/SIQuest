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
        $__internal_8d49a42d7058118ae8ec34b18fdff6906c5972ac35e3f5ed4b508903f5afc25d = $this->env->getExtension("native_profiler");
        $__internal_8d49a42d7058118ae8ec34b18fdff6906c5972ac35e3f5ed4b508903f5afc25d->enter($__internal_8d49a42d7058118ae8ec34b18fdff6906c5972ac35e3f5ed4b508903f5afc25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8d49a42d7058118ae8ec34b18fdff6906c5972ac35e3f5ed4b508903f5afc25d->leave($__internal_8d49a42d7058118ae8ec34b18fdff6906c5972ac35e3f5ed4b508903f5afc25d_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_fc8b1e9aaf460337261b25a031431d6503b7ea15760779284ba229a3b788ca9c = $this->env->getExtension("native_profiler");
        $__internal_fc8b1e9aaf460337261b25a031431d6503b7ea15760779284ba229a3b788ca9c->enter($__internal_fc8b1e9aaf460337261b25a031431d6503b7ea15760779284ba229a3b788ca9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fc8b1e9aaf460337261b25a031431d6503b7ea15760779284ba229a3b788ca9c->leave($__internal_fc8b1e9aaf460337261b25a031431d6503b7ea15760779284ba229a3b788ca9c_prof);

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
