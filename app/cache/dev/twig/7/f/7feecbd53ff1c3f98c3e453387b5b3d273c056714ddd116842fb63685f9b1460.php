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
        $__internal_ea3c3c783f9e734f550b03601d277057fec4041ac19a0dab1add933c10bd2f5e = $this->env->getExtension("native_profiler");
        $__internal_ea3c3c783f9e734f550b03601d277057fec4041ac19a0dab1add933c10bd2f5e->enter($__internal_ea3c3c783f9e734f550b03601d277057fec4041ac19a0dab1add933c10bd2f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoSolicitud.html.twig"));

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
                <li><a data-toggle=\"modal\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_administrador_addsolicitud");
        echo "\" data-target=\"#myModal\">Nueva solicitud</a></li>
            </ul>
        </div>
    </div>
</div>

";
        
        $__internal_ea3c3c783f9e734f550b03601d277057fec4041ac19a0dab1add933c10bd2f5e->leave($__internal_ea3c3c783f9e734f550b03601d277057fec4041ac19a0dab1add933c10bd2f5e_prof);

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
        return array (  37 => 11,  33 => 10,  22 => 1,);
    }
}
