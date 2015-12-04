<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig */
class __TwigTemplate_ed64cbfc60ca4d7affaaeddd3b5014afa66f55b94f2af2cd4056cf525e38ae66 extends Twig_Template
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
        $__internal_c23c09c0e7bd3e57c21e55ae76e3ec0919ec49d8b3a53953b0347195e892779d = $this->env->getExtension("native_profiler");
        $__internal_c23c09c0e7bd3e57c21e55ae76e3ec0919ec49d8b3a53953b0347195e892779d->enter($__internal_c23c09c0e7bd3e57c21e55ae76e3ec0919ec49d8b3a53953b0347195e892779d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPGrupo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c23c09c0e7bd3e57c21e55ae76e3ec0919ec49d8b3a53953b0347195e892779d->leave($__internal_c23c09c0e7bd3e57c21e55ae76e3ec0919ec49d8b3a53953b0347195e892779d_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c35f6944dca30da556fd265d8c56dc79a4db177ddd6602aa96586019def32880 = $this->env->getExtension("native_profiler");
        $__internal_c35f6944dca30da556fd265d8c56dc79a4db177ddd6602aa96586019def32880->enter($__internal_c35f6944dca30da556fd265d8c56dc79a4db177ddd6602aa96586019def32880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c35f6944dca30da556fd265d8c56dc79a4db177ddd6602aa96586019def32880->leave($__internal_c35f6944dca30da556fd265d8c56dc79a4db177ddd6602aa96586019def32880_prof);

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
