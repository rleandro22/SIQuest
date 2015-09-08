<?php

/* UciDataBaseBundle:Rol:show.html.twig */
class __TwigTemplate_80f2477edb8982df99cea885dae9a64abb8be53d47780b734951b91b2a6a1a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciDataBaseBundle:Rol:show.html.twig", 1);
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
        $__internal_dd1545fceb2a7274023b5a0060848017f600529cc5766a7cc27ed318a81a86fc = $this->env->getExtension("native_profiler");
        $__internal_dd1545fceb2a7274023b5a0060848017f600529cc5766a7cc27ed318a81a86fc->enter($__internal_dd1545fceb2a7274023b5a0060848017f600529cc5766a7cc27ed318a81a86fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciDataBaseBundle:Rol:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd1545fceb2a7274023b5a0060848017f600529cc5766a7cc27ed318a81a86fc->leave($__internal_dd1545fceb2a7274023b5a0060848017f600529cc5766a7cc27ed318a81a86fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5281892f9aa613fccd2e129b25321fb32b9170278a5615df2a637009e86673f = $this->env->getExtension("native_profiler");
        $__internal_f5281892f9aa613fccd2e129b25321fb32b9170278a5615df2a637009e86673f->enter($__internal_f5281892f9aa613fccd2e129b25321fb32b9170278a5615df2a637009e86673f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Rol</h1>

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
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("rol");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        
        $__internal_f5281892f9aa613fccd2e129b25321fb32b9170278a5615df2a637009e86673f->leave($__internal_f5281892f9aa613fccd2e129b25321fb32b9170278a5615df2a637009e86673f_prof);

    }

    public function getTemplateName()
    {
        return "UciDataBaseBundle:Rol:show.html.twig";
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
