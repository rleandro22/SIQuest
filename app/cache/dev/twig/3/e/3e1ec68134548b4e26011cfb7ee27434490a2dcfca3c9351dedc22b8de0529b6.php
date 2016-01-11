<?php

/* UciAdministradorBundle:VistaCategoria:editarCategoria.html.twig */
class __TwigTemplate_3e1ec68134548b4e26011cfb7ee27434490a2dcfca3c9351dedc22b8de0529b6 extends Twig_Template
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
        $__internal_d22b0b0784776cbe1ff44d39d1ea5f3f80371a7d7aeb90f95acbab7d1d56579e = $this->env->getExtension("native_profiler");
        $__internal_d22b0b0784776cbe1ff44d39d1ea5f3f80371a7d7aeb90f95acbab7d1d56579e->enter($__internal_d22b0b0784776cbe1ff44d39d1ea5f3f80371a7d7aeb90f95acbab7d1d56579e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:editarCategoria.html.twig"));

        // line 1
        echo "
<div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">Ingrese el nombre de la generación</h4>
        </div>
        <div class=\"modal-body\">
            <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcategoria", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                <div class=\"row top-margin\">
                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "generacion", array()), 'label');
        echo "
                        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "generacion", array()), 'errors');
        echo "
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "generacion", array()), 'widget');
        echo "
                    </div>
                </div>

                <hr>
                <div class=\"row\">
                    <div class=\"col-lg-8 text-right\">
                        <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cerrar</button>
                    </div>
                    <div class=\"col-lg-4 text-right\">
                        <button id=\"pruebaultima\" class=\"btn btn-action\" type=\"submit\">Actualizar</button>
                    </div>
                </div>
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </form>
        </div>
    </div>

</div>








";
        
        $__internal_d22b0b0784776cbe1ff44d39d1ea5f3f80371a7d7aeb90f95acbab7d1d56579e->leave($__internal_d22b0b0784776cbe1ff44d39d1ea5f3f80371a7d7aeb90f95acbab7d1d56579e_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCategoria:editarCategoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 28,  47 => 15,  43 => 14,  39 => 13,  33 => 10,  22 => 1,);
    }
}
