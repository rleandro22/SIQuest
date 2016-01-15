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
        $__internal_411b2e778efccd7235a0fee82064b11166e690ead4225abd358a1e266568b42a = $this->env->getExtension("native_profiler");
        $__internal_411b2e778efccd7235a0fee82064b11166e690ead4225abd358a1e266568b42a->enter($__internal_411b2e778efccd7235a0fee82064b11166e690ead4225abd358a1e266568b42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_411b2e778efccd7235a0fee82064b11166e690ead4225abd358a1e266568b42a->leave($__internal_411b2e778efccd7235a0fee82064b11166e690ead4225abd358a1e266568b42a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9137c9d3f25d24f5065894aaa85b52ce395e53ff5618633500c18f88f3e614cc = $this->env->getExtension("native_profiler");
        $__internal_9137c9d3f25d24f5065894aaa85b52ce395e53ff5618633500c18f88f3e614cc->enter($__internal_9137c9d3f25d24f5065894aaa85b52ce395e53ff5618633500c18f88f3e614cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9137c9d3f25d24f5065894aaa85b52ce395e53ff5618633500c18f88f3e614cc->leave($__internal_9137c9d3f25d24f5065894aaa85b52ce395e53ff5618633500c18f88f3e614cc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_548dd588f9e528dced6eb11211f5f964c24d7c23b70486684f5ca42a5c1ea4f3 = $this->env->getExtension("native_profiler");
        $__internal_548dd588f9e528dced6eb11211f5f964c24d7c23b70486684f5ca42a5c1ea4f3->enter($__internal_548dd588f9e528dced6eb11211f5f964c24d7c23b70486684f5ca42a5c1ea4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_548dd588f9e528dced6eb11211f5f964c24d7c23b70486684f5ca42a5c1ea4f3->leave($__internal_548dd588f9e528dced6eb11211f5f964c24d7c23b70486684f5ca42a5c1ea4f3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9d579dd29c660338bc30a442fe8de9ac79b8d1287ebeef425dd7311f06e8121 = $this->env->getExtension("native_profiler");
        $__internal_e9d579dd29c660338bc30a442fe8de9ac79b8d1287ebeef425dd7311f06e8121->enter($__internal_e9d579dd29c660338bc30a442fe8de9ac79b8d1287ebeef425dd7311f06e8121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e9d579dd29c660338bc30a442fe8de9ac79b8d1287ebeef425dd7311f06e8121->leave($__internal_e9d579dd29c660338bc30a442fe8de9ac79b8d1287ebeef425dd7311f06e8121_prof);

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
