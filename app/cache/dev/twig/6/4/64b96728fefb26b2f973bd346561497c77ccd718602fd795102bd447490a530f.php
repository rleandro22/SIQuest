<?php

/* UciAdministradorBundle::base.html.twig */
class __TwigTemplate_64b96728fefb26b2f973bd346561497c77ccd718602fd795102bd447490a530f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "UciAdministradorBundle::base.html.twig", 2);
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
        $__internal_7ec9d47872cfbca06592d2083e4e83e9bdd8fb64b5fa447267e224d1acc74a11 = $this->env->getExtension("native_profiler");
        $__internal_7ec9d47872cfbca06592d2083e4e83e9bdd8fb64b5fa447267e224d1acc74a11->enter($__internal_7ec9d47872cfbca06592d2083e4e83e9bdd8fb64b5fa447267e224d1acc74a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ec9d47872cfbca06592d2083e4e83e9bdd8fb64b5fa447267e224d1acc74a11->leave($__internal_7ec9d47872cfbca06592d2083e4e83e9bdd8fb64b5fa447267e224d1acc74a11_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7c502ee76881d043b3733053fcb075cf335e226637950d573b8cb3129098c18 = $this->env->getExtension("native_profiler");
        $__internal_d7c502ee76881d043b3733053fcb075cf335e226637950d573b8cb3129098c18->enter($__internal_d7c502ee76881d043b3733053fcb075cf335e226637950d573b8cb3129098c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
";
        
        $__internal_d7c502ee76881d043b3733053fcb075cf335e226637950d573b8cb3129098c18->leave($__internal_d7c502ee76881d043b3733053fcb075cf335e226637950d573b8cb3129098c18_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_f9c2d07102f9a0a6b46391c48a0883762a4019d2ea6c883ae2f7c766c79cd051 = $this->env->getExtension("native_profiler");
        $__internal_f9c2d07102f9a0a6b46391c48a0883762a4019d2ea6c883ae2f7c766c79cd051->enter($__internal_f9c2d07102f9a0a6b46391c48a0883762a4019d2ea6c883ae2f7c766c79cd051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_f9c2d07102f9a0a6b46391c48a0883762a4019d2ea6c883ae2f7c766c79cd051->leave($__internal_f9c2d07102f9a0a6b46391c48a0883762a4019d2ea6c883ae2f7c766c79cd051_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4d6a1c0e9b7f0f7f89e83f95ce7034c52f259c1156194cde9f072d9c544de6b4 = $this->env->getExtension("native_profiler");
        $__internal_4d6a1c0e9b7f0f7f89e83f95ce7034c52f259c1156194cde9f072d9c544de6b4->enter($__internal_4d6a1c0e9b7f0f7f89e83f95ce7034c52f259c1156194cde9f072d9c544de6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 16
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicesolicitudes");
        echo "\">Solicitudes</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"active\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecategoria");
        echo "\">Mantenimiento Categorias</a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\">Mantenimiento Cuestionarios</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Mantenimiento Libros</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\">Mantenimiento Preguntas</a></li>
                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Mantenimiento Usuarios</a></li>
                </ul>
            </li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li>
                <a class=\"btn\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_4d6a1c0e9b7f0f7f89e83f95ce7034c52f259c1156194cde9f072d9c544de6b4->leave($__internal_4d6a1c0e9b7f0f7f89e83f95ce7034c52f259c1156194cde9f072d9c544de6b4_prof);

    }

    // line 37
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_d0dfafb25d208517e3a22179936ef9cf853bb8295b6e19745f1fd6c453338fe6 = $this->env->getExtension("native_profiler");
        $__internal_d0dfafb25d208517e3a22179936ef9cf853bb8295b6e19745f1fd6c453338fe6->enter($__internal_d0dfafb25d208517e3a22179936ef9cf853bb8295b6e19745f1fd6c453338fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 38
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
        <a href=\"\">Solicitudes</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_d0dfafb25d208517e3a22179936ef9cf853bb8295b6e19745f1fd6c453338fe6->leave($__internal_d0dfafb25d208517e3a22179936ef9cf853bb8295b6e19745f1fd6c453338fe6_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb1f15ac206359b38fba60c93697eea099bbfaed8db57e797e58abcce291e02f = $this->env->getExtension("native_profiler");
        $__internal_bb1f15ac206359b38fba60c93697eea099bbfaed8db57e797e58abcce291e02f->enter($__internal_bb1f15ac206359b38fba60c93697eea099bbfaed8db57e797e58abcce291e02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_bb1f15ac206359b38fba60c93697eea099bbfaed8db57e797e58abcce291e02f->leave($__internal_bb1f15ac206359b38fba60c93697eea099bbfaed8db57e797e58abcce291e02f_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 53,  187 => 52,  183 => 51,  179 => 50,  175 => 49,  170 => 48,  164 => 47,  154 => 42,  148 => 39,  145 => 38,  139 => 37,  128 => 32,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  97 => 19,  93 => 18,  89 => 16,  83 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
