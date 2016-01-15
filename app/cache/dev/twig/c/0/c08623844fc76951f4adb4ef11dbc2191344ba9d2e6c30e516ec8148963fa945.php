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
        $__internal_25ec0cba32269400d17855f03ab41fe1fd14b33c2f4f5b35eeb5f085d0b417cf = $this->env->getExtension("native_profiler");
        $__internal_25ec0cba32269400d17855f03ab41fe1fd14b33c2f4f5b35eeb5f085d0b417cf->enter($__internal_25ec0cba32269400d17855f03ab41fe1fd14b33c2f4f5b35eeb5f085d0b417cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25ec0cba32269400d17855f03ab41fe1fd14b33c2f4f5b35eeb5f085d0b417cf->leave($__internal_25ec0cba32269400d17855f03ab41fe1fd14b33c2f4f5b35eeb5f085d0b417cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_729fb70a03e0d13845477c0ae8260ca08a1518fa19dec05f96fd7d00cc9bef59 = $this->env->getExtension("native_profiler");
        $__internal_729fb70a03e0d13845477c0ae8260ca08a1518fa19dec05f96fd7d00cc9bef59->enter($__internal_729fb70a03e0d13845477c0ae8260ca08a1518fa19dec05f96fd7d00cc9bef59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_729fb70a03e0d13845477c0ae8260ca08a1518fa19dec05f96fd7d00cc9bef59->leave($__internal_729fb70a03e0d13845477c0ae8260ca08a1518fa19dec05f96fd7d00cc9bef59_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccba7aa7426955ba539b1b6b40dfd2e2deb89f20edc61e42e56882ec4ce38712 = $this->env->getExtension("native_profiler");
        $__internal_ccba7aa7426955ba539b1b6b40dfd2e2deb89f20edc61e42e56882ec4ce38712->enter($__internal_ccba7aa7426955ba539b1b6b40dfd2e2deb89f20edc61e42e56882ec4ce38712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ccba7aa7426955ba539b1b6b40dfd2e2deb89f20edc61e42e56882ec4ce38712->leave($__internal_ccba7aa7426955ba539b1b6b40dfd2e2deb89f20edc61e42e56882ec4ce38712_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f4d57ca74fac509166aabcb96abf3fa608e3283b353a6bcdf6116213740f9bb = $this->env->getExtension("native_profiler");
        $__internal_9f4d57ca74fac509166aabcb96abf3fa608e3283b353a6bcdf6116213740f9bb->enter($__internal_9f4d57ca74fac509166aabcb96abf3fa608e3283b353a6bcdf6116213740f9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9f4d57ca74fac509166aabcb96abf3fa608e3283b353a6bcdf6116213740f9bb->leave($__internal_9f4d57ca74fac509166aabcb96abf3fa608e3283b353a6bcdf6116213740f9bb_prof);

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
