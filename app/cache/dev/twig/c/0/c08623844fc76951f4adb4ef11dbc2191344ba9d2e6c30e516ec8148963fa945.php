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
        $__internal_99cc3261f69200e7d50f716621c77b56de3618925214fa6e12a5611c066e9b7f = $this->env->getExtension("native_profiler");
        $__internal_99cc3261f69200e7d50f716621c77b56de3618925214fa6e12a5611c066e9b7f->enter($__internal_99cc3261f69200e7d50f716621c77b56de3618925214fa6e12a5611c066e9b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99cc3261f69200e7d50f716621c77b56de3618925214fa6e12a5611c066e9b7f->leave($__internal_99cc3261f69200e7d50f716621c77b56de3618925214fa6e12a5611c066e9b7f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b71b82acfde35839f5691d2d38b43e39c4c428f839445ad3df55c8c8e549e765 = $this->env->getExtension("native_profiler");
        $__internal_b71b82acfde35839f5691d2d38b43e39c4c428f839445ad3df55c8c8e549e765->enter($__internal_b71b82acfde35839f5691d2d38b43e39c4c428f839445ad3df55c8c8e549e765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b71b82acfde35839f5691d2d38b43e39c4c428f839445ad3df55c8c8e549e765->leave($__internal_b71b82acfde35839f5691d2d38b43e39c4c428f839445ad3df55c8c8e549e765_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d29372cbb7a350f20dab1abfc4761c75dfbf553d2c84ff64cace878760549671 = $this->env->getExtension("native_profiler");
        $__internal_d29372cbb7a350f20dab1abfc4761c75dfbf553d2c84ff64cace878760549671->enter($__internal_d29372cbb7a350f20dab1abfc4761c75dfbf553d2c84ff64cace878760549671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d29372cbb7a350f20dab1abfc4761c75dfbf553d2c84ff64cace878760549671->leave($__internal_d29372cbb7a350f20dab1abfc4761c75dfbf553d2c84ff64cace878760549671_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a12756d2625d6b9a9b2d97f007512cdb355ce0165e4575f8e1d54a57b298525 = $this->env->getExtension("native_profiler");
        $__internal_8a12756d2625d6b9a9b2d97f007512cdb355ce0165e4575f8e1d54a57b298525->enter($__internal_8a12756d2625d6b9a9b2d97f007512cdb355ce0165e4575f8e1d54a57b298525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8a12756d2625d6b9a9b2d97f007512cdb355ce0165e4575f8e1d54a57b298525->leave($__internal_8a12756d2625d6b9a9b2d97f007512cdb355ce0165e4575f8e1d54a57b298525_prof);

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
