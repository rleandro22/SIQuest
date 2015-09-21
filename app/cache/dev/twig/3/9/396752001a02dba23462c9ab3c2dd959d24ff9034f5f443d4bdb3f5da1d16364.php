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
        $__internal_bf9736be38de6930277a75afba56f472767c5bb6531a76f4965455e11806e6eb = $this->env->getExtension("native_profiler");
        $__internal_bf9736be38de6930277a75afba56f472767c5bb6531a76f4965455e11806e6eb->enter($__internal_bf9736be38de6930277a75afba56f472767c5bb6531a76f4965455e11806e6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf9736be38de6930277a75afba56f472767c5bb6531a76f4965455e11806e6eb->leave($__internal_bf9736be38de6930277a75afba56f472767c5bb6531a76f4965455e11806e6eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06797986e26f9779430ee318204a5896f2e695899e1de6f11cd5d6892b25000b = $this->env->getExtension("native_profiler");
        $__internal_06797986e26f9779430ee318204a5896f2e695899e1de6f11cd5d6892b25000b->enter($__internal_06797986e26f9779430ee318204a5896f2e695899e1de6f11cd5d6892b25000b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_06797986e26f9779430ee318204a5896f2e695899e1de6f11cd5d6892b25000b->leave($__internal_06797986e26f9779430ee318204a5896f2e695899e1de6f11cd5d6892b25000b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4018931ee76d9a2c65c9a17747356bfb178075d1d6ba7c8e7cd052d805031083 = $this->env->getExtension("native_profiler");
        $__internal_4018931ee76d9a2c65c9a17747356bfb178075d1d6ba7c8e7cd052d805031083->enter($__internal_4018931ee76d9a2c65c9a17747356bfb178075d1d6ba7c8e7cd052d805031083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4018931ee76d9a2c65c9a17747356bfb178075d1d6ba7c8e7cd052d805031083->leave($__internal_4018931ee76d9a2c65c9a17747356bfb178075d1d6ba7c8e7cd052d805031083_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f910904ef82c51870ebd38586fa1adb97d7d0fcef167ff4317f5fc79480a73f = $this->env->getExtension("native_profiler");
        $__internal_4f910904ef82c51870ebd38586fa1adb97d7d0fcef167ff4317f5fc79480a73f->enter($__internal_4f910904ef82c51870ebd38586fa1adb97d7d0fcef167ff4317f5fc79480a73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4f910904ef82c51870ebd38586fa1adb97d7d0fcef167ff4317f5fc79480a73f->leave($__internal_4f910904ef82c51870ebd38586fa1adb97d7d0fcef167ff4317f5fc79480a73f_prof);

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
