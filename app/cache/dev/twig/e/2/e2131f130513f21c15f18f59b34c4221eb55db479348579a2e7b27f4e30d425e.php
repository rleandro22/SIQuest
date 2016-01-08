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
        $__internal_f9b7080c34a20f363f7315d0f70475e41cad3f26300ea4637a001626f4d3f854 = $this->env->getExtension("native_profiler");
        $__internal_f9b7080c34a20f363f7315d0f70475e41cad3f26300ea4637a001626f4d3f854->enter($__internal_f9b7080c34a20f363f7315d0f70475e41cad3f26300ea4637a001626f4d3f854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoLibro.html.twig"));

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
        
        $__internal_f9b7080c34a20f363f7315d0f70475e41cad3f26300ea4637a001626f4d3f854->leave($__internal_f9b7080c34a20f363f7315d0f70475e41cad3f26300ea4637a001626f4d3f854_prof);

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
