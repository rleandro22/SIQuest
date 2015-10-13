<?php

/* UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig */
class __TwigTemplate_6e16f14eda2493c60b2e3c66fc289940124b78abb0f25ecd7e8bc8c06d605072 extends Twig_Template
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
        $__internal_ee6d48fa779938ead3c491033d85fc61ebdddccb0aa46412a05ef6094a961f09 = $this->env->getExtension("native_profiler");
        $__internal_ee6d48fa779938ead3c491033d85fc61ebdddccb0aa46412a05ef6094a961f09->enter($__internal_ee6d48fa779938ead3c491033d85fc61ebdddccb0aa46412a05ef6094a961f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "'><span>Lista de preguntas</span></a></li>
                <li class='active has-sub'><a href='#'><span>Nueva pregunta</span></a>
                    <ul>
                        <li><a href='#'><span>PMBok</span></a></li>
                        <li class='last'><a href='#'><span>Otro</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_ee6d48fa779938ead3c491033d85fc61ebdddccb0aa46412a05ef6094a961f09->leave($__internal_ee6d48fa779938ead3c491033d85fc61ebdddccb0aa46412a05ef6094a961f09_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig";
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
