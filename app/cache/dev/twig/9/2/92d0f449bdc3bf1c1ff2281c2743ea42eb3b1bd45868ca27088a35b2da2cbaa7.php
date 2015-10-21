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
        $__internal_4abf9d8f7a78c4830118887b4f5e055dec46d4e7d6492b71857c42d174ef062d = $this->env->getExtension("native_profiler");
        $__internal_4abf9d8f7a78c4830118887b4f5e055dec46d4e7d6492b71857c42d174ef062d->enter($__internal_4abf9d8f7a78c4830118887b4f5e055dec46d4e7d6492b71857c42d174ef062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4abf9d8f7a78c4830118887b4f5e055dec46d4e7d6492b71857c42d174ef062d->leave($__internal_4abf9d8f7a78c4830118887b4f5e055dec46d4e7d6492b71857c42d174ef062d_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_267acf42de2eccf1877f7ba19108a7b17be979c69b4e4a2e8f8e0f2985746501 = $this->env->getExtension("native_profiler");
        $__internal_267acf42de2eccf1877f7ba19108a7b17be979c69b4e4a2e8f8e0f2985746501->enter($__internal_267acf42de2eccf1877f7ba19108a7b17be979c69b4e4a2e8f8e0f2985746501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_267acf42de2eccf1877f7ba19108a7b17be979c69b4e4a2e8f8e0f2985746501->leave($__internal_267acf42de2eccf1877f7ba19108a7b17be979c69b4e4a2e8f8e0f2985746501_prof);

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
