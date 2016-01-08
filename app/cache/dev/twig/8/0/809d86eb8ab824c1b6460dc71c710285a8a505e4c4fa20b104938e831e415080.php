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
        $__internal_97418206c74fbbe7175e2ae9429d9282991538d6329dcf3e4f9dae18e4332d54 = $this->env->getExtension("native_profiler");
        $__internal_97418206c74fbbe7175e2ae9429d9282991538d6329dcf3e4f9dae18e4332d54->enter($__internal_97418206c74fbbe7175e2ae9429d9282991538d6329dcf3e4f9dae18e4332d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_97418206c74fbbe7175e2ae9429d9282991538d6329dcf3e4f9dae18e4332d54->leave($__internal_97418206c74fbbe7175e2ae9429d9282991538d6329dcf3e4f9dae18e4332d54_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_590680b8ce4ad98d029d90a3ebde2407eb5c0dc317765e522fb6839d485ca864 = $this->env->getExtension("native_profiler");
        $__internal_590680b8ce4ad98d029d90a3ebde2407eb5c0dc317765e522fb6839d485ca864->enter($__internal_590680b8ce4ad98d029d90a3ebde2407eb5c0dc317765e522fb6839d485ca864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_590680b8ce4ad98d029d90a3ebde2407eb5c0dc317765e522fb6839d485ca864->leave($__internal_590680b8ce4ad98d029d90a3ebde2407eb5c0dc317765e522fb6839d485ca864_prof);

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
