<?php

/* UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig */
class __TwigTemplate_398b56b66215fcbbaed0f8a0c06c4bff6088f1cff84a9b1a33a3a851e30542a2 extends Twig_Template
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
        $__internal_c565b6b876a4f14be39b23e45d991f7e3472877e548e23f9721cd382187623c9 = $this->env->getExtension("native_profiler");
        $__internal_c565b6b876a4f14be39b23e45d991f7e3472877e548e23f9721cd382187623c9->enter($__internal_c565b6b876a4f14be39b23e45d991f7e3472877e548e23f9721cd382187623c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "'><span>Lista de preguntas</span></a></li>
                <li><a data-toggle=\"modal\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uci_administrador_eligeTipoPregunta");
        echo "\" data-target=\"#myModal\"><span>Nueva pregunta</span></a></li>
                <li><a data-toggle=\"modal\"  href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_importarPreguntas");
        echo "\" data-target=\"#myModal\"><span>Importar preguntas</span></a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_c565b6b876a4f14be39b23e45d991f7e3472877e548e23f9721cd382187623c9->leave($__internal_c565b6b876a4f14be39b23e45d991f7e3472877e548e23f9721cd382187623c9_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig";
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
