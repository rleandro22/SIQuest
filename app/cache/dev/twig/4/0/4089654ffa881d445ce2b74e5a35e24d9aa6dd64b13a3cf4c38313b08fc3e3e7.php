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
        $__internal_f075150c46de4eb3b4e2969f1b0957943de5f290dfc112e032a68bd27b118de4 = $this->env->getExtension("native_profiler");
        $__internal_f075150c46de4eb3b4e2969f1b0957943de5f290dfc112e032a68bd27b118de4->enter($__internal_f075150c46de4eb3b4e2969f1b0957943de5f290dfc112e032a68bd27b118de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f075150c46de4eb3b4e2969f1b0957943de5f290dfc112e032a68bd27b118de4->leave($__internal_f075150c46de4eb3b4e2969f1b0957943de5f290dfc112e032a68bd27b118de4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f359895832c014b78d8865dde49ed8305cd9a20c8fb9edd0596367694691b1f = $this->env->getExtension("native_profiler");
        $__internal_7f359895832c014b78d8865dde49ed8305cd9a20c8fb9edd0596367694691b1f->enter($__internal_7f359895832c014b78d8865dde49ed8305cd9a20c8fb9edd0596367694691b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7f359895832c014b78d8865dde49ed8305cd9a20c8fb9edd0596367694691b1f->leave($__internal_7f359895832c014b78d8865dde49ed8305cd9a20c8fb9edd0596367694691b1f_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_502aa4cfeb98e4b083fa3bb7307c055aa6fc9eb9c422354e047440341d6a15b0 = $this->env->getExtension("native_profiler");
        $__internal_502aa4cfeb98e4b083fa3bb7307c055aa6fc9eb9c422354e047440341d6a15b0->enter($__internal_502aa4cfeb98e4b083fa3bb7307c055aa6fc9eb9c422354e047440341d6a15b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_502aa4cfeb98e4b083fa3bb7307c055aa6fc9eb9c422354e047440341d6a15b0->leave($__internal_502aa4cfeb98e4b083fa3bb7307c055aa6fc9eb9c422354e047440341d6a15b0_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_9d710f597497d3623c305922f3fc9a362aca41be7a69f51c5dfb040d64e2e3ed = $this->env->getExtension("native_profiler");
        $__internal_9d710f597497d3623c305922f3fc9a362aca41be7a69f51c5dfb040d64e2e3ed->enter($__internal_9d710f597497d3623c305922f3fc9a362aca41be7a69f51c5dfb040d64e2e3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecategoria");
        echo "\">Mantenimiento Categorias</a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\">Mantenimiento Cuestionarios</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Mantenimiento Libros</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\">Mantenimiento Preguntas</a></li>
                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Mantenimiento Usuarios</a></li>
                </ul>
            </li>
            <li>
                <a class=\"btn\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_9d710f597497d3623c305922f3fc9a362aca41be7a69f51c5dfb040d64e2e3ed->leave($__internal_9d710f597497d3623c305922f3fc9a362aca41be7a69f51c5dfb040d64e2e3ed_prof);

    }

    // line 36
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_f27638cbfe5dc1232db2ec56d9edd43872d624a1a49fb6ace646350a38ba6d5c = $this->env->getExtension("native_profiler");
        $__internal_f27638cbfe5dc1232db2ec56d9edd43872d624a1a49fb6ace646350a38ba6d5c->enter($__internal_f27638cbfe5dc1232db2ec56d9edd43872d624a1a49fb6ace646350a38ba6d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 37
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
        <a href=\"about.html\">Ayuda</a> |
        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_f27638cbfe5dc1232db2ec56d9edd43872d624a1a49fb6ace646350a38ba6d5c->leave($__internal_f27638cbfe5dc1232db2ec56d9edd43872d624a1a49fb6ace646350a38ba6d5c_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5d48bb4c5ee465f2ab542ff79b795ab66973ead7846bfc4a284249ee702ff25 = $this->env->getExtension("native_profiler");
        $__internal_a5d48bb4c5ee465f2ab542ff79b795ab66973ead7846bfc4a284249ee702ff25->enter($__internal_a5d48bb4c5ee465f2ab542ff79b795ab66973ead7846bfc4a284249ee702ff25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_a5d48bb4c5ee465f2ab542ff79b795ab66973ead7846bfc4a284249ee702ff25->leave($__internal_a5d48bb4c5ee465f2ab542ff79b795ab66973ead7846bfc4a284249ee702ff25_prof);

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
        return array (  184 => 51,  180 => 50,  176 => 49,  172 => 48,  168 => 47,  163 => 46,  157 => 45,  147 => 40,  142 => 38,  139 => 37,  133 => 36,  122 => 31,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  91 => 18,  87 => 16,  81 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
