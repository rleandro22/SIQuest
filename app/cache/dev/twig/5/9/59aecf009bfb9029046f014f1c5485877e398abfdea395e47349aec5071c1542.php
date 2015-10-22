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
        $__internal_4dbde4aeb3195ac891de1e55334c59573a8d9bb2b535b97653b31f4026a6202f = $this->env->getExtension("native_profiler");
        $__internal_4dbde4aeb3195ac891de1e55334c59573a8d9bb2b535b97653b31f4026a6202f->enter($__internal_4dbde4aeb3195ac891de1e55334c59573a8d9bb2b535b97653b31f4026a6202f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dbde4aeb3195ac891de1e55334c59573a8d9bb2b535b97653b31f4026a6202f->leave($__internal_4dbde4aeb3195ac891de1e55334c59573a8d9bb2b535b97653b31f4026a6202f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_250b40f4d0490dc070bfa179b385fac8ba60e496311e57ed853601304526b4df = $this->env->getExtension("native_profiler");
        $__internal_250b40f4d0490dc070bfa179b385fac8ba60e496311e57ed853601304526b4df->enter($__internal_250b40f4d0490dc070bfa179b385fac8ba60e496311e57ed853601304526b4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_250b40f4d0490dc070bfa179b385fac8ba60e496311e57ed853601304526b4df->leave($__internal_250b40f4d0490dc070bfa179b385fac8ba60e496311e57ed853601304526b4df_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_c6d8b468fc6948b4ba7347de4f2ffd34f0f5d0fa9e8d06bd0c5d145ae2e5f794 = $this->env->getExtension("native_profiler");
        $__internal_c6d8b468fc6948b4ba7347de4f2ffd34f0f5d0fa9e8d06bd0c5d145ae2e5f794->enter($__internal_c6d8b468fc6948b4ba7347de4f2ffd34f0f5d0fa9e8d06bd0c5d145ae2e5f794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_c6d8b468fc6948b4ba7347de4f2ffd34f0f5d0fa9e8d06bd0c5d145ae2e5f794->leave($__internal_c6d8b468fc6948b4ba7347de4f2ffd34f0f5d0fa9e8d06bd0c5d145ae2e5f794_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_816e6274d57219ad6a7d689205c004f98d44675bd33cc521c89f2b6dcf943e3a = $this->env->getExtension("native_profiler");
        $__internal_816e6274d57219ad6a7d689205c004f98d44675bd33cc521c89f2b6dcf943e3a->enter($__internal_816e6274d57219ad6a7d689205c004f98d44675bd33cc521c89f2b6dcf943e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_816e6274d57219ad6a7d689205c004f98d44675bd33cc521c89f2b6dcf943e3a->leave($__internal_816e6274d57219ad6a7d689205c004f98d44675bd33cc521c89f2b6dcf943e3a_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_b5a1265a942c1c4e41857d6b040d5601d36982bb0b25c412b0a6a566db953877 = $this->env->getExtension("native_profiler");
        $__internal_b5a1265a942c1c4e41857d6b040d5601d36982bb0b25c412b0a6a566db953877->enter($__internal_b5a1265a942c1c4e41857d6b040d5601d36982bb0b25c412b0a6a566db953877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_b5a1265a942c1c4e41857d6b040d5601d36982bb0b25c412b0a6a566db953877->leave($__internal_b5a1265a942c1c4e41857d6b040d5601d36982bb0b25c412b0a6a566db953877_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb9d6c12747658496c28f20168bb8c6da70ad7206bbfbcd47b434158a6e3f8e1 = $this->env->getExtension("native_profiler");
        $__internal_cb9d6c12747658496c28f20168bb8c6da70ad7206bbfbcd47b434158a6e3f8e1->enter($__internal_cb9d6c12747658496c28f20168bb8c6da70ad7206bbfbcd47b434158a6e3f8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_cb9d6c12747658496c28f20168bb8c6da70ad7206bbfbcd47b434158a6e3f8e1->leave($__internal_cb9d6c12747658496c28f20168bb8c6da70ad7206bbfbcd47b434158a6e3f8e1_prof);

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
