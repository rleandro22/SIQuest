<?php

/* UciBaseDatosBundle:Generacion:show.html.twig */
class __TwigTemplate_d2a3a35f1be2680032ed25d678af779811592de5949babef916706707c5d14aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Generacion:show.html.twig", 1);
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
        $__internal_c0c62033050d6ac6a93241230bae1bb004f03f7389680b16c2883c2e1c18f3b7 = $this->env->getExtension("native_profiler");
        $__internal_c0c62033050d6ac6a93241230bae1bb004f03f7389680b16c2883c2e1c18f3b7->enter($__internal_c0c62033050d6ac6a93241230bae1bb004f03f7389680b16c2883c2e1c18f3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Generacion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0c62033050d6ac6a93241230bae1bb004f03f7389680b16c2883c2e1c18f3b7->leave($__internal_c0c62033050d6ac6a93241230bae1bb004f03f7389680b16c2883c2e1c18f3b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_582039b5a52ef4dbaa68737c34f33c6b00a9cd229f1c1d7b781aad580ca762a1 = $this->env->getExtension("native_profiler");
        $__internal_582039b5a52ef4dbaa68737c34f33c6b00a9cd229f1c1d7b781aad580ca762a1->enter($__internal_582039b5a52ef4dbaa68737c34f33c6b00a9cd229f1c1d7b781aad580ca762a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Generacion</h1>

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
                <th>Generacion</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "generacion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("generacion");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_582039b5a52ef4dbaa68737c34f33c6b00a9cd229f1c1d7b781aad580ca762a1->leave($__internal_582039b5a52ef4dbaa68737c34f33c6b00a9cd229f1c1d7b781aad580ca762a1_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Generacion:show.html.twig";
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
