<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3d7669a6ab726f1ee918fc4507459a6485767c343151c9a084810b45ea78e085 extends Twig_Template
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
        $__internal_ffd9e1257dde70f60e5ba450d03a4f96d8c836410aab16446c12d5c429666be5 = $this->env->getExtension("native_profiler");
        $__internal_ffd9e1257dde70f60e5ba450d03a4f96d8c836410aab16446c12d5c429666be5->enter($__internal_ffd9e1257dde70f60e5ba450d03a4f96d8c836410aab16446c12d5c429666be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd9e1257dde70f60e5ba450d03a4f96d8c836410aab16446c12d5c429666be5->leave($__internal_ffd9e1257dde70f60e5ba450d03a4f96d8c836410aab16446c12d5c429666be5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e1e7f576d335135dd5e2c5c27ed30bda134c7648fe05db6b01b957e477016b2 = $this->env->getExtension("native_profiler");
        $__internal_0e1e7f576d335135dd5e2c5c27ed30bda134c7648fe05db6b01b957e477016b2->enter($__internal_0e1e7f576d335135dd5e2c5c27ed30bda134c7648fe05db6b01b957e477016b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0e1e7f576d335135dd5e2c5c27ed30bda134c7648fe05db6b01b957e477016b2->leave($__internal_0e1e7f576d335135dd5e2c5c27ed30bda134c7648fe05db6b01b957e477016b2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c68406bf3c06dc2431956cc068a3719eccd4ffe5c470804e0aad1a1d097e5aa9 = $this->env->getExtension("native_profiler");
        $__internal_c68406bf3c06dc2431956cc068a3719eccd4ffe5c470804e0aad1a1d097e5aa9->enter($__internal_c68406bf3c06dc2431956cc068a3719eccd4ffe5c470804e0aad1a1d097e5aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c68406bf3c06dc2431956cc068a3719eccd4ffe5c470804e0aad1a1d097e5aa9->leave($__internal_c68406bf3c06dc2431956cc068a3719eccd4ffe5c470804e0aad1a1d097e5aa9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffa4882657b8362d3f933babf91a8911bd0e14782d88e4cac46078547a5def6f = $this->env->getExtension("native_profiler");
        $__internal_ffa4882657b8362d3f933babf91a8911bd0e14782d88e4cac46078547a5def6f->enter($__internal_ffa4882657b8362d3f933babf91a8911bd0e14782d88e4cac46078547a5def6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ffa4882657b8362d3f933babf91a8911bd0e14782d88e4cac46078547a5def6f->leave($__internal_ffa4882657b8362d3f933babf91a8911bd0e14782d88e4cac46078547a5def6f_prof);

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
