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
        $__internal_012276da67b614744df0e327a085df8ff1c766f0363670100dcd8e1fb9b3df79 = $this->env->getExtension("native_profiler");
        $__internal_012276da67b614744df0e327a085df8ff1c766f0363670100dcd8e1fb9b3df79->enter($__internal_012276da67b614744df0e327a085df8ff1c766f0363670100dcd8e1fb9b3df79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "'><span>Lista de usuarios</span></a></li>
                <li><a href='";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_administrador_adduser");
        echo "'><span>Nuevo usuario</span></a></li>
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
        
        $__internal_012276da67b614744df0e327a085df8ff1c766f0363670100dcd8e1fb9b3df79->leave($__internal_012276da67b614744df0e327a085df8ff1c766f0363670100dcd8e1fb9b3df79_prof);

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
        return array (  37 => 11,  33 => 10,  22 => 1,);
    }
}
