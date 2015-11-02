<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d232247132c6f86cb86bd6d2df8496b825c86fdf586f8b207b896f5004b7d018 extends Twig_Template
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
        $__internal_f27f7feca78df8831e54e4e3be239d2171d1464c34adb99e7777082f5bef4859 = $this->env->getExtension("native_profiler");
        $__internal_f27f7feca78df8831e54e4e3be239d2171d1464c34adb99e7777082f5bef4859->enter($__internal_f27f7feca78df8831e54e4e3be239d2171d1464c34adb99e7777082f5bef4859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f27f7feca78df8831e54e4e3be239d2171d1464c34adb99e7777082f5bef4859->leave($__internal_f27f7feca78df8831e54e4e3be239d2171d1464c34adb99e7777082f5bef4859_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e02fead89b1feb9a199e8ac42eb65a290935d5d58ea9131bdcb3fa61155716ac = $this->env->getExtension("native_profiler");
        $__internal_e02fead89b1feb9a199e8ac42eb65a290935d5d58ea9131bdcb3fa61155716ac->enter($__internal_e02fead89b1feb9a199e8ac42eb65a290935d5d58ea9131bdcb3fa61155716ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e02fead89b1feb9a199e8ac42eb65a290935d5d58ea9131bdcb3fa61155716ac->leave($__internal_e02fead89b1feb9a199e8ac42eb65a290935d5d58ea9131bdcb3fa61155716ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb4c343f687f4abb2de682451f4fabd7f5a00bf3c63d45bfbbd916d35a1d9674 = $this->env->getExtension("native_profiler");
        $__internal_cb4c343f687f4abb2de682451f4fabd7f5a00bf3c63d45bfbbd916d35a1d9674->enter($__internal_cb4c343f687f4abb2de682451f4fabd7f5a00bf3c63d45bfbbd916d35a1d9674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb4c343f687f4abb2de682451f4fabd7f5a00bf3c63d45bfbbd916d35a1d9674->leave($__internal_cb4c343f687f4abb2de682451f4fabd7f5a00bf3c63d45bfbbd916d35a1d9674_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9924836d80ffc167afafc7cffa1a47c7113860567232e1ff68cebe6b302ccb07 = $this->env->getExtension("native_profiler");
        $__internal_9924836d80ffc167afafc7cffa1a47c7113860567232e1ff68cebe6b302ccb07->enter($__internal_9924836d80ffc167afafc7cffa1a47c7113860567232e1ff68cebe6b302ccb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9924836d80ffc167afafc7cffa1a47c7113860567232e1ff68cebe6b302ccb07->leave($__internal_9924836d80ffc167afafc7cffa1a47c7113860567232e1ff68cebe6b302ccb07_prof);

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
