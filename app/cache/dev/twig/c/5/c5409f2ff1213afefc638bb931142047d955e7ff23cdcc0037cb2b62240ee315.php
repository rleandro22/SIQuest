<?php

/* UciBaseDatosBundle:Pmbok:show.html.twig */
class __TwigTemplate_c5409f2ff1213afefc638bb931142047d955e7ff23cdcc0037cb2b62240ee315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Pmbok:show.html.twig", 1);
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
        $__internal_59ff632f98eae1e7c158ad73272e749b97d734645cd1508bb4d5d4ec8bba1668 = $this->env->getExtension("native_profiler");
        $__internal_59ff632f98eae1e7c158ad73272e749b97d734645cd1508bb4d5d4ec8bba1668->enter($__internal_59ff632f98eae1e7c158ad73272e749b97d734645cd1508bb4d5d4ec8bba1668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Pmbok:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59ff632f98eae1e7c158ad73272e749b97d734645cd1508bb4d5d4ec8bba1668->leave($__internal_59ff632f98eae1e7c158ad73272e749b97d734645cd1508bb4d5d4ec8bba1668_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19c49aa8b9d82c7886c5f0c99bb754df899f95989e275ae80b084d8b19e3c404 = $this->env->getExtension("native_profiler");
        $__internal_19c49aa8b9d82c7886c5f0c99bb754df899f95989e275ae80b084d8b19e3c404->enter($__internal_19c49aa8b9d82c7886c5f0c99bb754df899f95989e275ae80b084d8b19e3c404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pmbok</h1>

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
                <th>Edicion</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "edicion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("pmbok");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pmbok_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_19c49aa8b9d82c7886c5f0c99bb754df899f95989e275ae80b084d8b19e3c404->leave($__internal_19c49aa8b9d82c7886c5f0c99bb754df899f95989e275ae80b084d8b19e3c404_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Pmbok:show.html.twig";
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
