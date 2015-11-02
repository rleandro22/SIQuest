<?php

/* UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig */
class __TwigTemplate_f9299b7b133231c9813040df068b4621e7757043504c309b9a4321bcb9bf628f extends Twig_Template
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
        $__internal_2cb4e48d149cf5d7a35b020b79ecd824aa25b0045f555e6040a4e1fdd2a9b6ac = $this->env->getExtension("native_profiler");
        $__internal_2cb4e48d149cf5d7a35b020b79ecd824aa25b0045f555e6040a4e1fdd2a9b6ac->enter($__internal_2cb4e48d149cf5d7a35b020b79ecd824aa25b0045f555e6040a4e1fdd2a9b6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig"));

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
        
        $__internal_2cb4e48d149cf5d7a35b020b79ecd824aa25b0045f555e6040a4e1fdd2a9b6ac->leave($__internal_2cb4e48d149cf5d7a35b020b79ecd824aa25b0045f555e6040a4e1fdd2a9b6ac_prof);

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
