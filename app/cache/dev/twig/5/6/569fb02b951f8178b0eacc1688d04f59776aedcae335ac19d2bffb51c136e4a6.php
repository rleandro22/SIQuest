<?php

/* UciProfesorBundle:Menus:mantenimientoCuestionario.html.twig */
class __TwigTemplate_569fb02b951f8178b0eacc1688d04f59776aedcae335ac19d2bffb51c136e4a6 extends Twig_Template
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
        $__internal_cfce41fea46c8c6b695458f7bad219be04f0141f6a43c86ba82428b7a17f705d = $this->env->getExtension("native_profiler");
        $__internal_cfce41fea46c8c6b695458f7bad219be04f0141f6a43c86ba82428b7a17f705d->enter($__internal_cfce41fea46c8c6b695458f7bad219be04f0141f6a43c86ba82428b7a17f705d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle:Menus:mantenimientoCuestionario.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_profesor_indicecuestionario");
        echo "'><span>Lista de cuestionarios</span></a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_cfce41fea46c8c6b695458f7bad219be04f0141f6a43c86ba82428b7a17f705d->leave($__internal_cfce41fea46c8c6b695458f7bad219be04f0141f6a43c86ba82428b7a17f705d_prof);

    }

    public function getTemplateName()
    {
        return "UciProfesorBundle:Menus:mantenimientoCuestionario.html.twig";
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
