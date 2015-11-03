<?php

/* UciSeguridadBundle::base.html.twig */
class __TwigTemplate_92d0f449bdc3bf1c1ff2281c2743ea42eb3b1bd45868ca27088a35b2da2cbaa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "UciSeguridadBundle::base.html.twig", 2);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81cea27be01e382cad506a684cfd31e7897f1508bdd61e4f589226fd79cc6308 = $this->env->getExtension("native_profiler");
        $__internal_81cea27be01e382cad506a684cfd31e7897f1508bdd61e4f589226fd79cc6308->enter($__internal_81cea27be01e382cad506a684cfd31e7897f1508bdd61e4f589226fd79cc6308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81cea27be01e382cad506a684cfd31e7897f1508bdd61e4f589226fd79cc6308->leave($__internal_81cea27be01e382cad506a684cfd31e7897f1508bdd61e4f589226fd79cc6308_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_59b2565eb8b1822144b5a4e2934ee94d5f3c35af58844d1bbe504e842a324b09 = $this->env->getExtension("native_profiler");
        $__internal_59b2565eb8b1822144b5a4e2934ee94d5f3c35af58844d1bbe504e842a324b09->enter($__internal_59b2565eb8b1822144b5a4e2934ee94d5f3c35af58844d1bbe504e842a324b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <!-- Header -->
    <header id=\"head\">
        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"lead\">UNIVERSIDAD PARA LA COOPERACIÓN INTERNACIONAL</h1>
                <p class=\"tagline\">Sistema de generación de cuestionarios para la GSPM</p>
                <p><a href=\"http://www.uci.ac.cr/\" class=\"btn btn-action btn-lg\" role=\"button\">Página UCI</a><a href=\"http://www.ucipfg.com/\" class=\"btn btn-default btn-lg\" role=\"button\">Campus virtual</a> </p>
            </div>
        </div>
    </header>
    <!-- /Header -->
";
        
        $__internal_59b2565eb8b1822144b5a4e2934ee94d5f3c35af58844d1bbe504e842a324b09->leave($__internal_59b2565eb8b1822144b5a4e2934ee94d5f3c35af58844d1bbe504e842a324b09_prof);

    }

    public function getTemplateName()
    {
        return "UciSeguridadBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 2,);
    }
}
