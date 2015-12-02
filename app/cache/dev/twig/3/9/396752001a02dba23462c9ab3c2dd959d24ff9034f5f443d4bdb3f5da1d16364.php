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
        $__internal_81067b3f25b910c522f14c2cae6594bbb6f8bacc1807b830423987c3bbf0a96d = $this->env->getExtension("native_profiler");
        $__internal_81067b3f25b910c522f14c2cae6594bbb6f8bacc1807b830423987c3bbf0a96d->enter($__internal_81067b3f25b910c522f14c2cae6594bbb6f8bacc1807b830423987c3bbf0a96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81067b3f25b910c522f14c2cae6594bbb6f8bacc1807b830423987c3bbf0a96d->leave($__internal_81067b3f25b910c522f14c2cae6594bbb6f8bacc1807b830423987c3bbf0a96d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9bb6d14ea5e56a8da48fd86aeb27d61659c3129d5522d204b6172d92abd1d1b = $this->env->getExtension("native_profiler");
        $__internal_d9bb6d14ea5e56a8da48fd86aeb27d61659c3129d5522d204b6172d92abd1d1b->enter($__internal_d9bb6d14ea5e56a8da48fd86aeb27d61659c3129d5522d204b6172d92abd1d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d9bb6d14ea5e56a8da48fd86aeb27d61659c3129d5522d204b6172d92abd1d1b->leave($__internal_d9bb6d14ea5e56a8da48fd86aeb27d61659c3129d5522d204b6172d92abd1d1b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7919695523a36aaf77cc00f7493b35ea74527107141f7fae20f53ad45f1a1da = $this->env->getExtension("native_profiler");
        $__internal_e7919695523a36aaf77cc00f7493b35ea74527107141f7fae20f53ad45f1a1da->enter($__internal_e7919695523a36aaf77cc00f7493b35ea74527107141f7fae20f53ad45f1a1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e7919695523a36aaf77cc00f7493b35ea74527107141f7fae20f53ad45f1a1da->leave($__internal_e7919695523a36aaf77cc00f7493b35ea74527107141f7fae20f53ad45f1a1da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d5ce42e93222f43c48315096f7cabbb2aa2dd44f81f1294bdd2a64d311a0361 = $this->env->getExtension("native_profiler");
        $__internal_3d5ce42e93222f43c48315096f7cabbb2aa2dd44f81f1294bdd2a64d311a0361->enter($__internal_3d5ce42e93222f43c48315096f7cabbb2aa2dd44f81f1294bdd2a64d311a0361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3d5ce42e93222f43c48315096f7cabbb2aa2dd44f81f1294bdd2a64d311a0361->leave($__internal_3d5ce42e93222f43c48315096f7cabbb2aa2dd44f81f1294bdd2a64d311a0361_prof);

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
