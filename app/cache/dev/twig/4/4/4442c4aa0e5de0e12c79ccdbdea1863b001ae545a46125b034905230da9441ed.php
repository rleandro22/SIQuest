<?php

/* UciAdministradorBundle::base.html.twig */
class __TwigTemplate_4442c4aa0e5de0e12c79ccdbdea1863b001ae545a46125b034905230da9441ed extends Twig_Template
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
        $__internal_eb913d2783597e854c04480ad60983e079196305ee700d88c55ba5e2ef0b9b3e = $this->env->getExtension("native_profiler");
        $__internal_eb913d2783597e854c04480ad60983e079196305ee700d88c55ba5e2ef0b9b3e->enter($__internal_eb913d2783597e854c04480ad60983e079196305ee700d88c55ba5e2ef0b9b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb913d2783597e854c04480ad60983e079196305ee700d88c55ba5e2ef0b9b3e->leave($__internal_eb913d2783597e854c04480ad60983e079196305ee700d88c55ba5e2ef0b9b3e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9aeaa32528087f9b61b9b2a7529254cae9aa89e8e7e00f2818a6921b856eba2a = $this->env->getExtension("native_profiler");
        $__internal_9aeaa32528087f9b61b9b2a7529254cae9aa89e8e7e00f2818a6921b856eba2a->enter($__internal_9aeaa32528087f9b61b9b2a7529254cae9aa89e8e7e00f2818a6921b856eba2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9aeaa32528087f9b61b9b2a7529254cae9aa89e8e7e00f2818a6921b856eba2a->leave($__internal_9aeaa32528087f9b61b9b2a7529254cae9aa89e8e7e00f2818a6921b856eba2a_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_64c550b469a1adf9b73fdc24dbbbd41cdb01c5c8534d0e93f8e4ef39d4215388 = $this->env->getExtension("native_profiler");
        $__internal_64c550b469a1adf9b73fdc24dbbbd41cdb01c5c8534d0e93f8e4ef39d4215388->enter($__internal_64c550b469a1adf9b73fdc24dbbbd41cdb01c5c8534d0e93f8e4ef39d4215388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_64c550b469a1adf9b73fdc24dbbbd41cdb01c5c8534d0e93f8e4ef39d4215388->leave($__internal_64c550b469a1adf9b73fdc24dbbbd41cdb01c5c8534d0e93f8e4ef39d4215388_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_490e3fce81c62b0029230c54d037082947a912a494ce251e6efc1d2893c2e587 = $this->env->getExtension("native_profiler");
        $__internal_490e3fce81c62b0029230c54d037082947a912a494ce251e6efc1d2893c2e587->enter($__internal_490e3fce81c62b0029230c54d037082947a912a494ce251e6efc1d2893c2e587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 16
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicesolicitudes");
        echo "\">Solicitudes</a></li>
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
            <li><a href=\"about.html\">Ayuda</a></li>
            <li>
                <a class=\"btn\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_490e3fce81c62b0029230c54d037082947a912a494ce251e6efc1d2893c2e587->leave($__internal_490e3fce81c62b0029230c54d037082947a912a494ce251e6efc1d2893c2e587_prof);

    }

    // line 37
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_cae6770302db4c8a33157d7d3636e6a55ceb16f038d449d1082f38cec120aef7 = $this->env->getExtension("native_profiler");
        $__internal_cae6770302db4c8a33157d7d3636e6a55ceb16f038d449d1082f38cec120aef7->enter($__internal_cae6770302db4c8a33157d7d3636e6a55ceb16f038d449d1082f38cec120aef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 38
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
        <a href=\"\">Solicitudes</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_cae6770302db4c8a33157d7d3636e6a55ceb16f038d449d1082f38cec120aef7->leave($__internal_cae6770302db4c8a33157d7d3636e6a55ceb16f038d449d1082f38cec120aef7_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a6e61f1bc78054691f709fc2dd8ac36b2ee2155c61b202e4ad5ed8183e44382 = $this->env->getExtension("native_profiler");
        $__internal_7a6e61f1bc78054691f709fc2dd8ac36b2ee2155c61b202e4ad5ed8183e44382->enter($__internal_7a6e61f1bc78054691f709fc2dd8ac36b2ee2155c61b202e4ad5ed8183e44382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_7a6e61f1bc78054691f709fc2dd8ac36b2ee2155c61b202e4ad5ed8183e44382->leave($__internal_7a6e61f1bc78054691f709fc2dd8ac36b2ee2155c61b202e4ad5ed8183e44382_prof);

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
        return array (  191 => 53,  187 => 52,  183 => 51,  179 => 50,  175 => 49,  170 => 48,  164 => 47,  154 => 42,  148 => 39,  145 => 38,  139 => 37,  128 => 32,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  97 => 19,  93 => 18,  89 => 16,  83 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
