<?php

/* UciBaseDatosBundle:Usuario:edit.html.twig */
class __TwigTemplate_e63f5928ad49043897169da96da9cb43f26bc53724f3f80eb89eb207fa56369a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Usuario:edit.html.twig", 1);
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
        $__internal_85aac67fd784137e8a6cc23dd1ebb4a549cf1becb2aae9abb50e05a553a384ed = $this->env->getExtension("native_profiler");
        $__internal_85aac67fd784137e8a6cc23dd1ebb4a549cf1becb2aae9abb50e05a553a384ed->enter($__internal_85aac67fd784137e8a6cc23dd1ebb4a549cf1becb2aae9abb50e05a553a384ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Usuario:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85aac67fd784137e8a6cc23dd1ebb4a549cf1becb2aae9abb50e05a553a384ed->leave($__internal_85aac67fd784137e8a6cc23dd1ebb4a549cf1becb2aae9abb50e05a553a384ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4f68e6237d4f5fa5f585909c9acee0b7e56117f1fdc3777c17716e74c9c7fa9 = $this->env->getExtension("native_profiler");
        $__internal_d4f68e6237d4f5fa5f585909c9acee0b7e56117f1fdc3777c17716e74c9c7fa9->enter($__internal_d4f68e6237d4f5fa5f585909c9acee0b7e56117f1fdc3777c17716e74c9c7fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Usuario edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("usuario");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_d4f68e6237d4f5fa5f585909c9acee0b7e56117f1fdc3777c17716e74c9c7fa9->leave($__internal_d4f68e6237d4f5fa5f585909c9acee0b7e56117f1fdc3777c17716e74c9c7fa9_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Usuario:edit.html.twig";
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
