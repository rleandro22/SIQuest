<?php

/* UciAsistenteAcademicaBundle::base.html.twig */
class __TwigTemplate_63a6ea58c49e0489b77832ba3442accb13c842eb7dfcce36b22bb8463ac26370 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "UciAsistenteAcademicaBundle::base.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'mensajeLogueado' => array($this, 'block_mensajeLogueado'),
            'navigation' => array($this, 'block_navigation'),
            'navegacionfooter' => array($this, 'block_navegacionfooter'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39b5cd1bcea7e38d33ef7065cb93b3b0870a03463568f38f4fbd9ee1fc11985d = $this->env->getExtension("native_profiler");
        $__internal_39b5cd1bcea7e38d33ef7065cb93b3b0870a03463568f38f4fbd9ee1fc11985d->enter($__internal_39b5cd1bcea7e38d33ef7065cb93b3b0870a03463568f38f4fbd9ee1fc11985d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39b5cd1bcea7e38d33ef7065cb93b3b0870a03463568f38f4fbd9ee1fc11985d->leave($__internal_39b5cd1bcea7e38d33ef7065cb93b3b0870a03463568f38f4fbd9ee1fc11985d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7b2c2edb05af9be82839597abb208ee9f645f49d6e31d245e87cbf46bff00fc = $this->env->getExtension("native_profiler");
        $__internal_f7b2c2edb05af9be82839597abb208ee9f645f49d6e31d245e87cbf46bff00fc->enter($__internal_f7b2c2edb05af9be82839597abb208ee9f645f49d6e31d245e87cbf46bff00fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/menuvertcss.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/footable-demos.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/notificaciones.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/apagador.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_f7b2c2edb05af9be82839597abb208ee9f645f49d6e31d245e87cbf46bff00fc->leave($__internal_f7b2c2edb05af9be82839597abb208ee9f645f49d6e31d245e87cbf46bff00fc_prof);

    }

    // line 13
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_86dc34c03c38a692d68d38f59b7f61a0666c0ad062d2c7578e2e2d6026794b37 = $this->env->getExtension("native_profiler");
        $__internal_86dc34c03c38a692d68d38f59b7f61a0666c0ad062d2c7578e2e2d6026794b37->enter($__internal_86dc34c03c38a692d68d38f59b7f61a0666c0ad062d2c7578e2e2d6026794b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_asistente_academica_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_86dc34c03c38a692d68d38f59b7f61a0666c0ad062d2c7578e2e2d6026794b37->leave($__internal_86dc34c03c38a692d68d38f59b7f61a0666c0ad062d2c7578e2e2d6026794b37_prof);

    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4b070cf07d8fa9b990540af5d2c8f295168a5c507a9c57fdc7cc4ee8eca1c81b = $this->env->getExtension("native_profiler");
        $__internal_4b070cf07d8fa9b990540af5d2c8f295168a5c507a9c57fdc7cc4ee8eca1c81b->enter($__internal_4b070cf07d8fa9b990540af5d2c8f295168a5c507a9c57fdc7cc4ee8eca1c81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 18
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a></li>
            <li id=\"notification_li\">
                <span id=\"notification_count\" class=\"hidden\">0</span>
                <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicesolicitudes");
        echo "\" id=\"notificationLink\">Solicitudes</a>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicecuestionario");
        echo "\">Mantenimiento Cuestionarios</a></li>
                </ul>
            </li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li>
                <a class=\"btn\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_4b070cf07d8fa9b990540af5d2c8f295168a5c507a9c57fdc7cc4ee8eca1c81b->leave($__internal_4b070cf07d8fa9b990540af5d2c8f295168a5c507a9c57fdc7cc4ee8eca1c81b_prof);

    }

    // line 38
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_1cd2a1afb1cd3e05b1bb010ff228015bedf819b1c03b8d0c3d57d08df25f8c50 = $this->env->getExtension("native_profiler");
        $__internal_1cd2a1afb1cd3e05b1bb010ff228015bedf819b1c03b8d0c3d57d08df25f8c50->enter($__internal_1cd2a1afb1cd3e05b1bb010ff228015bedf819b1c03b8d0c3d57d08df25f8c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 39
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a> | 
        <a href=\"\">Solicitudes</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_1cd2a1afb1cd3e05b1bb010ff228015bedf819b1c03b8d0c3d57d08df25f8c50->leave($__internal_1cd2a1afb1cd3e05b1bb010ff228015bedf819b1c03b8d0c3d57d08df25f8c50_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f672b0c184e3555295f726ec5191fc3db9c4463d56d691db9b3c27f196f7e59 = $this->env->getExtension("native_profiler");
        $__internal_7f672b0c184e3555295f726ec5191fc3db9c4463d56d691db9b3c27f196f7e59->enter($__internal_7f672b0c184e3555295f726ec5191fc3db9c4463d56d691db9b3c27f196f7e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" >
        function actualizarNotificaciones() {
            \$.ajax({
                url: \"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_contarSolicitudes");
        echo "\",
                type: \"POST\",
                success: function (data) {
                    if (!isNaN(data.numeroSolicitudes)) {
                        if (data.numeroSolicitudes == \"0\") {
                            \$(\"#notification_count\").fadeOut(\"slow\");
                            return false;
                        } else {
                            \$(\"#notification_count\").removeClass(\"hidden\");
                            \$(\"#notification_count\").fadeIn(\"slow\");
                            document.getElementById(\"notification_count\").innerHTML = data.numeroSolicitudes;
                            return false;
                        }
                    } else {
                        document.getElementById(\"notification_count\").innerHTML = \"0\";
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {

                }
            });
        }

        \$(document).ready(function () {
            actualizarNotificaciones();
            setInterval(function () {
                actualizarNotificaciones();
            }, 100000);
        });
    </script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_7f672b0c184e3555295f726ec5191fc3db9c4463d56d691db9b3c27f196f7e59->leave($__internal_7f672b0c184e3555295f726ec5191fc3db9c4463d56d691db9b3c27f196f7e59_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 87,  218 => 86,  214 => 85,  210 => 84,  206 => 83,  173 => 53,  165 => 49,  159 => 48,  149 => 43,  143 => 40,  140 => 39,  134 => 38,  123 => 33,  115 => 28,  107 => 23,  101 => 20,  97 => 18,  91 => 17,  78 => 14,  70 => 13,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
