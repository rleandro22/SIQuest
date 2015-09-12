<?php

/* ::base.html.twig */
class __TwigTemplate_c7d585662e2ded1834971d9b7c4221ab6e96fca97279d4e1e9d591d0e74bdd96 extends Twig_Template
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
        $__internal_8fb57980782984568fab20109dfb3c5dfcb19070188cce4d930e08c3ccd01da8 = $this->env->getExtension("native_profiler");
        $__internal_8fb57980782984568fab20109dfb3c5dfcb19070188cce4d930e08c3ccd01da8->enter($__internal_8fb57980782984568fab20109dfb3c5dfcb19070188cce4d930e08c3ccd01da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8fb57980782984568fab20109dfb3c5dfcb19070188cce4d930e08c3ccd01da8->leave($__internal_8fb57980782984568fab20109dfb3c5dfcb19070188cce4d930e08c3ccd01da8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2ff646a5acb9f52419598c674d510130224ac5249c4f6d22fa53151c6063236 = $this->env->getExtension("native_profiler");
        $__internal_f2ff646a5acb9f52419598c674d510130224ac5249c4f6d22fa53151c6063236->enter($__internal_f2ff646a5acb9f52419598c674d510130224ac5249c4f6d22fa53151c6063236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f2ff646a5acb9f52419598c674d510130224ac5249c4f6d22fa53151c6063236->leave($__internal_f2ff646a5acb9f52419598c674d510130224ac5249c4f6d22fa53151c6063236_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0abceb2a5034a297e12175ec1055c45a119830878a351c4c343915e3eeb23b9 = $this->env->getExtension("native_profiler");
        $__internal_f0abceb2a5034a297e12175ec1055c45a119830878a351c4c343915e3eeb23b9->enter($__internal_f0abceb2a5034a297e12175ec1055c45a119830878a351c4c343915e3eeb23b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f0abceb2a5034a297e12175ec1055c45a119830878a351c4c343915e3eeb23b9->leave($__internal_f0abceb2a5034a297e12175ec1055c45a119830878a351c4c343915e3eeb23b9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ef5d8c723eb693fdab08f4140c5ddfff5cb0d3377f9a2e84f39b8318392871f = $this->env->getExtension("native_profiler");
        $__internal_5ef5d8c723eb693fdab08f4140c5ddfff5cb0d3377f9a2e84f39b8318392871f->enter($__internal_5ef5d8c723eb693fdab08f4140c5ddfff5cb0d3377f9a2e84f39b8318392871f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5ef5d8c723eb693fdab08f4140c5ddfff5cb0d3377f9a2e84f39b8318392871f->leave($__internal_5ef5d8c723eb693fdab08f4140c5ddfff5cb0d3377f9a2e84f39b8318392871f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_852db7606429562f1dc4ab978131ab1dcaa634a73cd4b8cc1b998b8c9aa7ceb3 = $this->env->getExtension("native_profiler");
        $__internal_852db7606429562f1dc4ab978131ab1dcaa634a73cd4b8cc1b998b8c9aa7ceb3->enter($__internal_852db7606429562f1dc4ab978131ab1dcaa634a73cd4b8cc1b998b8c9aa7ceb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_852db7606429562f1dc4ab978131ab1dcaa634a73cd4b8cc1b998b8c9aa7ceb3->leave($__internal_852db7606429562f1dc4ab978131ab1dcaa634a73cd4b8cc1b998b8c9aa7ceb3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
