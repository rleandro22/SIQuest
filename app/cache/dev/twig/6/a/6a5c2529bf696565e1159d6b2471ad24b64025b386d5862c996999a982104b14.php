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
        $__internal_01c13d06b5d8f5b3bd0b09c31770ea919ff7388656e8ec18ed45a7b8d7f0c830 = $this->env->getExtension("native_profiler");
        $__internal_01c13d06b5d8f5b3bd0b09c31770ea919ff7388656e8ec18ed45a7b8d7f0c830->enter($__internal_01c13d06b5d8f5b3bd0b09c31770ea919ff7388656e8ec18ed45a7b8d7f0c830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoLibro.html.twig"));

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
        
        $__internal_01c13d06b5d8f5b3bd0b09c31770ea919ff7388656e8ec18ed45a7b8d7f0c830->leave($__internal_01c13d06b5d8f5b3bd0b09c31770ea919ff7388656e8ec18ed45a7b8d7f0c830_prof);

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