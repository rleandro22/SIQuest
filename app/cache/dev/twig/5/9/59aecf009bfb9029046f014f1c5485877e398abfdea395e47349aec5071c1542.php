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
        $__internal_efe208035ed6a3e924076b31c39539601fd9b708bdeeca70318f1e8bc184b80b = $this->env->getExtension("native_profiler");
        $__internal_efe208035ed6a3e924076b31c39539601fd9b708bdeeca70318f1e8bc184b80b->enter($__internal_efe208035ed6a3e924076b31c39539601fd9b708bdeeca70318f1e8bc184b80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efe208035ed6a3e924076b31c39539601fd9b708bdeeca70318f1e8bc184b80b->leave($__internal_efe208035ed6a3e924076b31c39539601fd9b708bdeeca70318f1e8bc184b80b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99505c50d90161f320a36e3b720463b6677bdd167c87af6a55a792c352998cad = $this->env->getExtension("native_profiler");
        $__internal_99505c50d90161f320a36e3b720463b6677bdd167c87af6a55a792c352998cad->enter($__internal_99505c50d90161f320a36e3b720463b6677bdd167c87af6a55a792c352998cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_99505c50d90161f320a36e3b720463b6677bdd167c87af6a55a792c352998cad->leave($__internal_99505c50d90161f320a36e3b720463b6677bdd167c87af6a55a792c352998cad_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_a34634162128465a488a7f015c1125c7cceb368db2f6ad61226df685fba9939a = $this->env->getExtension("native_profiler");
        $__internal_a34634162128465a488a7f015c1125c7cceb368db2f6ad61226df685fba9939a->enter($__internal_a34634162128465a488a7f015c1125c7cceb368db2f6ad61226df685fba9939a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_a34634162128465a488a7f015c1125c7cceb368db2f6ad61226df685fba9939a->leave($__internal_a34634162128465a488a7f015c1125c7cceb368db2f6ad61226df685fba9939a_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_3903664e3c605dc80647afa774f340af1bb25e29dc8fb4d4826bff71efd257b5 = $this->env->getExtension("native_profiler");
        $__internal_3903664e3c605dc80647afa774f340af1bb25e29dc8fb4d4826bff71efd257b5->enter($__internal_3903664e3c605dc80647afa774f340af1bb25e29dc8fb4d4826bff71efd257b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_3903664e3c605dc80647afa774f340af1bb25e29dc8fb4d4826bff71efd257b5->leave($__internal_3903664e3c605dc80647afa774f340af1bb25e29dc8fb4d4826bff71efd257b5_prof);

    }

    // line 36
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_703a66dc327448e1fc34d135728f2517afd57efd640fd9d5146aaa1e096d6e2c = $this->env->getExtension("native_profiler");
        $__internal_703a66dc327448e1fc34d135728f2517afd57efd640fd9d5146aaa1e096d6e2c->enter($__internal_703a66dc327448e1fc34d135728f2517afd57efd640fd9d5146aaa1e096d6e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_703a66dc327448e1fc34d135728f2517afd57efd640fd9d5146aaa1e096d6e2c->leave($__internal_703a66dc327448e1fc34d135728f2517afd57efd640fd9d5146aaa1e096d6e2c_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_030ddb7929f055a4a07173de3e7f93df91817382bfe586089a863588d86c7e96 = $this->env->getExtension("native_profiler");
        $__internal_030ddb7929f055a4a07173de3e7f93df91817382bfe586089a863588d86c7e96->enter($__internal_030ddb7929f055a4a07173de3e7f93df91817382bfe586089a863588d86c7e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_030ddb7929f055a4a07173de3e7f93df91817382bfe586089a863588d86c7e96->leave($__internal_030ddb7929f055a4a07173de3e7f93df91817382bfe586089a863588d86c7e96_prof);

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
