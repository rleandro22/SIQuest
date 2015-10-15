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
        $__internal_15e7c1aa4c9f9d6eb1759a41333dc624e90651513fe4f1f07893580c33e8873d = $this->env->getExtension("native_profiler");
        $__internal_15e7c1aa4c9f9d6eb1759a41333dc624e90651513fe4f1f07893580c33e8873d->enter($__internal_15e7c1aa4c9f9d6eb1759a41333dc624e90651513fe4f1f07893580c33e8873d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15e7c1aa4c9f9d6eb1759a41333dc624e90651513fe4f1f07893580c33e8873d->leave($__internal_15e7c1aa4c9f9d6eb1759a41333dc624e90651513fe4f1f07893580c33e8873d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d76e86a60d3b63d913270bc0ad6787b28cbcb188ca872180d26ecefc8ce5fcd9 = $this->env->getExtension("native_profiler");
        $__internal_d76e86a60d3b63d913270bc0ad6787b28cbcb188ca872180d26ecefc8ce5fcd9->enter($__internal_d76e86a60d3b63d913270bc0ad6787b28cbcb188ca872180d26ecefc8ce5fcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d76e86a60d3b63d913270bc0ad6787b28cbcb188ca872180d26ecefc8ce5fcd9->leave($__internal_d76e86a60d3b63d913270bc0ad6787b28cbcb188ca872180d26ecefc8ce5fcd9_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_fa0223cce8b411ec74c5cdd5c0799a49516fb56f9fa2803e898e3242b3c6c822 = $this->env->getExtension("native_profiler");
        $__internal_fa0223cce8b411ec74c5cdd5c0799a49516fb56f9fa2803e898e3242b3c6c822->enter($__internal_fa0223cce8b411ec74c5cdd5c0799a49516fb56f9fa2803e898e3242b3c6c822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_fa0223cce8b411ec74c5cdd5c0799a49516fb56f9fa2803e898e3242b3c6c822->leave($__internal_fa0223cce8b411ec74c5cdd5c0799a49516fb56f9fa2803e898e3242b3c6c822_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_63f60b14842c2ed09b1f964def345438aa1a17a3538370070deb53d1d72c98b9 = $this->env->getExtension("native_profiler");
        $__internal_63f60b14842c2ed09b1f964def345438aa1a17a3538370070deb53d1d72c98b9->enter($__internal_63f60b14842c2ed09b1f964def345438aa1a17a3538370070deb53d1d72c98b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_63f60b14842c2ed09b1f964def345438aa1a17a3538370070deb53d1d72c98b9->leave($__internal_63f60b14842c2ed09b1f964def345438aa1a17a3538370070deb53d1d72c98b9_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_251690f66f33dbd8dde4ce111a0f164501476d0e064f3855e057ad720fe4dd5b = $this->env->getExtension("native_profiler");
        $__internal_251690f66f33dbd8dde4ce111a0f164501476d0e064f3855e057ad720fe4dd5b->enter($__internal_251690f66f33dbd8dde4ce111a0f164501476d0e064f3855e057ad720fe4dd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_251690f66f33dbd8dde4ce111a0f164501476d0e064f3855e057ad720fe4dd5b->leave($__internal_251690f66f33dbd8dde4ce111a0f164501476d0e064f3855e057ad720fe4dd5b_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f20797ef335e208a14f758298724f1df9a07c1e6ab022fb2f66026e3e30bf953 = $this->env->getExtension("native_profiler");
        $__internal_f20797ef335e208a14f758298724f1df9a07c1e6ab022fb2f66026e3e30bf953->enter($__internal_f20797ef335e208a14f758298724f1df9a07c1e6ab022fb2f66026e3e30bf953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_f20797ef335e208a14f758298724f1df9a07c1e6ab022fb2f66026e3e30bf953->leave($__internal_f20797ef335e208a14f758298724f1df9a07c1e6ab022fb2f66026e3e30bf953_prof);

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
        return array (  176 => 49,  172 => 48,  168 => 47,  164 => 46,  159 => 45,  153 => 44,  143 => 39,  138 => 37,  135 => 36,  129 => 35,  118 => 30,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  91 => 18,  87 => 16,  81 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
