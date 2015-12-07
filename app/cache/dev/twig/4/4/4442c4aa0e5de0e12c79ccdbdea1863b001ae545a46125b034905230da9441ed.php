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
        $__internal_8920f7c59dfeeedf064297e93f04bd74c407ff1de302b20e25264a8374038cf6 = $this->env->getExtension("native_profiler");
        $__internal_8920f7c59dfeeedf064297e93f04bd74c407ff1de302b20e25264a8374038cf6->enter($__internal_8920f7c59dfeeedf064297e93f04bd74c407ff1de302b20e25264a8374038cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8920f7c59dfeeedf064297e93f04bd74c407ff1de302b20e25264a8374038cf6->leave($__internal_8920f7c59dfeeedf064297e93f04bd74c407ff1de302b20e25264a8374038cf6_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a93d88ccf4aed545c2c2ec151105992403826a8737c1d3829fe775db02b4cfe = $this->env->getExtension("native_profiler");
        $__internal_9a93d88ccf4aed545c2c2ec151105992403826a8737c1d3829fe775db02b4cfe->enter($__internal_9a93d88ccf4aed545c2c2ec151105992403826a8737c1d3829fe775db02b4cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9a93d88ccf4aed545c2c2ec151105992403826a8737c1d3829fe775db02b4cfe->leave($__internal_9a93d88ccf4aed545c2c2ec151105992403826a8737c1d3829fe775db02b4cfe_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_6c794184e916a1d46ee9692eff0f578c852bbc1dc96cef9a89e680776f4446ef = $this->env->getExtension("native_profiler");
        $__internal_6c794184e916a1d46ee9692eff0f578c852bbc1dc96cef9a89e680776f4446ef->enter($__internal_6c794184e916a1d46ee9692eff0f578c852bbc1dc96cef9a89e680776f4446ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_6c794184e916a1d46ee9692eff0f578c852bbc1dc96cef9a89e680776f4446ef->leave($__internal_6c794184e916a1d46ee9692eff0f578c852bbc1dc96cef9a89e680776f4446ef_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_7e129da530cebf5cee0686b69fc3bf1d07267bedcee260e2c72a33c4edef4cd7 = $this->env->getExtension("native_profiler");
        $__internal_7e129da530cebf5cee0686b69fc3bf1d07267bedcee260e2c72a33c4edef4cd7->enter($__internal_7e129da530cebf5cee0686b69fc3bf1d07267bedcee260e2c72a33c4edef4cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 16
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicesolicitudes");
        echo "\">Solicitudes</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"active\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecategoria");
        echo "\">Mantenimiento Categorias</a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\">Mantenimiento Cuestionarios</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Mantenimiento Libros</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\">Mantenimiento Preguntas</a></li>
                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Mantenimiento Usuarios</a></li>
                </ul>
            </li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li>
                <a class=\"btn\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_7e129da530cebf5cee0686b69fc3bf1d07267bedcee260e2c72a33c4edef4cd7->leave($__internal_7e129da530cebf5cee0686b69fc3bf1d07267bedcee260e2c72a33c4edef4cd7_prof);

    }

    // line 37
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_c8f58fad6c7f60e592bb3cf50563047452c9351ab97ac669b2b086df095dbcb1 = $this->env->getExtension("native_profiler");
        $__internal_c8f58fad6c7f60e592bb3cf50563047452c9351ab97ac669b2b086df095dbcb1->enter($__internal_c8f58fad6c7f60e592bb3cf50563047452c9351ab97ac669b2b086df095dbcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 38
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
        <a href=\"\">Solicitudes</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_c8f58fad6c7f60e592bb3cf50563047452c9351ab97ac669b2b086df095dbcb1->leave($__internal_c8f58fad6c7f60e592bb3cf50563047452c9351ab97ac669b2b086df095dbcb1_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c808318c90f22145c78ca25b28784921e4b008d0a8734b4edbc252cb20bc35cb = $this->env->getExtension("native_profiler");
        $__internal_c808318c90f22145c78ca25b28784921e4b008d0a8734b4edbc252cb20bc35cb->enter($__internal_c808318c90f22145c78ca25b28784921e4b008d0a8734b4edbc252cb20bc35cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_c808318c90f22145c78ca25b28784921e4b008d0a8734b4edbc252cb20bc35cb->leave($__internal_c808318c90f22145c78ca25b28784921e4b008d0a8734b4edbc252cb20bc35cb_prof);

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
        return array (  189 => 53,  185 => 52,  181 => 51,  177 => 50,  173 => 49,  168 => 48,  162 => 47,  152 => 42,  146 => 39,  143 => 38,  137 => 37,  126 => 32,  118 => 27,  114 => 26,  110 => 25,  106 => 24,  102 => 23,  95 => 19,  91 => 18,  87 => 16,  81 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
