<?php

/* UciAdministradorBundle:VistaCategoria:registrarCurso.html.twig */
class __TwigTemplate_aecbb153d382b5c94f9ff9273a2660022b652107ba3f80b123c39015070cf867 extends Twig_Template
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
        $__internal_be7053a2c865c30282639ccd5211e1d50ac1a3e40427fff65b2582f6116c6a35 = $this->env->getExtension("native_profiler");
        $__internal_be7053a2c865c30282639ccd5211e1d50ac1a3e40427fff65b2582f6116c6a35->enter($__internal_be7053a2c865c30282639ccd5211e1d50ac1a3e40427fff65b2582f6116c6a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:registrarCurso.html.twig"));

        // line 1
        echo "
<div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">Ingrese el nombre del curso</h4>
        </div>
        <div class=\"modal-body\">
            <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_addcurso", array("idGeneracion" => (isset($context["idGeneracion"]) ? $context["idGeneracion"] : $this->getContext($context, "idGeneracion")))), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                <div class=\"row top-margin\">
                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrecurso", array()), 'label');
        echo "
                        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrecurso", array()), 'errors');
        echo "
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrecurso", array()), 'widget');
        echo "
                    </div>
                </div>

                <hr>
                <div class=\"row\">
                    <div class=\"col-lg-8 text-right\">
                        <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cerrar</button>
                    </div>
                    <div class=\"col-lg-4 text-right\">
                        <button id=\"pruebaultima\" class=\"btn btn-action\" type=\"submit\">Registrar</button>
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
        
        $__internal_be7053a2c865c30282639ccd5211e1d50ac1a3e40427fff65b2582f6116c6a35->leave($__internal_be7053a2c865c30282639ccd5211e1d50ac1a3e40427fff65b2582f6116c6a35_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCategoria:registrarCurso.html.twig";
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
