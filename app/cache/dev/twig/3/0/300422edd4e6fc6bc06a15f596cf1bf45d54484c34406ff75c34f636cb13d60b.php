<?php

/* UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig */
class __TwigTemplate_300422edd4e6fc6bc06a15f596cf1bf45d54484c34406ff75c34f636cb13d60b extends Twig_Template
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
        $__internal_389856e1fb75edce6b043cf943e5889774b5c1e796bcc565762cae779bc7b5f2 = $this->env->getExtension("native_profiler");
        $__internal_389856e1fb75edce6b043cf943e5889774b5c1e796bcc565762cae779bc7b5f2->enter($__internal_389856e1fb75edce6b043cf943e5889774b5c1e796bcc565762cae779bc7b5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCuestionario:prototipoPTriangulo.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_389856e1fb75edce6b043cf943e5889774b5c1e796bcc565762cae779bc7b5f2->leave($__internal_389856e1fb75edce6b043cf943e5889774b5c1e796bcc565762cae779bc7b5f2_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_53f0eb680b22fb99f1f1042687fa87a33243bcae4a36ec03739a94168e704835 = $this->env->getExtension("native_profiler");
        $__internal_53f0eb680b22fb99f1f1042687fa87a33243bcae4a36ec03739a94168e704835->enter($__internal_53f0eb680b22fb99f1f1042687fa87a33243bcae4a36ec03739a94168e704835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_53f0eb680b22fb99f1f1042687fa87a33243bcae4a36ec03739a94168e704835->leave($__internal_53f0eb680b22fb99f1f1042687fa87a33243bcae4a36ec03739a94168e704835_prof);

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
