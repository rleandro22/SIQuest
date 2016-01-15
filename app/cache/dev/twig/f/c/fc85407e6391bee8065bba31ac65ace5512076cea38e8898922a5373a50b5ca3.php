<?php

/* UciAsistenteAcademicaBundle:Menus:mantenimientoObservacion.html.twig */
class __TwigTemplate_fc85407e6391bee8065bba31ac65ace5512076cea38e8898922a5373a50b5ca3 extends Twig_Template
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
        $__internal_d5091c147692857be6e5f7b902e3b4aea443da4ac9ec693ca2c0953d474302ac = $this->env->getExtension("native_profiler");
        $__internal_d5091c147692857be6e5f7b902e3b4aea443da4ac9ec693ca2c0953d474302ac->enter($__internal_d5091c147692857be6e5f7b902e3b4aea443da4ac9ec693ca2c0953d474302ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:Menus:mantenimientoObservacion.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indiceobservaciones");
        echo "'><span>Observaciones</span></a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_d5091c147692857be6e5f7b902e3b4aea443da4ac9ec693ca2c0953d474302ac->leave($__internal_d5091c147692857be6e5f7b902e3b4aea443da4ac9ec693ca2c0953d474302ac_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:Menus:mantenimientoObservacion.html.twig";
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
