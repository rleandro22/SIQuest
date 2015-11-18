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
        $__internal_5ae4dbaa6475eac5fc00ceabb6305b5a4abe1fa80ce740a3af63573524b7b624 = $this->env->getExtension("native_profiler");
        $__internal_5ae4dbaa6475eac5fc00ceabb6305b5a4abe1fa80ce740a3af63573524b7b624->enter($__internal_5ae4dbaa6475eac5fc00ceabb6305b5a4abe1fa80ce740a3af63573524b7b624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ae4dbaa6475eac5fc00ceabb6305b5a4abe1fa80ce740a3af63573524b7b624->leave($__internal_5ae4dbaa6475eac5fc00ceabb6305b5a4abe1fa80ce740a3af63573524b7b624_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78ac9f80e3a361325e88f2509697b992b8398a33795501759059c175bf0a8faa = $this->env->getExtension("native_profiler");
        $__internal_78ac9f80e3a361325e88f2509697b992b8398a33795501759059c175bf0a8faa->enter($__internal_78ac9f80e3a361325e88f2509697b992b8398a33795501759059c175bf0a8faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_78ac9f80e3a361325e88f2509697b992b8398a33795501759059c175bf0a8faa->leave($__internal_78ac9f80e3a361325e88f2509697b992b8398a33795501759059c175bf0a8faa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8a8b624dce26b68cca9cbcbdf0b323f91ad4ab53e757fb42c7f7e8e35931adb = $this->env->getExtension("native_profiler");
        $__internal_c8a8b624dce26b68cca9cbcbdf0b323f91ad4ab53e757fb42c7f7e8e35931adb->enter($__internal_c8a8b624dce26b68cca9cbcbdf0b323f91ad4ab53e757fb42c7f7e8e35931adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c8a8b624dce26b68cca9cbcbdf0b323f91ad4ab53e757fb42c7f7e8e35931adb->leave($__internal_c8a8b624dce26b68cca9cbcbdf0b323f91ad4ab53e757fb42c7f7e8e35931adb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_33cf5146753e49c062d23b7b4a339428cd08921492b7fb3a401fd8410177733a = $this->env->getExtension("native_profiler");
        $__internal_33cf5146753e49c062d23b7b4a339428cd08921492b7fb3a401fd8410177733a->enter($__internal_33cf5146753e49c062d23b7b4a339428cd08921492b7fb3a401fd8410177733a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_33cf5146753e49c062d23b7b4a339428cd08921492b7fb3a401fd8410177733a->leave($__internal_33cf5146753e49c062d23b7b4a339428cd08921492b7fb3a401fd8410177733a_prof);

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
