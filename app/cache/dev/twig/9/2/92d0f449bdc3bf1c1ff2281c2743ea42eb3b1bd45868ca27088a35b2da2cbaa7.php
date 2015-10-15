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
        $__internal_820074c625d748ddef31917985faadcb184c3ca33312519dc1e0c85b3b0e7cfd = $this->env->getExtension("native_profiler");
        $__internal_820074c625d748ddef31917985faadcb184c3ca33312519dc1e0c85b3b0e7cfd->enter($__internal_820074c625d748ddef31917985faadcb184c3ca33312519dc1e0c85b3b0e7cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_820074c625d748ddef31917985faadcb184c3ca33312519dc1e0c85b3b0e7cfd->leave($__internal_820074c625d748ddef31917985faadcb184c3ca33312519dc1e0c85b3b0e7cfd_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_c711072616e487305cef1dfba2bd1334c3363808a52d2f96c4e8ee258c3b83d9 = $this->env->getExtension("native_profiler");
        $__internal_c711072616e487305cef1dfba2bd1334c3363808a52d2f96c4e8ee258c3b83d9->enter($__internal_c711072616e487305cef1dfba2bd1334c3363808a52d2f96c4e8ee258c3b83d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_c711072616e487305cef1dfba2bd1334c3363808a52d2f96c4e8ee258c3b83d9->leave($__internal_c711072616e487305cef1dfba2bd1334c3363808a52d2f96c4e8ee258c3b83d9_prof);

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
