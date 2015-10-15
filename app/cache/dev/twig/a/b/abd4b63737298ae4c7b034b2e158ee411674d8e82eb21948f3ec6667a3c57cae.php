<?php

/* UciBaseDatosBundle:Pregunta:edit.html.twig */
class __TwigTemplate_abd4b63737298ae4c7b034b2e158ee411674d8e82eb21948f3ec6667a3c57cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Pregunta:edit.html.twig", 1);
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
        $__internal_8a2e73483c1510b16147852adf94dc495d803328006612346d92aa17d47e445b = $this->env->getExtension("native_profiler");
        $__internal_8a2e73483c1510b16147852adf94dc495d803328006612346d92aa17d47e445b->enter($__internal_8a2e73483c1510b16147852adf94dc495d803328006612346d92aa17d47e445b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Pregunta:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a2e73483c1510b16147852adf94dc495d803328006612346d92aa17d47e445b->leave($__internal_8a2e73483c1510b16147852adf94dc495d803328006612346d92aa17d47e445b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_79aeebd4b6ed76912b05ec2ef5a7d73d0414bf32669e3d65cc02f73e75ef3516 = $this->env->getExtension("native_profiler");
        $__internal_79aeebd4b6ed76912b05ec2ef5a7d73d0414bf32669e3d65cc02f73e75ef3516->enter($__internal_79aeebd4b6ed76912b05ec2ef5a7d73d0414bf32669e3d65cc02f73e75ef3516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pregunta edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("pregunta");
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
        
        $__internal_79aeebd4b6ed76912b05ec2ef5a7d73d0414bf32669e3d65cc02f73e75ef3516->leave($__internal_79aeebd4b6ed76912b05ec2ef5a7d73d0414bf32669e3d65cc02f73e75ef3516_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Pregunta:edit.html.twig";
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
