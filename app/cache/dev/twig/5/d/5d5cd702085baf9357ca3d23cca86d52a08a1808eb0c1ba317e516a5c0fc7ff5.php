<?php

/* UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig */
class __TwigTemplate_5d5cd702085baf9357ca3d23cca86d52a08a1808eb0c1ba317e516a5c0fc7ff5 extends Twig_Template
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
        $__internal_474b1b7784501a9a345fe7e825a2344b3b54f51479586bfaefeadaab072c874d = $this->env->getExtension("native_profiler");
        $__internal_474b1b7784501a9a345fe7e825a2344b3b54f51479586bfaefeadaab072c874d->enter($__internal_474b1b7784501a9a345fe7e825a2344b3b54f51479586bfaefeadaab072c874d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoCuestionario.html.twig"));

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
        
        $__internal_474b1b7784501a9a345fe7e825a2344b3b54f51479586bfaefeadaab072c874d->leave($__internal_474b1b7784501a9a345fe7e825a2344b3b54f51479586bfaefeadaab072c874d_prof);

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
