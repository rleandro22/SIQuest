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
        $__internal_9d1f9589633b66b0d9b770051e5351bdc635cd31c6cb3f927050b44f93596747 = $this->env->getExtension("native_profiler");
        $__internal_9d1f9589633b66b0d9b770051e5351bdc635cd31c6cb3f927050b44f93596747->enter($__internal_9d1f9589633b66b0d9b770051e5351bdc635cd31c6cb3f927050b44f93596747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d1f9589633b66b0d9b770051e5351bdc635cd31c6cb3f927050b44f93596747->leave($__internal_9d1f9589633b66b0d9b770051e5351bdc635cd31c6cb3f927050b44f93596747_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c324513be143e88ae1095bfda42366d5fd08004ad03864bd8cb6d30eba26acac = $this->env->getExtension("native_profiler");
        $__internal_c324513be143e88ae1095bfda42366d5fd08004ad03864bd8cb6d30eba26acac->enter($__internal_c324513be143e88ae1095bfda42366d5fd08004ad03864bd8cb6d30eba26acac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c324513be143e88ae1095bfda42366d5fd08004ad03864bd8cb6d30eba26acac->leave($__internal_c324513be143e88ae1095bfda42366d5fd08004ad03864bd8cb6d30eba26acac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3127b3de3d78d8aba08e8298d429f08f303c480fd5bb50ada21568c1571bae0e = $this->env->getExtension("native_profiler");
        $__internal_3127b3de3d78d8aba08e8298d429f08f303c480fd5bb50ada21568c1571bae0e->enter($__internal_3127b3de3d78d8aba08e8298d429f08f303c480fd5bb50ada21568c1571bae0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3127b3de3d78d8aba08e8298d429f08f303c480fd5bb50ada21568c1571bae0e->leave($__internal_3127b3de3d78d8aba08e8298d429f08f303c480fd5bb50ada21568c1571bae0e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_24f618088d02a6c1650fb70bbb31ac04a89fe59c011142312574a72f49de5cfb = $this->env->getExtension("native_profiler");
        $__internal_24f618088d02a6c1650fb70bbb31ac04a89fe59c011142312574a72f49de5cfb->enter($__internal_24f618088d02a6c1650fb70bbb31ac04a89fe59c011142312574a72f49de5cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_24f618088d02a6c1650fb70bbb31ac04a89fe59c011142312574a72f49de5cfb->leave($__internal_24f618088d02a6c1650fb70bbb31ac04a89fe59c011142312574a72f49de5cfb_prof);

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
