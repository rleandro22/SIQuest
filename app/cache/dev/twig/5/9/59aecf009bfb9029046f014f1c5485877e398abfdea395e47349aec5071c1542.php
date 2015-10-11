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
        $__internal_87627377ac361147506fb052c94c51834802328b1bb33284e002384f3eab334e = $this->env->getExtension("native_profiler");
        $__internal_87627377ac361147506fb052c94c51834802328b1bb33284e002384f3eab334e->enter($__internal_87627377ac361147506fb052c94c51834802328b1bb33284e002384f3eab334e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87627377ac361147506fb052c94c51834802328b1bb33284e002384f3eab334e->leave($__internal_87627377ac361147506fb052c94c51834802328b1bb33284e002384f3eab334e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e30b9648d6c6efc64dba3bca40a7cd677b9bbec75035b53116f02398512f6e8f = $this->env->getExtension("native_profiler");
        $__internal_e30b9648d6c6efc64dba3bca40a7cd677b9bbec75035b53116f02398512f6e8f->enter($__internal_e30b9648d6c6efc64dba3bca40a7cd677b9bbec75035b53116f02398512f6e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e30b9648d6c6efc64dba3bca40a7cd677b9bbec75035b53116f02398512f6e8f->leave($__internal_e30b9648d6c6efc64dba3bca40a7cd677b9bbec75035b53116f02398512f6e8f_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_a36ab112ad239bbfdf1d0b45822df21c78c94ca952a92bfc4212cf5f2b4dec8e = $this->env->getExtension("native_profiler");
        $__internal_a36ab112ad239bbfdf1d0b45822df21c78c94ca952a92bfc4212cf5f2b4dec8e->enter($__internal_a36ab112ad239bbfdf1d0b45822df21c78c94ca952a92bfc4212cf5f2b4dec8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_a36ab112ad239bbfdf1d0b45822df21c78c94ca952a92bfc4212cf5f2b4dec8e->leave($__internal_a36ab112ad239bbfdf1d0b45822df21c78c94ca952a92bfc4212cf5f2b4dec8e_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_c842724f0de4af68f636d1f2bbc1c848df7b87de97896c3447ba1816e6adc1f7 = $this->env->getExtension("native_profiler");
        $__internal_c842724f0de4af68f636d1f2bbc1c848df7b87de97896c3447ba1816e6adc1f7->enter($__internal_c842724f0de4af68f636d1f2bbc1c848df7b87de97896c3447ba1816e6adc1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_c842724f0de4af68f636d1f2bbc1c848df7b87de97896c3447ba1816e6adc1f7->leave($__internal_c842724f0de4af68f636d1f2bbc1c848df7b87de97896c3447ba1816e6adc1f7_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_a7e79deadb280932d1da9b7486b109d4ad82181682c2fb6e7ac28a339180a688 = $this->env->getExtension("native_profiler");
        $__internal_a7e79deadb280932d1da9b7486b109d4ad82181682c2fb6e7ac28a339180a688->enter($__internal_a7e79deadb280932d1da9b7486b109d4ad82181682c2fb6e7ac28a339180a688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_a7e79deadb280932d1da9b7486b109d4ad82181682c2fb6e7ac28a339180a688->leave($__internal_a7e79deadb280932d1da9b7486b109d4ad82181682c2fb6e7ac28a339180a688_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bbea13d09fdae28d640bed6d462a001cdd8072c2d54f58a7e4444228f366a9e1 = $this->env->getExtension("native_profiler");
        $__internal_bbea13d09fdae28d640bed6d462a001cdd8072c2d54f58a7e4444228f366a9e1->enter($__internal_bbea13d09fdae28d640bed6d462a001cdd8072c2d54f58a7e4444228f366a9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_bbea13d09fdae28d640bed6d462a001cdd8072c2d54f58a7e4444228f366a9e1->leave($__internal_bbea13d09fdae28d640bed6d462a001cdd8072c2d54f58a7e4444228f366a9e1_prof);

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
        return array (  170 => 49,  166 => 48,  162 => 47,  158 => 46,  153 => 45,  147 => 44,  137 => 39,  132 => 37,  129 => 36,  123 => 35,  112 => 30,  103 => 24,  99 => 23,  91 => 18,  87 => 16,  81 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
