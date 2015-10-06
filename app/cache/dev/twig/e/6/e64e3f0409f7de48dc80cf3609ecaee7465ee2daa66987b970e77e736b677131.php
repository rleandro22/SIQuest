<?php

/* UciBaseDatosBundle:Curso:show.html.twig */
class __TwigTemplate_e64e3f0409f7de48dc80cf3609ecaee7465ee2daa66987b970e77e736b677131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Curso:show.html.twig", 1);
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
        $__internal_88386dd0f09e910e059f68bc1b6eb76a093bedd394062a630a836f875ae37305 = $this->env->getExtension("native_profiler");
        $__internal_88386dd0f09e910e059f68bc1b6eb76a093bedd394062a630a836f875ae37305->enter($__internal_88386dd0f09e910e059f68bc1b6eb76a093bedd394062a630a836f875ae37305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Curso:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88386dd0f09e910e059f68bc1b6eb76a093bedd394062a630a836f875ae37305->leave($__internal_88386dd0f09e910e059f68bc1b6eb76a093bedd394062a630a836f875ae37305_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_185853406625011c77f4ba4d54c612270e7cad1fb1912b8d9d8c54bcd0637f2b = $this->env->getExtension("native_profiler");
        $__internal_185853406625011c77f4ba4d54c612270e7cad1fb1912b8d9d8c54bcd0637f2b->enter($__internal_185853406625011c77f4ba4d54c612270e7cad1fb1912b8d9d8c54bcd0637f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Curso</h1>

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
                <th>Nombrecurso</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombrecurso", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("curso");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_185853406625011c77f4ba4d54c612270e7cad1fb1912b8d9d8c54bcd0637f2b->leave($__internal_185853406625011c77f4ba4d54c612270e7cad1fb1912b8d9d8c54bcd0637f2b_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Curso:show.html.twig";
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
