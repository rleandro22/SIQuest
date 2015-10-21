<?php

/* UciBaseDatosBundle:PreguntaTieneRespuestas:new.html.twig */
class __TwigTemplate_d66c2d713229219d07844f8029c9f356da45da0cd3c56d60a25b0b734f856ef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:PreguntaTieneRespuestas:new.html.twig", 1);
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
        $__internal_3a8c7dc154bb85aeb3d3f3edbab3b1765fde54c3ff9c287a917be1c349f34371 = $this->env->getExtension("native_profiler");
        $__internal_3a8c7dc154bb85aeb3d3f3edbab3b1765fde54c3ff9c287a917be1c349f34371->enter($__internal_3a8c7dc154bb85aeb3d3f3edbab3b1765fde54c3ff9c287a917be1c349f34371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:PreguntaTieneRespuestas:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a8c7dc154bb85aeb3d3f3edbab3b1765fde54c3ff9c287a917be1c349f34371->leave($__internal_3a8c7dc154bb85aeb3d3f3edbab3b1765fde54c3ff9c287a917be1c349f34371_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1929357e8f15f79b81acda758db186a47c6579e82db9235808e10bdb37e3b4c5 = $this->env->getExtension("native_profiler");
        $__internal_1929357e8f15f79b81acda758db186a47c6579e82db9235808e10bdb37e3b4c5->enter($__internal_1929357e8f15f79b81acda758db186a47c6579e82db9235808e10bdb37e3b4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>PreguntaTieneRespuestas creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("preguntatienerespuestas");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_1929357e8f15f79b81acda758db186a47c6579e82db9235808e10bdb37e3b4c5->leave($__internal_1929357e8f15f79b81acda758db186a47c6579e82db9235808e10bdb37e3b4c5_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:PreguntaTieneRespuestas:new.html.twig";
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
