<?php

/* UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig */
class __TwigTemplate_6e16f14eda2493c60b2e3c66fc289940124b78abb0f25ecd7e8bc8c06d605072 extends Twig_Template
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
        $__internal_bb826953cda4a7ef29f437b6de82febc33d2cbf9ea3077eef1a828bf9b93e8f3 = $this->env->getExtension("native_profiler");
        $__internal_bb826953cda4a7ef29f437b6de82febc33d2cbf9ea3077eef1a828bf9b93e8f3->enter($__internal_bb826953cda4a7ef29f437b6de82febc33d2cbf9ea3077eef1a828bf9b93e8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Menus:mantenimientoPregunta.html.twig"));

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
                <li class='active has-sub'><a href='#'><span>Nueva pregunta</span></a>
                    <ul>
                        <li><a data-toggle=\"modal\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("uci_administrador_eligeTipoPregunta");
        echo "\" data-target=\"#myModal\">PMBok</a></li>
                        <li class='last'><a href='#'><span>Otro</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_bb826953cda4a7ef29f437b6de82febc33d2cbf9ea3077eef1a828bf9b93e8f3->leave($__internal_bb826953cda4a7ef29f437b6de82febc33d2cbf9ea3077eef1a828bf9b93e8f3_prof);

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
        return array (  39 => 13,  33 => 10,  22 => 1,);
    }
}
