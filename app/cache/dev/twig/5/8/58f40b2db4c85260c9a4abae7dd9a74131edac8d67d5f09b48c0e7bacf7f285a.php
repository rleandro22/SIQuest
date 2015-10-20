<?php

/* UciBaseDatosBundle:TipoPrueba:new.html.twig */
class __TwigTemplate_58f40b2db4c85260c9a4abae7dd9a74131edac8d67d5f09b48c0e7bacf7f285a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:TipoPrueba:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0691a101b6af34741d32370942e67b25fca8250bf876a634b3b5caaa1d1307e = $this->env->getExtension("native_profiler");
        $__internal_e0691a101b6af34741d32370942e67b25fca8250bf876a634b3b5caaa1d1307e->enter($__internal_e0691a101b6af34741d32370942e67b25fca8250bf876a634b3b5caaa1d1307e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:TipoPrueba:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0691a101b6af34741d32370942e67b25fca8250bf876a634b3b5caaa1d1307e->leave($__internal_e0691a101b6af34741d32370942e67b25fca8250bf876a634b3b5caaa1d1307e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c83c3b86b3b03a53aeee5517354b3f742865456b34018512247f478b6b02f50 = $this->env->getExtension("native_profiler");
        $__internal_9c83c3b86b3b03a53aeee5517354b3f742865456b34018512247f478b6b02f50->enter($__internal_9c83c3b86b3b03a53aeee5517354b3f742865456b34018512247f478b6b02f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TipoPrueba creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("tipoprueba");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_9c83c3b86b3b03a53aeee5517354b3f742865456b34018512247f478b6b02f50->leave($__internal_9c83c3b86b3b03a53aeee5517354b3f742865456b34018512247f478b6b02f50_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:TipoPrueba:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
