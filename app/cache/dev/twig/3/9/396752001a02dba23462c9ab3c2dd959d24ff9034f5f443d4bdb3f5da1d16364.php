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
        $__internal_f52a93f529a84dbe17ba916d277c362bc7f09fd9b68bdc19a993177d4843402e = $this->env->getExtension("native_profiler");
        $__internal_f52a93f529a84dbe17ba916d277c362bc7f09fd9b68bdc19a993177d4843402e->enter($__internal_f52a93f529a84dbe17ba916d277c362bc7f09fd9b68bdc19a993177d4843402e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f52a93f529a84dbe17ba916d277c362bc7f09fd9b68bdc19a993177d4843402e->leave($__internal_f52a93f529a84dbe17ba916d277c362bc7f09fd9b68bdc19a993177d4843402e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7858c518f059ef7bc5fc1ff904ce658c3ce423573db9a67114d5606b2fcbfc25 = $this->env->getExtension("native_profiler");
        $__internal_7858c518f059ef7bc5fc1ff904ce658c3ce423573db9a67114d5606b2fcbfc25->enter($__internal_7858c518f059ef7bc5fc1ff904ce658c3ce423573db9a67114d5606b2fcbfc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7858c518f059ef7bc5fc1ff904ce658c3ce423573db9a67114d5606b2fcbfc25->leave($__internal_7858c518f059ef7bc5fc1ff904ce658c3ce423573db9a67114d5606b2fcbfc25_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4f0e12217f10694d5c2da10657c1451adbdcd85d5c1764224a1d2afc55ecf62 = $this->env->getExtension("native_profiler");
        $__internal_b4f0e12217f10694d5c2da10657c1451adbdcd85d5c1764224a1d2afc55ecf62->enter($__internal_b4f0e12217f10694d5c2da10657c1451adbdcd85d5c1764224a1d2afc55ecf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b4f0e12217f10694d5c2da10657c1451adbdcd85d5c1764224a1d2afc55ecf62->leave($__internal_b4f0e12217f10694d5c2da10657c1451adbdcd85d5c1764224a1d2afc55ecf62_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e9ed72df2c830ad1089cc28f13004874faa5d22a6e1c29020cdb35a619feb49 = $this->env->getExtension("native_profiler");
        $__internal_3e9ed72df2c830ad1089cc28f13004874faa5d22a6e1c29020cdb35a619feb49->enter($__internal_3e9ed72df2c830ad1089cc28f13004874faa5d22a6e1c29020cdb35a619feb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3e9ed72df2c830ad1089cc28f13004874faa5d22a6e1c29020cdb35a619feb49->leave($__internal_3e9ed72df2c830ad1089cc28f13004874faa5d22a6e1c29020cdb35a619feb49_prof);

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
