<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig */
class __TwigTemplate_9ac031e3100438512c1a3107b1b084dc82d4db3a7f7dd42c5047e25e7a097d67 extends Twig_Template
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
        $__internal_2b036ab449d994ecbb4fb7f4aea81795bda8f3d3f10fc99b0e1ce78665f5c23d = $this->env->getExtension("native_profiler");
        $__internal_2b036ab449d994ecbb4fb7f4aea81795bda8f3d3f10fc99b0e1ce78665f5c23d->enter($__internal_2b036ab449d994ecbb4fb7f4aea81795bda8f3d3f10fc99b0e1ce78665f5c23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_2b036ab449d994ecbb4fb7f4aea81795bda8f3d3f10fc99b0e1ce78665f5c23d->leave($__internal_2b036ab449d994ecbb4fb7f4aea81795bda8f3d3f10fc99b0e1ce78665f5c23d_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_391e7dd38c398a699ade9bd0a3f1054eaa1a4d54f2f84f0f4b1fe85422ca7754 = $this->env->getExtension("native_profiler");
        $__internal_391e7dd38c398a699ade9bd0a3f1054eaa1a4d54f2f84f0f4b1fe85422ca7754->enter($__internal_391e7dd38c398a699ade9bd0a3f1054eaa1a4d54f2f84f0f4b1fe85422ca7754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_391e7dd38c398a699ade9bd0a3f1054eaa1a4d54f2f84f0f4b1fe85422ca7754->leave($__internal_391e7dd38c398a699ade9bd0a3f1054eaa1a4d54f2f84f0f4b1fe85422ca7754_prof);

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
