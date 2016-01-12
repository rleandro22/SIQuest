<?php

/* UciAdministradorBundle:VistaPregunta:importarPreguntas.html.twig */
class __TwigTemplate_5f99afdf8d1d67640d08683fccd014bc878466b9163081878a1c7faa5223031d extends Twig_Template
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
        $__internal_ef88ac7f471326a7710507a68327d787e683b8aa2a1c53836109affdf9200d9a = $this->env->getExtension("native_profiler");
        $__internal_ef88ac7f471326a7710507a68327d787e683b8aa2a1c53836109affdf9200d9a->enter($__internal_ef88ac7f471326a7710507a68327d787e683b8aa2a1c53836109affdf9200d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaPregunta:importarPreguntas.html.twig"));

        // line 1
        echo "
<div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">Cargue un archivo</h4>
        </div>
        <div class=\"modal-body\">
            <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("uci_administrador_importarPreguntas");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">

                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
                <div class=\"row top-margin\">
                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
                        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label');
        echo "
                    </div>
                </div>


                <hr>
                <div class=\"row\">
                    <div class=\"col-lg-8 text-right\">
                        <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
                    </div>
                    <div class=\"col-lg-4 text-right\">
                        <button class=\"btn btn-action\" type=\"submit\">Continuar</button>
                    </div>
                </div>
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </form>
        </div>
    </div>

</div>
";
        
        $__internal_ef88ac7f471326a7710507a68327d787e683b8aa2a1c53836109affdf9200d9a->leave($__internal_ef88ac7f471326a7710507a68327d787e683b8aa2a1c53836109affdf9200d9a_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaPregunta:importarPreguntas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 30,  48 => 16,  44 => 15,  38 => 12,  33 => 10,  22 => 1,);
    }
}
