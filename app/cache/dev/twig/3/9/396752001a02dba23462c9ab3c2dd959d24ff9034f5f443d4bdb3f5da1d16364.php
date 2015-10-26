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
        $__internal_efdb99d1301be8cbda1854dce00a23fab447fb9326b10ff0a8f7a8225bf82675 = $this->env->getExtension("native_profiler");
        $__internal_efdb99d1301be8cbda1854dce00a23fab447fb9326b10ff0a8f7a8225bf82675->enter($__internal_efdb99d1301be8cbda1854dce00a23fab447fb9326b10ff0a8f7a8225bf82675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efdb99d1301be8cbda1854dce00a23fab447fb9326b10ff0a8f7a8225bf82675->leave($__internal_efdb99d1301be8cbda1854dce00a23fab447fb9326b10ff0a8f7a8225bf82675_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36afee5274d9fe2272d290d9305224080f60cba19b2783e13ede8b5c831a4f09 = $this->env->getExtension("native_profiler");
        $__internal_36afee5274d9fe2272d290d9305224080f60cba19b2783e13ede8b5c831a4f09->enter($__internal_36afee5274d9fe2272d290d9305224080f60cba19b2783e13ede8b5c831a4f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_36afee5274d9fe2272d290d9305224080f60cba19b2783e13ede8b5c831a4f09->leave($__internal_36afee5274d9fe2272d290d9305224080f60cba19b2783e13ede8b5c831a4f09_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0361415a39c6dc5ba07fc07afb246bcb0a055849a5e234cf68b0ea53ccd8a60 = $this->env->getExtension("native_profiler");
        $__internal_d0361415a39c6dc5ba07fc07afb246bcb0a055849a5e234cf68b0ea53ccd8a60->enter($__internal_d0361415a39c6dc5ba07fc07afb246bcb0a055849a5e234cf68b0ea53ccd8a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d0361415a39c6dc5ba07fc07afb246bcb0a055849a5e234cf68b0ea53ccd8a60->leave($__internal_d0361415a39c6dc5ba07fc07afb246bcb0a055849a5e234cf68b0ea53ccd8a60_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f1da78e4c886a55d2db05d6132ac68c78287bd552498f1be39cdf06a2ca0a68 = $this->env->getExtension("native_profiler");
        $__internal_8f1da78e4c886a55d2db05d6132ac68c78287bd552498f1be39cdf06a2ca0a68->enter($__internal_8f1da78e4c886a55d2db05d6132ac68c78287bd552498f1be39cdf06a2ca0a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8f1da78e4c886a55d2db05d6132ac68c78287bd552498f1be39cdf06a2ca0a68->leave($__internal_8f1da78e4c886a55d2db05d6132ac68c78287bd552498f1be39cdf06a2ca0a68_prof);

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
