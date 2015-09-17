<?php

/* UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig */
class __TwigTemplate_5058bbb89b5441ea622912f1a4772b70c48693e37b370fadb837c160d4d621dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciSeguridadBundle::base.html.twig", "UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciSeguridadBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3960c8398000aca25a29a1e8d9e487068ce869e7ae7067eb2c8766173f94412 = $this->env->getExtension("native_profiler");
        $__internal_d3960c8398000aca25a29a1e8d9e487068ce869e7ae7067eb2c8766173f94412->enter($__internal_d3960c8398000aca25a29a1e8d9e487068ce869e7ae7067eb2c8766173f94412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3960c8398000aca25a29a1e8d9e487068ce869e7ae7067eb2c8766173f94412->leave($__internal_d3960c8398000aca25a29a1e8d9e487068ce869e7ae7067eb2c8766173f94412_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_12a1b043fc4453a65e98628422a780a3d46b5ff86616958acfb485452be1c63f = $this->env->getExtension("native_profiler");
        $__internal_12a1b043fc4453a65e98628422a780a3d46b5ff86616958acfb485452be1c63f->enter($__internal_12a1b043fc4453a65e98628422a780a3d46b5ff86616958acfb485452be1c63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_12a1b043fc4453a65e98628422a780a3d46b5ff86616958acfb485452be1c63f->leave($__internal_12a1b043fc4453a65e98628422a780a3d46b5ff86616958acfb485452be1c63f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba4e74a82236b83cf5d37e413894a95d6ded09bb066bae5f31a370cc3df13e88 = $this->env->getExtension("native_profiler");
        $__internal_ba4e74a82236b83cf5d37e413894a95d6ded09bb066bae5f31a370cc3df13e88->enter($__internal_ba4e74a82236b83cf5d37e413894a95d6ded09bb066bae5f31a370cc3df13e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Identificarse</li>
        </ol>

        <div class=\"row\">

            <!-- Article main content -->
            <article class=\"col-xs-12 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Identificarse</h1>
                </header>

                <div class=\"col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <h3 class=\"thin text-center\">Ingrese a su cuenta</h3>
                            <p class=\"text-center text-muted\">Si no tiene cuenta solicite una a <a href=\"mailto:webmaster@uci.ac.cr\">webmaster@uci.ac.cr</a>. </p>
                            <hr>

                            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            echo "                                <div class=\"alert alert-info\">

                                    <font color=\"#FF0000\">";
            // line 34
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</font>

                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
                            <form action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"POST\">
                                <div class=\"top-margin\">
                                    <label>Usuario <span class=\"text-danger\">*</span></label>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Usuario\" name=\"_username\">
                                </div>
                                <div class=\"top-margin\">
                                    <label>Contraseña <span class=\"text-danger\">*</span></label>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Contraseña\" name=\"_password\">
                                </div>

                                <hr>

                                <div class=\"row\">
                                    <div class=\"col-lg-8\">
                                        <b><a href=\"\">¿Olvido su contraseña?</a></b>
                                    </div>
                                    <div class=\"col-lg-4 text-right\">
                                        <button class=\"btn btn-action\" type=\"submit\">Ingresar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </article>
            <!-- /Article -->

        </div>

    </div>\t<!-- /container -->



";
        
        $__internal_ba4e74a82236b83cf5d37e413894a95d6ded09bb066bae5f31a370cc3df13e88->leave($__internal_ba4e74a82236b83cf5d37e413894a95d6ded09bb066bae5f31a370cc3df13e88_prof);

    }

    public function getTemplateName()
    {
        return "UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  101 => 38,  91 => 34,  87 => 32,  83 => 31,  61 => 12,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
