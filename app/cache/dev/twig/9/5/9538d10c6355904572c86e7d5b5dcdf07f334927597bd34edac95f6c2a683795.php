<?php

/* UciAdministradorBundle:VistaCategoria:registrarCategoria.html.twig */
class __TwigTemplate_9538d10c6355904572c86e7d5b5dcdf07f334927597bd34edac95f6c2a683795 extends Twig_Template
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
        $__internal_160d3a5e6cdffc646931edee6a313a74287546d463a2d27bcae1ed1121379efd = $this->env->getExtension("native_profiler");
        $__internal_160d3a5e6cdffc646931edee6a313a74287546d463a2d27bcae1ed1121379efd->enter($__internal_160d3a5e6cdffc646931edee6a313a74287546d463a2d27bcae1ed1121379efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:registrarCategoria.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_addcategoria");
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
        
        $__internal_160d3a5e6cdffc646931edee6a313a74287546d463a2d27bcae1ed1121379efd->leave($__internal_160d3a5e6cdffc646931edee6a313a74287546d463a2d27bcae1ed1121379efd_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCategoria:registrarCategoria.html.twig";
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
