<?php

/* UciBaseDatosBundle:Idiomas:show.html.twig */
class __TwigTemplate_7b72940a3e75e2c744ab6576a7dea44a71192d6e3f794eef7caa2aaf58b7f95c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Idiomas:show.html.twig", 1);
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
        $__internal_7148668807c4527917280ff958931e98654f24afbb5752696cbae9c2a901d841 = $this->env->getExtension("native_profiler");
        $__internal_7148668807c4527917280ff958931e98654f24afbb5752696cbae9c2a901d841->enter($__internal_7148668807c4527917280ff958931e98654f24afbb5752696cbae9c2a901d841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Idiomas:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7148668807c4527917280ff958931e98654f24afbb5752696cbae9c2a901d841->leave($__internal_7148668807c4527917280ff958931e98654f24afbb5752696cbae9c2a901d841_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_04cd217e52d03677a7e5289e797fd104d53106bd6f5e1f367c72610ef4d01a1d = $this->env->getExtension("native_profiler");
        $__internal_04cd217e52d03677a7e5289e797fd104d53106bd6f5e1f367c72610ef4d01a1d->enter($__internal_04cd217e52d03677a7e5289e797fd104d53106bd6f5e1f367c72610ef4d01a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Idiomas</h1>

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
                <th>Codigolenguaje</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codigoLenguaje", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombrelenguaje</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreLenguaje", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("idiomas");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("idiomas_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_04cd217e52d03677a7e5289e797fd104d53106bd6f5e1f367c72610ef4d01a1d->leave($__internal_04cd217e52d03677a7e5289e797fd104d53106bd6f5e1f367c72610ef4d01a1d_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Idiomas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  80 => 30,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
