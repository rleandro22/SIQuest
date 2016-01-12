<?php

/* UciAdministradorBundle:Menus:mantenimientoAtributosPmbok.html.twig */
class __TwigTemplate_0b2cb5cee45c14841a53e39aad70098cf72b96eaff479d80b2483d8d479136b4 extends Twig_Template
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
        $__internal_55e62c4c16914dda923533ca47419f98f80e84eba7b5fc7b5aee930d002c5cec = $this->env->getExtension("native_profiler");
        $__internal_55e62c4c16914dda923533ca47419f98f80e84eba7b5fc7b5aee930d002c5cec->enter($__internal_55e62c4c16914dda923533ca47419f98f80e84eba7b5fc7b5aee930d002c5cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoAtributosPmbok.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceatrpmbok");
        echo "'><span>Atributos</span></a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_55e62c4c16914dda923533ca47419f98f80e84eba7b5fc7b5aee930d002c5cec->leave($__internal_55e62c4c16914dda923533ca47419f98f80e84eba7b5fc7b5aee930d002c5cec_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoAtributosPmbok.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  22 => 1,);
    }
}
