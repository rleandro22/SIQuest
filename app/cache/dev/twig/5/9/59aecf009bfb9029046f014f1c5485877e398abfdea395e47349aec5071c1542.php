<?php

/* UciAdministradorBundle::base.html.twig */
class __TwigTemplate_59aecf009bfb9029046f014f1c5485877e398abfdea395e47349aec5071c1542 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f8675a4155f1215ad0ccc29cd83445372bb01bad647b976c7dd068426ea51e0 = $this->env->getExtension("native_profiler");
        $__internal_9f8675a4155f1215ad0ccc29cd83445372bb01bad647b976c7dd068426ea51e0->enter($__internal_9f8675a4155f1215ad0ccc29cd83445372bb01bad647b976c7dd068426ea51e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f8675a4155f1215ad0ccc29cd83445372bb01bad647b976c7dd068426ea51e0->leave($__internal_9f8675a4155f1215ad0ccc29cd83445372bb01bad647b976c7dd068426ea51e0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4bf1694336460c888f5ac5d9ef7d635bbc51c1473a694107c52626075b3fbee4 = $this->env->getExtension("native_profiler");
        $__internal_4bf1694336460c888f5ac5d9ef7d635bbc51c1473a694107c52626075b3fbee4->enter($__internal_4bf1694336460c888f5ac5d9ef7d635bbc51c1473a694107c52626075b3fbee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4bf1694336460c888f5ac5d9ef7d635bbc51c1473a694107c52626075b3fbee4->leave($__internal_4bf1694336460c888f5ac5d9ef7d635bbc51c1473a694107c52626075b3fbee4_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_0cf952256de6e7189db7e5bde90ca5f372bbbcf52ecba19d1547f7ccfe15a427 = $this->env->getExtension("native_profiler");
        $__internal_0cf952256de6e7189db7e5bde90ca5f372bbbcf52ecba19d1547f7ccfe15a427->enter($__internal_0cf952256de6e7189db7e5bde90ca5f372bbbcf52ecba19d1547f7ccfe15a427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_0cf952256de6e7189db7e5bde90ca5f372bbbcf52ecba19d1547f7ccfe15a427->leave($__internal_0cf952256de6e7189db7e5bde90ca5f372bbbcf52ecba19d1547f7ccfe15a427_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_58782ddbdbebb19b9bbc43b55ab883887ca9fb1140ee3613ab5b50bf29e93239 = $this->env->getExtension("native_profiler");
        $__internal_58782ddbdbebb19b9bbc43b55ab883887ca9fb1140ee3613ab5b50bf29e93239->enter($__internal_58782ddbdbebb19b9bbc43b55ab883887ca9fb1140ee3613ab5b50bf29e93239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
                    <li><a href=\"sidebar-left.html\">Mantenimiento Libros</a></li>
                    <li><a href=\"sidebar-right.html\">Mantenimiento Preguntas</a></li>
                </ul>
            </li>
            <li>
                <a class=\"btn\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_58782ddbdbebb19b9bbc43b55ab883887ca9fb1140ee3613ab5b50bf29e93239->leave($__internal_58782ddbdbebb19b9bbc43b55ab883887ca9fb1140ee3613ab5b50bf29e93239_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef90e7bea8b40c7ca278edf4856b837d4ca916785efa6b0f1355089846919f9d = $this->env->getExtension("native_profiler");
        $__internal_ef90e7bea8b40c7ca278edf4856b837d4ca916785efa6b0f1355089846919f9d->enter($__internal_ef90e7bea8b40c7ca278edf4856b837d4ca916785efa6b0f1355089846919f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_ef90e7bea8b40c7ca278edf4856b837d4ca916785efa6b0f1355089846919f9d->leave($__internal_ef90e7bea8b40c7ca278edf4856b837d4ca916785efa6b0f1355089846919f9d_prof);

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
        return array (  139 => 40,  135 => 39,  131 => 38,  127 => 37,  122 => 36,  116 => 35,  105 => 29,  96 => 23,  88 => 18,  84 => 16,  78 => 15,  69 => 12,  61 => 11,  52 => 8,  48 => 7,  43 => 6,  37 => 5,  11 => 2,);
    }
}
