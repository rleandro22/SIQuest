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
            'mensajeLogueado' => array($this, 'block_mensajeLogueado'),
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f12d6324ffb9886f640d74fe9e516262d800cdadc74bee222cd6112b88122e45 = $this->env->getExtension("native_profiler");
        $__internal_f12d6324ffb9886f640d74fe9e516262d800cdadc74bee222cd6112b88122e45->enter($__internal_f12d6324ffb9886f640d74fe9e516262d800cdadc74bee222cd6112b88122e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f12d6324ffb9886f640d74fe9e516262d800cdadc74bee222cd6112b88122e45->leave($__internal_f12d6324ffb9886f640d74fe9e516262d800cdadc74bee222cd6112b88122e45_prof);

    }

    // line 5
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_a7330e0b588711de8422b74d75886c94c5650b3237c7d7a4e40d72612bbc1564 = $this->env->getExtension("native_profiler");
        $__internal_a7330e0b588711de8422b74d75886c94c5650b3237c7d7a4e40d72612bbc1564->enter($__internal_a7330e0b588711de8422b74d75886c94c5650b3237c7d7a4e40d72612bbc1564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        
        $__internal_a7330e0b588711de8422b74d75886c94c5650b3237c7d7a4e40d72612bbc1564->leave($__internal_a7330e0b588711de8422b74d75886c94c5650b3237c7d7a4e40d72612bbc1564_prof);

    }

    // line 9
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_3f4eaf9669e3dc01d8df264d39463d65e849b7d792ddd02d99d887766d9d6510 = $this->env->getExtension("native_profiler");
        $__internal_3f4eaf9669e3dc01d8df264d39463d65e849b7d792ddd02d99d887766d9d6510->enter($__internal_3f4eaf9669e3dc01d8df264d39463d65e849b7d792ddd02d99d887766d9d6510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 10
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
            <li>
                <a class=\"btn\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_3f4eaf9669e3dc01d8df264d39463d65e849b7d792ddd02d99d887766d9d6510->leave($__internal_3f4eaf9669e3dc01d8df264d39463d65e849b7d792ddd02d99d887766d9d6510_prof);

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
        return array (  72 => 22,  58 => 10,  52 => 9,  43 => 6,  35 => 5,  11 => 2,);
    }
}
