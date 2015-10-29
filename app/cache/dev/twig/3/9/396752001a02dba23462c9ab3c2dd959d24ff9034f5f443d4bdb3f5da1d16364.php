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
        $__internal_661217d28b8a0eafbab5ea41f4dd6d86be58dbc26549e82d0758c4ad6ca1e64a = $this->env->getExtension("native_profiler");
        $__internal_661217d28b8a0eafbab5ea41f4dd6d86be58dbc26549e82d0758c4ad6ca1e64a->enter($__internal_661217d28b8a0eafbab5ea41f4dd6d86be58dbc26549e82d0758c4ad6ca1e64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_661217d28b8a0eafbab5ea41f4dd6d86be58dbc26549e82d0758c4ad6ca1e64a->leave($__internal_661217d28b8a0eafbab5ea41f4dd6d86be58dbc26549e82d0758c4ad6ca1e64a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb59886d503dc84e255df1f5edf2d36879d92e532fa6e97808675cdf9c6902c2 = $this->env->getExtension("native_profiler");
        $__internal_fb59886d503dc84e255df1f5edf2d36879d92e532fa6e97808675cdf9c6902c2->enter($__internal_fb59886d503dc84e255df1f5edf2d36879d92e532fa6e97808675cdf9c6902c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fb59886d503dc84e255df1f5edf2d36879d92e532fa6e97808675cdf9c6902c2->leave($__internal_fb59886d503dc84e255df1f5edf2d36879d92e532fa6e97808675cdf9c6902c2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c117023a824a689fe8c34c073262bc484828d55752d1590496353c77a63ac673 = $this->env->getExtension("native_profiler");
        $__internal_c117023a824a689fe8c34c073262bc484828d55752d1590496353c77a63ac673->enter($__internal_c117023a824a689fe8c34c073262bc484828d55752d1590496353c77a63ac673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c117023a824a689fe8c34c073262bc484828d55752d1590496353c77a63ac673->leave($__internal_c117023a824a689fe8c34c073262bc484828d55752d1590496353c77a63ac673_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_df6bf8dbf3c0b92ff3f2568c54b914cc83c53b1a3113b34f7e5a9e0bc8d567d9 = $this->env->getExtension("native_profiler");
        $__internal_df6bf8dbf3c0b92ff3f2568c54b914cc83c53b1a3113b34f7e5a9e0bc8d567d9->enter($__internal_df6bf8dbf3c0b92ff3f2568c54b914cc83c53b1a3113b34f7e5a9e0bc8d567d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_df6bf8dbf3c0b92ff3f2568c54b914cc83c53b1a3113b34f7e5a9e0bc8d567d9->leave($__internal_df6bf8dbf3c0b92ff3f2568c54b914cc83c53b1a3113b34f7e5a9e0bc8d567d9_prof);

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
