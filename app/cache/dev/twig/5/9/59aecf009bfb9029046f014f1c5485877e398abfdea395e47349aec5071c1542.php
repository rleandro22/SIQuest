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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bc5bafab9394ede462682f442bac23b22f5c7c4c5f9a84a26cba54706a79995 = $this->env->getExtension("native_profiler");
        $__internal_0bc5bafab9394ede462682f442bac23b22f5c7c4c5f9a84a26cba54706a79995->enter($__internal_0bc5bafab9394ede462682f442bac23b22f5c7c4c5f9a84a26cba54706a79995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bc5bafab9394ede462682f442bac23b22f5c7c4c5f9a84a26cba54706a79995->leave($__internal_0bc5bafab9394ede462682f442bac23b22f5c7c4c5f9a84a26cba54706a79995_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6575c14f420dc7a3f6dc906405dd26ad68813ea907bbc55947062c995e7c495 = $this->env->getExtension("native_profiler");
        $__internal_d6575c14f420dc7a3f6dc906405dd26ad68813ea907bbc55947062c995e7c495->enter($__internal_d6575c14f420dc7a3f6dc906405dd26ad68813ea907bbc55947062c995e7c495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/menuvertcss.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
        ";
        
        $__internal_d6575c14f420dc7a3f6dc906405dd26ad68813ea907bbc55947062c995e7c495->leave($__internal_d6575c14f420dc7a3f6dc906405dd26ad68813ea907bbc55947062c995e7c495_prof);

    }

    // line 10
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_9ba71b6cbe88f26057b2237a341257013f86604e89365ba0c7267ea9ad633b51 = $this->env->getExtension("native_profiler");
        $__internal_9ba71b6cbe88f26057b2237a341257013f86604e89365ba0c7267ea9ad633b51->enter($__internal_9ba71b6cbe88f26057b2237a341257013f86604e89365ba0c7267ea9ad633b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_9ba71b6cbe88f26057b2237a341257013f86604e89365ba0c7267ea9ad633b51->leave($__internal_9ba71b6cbe88f26057b2237a341257013f86604e89365ba0c7267ea9ad633b51_prof);

    }

    // line 14
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_8673179d4c0377cb03c08f6db4ee7a33efb199046fd7f4d93834ba184aa3f96c = $this->env->getExtension("native_profiler");
        $__internal_8673179d4c0377cb03c08f6db4ee7a33efb199046fd7f4d93834ba184aa3f96c->enter($__internal_8673179d4c0377cb03c08f6db4ee7a33efb199046fd7f4d93834ba184aa3f96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 15
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"#\">Inicio</a></li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"active\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Mantenimiento Usuarios</a></li>
                    <li><a href=\"sidebar-left.html\">Mantenimiento Libros</a></li>
                    <li><a href=\"sidebar-right.html\">Mantenimiento Preguntas</a></li>
                </ul>
            </li>
            <li>
                <a class=\"btn\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_8673179d4c0377cb03c08f6db4ee7a33efb199046fd7f4d93834ba184aa3f96c->leave($__internal_8673179d4c0377cb03c08f6db4ee7a33efb199046fd7f4d93834ba184aa3f96c_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71da4d73188b3473969e6e742f48a2cd0c8825fba7b48f4325a8a0fec37d4af2 = $this->env->getExtension("native_profiler");
        $__internal_71da4d73188b3473969e6e742f48a2cd0c8825fba7b48f4325a8a0fec37d4af2->enter($__internal_71da4d73188b3473969e6e742f48a2cd0c8825fba7b48f4325a8a0fec37d4af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 35
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
        
        $__internal_71da4d73188b3473969e6e742f48a2cd0c8825fba7b48f4325a8a0fec37d4af2->leave($__internal_71da4d73188b3473969e6e742f48a2cd0c8825fba7b48f4325a8a0fec37d4af2_prof);

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
        return array (  120 => 36,  115 => 35,  109 => 34,  98 => 28,  89 => 22,  80 => 15,  74 => 14,  65 => 11,  57 => 10,  48 => 7,  43 => 6,  37 => 5,  11 => 2,);
    }
}
