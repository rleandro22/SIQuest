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
        $__internal_460b97fd5c2793596a9268c99d4a17092053050ac653b87486dd48a38dd8ce9a = $this->env->getExtension("native_profiler");
        $__internal_460b97fd5c2793596a9268c99d4a17092053050ac653b87486dd48a38dd8ce9a->enter($__internal_460b97fd5c2793596a9268c99d4a17092053050ac653b87486dd48a38dd8ce9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_460b97fd5c2793596a9268c99d4a17092053050ac653b87486dd48a38dd8ce9a->leave($__internal_460b97fd5c2793596a9268c99d4a17092053050ac653b87486dd48a38dd8ce9a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3f3647264075b3de1090033b7d306ca84316796a22cb6e9ac28ed4d19ed2b81 = $this->env->getExtension("native_profiler");
        $__internal_e3f3647264075b3de1090033b7d306ca84316796a22cb6e9ac28ed4d19ed2b81->enter($__internal_e3f3647264075b3de1090033b7d306ca84316796a22cb6e9ac28ed4d19ed2b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e3f3647264075b3de1090033b7d306ca84316796a22cb6e9ac28ed4d19ed2b81->leave($__internal_e3f3647264075b3de1090033b7d306ca84316796a22cb6e9ac28ed4d19ed2b81_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a5ed555fbfc2c12756c129551437781bb070ca425dd3aa3a78602022af01746a = $this->env->getExtension("native_profiler");
        $__internal_a5ed555fbfc2c12756c129551437781bb070ca425dd3aa3a78602022af01746a->enter($__internal_a5ed555fbfc2c12756c129551437781bb070ca425dd3aa3a78602022af01746a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a5ed555fbfc2c12756c129551437781bb070ca425dd3aa3a78602022af01746a->leave($__internal_a5ed555fbfc2c12756c129551437781bb070ca425dd3aa3a78602022af01746a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae5dbf9ebeb90f628bdc8fbae9b28a87a922d34b7ecb1340b9f895a4a2407cea = $this->env->getExtension("native_profiler");
        $__internal_ae5dbf9ebeb90f628bdc8fbae9b28a87a922d34b7ecb1340b9f895a4a2407cea->enter($__internal_ae5dbf9ebeb90f628bdc8fbae9b28a87a922d34b7ecb1340b9f895a4a2407cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae5dbf9ebeb90f628bdc8fbae9b28a87a922d34b7ecb1340b9f895a4a2407cea->leave($__internal_ae5dbf9ebeb90f628bdc8fbae9b28a87a922d34b7ecb1340b9f895a4a2407cea_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df556f2cb6a2111732fb0352c925feb6346ea1d39ed64ce06c08eae3220d06f4 = $this->env->getExtension("native_profiler");
        $__internal_df556f2cb6a2111732fb0352c925feb6346ea1d39ed64ce06c08eae3220d06f4->enter($__internal_df556f2cb6a2111732fb0352c925feb6346ea1d39ed64ce06c08eae3220d06f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_df556f2cb6a2111732fb0352c925feb6346ea1d39ed64ce06c08eae3220d06f4->leave($__internal_df556f2cb6a2111732fb0352c925feb6346ea1d39ed64ce06c08eae3220d06f4_prof);

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
