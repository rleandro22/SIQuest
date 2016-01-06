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
        $__internal_a50ea00bd78d09d6b2d407c497cab0824fe10b77c6c8ec7667fd39a46c94667f = $this->env->getExtension("native_profiler");
        $__internal_a50ea00bd78d09d6b2d407c497cab0824fe10b77c6c8ec7667fd39a46c94667f->enter($__internal_a50ea00bd78d09d6b2d407c497cab0824fe10b77c6c8ec7667fd39a46c94667f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a50ea00bd78d09d6b2d407c497cab0824fe10b77c6c8ec7667fd39a46c94667f->leave($__internal_a50ea00bd78d09d6b2d407c497cab0824fe10b77c6c8ec7667fd39a46c94667f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05453cb1a8a2a643ed4b7d92cee582d3dd98c1d4469460f3cdf2e5eba8330d7e = $this->env->getExtension("native_profiler");
        $__internal_05453cb1a8a2a643ed4b7d92cee582d3dd98c1d4469460f3cdf2e5eba8330d7e->enter($__internal_05453cb1a8a2a643ed4b7d92cee582d3dd98c1d4469460f3cdf2e5eba8330d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_05453cb1a8a2a643ed4b7d92cee582d3dd98c1d4469460f3cdf2e5eba8330d7e->leave($__internal_05453cb1a8a2a643ed4b7d92cee582d3dd98c1d4469460f3cdf2e5eba8330d7e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbeb6d117cd8e191fad28824fc3312b89e74bbba27aba698b5ec25999558a02a = $this->env->getExtension("native_profiler");
        $__internal_fbeb6d117cd8e191fad28824fc3312b89e74bbba27aba698b5ec25999558a02a->enter($__internal_fbeb6d117cd8e191fad28824fc3312b89e74bbba27aba698b5ec25999558a02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fbeb6d117cd8e191fad28824fc3312b89e74bbba27aba698b5ec25999558a02a->leave($__internal_fbeb6d117cd8e191fad28824fc3312b89e74bbba27aba698b5ec25999558a02a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c911ae58f4820c8095c368feaef1f774da9a64d0239ac3971a8d8112b61fa78 = $this->env->getExtension("native_profiler");
        $__internal_6c911ae58f4820c8095c368feaef1f774da9a64d0239ac3971a8d8112b61fa78->enter($__internal_6c911ae58f4820c8095c368feaef1f774da9a64d0239ac3971a8d8112b61fa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6c911ae58f4820c8095c368feaef1f774da9a64d0239ac3971a8d8112b61fa78->leave($__internal_6c911ae58f4820c8095c368feaef1f774da9a64d0239ac3971a8d8112b61fa78_prof);

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
