<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig */
class __TwigTemplate_3340635f89ca6be7ceba8f4a349e48d5fd8268e77ad8ff1b6ad89fad91ea43f6 extends Twig_Template
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
        $__internal_e0f93406663c02baa4d723bbef1cfea01e94eaf309d34e5a390efb72a370c9d5 = $this->env->getExtension("native_profiler");
        $__internal_e0f93406663c02baa4d723bbef1cfea01e94eaf309d34e5a390efb72a370c9d5->enter($__internal_e0f93406663c02baa4d723bbef1cfea01e94eaf309d34e5a390efb72a370c9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_e0f93406663c02baa4d723bbef1cfea01e94eaf309d34e5a390efb72a370c9d5->leave($__internal_e0f93406663c02baa4d723bbef1cfea01e94eaf309d34e5a390efb72a370c9d5_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_80b8e75639a5c0285e072f017ba8a9e0aad3070ec54d24c18c671c70eab2a586 = $this->env->getExtension("native_profiler");
        $__internal_80b8e75639a5c0285e072f017ba8a9e0aad3070ec54d24c18c671c70eab2a586->enter($__internal_80b8e75639a5c0285e072f017ba8a9e0aad3070ec54d24c18c671c70eab2a586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget');
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
        
        $__internal_80b8e75639a5c0285e072f017ba8a9e0aad3070ec54d24c18c671c70eab2a586->leave($__internal_80b8e75639a5c0285e072f017ba8a9e0aad3070ec54d24c18c671c70eab2a586_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPLibro.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
