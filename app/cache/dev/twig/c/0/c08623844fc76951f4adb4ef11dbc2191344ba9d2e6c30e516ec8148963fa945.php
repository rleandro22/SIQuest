<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c08623844fc76951f4adb4ef11dbc2191344ba9d2e6c30e516ec8148963fa945 extends Twig_Template
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
        $__internal_f4637f4c3c4af1abfa656dfafe9760df9e4b0236bd132b24a671dd6cf8e9bb00 = $this->env->getExtension("native_profiler");
        $__internal_f4637f4c3c4af1abfa656dfafe9760df9e4b0236bd132b24a671dd6cf8e9bb00->enter($__internal_f4637f4c3c4af1abfa656dfafe9760df9e4b0236bd132b24a671dd6cf8e9bb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4637f4c3c4af1abfa656dfafe9760df9e4b0236bd132b24a671dd6cf8e9bb00->leave($__internal_f4637f4c3c4af1abfa656dfafe9760df9e4b0236bd132b24a671dd6cf8e9bb00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1bc464daccb4b288f6b7e975ff103bc1d8c75a8a1d00eda2b90029aaa6c35ffe = $this->env->getExtension("native_profiler");
        $__internal_1bc464daccb4b288f6b7e975ff103bc1d8c75a8a1d00eda2b90029aaa6c35ffe->enter($__internal_1bc464daccb4b288f6b7e975ff103bc1d8c75a8a1d00eda2b90029aaa6c35ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1bc464daccb4b288f6b7e975ff103bc1d8c75a8a1d00eda2b90029aaa6c35ffe->leave($__internal_1bc464daccb4b288f6b7e975ff103bc1d8c75a8a1d00eda2b90029aaa6c35ffe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_72f23156380bcfd92c0a5b423715f5e2434ab91e02a792294bf6e279f5245e1e = $this->env->getExtension("native_profiler");
        $__internal_72f23156380bcfd92c0a5b423715f5e2434ab91e02a792294bf6e279f5245e1e->enter($__internal_72f23156380bcfd92c0a5b423715f5e2434ab91e02a792294bf6e279f5245e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_72f23156380bcfd92c0a5b423715f5e2434ab91e02a792294bf6e279f5245e1e->leave($__internal_72f23156380bcfd92c0a5b423715f5e2434ab91e02a792294bf6e279f5245e1e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f146e5064f229403e9d95e95275173d2ccb204697c3c80a0651a21620548b0ec = $this->env->getExtension("native_profiler");
        $__internal_f146e5064f229403e9d95e95275173d2ccb204697c3c80a0651a21620548b0ec->enter($__internal_f146e5064f229403e9d95e95275173d2ccb204697c3c80a0651a21620548b0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f146e5064f229403e9d95e95275173d2ccb204697c3c80a0651a21620548b0ec->leave($__internal_f146e5064f229403e9d95e95275173d2ccb204697c3c80a0651a21620548b0ec_prof);

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
