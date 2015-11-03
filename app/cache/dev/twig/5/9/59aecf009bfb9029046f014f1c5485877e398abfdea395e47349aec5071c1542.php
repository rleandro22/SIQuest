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
        $__internal_7dc3654ea0b1081f5d2a42d03a34b88f1f1e20ac9ba3301fa14de613ec27859b = $this->env->getExtension("native_profiler");
        $__internal_7dc3654ea0b1081f5d2a42d03a34b88f1f1e20ac9ba3301fa14de613ec27859b->enter($__internal_7dc3654ea0b1081f5d2a42d03a34b88f1f1e20ac9ba3301fa14de613ec27859b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dc3654ea0b1081f5d2a42d03a34b88f1f1e20ac9ba3301fa14de613ec27859b->leave($__internal_7dc3654ea0b1081f5d2a42d03a34b88f1f1e20ac9ba3301fa14de613ec27859b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb2eb53cb1c910b7d314c97eef89c4c6897672c13bbb5a031617f8ae68d071fa = $this->env->getExtension("native_profiler");
        $__internal_fb2eb53cb1c910b7d314c97eef89c4c6897672c13bbb5a031617f8ae68d071fa->enter($__internal_fb2eb53cb1c910b7d314c97eef89c4c6897672c13bbb5a031617f8ae68d071fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fb2eb53cb1c910b7d314c97eef89c4c6897672c13bbb5a031617f8ae68d071fa->leave($__internal_fb2eb53cb1c910b7d314c97eef89c4c6897672c13bbb5a031617f8ae68d071fa_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_b967d61fe68128423315f10b00f410e5a328538504565e5a5803d624faff5c54 = $this->env->getExtension("native_profiler");
        $__internal_b967d61fe68128423315f10b00f410e5a328538504565e5a5803d624faff5c54->enter($__internal_b967d61fe68128423315f10b00f410e5a328538504565e5a5803d624faff5c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_b967d61fe68128423315f10b00f410e5a328538504565e5a5803d624faff5c54->leave($__internal_b967d61fe68128423315f10b00f410e5a328538504565e5a5803d624faff5c54_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_463059e5a0e4d546a4ef1c185baccddefaa7ef14b2a8e6b42c11172fde917a5e = $this->env->getExtension("native_profiler");
        $__internal_463059e5a0e4d546a4ef1c185baccddefaa7ef14b2a8e6b42c11172fde917a5e->enter($__internal_463059e5a0e4d546a4ef1c185baccddefaa7ef14b2a8e6b42c11172fde917a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_463059e5a0e4d546a4ef1c185baccddefaa7ef14b2a8e6b42c11172fde917a5e->leave($__internal_463059e5a0e4d546a4ef1c185baccddefaa7ef14b2a8e6b42c11172fde917a5e_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_2f72f54aa309e22847db7e09d7cbd243344b94d5cdda7d220759bc90a48c7764 = $this->env->getExtension("native_profiler");
        $__internal_2f72f54aa309e22847db7e09d7cbd243344b94d5cdda7d220759bc90a48c7764->enter($__internal_2f72f54aa309e22847db7e09d7cbd243344b94d5cdda7d220759bc90a48c7764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_2f72f54aa309e22847db7e09d7cbd243344b94d5cdda7d220759bc90a48c7764->leave($__internal_2f72f54aa309e22847db7e09d7cbd243344b94d5cdda7d220759bc90a48c7764_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f220ecf340ca0ebe92c78162af1c05c43da952aaef6236af07152622adb8297d = $this->env->getExtension("native_profiler");
        $__internal_f220ecf340ca0ebe92c78162af1c05c43da952aaef6236af07152622adb8297d->enter($__internal_f220ecf340ca0ebe92c78162af1c05c43da952aaef6236af07152622adb8297d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f220ecf340ca0ebe92c78162af1c05c43da952aaef6236af07152622adb8297d->leave($__internal_f220ecf340ca0ebe92c78162af1c05c43da952aaef6236af07152622adb8297d_prof);

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
