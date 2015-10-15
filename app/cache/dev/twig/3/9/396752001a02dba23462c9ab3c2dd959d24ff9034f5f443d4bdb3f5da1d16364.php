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
        $__internal_2e495ecbc0e9341cc8ab9ff9c8f0af7a62f1a81ff20cea817c4c9774d76d7d4d = $this->env->getExtension("native_profiler");
        $__internal_2e495ecbc0e9341cc8ab9ff9c8f0af7a62f1a81ff20cea817c4c9774d76d7d4d->enter($__internal_2e495ecbc0e9341cc8ab9ff9c8f0af7a62f1a81ff20cea817c4c9774d76d7d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e495ecbc0e9341cc8ab9ff9c8f0af7a62f1a81ff20cea817c4c9774d76d7d4d->leave($__internal_2e495ecbc0e9341cc8ab9ff9c8f0af7a62f1a81ff20cea817c4c9774d76d7d4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f51ff5f0055cebad07fcb9ca7778f49faf7dd0365cc75bbe34ac24b54d5de88e = $this->env->getExtension("native_profiler");
        $__internal_f51ff5f0055cebad07fcb9ca7778f49faf7dd0365cc75bbe34ac24b54d5de88e->enter($__internal_f51ff5f0055cebad07fcb9ca7778f49faf7dd0365cc75bbe34ac24b54d5de88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f51ff5f0055cebad07fcb9ca7778f49faf7dd0365cc75bbe34ac24b54d5de88e->leave($__internal_f51ff5f0055cebad07fcb9ca7778f49faf7dd0365cc75bbe34ac24b54d5de88e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b6e5cc7b96cf767910cb522ca5071b3fca503ad941ef0fab55cf3856f1862e5 = $this->env->getExtension("native_profiler");
        $__internal_6b6e5cc7b96cf767910cb522ca5071b3fca503ad941ef0fab55cf3856f1862e5->enter($__internal_6b6e5cc7b96cf767910cb522ca5071b3fca503ad941ef0fab55cf3856f1862e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6b6e5cc7b96cf767910cb522ca5071b3fca503ad941ef0fab55cf3856f1862e5->leave($__internal_6b6e5cc7b96cf767910cb522ca5071b3fca503ad941ef0fab55cf3856f1862e5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed1db750dc24389d1048a3b304256cc42aced2ad2929863bb860cc3bc1a67770 = $this->env->getExtension("native_profiler");
        $__internal_ed1db750dc24389d1048a3b304256cc42aced2ad2929863bb860cc3bc1a67770->enter($__internal_ed1db750dc24389d1048a3b304256cc42aced2ad2929863bb860cc3bc1a67770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ed1db750dc24389d1048a3b304256cc42aced2ad2929863bb860cc3bc1a67770->leave($__internal_ed1db750dc24389d1048a3b304256cc42aced2ad2929863bb860cc3bc1a67770_prof);

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
