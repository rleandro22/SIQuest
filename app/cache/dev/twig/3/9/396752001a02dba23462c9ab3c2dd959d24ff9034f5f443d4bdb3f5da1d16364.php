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
        $__internal_3b1118cfa29c87104e4360ae306dd5901e4838cf5b7da4fa17030683014ba3ec = $this->env->getExtension("native_profiler");
        $__internal_3b1118cfa29c87104e4360ae306dd5901e4838cf5b7da4fa17030683014ba3ec->enter($__internal_3b1118cfa29c87104e4360ae306dd5901e4838cf5b7da4fa17030683014ba3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b1118cfa29c87104e4360ae306dd5901e4838cf5b7da4fa17030683014ba3ec->leave($__internal_3b1118cfa29c87104e4360ae306dd5901e4838cf5b7da4fa17030683014ba3ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1d673da99c1a14690d67c12a2af893adfe8430ab3146e1333a406f23427d5ac = $this->env->getExtension("native_profiler");
        $__internal_a1d673da99c1a14690d67c12a2af893adfe8430ab3146e1333a406f23427d5ac->enter($__internal_a1d673da99c1a14690d67c12a2af893adfe8430ab3146e1333a406f23427d5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a1d673da99c1a14690d67c12a2af893adfe8430ab3146e1333a406f23427d5ac->leave($__internal_a1d673da99c1a14690d67c12a2af893adfe8430ab3146e1333a406f23427d5ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11b60ad41d82e11e341c230b3ef8e55d27f971439602a14d6abc9a6bdad281d8 = $this->env->getExtension("native_profiler");
        $__internal_11b60ad41d82e11e341c230b3ef8e55d27f971439602a14d6abc9a6bdad281d8->enter($__internal_11b60ad41d82e11e341c230b3ef8e55d27f971439602a14d6abc9a6bdad281d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_11b60ad41d82e11e341c230b3ef8e55d27f971439602a14d6abc9a6bdad281d8->leave($__internal_11b60ad41d82e11e341c230b3ef8e55d27f971439602a14d6abc9a6bdad281d8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_993c6ede87138f3d3d13e34b3080f93f9355672b247b03f1a4045e5a75b45a22 = $this->env->getExtension("native_profiler");
        $__internal_993c6ede87138f3d3d13e34b3080f93f9355672b247b03f1a4045e5a75b45a22->enter($__internal_993c6ede87138f3d3d13e34b3080f93f9355672b247b03f1a4045e5a75b45a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_993c6ede87138f3d3d13e34b3080f93f9355672b247b03f1a4045e5a75b45a22->leave($__internal_993c6ede87138f3d3d13e34b3080f93f9355672b247b03f1a4045e5a75b45a22_prof);

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
