<?php

/* UciBaseDatosBundle:Idiomas:new.html.twig */
class __TwigTemplate_019a65c57af08c969adb02699b67ede8b958262309aca7897d997f0ccfab5ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Idiomas:new.html.twig", 1);
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
        $__internal_cf646f305f368b74f301e68edd610751976c245ddc852613d679ee9c068cb089 = $this->env->getExtension("native_profiler");
        $__internal_cf646f305f368b74f301e68edd610751976c245ddc852613d679ee9c068cb089->enter($__internal_cf646f305f368b74f301e68edd610751976c245ddc852613d679ee9c068cb089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Idiomas:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf646f305f368b74f301e68edd610751976c245ddc852613d679ee9c068cb089->leave($__internal_cf646f305f368b74f301e68edd610751976c245ddc852613d679ee9c068cb089_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bcf3158ebf87c9f29b64f53bad9b25064f270eabf7713c23663d45b284b20e4 = $this->env->getExtension("native_profiler");
        $__internal_9bcf3158ebf87c9f29b64f53bad9b25064f270eabf7713c23663d45b284b20e4->enter($__internal_9bcf3158ebf87c9f29b64f53bad9b25064f270eabf7713c23663d45b284b20e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Idiomas creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("idiomas");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_9bcf3158ebf87c9f29b64f53bad9b25064f270eabf7713c23663d45b284b20e4->leave($__internal_9bcf3158ebf87c9f29b64f53bad9b25064f270eabf7713c23663d45b284b20e4_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Idiomas:new.html.twig";
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
