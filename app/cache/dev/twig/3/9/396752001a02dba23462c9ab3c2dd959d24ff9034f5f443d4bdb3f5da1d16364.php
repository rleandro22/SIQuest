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
        $__internal_0cbfa22d31f7f53a3ba5d430b6abf82dd8175219c266a543d3605cdb3f81912e = $this->env->getExtension("native_profiler");
        $__internal_0cbfa22d31f7f53a3ba5d430b6abf82dd8175219c266a543d3605cdb3f81912e->enter($__internal_0cbfa22d31f7f53a3ba5d430b6abf82dd8175219c266a543d3605cdb3f81912e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cbfa22d31f7f53a3ba5d430b6abf82dd8175219c266a543d3605cdb3f81912e->leave($__internal_0cbfa22d31f7f53a3ba5d430b6abf82dd8175219c266a543d3605cdb3f81912e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd0da36872883af362342a5d050ea250c79f395fb9e9dbfb2b064e8cea2453f5 = $this->env->getExtension("native_profiler");
        $__internal_dd0da36872883af362342a5d050ea250c79f395fb9e9dbfb2b064e8cea2453f5->enter($__internal_dd0da36872883af362342a5d050ea250c79f395fb9e9dbfb2b064e8cea2453f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dd0da36872883af362342a5d050ea250c79f395fb9e9dbfb2b064e8cea2453f5->leave($__internal_dd0da36872883af362342a5d050ea250c79f395fb9e9dbfb2b064e8cea2453f5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_56b87c4f02de4b2a62a49649068fdd3aaecfb651faa87b414c438242747d4190 = $this->env->getExtension("native_profiler");
        $__internal_56b87c4f02de4b2a62a49649068fdd3aaecfb651faa87b414c438242747d4190->enter($__internal_56b87c4f02de4b2a62a49649068fdd3aaecfb651faa87b414c438242747d4190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_56b87c4f02de4b2a62a49649068fdd3aaecfb651faa87b414c438242747d4190->leave($__internal_56b87c4f02de4b2a62a49649068fdd3aaecfb651faa87b414c438242747d4190_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_34430b2ae7aa07e749f9f23dff3117f8d46369ef7cd399073226a691a9f5b620 = $this->env->getExtension("native_profiler");
        $__internal_34430b2ae7aa07e749f9f23dff3117f8d46369ef7cd399073226a691a9f5b620->enter($__internal_34430b2ae7aa07e749f9f23dff3117f8d46369ef7cd399073226a691a9f5b620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_34430b2ae7aa07e749f9f23dff3117f8d46369ef7cd399073226a691a9f5b620->leave($__internal_34430b2ae7aa07e749f9f23dff3117f8d46369ef7cd399073226a691a9f5b620_prof);

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
