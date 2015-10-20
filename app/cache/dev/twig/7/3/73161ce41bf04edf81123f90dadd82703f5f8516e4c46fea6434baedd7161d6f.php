<?php

/* UciBaseDatosBundle:TipoPrueba:edit.html.twig */
class __TwigTemplate_73161ce41bf04edf81123f90dadd82703f5f8516e4c46fea6434baedd7161d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UciBaseDatosBundle:TipoPrueba:edit.html.twig", 1);
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
        $__internal_732e70d814447799b5ae17d3047cb18f1c4440bbd352bdb5cd5a14a6b3602229 = $this->env->getExtension("native_profiler");
        $__internal_732e70d814447799b5ae17d3047cb18f1c4440bbd352bdb5cd5a14a6b3602229->enter($__internal_732e70d814447799b5ae17d3047cb18f1c4440bbd352bdb5cd5a14a6b3602229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciBaseDatosBundle:TipoPrueba:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_732e70d814447799b5ae17d3047cb18f1c4440bbd352bdb5cd5a14a6b3602229->leave($__internal_732e70d814447799b5ae17d3047cb18f1c4440bbd352bdb5cd5a14a6b3602229_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_afd419127166d643ca03e360de18d4c8beb1587f98d6c053af2829d25385cb5c = $this->env->getExtension("native_profiler");
        $__internal_afd419127166d643ca03e360de18d4c8beb1587f98d6c053af2829d25385cb5c->enter($__internal_afd419127166d643ca03e360de18d4c8beb1587f98d6c053af2829d25385cb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>TipoPrueba edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("tipoprueba");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_afd419127166d643ca03e360de18d4c8beb1587f98d6c053af2829d25385cb5c->leave($__internal_afd419127166d643ca03e360de18d4c8beb1587f98d6c053af2829d25385cb5c_prof);

    }

    public function getTemplateName()
    {
        return "UciBaseDatosBundle:TipoPrueba:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
