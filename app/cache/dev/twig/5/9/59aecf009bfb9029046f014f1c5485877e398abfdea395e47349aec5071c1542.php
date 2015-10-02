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
        $__internal_09c1ad83aeaff413dbb57835d04bce6b0cfa1270b112f25c238fcd200cf5bce7 = $this->env->getExtension("native_profiler");
        $__internal_09c1ad83aeaff413dbb57835d04bce6b0cfa1270b112f25c238fcd200cf5bce7->enter($__internal_09c1ad83aeaff413dbb57835d04bce6b0cfa1270b112f25c238fcd200cf5bce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09c1ad83aeaff413dbb57835d04bce6b0cfa1270b112f25c238fcd200cf5bce7->leave($__internal_09c1ad83aeaff413dbb57835d04bce6b0cfa1270b112f25c238fcd200cf5bce7_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_241605f366ab180bfc09c9731bfa80011cabbc7472bbf0c16b7767e9806ed9ac = $this->env->getExtension("native_profiler");
        $__internal_241605f366ab180bfc09c9731bfa80011cabbc7472bbf0c16b7767e9806ed9ac->enter($__internal_241605f366ab180bfc09c9731bfa80011cabbc7472bbf0c16b7767e9806ed9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_241605f366ab180bfc09c9731bfa80011cabbc7472bbf0c16b7767e9806ed9ac->leave($__internal_241605f366ab180bfc09c9731bfa80011cabbc7472bbf0c16b7767e9806ed9ac_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_9bd20aaf6688cf5942d0e50c491c30a4db0af7cf0e8059a883cb99af86349dcd = $this->env->getExtension("native_profiler");
        $__internal_9bd20aaf6688cf5942d0e50c491c30a4db0af7cf0e8059a883cb99af86349dcd->enter($__internal_9bd20aaf6688cf5942d0e50c491c30a4db0af7cf0e8059a883cb99af86349dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_9bd20aaf6688cf5942d0e50c491c30a4db0af7cf0e8059a883cb99af86349dcd->leave($__internal_9bd20aaf6688cf5942d0e50c491c30a4db0af7cf0e8059a883cb99af86349dcd_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_fef37e1c46a00be0f0fe148c3b3d6bb6680fa451dd4a42d437d0ceae37d9bd53 = $this->env->getExtension("native_profiler");
        $__internal_fef37e1c46a00be0f0fe148c3b3d6bb6680fa451dd4a42d437d0ceae37d9bd53->enter($__internal_fef37e1c46a00be0f0fe148c3b3d6bb6680fa451dd4a42d437d0ceae37d9bd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_fef37e1c46a00be0f0fe148c3b3d6bb6680fa451dd4a42d437d0ceae37d9bd53->leave($__internal_fef37e1c46a00be0f0fe148c3b3d6bb6680fa451dd4a42d437d0ceae37d9bd53_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4f154affec2a1434cf40f33248f7c8bffbbd8db9fbdd6d77b34ac87e5b55a09 = $this->env->getExtension("native_profiler");
        $__internal_f4f154affec2a1434cf40f33248f7c8bffbbd8db9fbdd6d77b34ac87e5b55a09->enter($__internal_f4f154affec2a1434cf40f33248f7c8bffbbd8db9fbdd6d77b34ac87e5b55a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f4f154affec2a1434cf40f33248f7c8bffbbd8db9fbdd6d77b34ac87e5b55a09->leave($__internal_f4f154affec2a1434cf40f33248f7c8bffbbd8db9fbdd6d77b34ac87e5b55a09_prof);

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
        return array (  143 => 41,  139 => 40,  135 => 39,  131 => 38,  126 => 37,  120 => 36,  109 => 30,  100 => 24,  96 => 23,  88 => 18,  84 => 16,  78 => 15,  69 => 12,  61 => 11,  52 => 8,  48 => 7,  43 => 6,  37 => 5,  11 => 2,);
    }
}
