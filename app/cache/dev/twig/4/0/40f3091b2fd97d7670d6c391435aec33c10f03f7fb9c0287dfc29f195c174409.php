<?php

/* UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig */
class __TwigTemplate_40f3091b2fd97d7670d6c391435aec33c10f03f7fb9c0287dfc29f195c174409 extends Twig_Template
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
        $__internal_fc1f2da9f864133a60ee47e0f808cc8ac5c7ddca5c37d90653cdf113c9a4bf20 = $this->env->getExtension("native_profiler");
        $__internal_fc1f2da9f864133a60ee47e0f808cc8ac5c7ddca5c37d90653cdf113c9a4bf20->enter($__internal_fc1f2da9f864133a60ee47e0f808cc8ac5c7ddca5c37d90653cdf113c9a4bf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecategoria");
        echo "'><span>Lista de generaciones</span></a></li>
                <li><a data-toggle=\"modal\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_administrador_addcategoria");
        echo "\" data-target=\"#myModal\">Nueva generación</a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_fc1f2da9f864133a60ee47e0f808cc8ac5c7ddca5c37d90653cdf113c9a4bf20->leave($__internal_fc1f2da9f864133a60ee47e0f808cc8ac5c7ddca5c37d90653cdf113c9a4bf20_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig";
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
