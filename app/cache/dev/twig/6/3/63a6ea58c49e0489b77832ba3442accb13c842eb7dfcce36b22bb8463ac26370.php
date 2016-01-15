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
        $__internal_93b5126c297e6509e362f1b3b9d16708330d18c249939f47690e8692740c51a4 = $this->env->getExtension("native_profiler");
        $__internal_93b5126c297e6509e362f1b3b9d16708330d18c249939f47690e8692740c51a4->enter($__internal_93b5126c297e6509e362f1b3b9d16708330d18c249939f47690e8692740c51a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93b5126c297e6509e362f1b3b9d16708330d18c249939f47690e8692740c51a4->leave($__internal_93b5126c297e6509e362f1b3b9d16708330d18c249939f47690e8692740c51a4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cfdde844735b242ea2c5c593f7329b9d6a5ab33f9bfd9ca40d871c80b4420866 = $this->env->getExtension("native_profiler");
        $__internal_cfdde844735b242ea2c5c593f7329b9d6a5ab33f9bfd9ca40d871c80b4420866->enter($__internal_cfdde844735b242ea2c5c593f7329b9d6a5ab33f9bfd9ca40d871c80b4420866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_cfdde844735b242ea2c5c593f7329b9d6a5ab33f9bfd9ca40d871c80b4420866->leave($__internal_cfdde844735b242ea2c5c593f7329b9d6a5ab33f9bfd9ca40d871c80b4420866_prof);

    }

    // line 13
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_de3d02e431309089c20ab24cb9bbb7e06ee5281ac32f96cf3ec70665f22110a9 = $this->env->getExtension("native_profiler");
        $__internal_de3d02e431309089c20ab24cb9bbb7e06ee5281ac32f96cf3ec70665f22110a9->enter($__internal_de3d02e431309089c20ab24cb9bbb7e06ee5281ac32f96cf3ec70665f22110a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

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
        
        $__internal_de3d02e431309089c20ab24cb9bbb7e06ee5281ac32f96cf3ec70665f22110a9->leave($__internal_de3d02e431309089c20ab24cb9bbb7e06ee5281ac32f96cf3ec70665f22110a9_prof);

    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_bd0969277b0f4130c51433614863d237c56ab49067dd0e5fafeabc08b509b038 = $this->env->getExtension("native_profiler");
        $__internal_bd0969277b0f4130c51433614863d237c56ab49067dd0e5fafeabc08b509b038->enter($__internal_bd0969277b0f4130c51433614863d237c56ab49067dd0e5fafeabc08b509b038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 18
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indiceobservaciones");
        echo "\">Observaciones</a></li>
            <li id=\"notification_li\">
                <span id=\"notification_count\" class=\"hidden\">0</span>
                <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicesolicitudes");
        echo "\" id=\"notificationLink\">Solicitudes</a>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicecuestionario");
        echo "\">Mantenimiento Cuestionarios</a></li>
                </ul>
            </li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li>
                <a class=\"btn\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_bd0969277b0f4130c51433614863d237c56ab49067dd0e5fafeabc08b509b038->leave($__internal_bd0969277b0f4130c51433614863d237c56ab49067dd0e5fafeabc08b509b038_prof);

    }

    // line 39
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_04db56d1e519c45a7d894046e0c8465eee6d56590e0b21d5f1f3a6cc5418c22c = $this->env->getExtension("native_profiler");
        $__internal_04db56d1e519c45a7d894046e0c8465eee6d56590e0b21d5f1f3a6cc5418c22c->enter($__internal_04db56d1e519c45a7d894046e0c8465eee6d56590e0b21d5f1f3a6cc5418c22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 40
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a> | 
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_indicesolicitudes");
        echo "\">Solicitudes</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_04db56d1e519c45a7d894046e0c8465eee6d56590e0b21d5f1f3a6cc5418c22c->leave($__internal_04db56d1e519c45a7d894046e0c8465eee6d56590e0b21d5f1f3a6cc5418c22c_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77befd505a10c72a6c75806d7d44e84115b0b974428155393f1a4c617bc194de = $this->env->getExtension("native_profiler");
        $__internal_77befd505a10c72a6c75806d7d44e84115b0b974428155393f1a4c617bc194de->enter($__internal_77befd505a10c72a6c75806d7d44e84115b0b974428155393f1a4c617bc194de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" >
        function actualizarNotificaciones() {
            \$.ajax({
                url: \"";
        // line 54
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
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_77befd505a10c72a6c75806d7d44e84115b0b974428155393f1a4c617bc194de->leave($__internal_77befd505a10c72a6c75806d7d44e84115b0b974428155393f1a4c617bc194de_prof);

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
        return array (  229 => 88,  225 => 87,  221 => 86,  217 => 85,  213 => 84,  180 => 54,  172 => 50,  166 => 49,  156 => 44,  151 => 42,  147 => 41,  144 => 40,  138 => 39,  127 => 34,  119 => 29,  111 => 24,  105 => 21,  101 => 20,  97 => 18,  91 => 17,  78 => 14,  70 => 13,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
