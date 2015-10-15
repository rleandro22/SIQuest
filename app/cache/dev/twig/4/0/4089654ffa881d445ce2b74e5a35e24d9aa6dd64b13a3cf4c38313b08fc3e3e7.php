<?php

/* UciAdministradorBundle::base.html.twig */
class __TwigTemplate_4089654ffa881d445ce2b74e5a35e24d9aa6dd64b13a3cf4c38313b08fc3e3e7 extends Twig_Template
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
        $__internal_a6bc696fdeaf158b88df5da31b01415f3a76e7b76681aff26524661b5fbbead0 = $this->env->getExtension("native_profiler");
        $__internal_a6bc696fdeaf158b88df5da31b01415f3a76e7b76681aff26524661b5fbbead0->enter($__internal_a6bc696fdeaf158b88df5da31b01415f3a76e7b76681aff26524661b5fbbead0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6bc696fdeaf158b88df5da31b01415f3a76e7b76681aff26524661b5fbbead0->leave($__internal_a6bc696fdeaf158b88df5da31b01415f3a76e7b76681aff26524661b5fbbead0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67ebb6a55760a9d491cafe8ab0f69f91ad5677ceb8323aa03b8f9c3ad2179a3a = $this->env->getExtension("native_profiler");
        $__internal_67ebb6a55760a9d491cafe8ab0f69f91ad5677ceb8323aa03b8f9c3ad2179a3a->enter($__internal_67ebb6a55760a9d491cafe8ab0f69f91ad5677ceb8323aa03b8f9c3ad2179a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_67ebb6a55760a9d491cafe8ab0f69f91ad5677ceb8323aa03b8f9c3ad2179a3a->leave($__internal_67ebb6a55760a9d491cafe8ab0f69f91ad5677ceb8323aa03b8f9c3ad2179a3a_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_fb9d23c8025089e05c9f2da125ecb5b29cc917a9062820e2a86cce19c2cd0365 = $this->env->getExtension("native_profiler");
        $__internal_fb9d23c8025089e05c9f2da125ecb5b29cc917a9062820e2a86cce19c2cd0365->enter($__internal_fb9d23c8025089e05c9f2da125ecb5b29cc917a9062820e2a86cce19c2cd0365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_fb9d23c8025089e05c9f2da125ecb5b29cc917a9062820e2a86cce19c2cd0365->leave($__internal_fb9d23c8025089e05c9f2da125ecb5b29cc917a9062820e2a86cce19c2cd0365_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1b5d226dbcc1e823d21a05ef7888ea926bec36ed4c0c82fa03f19ba47aa8a246 = $this->env->getExtension("native_profiler");
        $__internal_1b5d226dbcc1e823d21a05ef7888ea926bec36ed4c0c82fa03f19ba47aa8a246->enter($__internal_1b5d226dbcc1e823d21a05ef7888ea926bec36ed4c0c82fa03f19ba47aa8a246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_1b5d226dbcc1e823d21a05ef7888ea926bec36ed4c0c82fa03f19ba47aa8a246->leave($__internal_1b5d226dbcc1e823d21a05ef7888ea926bec36ed4c0c82fa03f19ba47aa8a246_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_045c8ef3fff47b498046894e1a4257fdb1f1cc345abd1e3185dbd26bde259095 = $this->env->getExtension("native_profiler");
        $__internal_045c8ef3fff47b498046894e1a4257fdb1f1cc345abd1e3185dbd26bde259095->enter($__internal_045c8ef3fff47b498046894e1a4257fdb1f1cc345abd1e3185dbd26bde259095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_045c8ef3fff47b498046894e1a4257fdb1f1cc345abd1e3185dbd26bde259095->leave($__internal_045c8ef3fff47b498046894e1a4257fdb1f1cc345abd1e3185dbd26bde259095_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6184bd4ff6279a46375e01264b2f443c460e6ef9c65b0609bf6508b106a01b05 = $this->env->getExtension("native_profiler");
        $__internal_6184bd4ff6279a46375e01264b2f443c460e6ef9c65b0609bf6508b106a01b05->enter($__internal_6184bd4ff6279a46375e01264b2f443c460e6ef9c65b0609bf6508b106a01b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6184bd4ff6279a46375e01264b2f443c460e6ef9c65b0609bf6508b106a01b05->leave($__internal_6184bd4ff6279a46375e01264b2f443c460e6ef9c65b0609bf6508b106a01b05_prof);

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
