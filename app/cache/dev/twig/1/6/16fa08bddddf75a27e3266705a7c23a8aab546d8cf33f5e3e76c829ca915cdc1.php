<?php

/* base.html.twig */
class __TwigTemplate_16fa08bddddf75a27e3266705a7c23a8aab546d8cf33f5e3e76c829ca915cdc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc6eb73dc33ecb51eb8bee60a01fe82225b9b6c1a9623ca01578e1bfc7e41dec = $this->env->getExtension("native_profiler");
        $__internal_bc6eb73dc33ecb51eb8bee60a01fe82225b9b6c1a9623ca01578e1bfc7e41dec->enter($__internal_bc6eb73dc33ecb51eb8bee60a01fe82225b9b6c1a9623ca01578e1bfc7e41dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bc6eb73dc33ecb51eb8bee60a01fe82225b9b6c1a9623ca01578e1bfc7e41dec->leave($__internal_bc6eb73dc33ecb51eb8bee60a01fe82225b9b6c1a9623ca01578e1bfc7e41dec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3199b7ff8f84cf2b83b8bdd8273207729457945a6aeb8480c4e784114de49803 = $this->env->getExtension("native_profiler");
        $__internal_3199b7ff8f84cf2b83b8bdd8273207729457945a6aeb8480c4e784114de49803->enter($__internal_3199b7ff8f84cf2b83b8bdd8273207729457945a6aeb8480c4e784114de49803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3199b7ff8f84cf2b83b8bdd8273207729457945a6aeb8480c4e784114de49803->leave($__internal_3199b7ff8f84cf2b83b8bdd8273207729457945a6aeb8480c4e784114de49803_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8295f0095ef5b633f592560d315b2007e88873d4ecd35a5ee83ea25adf7b3dc3 = $this->env->getExtension("native_profiler");
        $__internal_8295f0095ef5b633f592560d315b2007e88873d4ecd35a5ee83ea25adf7b3dc3->enter($__internal_8295f0095ef5b633f592560d315b2007e88873d4ecd35a5ee83ea25adf7b3dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8295f0095ef5b633f592560d315b2007e88873d4ecd35a5ee83ea25adf7b3dc3->leave($__internal_8295f0095ef5b633f592560d315b2007e88873d4ecd35a5ee83ea25adf7b3dc3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_18c799968d1349509e33073a5a8924dc137defcef2a610af15abc31eef57cd3b = $this->env->getExtension("native_profiler");
        $__internal_18c799968d1349509e33073a5a8924dc137defcef2a610af15abc31eef57cd3b->enter($__internal_18c799968d1349509e33073a5a8924dc137defcef2a610af15abc31eef57cd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_18c799968d1349509e33073a5a8924dc137defcef2a610af15abc31eef57cd3b->leave($__internal_18c799968d1349509e33073a5a8924dc137defcef2a610af15abc31eef57cd3b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c2478fbe13389650cfccfc49f089167a7659019ae2cfb204acd03bd3e3e5178 = $this->env->getExtension("native_profiler");
        $__internal_9c2478fbe13389650cfccfc49f089167a7659019ae2cfb204acd03bd3e3e5178->enter($__internal_9c2478fbe13389650cfccfc49f089167a7659019ae2cfb204acd03bd3e3e5178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9c2478fbe13389650cfccfc49f089167a7659019ae2cfb204acd03bd3e3e5178->leave($__internal_9c2478fbe13389650cfccfc49f089167a7659019ae2cfb204acd03bd3e3e5178_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
