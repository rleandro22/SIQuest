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
        $__internal_c802efcd230f6d3fc426fda549e2a2b1399d5c13a05ba3ed3ed98708ae38baff = $this->env->getExtension("native_profiler");
        $__internal_c802efcd230f6d3fc426fda549e2a2b1399d5c13a05ba3ed3ed98708ae38baff->enter($__internal_c802efcd230f6d3fc426fda549e2a2b1399d5c13a05ba3ed3ed98708ae38baff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig"));

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
        
        $__internal_c802efcd230f6d3fc426fda549e2a2b1399d5c13a05ba3ed3ed98708ae38baff->leave($__internal_c802efcd230f6d3fc426fda549e2a2b1399d5c13a05ba3ed3ed98708ae38baff_prof);

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
