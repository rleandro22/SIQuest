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
        $__internal_1bc1a7f69af4cc7e70e68fa55f277e3f8efaaa9172fd8d3a9c67627c1f1c4187 = $this->env->getExtension("native_profiler");
        $__internal_1bc1a7f69af4cc7e70e68fa55f277e3f8efaaa9172fd8d3a9c67627c1f1c4187->enter($__internal_1bc1a7f69af4cc7e70e68fa55f277e3f8efaaa9172fd8d3a9c67627c1f1c4187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bc1a7f69af4cc7e70e68fa55f277e3f8efaaa9172fd8d3a9c67627c1f1c4187->leave($__internal_1bc1a7f69af4cc7e70e68fa55f277e3f8efaaa9172fd8d3a9c67627c1f1c4187_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50a0ed7a376466e619dfea8c224f195ff9053c213005422211953b2d9e4cb669 = $this->env->getExtension("native_profiler");
        $__internal_50a0ed7a376466e619dfea8c224f195ff9053c213005422211953b2d9e4cb669->enter($__internal_50a0ed7a376466e619dfea8c224f195ff9053c213005422211953b2d9e4cb669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_50a0ed7a376466e619dfea8c224f195ff9053c213005422211953b2d9e4cb669->leave($__internal_50a0ed7a376466e619dfea8c224f195ff9053c213005422211953b2d9e4cb669_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_23098f75b68848592cb5a7bff797c9707397b639b708642fbcb086c888933432 = $this->env->getExtension("native_profiler");
        $__internal_23098f75b68848592cb5a7bff797c9707397b639b708642fbcb086c888933432->enter($__internal_23098f75b68848592cb5a7bff797c9707397b639b708642fbcb086c888933432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_23098f75b68848592cb5a7bff797c9707397b639b708642fbcb086c888933432->leave($__internal_23098f75b68848592cb5a7bff797c9707397b639b708642fbcb086c888933432_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4191cdcafeb91984219f135895725321aa77c3a152954f388b46c03261c1147 = $this->env->getExtension("native_profiler");
        $__internal_c4191cdcafeb91984219f135895725321aa77c3a152954f388b46c03261c1147->enter($__internal_c4191cdcafeb91984219f135895725321aa77c3a152954f388b46c03261c1147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c4191cdcafeb91984219f135895725321aa77c3a152954f388b46c03261c1147->leave($__internal_c4191cdcafeb91984219f135895725321aa77c3a152954f388b46c03261c1147_prof);

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
