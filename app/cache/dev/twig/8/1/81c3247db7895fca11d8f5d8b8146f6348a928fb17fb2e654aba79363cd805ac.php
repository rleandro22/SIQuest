<?php

/* UciSeguridadBundle::base.html.twig */
class __TwigTemplate_81c3247db7895fca11d8f5d8b8146f6348a928fb17fb2e654aba79363cd805ac extends Twig_Template
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
        $__internal_675b6cf197e3050a6bf05ccd12dae8a76d9ce070450d3f25139265126f4ac2b3 = $this->env->getExtension("native_profiler");
        $__internal_675b6cf197e3050a6bf05ccd12dae8a76d9ce070450d3f25139265126f4ac2b3->enter($__internal_675b6cf197e3050a6bf05ccd12dae8a76d9ce070450d3f25139265126f4ac2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_675b6cf197e3050a6bf05ccd12dae8a76d9ce070450d3f25139265126f4ac2b3->leave($__internal_675b6cf197e3050a6bf05ccd12dae8a76d9ce070450d3f25139265126f4ac2b3_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_aec79452e84cf51ee7a18d6a984c1187e71cf389a952462e2e65136270a26c52 = $this->env->getExtension("native_profiler");
        $__internal_aec79452e84cf51ee7a18d6a984c1187e71cf389a952462e2e65136270a26c52->enter($__internal_aec79452e84cf51ee7a18d6a984c1187e71cf389a952462e2e65136270a26c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_aec79452e84cf51ee7a18d6a984c1187e71cf389a952462e2e65136270a26c52->leave($__internal_aec79452e84cf51ee7a18d6a984c1187e71cf389a952462e2e65136270a26c52_prof);

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
