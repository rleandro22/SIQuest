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
        $__internal_9af700221cdf65c9648faf2a2482fb14e35f6f9ba69d83fa0585fa0da76fca7d = $this->env->getExtension("native_profiler");
        $__internal_9af700221cdf65c9648faf2a2482fb14e35f6f9ba69d83fa0585fa0da76fca7d->enter($__internal_9af700221cdf65c9648faf2a2482fb14e35f6f9ba69d83fa0585fa0da76fca7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9af700221cdf65c9648faf2a2482fb14e35f6f9ba69d83fa0585fa0da76fca7d->leave($__internal_9af700221cdf65c9648faf2a2482fb14e35f6f9ba69d83fa0585fa0da76fca7d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39da232d28265931d873815bb969810531c36b8b4daa1fc0e4066b6556e858d7 = $this->env->getExtension("native_profiler");
        $__internal_39da232d28265931d873815bb969810531c36b8b4daa1fc0e4066b6556e858d7->enter($__internal_39da232d28265931d873815bb969810531c36b8b4daa1fc0e4066b6556e858d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_39da232d28265931d873815bb969810531c36b8b4daa1fc0e4066b6556e858d7->leave($__internal_39da232d28265931d873815bb969810531c36b8b4daa1fc0e4066b6556e858d7_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_9c619e304fdb25b5ec869bfe2bb696f7779bdb8f143eef9d9a8e341356ab7b8f = $this->env->getExtension("native_profiler");
        $__internal_9c619e304fdb25b5ec869bfe2bb696f7779bdb8f143eef9d9a8e341356ab7b8f->enter($__internal_9c619e304fdb25b5ec869bfe2bb696f7779bdb8f143eef9d9a8e341356ab7b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_9c619e304fdb25b5ec869bfe2bb696f7779bdb8f143eef9d9a8e341356ab7b8f->leave($__internal_9c619e304fdb25b5ec869bfe2bb696f7779bdb8f143eef9d9a8e341356ab7b8f_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_edc4231f9dd858a032d6798b9618fbdc8cf224c781dfeaa0549a3657dee1017c = $this->env->getExtension("native_profiler");
        $__internal_edc4231f9dd858a032d6798b9618fbdc8cf224c781dfeaa0549a3657dee1017c->enter($__internal_edc4231f9dd858a032d6798b9618fbdc8cf224c781dfeaa0549a3657dee1017c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_edc4231f9dd858a032d6798b9618fbdc8cf224c781dfeaa0549a3657dee1017c->leave($__internal_edc4231f9dd858a032d6798b9618fbdc8cf224c781dfeaa0549a3657dee1017c_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_dfde402b86bd213f99f48ecab0ec1acf4cc519850bf11796e3783fab25d564dd = $this->env->getExtension("native_profiler");
        $__internal_dfde402b86bd213f99f48ecab0ec1acf4cc519850bf11796e3783fab25d564dd->enter($__internal_dfde402b86bd213f99f48ecab0ec1acf4cc519850bf11796e3783fab25d564dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_dfde402b86bd213f99f48ecab0ec1acf4cc519850bf11796e3783fab25d564dd->leave($__internal_dfde402b86bd213f99f48ecab0ec1acf4cc519850bf11796e3783fab25d564dd_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fea785155ce9cc1f938ac973c2f32cfa65451adc32033ea387cfd4dbc56b9ef1 = $this->env->getExtension("native_profiler");
        $__internal_fea785155ce9cc1f938ac973c2f32cfa65451adc32033ea387cfd4dbc56b9ef1->enter($__internal_fea785155ce9cc1f938ac973c2f32cfa65451adc32033ea387cfd4dbc56b9ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_fea785155ce9cc1f938ac973c2f32cfa65451adc32033ea387cfd4dbc56b9ef1->leave($__internal_fea785155ce9cc1f938ac973c2f32cfa65451adc32033ea387cfd4dbc56b9ef1_prof);

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
