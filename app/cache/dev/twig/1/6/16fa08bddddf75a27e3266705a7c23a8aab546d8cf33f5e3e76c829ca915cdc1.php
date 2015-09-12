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
        $__internal_bd603c76a6351d693e78e1b2566b9e2511161a2c2498d01db45f3563a954ca46 = $this->env->getExtension("native_profiler");
        $__internal_bd603c76a6351d693e78e1b2566b9e2511161a2c2498d01db45f3563a954ca46->enter($__internal_bd603c76a6351d693e78e1b2566b9e2511161a2c2498d01db45f3563a954ca46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bd603c76a6351d693e78e1b2566b9e2511161a2c2498d01db45f3563a954ca46->leave($__internal_bd603c76a6351d693e78e1b2566b9e2511161a2c2498d01db45f3563a954ca46_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_02bcc81eb60775078ee961c30b2ddfccfe24d2be5326e2b96f5ade2d11fca8c2 = $this->env->getExtension("native_profiler");
        $__internal_02bcc81eb60775078ee961c30b2ddfccfe24d2be5326e2b96f5ade2d11fca8c2->enter($__internal_02bcc81eb60775078ee961c30b2ddfccfe24d2be5326e2b96f5ade2d11fca8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_02bcc81eb60775078ee961c30b2ddfccfe24d2be5326e2b96f5ade2d11fca8c2->leave($__internal_02bcc81eb60775078ee961c30b2ddfccfe24d2be5326e2b96f5ade2d11fca8c2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3efba962285325b3d7720e622944ad2d01805ef9e45ba13d413b4ae9cacea94 = $this->env->getExtension("native_profiler");
        $__internal_b3efba962285325b3d7720e622944ad2d01805ef9e45ba13d413b4ae9cacea94->enter($__internal_b3efba962285325b3d7720e622944ad2d01805ef9e45ba13d413b4ae9cacea94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b3efba962285325b3d7720e622944ad2d01805ef9e45ba13d413b4ae9cacea94->leave($__internal_b3efba962285325b3d7720e622944ad2d01805ef9e45ba13d413b4ae9cacea94_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_739de43b4f4e2c142e4f556d0585663d317fa0204c2612836e1a7f07690f0162 = $this->env->getExtension("native_profiler");
        $__internal_739de43b4f4e2c142e4f556d0585663d317fa0204c2612836e1a7f07690f0162->enter($__internal_739de43b4f4e2c142e4f556d0585663d317fa0204c2612836e1a7f07690f0162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_739de43b4f4e2c142e4f556d0585663d317fa0204c2612836e1a7f07690f0162->leave($__internal_739de43b4f4e2c142e4f556d0585663d317fa0204c2612836e1a7f07690f0162_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5669918f4c7bf6f7ea01462a462f24095166920f5fe14f5353f04cc72539097 = $this->env->getExtension("native_profiler");
        $__internal_d5669918f4c7bf6f7ea01462a462f24095166920f5fe14f5353f04cc72539097->enter($__internal_d5669918f4c7bf6f7ea01462a462f24095166920f5fe14f5353f04cc72539097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d5669918f4c7bf6f7ea01462a462f24095166920f5fe14f5353f04cc72539097->leave($__internal_d5669918f4c7bf6f7ea01462a462f24095166920f5fe14f5353f04cc72539097_prof);

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
