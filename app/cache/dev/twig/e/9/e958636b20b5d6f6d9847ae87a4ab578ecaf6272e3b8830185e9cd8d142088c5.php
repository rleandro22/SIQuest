<?php

/* UciSeguridadBundle::base.html.twig */
class __TwigTemplate_e958636b20b5d6f6d9847ae87a4ab578ecaf6272e3b8830185e9cd8d142088c5 extends Twig_Template
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
        $__internal_be57569c26206caaa144798b4e19c845ffdaf7dd0ca56c3d6edde6f555096b43 = $this->env->getExtension("native_profiler");
        $__internal_be57569c26206caaa144798b4e19c845ffdaf7dd0ca56c3d6edde6f555096b43->enter($__internal_be57569c26206caaa144798b4e19c845ffdaf7dd0ca56c3d6edde6f555096b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be57569c26206caaa144798b4e19c845ffdaf7dd0ca56c3d6edde6f555096b43->leave($__internal_be57569c26206caaa144798b4e19c845ffdaf7dd0ca56c3d6edde6f555096b43_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_b4cc07ef278f2fdb3ceaeb5ebd71a785e1034c8f02e32f208ce8424c0587f7ae = $this->env->getExtension("native_profiler");
        $__internal_b4cc07ef278f2fdb3ceaeb5ebd71a785e1034c8f02e32f208ce8424c0587f7ae->enter($__internal_b4cc07ef278f2fdb3ceaeb5ebd71a785e1034c8f02e32f208ce8424c0587f7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_b4cc07ef278f2fdb3ceaeb5ebd71a785e1034c8f02e32f208ce8424c0587f7ae->leave($__internal_b4cc07ef278f2fdb3ceaeb5ebd71a785e1034c8f02e32f208ce8424c0587f7ae_prof);

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
