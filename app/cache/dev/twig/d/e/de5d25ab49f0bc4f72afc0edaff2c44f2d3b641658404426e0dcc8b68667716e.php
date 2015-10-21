<?php

/* UciBaseDatosBundle:TipoRespuestaCorta:new.html.twig */
class __TwigTemplate_de5d25ab49f0bc4f72afc0edaff2c44f2d3b641658404426e0dcc8b68667716e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:TipoRespuestaCorta:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a1dbe020cf46ff9dd7cb1108b514ee81e748ce84a759a6b1af8ebdc24c4e480 = $this->env->getExtension("native_profiler");
        $__internal_2a1dbe020cf46ff9dd7cb1108b514ee81e748ce84a759a6b1af8ebdc24c4e480->enter($__internal_2a1dbe020cf46ff9dd7cb1108b514ee81e748ce84a759a6b1af8ebdc24c4e480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:TipoRespuestaCorta:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a1dbe020cf46ff9dd7cb1108b514ee81e748ce84a759a6b1af8ebdc24c4e480->leave($__internal_2a1dbe020cf46ff9dd7cb1108b514ee81e748ce84a759a6b1af8ebdc24c4e480_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fdcbe2a8616524ebe404cf09d965d21abfef2b1e5fdf1aab9a8f69dbf552fe0 = $this->env->getExtension("native_profiler");
        $__internal_0fdcbe2a8616524ebe404cf09d965d21abfef2b1e5fdf1aab9a8f69dbf552fe0->enter($__internal_0fdcbe2a8616524ebe404cf09d965d21abfef2b1e5fdf1aab9a8f69dbf552fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TipoRespuestaCorta creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("tiporespuestacorta");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_0fdcbe2a8616524ebe404cf09d965d21abfef2b1e5fdf1aab9a8f69dbf552fe0->leave($__internal_0fdcbe2a8616524ebe404cf09d965d21abfef2b1e5fdf1aab9a8f69dbf552fe0_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:TipoRespuestaCorta:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
