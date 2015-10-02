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
        $__internal_dc84530cf6e2bb747569e191b8663dce4cbfb261f6cf5aef29ba981d9d0259bd = $this->env->getExtension("native_profiler");
        $__internal_dc84530cf6e2bb747569e191b8663dce4cbfb261f6cf5aef29ba981d9d0259bd->enter($__internal_dc84530cf6e2bb747569e191b8663dce4cbfb261f6cf5aef29ba981d9d0259bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc84530cf6e2bb747569e191b8663dce4cbfb261f6cf5aef29ba981d9d0259bd->leave($__internal_dc84530cf6e2bb747569e191b8663dce4cbfb261f6cf5aef29ba981d9d0259bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eff719b29e009549c37be5183963f095c45113b2c7339313de61f4df664f821b = $this->env->getExtension("native_profiler");
        $__internal_eff719b29e009549c37be5183963f095c45113b2c7339313de61f4df664f821b->enter($__internal_eff719b29e009549c37be5183963f095c45113b2c7339313de61f4df664f821b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eff719b29e009549c37be5183963f095c45113b2c7339313de61f4df664f821b->leave($__internal_eff719b29e009549c37be5183963f095c45113b2c7339313de61f4df664f821b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_197f215eae0a370f000c1b5870d7c13f68f1a7ac3ba4ffed82b95db5971d1999 = $this->env->getExtension("native_profiler");
        $__internal_197f215eae0a370f000c1b5870d7c13f68f1a7ac3ba4ffed82b95db5971d1999->enter($__internal_197f215eae0a370f000c1b5870d7c13f68f1a7ac3ba4ffed82b95db5971d1999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_197f215eae0a370f000c1b5870d7c13f68f1a7ac3ba4ffed82b95db5971d1999->leave($__internal_197f215eae0a370f000c1b5870d7c13f68f1a7ac3ba4ffed82b95db5971d1999_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_105524cb03d0b14ce7e1ef3a0984f6bff49c7c713787c67c89cff438004605ca = $this->env->getExtension("native_profiler");
        $__internal_105524cb03d0b14ce7e1ef3a0984f6bff49c7c713787c67c89cff438004605ca->enter($__internal_105524cb03d0b14ce7e1ef3a0984f6bff49c7c713787c67c89cff438004605ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_105524cb03d0b14ce7e1ef3a0984f6bff49c7c713787c67c89cff438004605ca->leave($__internal_105524cb03d0b14ce7e1ef3a0984f6bff49c7c713787c67c89cff438004605ca_prof);

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
