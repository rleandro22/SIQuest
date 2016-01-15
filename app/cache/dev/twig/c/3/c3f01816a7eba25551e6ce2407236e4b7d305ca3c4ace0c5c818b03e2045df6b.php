<?php

/* UciProfesorBundle:Menus:mantenimientoCuestionario.html.twig */
class __TwigTemplate_c3f01816a7eba25551e6ce2407236e4b7d305ca3c4ace0c5c818b03e2045df6b extends Twig_Template
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
        $__internal_5994b35732da2e10421fcc3960a5b66b7b10c2b2f2c05458d9694699a1879cac = $this->env->getExtension("native_profiler");
        $__internal_5994b35732da2e10421fcc3960a5b66b7b10c2b2f2c05458d9694699a1879cac->enter($__internal_5994b35732da2e10421fcc3960a5b66b7b10c2b2f2c05458d9694699a1879cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle:Menus:mantenimientoCuestionario.html.twig"));

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
        
        $__internal_5994b35732da2e10421fcc3960a5b66b7b10c2b2f2c05458d9694699a1879cac->leave($__internal_5994b35732da2e10421fcc3960a5b66b7b10c2b2f2c05458d9694699a1879cac_prof);

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
