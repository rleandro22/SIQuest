<?php

/* UciAdministradorBundle:Menus:mantenimientoLibro.html.twig */
class __TwigTemplate_39b4f241b4c3dde1a36232b5c99cad70ac6091bf7a6a3cf5637c8afffbce0714 extends Twig_Template
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
        $__internal_0e958211420aead5bd12d868ab67dcd11283a23871c51b3ee5fa7bcd82f82c19 = $this->env->getExtension("native_profiler");
        $__internal_0e958211420aead5bd12d868ab67dcd11283a23871c51b3ee5fa7bcd82f82c19->enter($__internal_0e958211420aead5bd12d868ab67dcd11283a23871c51b3ee5fa7bcd82f82c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoLibro.html.twig"));

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
        
        $__internal_0e958211420aead5bd12d868ab67dcd11283a23871c51b3ee5fa7bcd82f82c19->leave($__internal_0e958211420aead5bd12d868ab67dcd11283a23871c51b3ee5fa7bcd82f82c19_prof);

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
