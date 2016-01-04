<?php

/* UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig */
class __TwigTemplate_f5bc6506aa0193ca06cb5663e69f342a2027d7865602c4dc72b492d17ae841df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0d759d520eca74e914d77a49beb5880d2621a3b972a793fd6dd97458fe8f8d9 = $this->env->getExtension("native_profiler");
        $__internal_f0d759d520eca74e914d77a49beb5880d2621a3b972a793fd6dd97458fe8f8d9->enter($__internal_f0d759d520eca74e914d77a49beb5880d2621a3b972a793fd6dd97458fe8f8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig"));

        // line 1
        echo "<div class=\"row widget\">
    <div class=\"col-xs-12\">
        <h4>Menu de mantenimiento</h4>
    </div>
</div>
<div class=\"row widget\">
    <div class=\"col-xs-12\">
        <div id='cssmenu'>
            <ul>
                <li><a href='";
        // line 10
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "'><span>Lista de cuestionarios</span></a></li>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_administrador_registrarcuestionario");
        echo "\"><span>Nuevo cuestionario</span></a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_f0d759d520eca74e914d77a49beb5880d2621a3b972a793fd6dd97458fe8f8d9->leave($__internal_f0d759d520eca74e914d77a49beb5880d2621a3b972a793fd6dd97458fe8f8d9_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  33 => 10,  22 => 1,);
    }
}
