<?php

/* UciBaseDatosBundle:Respuesta:new.html.twig */
class __TwigTemplate_c19731bd1fcf9bf3383a83c2f5474394442d67c81902e0ccb0b5910ed0e133f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Respuesta:new.html.twig", 1);
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
        $__internal_d729db2ebd8b9edfcee45fdff35d846ba57bee6fc5c11e53ac122e610fff16c7 = $this->env->getExtension("native_profiler");
        $__internal_d729db2ebd8b9edfcee45fdff35d846ba57bee6fc5c11e53ac122e610fff16c7->enter($__internal_d729db2ebd8b9edfcee45fdff35d846ba57bee6fc5c11e53ac122e610fff16c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Respuesta:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d729db2ebd8b9edfcee45fdff35d846ba57bee6fc5c11e53ac122e610fff16c7->leave($__internal_d729db2ebd8b9edfcee45fdff35d846ba57bee6fc5c11e53ac122e610fff16c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7262d29553d89aee0dabb3801ff2947815e138c9d60b3bca8f9d972cfd14af7c = $this->env->getExtension("native_profiler");
        $__internal_7262d29553d89aee0dabb3801ff2947815e138c9d60b3bca8f9d972cfd14af7c->enter($__internal_7262d29553d89aee0dabb3801ff2947815e138c9d60b3bca8f9d972cfd14af7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Respuesta creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("respuesta");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_7262d29553d89aee0dabb3801ff2947815e138c9d60b3bca8f9d972cfd14af7c->leave($__internal_7262d29553d89aee0dabb3801ff2947815e138c9d60b3bca8f9d972cfd14af7c_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Respuesta:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
