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
        $__internal_c7316dae07465fa5ca600591882a961bc607c3f07bdeb8040af29f2681032e60 = $this->env->getExtension("native_profiler");
        $__internal_c7316dae07465fa5ca600591882a961bc607c3f07bdeb8040af29f2681032e60->enter($__internal_c7316dae07465fa5ca600591882a961bc607c3f07bdeb8040af29f2681032e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7316dae07465fa5ca600591882a961bc607c3f07bdeb8040af29f2681032e60->leave($__internal_c7316dae07465fa5ca600591882a961bc607c3f07bdeb8040af29f2681032e60_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e000fdc831e3aff7d7f14a5b073d53d5b302acad8bc2da321e10c844c758e7a1 = $this->env->getExtension("native_profiler");
        $__internal_e000fdc831e3aff7d7f14a5b073d53d5b302acad8bc2da321e10c844c758e7a1->enter($__internal_e000fdc831e3aff7d7f14a5b073d53d5b302acad8bc2da321e10c844c758e7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e000fdc831e3aff7d7f14a5b073d53d5b302acad8bc2da321e10c844c758e7a1->leave($__internal_e000fdc831e3aff7d7f14a5b073d53d5b302acad8bc2da321e10c844c758e7a1_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_518f92ea508a5300c116431e3e02bbdeb18203e3f0cf336e2d20b34032dae499 = $this->env->getExtension("native_profiler");
        $__internal_518f92ea508a5300c116431e3e02bbdeb18203e3f0cf336e2d20b34032dae499->enter($__internal_518f92ea508a5300c116431e3e02bbdeb18203e3f0cf336e2d20b34032dae499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

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
        
        $__internal_518f92ea508a5300c116431e3e02bbdeb18203e3f0cf336e2d20b34032dae499->leave($__internal_518f92ea508a5300c116431e3e02bbdeb18203e3f0cf336e2d20b34032dae499_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_f6ba6e5121fd6a2b37d58095063390ac96815aab5eac98aadf8a539bdc679aad = $this->env->getExtension("native_profiler");
        $__internal_f6ba6e5121fd6a2b37d58095063390ac96815aab5eac98aadf8a539bdc679aad->enter($__internal_f6ba6e5121fd6a2b37d58095063390ac96815aab5eac98aadf8a539bdc679aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_f6ba6e5121fd6a2b37d58095063390ac96815aab5eac98aadf8a539bdc679aad->leave($__internal_f6ba6e5121fd6a2b37d58095063390ac96815aab5eac98aadf8a539bdc679aad_prof);

    }

    // line 38
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_a20a045b94bf9feb9f6486d6dbbf42261364bbc5cbe3269c3f99b588512df087 = $this->env->getExtension("native_profiler");
        $__internal_a20a045b94bf9feb9f6486d6dbbf42261364bbc5cbe3269c3f99b588512df087->enter($__internal_a20a045b94bf9feb9f6486d6dbbf42261364bbc5cbe3269c3f99b588512df087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 39
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("uci_principal_homepage");
        echo "\">Inicio</a> | 
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceobservaciones");
        echo "\">Observaciones</a> |
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicesolicitudes");
        echo "\">Solicitudes</a> |
        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicelibro");
        echo "\">Libros</a> |
        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecuestionario");
        echo "\">Cuestionarios</a> |
        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicepreguntas");
        echo "\">Preguntas</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_a20a045b94bf9feb9f6486d6dbbf42261364bbc5cbe3269c3f99b588512df087->leave($__internal_a20a045b94bf9feb9f6486d6dbbf42261364bbc5cbe3269c3f99b588512df087_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a39180831fbe6bc570ee54e410b7288ff3401170532ece6252aabd4ae6b3a722 = $this->env->getExtension("native_profiler");
        $__internal_a39180831fbe6bc570ee54e410b7288ff3401170532ece6252aabd4ae6b3a722->enter($__internal_a39180831fbe6bc570ee54e410b7288ff3401170532ece6252aabd4ae6b3a722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_a39180831fbe6bc570ee54e410b7288ff3401170532ece6252aabd4ae6b3a722->leave($__internal_a39180831fbe6bc570ee54e410b7288ff3401170532ece6252aabd4ae6b3a722_prof);

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
        return array (  214 => 58,  210 => 57,  206 => 56,  202 => 55,  198 => 54,  193 => 53,  187 => 52,  177 => 47,  172 => 45,  168 => 44,  164 => 43,  160 => 42,  156 => 41,  152 => 40,  149 => 39,  143 => 38,  132 => 33,  124 => 28,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  101 => 20,  97 => 19,  93 => 18,  89 => 16,  83 => 15,  70 => 12,  62 => 11,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
