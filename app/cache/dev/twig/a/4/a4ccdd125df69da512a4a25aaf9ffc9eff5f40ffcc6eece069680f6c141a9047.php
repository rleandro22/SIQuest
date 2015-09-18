<?php

/* UciAdministradorBundle:Vista:index.html.twig */
class __TwigTemplate_a4ccdd125df69da512a4a25aaf9ffc9eff5f40ffcc6eece069680f6c141a9047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:Vista:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42d2fa14b5ba48e4bbd8f4682dac947919ecda0463b98bdd7004cdfc8f642dd5 = $this->env->getExtension("native_profiler");
        $__internal_42d2fa14b5ba48e4bbd8f4682dac947919ecda0463b98bdd7004cdfc8f642dd5->enter($__internal_42d2fa14b5ba48e4bbd8f4682dac947919ecda0463b98bdd7004cdfc8f642dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42d2fa14b5ba48e4bbd8f4682dac947919ecda0463b98bdd7004cdfc8f642dd5->leave($__internal_42d2fa14b5ba48e4bbd8f4682dac947919ecda0463b98bdd7004cdfc8f642dd5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d625026ee143fd3f7bd7b183f7d21ff16457e866d237b9225084b244e864108 = $this->env->getExtension("native_profiler");
        $__internal_3d625026ee143fd3f7bd7b183f7d21ff16457e866d237b9225084b244e864108->enter($__internal_3d625026ee143fd3f7bd7b183f7d21ff16457e866d237b9225084b244e864108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    




";
        
        $__internal_3d625026ee143fd3f7bd7b183f7d21ff16457e866d237b9225084b244e864108->leave($__internal_3d625026ee143fd3f7bd7b183f7d21ff16457e866d237b9225084b244e864108_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Vista:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
