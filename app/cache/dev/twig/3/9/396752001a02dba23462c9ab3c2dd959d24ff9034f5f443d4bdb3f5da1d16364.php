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
        $__internal_d9ff84198c1a6a2c2312a02c17bfdac485f38fcfcef2fe65737b2a9dc8023e50 = $this->env->getExtension("native_profiler");
        $__internal_d9ff84198c1a6a2c2312a02c17bfdac485f38fcfcef2fe65737b2a9dc8023e50->enter($__internal_d9ff84198c1a6a2c2312a02c17bfdac485f38fcfcef2fe65737b2a9dc8023e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9ff84198c1a6a2c2312a02c17bfdac485f38fcfcef2fe65737b2a9dc8023e50->leave($__internal_d9ff84198c1a6a2c2312a02c17bfdac485f38fcfcef2fe65737b2a9dc8023e50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e13eb60dbec0bfa76ad92c820c893daaa3df060308f3fbe7110c333ab1ed5ab4 = $this->env->getExtension("native_profiler");
        $__internal_e13eb60dbec0bfa76ad92c820c893daaa3df060308f3fbe7110c333ab1ed5ab4->enter($__internal_e13eb60dbec0bfa76ad92c820c893daaa3df060308f3fbe7110c333ab1ed5ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e13eb60dbec0bfa76ad92c820c893daaa3df060308f3fbe7110c333ab1ed5ab4->leave($__internal_e13eb60dbec0bfa76ad92c820c893daaa3df060308f3fbe7110c333ab1ed5ab4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c825c3c23b7435b3f2145f8d4c43baec9fc11566bac382da1a6391ae5e9ad910 = $this->env->getExtension("native_profiler");
        $__internal_c825c3c23b7435b3f2145f8d4c43baec9fc11566bac382da1a6391ae5e9ad910->enter($__internal_c825c3c23b7435b3f2145f8d4c43baec9fc11566bac382da1a6391ae5e9ad910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c825c3c23b7435b3f2145f8d4c43baec9fc11566bac382da1a6391ae5e9ad910->leave($__internal_c825c3c23b7435b3f2145f8d4c43baec9fc11566bac382da1a6391ae5e9ad910_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_09bf87c0d4822ccf7af493ad9bc9e39dc624ca177a8d1a07f2e60fcd7af6d80e = $this->env->getExtension("native_profiler");
        $__internal_09bf87c0d4822ccf7af493ad9bc9e39dc624ca177a8d1a07f2e60fcd7af6d80e->enter($__internal_09bf87c0d4822ccf7af493ad9bc9e39dc624ca177a8d1a07f2e60fcd7af6d80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_09bf87c0d4822ccf7af493ad9bc9e39dc624ca177a8d1a07f2e60fcd7af6d80e->leave($__internal_09bf87c0d4822ccf7af493ad9bc9e39dc624ca177a8d1a07f2e60fcd7af6d80e_prof);

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
