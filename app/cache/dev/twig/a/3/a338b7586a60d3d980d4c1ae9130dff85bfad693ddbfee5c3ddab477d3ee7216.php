<?php

/* UciAsistenteAcademicaBundle:Menus:mantenimientoInicio.html.twig */
class __TwigTemplate_a338b7586a60d3d980d4c1ae9130dff85bfad693ddbfee5c3ddab477d3ee7216 extends Twig_Template
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
        $__internal_5964595ceaa93824fa10bdd1bea0b41e32185164c6f42b082b10968a5aecaf7f = $this->env->getExtension("native_profiler");
        $__internal_5964595ceaa93824fa10bdd1bea0b41e32185164c6f42b082b10968a5aecaf7f->enter($__internal_5964595ceaa93824fa10bdd1bea0b41e32185164c6f42b082b10968a5aecaf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:Menus:mantenimientoInicio.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "'><span>Inicio</span></a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_5964595ceaa93824fa10bdd1bea0b41e32185164c6f42b082b10968a5aecaf7f->leave($__internal_5964595ceaa93824fa10bdd1bea0b41e32185164c6f42b082b10968a5aecaf7f_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:Menus:mantenimientoInicio.html.twig";
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
