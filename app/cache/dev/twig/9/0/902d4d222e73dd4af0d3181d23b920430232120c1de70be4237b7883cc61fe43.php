<?php

/* UciBaseDatosBundle:Pregunta:show.html.twig */
class __TwigTemplate_902d4d222e73dd4af0d3181d23b920430232120c1de70be4237b7883cc61fe43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Pregunta:show.html.twig", 1);
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
        $__internal_606f73f65b45c1137545265dbfa75c37b740f26998fbb955c41bf2b5ec0e529d = $this->env->getExtension("native_profiler");
        $__internal_606f73f65b45c1137545265dbfa75c37b740f26998fbb955c41bf2b5ec0e529d->enter($__internal_606f73f65b45c1137545265dbfa75c37b740f26998fbb955c41bf2b5ec0e529d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Pregunta:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_606f73f65b45c1137545265dbfa75c37b740f26998fbb955c41bf2b5ec0e529d->leave($__internal_606f73f65b45c1137545265dbfa75c37b740f26998fbb955c41bf2b5ec0e529d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf85bca0eb0ab99aedbc0a5b4d0437a6ca0c53a379537c3f4220146d354ca28c = $this->env->getExtension("native_profiler");
        $__internal_cf85bca0eb0ab99aedbc0a5b4d0437a6ca0c53a379537c3f4220146d354ca28c->enter($__internal_cf85bca0eb0ab99aedbc0a5b4d0437a6ca0c53a379537c3f4220146d354ca28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Pregunta</h1>

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
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("pregunta");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pregunta_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_cf85bca0eb0ab99aedbc0a5b4d0437a6ca0c53a379537c3f4220146d354ca28c->leave($__internal_cf85bca0eb0ab99aedbc0a5b4d0437a6ca0c53a379537c3f4220146d354ca28c_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Pregunta:show.html.twig";
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
