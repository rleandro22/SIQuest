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
        $__internal_8d2100260a95e64cb1bfa7d8cd4028a2e7a3c9c41a2c113f5fd17f0c99f3a21e = $this->env->getExtension("native_profiler");
        $__internal_8d2100260a95e64cb1bfa7d8cd4028a2e7a3c9c41a2c113f5fd17f0c99f3a21e->enter($__internal_8d2100260a95e64cb1bfa7d8cd4028a2e7a3c9c41a2c113f5fd17f0c99f3a21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoLibro.html.twig"));

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
        
        $__internal_8d2100260a95e64cb1bfa7d8cd4028a2e7a3c9c41a2c113f5fd17f0c99f3a21e->leave($__internal_8d2100260a95e64cb1bfa7d8cd4028a2e7a3c9c41a2c113f5fd17f0c99f3a21e_prof);

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
