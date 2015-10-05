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
        $__internal_f8cb60872602ba0b64682c696785594c2a65e3d4129f4060b5024599c093e772 = $this->env->getExtension("native_profiler");
        $__internal_f8cb60872602ba0b64682c696785594c2a65e3d4129f4060b5024599c093e772->enter($__internal_f8cb60872602ba0b64682c696785594c2a65e3d4129f4060b5024599c093e772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig"));

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
                <li class='active has-sub'><a href='#'><span>Nuevo</span></a>
                    <ul>
                        <li><a data-toggle=\"modal\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("uci_administrador_addcategoria");
        echo "\" data-target=\"#myModal\">Generación</a>
                        </li>
                        <li><a href='#'><span>Curso</span></a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_f8cb60872602ba0b64682c696785594c2a65e3d4129f4060b5024599c093e772->leave($__internal_f8cb60872602ba0b64682c696785594c2a65e3d4129f4060b5024599c093e772_prof);

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
        return array (  39 => 13,  33 => 10,  22 => 1,);
    }
}
