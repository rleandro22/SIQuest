<?php

/* UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig */
class __TwigTemplate_e7966a6600162a4f5e048cd987490a446dce217ec2b90f350331cd11263a86c1 extends Twig_Template
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
        $__internal_a11a4c4368396afff27f925ccdcd28dfe4728e217e38bead98c60b60fd1bbb66 = $this->env->getExtension("native_profiler");
        $__internal_a11a4c4368396afff27f925ccdcd28dfe4728e217e38bead98c60b60fd1bbb66->enter($__internal_a11a4c4368396afff27f925ccdcd28dfe4728e217e38bead98c60b60fd1bbb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig"));

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
        
        $__internal_a11a4c4368396afff27f925ccdcd28dfe4728e217e38bead98c60b60fd1bbb66->leave($__internal_a11a4c4368396afff27f925ccdcd28dfe4728e217e38bead98c60b60fd1bbb66_prof);

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
