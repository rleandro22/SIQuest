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
        $__internal_bfdad33eb8be0d9e073384c900e1c9bacbe4aee79004ad20c5cfb74300d153f8 = $this->env->getExtension("native_profiler");
        $__internal_bfdad33eb8be0d9e073384c900e1c9bacbe4aee79004ad20c5cfb74300d153f8->enter($__internal_bfdad33eb8be0d9e073384c900e1c9bacbe4aee79004ad20c5cfb74300d153f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfdad33eb8be0d9e073384c900e1c9bacbe4aee79004ad20c5cfb74300d153f8->leave($__internal_bfdad33eb8be0d9e073384c900e1c9bacbe4aee79004ad20c5cfb74300d153f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_acf0a01467431edb29d7ab4d8718927e8a1760c53f42447732b22890abcaee92 = $this->env->getExtension("native_profiler");
        $__internal_acf0a01467431edb29d7ab4d8718927e8a1760c53f42447732b22890abcaee92->enter($__internal_acf0a01467431edb29d7ab4d8718927e8a1760c53f42447732b22890abcaee92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_acf0a01467431edb29d7ab4d8718927e8a1760c53f42447732b22890abcaee92->leave($__internal_acf0a01467431edb29d7ab4d8718927e8a1760c53f42447732b22890abcaee92_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_325e4704efd1a8f1ade98f3c2039daa846721da857c9e9d3c9f187b0cb14e159 = $this->env->getExtension("native_profiler");
        $__internal_325e4704efd1a8f1ade98f3c2039daa846721da857c9e9d3c9f187b0cb14e159->enter($__internal_325e4704efd1a8f1ade98f3c2039daa846721da857c9e9d3c9f187b0cb14e159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_325e4704efd1a8f1ade98f3c2039daa846721da857c9e9d3c9f187b0cb14e159->leave($__internal_325e4704efd1a8f1ade98f3c2039daa846721da857c9e9d3c9f187b0cb14e159_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_097819b15d92b635cbee6582e5204cc028ec0154e0dd5502c0ccf15b47183a27 = $this->env->getExtension("native_profiler");
        $__internal_097819b15d92b635cbee6582e5204cc028ec0154e0dd5502c0ccf15b47183a27->enter($__internal_097819b15d92b635cbee6582e5204cc028ec0154e0dd5502c0ccf15b47183a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_097819b15d92b635cbee6582e5204cc028ec0154e0dd5502c0ccf15b47183a27->leave($__internal_097819b15d92b635cbee6582e5204cc028ec0154e0dd5502c0ccf15b47183a27_prof);

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
