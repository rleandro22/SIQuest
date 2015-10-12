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
        $__internal_5757314ab5b7b575eec66a802ef272116ebdf4e0b21498fc6220d24785fc0290 = $this->env->getExtension("native_profiler");
        $__internal_5757314ab5b7b575eec66a802ef272116ebdf4e0b21498fc6220d24785fc0290->enter($__internal_5757314ab5b7b575eec66a802ef272116ebdf4e0b21498fc6220d24785fc0290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5757314ab5b7b575eec66a802ef272116ebdf4e0b21498fc6220d24785fc0290->leave($__internal_5757314ab5b7b575eec66a802ef272116ebdf4e0b21498fc6220d24785fc0290_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1214675478db80dbc564ed4bbaf7f32d97bfffdc05f3b576b31b91ac022edee4 = $this->env->getExtension("native_profiler");
        $__internal_1214675478db80dbc564ed4bbaf7f32d97bfffdc05f3b576b31b91ac022edee4->enter($__internal_1214675478db80dbc564ed4bbaf7f32d97bfffdc05f3b576b31b91ac022edee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1214675478db80dbc564ed4bbaf7f32d97bfffdc05f3b576b31b91ac022edee4->leave($__internal_1214675478db80dbc564ed4bbaf7f32d97bfffdc05f3b576b31b91ac022edee4_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_3c37e80907bdbb7847f38cc52a887fffffa1026255beec819798587261095ddb = $this->env->getExtension("native_profiler");
        $__internal_3c37e80907bdbb7847f38cc52a887fffffa1026255beec819798587261095ddb->enter($__internal_3c37e80907bdbb7847f38cc52a887fffffa1026255beec819798587261095ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_3c37e80907bdbb7847f38cc52a887fffffa1026255beec819798587261095ddb->leave($__internal_3c37e80907bdbb7847f38cc52a887fffffa1026255beec819798587261095ddb_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_e4c81d0890c2aac9f7432e7430a70267679dc3c3e704fb11775f4ad9d93d071b = $this->env->getExtension("native_profiler");
        $__internal_e4c81d0890c2aac9f7432e7430a70267679dc3c3e704fb11775f4ad9d93d071b->enter($__internal_e4c81d0890c2aac9f7432e7430a70267679dc3c3e704fb11775f4ad9d93d071b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_e4c81d0890c2aac9f7432e7430a70267679dc3c3e704fb11775f4ad9d93d071b->leave($__internal_e4c81d0890c2aac9f7432e7430a70267679dc3c3e704fb11775f4ad9d93d071b_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_8c2e39bbdf781a2e4e6108ea514e017d2f6deb4335653e62792803493b88b0a1 = $this->env->getExtension("native_profiler");
        $__internal_8c2e39bbdf781a2e4e6108ea514e017d2f6deb4335653e62792803493b88b0a1->enter($__internal_8c2e39bbdf781a2e4e6108ea514e017d2f6deb4335653e62792803493b88b0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_8c2e39bbdf781a2e4e6108ea514e017d2f6deb4335653e62792803493b88b0a1->leave($__internal_8c2e39bbdf781a2e4e6108ea514e017d2f6deb4335653e62792803493b88b0a1_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7565aed59f6ca23528ab58c74c6d3f580cf5db88ef8e80ca638a2fd3baa69bf5 = $this->env->getExtension("native_profiler");
        $__internal_7565aed59f6ca23528ab58c74c6d3f580cf5db88ef8e80ca638a2fd3baa69bf5->enter($__internal_7565aed59f6ca23528ab58c74c6d3f580cf5db88ef8e80ca638a2fd3baa69bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7565aed59f6ca23528ab58c74c6d3f580cf5db88ef8e80ca638a2fd3baa69bf5->leave($__internal_7565aed59f6ca23528ab58c74c6d3f580cf5db88ef8e80ca638a2fd3baa69bf5_prof);

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
