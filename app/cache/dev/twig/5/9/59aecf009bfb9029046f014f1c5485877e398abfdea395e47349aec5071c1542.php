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
        $__internal_d6361514ff46df6400dada3acc0211e6d43dcc24b8ab2658aea4081f7bad4b7e = $this->env->getExtension("native_profiler");
        $__internal_d6361514ff46df6400dada3acc0211e6d43dcc24b8ab2658aea4081f7bad4b7e->enter($__internal_d6361514ff46df6400dada3acc0211e6d43dcc24b8ab2658aea4081f7bad4b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6361514ff46df6400dada3acc0211e6d43dcc24b8ab2658aea4081f7bad4b7e->leave($__internal_d6361514ff46df6400dada3acc0211e6d43dcc24b8ab2658aea4081f7bad4b7e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_361eafd30073b60d82fb52b81aedb705e610e3194478fc4ba41a608490b96983 = $this->env->getExtension("native_profiler");
        $__internal_361eafd30073b60d82fb52b81aedb705e610e3194478fc4ba41a608490b96983->enter($__internal_361eafd30073b60d82fb52b81aedb705e610e3194478fc4ba41a608490b96983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_361eafd30073b60d82fb52b81aedb705e610e3194478fc4ba41a608490b96983->leave($__internal_361eafd30073b60d82fb52b81aedb705e610e3194478fc4ba41a608490b96983_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_231bdda253d53c03cd34c036ff8b38335d89d1f40144165e9fc3701a9da2a382 = $this->env->getExtension("native_profiler");
        $__internal_231bdda253d53c03cd34c036ff8b38335d89d1f40144165e9fc3701a9da2a382->enter($__internal_231bdda253d53c03cd34c036ff8b38335d89d1f40144165e9fc3701a9da2a382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_231bdda253d53c03cd34c036ff8b38335d89d1f40144165e9fc3701a9da2a382->leave($__internal_231bdda253d53c03cd34c036ff8b38335d89d1f40144165e9fc3701a9da2a382_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_e39736f9924bdfa3189256609fcd0e5bc9e003fb91550b595d94f6bc26c137c0 = $this->env->getExtension("native_profiler");
        $__internal_e39736f9924bdfa3189256609fcd0e5bc9e003fb91550b595d94f6bc26c137c0->enter($__internal_e39736f9924bdfa3189256609fcd0e5bc9e003fb91550b595d94f6bc26c137c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_e39736f9924bdfa3189256609fcd0e5bc9e003fb91550b595d94f6bc26c137c0->leave($__internal_e39736f9924bdfa3189256609fcd0e5bc9e003fb91550b595d94f6bc26c137c0_prof);

    }

    // line 36
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_552aae2d83dedc680be24dceec75dbe7c259e0617a84e7ade40894a558ecaccc = $this->env->getExtension("native_profiler");
        $__internal_552aae2d83dedc680be24dceec75dbe7c259e0617a84e7ade40894a558ecaccc->enter($__internal_552aae2d83dedc680be24dceec75dbe7c259e0617a84e7ade40894a558ecaccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_552aae2d83dedc680be24dceec75dbe7c259e0617a84e7ade40894a558ecaccc->leave($__internal_552aae2d83dedc680be24dceec75dbe7c259e0617a84e7ade40894a558ecaccc_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb421e31fb37c3c23c22d319df166d9d0139e79a448f1cbb863359be1dc57486 = $this->env->getExtension("native_profiler");
        $__internal_eb421e31fb37c3c23c22d319df166d9d0139e79a448f1cbb863359be1dc57486->enter($__internal_eb421e31fb37c3c23c22d319df166d9d0139e79a448f1cbb863359be1dc57486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_eb421e31fb37c3c23c22d319df166d9d0139e79a448f1cbb863359be1dc57486->leave($__internal_eb421e31fb37c3c23c22d319df166d9d0139e79a448f1cbb863359be1dc57486_prof);

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
