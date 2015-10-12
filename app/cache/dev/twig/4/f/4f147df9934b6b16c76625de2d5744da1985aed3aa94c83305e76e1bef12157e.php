<?php

/* UciBaseDatosBundle:Capitulo:show.html.twig */
class __TwigTemplate_4f147df9934b6b16c76625de2d5744da1985aed3aa94c83305e76e1bef12157e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Capitulo:show.html.twig", 1);
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
        $__internal_a8882439850f328cd0d18c7b4b92fb977cd2866ea2241fc3fc87169f11532f24 = $this->env->getExtension("native_profiler");
        $__internal_a8882439850f328cd0d18c7b4b92fb977cd2866ea2241fc3fc87169f11532f24->enter($__internal_a8882439850f328cd0d18c7b4b92fb977cd2866ea2241fc3fc87169f11532f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Capitulo:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8882439850f328cd0d18c7b4b92fb977cd2866ea2241fc3fc87169f11532f24->leave($__internal_a8882439850f328cd0d18c7b4b92fb977cd2866ea2241fc3fc87169f11532f24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_906985f40ee1d984ab45f53e700001ce28e5c4abcbad6f1a1937afc5a9aac82e = $this->env->getExtension("native_profiler");
        $__internal_906985f40ee1d984ab45f53e700001ce28e5c4abcbad6f1a1937afc5a9aac82e->enter($__internal_906985f40ee1d984ab45f53e700001ce28e5c4abcbad6f1a1937afc5a9aac82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Capitulo</h1>

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
                <th>Numerocapitulo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numeroCapitulo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombrecapitulo</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreCapitulo", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("capitulo");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("capitulo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_906985f40ee1d984ab45f53e700001ce28e5c4abcbad6f1a1937afc5a9aac82e->leave($__internal_906985f40ee1d984ab45f53e700001ce28e5c4abcbad6f1a1937afc5a9aac82e_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Capitulo:show.html.twig";
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
