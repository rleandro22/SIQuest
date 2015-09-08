<?php

/* UciDataBaseBundle:Rol:edit.html.twig */
class __TwigTemplate_e0277f16a1192bcd85ead58c81550b38629a966dcb8002026dc9a538ebf50319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciDataBaseBundle:Rol:edit.html.twig", 1);
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
        $__internal_6ce5957afada40badee6d580e1e47a244c818698f9d592c82c306115dca1fe13 = $this->env->getExtension("native_profiler");
        $__internal_6ce5957afada40badee6d580e1e47a244c818698f9d592c82c306115dca1fe13->enter($__internal_6ce5957afada40badee6d580e1e47a244c818698f9d592c82c306115dca1fe13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciDataBaseBundle:Rol:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ce5957afada40badee6d580e1e47a244c818698f9d592c82c306115dca1fe13->leave($__internal_6ce5957afada40badee6d580e1e47a244c818698f9d592c82c306115dca1fe13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c75ef60bc76762c12de00d2e2d4bd927ef36964232d164b16ebb23e61d21646e = $this->env->getExtension("native_profiler");
        $__internal_c75ef60bc76762c12de00d2e2d4bd927ef36964232d164b16ebb23e61d21646e->enter($__internal_c75ef60bc76762c12de00d2e2d4bd927ef36964232d164b16ebb23e61d21646e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Rol edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("rol");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_c75ef60bc76762c12de00d2e2d4bd927ef36964232d164b16ebb23e61d21646e->leave($__internal_c75ef60bc76762c12de00d2e2d4bd927ef36964232d164b16ebb23e61d21646e_prof);

    }

    public function getTemplateName()
    {
        return "UciDataBaseBundle:Rol:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
