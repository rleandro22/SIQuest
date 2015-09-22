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
        $__internal_1492cfeffe56079465b7e026d15de825be86e91c2a69a6cf50099c176f6ee714 = $this->env->getExtension("native_profiler");
        $__internal_1492cfeffe56079465b7e026d15de825be86e91c2a69a6cf50099c176f6ee714->enter($__internal_1492cfeffe56079465b7e026d15de825be86e91c2a69a6cf50099c176f6ee714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1492cfeffe56079465b7e026d15de825be86e91c2a69a6cf50099c176f6ee714->leave($__internal_1492cfeffe56079465b7e026d15de825be86e91c2a69a6cf50099c176f6ee714_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36a3b40e54bf1b81d7dbb02460af75b1854c465fc6fdac9b872873a821ac161b = $this->env->getExtension("native_profiler");
        $__internal_36a3b40e54bf1b81d7dbb02460af75b1854c465fc6fdac9b872873a821ac161b->enter($__internal_36a3b40e54bf1b81d7dbb02460af75b1854c465fc6fdac9b872873a821ac161b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_36a3b40e54bf1b81d7dbb02460af75b1854c465fc6fdac9b872873a821ac161b->leave($__internal_36a3b40e54bf1b81d7dbb02460af75b1854c465fc6fdac9b872873a821ac161b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_be33f1c3de2c8dba6271c454ec06a2723d10327519d7394243426328e55a7129 = $this->env->getExtension("native_profiler");
        $__internal_be33f1c3de2c8dba6271c454ec06a2723d10327519d7394243426328e55a7129->enter($__internal_be33f1c3de2c8dba6271c454ec06a2723d10327519d7394243426328e55a7129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_be33f1c3de2c8dba6271c454ec06a2723d10327519d7394243426328e55a7129->leave($__internal_be33f1c3de2c8dba6271c454ec06a2723d10327519d7394243426328e55a7129_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_91f45012d5568378e40ae309700facc45b59778c6212b0b6ad8c76e6f413af74 = $this->env->getExtension("native_profiler");
        $__internal_91f45012d5568378e40ae309700facc45b59778c6212b0b6ad8c76e6f413af74->enter($__internal_91f45012d5568378e40ae309700facc45b59778c6212b0b6ad8c76e6f413af74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_91f45012d5568378e40ae309700facc45b59778c6212b0b6ad8c76e6f413af74->leave($__internal_91f45012d5568378e40ae309700facc45b59778c6212b0b6ad8c76e6f413af74_prof);

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
