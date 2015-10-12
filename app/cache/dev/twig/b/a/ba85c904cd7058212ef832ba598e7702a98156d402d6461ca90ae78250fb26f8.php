<?php

/* UciBaseDatosBundle:Libro:new.html.twig */
class __TwigTemplate_ba85c904cd7058212ef832ba598e7702a98156d402d6461ca90ae78250fb26f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:Libro:new.html.twig", 1);
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
        $__internal_f1aa94814c4d259134874611176600f233e217a05cffa3a038cc8dcec7b19201 = $this->env->getExtension("native_profiler");
        $__internal_f1aa94814c4d259134874611176600f233e217a05cffa3a038cc8dcec7b19201->enter($__internal_f1aa94814c4d259134874611176600f233e217a05cffa3a038cc8dcec7b19201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:Libro:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1aa94814c4d259134874611176600f233e217a05cffa3a038cc8dcec7b19201->leave($__internal_f1aa94814c4d259134874611176600f233e217a05cffa3a038cc8dcec7b19201_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b35da78a05ad5e6d498b1e5c12043f4b6d4e8ad3dc7b47c6c3c994bfcadb35c = $this->env->getExtension("native_profiler");
        $__internal_4b35da78a05ad5e6d498b1e5c12043f4b6d4e8ad3dc7b47c6c3c994bfcadb35c->enter($__internal_4b35da78a05ad5e6d498b1e5c12043f4b6d4e8ad3dc7b47c6c3c994bfcadb35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Libro creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("libro");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_4b35da78a05ad5e6d498b1e5c12043f4b6d4e8ad3dc7b47c6c3c994bfcadb35c->leave($__internal_4b35da78a05ad5e6d498b1e5c12043f4b6d4e8ad3dc7b47c6c3c994bfcadb35c_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:Libro:new.html.twig";
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
