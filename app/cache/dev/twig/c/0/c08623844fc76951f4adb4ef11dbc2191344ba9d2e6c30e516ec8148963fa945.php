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
        $__internal_27b8df44a2aa77ea586f17c86fa8ce7b811756a29e360f23e404d662de70a5c2 = $this->env->getExtension("native_profiler");
        $__internal_27b8df44a2aa77ea586f17c86fa8ce7b811756a29e360f23e404d662de70a5c2->enter($__internal_27b8df44a2aa77ea586f17c86fa8ce7b811756a29e360f23e404d662de70a5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27b8df44a2aa77ea586f17c86fa8ce7b811756a29e360f23e404d662de70a5c2->leave($__internal_27b8df44a2aa77ea586f17c86fa8ce7b811756a29e360f23e404d662de70a5c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b16e30f8d8b291c38969545e4bece6bf9e0f6a73084d590295975cfd57dbfcbb = $this->env->getExtension("native_profiler");
        $__internal_b16e30f8d8b291c38969545e4bece6bf9e0f6a73084d590295975cfd57dbfcbb->enter($__internal_b16e30f8d8b291c38969545e4bece6bf9e0f6a73084d590295975cfd57dbfcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b16e30f8d8b291c38969545e4bece6bf9e0f6a73084d590295975cfd57dbfcbb->leave($__internal_b16e30f8d8b291c38969545e4bece6bf9e0f6a73084d590295975cfd57dbfcbb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7a29017f1f30a19015487b07f50f73494b8905e8acef7d5e198631fa8af6b13 = $this->env->getExtension("native_profiler");
        $__internal_b7a29017f1f30a19015487b07f50f73494b8905e8acef7d5e198631fa8af6b13->enter($__internal_b7a29017f1f30a19015487b07f50f73494b8905e8acef7d5e198631fa8af6b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b7a29017f1f30a19015487b07f50f73494b8905e8acef7d5e198631fa8af6b13->leave($__internal_b7a29017f1f30a19015487b07f50f73494b8905e8acef7d5e198631fa8af6b13_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e71fea52f0a045ae49a3584813727702084cd4642abb7df998c43504de21b936 = $this->env->getExtension("native_profiler");
        $__internal_e71fea52f0a045ae49a3584813727702084cd4642abb7df998c43504de21b936->enter($__internal_e71fea52f0a045ae49a3584813727702084cd4642abb7df998c43504de21b936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e71fea52f0a045ae49a3584813727702084cd4642abb7df998c43504de21b936->leave($__internal_e71fea52f0a045ae49a3584813727702084cd4642abb7df998c43504de21b936_prof);

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
