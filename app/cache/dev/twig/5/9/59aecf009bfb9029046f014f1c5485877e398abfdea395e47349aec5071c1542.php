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
            'navigation' => array($this, 'block_navigation'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9ff718cd9dee4994ece62c0d9950e81e90d2aa9baf1a01b98351f1aa8e57279 = $this->env->getExtension("native_profiler");
        $__internal_c9ff718cd9dee4994ece62c0d9950e81e90d2aa9baf1a01b98351f1aa8e57279->enter($__internal_c9ff718cd9dee4994ece62c0d9950e81e90d2aa9baf1a01b98351f1aa8e57279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9ff718cd9dee4994ece62c0d9950e81e90d2aa9baf1a01b98351f1aa8e57279->leave($__internal_c9ff718cd9dee4994ece62c0d9950e81e90d2aa9baf1a01b98351f1aa8e57279_prof);

    }

    // line 5
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2e9a7cee05c67b1a0a240e72ce0aef357628ca499739f6c4839290a710100d60 = $this->env->getExtension("native_profiler");
        $__internal_2e9a7cee05c67b1a0a240e72ce0aef357628ca499739f6c4839290a710100d60->enter($__internal_2e9a7cee05c67b1a0a240e72ce0aef357628ca499739f6c4839290a710100d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 6
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"#\">Inicio</a></li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"sidebar-left.html\">Mantenimiento Libros</a></li>
                    <li class=\"active\"><a href=\"sidebar-right.html\">Mantenimiento Preguntas</a></li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    ";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "has", array(0 => "usuario"), "method")) {
            echo " 
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "usuario"), "method"), "html", null, true);
            echo " 
                    ";
        }
        // line 21
        echo " 
                    <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Salir</a></li>
                </ul>
            </li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_2e9a7cee05c67b1a0a240e72ce0aef357628ca499739f6c4839290a710100d60->leave($__internal_2e9a7cee05c67b1a0a240e72ce0aef357628ca499739f6c4839290a710100d60_prof);

    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        $__internal_2c5d8ed021976016fef1966c17ba55a5c1317df173657b6d72d43a277b63a7d4 = $this->env->getExtension("native_profiler");
        $__internal_2c5d8ed021976016fef1966c17ba55a5c1317df173657b6d72d43a277b63a7d4->enter($__internal_2c5d8ed021976016fef1966c17ba55a5c1317df173657b6d72d43a277b63a7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 32
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_2c5d8ed021976016fef1966c17ba55a5c1317df173657b6d72d43a277b63a7d4->leave($__internal_2c5d8ed021976016fef1966c17ba55a5c1317df173657b6d72d43a277b63a7d4_prof);

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
        return array (  86 => 32,  80 => 31,  65 => 21,  60 => 20,  56 => 19,  41 => 6,  35 => 5,  11 => 2,);
    }
}
