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
        $__internal_0220ab8785c81eb21967c9a5b9893c66c4ce6724bd074d6f67afaf853072964a = $this->env->getExtension("native_profiler");
        $__internal_0220ab8785c81eb21967c9a5b9893c66c4ce6724bd074d6f67afaf853072964a->enter($__internal_0220ab8785c81eb21967c9a5b9893c66c4ce6724bd074d6f67afaf853072964a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0220ab8785c81eb21967c9a5b9893c66c4ce6724bd074d6f67afaf853072964a->leave($__internal_0220ab8785c81eb21967c9a5b9893c66c4ce6724bd074d6f67afaf853072964a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_99ea0581319404b71d9cd7a9bc4cfdd850e83f603154735bc1177a0f0b3645a5 = $this->env->getExtension("native_profiler");
        $__internal_99ea0581319404b71d9cd7a9bc4cfdd850e83f603154735bc1177a0f0b3645a5->enter($__internal_99ea0581319404b71d9cd7a9bc4cfdd850e83f603154735bc1177a0f0b3645a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_99ea0581319404b71d9cd7a9bc4cfdd850e83f603154735bc1177a0f0b3645a5->leave($__internal_99ea0581319404b71d9cd7a9bc4cfdd850e83f603154735bc1177a0f0b3645a5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87421525215f4979f7fb503df35a76091d5c6f264cd30cc1adafd5da3c653b4c = $this->env->getExtension("native_profiler");
        $__internal_87421525215f4979f7fb503df35a76091d5c6f264cd30cc1adafd5da3c653b4c->enter($__internal_87421525215f4979f7fb503df35a76091d5c6f264cd30cc1adafd5da3c653b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87421525215f4979f7fb503df35a76091d5c6f264cd30cc1adafd5da3c653b4c->leave($__internal_87421525215f4979f7fb503df35a76091d5c6f264cd30cc1adafd5da3c653b4c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_53791683662db0090e1ad84784b5aa0d56f9e75ba26884d4bb1e7362273ecc95 = $this->env->getExtension("native_profiler");
        $__internal_53791683662db0090e1ad84784b5aa0d56f9e75ba26884d4bb1e7362273ecc95->enter($__internal_53791683662db0090e1ad84784b5aa0d56f9e75ba26884d4bb1e7362273ecc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_53791683662db0090e1ad84784b5aa0d56f9e75ba26884d4bb1e7362273ecc95->leave($__internal_53791683662db0090e1ad84784b5aa0d56f9e75ba26884d4bb1e7362273ecc95_prof);

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
