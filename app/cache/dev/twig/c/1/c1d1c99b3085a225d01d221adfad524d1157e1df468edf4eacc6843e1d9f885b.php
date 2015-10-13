<?php

/* UciBaseDatosBundle:Pmbok:new.html.twig */
class __TwigTemplate_c1d1c99b3085a225d01d221adfad524d1157e1df468edf4eacc6843e1d9f885b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Pmbok:new.html.twig", 1);
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
        $__internal_addb6cd1332cca0bb168928cf93d016ac03708c573cbe9d977b9ae3f9b305214 = $this->env->getExtension("native_profiler");
        $__internal_addb6cd1332cca0bb168928cf93d016ac03708c573cbe9d977b9ae3f9b305214->enter($__internal_addb6cd1332cca0bb168928cf93d016ac03708c573cbe9d977b9ae3f9b305214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Pmbok:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_addb6cd1332cca0bb168928cf93d016ac03708c573cbe9d977b9ae3f9b305214->leave($__internal_addb6cd1332cca0bb168928cf93d016ac03708c573cbe9d977b9ae3f9b305214_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_72c6019c23fe0bcea95dc41d493f73bf72230448eb2c7cfcb514dc80c9cb88c4 = $this->env->getExtension("native_profiler");
        $__internal_72c6019c23fe0bcea95dc41d493f73bf72230448eb2c7cfcb514dc80c9cb88c4->enter($__internal_72c6019c23fe0bcea95dc41d493f73bf72230448eb2c7cfcb514dc80c9cb88c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pmbok creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("pmbok");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_72c6019c23fe0bcea95dc41d493f73bf72230448eb2c7cfcb514dc80c9cb88c4->leave($__internal_72c6019c23fe0bcea95dc41d493f73bf72230448eb2c7cfcb514dc80c9cb88c4_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Pmbok:new.html.twig";
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
