<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d232247132c6f86cb86bd6d2df8496b825c86fdf586f8b207b896f5004b7d018 extends Twig_Template
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
        $__internal_3ca051127d767ff941d6b636762c532d49daeb48605a1f1d66d71afb90b0f875 = $this->env->getExtension("native_profiler");
        $__internal_3ca051127d767ff941d6b636762c532d49daeb48605a1f1d66d71afb90b0f875->enter($__internal_3ca051127d767ff941d6b636762c532d49daeb48605a1f1d66d71afb90b0f875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ca051127d767ff941d6b636762c532d49daeb48605a1f1d66d71afb90b0f875->leave($__internal_3ca051127d767ff941d6b636762c532d49daeb48605a1f1d66d71afb90b0f875_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c7b066ab86a309c6bf56203db1b3ba3339a2ac290174572bc0c3b4784f9d96c = $this->env->getExtension("native_profiler");
        $__internal_1c7b066ab86a309c6bf56203db1b3ba3339a2ac290174572bc0c3b4784f9d96c->enter($__internal_1c7b066ab86a309c6bf56203db1b3ba3339a2ac290174572bc0c3b4784f9d96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1c7b066ab86a309c6bf56203db1b3ba3339a2ac290174572bc0c3b4784f9d96c->leave($__internal_1c7b066ab86a309c6bf56203db1b3ba3339a2ac290174572bc0c3b4784f9d96c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_df82446e16eae786c0a986db2a0898933ab96532ee05c0a162df25299ea49bd5 = $this->env->getExtension("native_profiler");
        $__internal_df82446e16eae786c0a986db2a0898933ab96532ee05c0a162df25299ea49bd5->enter($__internal_df82446e16eae786c0a986db2a0898933ab96532ee05c0a162df25299ea49bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_df82446e16eae786c0a986db2a0898933ab96532ee05c0a162df25299ea49bd5->leave($__internal_df82446e16eae786c0a986db2a0898933ab96532ee05c0a162df25299ea49bd5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_32ee555094215b2bc5c6bee023cb04a5219bcb258c3dfa73f579b5520e54bf78 = $this->env->getExtension("native_profiler");
        $__internal_32ee555094215b2bc5c6bee023cb04a5219bcb258c3dfa73f579b5520e54bf78->enter($__internal_32ee555094215b2bc5c6bee023cb04a5219bcb258c3dfa73f579b5520e54bf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_32ee555094215b2bc5c6bee023cb04a5219bcb258c3dfa73f579b5520e54bf78->leave($__internal_32ee555094215b2bc5c6bee023cb04a5219bcb258c3dfa73f579b5520e54bf78_prof);

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
