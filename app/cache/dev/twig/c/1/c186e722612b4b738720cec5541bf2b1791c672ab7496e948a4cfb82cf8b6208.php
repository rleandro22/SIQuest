<?php

/* UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig */
class __TwigTemplate_c186e722612b4b738720cec5541bf2b1791c672ab7496e948a4cfb82cf8b6208 extends Twig_Template
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
        $__internal_f7b6ae690620a13cf548e87cdae6273fb3a4438cfbcd1b13662b4ff5022994b0 = $this->env->getExtension("native_profiler");
        $__internal_f7b6ae690620a13cf548e87cdae6273fb3a4438cfbcd1b13662b4ff5022994b0->enter($__internal_f7b6ae690620a13cf548e87cdae6273fb3a4438cfbcd1b13662b4ff5022994b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "'><span>Lista de usuarios</span></a></li>
                <li><a href='";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_administrador_adduser");
        echo "'><span>Nuevo usuario</span></a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_f7b6ae690620a13cf548e87cdae6273fb3a4438cfbcd1b13662b4ff5022994b0->leave($__internal_f7b6ae690620a13cf548e87cdae6273fb3a4438cfbcd1b13662b4ff5022994b0_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig";
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
