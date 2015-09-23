<?php

/* UciBaseDatosBundle:Rol:show.html.twig */
class __TwigTemplate_c8ed4abb55fe05df8a68c2bf189f120229eb3ca7b93bceba3a709a5a606b25f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Rol:show.html.twig", 1);
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
        $__internal_538f80c0317a4efb8a0397ce82b9e65fd52581610b494f51e2a6ab9fc4cb2e19 = $this->env->getExtension("native_profiler");
        $__internal_538f80c0317a4efb8a0397ce82b9e65fd52581610b494f51e2a6ab9fc4cb2e19->enter($__internal_538f80c0317a4efb8a0397ce82b9e65fd52581610b494f51e2a6ab9fc4cb2e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Rol:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_538f80c0317a4efb8a0397ce82b9e65fd52581610b494f51e2a6ab9fc4cb2e19->leave($__internal_538f80c0317a4efb8a0397ce82b9e65fd52581610b494f51e2a6ab9fc4cb2e19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c9020437c3bf8e23a0014285827ac403f8a1dc7db38ca98d65c92f4621beee2 = $this->env->getExtension("native_profiler");
        $__internal_3c9020437c3bf8e23a0014285827ac403f8a1dc7db38ca98d65c92f4621beee2->enter($__internal_3c9020437c3bf8e23a0014285827ac403f8a1dc7db38ca98d65c92f4621beee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Rol</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("rol");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_3c9020437c3bf8e23a0014285827ac403f8a1dc7db38ca98d65c92f4621beee2->leave($__internal_3c9020437c3bf8e23a0014285827ac403f8a1dc7db38ca98d65c92f4621beee2_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Rol:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 30,  73 => 26,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
