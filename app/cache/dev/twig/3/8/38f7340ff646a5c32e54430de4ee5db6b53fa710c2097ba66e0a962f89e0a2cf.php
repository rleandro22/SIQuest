<?php

/* UciAdministradorBundle:Menus:mantenimientoLibro.html.twig */
class __TwigTemplate_38f7340ff646a5c32e54430de4ee5db6b53fa710c2097ba66e0a962f89e0a2cf extends Twig_Template
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
        $__internal_f9737891bb30e00ca101797743c76d71c307091e507c1fa05e7e1752ad8bc068 = $this->env->getExtension("native_profiler");
        $__internal_f9737891bb30e00ca101797743c76d71c307091e507c1fa05e7e1752ad8bc068->enter($__internal_f9737891bb30e00ca101797743c76d71c307091e507c1fa05e7e1752ad8bc068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoLibro.html.twig"));

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
               </ul>
        </div>
    </div>
</div>
";
        
        $__internal_f9737891bb30e00ca101797743c76d71c307091e507c1fa05e7e1752ad8bc068->leave($__internal_f9737891bb30e00ca101797743c76d71c307091e507c1fa05e7e1752ad8bc068_prof);

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
        return array (  37 => 11,  33 => 10,  22 => 1,);
    }
}
