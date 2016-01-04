<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig */
class __TwigTemplate_809d86eb8ab824c1b6460dc71c710285a8a505e4c4fa20b104938e831e415080 extends Twig_Template
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
        $__internal_1eefe6586ab1bd62706753cfdcd92567487b3298ad0c1503cc3c7f9636fc6439 = $this->env->getExtension("native_profiler");
        $__internal_1eefe6586ab1bd62706753cfdcd92567487b3298ad0c1503cc3c7f9636fc6439->enter($__internal_1eefe6586ab1bd62706753cfdcd92567487b3298ad0c1503cc3c7f9636fc6439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_1eefe6586ab1bd62706753cfdcd92567487b3298ad0c1503cc3c7f9636fc6439->leave($__internal_1eefe6586ab1bd62706753cfdcd92567487b3298ad0c1503cc3c7f9636fc6439_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_9a70afa4e38f25a33255c6e307f80226e3b4133d235e319b2232a06b3f2b7c58 = $this->env->getExtension("native_profiler");
        $__internal_9a70afa4e38f25a33255c6e307f80226e3b4133d235e319b2232a06b3f2b7c58->enter($__internal_9a70afa4e38f25a33255c6e307f80226e3b4133d235e319b2232a06b3f2b7c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPrueba", array()), 'widget');
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
        
        $__internal_9a70afa4e38f25a33255c6e307f80226e3b4133d235e319b2232a06b3f2b7c58->leave($__internal_9a70afa4e38f25a33255c6e307f80226e3b4133d235e319b2232a06b3f2b7c58_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoPrueba.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
