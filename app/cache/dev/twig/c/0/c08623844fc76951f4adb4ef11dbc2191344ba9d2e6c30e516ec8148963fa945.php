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
        $__internal_eb534e39ceed63ea87061809a4ced2f2f43226cd08920a701ef5c8f9f4b605ea = $this->env->getExtension("native_profiler");
        $__internal_eb534e39ceed63ea87061809a4ced2f2f43226cd08920a701ef5c8f9f4b605ea->enter($__internal_eb534e39ceed63ea87061809a4ced2f2f43226cd08920a701ef5c8f9f4b605ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb534e39ceed63ea87061809a4ced2f2f43226cd08920a701ef5c8f9f4b605ea->leave($__internal_eb534e39ceed63ea87061809a4ced2f2f43226cd08920a701ef5c8f9f4b605ea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75455a40762cd2527be9e40e86504b699480f38faa297944a5b97916df429d1f = $this->env->getExtension("native_profiler");
        $__internal_75455a40762cd2527be9e40e86504b699480f38faa297944a5b97916df429d1f->enter($__internal_75455a40762cd2527be9e40e86504b699480f38faa297944a5b97916df429d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_75455a40762cd2527be9e40e86504b699480f38faa297944a5b97916df429d1f->leave($__internal_75455a40762cd2527be9e40e86504b699480f38faa297944a5b97916df429d1f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c126aa6d88c0d14a50d7a2fa4bc3e82d93a8bf9c6ca132a23116daf74d4e904 = $this->env->getExtension("native_profiler");
        $__internal_6c126aa6d88c0d14a50d7a2fa4bc3e82d93a8bf9c6ca132a23116daf74d4e904->enter($__internal_6c126aa6d88c0d14a50d7a2fa4bc3e82d93a8bf9c6ca132a23116daf74d4e904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6c126aa6d88c0d14a50d7a2fa4bc3e82d93a8bf9c6ca132a23116daf74d4e904->leave($__internal_6c126aa6d88c0d14a50d7a2fa4bc3e82d93a8bf9c6ca132a23116daf74d4e904_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfc2a41d4fb8d0eba0814904f5c8bda8b75cee990401ac655bdce69075572170 = $this->env->getExtension("native_profiler");
        $__internal_cfc2a41d4fb8d0eba0814904f5c8bda8b75cee990401ac655bdce69075572170->enter($__internal_cfc2a41d4fb8d0eba0814904f5c8bda8b75cee990401ac655bdce69075572170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cfc2a41d4fb8d0eba0814904f5c8bda8b75cee990401ac655bdce69075572170->leave($__internal_cfc2a41d4fb8d0eba0814904f5c8bda8b75cee990401ac655bdce69075572170_prof);

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
