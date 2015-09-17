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
        $__internal_658ad16f606b003567e0a1fc3d39b8d0b6c0919ce3936038e2a29ba15a5430c9 = $this->env->getExtension("native_profiler");
        $__internal_658ad16f606b003567e0a1fc3d39b8d0b6c0919ce3936038e2a29ba15a5430c9->enter($__internal_658ad16f606b003567e0a1fc3d39b8d0b6c0919ce3936038e2a29ba15a5430c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_658ad16f606b003567e0a1fc3d39b8d0b6c0919ce3936038e2a29ba15a5430c9->leave($__internal_658ad16f606b003567e0a1fc3d39b8d0b6c0919ce3936038e2a29ba15a5430c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e05f4327d27a309265093ba93799fca173668a661f6e13808d2c1e441970928 = $this->env->getExtension("native_profiler");
        $__internal_8e05f4327d27a309265093ba93799fca173668a661f6e13808d2c1e441970928->enter($__internal_8e05f4327d27a309265093ba93799fca173668a661f6e13808d2c1e441970928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8e05f4327d27a309265093ba93799fca173668a661f6e13808d2c1e441970928->leave($__internal_8e05f4327d27a309265093ba93799fca173668a661f6e13808d2c1e441970928_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d028d5bac0b73de255f13a78298fe4a11de690f3392d6ea1a47e655c6e829661 = $this->env->getExtension("native_profiler");
        $__internal_d028d5bac0b73de255f13a78298fe4a11de690f3392d6ea1a47e655c6e829661->enter($__internal_d028d5bac0b73de255f13a78298fe4a11de690f3392d6ea1a47e655c6e829661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d028d5bac0b73de255f13a78298fe4a11de690f3392d6ea1a47e655c6e829661->leave($__internal_d028d5bac0b73de255f13a78298fe4a11de690f3392d6ea1a47e655c6e829661_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_36da0d078708817cb6ce65cc67fa3fcb6d4863a090ed133a2364908f669dddc7 = $this->env->getExtension("native_profiler");
        $__internal_36da0d078708817cb6ce65cc67fa3fcb6d4863a090ed133a2364908f669dddc7->enter($__internal_36da0d078708817cb6ce65cc67fa3fcb6d4863a090ed133a2364908f669dddc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_36da0d078708817cb6ce65cc67fa3fcb6d4863a090ed133a2364908f669dddc7->leave($__internal_36da0d078708817cb6ce65cc67fa3fcb6d4863a090ed133a2364908f669dddc7_prof);

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
