<?php

/* UciAdministradorBundle:VistaPregunta:elegirTipoPregunta.html.twig */
class __TwigTemplate_98c610971ad8fa5373ba85e25e9ef1774716d74c1c179af0f49e722ccdc19be4 extends Twig_Template
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
        $__internal_a7f6ffc945cff8d434ce281a4ae75ee08608e08e1cdbae278b0e45ee2202a573 = $this->env->getExtension("native_profiler");
        $__internal_a7f6ffc945cff8d434ce281a4ae75ee08608e08e1cdbae278b0e45ee2202a573->enter($__internal_a7f6ffc945cff8d434ce281a4ae75ee08608e08e1cdbae278b0e45ee2202a573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaPregunta:elegirTipoPregunta.html.twig"));

        // line 1
        echo "
<div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">Elija el tipo de pregunta</h4>
        </div>
        <div class=\"modal-body\">
            <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("uci_administrador_eligeTipoPregunta");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">

                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), 'errors');
        echo "
                ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["choiceFormView"]) {
            // line 14
            echo "                    <div class=\"row top-margin\">
                        <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                            ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["choiceFormView"], 'widget');
            echo "
                            ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["choiceFormView"], 'label');
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choiceFormView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "

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
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </form>
        </div>
    </div>

</div>
";
        
        $__internal_a7f6ffc945cff8d434ce281a4ae75ee08608e08e1cdbae278b0e45ee2202a573->leave($__internal_a7f6ffc945cff8d434ce281a4ae75ee08608e08e1cdbae278b0e45ee2202a573_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaPregunta:elegirTipoPregunta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 32,  64 => 21,  54 => 17,  50 => 16,  46 => 14,  42 => 13,  38 => 12,  33 => 10,  22 => 1,);
    }
}