<?php

/* UciAdministradorBundle:Menus:mantenimientoSolicitud.html.twig */
class __TwigTemplate_1fac8fc622f7556d6e30616707edb23e657756dd43fb83a70371acc3da6f7c2c extends Twig_Template
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
        $__internal_8bf616af7a47de91082bfdeef2fa800d6a301dbf399a8cc346425f2504df47f2 = $this->env->getExtension("native_profiler");
        $__internal_8bf616af7a47de91082bfdeef2fa800d6a301dbf399a8cc346425f2504df47f2->enter($__internal_8bf616af7a47de91082bfdeef2fa800d6a301dbf399a8cc346425f2504df47f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoSolicitud.html.twig"));

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
        
        $__internal_8bf616af7a47de91082bfdeef2fa800d6a301dbf399a8cc346425f2504df47f2->leave($__internal_8bf616af7a47de91082bfdeef2fa800d6a301dbf399a8cc346425f2504df47f2_prof);

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
