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
        $__internal_6dbdbd70ef40c6e853c2c85c98f294670636af853eb32bd8cde6e75c20fa9c98 = $this->env->getExtension("native_profiler");
        $__internal_6dbdbd70ef40c6e853c2c85c98f294670636af853eb32bd8cde6e75c20fa9c98->enter($__internal_6dbdbd70ef40c6e853c2c85c98f294670636af853eb32bd8cde6e75c20fa9c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dbdbd70ef40c6e853c2c85c98f294670636af853eb32bd8cde6e75c20fa9c98->leave($__internal_6dbdbd70ef40c6e853c2c85c98f294670636af853eb32bd8cde6e75c20fa9c98_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_711172080b95442465ea91f680031b79f92c707525a26feea90980fc833736f0 = $this->env->getExtension("native_profiler");
        $__internal_711172080b95442465ea91f680031b79f92c707525a26feea90980fc833736f0->enter($__internal_711172080b95442465ea91f680031b79f92c707525a26feea90980fc833736f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_711172080b95442465ea91f680031b79f92c707525a26feea90980fc833736f0->leave($__internal_711172080b95442465ea91f680031b79f92c707525a26feea90980fc833736f0_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_1d545f1c59a9952d488cbc0e3eb35973c6bb9c9699e0bb3037b45e658fef8f52 = $this->env->getExtension("native_profiler");
        $__internal_1d545f1c59a9952d488cbc0e3eb35973c6bb9c9699e0bb3037b45e658fef8f52->enter($__internal_1d545f1c59a9952d488cbc0e3eb35973c6bb9c9699e0bb3037b45e658fef8f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_1d545f1c59a9952d488cbc0e3eb35973c6bb9c9699e0bb3037b45e658fef8f52->leave($__internal_1d545f1c59a9952d488cbc0e3eb35973c6bb9c9699e0bb3037b45e658fef8f52_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_25aa65ee0710cc40cb4a468d568cd334f966852e9cb55a0e812694cffcf9a43f = $this->env->getExtension("native_profiler");
        $__internal_25aa65ee0710cc40cb4a468d568cd334f966852e9cb55a0e812694cffcf9a43f->enter($__internal_25aa65ee0710cc40cb4a468d568cd334f966852e9cb55a0e812694cffcf9a43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
                    <li><a href=\"sidebar-left.html\">Mantenimiento Categorias</a></li>
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
        
        $__internal_25aa65ee0710cc40cb4a468d568cd334f966852e9cb55a0e812694cffcf9a43f->leave($__internal_25aa65ee0710cc40cb4a468d568cd334f966852e9cb55a0e812694cffcf9a43f_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42c56dfe118ad60da0e9c57039de4fa4d2252e5cf25427a174b0c3f5b1311f6e = $this->env->getExtension("native_profiler");
        $__internal_42c56dfe118ad60da0e9c57039de4fa4d2252e5cf25427a174b0c3f5b1311f6e->enter($__internal_42c56dfe118ad60da0e9c57039de4fa4d2252e5cf25427a174b0c3f5b1311f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_42c56dfe118ad60da0e9c57039de4fa4d2252e5cf25427a174b0c3f5b1311f6e->leave($__internal_42c56dfe118ad60da0e9c57039de4fa4d2252e5cf25427a174b0c3f5b1311f6e_prof);

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
        return array (  140 => 41,  136 => 40,  132 => 39,  128 => 38,  123 => 37,  117 => 36,  106 => 30,  96 => 23,  88 => 18,  84 => 16,  78 => 15,  69 => 12,  61 => 11,  52 => 8,  48 => 7,  43 => 6,  37 => 5,  11 => 2,);
    }
}
