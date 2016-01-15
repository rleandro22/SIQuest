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
        $__internal_ffcd70d875057e0d16b878e563959948a10a98f5aa23c7038616c5fd18c002fa = $this->env->getExtension("native_profiler");
        $__internal_ffcd70d875057e0d16b878e563959948a10a98f5aa23c7038616c5fd18c002fa->enter($__internal_ffcd70d875057e0d16b878e563959948a10a98f5aa23c7038616c5fd18c002fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:Menus:mantenimientoInicio.html.twig"));

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
        
        $__internal_ffcd70d875057e0d16b878e563959948a10a98f5aa23c7038616c5fd18c002fa->leave($__internal_ffcd70d875057e0d16b878e563959948a10a98f5aa23c7038616c5fd18c002fa_prof);

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
