<?php

/* UciBaseDatosBundle:Respuesta:show.html.twig */
class __TwigTemplate_a52632b670aa4a16442d486ab4e5175d39faff31312e5069b5daa5deb8c97bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Respuesta:show.html.twig", 1);
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
        $__internal_8bcb5f869571d8a5fc6fd700c67322b2750fade3da2fbd8b13b75938ca6132d3 = $this->env->getExtension("native_profiler");
        $__internal_8bcb5f869571d8a5fc6fd700c67322b2750fade3da2fbd8b13b75938ca6132d3->enter($__internal_8bcb5f869571d8a5fc6fd700c67322b2750fade3da2fbd8b13b75938ca6132d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Respuesta:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bcb5f869571d8a5fc6fd700c67322b2750fade3da2fbd8b13b75938ca6132d3->leave($__internal_8bcb5f869571d8a5fc6fd700c67322b2750fade3da2fbd8b13b75938ca6132d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7a24775c56665710575cdf0b1387ba756d2c1cfd4e59bc6af62426dc070d422 = $this->env->getExtension("native_profiler");
        $__internal_d7a24775c56665710575cdf0b1387ba756d2c1cfd4e59bc6af62426dc070d422->enter($__internal_d7a24775c56665710575cdf0b1387ba756d2c1cfd4e59bc6af62426dc070d422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Respuesta</h1>

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
                <th>Textorespuesta</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "textoRespuesta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Textoretroalimentacion</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "textoRetroalimentacion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("respuesta");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("respuesta_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_d7a24775c56665710575cdf0b1387ba756d2c1cfd4e59bc6af62426dc070d422->leave($__internal_d7a24775c56665710575cdf0b1387ba756d2c1cfd4e59bc6af62426dc070d422_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Respuesta:show.html.twig";
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
