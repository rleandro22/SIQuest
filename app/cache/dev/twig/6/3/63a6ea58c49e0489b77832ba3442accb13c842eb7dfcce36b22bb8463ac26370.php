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
        $__internal_40524c9efeccb17da03d3a084d9c03b5f015236def8f317c2d5eca7e432677ee = $this->env->getExtension("native_profiler");
        $__internal_40524c9efeccb17da03d3a084d9c03b5f015236def8f317c2d5eca7e432677ee->enter($__internal_40524c9efeccb17da03d3a084d9c03b5f015236def8f317c2d5eca7e432677ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40524c9efeccb17da03d3a084d9c03b5f015236def8f317c2d5eca7e432677ee->leave($__internal_40524c9efeccb17da03d3a084d9c03b5f015236def8f317c2d5eca7e432677ee_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3365963ce8e820663c5192957523995ff93a6df7e3e9aa7bccca7f0463b04538 = $this->env->getExtension("native_profiler");
        $__internal_3365963ce8e820663c5192957523995ff93a6df7e3e9aa7bccca7f0463b04538->enter($__internal_3365963ce8e820663c5192957523995ff93a6df7e3e9aa7bccca7f0463b04538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3365963ce8e820663c5192957523995ff93a6df7e3e9aa7bccca7f0463b04538->leave($__internal_3365963ce8e820663c5192957523995ff93a6df7e3e9aa7bccca7f0463b04538_prof);

    }

    // line 13
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_bd446af5f11b7a4b2a6551c89d66a9e6d69cf74e5d0598d5c4c30f92c8d4e0b1 = $this->env->getExtension("native_profiler");
        $__internal_bd446af5f11b7a4b2a6551c89d66a9e6d69cf74e5d0598d5c4c30f92c8d4e0b1->enter($__internal_bd446af5f11b7a4b2a6551c89d66a9e6d69cf74e5d0598d5c4c30f92c8d4e0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

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
        
        $__internal_bd446af5f11b7a4b2a6551c89d66a9e6d69cf74e5d0598d5c4c30f92c8d4e0b1->leave($__internal_bd446af5f11b7a4b2a6551c89d66a9e6d69cf74e5d0598d5c4c30f92c8d4e0b1_prof);

    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_bb4ae59a61748b9563ea0bd337e882b60248f83f683ba407814403e5ec9f0f37 = $this->env->getExtension("native_profiler");
        $__internal_bb4ae59a61748b9563ea0bd337e882b60248f83f683ba407814403e5ec9f0f37->enter($__internal_bb4ae59a61748b9563ea0bd337e882b60248f83f683ba407814403e5ec9f0f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_bb4ae59a61748b9563ea0bd337e882b60248f83f683ba407814403e5ec9f0f37->leave($__internal_bb4ae59a61748b9563ea0bd337e882b60248f83f683ba407814403e5ec9f0f37_prof);

    }

    // line 38
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_1691a53b17341484579a5a365922bfacdb4d73e644c5fb6e26dd0a65660d9adc = $this->env->getExtension("native_profiler");
        $__internal_1691a53b17341484579a5a365922bfacdb4d73e644c5fb6e26dd0a65660d9adc->enter($__internal_1691a53b17341484579a5a365922bfacdb4d73e644c5fb6e26dd0a65660d9adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_1691a53b17341484579a5a365922bfacdb4d73e644c5fb6e26dd0a65660d9adc->leave($__internal_1691a53b17341484579a5a365922bfacdb4d73e644c5fb6e26dd0a65660d9adc_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d34900cdeed7c640ec6fcbed39316d517240dc8caf5c73ea0f9c2ca282cd124 = $this->env->getExtension("native_profiler");
        $__internal_4d34900cdeed7c640ec6fcbed39316d517240dc8caf5c73ea0f9c2ca282cd124->enter($__internal_4d34900cdeed7c640ec6fcbed39316d517240dc8caf5c73ea0f9c2ca282cd124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4d34900cdeed7c640ec6fcbed39316d517240dc8caf5c73ea0f9c2ca282cd124->leave($__internal_4d34900cdeed7c640ec6fcbed39316d517240dc8caf5c73ea0f9c2ca282cd124_prof);

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
