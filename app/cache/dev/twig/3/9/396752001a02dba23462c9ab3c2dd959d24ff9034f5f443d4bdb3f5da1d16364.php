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
        $__internal_21d70d00cbd4da83ff4e6f3a4ea0a5884222c599f2c34e79190104539d84adf8 = $this->env->getExtension("native_profiler");
        $__internal_21d70d00cbd4da83ff4e6f3a4ea0a5884222c599f2c34e79190104539d84adf8->enter($__internal_21d70d00cbd4da83ff4e6f3a4ea0a5884222c599f2c34e79190104539d84adf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d70d00cbd4da83ff4e6f3a4ea0a5884222c599f2c34e79190104539d84adf8->leave($__internal_21d70d00cbd4da83ff4e6f3a4ea0a5884222c599f2c34e79190104539d84adf8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3798ac3408e791bff7b338d0bb6d9a31906c44d2299205c8df48c8bcb425e996 = $this->env->getExtension("native_profiler");
        $__internal_3798ac3408e791bff7b338d0bb6d9a31906c44d2299205c8df48c8bcb425e996->enter($__internal_3798ac3408e791bff7b338d0bb6d9a31906c44d2299205c8df48c8bcb425e996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3798ac3408e791bff7b338d0bb6d9a31906c44d2299205c8df48c8bcb425e996->leave($__internal_3798ac3408e791bff7b338d0bb6d9a31906c44d2299205c8df48c8bcb425e996_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3aa2ef2f35c4b1e2d52f6940caddd7af73acf0055bd693bb631ee9ea26a1dc4 = $this->env->getExtension("native_profiler");
        $__internal_e3aa2ef2f35c4b1e2d52f6940caddd7af73acf0055bd693bb631ee9ea26a1dc4->enter($__internal_e3aa2ef2f35c4b1e2d52f6940caddd7af73acf0055bd693bb631ee9ea26a1dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e3aa2ef2f35c4b1e2d52f6940caddd7af73acf0055bd693bb631ee9ea26a1dc4->leave($__internal_e3aa2ef2f35c4b1e2d52f6940caddd7af73acf0055bd693bb631ee9ea26a1dc4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a2be8ba9fb59f081b4a81e8a473fc9436f21f74993c348d1da7ef7761c683b3 = $this->env->getExtension("native_profiler");
        $__internal_9a2be8ba9fb59f081b4a81e8a473fc9436f21f74993c348d1da7ef7761c683b3->enter($__internal_9a2be8ba9fb59f081b4a81e8a473fc9436f21f74993c348d1da7ef7761c683b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9a2be8ba9fb59f081b4a81e8a473fc9436f21f74993c348d1da7ef7761c683b3->leave($__internal_9a2be8ba9fb59f081b4a81e8a473fc9436f21f74993c348d1da7ef7761c683b3_prof);

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
