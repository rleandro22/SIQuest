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
        $__internal_90bfad9793e3f969f630ded6a518b080075c96a5b509fa784e01e94cca0776ee = $this->env->getExtension("native_profiler");
        $__internal_90bfad9793e3f969f630ded6a518b080075c96a5b509fa784e01e94cca0776ee->enter($__internal_90bfad9793e3f969f630ded6a518b080075c96a5b509fa784e01e94cca0776ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90bfad9793e3f969f630ded6a518b080075c96a5b509fa784e01e94cca0776ee->leave($__internal_90bfad9793e3f969f630ded6a518b080075c96a5b509fa784e01e94cca0776ee_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da61a40e86a6e83565c0dc525e4f6b8eac036086f341a1433afc7f4025d2e9b5 = $this->env->getExtension("native_profiler");
        $__internal_da61a40e86a6e83565c0dc525e4f6b8eac036086f341a1433afc7f4025d2e9b5->enter($__internal_da61a40e86a6e83565c0dc525e4f6b8eac036086f341a1433afc7f4025d2e9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_da61a40e86a6e83565c0dc525e4f6b8eac036086f341a1433afc7f4025d2e9b5->leave($__internal_da61a40e86a6e83565c0dc525e4f6b8eac036086f341a1433afc7f4025d2e9b5_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_312e8b0720ab9580ae04041681198a1008adba8039e10d549978bd7b67df170a = $this->env->getExtension("native_profiler");
        $__internal_312e8b0720ab9580ae04041681198a1008adba8039e10d549978bd7b67df170a->enter($__internal_312e8b0720ab9580ae04041681198a1008adba8039e10d549978bd7b67df170a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_312e8b0720ab9580ae04041681198a1008adba8039e10d549978bd7b67df170a->leave($__internal_312e8b0720ab9580ae04041681198a1008adba8039e10d549978bd7b67df170a_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_6fcf4174419cdc507bbaa433b65943165c27829a6bb6fc2dcf85b1f14f13d633 = $this->env->getExtension("native_profiler");
        $__internal_6fcf4174419cdc507bbaa433b65943165c27829a6bb6fc2dcf85b1f14f13d633->enter($__internal_6fcf4174419cdc507bbaa433b65943165c27829a6bb6fc2dcf85b1f14f13d633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_6fcf4174419cdc507bbaa433b65943165c27829a6bb6fc2dcf85b1f14f13d633->leave($__internal_6fcf4174419cdc507bbaa433b65943165c27829a6bb6fc2dcf85b1f14f13d633_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c5d48e6bc59bd3469c308aa583e1ba27a0155a0369a3334727629ddd879de32 = $this->env->getExtension("native_profiler");
        $__internal_2c5d48e6bc59bd3469c308aa583e1ba27a0155a0369a3334727629ddd879de32->enter($__internal_2c5d48e6bc59bd3469c308aa583e1ba27a0155a0369a3334727629ddd879de32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2c5d48e6bc59bd3469c308aa583e1ba27a0155a0369a3334727629ddd879de32->leave($__internal_2c5d48e6bc59bd3469c308aa583e1ba27a0155a0369a3334727629ddd879de32_prof);

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
        return array (  143 => 41,  139 => 40,  135 => 39,  131 => 38,  126 => 37,  120 => 36,  109 => 30,  100 => 24,  96 => 23,  88 => 18,  84 => 16,  78 => 15,  69 => 12,  61 => 11,  52 => 8,  48 => 7,  43 => 6,  37 => 5,  11 => 2,);
    }
}
