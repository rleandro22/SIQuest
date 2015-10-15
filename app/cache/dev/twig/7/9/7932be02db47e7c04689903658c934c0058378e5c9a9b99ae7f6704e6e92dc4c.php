<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7932be02db47e7c04689903658c934c0058378e5c9a9b99ae7f6704e6e92dc4c extends Twig_Template
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
        $__internal_11311dc29384df35e185d137228abadcd489e71652c497aa1bf1ae6a52938671 = $this->env->getExtension("native_profiler");
        $__internal_11311dc29384df35e185d137228abadcd489e71652c497aa1bf1ae6a52938671->enter($__internal_11311dc29384df35e185d137228abadcd489e71652c497aa1bf1ae6a52938671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11311dc29384df35e185d137228abadcd489e71652c497aa1bf1ae6a52938671->leave($__internal_11311dc29384df35e185d137228abadcd489e71652c497aa1bf1ae6a52938671_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2297b3da54665691d1e46fa26eab1dacd41e42dc7c1c5071f06e9f741592c2a4 = $this->env->getExtension("native_profiler");
        $__internal_2297b3da54665691d1e46fa26eab1dacd41e42dc7c1c5071f06e9f741592c2a4->enter($__internal_2297b3da54665691d1e46fa26eab1dacd41e42dc7c1c5071f06e9f741592c2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2297b3da54665691d1e46fa26eab1dacd41e42dc7c1c5071f06e9f741592c2a4->leave($__internal_2297b3da54665691d1e46fa26eab1dacd41e42dc7c1c5071f06e9f741592c2a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e84544bf656dba277d109cc01eec05d001784972a27e27b7a38e1016f467c6d = $this->env->getExtension("native_profiler");
        $__internal_1e84544bf656dba277d109cc01eec05d001784972a27e27b7a38e1016f467c6d->enter($__internal_1e84544bf656dba277d109cc01eec05d001784972a27e27b7a38e1016f467c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1e84544bf656dba277d109cc01eec05d001784972a27e27b7a38e1016f467c6d->leave($__internal_1e84544bf656dba277d109cc01eec05d001784972a27e27b7a38e1016f467c6d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_225e9d75f159cce9d61084046320fa9930b89f0bdd4c176162bc306c6d2a7b0c = $this->env->getExtension("native_profiler");
        $__internal_225e9d75f159cce9d61084046320fa9930b89f0bdd4c176162bc306c6d2a7b0c->enter($__internal_225e9d75f159cce9d61084046320fa9930b89f0bdd4c176162bc306c6d2a7b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_225e9d75f159cce9d61084046320fa9930b89f0bdd4c176162bc306c6d2a7b0c->leave($__internal_225e9d75f159cce9d61084046320fa9930b89f0bdd4c176162bc306c6d2a7b0c_prof);

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
