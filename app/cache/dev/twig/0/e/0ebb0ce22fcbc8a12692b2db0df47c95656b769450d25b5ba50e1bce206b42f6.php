<?php

/* UciAdministradorBundle:Menus:mantenimientoAtributosPmbok.html.twig */
class __TwigTemplate_0ebb0ce22fcbc8a12692b2db0df47c95656b769450d25b5ba50e1bce206b42f6 extends Twig_Template
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
        $__internal_6ff71c0d5bfb45e3e219b8e57f7e33548eb714dd694ae2f55e29886d14a685a1 = $this->env->getExtension("native_profiler");
        $__internal_6ff71c0d5bfb45e3e219b8e57f7e33548eb714dd694ae2f55e29886d14a685a1->enter($__internal_6ff71c0d5bfb45e3e219b8e57f7e33548eb714dd694ae2f55e29886d14a685a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoAtributosPmbok.html.twig"));

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
        
        $__internal_6ff71c0d5bfb45e3e219b8e57f7e33548eb714dd694ae2f55e29886d14a685a1->leave($__internal_6ff71c0d5bfb45e3e219b8e57f7e33548eb714dd694ae2f55e29886d14a685a1_prof);

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
