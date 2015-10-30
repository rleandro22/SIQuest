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
        $__internal_4ef30417f1cf138ea2e0a8165cca4c2be7762c4111e4087f781f3b7b840f9abb = $this->env->getExtension("native_profiler");
        $__internal_4ef30417f1cf138ea2e0a8165cca4c2be7762c4111e4087f781f3b7b840f9abb->enter($__internal_4ef30417f1cf138ea2e0a8165cca4c2be7762c4111e4087f781f3b7b840f9abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ef30417f1cf138ea2e0a8165cca4c2be7762c4111e4087f781f3b7b840f9abb->leave($__internal_4ef30417f1cf138ea2e0a8165cca4c2be7762c4111e4087f781f3b7b840f9abb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56c9cd62f2e1da9ea2d84f4530f1800fc620294979eefdad52eba22b218e2630 = $this->env->getExtension("native_profiler");
        $__internal_56c9cd62f2e1da9ea2d84f4530f1800fc620294979eefdad52eba22b218e2630->enter($__internal_56c9cd62f2e1da9ea2d84f4530f1800fc620294979eefdad52eba22b218e2630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_56c9cd62f2e1da9ea2d84f4530f1800fc620294979eefdad52eba22b218e2630->leave($__internal_56c9cd62f2e1da9ea2d84f4530f1800fc620294979eefdad52eba22b218e2630_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7ffddcf45eaa6488ad0b96e04e8387a70e534d8dd6f0f8aae11617f54f8f6fc = $this->env->getExtension("native_profiler");
        $__internal_e7ffddcf45eaa6488ad0b96e04e8387a70e534d8dd6f0f8aae11617f54f8f6fc->enter($__internal_e7ffddcf45eaa6488ad0b96e04e8387a70e534d8dd6f0f8aae11617f54f8f6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e7ffddcf45eaa6488ad0b96e04e8387a70e534d8dd6f0f8aae11617f54f8f6fc->leave($__internal_e7ffddcf45eaa6488ad0b96e04e8387a70e534d8dd6f0f8aae11617f54f8f6fc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ea98bdef491e47e8bfbd3917acb88e31bdc51563e25ae55a8b690892a294722 = $this->env->getExtension("native_profiler");
        $__internal_2ea98bdef491e47e8bfbd3917acb88e31bdc51563e25ae55a8b690892a294722->enter($__internal_2ea98bdef491e47e8bfbd3917acb88e31bdc51563e25ae55a8b690892a294722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2ea98bdef491e47e8bfbd3917acb88e31bdc51563e25ae55a8b690892a294722->leave($__internal_2ea98bdef491e47e8bfbd3917acb88e31bdc51563e25ae55a8b690892a294722_prof);

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
