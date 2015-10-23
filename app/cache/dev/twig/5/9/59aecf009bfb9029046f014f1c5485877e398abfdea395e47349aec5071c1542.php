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
        $__internal_e19dc52abeceb39e06cbefb5d6eb57a5cfe66279c57c17a254490d602f244f41 = $this->env->getExtension("native_profiler");
        $__internal_e19dc52abeceb39e06cbefb5d6eb57a5cfe66279c57c17a254490d602f244f41->enter($__internal_e19dc52abeceb39e06cbefb5d6eb57a5cfe66279c57c17a254490d602f244f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e19dc52abeceb39e06cbefb5d6eb57a5cfe66279c57c17a254490d602f244f41->leave($__internal_e19dc52abeceb39e06cbefb5d6eb57a5cfe66279c57c17a254490d602f244f41_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc3b32c34c85d3a62eb93ddaad1a68e7055c76530c473bb242e7f93c5d61d611 = $this->env->getExtension("native_profiler");
        $__internal_dc3b32c34c85d3a62eb93ddaad1a68e7055c76530c473bb242e7f93c5d61d611->enter($__internal_dc3b32c34c85d3a62eb93ddaad1a68e7055c76530c473bb242e7f93c5d61d611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_dc3b32c34c85d3a62eb93ddaad1a68e7055c76530c473bb242e7f93c5d61d611->leave($__internal_dc3b32c34c85d3a62eb93ddaad1a68e7055c76530c473bb242e7f93c5d61d611_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_e935b9e50fe13bba282f4da25380a83649beae236909399470cef3bbf3ad9a1f = $this->env->getExtension("native_profiler");
        $__internal_e935b9e50fe13bba282f4da25380a83649beae236909399470cef3bbf3ad9a1f->enter($__internal_e935b9e50fe13bba282f4da25380a83649beae236909399470cef3bbf3ad9a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_e935b9e50fe13bba282f4da25380a83649beae236909399470cef3bbf3ad9a1f->leave($__internal_e935b9e50fe13bba282f4da25380a83649beae236909399470cef3bbf3ad9a1f_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_0f1fc4ff1a4370a68fca7c529cef2f3e31071d6e89d6be61d9d0486529f8772a = $this->env->getExtension("native_profiler");
        $__internal_0f1fc4ff1a4370a68fca7c529cef2f3e31071d6e89d6be61d9d0486529f8772a->enter($__internal_0f1fc4ff1a4370a68fca7c529cef2f3e31071d6e89d6be61d9d0486529f8772a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_0f1fc4ff1a4370a68fca7c529cef2f3e31071d6e89d6be61d9d0486529f8772a->leave($__internal_0f1fc4ff1a4370a68fca7c529cef2f3e31071d6e89d6be61d9d0486529f8772a_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_7765717fe807b33710770056b4cbfd36265e1de24d8f2c20206e70cbfd081d3a = $this->env->getExtension("native_profiler");
        $__internal_7765717fe807b33710770056b4cbfd36265e1de24d8f2c20206e70cbfd081d3a->enter($__internal_7765717fe807b33710770056b4cbfd36265e1de24d8f2c20206e70cbfd081d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_7765717fe807b33710770056b4cbfd36265e1de24d8f2c20206e70cbfd081d3a->leave($__internal_7765717fe807b33710770056b4cbfd36265e1de24d8f2c20206e70cbfd081d3a_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e0ba6a856ae34b8c7df9e54c33512a39480acf9df075dfdeaa5f81be718d157 = $this->env->getExtension("native_profiler");
        $__internal_1e0ba6a856ae34b8c7df9e54c33512a39480acf9df075dfdeaa5f81be718d157->enter($__internal_1e0ba6a856ae34b8c7df9e54c33512a39480acf9df075dfdeaa5f81be718d157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1e0ba6a856ae34b8c7df9e54c33512a39480acf9df075dfdeaa5f81be718d157->leave($__internal_1e0ba6a856ae34b8c7df9e54c33512a39480acf9df075dfdeaa5f81be718d157_prof);

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
        return array (  176 => 49,  172 => 48,  168 => 47,  164 => 46,  159 => 45,  153 => 44,  143 => 39,  138 => 37,  135 => 36,  129 => 35,  118 => 30,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  91 => 18,  87 => 16,  81 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
