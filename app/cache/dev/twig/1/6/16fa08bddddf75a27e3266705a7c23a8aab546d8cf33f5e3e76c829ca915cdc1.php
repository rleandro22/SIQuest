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
        $__internal_c594949dfbeb525f24bbc02f76d3dbbeda39ec8ea4458243899b3d9eaa71fac9 = $this->env->getExtension("native_profiler");
        $__internal_c594949dfbeb525f24bbc02f76d3dbbeda39ec8ea4458243899b3d9eaa71fac9->enter($__internal_c594949dfbeb525f24bbc02f76d3dbbeda39ec8ea4458243899b3d9eaa71fac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c594949dfbeb525f24bbc02f76d3dbbeda39ec8ea4458243899b3d9eaa71fac9->leave($__internal_c594949dfbeb525f24bbc02f76d3dbbeda39ec8ea4458243899b3d9eaa71fac9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34d66fd03e07a19dd4b789866a5194eec7061ce16e8a1f70218ad422a833915e = $this->env->getExtension("native_profiler");
        $__internal_34d66fd03e07a19dd4b789866a5194eec7061ce16e8a1f70218ad422a833915e->enter($__internal_34d66fd03e07a19dd4b789866a5194eec7061ce16e8a1f70218ad422a833915e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_34d66fd03e07a19dd4b789866a5194eec7061ce16e8a1f70218ad422a833915e->leave($__internal_34d66fd03e07a19dd4b789866a5194eec7061ce16e8a1f70218ad422a833915e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29ff0ed195a2019502c4b9931131dec35d3a4f95e4361ef3c9d387876dac8594 = $this->env->getExtension("native_profiler");
        $__internal_29ff0ed195a2019502c4b9931131dec35d3a4f95e4361ef3c9d387876dac8594->enter($__internal_29ff0ed195a2019502c4b9931131dec35d3a4f95e4361ef3c9d387876dac8594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_29ff0ed195a2019502c4b9931131dec35d3a4f95e4361ef3c9d387876dac8594->leave($__internal_29ff0ed195a2019502c4b9931131dec35d3a4f95e4361ef3c9d387876dac8594_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba40e03355f3339d26ec957211d764a8ffda8a04afe651b43efef8822a9d04d9 = $this->env->getExtension("native_profiler");
        $__internal_ba40e03355f3339d26ec957211d764a8ffda8a04afe651b43efef8822a9d04d9->enter($__internal_ba40e03355f3339d26ec957211d764a8ffda8a04afe651b43efef8822a9d04d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ba40e03355f3339d26ec957211d764a8ffda8a04afe651b43efef8822a9d04d9->leave($__internal_ba40e03355f3339d26ec957211d764a8ffda8a04afe651b43efef8822a9d04d9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_066c7699e68f5c010fef0e5ae54ec8a3b2e1bdcaf01988aff4250c76d84a7881 = $this->env->getExtension("native_profiler");
        $__internal_066c7699e68f5c010fef0e5ae54ec8a3b2e1bdcaf01988aff4250c76d84a7881->enter($__internal_066c7699e68f5c010fef0e5ae54ec8a3b2e1bdcaf01988aff4250c76d84a7881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_066c7699e68f5c010fef0e5ae54ec8a3b2e1bdcaf01988aff4250c76d84a7881->leave($__internal_066c7699e68f5c010fef0e5ae54ec8a3b2e1bdcaf01988aff4250c76d84a7881_prof);

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
