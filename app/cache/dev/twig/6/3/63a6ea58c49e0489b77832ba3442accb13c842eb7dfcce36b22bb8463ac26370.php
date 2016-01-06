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
        $__internal_5243f4831bb1623653ded618a6564bb380d88c77aec89d129ae944c9607c4b16 = $this->env->getExtension("native_profiler");
        $__internal_5243f4831bb1623653ded618a6564bb380d88c77aec89d129ae944c9607c4b16->enter($__internal_5243f4831bb1623653ded618a6564bb380d88c77aec89d129ae944c9607c4b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5243f4831bb1623653ded618a6564bb380d88c77aec89d129ae944c9607c4b16->leave($__internal_5243f4831bb1623653ded618a6564bb380d88c77aec89d129ae944c9607c4b16_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c45488aefc0612b6a17fd6f53eee6f36f54b584c37cb009fa4571235716378fb = $this->env->getExtension("native_profiler");
        $__internal_c45488aefc0612b6a17fd6f53eee6f36f54b584c37cb009fa4571235716378fb->enter($__internal_c45488aefc0612b6a17fd6f53eee6f36f54b584c37cb009fa4571235716378fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c45488aefc0612b6a17fd6f53eee6f36f54b584c37cb009fa4571235716378fb->leave($__internal_c45488aefc0612b6a17fd6f53eee6f36f54b584c37cb009fa4571235716378fb_prof);

    }

    // line 13
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_64e7b74ecbb6cdadb4f1c6c3c343b98a1be427db837be4e15b6e2898230619a4 = $this->env->getExtension("native_profiler");
        $__internal_64e7b74ecbb6cdadb4f1c6c3c343b98a1be427db837be4e15b6e2898230619a4->enter($__internal_64e7b74ecbb6cdadb4f1c6c3c343b98a1be427db837be4e15b6e2898230619a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

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
        
        $__internal_64e7b74ecbb6cdadb4f1c6c3c343b98a1be427db837be4e15b6e2898230619a4->leave($__internal_64e7b74ecbb6cdadb4f1c6c3c343b98a1be427db837be4e15b6e2898230619a4_prof);

    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_12aea5d8f2eb3380100f2e1066726d4d01c0fd5f39def20ab70312a7ba749aaf = $this->env->getExtension("native_profiler");
        $__internal_12aea5d8f2eb3380100f2e1066726d4d01c0fd5f39def20ab70312a7ba749aaf->enter($__internal_12aea5d8f2eb3380100f2e1066726d4d01c0fd5f39def20ab70312a7ba749aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_12aea5d8f2eb3380100f2e1066726d4d01c0fd5f39def20ab70312a7ba749aaf->leave($__internal_12aea5d8f2eb3380100f2e1066726d4d01c0fd5f39def20ab70312a7ba749aaf_prof);

    }

    // line 38
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_6c7633aa6cda55bf6da47121c3c70591f086fd3bc117067c98bc20a618d67e52 = $this->env->getExtension("native_profiler");
        $__internal_6c7633aa6cda55bf6da47121c3c70591f086fd3bc117067c98bc20a618d67e52->enter($__internal_6c7633aa6cda55bf6da47121c3c70591f086fd3bc117067c98bc20a618d67e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_6c7633aa6cda55bf6da47121c3c70591f086fd3bc117067c98bc20a618d67e52->leave($__internal_6c7633aa6cda55bf6da47121c3c70591f086fd3bc117067c98bc20a618d67e52_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42b5b9d91d75ee0c9ff4729db3f79c758dcb88b3d850366451c7632da12818e0 = $this->env->getExtension("native_profiler");
        $__internal_42b5b9d91d75ee0c9ff4729db3f79c758dcb88b3d850366451c7632da12818e0->enter($__internal_42b5b9d91d75ee0c9ff4729db3f79c758dcb88b3d850366451c7632da12818e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            }, 10000);
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
        
        $__internal_42b5b9d91d75ee0c9ff4729db3f79c758dcb88b3d850366451c7632da12818e0->leave($__internal_42b5b9d91d75ee0c9ff4729db3f79c758dcb88b3d850366451c7632da12818e0_prof);

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
