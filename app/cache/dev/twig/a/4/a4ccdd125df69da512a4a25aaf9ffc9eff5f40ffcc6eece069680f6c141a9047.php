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
        $__internal_4094b3bdcf0e7105bb9b48274ca3ab9fa7742714ec4ad110d367da3287fc5f5c = $this->env->getExtension("native_profiler");
        $__internal_4094b3bdcf0e7105bb9b48274ca3ab9fa7742714ec4ad110d367da3287fc5f5c->enter($__internal_4094b3bdcf0e7105bb9b48274ca3ab9fa7742714ec4ad110d367da3287fc5f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4094b3bdcf0e7105bb9b48274ca3ab9fa7742714ec4ad110d367da3287fc5f5c->leave($__internal_4094b3bdcf0e7105bb9b48274ca3ab9fa7742714ec4ad110d367da3287fc5f5c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f80099fdbd09e377716569f31bcabadab61836543d6c400e8ef636bef50e167c = $this->env->getExtension("native_profiler");
        $__internal_f80099fdbd09e377716569f31bcabadab61836543d6c400e8ef636bef50e167c->enter($__internal_f80099fdbd09e377716569f31bcabadab61836543d6c400e8ef636bef50e167c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    
   texto



";
        
        $__internal_f80099fdbd09e377716569f31bcabadab61836543d6c400e8ef636bef50e167c->leave($__internal_f80099fdbd09e377716569f31bcabadab61836543d6c400e8ef636bef50e167c_prof);

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
