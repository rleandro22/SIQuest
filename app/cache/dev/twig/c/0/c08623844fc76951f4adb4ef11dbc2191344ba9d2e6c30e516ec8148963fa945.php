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
        $__internal_ea13fe6f4a28de9750eeea87fbfdb27b63b74ee924fde247937ce6d914a21711 = $this->env->getExtension("native_profiler");
        $__internal_ea13fe6f4a28de9750eeea87fbfdb27b63b74ee924fde247937ce6d914a21711->enter($__internal_ea13fe6f4a28de9750eeea87fbfdb27b63b74ee924fde247937ce6d914a21711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea13fe6f4a28de9750eeea87fbfdb27b63b74ee924fde247937ce6d914a21711->leave($__internal_ea13fe6f4a28de9750eeea87fbfdb27b63b74ee924fde247937ce6d914a21711_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_efb9f00ce569a86c96f3afae37dfc0032b5de80f5ee4048f4043e1f81f3ef770 = $this->env->getExtension("native_profiler");
        $__internal_efb9f00ce569a86c96f3afae37dfc0032b5de80f5ee4048f4043e1f81f3ef770->enter($__internal_efb9f00ce569a86c96f3afae37dfc0032b5de80f5ee4048f4043e1f81f3ef770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_efb9f00ce569a86c96f3afae37dfc0032b5de80f5ee4048f4043e1f81f3ef770->leave($__internal_efb9f00ce569a86c96f3afae37dfc0032b5de80f5ee4048f4043e1f81f3ef770_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ca272f68f0380f20dccaeb8d5da27ede9dc0e0ea2372888b9402881cbf8caea = $this->env->getExtension("native_profiler");
        $__internal_2ca272f68f0380f20dccaeb8d5da27ede9dc0e0ea2372888b9402881cbf8caea->enter($__internal_2ca272f68f0380f20dccaeb8d5da27ede9dc0e0ea2372888b9402881cbf8caea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2ca272f68f0380f20dccaeb8d5da27ede9dc0e0ea2372888b9402881cbf8caea->leave($__internal_2ca272f68f0380f20dccaeb8d5da27ede9dc0e0ea2372888b9402881cbf8caea_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6c536d9913e9ded4e2bf24bd83011b307f459fc4a80bf42623012a998db997a = $this->env->getExtension("native_profiler");
        $__internal_f6c536d9913e9ded4e2bf24bd83011b307f459fc4a80bf42623012a998db997a->enter($__internal_f6c536d9913e9ded4e2bf24bd83011b307f459fc4a80bf42623012a998db997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f6c536d9913e9ded4e2bf24bd83011b307f459fc4a80bf42623012a998db997a->leave($__internal_f6c536d9913e9ded4e2bf24bd83011b307f459fc4a80bf42623012a998db997a_prof);

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
