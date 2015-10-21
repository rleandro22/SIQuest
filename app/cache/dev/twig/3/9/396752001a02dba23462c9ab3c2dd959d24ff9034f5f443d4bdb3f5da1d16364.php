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
        $__internal_003a16f370df13bb2300627578ae2c39f9d52ad511db4f625724267535237624 = $this->env->getExtension("native_profiler");
        $__internal_003a16f370df13bb2300627578ae2c39f9d52ad511db4f625724267535237624->enter($__internal_003a16f370df13bb2300627578ae2c39f9d52ad511db4f625724267535237624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_003a16f370df13bb2300627578ae2c39f9d52ad511db4f625724267535237624->leave($__internal_003a16f370df13bb2300627578ae2c39f9d52ad511db4f625724267535237624_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46f686e247a1d1e5c9585fe4a0a9d1d7f515fe193c57188109a6ecbb2d4df851 = $this->env->getExtension("native_profiler");
        $__internal_46f686e247a1d1e5c9585fe4a0a9d1d7f515fe193c57188109a6ecbb2d4df851->enter($__internal_46f686e247a1d1e5c9585fe4a0a9d1d7f515fe193c57188109a6ecbb2d4df851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_46f686e247a1d1e5c9585fe4a0a9d1d7f515fe193c57188109a6ecbb2d4df851->leave($__internal_46f686e247a1d1e5c9585fe4a0a9d1d7f515fe193c57188109a6ecbb2d4df851_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd14ae523aef1ad1fdac3936e2b7a130124b68ee15026f01c02db00a80c6d3fc = $this->env->getExtension("native_profiler");
        $__internal_fd14ae523aef1ad1fdac3936e2b7a130124b68ee15026f01c02db00a80c6d3fc->enter($__internal_fd14ae523aef1ad1fdac3936e2b7a130124b68ee15026f01c02db00a80c6d3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd14ae523aef1ad1fdac3936e2b7a130124b68ee15026f01c02db00a80c6d3fc->leave($__internal_fd14ae523aef1ad1fdac3936e2b7a130124b68ee15026f01c02db00a80c6d3fc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b03bd28408c17d31afc1c902e69feb8500a57cfd3af6b15874a70c545065831 = $this->env->getExtension("native_profiler");
        $__internal_4b03bd28408c17d31afc1c902e69feb8500a57cfd3af6b15874a70c545065831->enter($__internal_4b03bd28408c17d31afc1c902e69feb8500a57cfd3af6b15874a70c545065831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4b03bd28408c17d31afc1c902e69feb8500a57cfd3af6b15874a70c545065831->leave($__internal_4b03bd28408c17d31afc1c902e69feb8500a57cfd3af6b15874a70c545065831_prof);

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
