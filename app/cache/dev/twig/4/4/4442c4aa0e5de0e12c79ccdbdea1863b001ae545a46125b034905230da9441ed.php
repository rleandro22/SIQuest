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
        $__internal_336873bbb76ea12878bae08b1ac8661f7cd12168d6c4d15f953e85770f9c2cab = $this->env->getExtension("native_profiler");
        $__internal_336873bbb76ea12878bae08b1ac8661f7cd12168d6c4d15f953e85770f9c2cab->enter($__internal_336873bbb76ea12878bae08b1ac8661f7cd12168d6c4d15f953e85770f9c2cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_336873bbb76ea12878bae08b1ac8661f7cd12168d6c4d15f953e85770f9c2cab->leave($__internal_336873bbb76ea12878bae08b1ac8661f7cd12168d6c4d15f953e85770f9c2cab_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa54ace6d9d73e0ec4c1652efe8b2529694b3528034d32a77fcf7252fe8074a6 = $this->env->getExtension("native_profiler");
        $__internal_fa54ace6d9d73e0ec4c1652efe8b2529694b3528034d32a77fcf7252fe8074a6->enter($__internal_fa54ace6d9d73e0ec4c1652efe8b2529694b3528034d32a77fcf7252fe8074a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fa54ace6d9d73e0ec4c1652efe8b2529694b3528034d32a77fcf7252fe8074a6->leave($__internal_fa54ace6d9d73e0ec4c1652efe8b2529694b3528034d32a77fcf7252fe8074a6_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_2e9bd083ac7fd010c44654fc0c68d98010db1070949c376ba5f5febb31f944c2 = $this->env->getExtension("native_profiler");
        $__internal_2e9bd083ac7fd010c44654fc0c68d98010db1070949c376ba5f5febb31f944c2->enter($__internal_2e9bd083ac7fd010c44654fc0c68d98010db1070949c376ba5f5febb31f944c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_2e9bd083ac7fd010c44654fc0c68d98010db1070949c376ba5f5febb31f944c2->leave($__internal_2e9bd083ac7fd010c44654fc0c68d98010db1070949c376ba5f5febb31f944c2_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_9e49028593a65661143450068cc6d5add457ac9987e56f2849b0b39477086996 = $this->env->getExtension("native_profiler");
        $__internal_9e49028593a65661143450068cc6d5add457ac9987e56f2849b0b39477086996->enter($__internal_9e49028593a65661143450068cc6d5add457ac9987e56f2849b0b39477086996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_9e49028593a65661143450068cc6d5add457ac9987e56f2849b0b39477086996->leave($__internal_9e49028593a65661143450068cc6d5add457ac9987e56f2849b0b39477086996_prof);

    }

    // line 37
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_094e1906e115f52c1a1f11effc4d54746f8ec6b127ea631a6253ecdf839dd25c = $this->env->getExtension("native_profiler");
        $__internal_094e1906e115f52c1a1f11effc4d54746f8ec6b127ea631a6253ecdf839dd25c->enter($__internal_094e1906e115f52c1a1f11effc4d54746f8ec6b127ea631a6253ecdf839dd25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_094e1906e115f52c1a1f11effc4d54746f8ec6b127ea631a6253ecdf839dd25c->leave($__internal_094e1906e115f52c1a1f11effc4d54746f8ec6b127ea631a6253ecdf839dd25c_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8dd53e9463fce22e11acd0528bd26250e82586e4c5f1aa078f1cce8ce7aea0df = $this->env->getExtension("native_profiler");
        $__internal_8dd53e9463fce22e11acd0528bd26250e82586e4c5f1aa078f1cce8ce7aea0df->enter($__internal_8dd53e9463fce22e11acd0528bd26250e82586e4c5f1aa078f1cce8ce7aea0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8dd53e9463fce22e11acd0528bd26250e82586e4c5f1aa078f1cce8ce7aea0df->leave($__internal_8dd53e9463fce22e11acd0528bd26250e82586e4c5f1aa078f1cce8ce7aea0df_prof);

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
        return array (  189 => 53,  185 => 52,  181 => 51,  177 => 50,  173 => 49,  168 => 48,  162 => 47,  152 => 42,  146 => 39,  143 => 38,  137 => 37,  126 => 32,  118 => 27,  114 => 26,  110 => 25,  106 => 24,  102 => 23,  95 => 19,  91 => 18,  87 => 16,  81 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
