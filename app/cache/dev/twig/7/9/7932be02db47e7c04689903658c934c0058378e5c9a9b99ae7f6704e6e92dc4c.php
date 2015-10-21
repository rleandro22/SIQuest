<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7932be02db47e7c04689903658c934c0058378e5c9a9b99ae7f6704e6e92dc4c extends Twig_Template
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
        $__internal_b61c81a02abb289fb80197dbf900bb9cd204ee948c17a69322b6e2e830f6f000 = $this->env->getExtension("native_profiler");
        $__internal_b61c81a02abb289fb80197dbf900bb9cd204ee948c17a69322b6e2e830f6f000->enter($__internal_b61c81a02abb289fb80197dbf900bb9cd204ee948c17a69322b6e2e830f6f000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b61c81a02abb289fb80197dbf900bb9cd204ee948c17a69322b6e2e830f6f000->leave($__internal_b61c81a02abb289fb80197dbf900bb9cd204ee948c17a69322b6e2e830f6f000_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a48c995dbd220987fc6b34376da82c53537edccdec2d8793f9b2479a4d9738e9 = $this->env->getExtension("native_profiler");
        $__internal_a48c995dbd220987fc6b34376da82c53537edccdec2d8793f9b2479a4d9738e9->enter($__internal_a48c995dbd220987fc6b34376da82c53537edccdec2d8793f9b2479a4d9738e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a48c995dbd220987fc6b34376da82c53537edccdec2d8793f9b2479a4d9738e9->leave($__internal_a48c995dbd220987fc6b34376da82c53537edccdec2d8793f9b2479a4d9738e9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_501f136acda0671c31eac9748f8b0b1ab1c10e3ff2d811421d5d90ffb9928c48 = $this->env->getExtension("native_profiler");
        $__internal_501f136acda0671c31eac9748f8b0b1ab1c10e3ff2d811421d5d90ffb9928c48->enter($__internal_501f136acda0671c31eac9748f8b0b1ab1c10e3ff2d811421d5d90ffb9928c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_501f136acda0671c31eac9748f8b0b1ab1c10e3ff2d811421d5d90ffb9928c48->leave($__internal_501f136acda0671c31eac9748f8b0b1ab1c10e3ff2d811421d5d90ffb9928c48_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c52278a61cc75a88ac9cbbe6987bac068e03ebfc3b824ec0430591e32d5a965 = $this->env->getExtension("native_profiler");
        $__internal_4c52278a61cc75a88ac9cbbe6987bac068e03ebfc3b824ec0430591e32d5a965->enter($__internal_4c52278a61cc75a88ac9cbbe6987bac068e03ebfc3b824ec0430591e32d5a965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4c52278a61cc75a88ac9cbbe6987bac068e03ebfc3b824ec0430591e32d5a965->leave($__internal_4c52278a61cc75a88ac9cbbe6987bac068e03ebfc3b824ec0430591e32d5a965_prof);

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
