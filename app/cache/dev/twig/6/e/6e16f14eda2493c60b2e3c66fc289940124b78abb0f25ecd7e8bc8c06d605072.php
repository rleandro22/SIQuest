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
        $__internal_a6ed4c14e6f03b53547b43e13018a559d7b925034c7ec08d01bed151dce1136a = $this->env->getExtension("native_profiler");
        $__internal_a6ed4c14e6f03b53547b43e13018a559d7b925034c7ec08d01bed151dce1136a->enter($__internal_a6ed4c14e6f03b53547b43e13018a559d7b925034c7ec08d01bed151dce1136a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig"));

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
                <li><a data-toggle=\"modal\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_administrador_eligeTipoPregunta");
        echo "\" data-target=\"#myModal\"><span>Nueva pregunta</span></a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_a6ed4c14e6f03b53547b43e13018a559d7b925034c7ec08d01bed151dce1136a->leave($__internal_a6ed4c14e6f03b53547b43e13018a559d7b925034c7ec08d01bed151dce1136a_prof);

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
        return array (  37 => 11,  33 => 10,  22 => 1,);
    }
}
