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
        $__internal_76a25e2562447d204811adb66f5b7c180499b201c7cc62bb6227f4ec91219473 = $this->env->getExtension("native_profiler");
        $__internal_76a25e2562447d204811adb66f5b7c180499b201c7cc62bb6227f4ec91219473->enter($__internal_76a25e2562447d204811adb66f5b7c180499b201c7cc62bb6227f4ec91219473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76a25e2562447d204811adb66f5b7c180499b201c7cc62bb6227f4ec91219473->leave($__internal_76a25e2562447d204811adb66f5b7c180499b201c7cc62bb6227f4ec91219473_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13b9a3ea1babf585f533f036bda81db2a2f40b115cfa6443122c2cb29eab6e7b = $this->env->getExtension("native_profiler");
        $__internal_13b9a3ea1babf585f533f036bda81db2a2f40b115cfa6443122c2cb29eab6e7b->enter($__internal_13b9a3ea1babf585f533f036bda81db2a2f40b115cfa6443122c2cb29eab6e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_13b9a3ea1babf585f533f036bda81db2a2f40b115cfa6443122c2cb29eab6e7b->leave($__internal_13b9a3ea1babf585f533f036bda81db2a2f40b115cfa6443122c2cb29eab6e7b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b668b5244a24794aba2fd8243c5d3e348dca55b1d9a0ac4b080667653986ac3 = $this->env->getExtension("native_profiler");
        $__internal_4b668b5244a24794aba2fd8243c5d3e348dca55b1d9a0ac4b080667653986ac3->enter($__internal_4b668b5244a24794aba2fd8243c5d3e348dca55b1d9a0ac4b080667653986ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b668b5244a24794aba2fd8243c5d3e348dca55b1d9a0ac4b080667653986ac3->leave($__internal_4b668b5244a24794aba2fd8243c5d3e348dca55b1d9a0ac4b080667653986ac3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_db713d96eddf1ef14ac5df048e4f749080474955fa592d83251f8901e9b1582b = $this->env->getExtension("native_profiler");
        $__internal_db713d96eddf1ef14ac5df048e4f749080474955fa592d83251f8901e9b1582b->enter($__internal_db713d96eddf1ef14ac5df048e4f749080474955fa592d83251f8901e9b1582b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_db713d96eddf1ef14ac5df048e4f749080474955fa592d83251f8901e9b1582b->leave($__internal_db713d96eddf1ef14ac5df048e4f749080474955fa592d83251f8901e9b1582b_prof);

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
