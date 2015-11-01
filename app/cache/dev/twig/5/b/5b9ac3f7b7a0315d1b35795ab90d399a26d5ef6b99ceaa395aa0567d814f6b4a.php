<?php

/* UciAdministradorBundle::base.html.twig */
class __TwigTemplate_5b9ac3f7b7a0315d1b35795ab90d399a26d5ef6b99ceaa395aa0567d814f6b4a extends Twig_Template
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
        $__internal_3ca6c03e8ae4a48440550175c116b6d7e82e9c94e46d734c1d5b0939c3fb2d2f = $this->env->getExtension("native_profiler");
        $__internal_3ca6c03e8ae4a48440550175c116b6d7e82e9c94e46d734c1d5b0939c3fb2d2f->enter($__internal_3ca6c03e8ae4a48440550175c116b6d7e82e9c94e46d734c1d5b0939c3fb2d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ca6c03e8ae4a48440550175c116b6d7e82e9c94e46d734c1d5b0939c3fb2d2f->leave($__internal_3ca6c03e8ae4a48440550175c116b6d7e82e9c94e46d734c1d5b0939c3fb2d2f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a000c6f1b9792abfc5f1ad185d30e7aa5b2c96947310e2c691279aea4bdf5e7 = $this->env->getExtension("native_profiler");
        $__internal_2a000c6f1b9792abfc5f1ad185d30e7aa5b2c96947310e2c691279aea4bdf5e7->enter($__internal_2a000c6f1b9792abfc5f1ad185d30e7aa5b2c96947310e2c691279aea4bdf5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2a000c6f1b9792abfc5f1ad185d30e7aa5b2c96947310e2c691279aea4bdf5e7->leave($__internal_2a000c6f1b9792abfc5f1ad185d30e7aa5b2c96947310e2c691279aea4bdf5e7_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_db11d61f5a5d837ea562cad51fafb318c08ad9698c5fbce0de803ed024cbf46e = $this->env->getExtension("native_profiler");
        $__internal_db11d61f5a5d837ea562cad51fafb318c08ad9698c5fbce0de803ed024cbf46e->enter($__internal_db11d61f5a5d837ea562cad51fafb318c08ad9698c5fbce0de803ed024cbf46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_db11d61f5a5d837ea562cad51fafb318c08ad9698c5fbce0de803ed024cbf46e->leave($__internal_db11d61f5a5d837ea562cad51fafb318c08ad9698c5fbce0de803ed024cbf46e_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_bad681a5bd2b6c5da90d39c4ac8a3b871d57d0f2b33d109ce1ea3030697de8c6 = $this->env->getExtension("native_profiler");
        $__internal_bad681a5bd2b6c5da90d39c4ac8a3b871d57d0f2b33d109ce1ea3030697de8c6->enter($__internal_bad681a5bd2b6c5da90d39c4ac8a3b871d57d0f2b33d109ce1ea3030697de8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_bad681a5bd2b6c5da90d39c4ac8a3b871d57d0f2b33d109ce1ea3030697de8c6->leave($__internal_bad681a5bd2b6c5da90d39c4ac8a3b871d57d0f2b33d109ce1ea3030697de8c6_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_169d7b0c29f473a34c43d5e51cd7d6047af849f16234f055aa94820971217e2f = $this->env->getExtension("native_profiler");
        $__internal_169d7b0c29f473a34c43d5e51cd7d6047af849f16234f055aa94820971217e2f->enter($__internal_169d7b0c29f473a34c43d5e51cd7d6047af849f16234f055aa94820971217e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_169d7b0c29f473a34c43d5e51cd7d6047af849f16234f055aa94820971217e2f->leave($__internal_169d7b0c29f473a34c43d5e51cd7d6047af849f16234f055aa94820971217e2f_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57fa9c00d492ce2448d4b6c890c8eaaa43523019199951e96c6cfa7963e3774b = $this->env->getExtension("native_profiler");
        $__internal_57fa9c00d492ce2448d4b6c890c8eaaa43523019199951e96c6cfa7963e3774b->enter($__internal_57fa9c00d492ce2448d4b6c890c8eaaa43523019199951e96c6cfa7963e3774b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_57fa9c00d492ce2448d4b6c890c8eaaa43523019199951e96c6cfa7963e3774b->leave($__internal_57fa9c00d492ce2448d4b6c890c8eaaa43523019199951e96c6cfa7963e3774b_prof);

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
