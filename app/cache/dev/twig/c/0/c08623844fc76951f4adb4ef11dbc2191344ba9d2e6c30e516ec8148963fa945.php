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
        $__internal_78859dfb9927aa21b9377660364924057092232d6e9d04c051911ff0449558d6 = $this->env->getExtension("native_profiler");
        $__internal_78859dfb9927aa21b9377660364924057092232d6e9d04c051911ff0449558d6->enter($__internal_78859dfb9927aa21b9377660364924057092232d6e9d04c051911ff0449558d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78859dfb9927aa21b9377660364924057092232d6e9d04c051911ff0449558d6->leave($__internal_78859dfb9927aa21b9377660364924057092232d6e9d04c051911ff0449558d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d97329954ea3001f6699cea6c0979785fbfac7301055c3257a631a6c43541249 = $this->env->getExtension("native_profiler");
        $__internal_d97329954ea3001f6699cea6c0979785fbfac7301055c3257a631a6c43541249->enter($__internal_d97329954ea3001f6699cea6c0979785fbfac7301055c3257a631a6c43541249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d97329954ea3001f6699cea6c0979785fbfac7301055c3257a631a6c43541249->leave($__internal_d97329954ea3001f6699cea6c0979785fbfac7301055c3257a631a6c43541249_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d935ace23107e7094032782f86b4961b1cef054134cd30b175f1678c6bf172f7 = $this->env->getExtension("native_profiler");
        $__internal_d935ace23107e7094032782f86b4961b1cef054134cd30b175f1678c6bf172f7->enter($__internal_d935ace23107e7094032782f86b4961b1cef054134cd30b175f1678c6bf172f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d935ace23107e7094032782f86b4961b1cef054134cd30b175f1678c6bf172f7->leave($__internal_d935ace23107e7094032782f86b4961b1cef054134cd30b175f1678c6bf172f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2aefb1686462f836f867916fbbe33619d763b374727cc594e9f5fee20e649d99 = $this->env->getExtension("native_profiler");
        $__internal_2aefb1686462f836f867916fbbe33619d763b374727cc594e9f5fee20e649d99->enter($__internal_2aefb1686462f836f867916fbbe33619d763b374727cc594e9f5fee20e649d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2aefb1686462f836f867916fbbe33619d763b374727cc594e9f5fee20e649d99->leave($__internal_2aefb1686462f836f867916fbbe33619d763b374727cc594e9f5fee20e649d99_prof);

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
