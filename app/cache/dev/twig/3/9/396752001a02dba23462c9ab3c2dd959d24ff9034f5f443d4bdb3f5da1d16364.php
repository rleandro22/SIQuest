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
        $__internal_3afc721e7cdb20641cc7d93c6660e3e5997972f795d38d079e694b3535519f1f = $this->env->getExtension("native_profiler");
        $__internal_3afc721e7cdb20641cc7d93c6660e3e5997972f795d38d079e694b3535519f1f->enter($__internal_3afc721e7cdb20641cc7d93c6660e3e5997972f795d38d079e694b3535519f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3afc721e7cdb20641cc7d93c6660e3e5997972f795d38d079e694b3535519f1f->leave($__internal_3afc721e7cdb20641cc7d93c6660e3e5997972f795d38d079e694b3535519f1f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f5c2c99ab784e34779a7fd1ceef278da4302f15afc6b2a7d111c8ffce46a96b = $this->env->getExtension("native_profiler");
        $__internal_9f5c2c99ab784e34779a7fd1ceef278da4302f15afc6b2a7d111c8ffce46a96b->enter($__internal_9f5c2c99ab784e34779a7fd1ceef278da4302f15afc6b2a7d111c8ffce46a96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9f5c2c99ab784e34779a7fd1ceef278da4302f15afc6b2a7d111c8ffce46a96b->leave($__internal_9f5c2c99ab784e34779a7fd1ceef278da4302f15afc6b2a7d111c8ffce46a96b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf7cb3dee01a131bc78f8eb6ba9212b54e1ebb8693ca0c632b230463d24f1069 = $this->env->getExtension("native_profiler");
        $__internal_cf7cb3dee01a131bc78f8eb6ba9212b54e1ebb8693ca0c632b230463d24f1069->enter($__internal_cf7cb3dee01a131bc78f8eb6ba9212b54e1ebb8693ca0c632b230463d24f1069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf7cb3dee01a131bc78f8eb6ba9212b54e1ebb8693ca0c632b230463d24f1069->leave($__internal_cf7cb3dee01a131bc78f8eb6ba9212b54e1ebb8693ca0c632b230463d24f1069_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ace847e60c2c7c9a376a316bc62c8189a84d8382c6969873fbb49d7414649a19 = $this->env->getExtension("native_profiler");
        $__internal_ace847e60c2c7c9a376a316bc62c8189a84d8382c6969873fbb49d7414649a19->enter($__internal_ace847e60c2c7c9a376a316bc62c8189a84d8382c6969873fbb49d7414649a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ace847e60c2c7c9a376a316bc62c8189a84d8382c6969873fbb49d7414649a19->leave($__internal_ace847e60c2c7c9a376a316bc62c8189a84d8382c6969873fbb49d7414649a19_prof);

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
