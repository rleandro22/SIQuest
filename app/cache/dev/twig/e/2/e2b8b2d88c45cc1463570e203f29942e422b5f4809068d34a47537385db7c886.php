<?php

/* UciBaseDatosBundle:Generacion:new.html.twig */
class __TwigTemplate_e2b8b2d88c45cc1463570e203f29942e422b5f4809068d34a47537385db7c886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Generacion:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f04a5084a550e3daf1b2e82ca7f4d4f672683c7bd1c664a29780695805f6aeb7 = $this->env->getExtension("native_profiler");
        $__internal_f04a5084a550e3daf1b2e82ca7f4d4f672683c7bd1c664a29780695805f6aeb7->enter($__internal_f04a5084a550e3daf1b2e82ca7f4d4f672683c7bd1c664a29780695805f6aeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Generacion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f04a5084a550e3daf1b2e82ca7f4d4f672683c7bd1c664a29780695805f6aeb7->leave($__internal_f04a5084a550e3daf1b2e82ca7f4d4f672683c7bd1c664a29780695805f6aeb7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8892c008e9c124b53bdcf4ef9e5f930bbd17c2a4d2f207456601b6b588cf432e = $this->env->getExtension("native_profiler");
        $__internal_8892c008e9c124b53bdcf4ef9e5f930bbd17c2a4d2f207456601b6b588cf432e->enter($__internal_8892c008e9c124b53bdcf4ef9e5f930bbd17c2a4d2f207456601b6b588cf432e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Generacion creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("generacion");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_8892c008e9c124b53bdcf4ef9e5f930bbd17c2a4d2f207456601b6b588cf432e->leave($__internal_8892c008e9c124b53bdcf4ef9e5f930bbd17c2a4d2f207456601b6b588cf432e_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Generacion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
