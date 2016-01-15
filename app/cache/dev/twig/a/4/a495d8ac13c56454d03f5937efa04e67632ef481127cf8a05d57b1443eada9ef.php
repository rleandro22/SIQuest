<?php

/* UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig */
class __TwigTemplate_a495d8ac13c56454d03f5937efa04e67632ef481127cf8a05d57b1443eada9ef extends Twig_Template
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
        $__internal_0119ffa915e64c534f75a46f8618315c8024ddebb5265b9fe88dc38041429f85 = $this->env->getExtension("native_profiler");
        $__internal_0119ffa915e64c534f75a46f8618315c8024ddebb5265b9fe88dc38041429f85->enter($__internal_0119ffa915e64c534f75a46f8618315c8024ddebb5265b9fe88dc38041429f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_0119ffa915e64c534f75a46f8618315c8024ddebb5265b9fe88dc38041429f85->leave($__internal_0119ffa915e64c534f75a46f8618315c8024ddebb5265b9fe88dc38041429f85_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_131740f05a978aba88f7e957bdd9c7c33b17ae9dc080a7cf56e7b6dc1828a3a9 = $this->env->getExtension("native_profiler");
        $__internal_131740f05a978aba88f7e957bdd9c7c33b17ae9dc080a7cf56e7b6dc1828a3a9->enter($__internal_131740f05a978aba88f7e957bdd9c7c33b17ae9dc080a7cf56e7b6dc1828a3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_131740f05a978aba88f7e957bdd9c7c33b17ae9dc080a7cf56e7b6dc1828a3a9->leave($__internal_131740f05a978aba88f7e957bdd9c7c33b17ae9dc080a7cf56e7b6dc1828a3a9_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaCuestionario:prototipoPTipoRespuesta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
