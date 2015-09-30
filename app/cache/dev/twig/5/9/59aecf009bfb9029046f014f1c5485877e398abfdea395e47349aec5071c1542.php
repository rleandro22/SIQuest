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
        $__internal_e342f57999ae88bf82180b201b74f083470b7cd79abbacd0162fdb8409b84077 = $this->env->getExtension("native_profiler");
        $__internal_e342f57999ae88bf82180b201b74f083470b7cd79abbacd0162fdb8409b84077->enter($__internal_e342f57999ae88bf82180b201b74f083470b7cd79abbacd0162fdb8409b84077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e342f57999ae88bf82180b201b74f083470b7cd79abbacd0162fdb8409b84077->leave($__internal_e342f57999ae88bf82180b201b74f083470b7cd79abbacd0162fdb8409b84077_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c093fdea8f8a7370a3d4d36db69d04335525c90d2a59e3f49a83643b5ed020b6 = $this->env->getExtension("native_profiler");
        $__internal_c093fdea8f8a7370a3d4d36db69d04335525c90d2a59e3f49a83643b5ed020b6->enter($__internal_c093fdea8f8a7370a3d4d36db69d04335525c90d2a59e3f49a83643b5ed020b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c093fdea8f8a7370a3d4d36db69d04335525c90d2a59e3f49a83643b5ed020b6->leave($__internal_c093fdea8f8a7370a3d4d36db69d04335525c90d2a59e3f49a83643b5ed020b6_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_0a24f653753233273230a4637df3563f593548383e08e60e7aee97d70846a941 = $this->env->getExtension("native_profiler");
        $__internal_0a24f653753233273230a4637df3563f593548383e08e60e7aee97d70846a941->enter($__internal_0a24f653753233273230a4637df3563f593548383e08e60e7aee97d70846a941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_0a24f653753233273230a4637df3563f593548383e08e60e7aee97d70846a941->leave($__internal_0a24f653753233273230a4637df3563f593548383e08e60e7aee97d70846a941_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1134ffa53c82215af159f3c037d9ed369edfc38cb4a7116e9ef75fd58cb5b216 = $this->env->getExtension("native_profiler");
        $__internal_1134ffa53c82215af159f3c037d9ed369edfc38cb4a7116e9ef75fd58cb5b216->enter($__internal_1134ffa53c82215af159f3c037d9ed369edfc38cb4a7116e9ef75fd58cb5b216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
                    <li><a href=\"sidebar-left.html\">Mantenimiento Cursos</a></li>
                    <li><a href=\"sidebar-left.html\">Mantenimiento Libros</a></li>
                    <li><a href=\"sidebar-right.html\">Mantenimiento Preguntas</a></li>
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
        
        $__internal_1134ffa53c82215af159f3c037d9ed369edfc38cb4a7116e9ef75fd58cb5b216->leave($__internal_1134ffa53c82215af159f3c037d9ed369edfc38cb4a7116e9ef75fd58cb5b216_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6dd377814665f64dcce689788e5d4fb8a46f39a925f9bd8d91573db4d7029aba = $this->env->getExtension("native_profiler");
        $__internal_6dd377814665f64dcce689788e5d4fb8a46f39a925f9bd8d91573db4d7029aba->enter($__internal_6dd377814665f64dcce689788e5d4fb8a46f39a925f9bd8d91573db4d7029aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_6dd377814665f64dcce689788e5d4fb8a46f39a925f9bd8d91573db4d7029aba->leave($__internal_6dd377814665f64dcce689788e5d4fb8a46f39a925f9bd8d91573db4d7029aba_prof);

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
        return array (  140 => 41,  136 => 40,  132 => 39,  128 => 38,  123 => 37,  117 => 36,  106 => 30,  96 => 23,  88 => 18,  84 => 16,  78 => 15,  69 => 12,  61 => 11,  52 => 8,  48 => 7,  43 => 6,  37 => 5,  11 => 2,);
    }
}
