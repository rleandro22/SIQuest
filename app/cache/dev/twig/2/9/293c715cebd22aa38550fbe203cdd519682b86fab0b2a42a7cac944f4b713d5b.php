<?php

/* UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig */
class __TwigTemplate_293c715cebd22aa38550fbe203cdd519682b86fab0b2a42a7cac944f4b713d5b extends Twig_Template
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
        $__internal_e9a0b247f09ab249f5ff3dfc8a7c5dbd57f1bbe1ac2a009a5ffd639a08080bb7 = $this->env->getExtension("native_profiler");
        $__internal_e9a0b247f09ab249f5ff3dfc8a7c5dbd57f1bbe1ac2a009a5ffd639a08080bb7->enter($__internal_e9a0b247f09ab249f5ff3dfc8a7c5dbd57f1bbe1ac2a009a5ffd639a08080bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig"));

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
        
        $__internal_e9a0b247f09ab249f5ff3dfc8a7c5dbd57f1bbe1ac2a009a5ffd639a08080bb7->leave($__internal_e9a0b247f09ab249f5ff3dfc8a7c5dbd57f1bbe1ac2a009a5ffd639a08080bb7_prof);

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
