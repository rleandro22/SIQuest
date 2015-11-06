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
        $__internal_e8868f9b7934def7a6bd045a6e71dba71d46d88c5fac45bc511bb55cbda217dc = $this->env->getExtension("native_profiler");
        $__internal_e8868f9b7934def7a6bd045a6e71dba71d46d88c5fac45bc511bb55cbda217dc->enter($__internal_e8868f9b7934def7a6bd045a6e71dba71d46d88c5fac45bc511bb55cbda217dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8868f9b7934def7a6bd045a6e71dba71d46d88c5fac45bc511bb55cbda217dc->leave($__internal_e8868f9b7934def7a6bd045a6e71dba71d46d88c5fac45bc511bb55cbda217dc_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_97f1f97fbc3a6ee601f6b94206fc294770dec1f2f686b727694ded24bc614a00 = $this->env->getExtension("native_profiler");
        $__internal_97f1f97fbc3a6ee601f6b94206fc294770dec1f2f686b727694ded24bc614a00->enter($__internal_97f1f97fbc3a6ee601f6b94206fc294770dec1f2f686b727694ded24bc614a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_97f1f97fbc3a6ee601f6b94206fc294770dec1f2f686b727694ded24bc614a00->leave($__internal_97f1f97fbc3a6ee601f6b94206fc294770dec1f2f686b727694ded24bc614a00_prof);

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
