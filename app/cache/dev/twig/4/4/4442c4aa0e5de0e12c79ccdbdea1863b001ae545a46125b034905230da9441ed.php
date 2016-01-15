<?php

/* UciAdministradorBundle::base.html.twig */
class __TwigTemplate_4442c4aa0e5de0e12c79ccdbdea1863b001ae545a46125b034905230da9441ed extends Twig_Template
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
        $__internal_5010185ac80905edc11bdce020289f6833481f2292d8ecf8c26030ddbd9b3c0c = $this->env->getExtension("native_profiler");
        $__internal_5010185ac80905edc11bdce020289f6833481f2292d8ecf8c26030ddbd9b3c0c->enter($__internal_5010185ac80905edc11bdce020289f6833481f2292d8ecf8c26030ddbd9b3c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5010185ac80905edc11bdce020289f6833481f2292d8ecf8c26030ddbd9b3c0c->leave($__internal_5010185ac80905edc11bdce020289f6833481f2292d8ecf8c26030ddbd9b3c0c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb700400407fc13b21a0fc31849b2c47af1e5b26fd6a3da6a5d9cc5cb7bb57d5 = $this->env->getExtension("native_profiler");
        $__internal_fb700400407fc13b21a0fc31849b2c47af1e5b26fd6a3da6a5d9cc5cb7bb57d5->enter($__internal_fb700400407fc13b21a0fc31849b2c47af1e5b26fd6a3da6a5d9cc5cb7bb57d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fb700400407fc13b21a0fc31849b2c47af1e5b26fd6a3da6a5d9cc5cb7bb57d5->leave($__internal_fb700400407fc13b21a0fc31849b2c47af1e5b26fd6a3da6a5d9cc5cb7bb57d5_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_65d66e0963e155bba7aea54fb70857c154d7e3bce55fa47af84a547942609804 = $this->env->getExtension("native_profiler");
        $__internal_65d66e0963e155bba7aea54fb70857c154d7e3bce55fa47af84a547942609804->enter($__internal_65d66e0963e155bba7aea54fb70857c154d7e3bce55fa47af84a547942609804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

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
        
        $__internal_65d66e0963e155bba7aea54fb70857c154d7e3bce55fa47af84a547942609804->leave($__internal_65d66e0963e155bba7aea54fb70857c154d7e3bce55fa47af84a547942609804_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ee2deb9702fea7ae47ad9eeb3d4dfdfada761fafe82322d6bb5484dc6e2335c8 = $this->env->getExtension("native_profiler");
        $__internal_ee2deb9702fea7ae47ad9eeb3d4dfdfada761fafe82322d6bb5484dc6e2335c8->enter($__internal_ee2deb9702fea7ae47ad9eeb3d4dfdfada761fafe82322d6bb5484dc6e2335c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 16
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceobservaciones");
        echo "\">Observaciones</a></li>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicesolicitudes");
        echo "\">Solicitudes</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"active\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecategoria");
        echo "\">Mantenimiento Categorias</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\">Mantenimiento Cuestionarios</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Mantenimiento Libros</a></li>
                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\">Mantenimiento Preguntas</a></li>
                    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Mantenimiento Usuarios</a></li>
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
        
        $__internal_ee2deb9702fea7ae47ad9eeb3d4dfdfada761fafe82322d6bb5484dc6e2335c8->leave($__internal_ee2deb9702fea7ae47ad9eeb3d4dfdfada761fafe82322d6bb5484dc6e2335c8_prof);

    }

    // line 38
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_2046c1d1e1b21aedbd037690d5a7fdc2542bb65a50a8f57da9cbcd0f6b0c4cc4 = $this->env->getExtension("native_profiler");
        $__internal_2046c1d1e1b21aedbd037690d5a7fdc2542bb65a50a8f57da9cbcd0f6b0c4cc4->enter($__internal_2046c1d1e1b21aedbd037690d5a7fdc2542bb65a50a8f57da9cbcd0f6b0c4cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 39
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceobservaciones");
        echo "\">Observaciones</a> |
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicesolicitudes");
        echo "\">Solicitudes</a> |
        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Libros</a> |
        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\">Cuestionarios</a> |
        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\">Preguntas</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_2046c1d1e1b21aedbd037690d5a7fdc2542bb65a50a8f57da9cbcd0f6b0c4cc4->leave($__internal_2046c1d1e1b21aedbd037690d5a7fdc2542bb65a50a8f57da9cbcd0f6b0c4cc4_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_89fea2dd0a78fff794279ff075eaac3f48c31952e2a2ca98f881a28796fbc152 = $this->env->getExtension("native_profiler");
        $__internal_89fea2dd0a78fff794279ff075eaac3f48c31952e2a2ca98f881a28796fbc152->enter($__internal_89fea2dd0a78fff794279ff075eaac3f48c31952e2a2ca98f881a28796fbc152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_89fea2dd0a78fff794279ff075eaac3f48c31952e2a2ca98f881a28796fbc152->leave($__internal_89fea2dd0a78fff794279ff075eaac3f48c31952e2a2ca98f881a28796fbc152_prof);

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
        return array (  214 => 58,  210 => 57,  206 => 56,  202 => 55,  198 => 54,  193 => 53,  187 => 52,  177 => 47,  172 => 45,  168 => 44,  164 => 43,  160 => 42,  156 => 41,  152 => 40,  149 => 39,  143 => 38,  132 => 33,  124 => 28,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  101 => 20,  97 => 19,  93 => 18,  89 => 16,  83 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
