<?php

/* UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig */
class __TwigTemplate_d2201c628f6a2c91cd31ce1af3ddbe0578f463b1b17fa215a9e3a10039d6b6b9 extends Twig_Template
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
        $__internal_1a9845794c046139fadce1a4a4250d37732659b0f021602b2b3da108b6448057 = $this->env->getExtension("native_profiler");
        $__internal_1a9845794c046139fadce1a4a4250d37732659b0f021602b2b3da108b6448057->enter($__internal_1a9845794c046139fadce1a4a4250d37732659b0f021602b2b3da108b6448057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "'><span>Lista de cuestionarios</span></a></li>
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_administrador_registrarcuestionario");
        echo "\"><span>Nuevo cuestionario</span></a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_1a9845794c046139fadce1a4a4250d37732659b0f021602b2b3da108b6448057->leave($__internal_1a9845794c046139fadce1a4a4250d37732659b0f021602b2b3da108b6448057_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig";
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