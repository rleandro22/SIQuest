<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig */
class __TwigTemplate_1e982a4d489cf2deb36211e4dc426cc529fbf9109e820db29b74adae3cc13020 extends Twig_Template
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
        $__internal_5ee6cd41c024e0d63dae61fcb7e2b5b6fc32d15470ad60c8a58474db9c6ddba5 = $this->env->getExtension("native_profiler");
        $__internal_5ee6cd41c024e0d63dae61fcb7e2b5b6fc32d15470ad60c8a58474db9c6ddba5->enter($__internal_5ee6cd41c024e0d63dae61fcb7e2b5b6fc32d15470ad60c8a58474db9c6ddba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5ee6cd41c024e0d63dae61fcb7e2b5b6fc32d15470ad60c8a58474db9c6ddba5->leave($__internal_5ee6cd41c024e0d63dae61fcb7e2b5b6fc32d15470ad60c8a58474db9c6ddba5_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_f2583bb87239e12706f45deb09a835284f4ef01fbb56eca3de3803895e519fa4 = $this->env->getExtension("native_profiler");
        $__internal_f2583bb87239e12706f45deb09a835284f4ef01fbb56eca3de3803895e519fa4->enter($__internal_f2583bb87239e12706f45deb09a835284f4ef01fbb56eca3de3803895e519fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f2583bb87239e12706f45deb09a835284f4ef01fbb56eca3de3803895e519fa4->leave($__internal_f2583bb87239e12706f45deb09a835284f4ef01fbb56eca3de3803895e519fa4_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
