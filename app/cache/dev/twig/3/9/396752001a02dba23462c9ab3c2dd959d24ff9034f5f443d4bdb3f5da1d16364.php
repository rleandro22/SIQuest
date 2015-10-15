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
        $__internal_f75899e5e0d377a5e8ffcad3a920e229166fb1f01a2ce73858d295ec62b71efd = $this->env->getExtension("native_profiler");
        $__internal_f75899e5e0d377a5e8ffcad3a920e229166fb1f01a2ce73858d295ec62b71efd->enter($__internal_f75899e5e0d377a5e8ffcad3a920e229166fb1f01a2ce73858d295ec62b71efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f75899e5e0d377a5e8ffcad3a920e229166fb1f01a2ce73858d295ec62b71efd->leave($__internal_f75899e5e0d377a5e8ffcad3a920e229166fb1f01a2ce73858d295ec62b71efd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34eaffb5a5aa9ee5012c21739fbb96422ffff9b0b3e8472f1a9564896d94d933 = $this->env->getExtension("native_profiler");
        $__internal_34eaffb5a5aa9ee5012c21739fbb96422ffff9b0b3e8472f1a9564896d94d933->enter($__internal_34eaffb5a5aa9ee5012c21739fbb96422ffff9b0b3e8472f1a9564896d94d933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_34eaffb5a5aa9ee5012c21739fbb96422ffff9b0b3e8472f1a9564896d94d933->leave($__internal_34eaffb5a5aa9ee5012c21739fbb96422ffff9b0b3e8472f1a9564896d94d933_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_162003e86d7c4dd7eea48cc26d313f6d7fb9305d31486f76f91fdfc0f0a83dc4 = $this->env->getExtension("native_profiler");
        $__internal_162003e86d7c4dd7eea48cc26d313f6d7fb9305d31486f76f91fdfc0f0a83dc4->enter($__internal_162003e86d7c4dd7eea48cc26d313f6d7fb9305d31486f76f91fdfc0f0a83dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_162003e86d7c4dd7eea48cc26d313f6d7fb9305d31486f76f91fdfc0f0a83dc4->leave($__internal_162003e86d7c4dd7eea48cc26d313f6d7fb9305d31486f76f91fdfc0f0a83dc4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d5fe6eadad89d822b030598ac7985dc4216abaf0da4b2dba28c811c9154f3c6 = $this->env->getExtension("native_profiler");
        $__internal_2d5fe6eadad89d822b030598ac7985dc4216abaf0da4b2dba28c811c9154f3c6->enter($__internal_2d5fe6eadad89d822b030598ac7985dc4216abaf0da4b2dba28c811c9154f3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2d5fe6eadad89d822b030598ac7985dc4216abaf0da4b2dba28c811c9154f3c6->leave($__internal_2d5fe6eadad89d822b030598ac7985dc4216abaf0da4b2dba28c811c9154f3c6_prof);

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
