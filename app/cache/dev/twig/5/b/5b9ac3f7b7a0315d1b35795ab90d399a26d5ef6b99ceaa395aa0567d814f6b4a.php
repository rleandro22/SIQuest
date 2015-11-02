<?php

/* UciAdministradorBundle::base.html.twig */
class __TwigTemplate_5b9ac3f7b7a0315d1b35795ab90d399a26d5ef6b99ceaa395aa0567d814f6b4a extends Twig_Template
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
        $__internal_6ae35547449e8c6455bc8e37492731a1735063658299f51f7814d8a5b4cbd9b3 = $this->env->getExtension("native_profiler");
        $__internal_6ae35547449e8c6455bc8e37492731a1735063658299f51f7814d8a5b4cbd9b3->enter($__internal_6ae35547449e8c6455bc8e37492731a1735063658299f51f7814d8a5b4cbd9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ae35547449e8c6455bc8e37492731a1735063658299f51f7814d8a5b4cbd9b3->leave($__internal_6ae35547449e8c6455bc8e37492731a1735063658299f51f7814d8a5b4cbd9b3_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35117e5e04e100c1e02c05fb61603274bf2d57e1ae664457479951b48e7a7f4c = $this->env->getExtension("native_profiler");
        $__internal_35117e5e04e100c1e02c05fb61603274bf2d57e1ae664457479951b48e7a7f4c->enter($__internal_35117e5e04e100c1e02c05fb61603274bf2d57e1ae664457479951b48e7a7f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_35117e5e04e100c1e02c05fb61603274bf2d57e1ae664457479951b48e7a7f4c->leave($__internal_35117e5e04e100c1e02c05fb61603274bf2d57e1ae664457479951b48e7a7f4c_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_82d07b265e2819d1182553e8e4f7888cb2065cdc531ecf63d9732552a3fbe227 = $this->env->getExtension("native_profiler");
        $__internal_82d07b265e2819d1182553e8e4f7888cb2065cdc531ecf63d9732552a3fbe227->enter($__internal_82d07b265e2819d1182553e8e4f7888cb2065cdc531ecf63d9732552a3fbe227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_82d07b265e2819d1182553e8e4f7888cb2065cdc531ecf63d9732552a3fbe227->leave($__internal_82d07b265e2819d1182553e8e4f7888cb2065cdc531ecf63d9732552a3fbe227_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d461823d542af0afd693c10fc02cea3ef9871e29b6bee741be7aa94d201c5f95 = $this->env->getExtension("native_profiler");
        $__internal_d461823d542af0afd693c10fc02cea3ef9871e29b6bee741be7aa94d201c5f95->enter($__internal_d461823d542af0afd693c10fc02cea3ef9871e29b6bee741be7aa94d201c5f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_d461823d542af0afd693c10fc02cea3ef9871e29b6bee741be7aa94d201c5f95->leave($__internal_d461823d542af0afd693c10fc02cea3ef9871e29b6bee741be7aa94d201c5f95_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_f5eb9a573ed0bbf1a1e9d8defa6896571a164e4593d37cc04b5db0b723746493 = $this->env->getExtension("native_profiler");
        $__internal_f5eb9a573ed0bbf1a1e9d8defa6896571a164e4593d37cc04b5db0b723746493->enter($__internal_f5eb9a573ed0bbf1a1e9d8defa6896571a164e4593d37cc04b5db0b723746493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_f5eb9a573ed0bbf1a1e9d8defa6896571a164e4593d37cc04b5db0b723746493->leave($__internal_f5eb9a573ed0bbf1a1e9d8defa6896571a164e4593d37cc04b5db0b723746493_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17900e51ff931a0c7f0adec86d6a1ee16fdf65920d74b0646b5eb0d727ff6954 = $this->env->getExtension("native_profiler");
        $__internal_17900e51ff931a0c7f0adec86d6a1ee16fdf65920d74b0646b5eb0d727ff6954->enter($__internal_17900e51ff931a0c7f0adec86d6a1ee16fdf65920d74b0646b5eb0d727ff6954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_17900e51ff931a0c7f0adec86d6a1ee16fdf65920d74b0646b5eb0d727ff6954->leave($__internal_17900e51ff931a0c7f0adec86d6a1ee16fdf65920d74b0646b5eb0d727ff6954_prof);

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
        return array (  180 => 50,  176 => 49,  172 => 48,  168 => 47,  164 => 46,  159 => 45,  153 => 44,  143 => 39,  138 => 37,  135 => 36,  129 => 35,  118 => 30,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  91 => 18,  87 => 16,  81 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
