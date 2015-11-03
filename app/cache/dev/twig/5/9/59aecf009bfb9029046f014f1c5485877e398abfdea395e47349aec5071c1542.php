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
        $__internal_0f210eb803836ffcaff72621f74236dcd92fdb7a59bf0c4e1fb0b95b5718f49b = $this->env->getExtension("native_profiler");
        $__internal_0f210eb803836ffcaff72621f74236dcd92fdb7a59bf0c4e1fb0b95b5718f49b->enter($__internal_0f210eb803836ffcaff72621f74236dcd92fdb7a59bf0c4e1fb0b95b5718f49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f210eb803836ffcaff72621f74236dcd92fdb7a59bf0c4e1fb0b95b5718f49b->leave($__internal_0f210eb803836ffcaff72621f74236dcd92fdb7a59bf0c4e1fb0b95b5718f49b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac39b807dd430fe32f3ceed511b46b6c772f7e7cc3c544957aec5f09d3c3c8fd = $this->env->getExtension("native_profiler");
        $__internal_ac39b807dd430fe32f3ceed511b46b6c772f7e7cc3c544957aec5f09d3c3c8fd->enter($__internal_ac39b807dd430fe32f3ceed511b46b6c772f7e7cc3c544957aec5f09d3c3c8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ac39b807dd430fe32f3ceed511b46b6c772f7e7cc3c544957aec5f09d3c3c8fd->leave($__internal_ac39b807dd430fe32f3ceed511b46b6c772f7e7cc3c544957aec5f09d3c3c8fd_prof);

    }

    // line 11
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_e0634fceb297ee8896c892a4abd776890c3e85cc91e42faaf90050f9dea79fb2 = $this->env->getExtension("native_profiler");
        $__internal_e0634fceb297ee8896c892a4abd776890c3e85cc91e42faaf90050f9dea79fb2->enter($__internal_e0634fceb297ee8896c892a4abd776890c3e85cc91e42faaf90050f9dea79fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_e0634fceb297ee8896c892a4abd776890c3e85cc91e42faaf90050f9dea79fb2->leave($__internal_e0634fceb297ee8896c892a4abd776890c3e85cc91e42faaf90050f9dea79fb2_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2763bd7fec570e40b4d1bfcb0ec2b08d69991ca38a5e96227bfa47ef0e903210 = $this->env->getExtension("native_profiler");
        $__internal_2763bd7fec570e40b4d1bfcb0ec2b08d69991ca38a5e96227bfa47ef0e903210->enter($__internal_2763bd7fec570e40b4d1bfcb0ec2b08d69991ca38a5e96227bfa47ef0e903210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_2763bd7fec570e40b4d1bfcb0ec2b08d69991ca38a5e96227bfa47ef0e903210->leave($__internal_2763bd7fec570e40b4d1bfcb0ec2b08d69991ca38a5e96227bfa47ef0e903210_prof);

    }

    // line 35
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_3e6522ab35bac12c018f5efffd8d5ccb14d122134feff22dc926f3b252d7f3d0 = $this->env->getExtension("native_profiler");
        $__internal_3e6522ab35bac12c018f5efffd8d5ccb14d122134feff22dc926f3b252d7f3d0->enter($__internal_3e6522ab35bac12c018f5efffd8d5ccb14d122134feff22dc926f3b252d7f3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

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
        
        $__internal_3e6522ab35bac12c018f5efffd8d5ccb14d122134feff22dc926f3b252d7f3d0->leave($__internal_3e6522ab35bac12c018f5efffd8d5ccb14d122134feff22dc926f3b252d7f3d0_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7bb8d2fbdc68fe4e15fffe2f883d39faef5e9649f6b3293dd44c79f9e07829e = $this->env->getExtension("native_profiler");
        $__internal_f7bb8d2fbdc68fe4e15fffe2f883d39faef5e9649f6b3293dd44c79f9e07829e->enter($__internal_f7bb8d2fbdc68fe4e15fffe2f883d39faef5e9649f6b3293dd44c79f9e07829e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f7bb8d2fbdc68fe4e15fffe2f883d39faef5e9649f6b3293dd44c79f9e07829e->leave($__internal_f7bb8d2fbdc68fe4e15fffe2f883d39faef5e9649f6b3293dd44c79f9e07829e_prof);

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
