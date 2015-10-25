<?php

/* UciBaseDatosBundle:AsistenteAcademica:show.html.twig */
class __TwigTemplate_dbfbb7e1ed6fd4604f5db514c1d27710e6b5647c655fddfa48cd4b3ad3f313de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:AsistenteAcademica:show.html.twig", 1);
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
        $__internal_8bc0b998b865847415f609fb3013ec375a3b17d2e68ed473c08886fc69924b11 = $this->env->getExtension("native_profiler");
        $__internal_8bc0b998b865847415f609fb3013ec375a3b17d2e68ed473c08886fc69924b11->enter($__internal_8bc0b998b865847415f609fb3013ec375a3b17d2e68ed473c08886fc69924b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:AsistenteAcademica:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bc0b998b865847415f609fb3013ec375a3b17d2e68ed473c08886fc69924b11->leave($__internal_8bc0b998b865847415f609fb3013ec375a3b17d2e68ed473c08886fc69924b11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b9357806585ad4366f4018928e45908fb433d0972a1183a41b08d40898a418b = $this->env->getExtension("native_profiler");
        $__internal_2b9357806585ad4366f4018928e45908fb433d0972a1183a41b08d40898a418b->enter($__internal_2b9357806585ad4366f4018928e45908fb433d0972a1183a41b08d40898a418b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>AsistenteAcademica</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("asistenteacademica");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asistenteacademica_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_2b9357806585ad4366f4018928e45908fb433d0972a1183a41b08d40898a418b->leave($__internal_2b9357806585ad4366f4018928e45908fb433d0972a1183a41b08d40898a418b_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:AsistenteAcademica:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  66 => 22,  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
