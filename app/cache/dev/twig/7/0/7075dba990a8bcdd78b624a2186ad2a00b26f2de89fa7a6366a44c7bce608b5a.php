<?php

/* UciBaseDatosBundle:Libro:show.html.twig */
class __TwigTemplate_7075dba990a8bcdd78b624a2186ad2a00b26f2de89fa7a6366a44c7bce608b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Libro:show.html.twig", 1);
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
        $__internal_818fcdab4421df3dc1206bb5cabc40fc0219036b40e66701bb35f1bba0614e01 = $this->env->getExtension("native_profiler");
        $__internal_818fcdab4421df3dc1206bb5cabc40fc0219036b40e66701bb35f1bba0614e01->enter($__internal_818fcdab4421df3dc1206bb5cabc40fc0219036b40e66701bb35f1bba0614e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Libro:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_818fcdab4421df3dc1206bb5cabc40fc0219036b40e66701bb35f1bba0614e01->leave($__internal_818fcdab4421df3dc1206bb5cabc40fc0219036b40e66701bb35f1bba0614e01_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c6111c1687ba48df70bc7c6756dbf36239b32dbf0f8be9b4b72b36164935659 = $this->env->getExtension("native_profiler");
        $__internal_9c6111c1687ba48df70bc7c6756dbf36239b32dbf0f8be9b4b72b36164935659->enter($__internal_9c6111c1687ba48df70bc7c6756dbf36239b32dbf0f8be9b4b72b36164935659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Libro</h1>

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
                <th>Titulo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Anio</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Espmbok</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "esPmbok", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("libro");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("libro_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_9c6111c1687ba48df70bc7c6756dbf36239b32dbf0f8be9b4b72b36164935659->leave($__internal_9c6111c1687ba48df70bc7c6756dbf36239b32dbf0f8be9b4b72b36164935659_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Libro:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  87 => 34,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
