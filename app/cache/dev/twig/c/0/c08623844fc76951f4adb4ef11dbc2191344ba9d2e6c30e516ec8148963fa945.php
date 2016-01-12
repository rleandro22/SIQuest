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
        $__internal_8b30a172d1f1fd00955f28228cedec91d72b1f14fddb4f865f7bfe8363748d69 = $this->env->getExtension("native_profiler");
        $__internal_8b30a172d1f1fd00955f28228cedec91d72b1f14fddb4f865f7bfe8363748d69->enter($__internal_8b30a172d1f1fd00955f28228cedec91d72b1f14fddb4f865f7bfe8363748d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b30a172d1f1fd00955f28228cedec91d72b1f14fddb4f865f7bfe8363748d69->leave($__internal_8b30a172d1f1fd00955f28228cedec91d72b1f14fddb4f865f7bfe8363748d69_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_510a292c88d0df828ff441c7be8e05eada75efd7787e03f989b987b89ae1fac6 = $this->env->getExtension("native_profiler");
        $__internal_510a292c88d0df828ff441c7be8e05eada75efd7787e03f989b987b89ae1fac6->enter($__internal_510a292c88d0df828ff441c7be8e05eada75efd7787e03f989b987b89ae1fac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_510a292c88d0df828ff441c7be8e05eada75efd7787e03f989b987b89ae1fac6->leave($__internal_510a292c88d0df828ff441c7be8e05eada75efd7787e03f989b987b89ae1fac6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_49325c6250de26a89cc8b953b4cb7bd6233dbcd22560d30d137e030fd5b837a4 = $this->env->getExtension("native_profiler");
        $__internal_49325c6250de26a89cc8b953b4cb7bd6233dbcd22560d30d137e030fd5b837a4->enter($__internal_49325c6250de26a89cc8b953b4cb7bd6233dbcd22560d30d137e030fd5b837a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_49325c6250de26a89cc8b953b4cb7bd6233dbcd22560d30d137e030fd5b837a4->leave($__internal_49325c6250de26a89cc8b953b4cb7bd6233dbcd22560d30d137e030fd5b837a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_003df3c393f0993af2edab0bf41c2245bda9c36ef54f930082e72f633f3ca5c2 = $this->env->getExtension("native_profiler");
        $__internal_003df3c393f0993af2edab0bf41c2245bda9c36ef54f930082e72f633f3ca5c2->enter($__internal_003df3c393f0993af2edab0bf41c2245bda9c36ef54f930082e72f633f3ca5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_003df3c393f0993af2edab0bf41c2245bda9c36ef54f930082e72f633f3ca5c2->leave($__internal_003df3c393f0993af2edab0bf41c2245bda9c36ef54f930082e72f633f3ca5c2_prof);

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
