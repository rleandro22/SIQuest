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
        $__internal_f031a5769485df02cee71a7b8c20c154cfe0f50c419b9313346976f4d0d1e98f = $this->env->getExtension("native_profiler");
        $__internal_f031a5769485df02cee71a7b8c20c154cfe0f50c419b9313346976f4d0d1e98f->enter($__internal_f031a5769485df02cee71a7b8c20c154cfe0f50c419b9313346976f4d0d1e98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f031a5769485df02cee71a7b8c20c154cfe0f50c419b9313346976f4d0d1e98f->leave($__internal_f031a5769485df02cee71a7b8c20c154cfe0f50c419b9313346976f4d0d1e98f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_312d83fe0250ed1f965db9bf6e4f9faec1ed316c209a074b51df4c6d1191e88e = $this->env->getExtension("native_profiler");
        $__internal_312d83fe0250ed1f965db9bf6e4f9faec1ed316c209a074b51df4c6d1191e88e->enter($__internal_312d83fe0250ed1f965db9bf6e4f9faec1ed316c209a074b51df4c6d1191e88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_312d83fe0250ed1f965db9bf6e4f9faec1ed316c209a074b51df4c6d1191e88e->leave($__internal_312d83fe0250ed1f965db9bf6e4f9faec1ed316c209a074b51df4c6d1191e88e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_138e952350596d54b8506374cdf24426532f7ad99e84254fdc39f9e8448cfd78 = $this->env->getExtension("native_profiler");
        $__internal_138e952350596d54b8506374cdf24426532f7ad99e84254fdc39f9e8448cfd78->enter($__internal_138e952350596d54b8506374cdf24426532f7ad99e84254fdc39f9e8448cfd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_138e952350596d54b8506374cdf24426532f7ad99e84254fdc39f9e8448cfd78->leave($__internal_138e952350596d54b8506374cdf24426532f7ad99e84254fdc39f9e8448cfd78_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffec22d48c4b59a00336992f16c9b2eb90a77c2d654e4a01f9e7f878097d6f32 = $this->env->getExtension("native_profiler");
        $__internal_ffec22d48c4b59a00336992f16c9b2eb90a77c2d654e4a01f9e7f878097d6f32->enter($__internal_ffec22d48c4b59a00336992f16c9b2eb90a77c2d654e4a01f9e7f878097d6f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ffec22d48c4b59a00336992f16c9b2eb90a77c2d654e4a01f9e7f878097d6f32->leave($__internal_ffec22d48c4b59a00336992f16c9b2eb90a77c2d654e4a01f9e7f878097d6f32_prof);

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
