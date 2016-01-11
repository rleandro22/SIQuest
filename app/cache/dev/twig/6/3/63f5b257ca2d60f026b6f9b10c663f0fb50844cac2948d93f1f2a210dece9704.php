<?php

/* UciAdministradorBundle:Menus:mantenimientoAreaConocimiento.html.twig */
class __TwigTemplate_63f5b257ca2d60f026b6f9b10c663f0fb50844cac2948d93f1f2a210dece9704 extends Twig_Template
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
        $__internal_ed2bb995e5f4106ad5b761eda7890984b30559681a8640afc8de9971f1122532 = $this->env->getExtension("native_profiler");
        $__internal_ed2bb995e5f4106ad5b761eda7890984b30559681a8640afc8de9971f1122532->enter($__internal_ed2bb995e5f4106ad5b761eda7890984b30559681a8640afc8de9971f1122532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoAreaConocimiento.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicearea");
        echo "'><span>Lista de areas de conocimiento</span></a></li>
                <li><a data-toggle=\"modal\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_administrador_addcategoria");
        echo "\" data-target=\"#myModal\">Nueva generación</a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_ed2bb995e5f4106ad5b761eda7890984b30559681a8640afc8de9971f1122532->leave($__internal_ed2bb995e5f4106ad5b761eda7890984b30559681a8640afc8de9971f1122532_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoAreaConocimiento.html.twig";
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
