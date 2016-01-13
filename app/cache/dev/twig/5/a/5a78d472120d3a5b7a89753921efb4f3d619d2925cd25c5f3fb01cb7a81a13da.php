<?php

/* UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig */
class __TwigTemplate_5a78d472120d3a5b7a89753921efb4f3d619d2925cd25c5f3fb01cb7a81a13da extends Twig_Template
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
        $__internal_64b089b1f13a0801e9ffa13ecc558e99cd4a718fb1d9696b16a29c3a3b6d1f0e = $this->env->getExtension("native_profiler");
        $__internal_64b089b1f13a0801e9ffa13ecc558e99cd4a718fb1d9696b16a29c3a3b6d1f0e->enter($__internal_64b089b1f13a0801e9ffa13ecc558e99cd4a718fb1d9696b16a29c3a3b6d1f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig"));

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
        
        $__internal_64b089b1f13a0801e9ffa13ecc558e99cd4a718fb1d9696b16a29c3a3b6d1f0e->leave($__internal_64b089b1f13a0801e9ffa13ecc558e99cd4a718fb1d9696b16a29c3a3b6d1f0e_prof);

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
