<?php

/* UciAdministradorBundle:Menus:mantenimientoObservacion.html.twig */
class __TwigTemplate_8e28fc611c92dae7e00f60e129964e5ae36dcb7c05959d6c695452a88896b38a extends Twig_Template
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
        $__internal_03a02b9e34e95ab00e7ff7aba060959deb43c0efcbd0e00c203838678b6b15c6 = $this->env->getExtension("native_profiler");
        $__internal_03a02b9e34e95ab00e7ff7aba060959deb43c0efcbd0e00c203838678b6b15c6->enter($__internal_03a02b9e34e95ab00e7ff7aba060959deb43c0efcbd0e00c203838678b6b15c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoObservacion.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceobservaciones");
        echo "'><span>Observaciones</span></a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_03a02b9e34e95ab00e7ff7aba060959deb43c0efcbd0e00c203838678b6b15c6->leave($__internal_03a02b9e34e95ab00e7ff7aba060959deb43c0efcbd0e00c203838678b6b15c6_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoObservacion.html.twig";
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
