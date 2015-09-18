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
        $__internal_01207edda778e762a0913d3e989c4eb58a9fa27a96ca8d95ec421a07a4e0f26a = $this->env->getExtension("native_profiler");
        $__internal_01207edda778e762a0913d3e989c4eb58a9fa27a96ca8d95ec421a07a4e0f26a->enter($__internal_01207edda778e762a0913d3e989c4eb58a9fa27a96ca8d95ec421a07a4e0f26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01207edda778e762a0913d3e989c4eb58a9fa27a96ca8d95ec421a07a4e0f26a->leave($__internal_01207edda778e762a0913d3e989c4eb58a9fa27a96ca8d95ec421a07a4e0f26a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_31e32b332a00c5bf6947f29d7dcf58482cec3344b20c0c6b3b152dfd57be3118 = $this->env->getExtension("native_profiler");
        $__internal_31e32b332a00c5bf6947f29d7dcf58482cec3344b20c0c6b3b152dfd57be3118->enter($__internal_31e32b332a00c5bf6947f29d7dcf58482cec3344b20c0c6b3b152dfd57be3118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_31e32b332a00c5bf6947f29d7dcf58482cec3344b20c0c6b3b152dfd57be3118->leave($__internal_31e32b332a00c5bf6947f29d7dcf58482cec3344b20c0c6b3b152dfd57be3118_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcf695893076d3bd1369a649dcf388686ce82e2820059386e7c62ac8f31ad45f = $this->env->getExtension("native_profiler");
        $__internal_bcf695893076d3bd1369a649dcf388686ce82e2820059386e7c62ac8f31ad45f->enter($__internal_bcf695893076d3bd1369a649dcf388686ce82e2820059386e7c62ac8f31ad45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bcf695893076d3bd1369a649dcf388686ce82e2820059386e7c62ac8f31ad45f->leave($__internal_bcf695893076d3bd1369a649dcf388686ce82e2820059386e7c62ac8f31ad45f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b99ec7722fde69f3a05e9f92f925e3bc3f6a4bba75b07cab47e465f71d0aa5a = $this->env->getExtension("native_profiler");
        $__internal_6b99ec7722fde69f3a05e9f92f925e3bc3f6a4bba75b07cab47e465f71d0aa5a->enter($__internal_6b99ec7722fde69f3a05e9f92f925e3bc3f6a4bba75b07cab47e465f71d0aa5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6b99ec7722fde69f3a05e9f92f925e3bc3f6a4bba75b07cab47e465f71d0aa5a->leave($__internal_6b99ec7722fde69f3a05e9f92f925e3bc3f6a4bba75b07cab47e465f71d0aa5a_prof);

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
