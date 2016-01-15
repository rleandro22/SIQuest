<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3d7669a6ab726f1ee918fc4507459a6485767c343151c9a084810b45ea78e085 extends Twig_Template
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
        $__internal_52d5c8f8b1afeccf527bb03e690bc6ed29c412fd2526b450e4cb7d4b5640ee58 = $this->env->getExtension("native_profiler");
        $__internal_52d5c8f8b1afeccf527bb03e690bc6ed29c412fd2526b450e4cb7d4b5640ee58->enter($__internal_52d5c8f8b1afeccf527bb03e690bc6ed29c412fd2526b450e4cb7d4b5640ee58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d5c8f8b1afeccf527bb03e690bc6ed29c412fd2526b450e4cb7d4b5640ee58->leave($__internal_52d5c8f8b1afeccf527bb03e690bc6ed29c412fd2526b450e4cb7d4b5640ee58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c30a0235b7d125079687971937bd7edcf30fe980751fc51fffd8a675865ab666 = $this->env->getExtension("native_profiler");
        $__internal_c30a0235b7d125079687971937bd7edcf30fe980751fc51fffd8a675865ab666->enter($__internal_c30a0235b7d125079687971937bd7edcf30fe980751fc51fffd8a675865ab666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c30a0235b7d125079687971937bd7edcf30fe980751fc51fffd8a675865ab666->leave($__internal_c30a0235b7d125079687971937bd7edcf30fe980751fc51fffd8a675865ab666_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_73b36d1877bb8c4697a9c9ae7d4b51bf1454cd21fa31247aad570770f05a55ae = $this->env->getExtension("native_profiler");
        $__internal_73b36d1877bb8c4697a9c9ae7d4b51bf1454cd21fa31247aad570770f05a55ae->enter($__internal_73b36d1877bb8c4697a9c9ae7d4b51bf1454cd21fa31247aad570770f05a55ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_73b36d1877bb8c4697a9c9ae7d4b51bf1454cd21fa31247aad570770f05a55ae->leave($__internal_73b36d1877bb8c4697a9c9ae7d4b51bf1454cd21fa31247aad570770f05a55ae_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ef7ad022d8b6cc93d511519788cdea4b9bceb45ccd4f85b01d3bb90574daa8b = $this->env->getExtension("native_profiler");
        $__internal_1ef7ad022d8b6cc93d511519788cdea4b9bceb45ccd4f85b01d3bb90574daa8b->enter($__internal_1ef7ad022d8b6cc93d511519788cdea4b9bceb45ccd4f85b01d3bb90574daa8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1ef7ad022d8b6cc93d511519788cdea4b9bceb45ccd4f85b01d3bb90574daa8b->leave($__internal_1ef7ad022d8b6cc93d511519788cdea4b9bceb45ccd4f85b01d3bb90574daa8b_prof);

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
