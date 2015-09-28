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
        $__internal_d802eeb912a2e37a675e62fb94a92c532f0f9f84f5c68949e3517b273b8281ca = $this->env->getExtension("native_profiler");
        $__internal_d802eeb912a2e37a675e62fb94a92c532f0f9f84f5c68949e3517b273b8281ca->enter($__internal_d802eeb912a2e37a675e62fb94a92c532f0f9f84f5c68949e3517b273b8281ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d802eeb912a2e37a675e62fb94a92c532f0f9f84f5c68949e3517b273b8281ca->leave($__internal_d802eeb912a2e37a675e62fb94a92c532f0f9f84f5c68949e3517b273b8281ca_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3608cbb3245b45ee69db79086097106307f9ea303630edc2eda365bd2cf758c4 = $this->env->getExtension("native_profiler");
        $__internal_3608cbb3245b45ee69db79086097106307f9ea303630edc2eda365bd2cf758c4->enter($__internal_3608cbb3245b45ee69db79086097106307f9ea303630edc2eda365bd2cf758c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3608cbb3245b45ee69db79086097106307f9ea303630edc2eda365bd2cf758c4->leave($__internal_3608cbb3245b45ee69db79086097106307f9ea303630edc2eda365bd2cf758c4_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_149dec8fa1105ade7552ade47f01ea6f3cdc49bbefd6a91830b57dc9a575250c = $this->env->getExtension("native_profiler");
        $__internal_149dec8fa1105ade7552ade47f01ea6f3cdc49bbefd6a91830b57dc9a575250c->enter($__internal_149dec8fa1105ade7552ade47f01ea6f3cdc49bbefd6a91830b57dc9a575250c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_149dec8fa1105ade7552ade47f01ea6f3cdc49bbefd6a91830b57dc9a575250c->leave($__internal_149dec8fa1105ade7552ade47f01ea6f3cdc49bbefd6a91830b57dc9a575250c_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_8643b036ff0c16f5405ce4b8811e33bcc252821e3dce981a704aaf29eea963c5 = $this->env->getExtension("native_profiler");
        $__internal_8643b036ff0c16f5405ce4b8811e33bcc252821e3dce981a704aaf29eea963c5->enter($__internal_8643b036ff0c16f5405ce4b8811e33bcc252821e3dce981a704aaf29eea963c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_8643b036ff0c16f5405ce4b8811e33bcc252821e3dce981a704aaf29eea963c5->leave($__internal_8643b036ff0c16f5405ce4b8811e33bcc252821e3dce981a704aaf29eea963c5_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b44281b4f1652c5b9ed63cc00b3dab0a0f1b5026431e944e779d0b40d8dc430 = $this->env->getExtension("native_profiler");
        $__internal_9b44281b4f1652c5b9ed63cc00b3dab0a0f1b5026431e944e779d0b40d8dc430->enter($__internal_9b44281b4f1652c5b9ed63cc00b3dab0a0f1b5026431e944e779d0b40d8dc430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9b44281b4f1652c5b9ed63cc00b3dab0a0f1b5026431e944e779d0b40d8dc430->leave($__internal_9b44281b4f1652c5b9ed63cc00b3dab0a0f1b5026431e944e779d0b40d8dc430_prof);

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
