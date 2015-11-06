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
        $__internal_746a49e9d1854aff2df40a89bd1dd0a2602fd4f5d7744fd3641f54bc38a7fce2 = $this->env->getExtension("native_profiler");
        $__internal_746a49e9d1854aff2df40a89bd1dd0a2602fd4f5d7744fd3641f54bc38a7fce2->enter($__internal_746a49e9d1854aff2df40a89bd1dd0a2602fd4f5d7744fd3641f54bc38a7fce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_746a49e9d1854aff2df40a89bd1dd0a2602fd4f5d7744fd3641f54bc38a7fce2->leave($__internal_746a49e9d1854aff2df40a89bd1dd0a2602fd4f5d7744fd3641f54bc38a7fce2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46d1cb41ac90192da4f72e13d4453de53b43ea7e4243f371e8154f06bf9b66fd = $this->env->getExtension("native_profiler");
        $__internal_46d1cb41ac90192da4f72e13d4453de53b43ea7e4243f371e8154f06bf9b66fd->enter($__internal_46d1cb41ac90192da4f72e13d4453de53b43ea7e4243f371e8154f06bf9b66fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_46d1cb41ac90192da4f72e13d4453de53b43ea7e4243f371e8154f06bf9b66fd->leave($__internal_46d1cb41ac90192da4f72e13d4453de53b43ea7e4243f371e8154f06bf9b66fd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bda3da628b999c44258e16410842dedebaf22aeedf30b05d503dce098643330 = $this->env->getExtension("native_profiler");
        $__internal_3bda3da628b999c44258e16410842dedebaf22aeedf30b05d503dce098643330->enter($__internal_3bda3da628b999c44258e16410842dedebaf22aeedf30b05d503dce098643330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3bda3da628b999c44258e16410842dedebaf22aeedf30b05d503dce098643330->leave($__internal_3bda3da628b999c44258e16410842dedebaf22aeedf30b05d503dce098643330_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ea2c962c29393ee5ad026a6e7d986e3a08ea431269b366b0ce23ed2094778ea = $this->env->getExtension("native_profiler");
        $__internal_0ea2c962c29393ee5ad026a6e7d986e3a08ea431269b366b0ce23ed2094778ea->enter($__internal_0ea2c962c29393ee5ad026a6e7d986e3a08ea431269b366b0ce23ed2094778ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0ea2c962c29393ee5ad026a6e7d986e3a08ea431269b366b0ce23ed2094778ea->leave($__internal_0ea2c962c29393ee5ad026a6e7d986e3a08ea431269b366b0ce23ed2094778ea_prof);

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
