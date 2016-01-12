<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c08623844fc76951f4adb4ef11dbc2191344ba9d2e6c30e516ec8148963fa945 extends Twig_Template
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
        $__internal_e7e2a073939ffe67b8b2ac9321752c8c4de0bce0ba42a3431c105a33e2cd7ec5 = $this->env->getExtension("native_profiler");
        $__internal_e7e2a073939ffe67b8b2ac9321752c8c4de0bce0ba42a3431c105a33e2cd7ec5->enter($__internal_e7e2a073939ffe67b8b2ac9321752c8c4de0bce0ba42a3431c105a33e2cd7ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7e2a073939ffe67b8b2ac9321752c8c4de0bce0ba42a3431c105a33e2cd7ec5->leave($__internal_e7e2a073939ffe67b8b2ac9321752c8c4de0bce0ba42a3431c105a33e2cd7ec5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_404940e8bb9b5a703be148a772796221d675229c375af5a0edb81c21f48a8298 = $this->env->getExtension("native_profiler");
        $__internal_404940e8bb9b5a703be148a772796221d675229c375af5a0edb81c21f48a8298->enter($__internal_404940e8bb9b5a703be148a772796221d675229c375af5a0edb81c21f48a8298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_404940e8bb9b5a703be148a772796221d675229c375af5a0edb81c21f48a8298->leave($__internal_404940e8bb9b5a703be148a772796221d675229c375af5a0edb81c21f48a8298_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e6626bb466d245efa9b3e6603fa1ed30c363238d6c87f1545f8962f7ab86acf = $this->env->getExtension("native_profiler");
        $__internal_9e6626bb466d245efa9b3e6603fa1ed30c363238d6c87f1545f8962f7ab86acf->enter($__internal_9e6626bb466d245efa9b3e6603fa1ed30c363238d6c87f1545f8962f7ab86acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e6626bb466d245efa9b3e6603fa1ed30c363238d6c87f1545f8962f7ab86acf->leave($__internal_9e6626bb466d245efa9b3e6603fa1ed30c363238d6c87f1545f8962f7ab86acf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c2b3e906d9b5f75ef14af9cb55077ddc4073d40f0663b6ffd931c935aedbb50 = $this->env->getExtension("native_profiler");
        $__internal_7c2b3e906d9b5f75ef14af9cb55077ddc4073d40f0663b6ffd931c935aedbb50->enter($__internal_7c2b3e906d9b5f75ef14af9cb55077ddc4073d40f0663b6ffd931c935aedbb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7c2b3e906d9b5f75ef14af9cb55077ddc4073d40f0663b6ffd931c935aedbb50->leave($__internal_7c2b3e906d9b5f75ef14af9cb55077ddc4073d40f0663b6ffd931c935aedbb50_prof);

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
