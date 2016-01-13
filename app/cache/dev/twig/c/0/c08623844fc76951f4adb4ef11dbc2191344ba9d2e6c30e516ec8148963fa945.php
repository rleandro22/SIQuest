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
        $__internal_2d8b2fe153df56faf7426ded5799670848b8bff2f45668f1a03c38ec0a0d0411 = $this->env->getExtension("native_profiler");
        $__internal_2d8b2fe153df56faf7426ded5799670848b8bff2f45668f1a03c38ec0a0d0411->enter($__internal_2d8b2fe153df56faf7426ded5799670848b8bff2f45668f1a03c38ec0a0d0411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d8b2fe153df56faf7426ded5799670848b8bff2f45668f1a03c38ec0a0d0411->leave($__internal_2d8b2fe153df56faf7426ded5799670848b8bff2f45668f1a03c38ec0a0d0411_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ffee39a5abf98794714eba508995ea9a3e2884147d1948810eba70bde66695fb = $this->env->getExtension("native_profiler");
        $__internal_ffee39a5abf98794714eba508995ea9a3e2884147d1948810eba70bde66695fb->enter($__internal_ffee39a5abf98794714eba508995ea9a3e2884147d1948810eba70bde66695fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ffee39a5abf98794714eba508995ea9a3e2884147d1948810eba70bde66695fb->leave($__internal_ffee39a5abf98794714eba508995ea9a3e2884147d1948810eba70bde66695fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3a658cabdba38d77df0bd787981880d82915f5ef291ed240de1d14d4e3b225a = $this->env->getExtension("native_profiler");
        $__internal_b3a658cabdba38d77df0bd787981880d82915f5ef291ed240de1d14d4e3b225a->enter($__internal_b3a658cabdba38d77df0bd787981880d82915f5ef291ed240de1d14d4e3b225a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b3a658cabdba38d77df0bd787981880d82915f5ef291ed240de1d14d4e3b225a->leave($__internal_b3a658cabdba38d77df0bd787981880d82915f5ef291ed240de1d14d4e3b225a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f71c808bd32e8ce6b0057401437823501d10085f1cdc154a2fac493da7d37e2 = $this->env->getExtension("native_profiler");
        $__internal_1f71c808bd32e8ce6b0057401437823501d10085f1cdc154a2fac493da7d37e2->enter($__internal_1f71c808bd32e8ce6b0057401437823501d10085f1cdc154a2fac493da7d37e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1f71c808bd32e8ce6b0057401437823501d10085f1cdc154a2fac493da7d37e2->leave($__internal_1f71c808bd32e8ce6b0057401437823501d10085f1cdc154a2fac493da7d37e2_prof);

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
