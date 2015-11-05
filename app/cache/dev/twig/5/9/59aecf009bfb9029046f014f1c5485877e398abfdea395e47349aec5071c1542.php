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
        $__internal_b7d5730fd32f2258a36bb9fb6a5daf232693ad162280e735eadf219ab85feef5 = $this->env->getExtension("native_profiler");
        $__internal_b7d5730fd32f2258a36bb9fb6a5daf232693ad162280e735eadf219ab85feef5->enter($__internal_b7d5730fd32f2258a36bb9fb6a5daf232693ad162280e735eadf219ab85feef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7d5730fd32f2258a36bb9fb6a5daf232693ad162280e735eadf219ab85feef5->leave($__internal_b7d5730fd32f2258a36bb9fb6a5daf232693ad162280e735eadf219ab85feef5_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aad1d505774bf9bb00dd6fc023bedce5be3c533b1bb1b0d3b3f33ec2f6eec5dc = $this->env->getExtension("native_profiler");
        $__internal_aad1d505774bf9bb00dd6fc023bedce5be3c533b1bb1b0d3b3f33ec2f6eec5dc->enter($__internal_aad1d505774bf9bb00dd6fc023bedce5be3c533b1bb1b0d3b3f33ec2f6eec5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_aad1d505774bf9bb00dd6fc023bedce5be3c533b1bb1b0d3b3f33ec2f6eec5dc->leave($__internal_aad1d505774bf9bb00dd6fc023bedce5be3c533b1bb1b0d3b3f33ec2f6eec5dc_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_f99f1bb28a9e9f2927d6feb1cd08d78542961578d3d8ab36d0da4335fbf441c2 = $this->env->getExtension("native_profiler");
        $__internal_f99f1bb28a9e9f2927d6feb1cd08d78542961578d3d8ab36d0da4335fbf441c2->enter($__internal_f99f1bb28a9e9f2927d6feb1cd08d78542961578d3d8ab36d0da4335fbf441c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_f99f1bb28a9e9f2927d6feb1cd08d78542961578d3d8ab36d0da4335fbf441c2->leave($__internal_f99f1bb28a9e9f2927d6feb1cd08d78542961578d3d8ab36d0da4335fbf441c2_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a2bc0cdb96060f24d0236afdfcdff22ef2ee2a148000f8283f3001e6e58d6348 = $this->env->getExtension("native_profiler");
        $__internal_a2bc0cdb96060f24d0236afdfcdff22ef2ee2a148000f8283f3001e6e58d6348->enter($__internal_a2bc0cdb96060f24d0236afdfcdff22ef2ee2a148000f8283f3001e6e58d6348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_a2bc0cdb96060f24d0236afdfcdff22ef2ee2a148000f8283f3001e6e58d6348->leave($__internal_a2bc0cdb96060f24d0236afdfcdff22ef2ee2a148000f8283f3001e6e58d6348_prof);

    }

    // line 36
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_6f63e0813565062c43546d3c9181dcdf767d2c90cb63bce0762694695ebb4b79 = $this->env->getExtension("native_profiler");
        $__internal_6f63e0813565062c43546d3c9181dcdf767d2c90cb63bce0762694695ebb4b79->enter($__internal_6f63e0813565062c43546d3c9181dcdf767d2c90cb63bce0762694695ebb4b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_6f63e0813565062c43546d3c9181dcdf767d2c90cb63bce0762694695ebb4b79->leave($__internal_6f63e0813565062c43546d3c9181dcdf767d2c90cb63bce0762694695ebb4b79_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80d080a242799ac829618f9eeb4ce5e92c8f756b69b2b68fa06a58719766ff17 = $this->env->getExtension("native_profiler");
        $__internal_80d080a242799ac829618f9eeb4ce5e92c8f756b69b2b68fa06a58719766ff17->enter($__internal_80d080a242799ac829618f9eeb4ce5e92c8f756b69b2b68fa06a58719766ff17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_80d080a242799ac829618f9eeb4ce5e92c8f756b69b2b68fa06a58719766ff17->leave($__internal_80d080a242799ac829618f9eeb4ce5e92c8f756b69b2b68fa06a58719766ff17_prof);

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
