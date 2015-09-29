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
        $__internal_213f989ad67dd17e443272afd63feb62b27cc46f7b046c17c3c75825e7c7718a = $this->env->getExtension("native_profiler");
        $__internal_213f989ad67dd17e443272afd63feb62b27cc46f7b046c17c3c75825e7c7718a->enter($__internal_213f989ad67dd17e443272afd63feb62b27cc46f7b046c17c3c75825e7c7718a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_213f989ad67dd17e443272afd63feb62b27cc46f7b046c17c3c75825e7c7718a->leave($__internal_213f989ad67dd17e443272afd63feb62b27cc46f7b046c17c3c75825e7c7718a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b05f3cb9c18e4632e06d26a121d9e34a0291c4d36a63ea6ec382422afe23947 = $this->env->getExtension("native_profiler");
        $__internal_3b05f3cb9c18e4632e06d26a121d9e34a0291c4d36a63ea6ec382422afe23947->enter($__internal_3b05f3cb9c18e4632e06d26a121d9e34a0291c4d36a63ea6ec382422afe23947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3b05f3cb9c18e4632e06d26a121d9e34a0291c4d36a63ea6ec382422afe23947->leave($__internal_3b05f3cb9c18e4632e06d26a121d9e34a0291c4d36a63ea6ec382422afe23947_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_a5796c8f03aa851ba476e24f6f54135e533b6304538d4a9a3d742b606ff758c6 = $this->env->getExtension("native_profiler");
        $__internal_a5796c8f03aa851ba476e24f6f54135e533b6304538d4a9a3d742b606ff758c6->enter($__internal_a5796c8f03aa851ba476e24f6f54135e533b6304538d4a9a3d742b606ff758c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_a5796c8f03aa851ba476e24f6f54135e533b6304538d4a9a3d742b606ff758c6->leave($__internal_a5796c8f03aa851ba476e24f6f54135e533b6304538d4a9a3d742b606ff758c6_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_9436b288145030bdd12176250e1b7bbd076230fb923e9cfc2f9cde4ad03f54ce = $this->env->getExtension("native_profiler");
        $__internal_9436b288145030bdd12176250e1b7bbd076230fb923e9cfc2f9cde4ad03f54ce->enter($__internal_9436b288145030bdd12176250e1b7bbd076230fb923e9cfc2f9cde4ad03f54ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_9436b288145030bdd12176250e1b7bbd076230fb923e9cfc2f9cde4ad03f54ce->leave($__internal_9436b288145030bdd12176250e1b7bbd076230fb923e9cfc2f9cde4ad03f54ce_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de3bece5e47bd6b60e2d4bdc4b3370e027a06d1cf61586a59881230ddd0f1d28 = $this->env->getExtension("native_profiler");
        $__internal_de3bece5e47bd6b60e2d4bdc4b3370e027a06d1cf61586a59881230ddd0f1d28->enter($__internal_de3bece5e47bd6b60e2d4bdc4b3370e027a06d1cf61586a59881230ddd0f1d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_de3bece5e47bd6b60e2d4bdc4b3370e027a06d1cf61586a59881230ddd0f1d28->leave($__internal_de3bece5e47bd6b60e2d4bdc4b3370e027a06d1cf61586a59881230ddd0f1d28_prof);

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
