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
        $__internal_825bdafc76e636707484bcf357c34f62b034e796cf1cf09d155723b00cfd547d = $this->env->getExtension("native_profiler");
        $__internal_825bdafc76e636707484bcf357c34f62b034e796cf1cf09d155723b00cfd547d->enter($__internal_825bdafc76e636707484bcf357c34f62b034e796cf1cf09d155723b00cfd547d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_825bdafc76e636707484bcf357c34f62b034e796cf1cf09d155723b00cfd547d->leave($__internal_825bdafc76e636707484bcf357c34f62b034e796cf1cf09d155723b00cfd547d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_befc8d0892eefdaa29f58c439faf34c4c9ceb45988744c019eb464e33c195c60 = $this->env->getExtension("native_profiler");
        $__internal_befc8d0892eefdaa29f58c439faf34c4c9ceb45988744c019eb464e33c195c60->enter($__internal_befc8d0892eefdaa29f58c439faf34c4c9ceb45988744c019eb464e33c195c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_befc8d0892eefdaa29f58c439faf34c4c9ceb45988744c019eb464e33c195c60->leave($__internal_befc8d0892eefdaa29f58c439faf34c4c9ceb45988744c019eb464e33c195c60_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d8439c07e4f9875760acaf5ff7a004c0c54a807e070a131f6a6161df6af98d5 = $this->env->getExtension("native_profiler");
        $__internal_5d8439c07e4f9875760acaf5ff7a004c0c54a807e070a131f6a6161df6af98d5->enter($__internal_5d8439c07e4f9875760acaf5ff7a004c0c54a807e070a131f6a6161df6af98d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5d8439c07e4f9875760acaf5ff7a004c0c54a807e070a131f6a6161df6af98d5->leave($__internal_5d8439c07e4f9875760acaf5ff7a004c0c54a807e070a131f6a6161df6af98d5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b931f32c30de1398f3a41a1ece7623998782b78a41f32a9de8f88d4bb7752db0 = $this->env->getExtension("native_profiler");
        $__internal_b931f32c30de1398f3a41a1ece7623998782b78a41f32a9de8f88d4bb7752db0->enter($__internal_b931f32c30de1398f3a41a1ece7623998782b78a41f32a9de8f88d4bb7752db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b931f32c30de1398f3a41a1ece7623998782b78a41f32a9de8f88d4bb7752db0->leave($__internal_b931f32c30de1398f3a41a1ece7623998782b78a41f32a9de8f88d4bb7752db0_prof);

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
