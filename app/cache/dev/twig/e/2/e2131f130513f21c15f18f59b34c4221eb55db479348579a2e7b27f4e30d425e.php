<?php

/* UciAdministradorBundle:Menus:mantenimientoLibro.html.twig */
class __TwigTemplate_e2131f130513f21c15f18f59b34c4221eb55db479348579a2e7b27f4e30d425e extends Twig_Template
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
        $__internal_cf06c9c85989f11e409290783c1d6366b903c8bf75f3e8f3bb684c1eb4095b7a = $this->env->getExtension("native_profiler");
        $__internal_cf06c9c85989f11e409290783c1d6366b903c8bf75f3e8f3bb684c1eb4095b7a->enter($__internal_cf06c9c85989f11e409290783c1d6366b903c8bf75f3e8f3bb684c1eb4095b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoLibro.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "'><span>Lista de libros</span></a></li>
                <li><a href='";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_administrador_nuevolibro");
        echo "'><span>Nuevo libro</span></a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceatrpmbok");
        echo "\">Atributos PMBok</a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_cf06c9c85989f11e409290783c1d6366b903c8bf75f3e8f3bb684c1eb4095b7a->leave($__internal_cf06c9c85989f11e409290783c1d6366b903c8bf75f3e8f3bb684c1eb4095b7a_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoLibro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  37 => 11,  33 => 10,  22 => 1,);
    }
}
