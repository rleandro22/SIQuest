<?php

/* UciBaseDatosBundle:Generacion:edit.html.twig */
class __TwigTemplate_d46611e231e3ebb27d08d973d825426d81e3a4455a025f931520ee6f9245cda0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Generacion:edit.html.twig", 1);
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
        $__internal_75413d7b937bdb51dfeff915f113a2996b65095f18858a9e7c7fb25831ee719a = $this->env->getExtension("native_profiler");
        $__internal_75413d7b937bdb51dfeff915f113a2996b65095f18858a9e7c7fb25831ee719a->enter($__internal_75413d7b937bdb51dfeff915f113a2996b65095f18858a9e7c7fb25831ee719a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Generacion:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75413d7b937bdb51dfeff915f113a2996b65095f18858a9e7c7fb25831ee719a->leave($__internal_75413d7b937bdb51dfeff915f113a2996b65095f18858a9e7c7fb25831ee719a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0701e76b5377570e536dd0ce306b18cb074fd8a3d170236f79b3584c3e62b7e5 = $this->env->getExtension("native_profiler");
        $__internal_0701e76b5377570e536dd0ce306b18cb074fd8a3d170236f79b3584c3e62b7e5->enter($__internal_0701e76b5377570e536dd0ce306b18cb074fd8a3d170236f79b3584c3e62b7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Generacion edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_0701e76b5377570e536dd0ce306b18cb074fd8a3d170236f79b3584c3e62b7e5->leave($__internal_0701e76b5377570e536dd0ce306b18cb074fd8a3d170236f79b3584c3e62b7e5_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Generacion:edit.html.twig";
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
