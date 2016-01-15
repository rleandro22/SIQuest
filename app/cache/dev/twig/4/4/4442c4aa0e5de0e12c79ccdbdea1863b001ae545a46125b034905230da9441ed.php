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
        $__internal_33c2d037fc1acd6a0fc8e10b5ddcc8aea9fba290ac8514c10a0d0c02425118dc = $this->env->getExtension("native_profiler");
        $__internal_33c2d037fc1acd6a0fc8e10b5ddcc8aea9fba290ac8514c10a0d0c02425118dc->enter($__internal_33c2d037fc1acd6a0fc8e10b5ddcc8aea9fba290ac8514c10a0d0c02425118dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33c2d037fc1acd6a0fc8e10b5ddcc8aea9fba290ac8514c10a0d0c02425118dc->leave($__internal_33c2d037fc1acd6a0fc8e10b5ddcc8aea9fba290ac8514c10a0d0c02425118dc_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_461e01a7a5f61d072c6885bc346bc8c45a0e4e97535bf1b1427a6832b4aac576 = $this->env->getExtension("native_profiler");
        $__internal_461e01a7a5f61d072c6885bc346bc8c45a0e4e97535bf1b1427a6832b4aac576->enter($__internal_461e01a7a5f61d072c6885bc346bc8c45a0e4e97535bf1b1427a6832b4aac576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_461e01a7a5f61d072c6885bc346bc8c45a0e4e97535bf1b1427a6832b4aac576->leave($__internal_461e01a7a5f61d072c6885bc346bc8c45a0e4e97535bf1b1427a6832b4aac576_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_2b25beac707f4f33d4dd77dcdf3f0c625592b6cc25cea43d26710880541dee96 = $this->env->getExtension("native_profiler");
        $__internal_2b25beac707f4f33d4dd77dcdf3f0c625592b6cc25cea43d26710880541dee96->enter($__internal_2b25beac707f4f33d4dd77dcdf3f0c625592b6cc25cea43d26710880541dee96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

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
        
        $__internal_2b25beac707f4f33d4dd77dcdf3f0c625592b6cc25cea43d26710880541dee96->leave($__internal_2b25beac707f4f33d4dd77dcdf3f0c625592b6cc25cea43d26710880541dee96_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ce8a9d76d2526e1eaa401470ed03b7efad4c1f06a5ca0ebb0b939ee37f5e6747 = $this->env->getExtension("native_profiler");
        $__internal_ce8a9d76d2526e1eaa401470ed03b7efad4c1f06a5ca0ebb0b939ee37f5e6747->enter($__internal_ce8a9d76d2526e1eaa401470ed03b7efad4c1f06a5ca0ebb0b939ee37f5e6747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 16
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceobservaciones");
        echo "\">Observaciones</a></li>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicesolicitudes");
        echo "\">Solicitudes</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"active\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecategoria");
        echo "\">Mantenimiento Categorias</a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\">Mantenimiento Cuestionarios</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Mantenimiento Libros</a></li>
                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\">Mantenimiento Preguntas</a></li>
                    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Mantenimiento Usuarios</a></li>
                </ul>
            </li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li>
                <a class=\"btn\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_ce8a9d76d2526e1eaa401470ed03b7efad4c1f06a5ca0ebb0b939ee37f5e6747->leave($__internal_ce8a9d76d2526e1eaa401470ed03b7efad4c1f06a5ca0ebb0b939ee37f5e6747_prof);

    }

    // line 38
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_1f6a846533d636aada701b0e6e9ae83a1c75ad3d77ccc5acfb28f080dbb3977c = $this->env->getExtension("native_profiler");
        $__internal_1f6a846533d636aada701b0e6e9ae83a1c75ad3d77ccc5acfb28f080dbb3977c->enter($__internal_1f6a846533d636aada701b0e6e9ae83a1c75ad3d77ccc5acfb28f080dbb3977c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 39
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
        <a href=\"\">Solicitudes</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_1f6a846533d636aada701b0e6e9ae83a1c75ad3d77ccc5acfb28f080dbb3977c->leave($__internal_1f6a846533d636aada701b0e6e9ae83a1c75ad3d77ccc5acfb28f080dbb3977c_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_74355488e9258bc9fecfb41eb506b55425f5f3be7613db2976e1a93034d6b4b7 = $this->env->getExtension("native_profiler");
        $__internal_74355488e9258bc9fecfb41eb506b55425f5f3be7613db2976e1a93034d6b4b7->enter($__internal_74355488e9258bc9fecfb41eb506b55425f5f3be7613db2976e1a93034d6b4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_74355488e9258bc9fecfb41eb506b55425f5f3be7613db2976e1a93034d6b4b7->leave($__internal_74355488e9258bc9fecfb41eb506b55425f5f3be7613db2976e1a93034d6b4b7_prof);

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
        return array (  195 => 54,  191 => 53,  187 => 52,  183 => 51,  179 => 50,  174 => 49,  168 => 48,  158 => 43,  152 => 40,  149 => 39,  143 => 38,  132 => 33,  124 => 28,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  101 => 20,  97 => 19,  93 => 18,  89 => 16,  83 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
