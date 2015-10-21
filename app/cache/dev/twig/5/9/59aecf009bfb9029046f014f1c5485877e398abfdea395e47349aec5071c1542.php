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
        $__internal_35927ecf1040787779732b641e1b6e8fad466fa2a4c89e8069439e35753fced1 = $this->env->getExtension("native_profiler");
        $__internal_35927ecf1040787779732b641e1b6e8fad466fa2a4c89e8069439e35753fced1->enter($__internal_35927ecf1040787779732b641e1b6e8fad466fa2a4c89e8069439e35753fced1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35927ecf1040787779732b641e1b6e8fad466fa2a4c89e8069439e35753fced1->leave($__internal_35927ecf1040787779732b641e1b6e8fad466fa2a4c89e8069439e35753fced1_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bfc21e289e08f0cb3174d4cca1a84204e4ac044d968948789e86bfb1af456768 = $this->env->getExtension("native_profiler");
        $__internal_bfc21e289e08f0cb3174d4cca1a84204e4ac044d968948789e86bfb1af456768->enter($__internal_bfc21e289e08f0cb3174d4cca1a84204e4ac044d968948789e86bfb1af456768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bfc21e289e08f0cb3174d4cca1a84204e4ac044d968948789e86bfb1af456768->leave($__internal_bfc21e289e08f0cb3174d4cca1a84204e4ac044d968948789e86bfb1af456768_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_c8d35188d334ffeacd89c948a2a68dc9e4732b74b447cc79c6d73a6267f2ed0d = $this->env->getExtension("native_profiler");
        $__internal_c8d35188d334ffeacd89c948a2a68dc9e4732b74b447cc79c6d73a6267f2ed0d->enter($__internal_c8d35188d334ffeacd89c948a2a68dc9e4732b74b447cc79c6d73a6267f2ed0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_c8d35188d334ffeacd89c948a2a68dc9e4732b74b447cc79c6d73a6267f2ed0d->leave($__internal_c8d35188d334ffeacd89c948a2a68dc9e4732b74b447cc79c6d73a6267f2ed0d_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1d27728d4fb8bbc6f895687065497f276d8d03dd32ec23a2c421738647216ab9 = $this->env->getExtension("native_profiler");
        $__internal_1d27728d4fb8bbc6f895687065497f276d8d03dd32ec23a2c421738647216ab9->enter($__internal_1d27728d4fb8bbc6f895687065497f276d8d03dd32ec23a2c421738647216ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_1d27728d4fb8bbc6f895687065497f276d8d03dd32ec23a2c421738647216ab9->leave($__internal_1d27728d4fb8bbc6f895687065497f276d8d03dd32ec23a2c421738647216ab9_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_b8a47286696f04105109db27ed637066e8e5d22f37e7d1dafdfc5f3fa8750205 = $this->env->getExtension("native_profiler");
        $__internal_b8a47286696f04105109db27ed637066e8e5d22f37e7d1dafdfc5f3fa8750205->enter($__internal_b8a47286696f04105109db27ed637066e8e5d22f37e7d1dafdfc5f3fa8750205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_b8a47286696f04105109db27ed637066e8e5d22f37e7d1dafdfc5f3fa8750205->leave($__internal_b8a47286696f04105109db27ed637066e8e5d22f37e7d1dafdfc5f3fa8750205_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fc7c96e2f5b78577101927bce581710b07a9328458239c7226637c51e4403552 = $this->env->getExtension("native_profiler");
        $__internal_fc7c96e2f5b78577101927bce581710b07a9328458239c7226637c51e4403552->enter($__internal_fc7c96e2f5b78577101927bce581710b07a9328458239c7226637c51e4403552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_fc7c96e2f5b78577101927bce581710b07a9328458239c7226637c51e4403552->leave($__internal_fc7c96e2f5b78577101927bce581710b07a9328458239c7226637c51e4403552_prof);

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
