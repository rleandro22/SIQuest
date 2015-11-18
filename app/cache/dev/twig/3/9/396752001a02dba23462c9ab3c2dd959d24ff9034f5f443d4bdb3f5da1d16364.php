<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_396752001a02dba23462c9ab3c2dd959d24ff9034f5f443d4bdb3f5da1d16364 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48e09b3bdb525c94276261aba6606f2cd5e1bae7594614458dc2c0fb07d76120 = $this->env->getExtension("native_profiler");
        $__internal_48e09b3bdb525c94276261aba6606f2cd5e1bae7594614458dc2c0fb07d76120->enter($__internal_48e09b3bdb525c94276261aba6606f2cd5e1bae7594614458dc2c0fb07d76120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48e09b3bdb525c94276261aba6606f2cd5e1bae7594614458dc2c0fb07d76120->leave($__internal_48e09b3bdb525c94276261aba6606f2cd5e1bae7594614458dc2c0fb07d76120_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc9fd26d189dd307e2dc8753d46ee39a67253c751d555913d6a42739e2fc73be = $this->env->getExtension("native_profiler");
        $__internal_fc9fd26d189dd307e2dc8753d46ee39a67253c751d555913d6a42739e2fc73be->enter($__internal_fc9fd26d189dd307e2dc8753d46ee39a67253c751d555913d6a42739e2fc73be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fc9fd26d189dd307e2dc8753d46ee39a67253c751d555913d6a42739e2fc73be->leave($__internal_fc9fd26d189dd307e2dc8753d46ee39a67253c751d555913d6a42739e2fc73be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d45558c6e1fe19db8786cc1015faa47a14acbcd27ff035b4d2d3f4cef285338b = $this->env->getExtension("native_profiler");
        $__internal_d45558c6e1fe19db8786cc1015faa47a14acbcd27ff035b4d2d3f4cef285338b->enter($__internal_d45558c6e1fe19db8786cc1015faa47a14acbcd27ff035b4d2d3f4cef285338b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d45558c6e1fe19db8786cc1015faa47a14acbcd27ff035b4d2d3f4cef285338b->leave($__internal_d45558c6e1fe19db8786cc1015faa47a14acbcd27ff035b4d2d3f4cef285338b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b7a480b2ab57518c551d49a0f254322f9298ce563901c369919b34ef437c9e0 = $this->env->getExtension("native_profiler");
        $__internal_3b7a480b2ab57518c551d49a0f254322f9298ce563901c369919b34ef437c9e0->enter($__internal_3b7a480b2ab57518c551d49a0f254322f9298ce563901c369919b34ef437c9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3b7a480b2ab57518c551d49a0f254322f9298ce563901c369919b34ef437c9e0->leave($__internal_3b7a480b2ab57518c551d49a0f254322f9298ce563901c369919b34ef437c9e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
