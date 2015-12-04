<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig */
class __TwigTemplate_91c0abeaec5af2c1102f1388127f257a6fe53e77c18f35ee549c9d87e2a91c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b1038943679626f5f83c6162720cc6fb72b1f357589686bde1cc03f626963ee = $this->env->getExtension("native_profiler");
        $__internal_2b1038943679626f5f83c6162720cc6fb72b1f357589686bde1cc03f626963ee->enter($__internal_2b1038943679626f5f83c6162720cc6fb72b1f357589686bde1cc03f626963ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_2b1038943679626f5f83c6162720cc6fb72b1f357589686bde1cc03f626963ee->leave($__internal_2b1038943679626f5f83c6162720cc6fb72b1f357589686bde1cc03f626963ee_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_5402e3d1b7ce5a9704931c6faf094192c485c41ae40d2857602765fc65d023dc = $this->env->getExtension("native_profiler");
        $__internal_5402e3d1b7ce5a9704931c6faf094192c485c41ae40d2857602765fc65d023dc->enter($__internal_5402e3d1b7ce5a9704931c6faf094192c485c41ae40d2857602765fc65d023dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoRespuesta", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget');
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentaje", array()), 'widget');
        echo "</div>
";
        
        $__internal_5402e3d1b7ce5a9704931c6faf094192c485c41ae40d2857602765fc65d023dc->leave($__internal_5402e3d1b7ce5a9704931c6faf094192c485c41ae40d2857602765fc65d023dc_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
