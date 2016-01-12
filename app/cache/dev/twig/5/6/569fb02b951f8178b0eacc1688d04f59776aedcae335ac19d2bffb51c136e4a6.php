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
        $__internal_961e4cce88d4543802b3f9d9aaa887a1b2a85d4e2c86e07a38fb881e5c67b02d = $this->env->getExtension("native_profiler");
        $__internal_961e4cce88d4543802b3f9d9aaa887a1b2a85d4e2c86e07a38fb881e5c67b02d->enter($__internal_961e4cce88d4543802b3f9d9aaa887a1b2a85d4e2c86e07a38fb881e5c67b02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle:Menus:mantenimientoCuestionario.html.twig"));

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
        
        $__internal_961e4cce88d4543802b3f9d9aaa887a1b2a85d4e2c86e07a38fb881e5c67b02d->leave($__internal_961e4cce88d4543802b3f9d9aaa887a1b2a85d4e2c86e07a38fb881e5c67b02d_prof);

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
