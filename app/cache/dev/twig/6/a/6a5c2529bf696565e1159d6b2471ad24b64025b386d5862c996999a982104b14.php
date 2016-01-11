<?php

/* UciAdministradorBundle:Menus:mantenimientoLibro.html.twig */
class __TwigTemplate_6a5c2529bf696565e1159d6b2471ad24b64025b386d5862c996999a982104b14 extends Twig_Template
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
        $__internal_2a92e2389fb1ff51aa020ae5d8a0541c03695f5f92d18ee7dc86533971acde8b = $this->env->getExtension("native_profiler");
        $__internal_2a92e2389fb1ff51aa020ae5d8a0541c03695f5f92d18ee7dc86533971acde8b->enter($__internal_2a92e2389fb1ff51aa020ae5d8a0541c03695f5f92d18ee7dc86533971acde8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoLibro.html.twig"));

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
        
        $__internal_2a92e2389fb1ff51aa020ae5d8a0541c03695f5f92d18ee7dc86533971acde8b->leave($__internal_2a92e2389fb1ff51aa020ae5d8a0541c03695f5f92d18ee7dc86533971acde8b_prof);

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
