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
        $__internal_45dc7d08af34137f555983509dde9161da3c7ab26c4b10f347ddf928f03a7134 = $this->env->getExtension("native_profiler");
        $__internal_45dc7d08af34137f555983509dde9161da3c7ab26c4b10f347ddf928f03a7134->enter($__internal_45dc7d08af34137f555983509dde9161da3c7ab26c4b10f347ddf928f03a7134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45dc7d08af34137f555983509dde9161da3c7ab26c4b10f347ddf928f03a7134->leave($__internal_45dc7d08af34137f555983509dde9161da3c7ab26c4b10f347ddf928f03a7134_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d0f6a5c5d6036761f3afc314f1e7010156d62e8aefbd830f8002a760dd40351 = $this->env->getExtension("native_profiler");
        $__internal_9d0f6a5c5d6036761f3afc314f1e7010156d62e8aefbd830f8002a760dd40351->enter($__internal_9d0f6a5c5d6036761f3afc314f1e7010156d62e8aefbd830f8002a760dd40351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9d0f6a5c5d6036761f3afc314f1e7010156d62e8aefbd830f8002a760dd40351->leave($__internal_9d0f6a5c5d6036761f3afc314f1e7010156d62e8aefbd830f8002a760dd40351_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5592b3d421c79a2b6d775d82cbae39d84e1abff6c2978cb46e6b60818d867581 = $this->env->getExtension("native_profiler");
        $__internal_5592b3d421c79a2b6d775d82cbae39d84e1abff6c2978cb46e6b60818d867581->enter($__internal_5592b3d421c79a2b6d775d82cbae39d84e1abff6c2978cb46e6b60818d867581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5592b3d421c79a2b6d775d82cbae39d84e1abff6c2978cb46e6b60818d867581->leave($__internal_5592b3d421c79a2b6d775d82cbae39d84e1abff6c2978cb46e6b60818d867581_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d3f257aed44c6103dea43b20cab2ad30fa562e4f29242ae64259d73083ccee6 = $this->env->getExtension("native_profiler");
        $__internal_3d3f257aed44c6103dea43b20cab2ad30fa562e4f29242ae64259d73083ccee6->enter($__internal_3d3f257aed44c6103dea43b20cab2ad30fa562e4f29242ae64259d73083ccee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3d3f257aed44c6103dea43b20cab2ad30fa562e4f29242ae64259d73083ccee6->leave($__internal_3d3f257aed44c6103dea43b20cab2ad30fa562e4f29242ae64259d73083ccee6_prof);

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
