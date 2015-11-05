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
        $__internal_b96e81206e1612d6ef9065c83a13afbff3888ae13056037f79ac2872b01b05da = $this->env->getExtension("native_profiler");
        $__internal_b96e81206e1612d6ef9065c83a13afbff3888ae13056037f79ac2872b01b05da->enter($__internal_b96e81206e1612d6ef9065c83a13afbff3888ae13056037f79ac2872b01b05da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b96e81206e1612d6ef9065c83a13afbff3888ae13056037f79ac2872b01b05da->leave($__internal_b96e81206e1612d6ef9065c83a13afbff3888ae13056037f79ac2872b01b05da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_592f33ddf3be8306581960facae42f6668e0992db37dbbc5ed8ba8a0374e7024 = $this->env->getExtension("native_profiler");
        $__internal_592f33ddf3be8306581960facae42f6668e0992db37dbbc5ed8ba8a0374e7024->enter($__internal_592f33ddf3be8306581960facae42f6668e0992db37dbbc5ed8ba8a0374e7024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_592f33ddf3be8306581960facae42f6668e0992db37dbbc5ed8ba8a0374e7024->leave($__internal_592f33ddf3be8306581960facae42f6668e0992db37dbbc5ed8ba8a0374e7024_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cdf84e413e4819e3dfe8814f72e32cce4ca9e1dc00510e7548218b81443df9c = $this->env->getExtension("native_profiler");
        $__internal_7cdf84e413e4819e3dfe8814f72e32cce4ca9e1dc00510e7548218b81443df9c->enter($__internal_7cdf84e413e4819e3dfe8814f72e32cce4ca9e1dc00510e7548218b81443df9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7cdf84e413e4819e3dfe8814f72e32cce4ca9e1dc00510e7548218b81443df9c->leave($__internal_7cdf84e413e4819e3dfe8814f72e32cce4ca9e1dc00510e7548218b81443df9c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_98ced7b54035b864bba372e3bdeb9a107cd0eab12b09b4438be8b67032e6eee4 = $this->env->getExtension("native_profiler");
        $__internal_98ced7b54035b864bba372e3bdeb9a107cd0eab12b09b4438be8b67032e6eee4->enter($__internal_98ced7b54035b864bba372e3bdeb9a107cd0eab12b09b4438be8b67032e6eee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_98ced7b54035b864bba372e3bdeb9a107cd0eab12b09b4438be8b67032e6eee4->leave($__internal_98ced7b54035b864bba372e3bdeb9a107cd0eab12b09b4438be8b67032e6eee4_prof);

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
