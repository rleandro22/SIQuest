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
        $__internal_7b049fad59d2722a41920f9e3cee97f72caa738151d311421974d3830cbf63c8 = $this->env->getExtension("native_profiler");
        $__internal_7b049fad59d2722a41920f9e3cee97f72caa738151d311421974d3830cbf63c8->enter($__internal_7b049fad59d2722a41920f9e3cee97f72caa738151d311421974d3830cbf63c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b049fad59d2722a41920f9e3cee97f72caa738151d311421974d3830cbf63c8->leave($__internal_7b049fad59d2722a41920f9e3cee97f72caa738151d311421974d3830cbf63c8_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7575fbb2c9ba12165194508d06b13aaf2f9f8b789c4bd15c7793672b338bed7c = $this->env->getExtension("native_profiler");
        $__internal_7575fbb2c9ba12165194508d06b13aaf2f9f8b789c4bd15c7793672b338bed7c->enter($__internal_7575fbb2c9ba12165194508d06b13aaf2f9f8b789c4bd15c7793672b338bed7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7575fbb2c9ba12165194508d06b13aaf2f9f8b789c4bd15c7793672b338bed7c->leave($__internal_7575fbb2c9ba12165194508d06b13aaf2f9f8b789c4bd15c7793672b338bed7c_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_f248e32a755ca06f20d6f3c064315d8db432d0da11e114585aca9ca769bdd4c8 = $this->env->getExtension("native_profiler");
        $__internal_f248e32a755ca06f20d6f3c064315d8db432d0da11e114585aca9ca769bdd4c8->enter($__internal_f248e32a755ca06f20d6f3c064315d8db432d0da11e114585aca9ca769bdd4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_f248e32a755ca06f20d6f3c064315d8db432d0da11e114585aca9ca769bdd4c8->leave($__internal_f248e32a755ca06f20d6f3c064315d8db432d0da11e114585aca9ca769bdd4c8_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_3c653f9469aa4b5d62cfa6d2b2bd7d22c2743668bf11969a7add74959368650d = $this->env->getExtension("native_profiler");
        $__internal_3c653f9469aa4b5d62cfa6d2b2bd7d22c2743668bf11969a7add74959368650d->enter($__internal_3c653f9469aa4b5d62cfa6d2b2bd7d22c2743668bf11969a7add74959368650d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_3c653f9469aa4b5d62cfa6d2b2bd7d22c2743668bf11969a7add74959368650d->leave($__internal_3c653f9469aa4b5d62cfa6d2b2bd7d22c2743668bf11969a7add74959368650d_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_03dbe19f3236f6ed5ad037aa7472df7f28a02b1c3cd996b9f9ca1f26483615f2 = $this->env->getExtension("native_profiler");
        $__internal_03dbe19f3236f6ed5ad037aa7472df7f28a02b1c3cd996b9f9ca1f26483615f2->enter($__internal_03dbe19f3236f6ed5ad037aa7472df7f28a02b1c3cd996b9f9ca1f26483615f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_03dbe19f3236f6ed5ad037aa7472df7f28a02b1c3cd996b9f9ca1f26483615f2->leave($__internal_03dbe19f3236f6ed5ad037aa7472df7f28a02b1c3cd996b9f9ca1f26483615f2_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a0fd7fc33dd46e10f32b555f3547f14c77e711da1a58dad6890e7aa19c1cc87 = $this->env->getExtension("native_profiler");
        $__internal_2a0fd7fc33dd46e10f32b555f3547f14c77e711da1a58dad6890e7aa19c1cc87->enter($__internal_2a0fd7fc33dd46e10f32b555f3547f14c77e711da1a58dad6890e7aa19c1cc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2a0fd7fc33dd46e10f32b555f3547f14c77e711da1a58dad6890e7aa19c1cc87->leave($__internal_2a0fd7fc33dd46e10f32b555f3547f14c77e711da1a58dad6890e7aa19c1cc87_prof);

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
        return array (  168 => 49,  164 => 48,  160 => 47,  156 => 46,  151 => 45,  145 => 44,  135 => 39,  130 => 37,  127 => 36,  121 => 35,  110 => 30,  101 => 24,  97 => 23,  89 => 18,  85 => 16,  79 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
