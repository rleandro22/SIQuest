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
        $__internal_2eb9821d9e0998ced5aecae3fb4a085dd36e07e4ba47154db48b1b33c19b979e = $this->env->getExtension("native_profiler");
        $__internal_2eb9821d9e0998ced5aecae3fb4a085dd36e07e4ba47154db48b1b33c19b979e->enter($__internal_2eb9821d9e0998ced5aecae3fb4a085dd36e07e4ba47154db48b1b33c19b979e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eb9821d9e0998ced5aecae3fb4a085dd36e07e4ba47154db48b1b33c19b979e->leave($__internal_2eb9821d9e0998ced5aecae3fb4a085dd36e07e4ba47154db48b1b33c19b979e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b67841aada8355f74cd842749a10d62ddf2d8f3d44c2c9bd8100cb4694d8a4ac = $this->env->getExtension("native_profiler");
        $__internal_b67841aada8355f74cd842749a10d62ddf2d8f3d44c2c9bd8100cb4694d8a4ac->enter($__internal_b67841aada8355f74cd842749a10d62ddf2d8f3d44c2c9bd8100cb4694d8a4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b67841aada8355f74cd842749a10d62ddf2d8f3d44c2c9bd8100cb4694d8a4ac->leave($__internal_b67841aada8355f74cd842749a10d62ddf2d8f3d44c2c9bd8100cb4694d8a4ac_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_caa83e55abe60e6fddfc4a48d73f69c4a85fa472ad8a04b25de755ddd2f445a6 = $this->env->getExtension("native_profiler");
        $__internal_caa83e55abe60e6fddfc4a48d73f69c4a85fa472ad8a04b25de755ddd2f445a6->enter($__internal_caa83e55abe60e6fddfc4a48d73f69c4a85fa472ad8a04b25de755ddd2f445a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_caa83e55abe60e6fddfc4a48d73f69c4a85fa472ad8a04b25de755ddd2f445a6->leave($__internal_caa83e55abe60e6fddfc4a48d73f69c4a85fa472ad8a04b25de755ddd2f445a6_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d8aebd231c3ec4d01f8ea17bd117d3dba6cabd41437390b870d8f118758bdd7e = $this->env->getExtension("native_profiler");
        $__internal_d8aebd231c3ec4d01f8ea17bd117d3dba6cabd41437390b870d8f118758bdd7e->enter($__internal_d8aebd231c3ec4d01f8ea17bd117d3dba6cabd41437390b870d8f118758bdd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 16
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"#\">Inicio</a></li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"active\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Mantenimiento Usuarios</a></li>
                    <li><a href=\"sidebar-left.html\">Mantenimiento Libros</a></li>
                    <li><a href=\"sidebar-right.html\">Mantenimiento Preguntas</a></li>
                </ul>
            </li>
            <li>
                <a class=\"btn\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_d8aebd231c3ec4d01f8ea17bd117d3dba6cabd41437390b870d8f118758bdd7e->leave($__internal_d8aebd231c3ec4d01f8ea17bd117d3dba6cabd41437390b870d8f118758bdd7e_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2884abe6f6dd236588dc4b0d8ad727e83a19ffec80423dcc7f6659adfe72a274 = $this->env->getExtension("native_profiler");
        $__internal_2884abe6f6dd236588dc4b0d8ad727e83a19ffec80423dcc7f6659adfe72a274->enter($__internal_2884abe6f6dd236588dc4b0d8ad727e83a19ffec80423dcc7f6659adfe72a274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_2884abe6f6dd236588dc4b0d8ad727e83a19ffec80423dcc7f6659adfe72a274->leave($__internal_2884abe6f6dd236588dc4b0d8ad727e83a19ffec80423dcc7f6659adfe72a274_prof);

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
        return array (  136 => 40,  132 => 39,  128 => 38,  124 => 37,  119 => 36,  113 => 35,  102 => 29,  93 => 23,  84 => 16,  78 => 15,  69 => 12,  61 => 11,  52 => 8,  48 => 7,  43 => 6,  37 => 5,  11 => 2,);
    }
}
