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
        $__internal_d61a9ed6f8bdd84936f899669932331138f957f5c413fe837d9c41d48ddcd033 = $this->env->getExtension("native_profiler");
        $__internal_d61a9ed6f8bdd84936f899669932331138f957f5c413fe837d9c41d48ddcd033->enter($__internal_d61a9ed6f8bdd84936f899669932331138f957f5c413fe837d9c41d48ddcd033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d61a9ed6f8bdd84936f899669932331138f957f5c413fe837d9c41d48ddcd033->leave($__internal_d61a9ed6f8bdd84936f899669932331138f957f5c413fe837d9c41d48ddcd033_prof);

    }

    // line 5
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_9a8b9672b978ae1c1677cccfffeea7ae6ea97b664953a15fb878a91f4bc7da62 = $this->env->getExtension("native_profiler");
        $__internal_9a8b9672b978ae1c1677cccfffeea7ae6ea97b664953a15fb878a91f4bc7da62->enter($__internal_9a8b9672b978ae1c1677cccfffeea7ae6ea97b664953a15fb878a91f4bc7da62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_9a8b9672b978ae1c1677cccfffeea7ae6ea97b664953a15fb878a91f4bc7da62->leave($__internal_9a8b9672b978ae1c1677cccfffeea7ae6ea97b664953a15fb878a91f4bc7da62_prof);

    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        $__internal_d6760388bb709fa473b182764887c0ca5c9f1bf83675a278578b77826cebc4aa = $this->env->getExtension("native_profiler");
        $__internal_d6760388bb709fa473b182764887c0ca5c9f1bf83675a278578b77826cebc4aa->enter($__internal_d6760388bb709fa473b182764887c0ca5c9f1bf83675a278578b77826cebc4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 32
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_d6760388bb709fa473b182764887c0ca5c9f1bf83675a278578b77826cebc4aa->leave($__internal_d6760388bb709fa473b182764887c0ca5c9f1bf83675a278578b77826cebc4aa_prof);

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
