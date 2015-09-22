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
        $__internal_01b82cbc84a362c7b8c1e9852442be4131712db7e7ae5411428949cd7b692caa = $this->env->getExtension("native_profiler");
        $__internal_01b82cbc84a362c7b8c1e9852442be4131712db7e7ae5411428949cd7b692caa->enter($__internal_01b82cbc84a362c7b8c1e9852442be4131712db7e7ae5411428949cd7b692caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01b82cbc84a362c7b8c1e9852442be4131712db7e7ae5411428949cd7b692caa->leave($__internal_01b82cbc84a362c7b8c1e9852442be4131712db7e7ae5411428949cd7b692caa_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a59d778f5c6ea6de39d174f8709ceafbccefee954f0986f16abce0149e58ef6 = $this->env->getExtension("native_profiler");
        $__internal_6a59d778f5c6ea6de39d174f8709ceafbccefee954f0986f16abce0149e58ef6->enter($__internal_6a59d778f5c6ea6de39d174f8709ceafbccefee954f0986f16abce0149e58ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6a59d778f5c6ea6de39d174f8709ceafbccefee954f0986f16abce0149e58ef6->leave($__internal_6a59d778f5c6ea6de39d174f8709ceafbccefee954f0986f16abce0149e58ef6_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_dd10cd03fd36544fbc914128f1666e1ee449b93a9cce0c0c42d15a1ec34bfa80 = $this->env->getExtension("native_profiler");
        $__internal_dd10cd03fd36544fbc914128f1666e1ee449b93a9cce0c0c42d15a1ec34bfa80->enter($__internal_dd10cd03fd36544fbc914128f1666e1ee449b93a9cce0c0c42d15a1ec34bfa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_dd10cd03fd36544fbc914128f1666e1ee449b93a9cce0c0c42d15a1ec34bfa80->leave($__internal_dd10cd03fd36544fbc914128f1666e1ee449b93a9cce0c0c42d15a1ec34bfa80_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4b6cf5d5259ef3b5e4f69ba7bf734b776ff3abd057e0373bef8f5957b54f611e = $this->env->getExtension("native_profiler");
        $__internal_4b6cf5d5259ef3b5e4f69ba7bf734b776ff3abd057e0373bef8f5957b54f611e->enter($__internal_4b6cf5d5259ef3b5e4f69ba7bf734b776ff3abd057e0373bef8f5957b54f611e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 16
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"#\">Inicio</a></li>
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
        
        $__internal_4b6cf5d5259ef3b5e4f69ba7bf734b776ff3abd057e0373bef8f5957b54f611e->leave($__internal_4b6cf5d5259ef3b5e4f69ba7bf734b776ff3abd057e0373bef8f5957b54f611e_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25cf0271f1496c0e466d0029de16c8c4cc3c054190f095761dcdc707ba06c053 = $this->env->getExtension("native_profiler");
        $__internal_25cf0271f1496c0e466d0029de16c8c4cc3c054190f095761dcdc707ba06c053->enter($__internal_25cf0271f1496c0e466d0029de16c8c4cc3c054190f095761dcdc707ba06c053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("footable.paginate.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_25cf0271f1496c0e466d0029de16c8c4cc3c054190f095761dcdc707ba06c053->leave($__internal_25cf0271f1496c0e466d0029de16c8c4cc3c054190f095761dcdc707ba06c053_prof);

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
        return array (  140 => 41,  136 => 40,  132 => 39,  128 => 38,  124 => 37,  119 => 36,  113 => 35,  102 => 29,  93 => 23,  84 => 16,  78 => 15,  69 => 12,  61 => 11,  52 => 8,  48 => 7,  43 => 6,  37 => 5,  11 => 2,);
    }
}
