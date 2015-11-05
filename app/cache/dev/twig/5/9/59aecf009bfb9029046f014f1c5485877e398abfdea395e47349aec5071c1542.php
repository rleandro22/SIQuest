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
        $__internal_bf7eda9a4f0f7e5dc740029db25a8d200950f045ff1c4aa1318a813e9d77139a = $this->env->getExtension("native_profiler");
        $__internal_bf7eda9a4f0f7e5dc740029db25a8d200950f045ff1c4aa1318a813e9d77139a->enter($__internal_bf7eda9a4f0f7e5dc740029db25a8d200950f045ff1c4aa1318a813e9d77139a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf7eda9a4f0f7e5dc740029db25a8d200950f045ff1c4aa1318a813e9d77139a->leave($__internal_bf7eda9a4f0f7e5dc740029db25a8d200950f045ff1c4aa1318a813e9d77139a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fce588ff5cd94cb596baeb81eca4aba17c1cd228f3b7b181882b9aaa393d78bf = $this->env->getExtension("native_profiler");
        $__internal_fce588ff5cd94cb596baeb81eca4aba17c1cd228f3b7b181882b9aaa393d78bf->enter($__internal_fce588ff5cd94cb596baeb81eca4aba17c1cd228f3b7b181882b9aaa393d78bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fce588ff5cd94cb596baeb81eca4aba17c1cd228f3b7b181882b9aaa393d78bf->leave($__internal_fce588ff5cd94cb596baeb81eca4aba17c1cd228f3b7b181882b9aaa393d78bf_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_6985786abd00380e08112d0c6d179f5078a64df3449b909e08ff4ae7c97a9d2f = $this->env->getExtension("native_profiler");
        $__internal_6985786abd00380e08112d0c6d179f5078a64df3449b909e08ff4ae7c97a9d2f->enter($__internal_6985786abd00380e08112d0c6d179f5078a64df3449b909e08ff4ae7c97a9d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_6985786abd00380e08112d0c6d179f5078a64df3449b909e08ff4ae7c97a9d2f->leave($__internal_6985786abd00380e08112d0c6d179f5078a64df3449b909e08ff4ae7c97a9d2f_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_46321e95856c6ba4cd3d571ca313d1fe3a2aa589ca63bb3f233a1263e318b46d = $this->env->getExtension("native_profiler");
        $__internal_46321e95856c6ba4cd3d571ca313d1fe3a2aa589ca63bb3f233a1263e318b46d->enter($__internal_46321e95856c6ba4cd3d571ca313d1fe3a2aa589ca63bb3f233a1263e318b46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_46321e95856c6ba4cd3d571ca313d1fe3a2aa589ca63bb3f233a1263e318b46d->leave($__internal_46321e95856c6ba4cd3d571ca313d1fe3a2aa589ca63bb3f233a1263e318b46d_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_dfa9dc62985679aeba0c2287be1ee4ee811ef9a2a5f6087ec6e15258139c16a6 = $this->env->getExtension("native_profiler");
        $__internal_dfa9dc62985679aeba0c2287be1ee4ee811ef9a2a5f6087ec6e15258139c16a6->enter($__internal_dfa9dc62985679aeba0c2287be1ee4ee811ef9a2a5f6087ec6e15258139c16a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_dfa9dc62985679aeba0c2287be1ee4ee811ef9a2a5f6087ec6e15258139c16a6->leave($__internal_dfa9dc62985679aeba0c2287be1ee4ee811ef9a2a5f6087ec6e15258139c16a6_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2639cb75cc5b195a723e2b51c3e4cf92a2017928b1414b00dd313b4ae787f5df = $this->env->getExtension("native_profiler");
        $__internal_2639cb75cc5b195a723e2b51c3e4cf92a2017928b1414b00dd313b4ae787f5df->enter($__internal_2639cb75cc5b195a723e2b51c3e4cf92a2017928b1414b00dd313b4ae787f5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2639cb75cc5b195a723e2b51c3e4cf92a2017928b1414b00dd313b4ae787f5df->leave($__internal_2639cb75cc5b195a723e2b51c3e4cf92a2017928b1414b00dd313b4ae787f5df_prof);

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
