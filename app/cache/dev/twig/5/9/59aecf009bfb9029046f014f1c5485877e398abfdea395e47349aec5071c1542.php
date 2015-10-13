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
        $__internal_53aacb7bb97a160a668e47feb3036420657193be63312c5e73123cc8b0481486 = $this->env->getExtension("native_profiler");
        $__internal_53aacb7bb97a160a668e47feb3036420657193be63312c5e73123cc8b0481486->enter($__internal_53aacb7bb97a160a668e47feb3036420657193be63312c5e73123cc8b0481486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53aacb7bb97a160a668e47feb3036420657193be63312c5e73123cc8b0481486->leave($__internal_53aacb7bb97a160a668e47feb3036420657193be63312c5e73123cc8b0481486_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b88984418fab701938ea0caebd79db45b65713b0a22a828daa19266eae3a9863 = $this->env->getExtension("native_profiler");
        $__internal_b88984418fab701938ea0caebd79db45b65713b0a22a828daa19266eae3a9863->enter($__internal_b88984418fab701938ea0caebd79db45b65713b0a22a828daa19266eae3a9863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b88984418fab701938ea0caebd79db45b65713b0a22a828daa19266eae3a9863->leave($__internal_b88984418fab701938ea0caebd79db45b65713b0a22a828daa19266eae3a9863_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_4c0393375a6b3273440273b03cb6c272844aa79cde0db095a4f34c0029daa3f0 = $this->env->getExtension("native_profiler");
        $__internal_4c0393375a6b3273440273b03cb6c272844aa79cde0db095a4f34c0029daa3f0->enter($__internal_4c0393375a6b3273440273b03cb6c272844aa79cde0db095a4f34c0029daa3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_4c0393375a6b3273440273b03cb6c272844aa79cde0db095a4f34c0029daa3f0->leave($__internal_4c0393375a6b3273440273b03cb6c272844aa79cde0db095a4f34c0029daa3f0_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1fc151590b509c0a267c68229c05eaa8cdd6073b4ba6dbf4514c409b8ef231cc = $this->env->getExtension("native_profiler");
        $__internal_1fc151590b509c0a267c68229c05eaa8cdd6073b4ba6dbf4514c409b8ef231cc->enter($__internal_1fc151590b509c0a267c68229c05eaa8cdd6073b4ba6dbf4514c409b8ef231cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_1fc151590b509c0a267c68229c05eaa8cdd6073b4ba6dbf4514c409b8ef231cc->leave($__internal_1fc151590b509c0a267c68229c05eaa8cdd6073b4ba6dbf4514c409b8ef231cc_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_92528a24b647c356b2c6c18fcfdc85a74667bea63d4dff8cebc32463408db083 = $this->env->getExtension("native_profiler");
        $__internal_92528a24b647c356b2c6c18fcfdc85a74667bea63d4dff8cebc32463408db083->enter($__internal_92528a24b647c356b2c6c18fcfdc85a74667bea63d4dff8cebc32463408db083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_92528a24b647c356b2c6c18fcfdc85a74667bea63d4dff8cebc32463408db083->leave($__internal_92528a24b647c356b2c6c18fcfdc85a74667bea63d4dff8cebc32463408db083_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_057289dd08e66c23f571fc6dcb459c54dcc76ec2d57e62188348ee7bc4dc4deb = $this->env->getExtension("native_profiler");
        $__internal_057289dd08e66c23f571fc6dcb459c54dcc76ec2d57e62188348ee7bc4dc4deb->enter($__internal_057289dd08e66c23f571fc6dcb459c54dcc76ec2d57e62188348ee7bc4dc4deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_057289dd08e66c23f571fc6dcb459c54dcc76ec2d57e62188348ee7bc4dc4deb->leave($__internal_057289dd08e66c23f571fc6dcb459c54dcc76ec2d57e62188348ee7bc4dc4deb_prof);

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
        return array (  173 => 49,  169 => 48,  165 => 47,  161 => 46,  156 => 45,  150 => 44,  140 => 39,  135 => 37,  132 => 36,  126 => 35,  115 => 30,  108 => 26,  103 => 24,  99 => 23,  91 => 18,  87 => 16,  81 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
