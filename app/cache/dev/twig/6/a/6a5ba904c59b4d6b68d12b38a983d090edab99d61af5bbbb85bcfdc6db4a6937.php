<?php

/* UciBaseDatosBundle:TipoPrueba:show.html.twig */
class __TwigTemplate_6a5ba904c59b4d6b68d12b38a983d090edab99d61af5bbbb85bcfdc6db4a6937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:TipoPrueba:show.html.twig", 1);
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
        $__internal_067c6442fb394dc5fd4937d2c3c1fe896f827507b415b978fdca85b61debcc29 = $this->env->getExtension("native_profiler");
        $__internal_067c6442fb394dc5fd4937d2c3c1fe896f827507b415b978fdca85b61debcc29->enter($__internal_067c6442fb394dc5fd4937d2c3c1fe896f827507b415b978fdca85b61debcc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:TipoPrueba:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_067c6442fb394dc5fd4937d2c3c1fe896f827507b415b978fdca85b61debcc29->leave($__internal_067c6442fb394dc5fd4937d2c3c1fe896f827507b415b978fdca85b61debcc29_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43100a82fc2b510d7f3d74d313229c6c0d828206b28164619fefb7e76a00f839 = $this->env->getExtension("native_profiler");
        $__internal_43100a82fc2b510d7f3d74d313229c6c0d828206b28164619fefb7e76a00f839->enter($__internal_43100a82fc2b510d7f3d74d313229c6c0d828206b28164619fefb7e76a00f839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TipoPrueba</h1>

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
                <th>Nombretipo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreTipo", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("tipoprueba");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoprueba_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_43100a82fc2b510d7f3d74d313229c6c0d828206b28164619fefb7e76a00f839->leave($__internal_43100a82fc2b510d7f3d74d313229c6c0d828206b28164619fefb7e76a00f839_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:TipoPrueba:show.html.twig";
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
