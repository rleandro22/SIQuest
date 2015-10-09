<?php

/* UciAdministradorBundle:VistaCategoria:matricularUsuario.html.twig */
class __TwigTemplate_dace79e10c7191957dd706523804fe92f001aeafd121e15c0c064baf156edd80 extends Twig_Template
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
        $__internal_1eef561168cdc53180f00bf95e6ad88d8f27a1b9d9da0a01efb2da6b8221b101 = $this->env->getExtension("native_profiler");
        $__internal_1eef561168cdc53180f00bf95e6ad88d8f27a1b9d9da0a01efb2da6b8221b101->enter($__internal_1eef561168cdc53180f00bf95e6ad88d8f27a1b9d9da0a01efb2da6b8221b101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:matricularUsuario.html.twig"));

        // line 1
        echo "
<div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">Seleccione al usuario que desea matricular</h4>
        </div>
        <div class=\"modal-body\">
            <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_matricularusuario", array("idGeneracion" => (isset($context["idGeneracion"]) ? $context["idGeneracion"] : $this->getContext($context, "idGeneracion")), "idCurso" => (isset($context["idCurso"]) ? $context["idCurso"] : $this->getContext($context, "idCurso")), "tipoUsuario" => (isset($context["tipoUsuario"]) ? $context["tipoUsuario"] : $this->getContext($context, "tipoUsuario")))), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                <div class=\"row top-margin\">
                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'errors');
        echo "
                        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'widget');
        echo "
                    </div>
                </div>

                <hr>
                <div class=\"row\">
                    <div class=\"col-lg-8 text-right\">
                        <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cerrar</button>
                    </div>
                    <div class=\"col-lg-4 text-right\">
                        <button id=\"pruebaultima\" class=\"btn btn-action\" type=\"submit\">Ingresar</button>
                    </div>
                </div>
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </form>
        </div>
    </div>

</div>

";
        
        $__internal_1eef561168cdc53180f00bf95e6ad88d8f27a1b9d9da0a01efb2da6b8221b101->leave($__internal_1eef561168cdc53180f00bf95e6ad88d8f27a1b9d9da0a01efb2da6b8221b101_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCategoria:matricularUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 27,  43 => 14,  39 => 13,  33 => 10,  22 => 1,);
    }
}
