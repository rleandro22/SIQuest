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
        $__internal_82a0403d0901275f567552fb4e5af1f6d33470d76004f7edaecbc7e5a77362ec = $this->env->getExtension("native_profiler");
        $__internal_82a0403d0901275f567552fb4e5af1f6d33470d76004f7edaecbc7e5a77362ec->enter($__internal_82a0403d0901275f567552fb4e5af1f6d33470d76004f7edaecbc7e5a77362ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82a0403d0901275f567552fb4e5af1f6d33470d76004f7edaecbc7e5a77362ec->leave($__internal_82a0403d0901275f567552fb4e5af1f6d33470d76004f7edaecbc7e5a77362ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d358193442c78d8e1b7ffa06d4bd8fe5d449febd1e7397868149dd155213014d = $this->env->getExtension("native_profiler");
        $__internal_d358193442c78d8e1b7ffa06d4bd8fe5d449febd1e7397868149dd155213014d->enter($__internal_d358193442c78d8e1b7ffa06d4bd8fe5d449febd1e7397868149dd155213014d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d358193442c78d8e1b7ffa06d4bd8fe5d449febd1e7397868149dd155213014d->leave($__internal_d358193442c78d8e1b7ffa06d4bd8fe5d449febd1e7397868149dd155213014d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_910d56ecc77261ec3118a7d4024760d116c58d98c82f78ed5c8be002dcfb7f3e = $this->env->getExtension("native_profiler");
        $__internal_910d56ecc77261ec3118a7d4024760d116c58d98c82f78ed5c8be002dcfb7f3e->enter($__internal_910d56ecc77261ec3118a7d4024760d116c58d98c82f78ed5c8be002dcfb7f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_910d56ecc77261ec3118a7d4024760d116c58d98c82f78ed5c8be002dcfb7f3e->leave($__internal_910d56ecc77261ec3118a7d4024760d116c58d98c82f78ed5c8be002dcfb7f3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8082b1d28bf70e46a18d7b40d308f20a172b74936e9214d28c96be53d1e3eb5 = $this->env->getExtension("native_profiler");
        $__internal_f8082b1d28bf70e46a18d7b40d308f20a172b74936e9214d28c96be53d1e3eb5->enter($__internal_f8082b1d28bf70e46a18d7b40d308f20a172b74936e9214d28c96be53d1e3eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f8082b1d28bf70e46a18d7b40d308f20a172b74936e9214d28c96be53d1e3eb5->leave($__internal_f8082b1d28bf70e46a18d7b40d308f20a172b74936e9214d28c96be53d1e3eb5_prof);

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
