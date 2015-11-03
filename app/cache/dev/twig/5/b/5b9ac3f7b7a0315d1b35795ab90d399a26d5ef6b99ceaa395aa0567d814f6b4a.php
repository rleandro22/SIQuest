<?php

/* UciAdministradorBundle::base.html.twig */
class __TwigTemplate_5b9ac3f7b7a0315d1b35795ab90d399a26d5ef6b99ceaa395aa0567d814f6b4a extends Twig_Template
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
        $__internal_1c9446938cab63eaedb844c1b133562110a83e4719967dcb9823f917e111e80c = $this->env->getExtension("native_profiler");
        $__internal_1c9446938cab63eaedb844c1b133562110a83e4719967dcb9823f917e111e80c->enter($__internal_1c9446938cab63eaedb844c1b133562110a83e4719967dcb9823f917e111e80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c9446938cab63eaedb844c1b133562110a83e4719967dcb9823f917e111e80c->leave($__internal_1c9446938cab63eaedb844c1b133562110a83e4719967dcb9823f917e111e80c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a78faca17b06c11d46a13421c3245f04370d67979788cfbf8fdb47be354360b = $this->env->getExtension("native_profiler");
        $__internal_1a78faca17b06c11d46a13421c3245f04370d67979788cfbf8fdb47be354360b->enter($__internal_1a78faca17b06c11d46a13421c3245f04370d67979788cfbf8fdb47be354360b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1a78faca17b06c11d46a13421c3245f04370d67979788cfbf8fdb47be354360b->leave($__internal_1a78faca17b06c11d46a13421c3245f04370d67979788cfbf8fdb47be354360b_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_9d687e48358cb07ed3f665e0cc9bbc77c6d69d1197997aa558bfe20379ad9c1b = $this->env->getExtension("native_profiler");
        $__internal_9d687e48358cb07ed3f665e0cc9bbc77c6d69d1197997aa558bfe20379ad9c1b->enter($__internal_9d687e48358cb07ed3f665e0cc9bbc77c6d69d1197997aa558bfe20379ad9c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_9d687e48358cb07ed3f665e0cc9bbc77c6d69d1197997aa558bfe20379ad9c1b->leave($__internal_9d687e48358cb07ed3f665e0cc9bbc77c6d69d1197997aa558bfe20379ad9c1b_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d9e36af50f77ceb5c22c694a321648e136ad8eb16888406fd5bd1c6a97f65337 = $this->env->getExtension("native_profiler");
        $__internal_d9e36af50f77ceb5c22c694a321648e136ad8eb16888406fd5bd1c6a97f65337->enter($__internal_d9e36af50f77ceb5c22c694a321648e136ad8eb16888406fd5bd1c6a97f65337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 16
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"active\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Mantenimiento Usuarios</a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecategoria");
        echo "\">Mantenimiento Categorias</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Mantenimiento Libros</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\">Mantenimiento Preguntas</a></li>
                </ul>
            </li>
            <li>
                <a class=\"btn\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_d9e36af50f77ceb5c22c694a321648e136ad8eb16888406fd5bd1c6a97f65337->leave($__internal_d9e36af50f77ceb5c22c694a321648e136ad8eb16888406fd5bd1c6a97f65337_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_9b006321c36a79e793c0d1726ad703e8ea0fc5088f33f52dd2c218e098597cce = $this->env->getExtension("native_profiler");
        $__internal_9b006321c36a79e793c0d1726ad703e8ea0fc5088f33f52dd2c218e098597cce->enter($__internal_9b006321c36a79e793c0d1726ad703e8ea0fc5088f33f52dd2c218e098597cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 36
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
        <a href=\"about.html\">Ayuda</a> |
        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_9b006321c36a79e793c0d1726ad703e8ea0fc5088f33f52dd2c218e098597cce->leave($__internal_9b006321c36a79e793c0d1726ad703e8ea0fc5088f33f52dd2c218e098597cce_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af7dd305879b0ae9a43d66a08f66c2e6f1f6fccbb972ae73821b2b87116d682d = $this->env->getExtension("native_profiler");
        $__internal_af7dd305879b0ae9a43d66a08f66c2e6f1f6fccbb972ae73821b2b87116d682d->enter($__internal_af7dd305879b0ae9a43d66a08f66c2e6f1f6fccbb972ae73821b2b87116d682d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_af7dd305879b0ae9a43d66a08f66c2e6f1f6fccbb972ae73821b2b87116d682d->leave($__internal_af7dd305879b0ae9a43d66a08f66c2e6f1f6fccbb972ae73821b2b87116d682d_prof);

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
        return array (  180 => 50,  176 => 49,  172 => 48,  168 => 47,  164 => 46,  159 => 45,  153 => 44,  143 => 39,  138 => 37,  135 => 36,  129 => 35,  118 => 30,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  91 => 18,  87 => 16,  81 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
