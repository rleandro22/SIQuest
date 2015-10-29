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
        $__internal_e8be748f5ee59615c2596596a5488813cf5b568c1f26307d987a9b821cca648d = $this->env->getExtension("native_profiler");
        $__internal_e8be748f5ee59615c2596596a5488813cf5b568c1f26307d987a9b821cca648d->enter($__internal_e8be748f5ee59615c2596596a5488813cf5b568c1f26307d987a9b821cca648d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8be748f5ee59615c2596596a5488813cf5b568c1f26307d987a9b821cca648d->leave($__internal_e8be748f5ee59615c2596596a5488813cf5b568c1f26307d987a9b821cca648d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19df0aba488539f7c2813346a903f3ecf97e9568d5039467755aaf96ce6c05ef = $this->env->getExtension("native_profiler");
        $__internal_19df0aba488539f7c2813346a903f3ecf97e9568d5039467755aaf96ce6c05ef->enter($__internal_19df0aba488539f7c2813346a903f3ecf97e9568d5039467755aaf96ce6c05ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_19df0aba488539f7c2813346a903f3ecf97e9568d5039467755aaf96ce6c05ef->leave($__internal_19df0aba488539f7c2813346a903f3ecf97e9568d5039467755aaf96ce6c05ef_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_3700b2a83430b63d6f57172453810c4dbd8362237d0568bc9dd178ee5cdcc26e = $this->env->getExtension("native_profiler");
        $__internal_3700b2a83430b63d6f57172453810c4dbd8362237d0568bc9dd178ee5cdcc26e->enter($__internal_3700b2a83430b63d6f57172453810c4dbd8362237d0568bc9dd178ee5cdcc26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_3700b2a83430b63d6f57172453810c4dbd8362237d0568bc9dd178ee5cdcc26e->leave($__internal_3700b2a83430b63d6f57172453810c4dbd8362237d0568bc9dd178ee5cdcc26e_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_c72d54e2985ab2d2e99c68cf0ea990104ec6595f95b8f5f1b4f8df62c4133cde = $this->env->getExtension("native_profiler");
        $__internal_c72d54e2985ab2d2e99c68cf0ea990104ec6595f95b8f5f1b4f8df62c4133cde->enter($__internal_c72d54e2985ab2d2e99c68cf0ea990104ec6595f95b8f5f1b4f8df62c4133cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_c72d54e2985ab2d2e99c68cf0ea990104ec6595f95b8f5f1b4f8df62c4133cde->leave($__internal_c72d54e2985ab2d2e99c68cf0ea990104ec6595f95b8f5f1b4f8df62c4133cde_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_71b57d314ce73558eb9f7eb70880c66cb6d6fe0efdc6f56ee08aeeab7beb6d99 = $this->env->getExtension("native_profiler");
        $__internal_71b57d314ce73558eb9f7eb70880c66cb6d6fe0efdc6f56ee08aeeab7beb6d99->enter($__internal_71b57d314ce73558eb9f7eb70880c66cb6d6fe0efdc6f56ee08aeeab7beb6d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_71b57d314ce73558eb9f7eb70880c66cb6d6fe0efdc6f56ee08aeeab7beb6d99->leave($__internal_71b57d314ce73558eb9f7eb70880c66cb6d6fe0efdc6f56ee08aeeab7beb6d99_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_616a7b5890f95b1f1c04ba43686877af32a72e6983487e06c8a2a3caa2b8b204 = $this->env->getExtension("native_profiler");
        $__internal_616a7b5890f95b1f1c04ba43686877af32a72e6983487e06c8a2a3caa2b8b204->enter($__internal_616a7b5890f95b1f1c04ba43686877af32a72e6983487e06c8a2a3caa2b8b204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_616a7b5890f95b1f1c04ba43686877af32a72e6983487e06c8a2a3caa2b8b204->leave($__internal_616a7b5890f95b1f1c04ba43686877af32a72e6983487e06c8a2a3caa2b8b204_prof);

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
        return array (  180 => 50,  176 => 49,  172 => 48,  168 => 47,  164 => 46,  159 => 45,  153 => 44,  143 => 39,  138 => 37,  135 => 36,  129 => 35,  118 => 30,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  91 => 18,  87 => 16,  81 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
