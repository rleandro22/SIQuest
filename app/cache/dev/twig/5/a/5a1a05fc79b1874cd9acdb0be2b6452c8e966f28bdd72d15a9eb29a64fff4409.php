<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig */
class __TwigTemplate_5a1a05fc79b1874cd9acdb0be2b6452c8e966f28bdd72d15a9eb29a64fff4409 extends Twig_Template
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
        $__internal_c67f3be91fa8a04fd1463706327636dd2840072fdee7162f61bb2c2b3ea4a276 = $this->env->getExtension("native_profiler");
        $__internal_c67f3be91fa8a04fd1463706327636dd2840072fdee7162f61bb2c2b3ea4a276->enter($__internal_c67f3be91fa8a04fd1463706327636dd2840072fdee7162f61bb2c2b3ea4a276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c67f3be91fa8a04fd1463706327636dd2840072fdee7162f61bb2c2b3ea4a276->leave($__internal_c67f3be91fa8a04fd1463706327636dd2840072fdee7162f61bb2c2b3ea4a276_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_94e6dfbd25dcab27901389a22c83c49765b3e47e36a77b9df73b0865d9b73899 = $this->env->getExtension("native_profiler");
        $__internal_94e6dfbd25dcab27901389a22c83c49765b3e47e36a77b9df73b0865d9b73899->enter($__internal_94e6dfbd25dcab27901389a22c83c49765b3e47e36a77b9df73b0865d9b73899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_94e6dfbd25dcab27901389a22c83c49765b3e47e36a77b9df73b0865d9b73899->leave($__internal_94e6dfbd25dcab27901389a22c83c49765b3e47e36a77b9df73b0865d9b73899_prof);

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