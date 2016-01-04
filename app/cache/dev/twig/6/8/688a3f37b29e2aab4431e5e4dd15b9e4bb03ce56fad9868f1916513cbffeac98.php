<?php

/* UciAsistenteAcademicaBundle:Menus:mantenimientoCuestionario.html.twig */
class __TwigTemplate_688a3f37b29e2aab4431e5e4dd15b9e4bb03ce56fad9868f1916513cbffeac98 extends Twig_Template
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
        $__internal_38a6a46270a5286f169b2f5f1032bfc552c3639a4adfbad48a7df16365b3e253 = $this->env->getExtension("native_profiler");
        $__internal_38a6a46270a5286f169b2f5f1032bfc552c3639a4adfbad48a7df16365b3e253->enter($__internal_38a6a46270a5286f169b2f5f1032bfc552c3639a4adfbad48a7df16365b3e253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:Menus:mantenimientoCuestionario.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicecuestionario");
        echo "'><span>Lista de cuestionarios</span></a></li>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_registrarcuestionario");
        echo "\"><span>Nuevo cuestionario</span></a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_38a6a46270a5286f169b2f5f1032bfc552c3639a4adfbad48a7df16365b3e253->leave($__internal_38a6a46270a5286f169b2f5f1032bfc552c3639a4adfbad48a7df16365b3e253_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:Menus:mantenimientoCuestionario.html.twig";
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
