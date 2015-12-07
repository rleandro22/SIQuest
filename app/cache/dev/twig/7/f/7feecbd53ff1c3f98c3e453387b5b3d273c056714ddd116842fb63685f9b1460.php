<?php

/* UciAdministradorBundle:Menus:mantenimientoSolicitud.html.twig */
class __TwigTemplate_7feecbd53ff1c3f98c3e453387b5b3d273c056714ddd116842fb63685f9b1460 extends Twig_Template
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
        $__internal_30e38c7b2bbc21b6bc81ba965295e76965b49602693f65e7a723b707a0efa926 = $this->env->getExtension("native_profiler");
        $__internal_30e38c7b2bbc21b6bc81ba965295e76965b49602693f65e7a723b707a0efa926->enter($__internal_30e38c7b2bbc21b6bc81ba965295e76965b49602693f65e7a723b707a0efa926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoSolicitud.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicesolicitudes");
        echo "'><span>Lista de solicitudes</span></a></li>
                <li><a href=''><span>Nueva Solicitud</span></a></li>
            </ul>
        </div>
    </div>
</div>

";
        
        $__internal_30e38c7b2bbc21b6bc81ba965295e76965b49602693f65e7a723b707a0efa926->leave($__internal_30e38c7b2bbc21b6bc81ba965295e76965b49602693f65e7a723b707a0efa926_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoSolicitud.html.twig";
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
