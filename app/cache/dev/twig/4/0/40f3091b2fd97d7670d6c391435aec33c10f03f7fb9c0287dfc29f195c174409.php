<?php

/* UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig */
class __TwigTemplate_40f3091b2fd97d7670d6c391435aec33c10f03f7fb9c0287dfc29f195c174409 extends Twig_Template
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
        $__internal_fe260a5666667bbaee7ac410a915db484c25de52a421031a9c2675f063730631 = $this->env->getExtension("native_profiler");
        $__internal_fe260a5666667bbaee7ac410a915db484c25de52a421031a9c2675f063730631->enter($__internal_fe260a5666667bbaee7ac410a915db484c25de52a421031a9c2675f063730631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig"));

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
                <li class='active has-sub'><a href='#'><span>Ingresar</span></a>
                    <ul>
                        <li><a href='#'><span>PMBok</span></a>
                        </li>
                        <li><a href='#'><span>Otro</span></a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_fe260a5666667bbaee7ac410a915db484c25de52a421031a9c2675f063730631->leave($__internal_fe260a5666667bbaee7ac410a915db484c25de52a421031a9c2675f063730631_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig";
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
