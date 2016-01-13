<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig */
class __TwigTemplate_6cca96e22fe0043b8cc05d11cb7d406b30eb10419dbd25af6b162f7d2dceab09 extends Twig_Template
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
        $__internal_d2339c7d4781089c32cc1f300a5536de5d9096ca2bb0c571369ff8b5455daca3 = $this->env->getExtension("native_profiler");
        $__internal_d2339c7d4781089c32cc1f300a5536de5d9096ca2bb0c571369ff8b5455daca3->enter($__internal_d2339c7d4781089c32cc1f300a5536de5d9096ca2bb0c571369ff8b5455daca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d2339c7d4781089c32cc1f300a5536de5d9096ca2bb0c571369ff8b5455daca3->leave($__internal_d2339c7d4781089c32cc1f300a5536de5d9096ca2bb0c571369ff8b5455daca3_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_63b1ea2be2786526dac554fb6c615756a40215186a7358ae08dfb6dc4ff3ef8b = $this->env->getExtension("native_profiler");
        $__internal_63b1ea2be2786526dac554fb6c615756a40215186a7358ae08dfb6dc4ff3ef8b->enter($__internal_63b1ea2be2786526dac554fb6c615756a40215186a7358ae08dfb6dc4ff3ef8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        <div class=\"col-sm-6\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trianguloTalento", array()), 'widget');
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
        
        $__internal_63b1ea2be2786526dac554fb6c615756a40215186a7358ae08dfb6dc4ff3ef8b->leave($__internal_63b1ea2be2786526dac554fb6c615756a40215186a7358ae08dfb6dc4ff3ef8b_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
