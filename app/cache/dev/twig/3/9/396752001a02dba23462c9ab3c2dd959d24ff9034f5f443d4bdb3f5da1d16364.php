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
        $__internal_5d9293651cd7d0606a3d4358615f6e1b0f898a4bd9f5621c399db516ccf424eb = $this->env->getExtension("native_profiler");
        $__internal_5d9293651cd7d0606a3d4358615f6e1b0f898a4bd9f5621c399db516ccf424eb->enter($__internal_5d9293651cd7d0606a3d4358615f6e1b0f898a4bd9f5621c399db516ccf424eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d9293651cd7d0606a3d4358615f6e1b0f898a4bd9f5621c399db516ccf424eb->leave($__internal_5d9293651cd7d0606a3d4358615f6e1b0f898a4bd9f5621c399db516ccf424eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d203bc67c4eff82aabb8ae2ceb70214f4c20b4cc9a7b6cc1d9890189e8c5fc21 = $this->env->getExtension("native_profiler");
        $__internal_d203bc67c4eff82aabb8ae2ceb70214f4c20b4cc9a7b6cc1d9890189e8c5fc21->enter($__internal_d203bc67c4eff82aabb8ae2ceb70214f4c20b4cc9a7b6cc1d9890189e8c5fc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d203bc67c4eff82aabb8ae2ceb70214f4c20b4cc9a7b6cc1d9890189e8c5fc21->leave($__internal_d203bc67c4eff82aabb8ae2ceb70214f4c20b4cc9a7b6cc1d9890189e8c5fc21_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a084796c63bd4603ca1ad8f76f69be408e05125600a847041b744804988adce8 = $this->env->getExtension("native_profiler");
        $__internal_a084796c63bd4603ca1ad8f76f69be408e05125600a847041b744804988adce8->enter($__internal_a084796c63bd4603ca1ad8f76f69be408e05125600a847041b744804988adce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a084796c63bd4603ca1ad8f76f69be408e05125600a847041b744804988adce8->leave($__internal_a084796c63bd4603ca1ad8f76f69be408e05125600a847041b744804988adce8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_784e54ed55b92f5cb7d52262bb1e7bf6a8c72fd285001c9cbc01198ea5eb3590 = $this->env->getExtension("native_profiler");
        $__internal_784e54ed55b92f5cb7d52262bb1e7bf6a8c72fd285001c9cbc01198ea5eb3590->enter($__internal_784e54ed55b92f5cb7d52262bb1e7bf6a8c72fd285001c9cbc01198ea5eb3590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_784e54ed55b92f5cb7d52262bb1e7bf6a8c72fd285001c9cbc01198ea5eb3590->leave($__internal_784e54ed55b92f5cb7d52262bb1e7bf6a8c72fd285001c9cbc01198ea5eb3590_prof);

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
