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
        $__internal_4583bec1d198d3828088102bd1ca0785dabba2bfaf38939426ae27fc7fcf1537 = $this->env->getExtension("native_profiler");
        $__internal_4583bec1d198d3828088102bd1ca0785dabba2bfaf38939426ae27fc7fcf1537->enter($__internal_4583bec1d198d3828088102bd1ca0785dabba2bfaf38939426ae27fc7fcf1537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4583bec1d198d3828088102bd1ca0785dabba2bfaf38939426ae27fc7fcf1537->leave($__internal_4583bec1d198d3828088102bd1ca0785dabba2bfaf38939426ae27fc7fcf1537_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f6bbc7d374174b48cad3e1ce9ca6b4058db47e19d8b7f0c6bc5c1fda4710d2e = $this->env->getExtension("native_profiler");
        $__internal_6f6bbc7d374174b48cad3e1ce9ca6b4058db47e19d8b7f0c6bc5c1fda4710d2e->enter($__internal_6f6bbc7d374174b48cad3e1ce9ca6b4058db47e19d8b7f0c6bc5c1fda4710d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6f6bbc7d374174b48cad3e1ce9ca6b4058db47e19d8b7f0c6bc5c1fda4710d2e->leave($__internal_6f6bbc7d374174b48cad3e1ce9ca6b4058db47e19d8b7f0c6bc5c1fda4710d2e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e13bd720d20f47710c0e22164d523765043acc7047306efb00258896ab007fdd = $this->env->getExtension("native_profiler");
        $__internal_e13bd720d20f47710c0e22164d523765043acc7047306efb00258896ab007fdd->enter($__internal_e13bd720d20f47710c0e22164d523765043acc7047306efb00258896ab007fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e13bd720d20f47710c0e22164d523765043acc7047306efb00258896ab007fdd->leave($__internal_e13bd720d20f47710c0e22164d523765043acc7047306efb00258896ab007fdd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0555b17b076b3f0e98a475c7f7f524309d2cc9f6fd4afc10cea4d08b9a0a1c1 = $this->env->getExtension("native_profiler");
        $__internal_b0555b17b076b3f0e98a475c7f7f524309d2cc9f6fd4afc10cea4d08b9a0a1c1->enter($__internal_b0555b17b076b3f0e98a475c7f7f524309d2cc9f6fd4afc10cea4d08b9a0a1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b0555b17b076b3f0e98a475c7f7f524309d2cc9f6fd4afc10cea4d08b9a0a1c1->leave($__internal_b0555b17b076b3f0e98a475c7f7f524309d2cc9f6fd4afc10cea4d08b9a0a1c1_prof);

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
