<?php

/* UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig */
class __TwigTemplate_6a871d85263d672ea92f48e306120c9c8679b9f4bd5e58f9107aa382b8ccb74a extends Twig_Template
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
        $__internal_fec195aa6103b3de06d3ad04920dfa47bc8eaa7feb25a6a022ff3190043f4b55 = $this->env->getExtension("native_profiler");
        $__internal_fec195aa6103b3de06d3ad04920dfa47bc8eaa7feb25a6a022ff3190043f4b55->enter($__internal_fec195aa6103b3de06d3ad04920dfa47bc8eaa7feb25a6a022ff3190043f4b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig"));

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
        
        $__internal_fec195aa6103b3de06d3ad04920dfa47bc8eaa7feb25a6a022ff3190043f4b55->leave($__internal_fec195aa6103b3de06d3ad04920dfa47bc8eaa7feb25a6a022ff3190043f4b55_prof);

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
