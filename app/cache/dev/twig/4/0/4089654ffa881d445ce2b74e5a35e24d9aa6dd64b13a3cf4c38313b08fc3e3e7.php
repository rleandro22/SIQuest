<?php

/* UciAdministradorBundle::base.html.twig */
class __TwigTemplate_4089654ffa881d445ce2b74e5a35e24d9aa6dd64b13a3cf4c38313b08fc3e3e7 extends Twig_Template
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
        $__internal_980bbe75504c8bea96d020fbf15a944ed1f51a9769c6ab9ade753e4a860eb888 = $this->env->getExtension("native_profiler");
        $__internal_980bbe75504c8bea96d020fbf15a944ed1f51a9769c6ab9ade753e4a860eb888->enter($__internal_980bbe75504c8bea96d020fbf15a944ed1f51a9769c6ab9ade753e4a860eb888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_980bbe75504c8bea96d020fbf15a944ed1f51a9769c6ab9ade753e4a860eb888->leave($__internal_980bbe75504c8bea96d020fbf15a944ed1f51a9769c6ab9ade753e4a860eb888_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab76a1c09fc75301326da59da48b1bb7eada7180cddcb2668a81cc0612bd772c = $this->env->getExtension("native_profiler");
        $__internal_ab76a1c09fc75301326da59da48b1bb7eada7180cddcb2668a81cc0612bd772c->enter($__internal_ab76a1c09fc75301326da59da48b1bb7eada7180cddcb2668a81cc0612bd772c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ab76a1c09fc75301326da59da48b1bb7eada7180cddcb2668a81cc0612bd772c->leave($__internal_ab76a1c09fc75301326da59da48b1bb7eada7180cddcb2668a81cc0612bd772c_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_f4ee06ec48bd74d6d8682555c56270cfa6c24cbbd5238722a79fd31edec5b3fa = $this->env->getExtension("native_profiler");
        $__internal_f4ee06ec48bd74d6d8682555c56270cfa6c24cbbd5238722a79fd31edec5b3fa->enter($__internal_f4ee06ec48bd74d6d8682555c56270cfa6c24cbbd5238722a79fd31edec5b3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_f4ee06ec48bd74d6d8682555c56270cfa6c24cbbd5238722a79fd31edec5b3fa->leave($__internal_f4ee06ec48bd74d6d8682555c56270cfa6c24cbbd5238722a79fd31edec5b3fa_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1aba26bf7cae5d9d2484adcb3f5adf725aec990b7fbf693f742d9747c33d616b = $this->env->getExtension("native_profiler");
        $__internal_1aba26bf7cae5d9d2484adcb3f5adf725aec990b7fbf693f742d9747c33d616b->enter($__internal_1aba26bf7cae5d9d2484adcb3f5adf725aec990b7fbf693f742d9747c33d616b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_1aba26bf7cae5d9d2484adcb3f5adf725aec990b7fbf693f742d9747c33d616b->leave($__internal_1aba26bf7cae5d9d2484adcb3f5adf725aec990b7fbf693f742d9747c33d616b_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_1bd43d7f5b29828aeac9e1f74fcaed66166075097afee7c23d4dcd4764936053 = $this->env->getExtension("native_profiler");
        $__internal_1bd43d7f5b29828aeac9e1f74fcaed66166075097afee7c23d4dcd4764936053->enter($__internal_1bd43d7f5b29828aeac9e1f74fcaed66166075097afee7c23d4dcd4764936053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_1bd43d7f5b29828aeac9e1f74fcaed66166075097afee7c23d4dcd4764936053->leave($__internal_1bd43d7f5b29828aeac9e1f74fcaed66166075097afee7c23d4dcd4764936053_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60d9fb48ea568167fb8d3778a1dee9264a4b65c9211e35d2935a47719cb680df = $this->env->getExtension("native_profiler");
        $__internal_60d9fb48ea568167fb8d3778a1dee9264a4b65c9211e35d2935a47719cb680df->enter($__internal_60d9fb48ea568167fb8d3778a1dee9264a4b65c9211e35d2935a47719cb680df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_60d9fb48ea568167fb8d3778a1dee9264a4b65c9211e35d2935a47719cb680df->leave($__internal_60d9fb48ea568167fb8d3778a1dee9264a4b65c9211e35d2935a47719cb680df_prof);

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
