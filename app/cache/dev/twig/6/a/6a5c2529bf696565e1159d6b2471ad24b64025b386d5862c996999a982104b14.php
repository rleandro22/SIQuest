<?php

/* UciAdministradorBundle:Menus:mantenimientoLibro.html.twig */
class __TwigTemplate_6a5c2529bf696565e1159d6b2471ad24b64025b386d5862c996999a982104b14 extends Twig_Template
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
        $__internal_06619caeb270ef1ccf39e1383ad65a301a5b36f50c0c856f9ba6a89cb81aac25 = $this->env->getExtension("native_profiler");
        $__internal_06619caeb270ef1ccf39e1383ad65a301a5b36f50c0c856f9ba6a89cb81aac25->enter($__internal_06619caeb270ef1ccf39e1383ad65a301a5b36f50c0c856f9ba6a89cb81aac25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoLibro.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "'><span>Lista de libros</span></a></li>
                <li><a href='";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_administrador_nuevolibro");
        echo "'><span>Nuevo libro</span></a></li>
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceatrpmbok");
        echo "\">Atributos PMBok</a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_06619caeb270ef1ccf39e1383ad65a301a5b36f50c0c856f9ba6a89cb81aac25->leave($__internal_06619caeb270ef1ccf39e1383ad65a301a5b36f50c0c856f9ba6a89cb81aac25_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoLibro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  37 => 11,  33 => 10,  22 => 1,);
    }
}
