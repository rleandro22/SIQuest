<?php

/* UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig */
class __TwigTemplate_c186e722612b4b738720cec5541bf2b1791c672ab7496e948a4cfb82cf8b6208 extends Twig_Template
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
        $__internal_2b32590e7a21bb5d6d9dd3569663afea13004144811e8ac7c2293d4dd5d75ff1 = $this->env->getExtension("native_profiler");
        $__internal_2b32590e7a21bb5d6d9dd3569663afea13004144811e8ac7c2293d4dd5d75ff1->enter($__internal_2b32590e7a21bb5d6d9dd3569663afea13004144811e8ac7c2293d4dd5d75ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_adduser");
        echo "'><span>Nuevo usuario</span></a></li>
                <li><a href='#'><span>Modificar usuario</span></a></li>
                <li class='active has-sub'><a href='#'><span>Ingresar</span></a>
                    <ul>
                        <li><a href='#'><span>PMBok</span></a>
                        </li>
                        <li><a href='#'><span>Otro</span></a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_2b32590e7a21bb5d6d9dd3569663afea13004144811e8ac7c2293d4dd5d75ff1->leave($__internal_2b32590e7a21bb5d6d9dd3569663afea13004144811e8ac7c2293d4dd5d75ff1_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  22 => 1,);
    }
}
