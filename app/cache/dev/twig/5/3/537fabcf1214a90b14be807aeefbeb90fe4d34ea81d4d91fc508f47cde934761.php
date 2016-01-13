<?php

/* UciProfesorBundle::base.html.twig */
class __TwigTemplate_537fabcf1214a90b14be807aeefbeb90fe4d34ea81d4d91fc508f47cde934761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "UciProfesorBundle::base.html.twig", 2);
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
        $__internal_b6e23546cbb385cc3f190b1d32ead5c514fe628a1f7e4f3179ebc7aa39fe7e45 = $this->env->getExtension("native_profiler");
        $__internal_b6e23546cbb385cc3f190b1d32ead5c514fe628a1f7e4f3179ebc7aa39fe7e45->enter($__internal_b6e23546cbb385cc3f190b1d32ead5c514fe628a1f7e4f3179ebc7aa39fe7e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciProfesorBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6e23546cbb385cc3f190b1d32ead5c514fe628a1f7e4f3179ebc7aa39fe7e45->leave($__internal_b6e23546cbb385cc3f190b1d32ead5c514fe628a1f7e4f3179ebc7aa39fe7e45_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92b0b760b2306031bcbb68a113016f8a0391f5407ed89e92608af4052f910296 = $this->env->getExtension("native_profiler");
        $__internal_92b0b760b2306031bcbb68a113016f8a0391f5407ed89e92608af4052f910296->enter($__internal_92b0b760b2306031bcbb68a113016f8a0391f5407ed89e92608af4052f910296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/notificaciones.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/apagador.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" /> 
";
        
        $__internal_92b0b760b2306031bcbb68a113016f8a0391f5407ed89e92608af4052f910296->leave($__internal_92b0b760b2306031bcbb68a113016f8a0391f5407ed89e92608af4052f910296_prof);

    }

    // line 13
    public function block_mensajeLogueado($context, array $blocks = array())
    {
        $__internal_a6f0c85f3482bc5ad5ef780c745783b6dbf6a5ec3f59438ac0ce53e02cd8ae32 = $this->env->getExtension("native_profiler");
        $__internal_a6f0c85f3482bc5ad5ef780c745783b6dbf6a5ec3f59438ac0ce53e02cd8ae32->enter($__internal_a6f0c85f3482bc5ad5ef780c745783b6dbf6a5ec3f59438ac0ce53e02cd8ae32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mensajeLogueado"));

        echo " 
    Bienvenido(a) <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_profesor_edituser", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_a6f0c85f3482bc5ad5ef780c745783b6dbf6a5ec3f59438ac0ce53e02cd8ae32->leave($__internal_a6f0c85f3482bc5ad5ef780c745783b6dbf6a5ec3f59438ac0ce53e02cd8ae32_prof);

    }

    // line 17
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_650cd4d8479dfb6fab8e230dd59a81c50ae64af7476150ec9d57274631e98e8a = $this->env->getExtension("native_profiler");
        $__internal_650cd4d8479dfb6fab8e230dd59a81c50ae64af7476150ec9d57274631e98e8a->enter($__internal_650cd4d8479dfb6fab8e230dd59a81c50ae64af7476150ec9d57274631e98e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 18
        echo "    <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav pull-right\">
            <li class=\"active\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("uci_profesor_homepage");
        echo "\">Inicio</a></li>
            <li>    <a href=\"\" id=\"notificationLink\">Solicitudes</a>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mantenimiento<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("uci_profesor_indicecuestionario");
        echo "\">Mantenimiento Cuestionarios</a></li>
                </ul>
            </li>
            <li><a href=\"about.html\">Ayuda</a></li>
            <li>
                <a class=\"btn\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a></li>
        </ul>
    </div><!--/.nav-collapse -->
";
        
        $__internal_650cd4d8479dfb6fab8e230dd59a81c50ae64af7476150ec9d57274631e98e8a->leave($__internal_650cd4d8479dfb6fab8e230dd59a81c50ae64af7476150ec9d57274631e98e8a_prof);

    }

    // line 36
    public function block_navegacionfooter($context, array $blocks = array())
    {
        $__internal_1386461fa04e44cec37ac78cd8b626304b3ff1fc0fc245638391c8f35b139531 = $this->env->getExtension("native_profiler");
        $__internal_1386461fa04e44cec37ac78cd8b626304b3ff1fc0fc245638391c8f35b139531->enter($__internal_1386461fa04e44cec37ac78cd8b626304b3ff1fc0fc245638391c8f35b139531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navegacionfooter"));

        // line 37
        echo "    <p class=\"simplenav\">
        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a> | 
        <a href=\"\">Solicitudes</a> |
        <a href=\"\">Ayuda</a> |
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
    </p>
";
        
        $__internal_1386461fa04e44cec37ac78cd8b626304b3ff1fc0fc245638391c8f35b139531->leave($__internal_1386461fa04e44cec37ac78cd8b626304b3ff1fc0fc245638391c8f35b139531_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c196ca4723563c1b1068b455747a71bf5c65702efe0f06dab64fb3c22e71b100 = $this->env->getExtension("native_profiler");
        $__internal_c196ca4723563c1b1068b455747a71bf5c65702efe0f06dab64fb3c22e71b100->enter($__internal_c196ca4723563c1b1068b455747a71bf5c65702efe0f06dab64fb3c22e71b100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/nicEdit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/menuvert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.sort.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footable.filter.js?v=2-0-1"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_c196ca4723563c1b1068b455747a71bf5c65702efe0f06dab64fb3c22e71b100->leave($__internal_c196ca4723563c1b1068b455747a71bf5c65702efe0f06dab64fb3c22e71b100_prof);

    }

    public function getTemplateName()
    {
        return "UciProfesorBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 52,  177 => 51,  173 => 50,  169 => 49,  165 => 48,  160 => 47,  154 => 46,  144 => 41,  138 => 38,  135 => 37,  129 => 36,  118 => 31,  110 => 26,  101 => 20,  97 => 18,  91 => 17,  78 => 14,  70 => 13,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  44 => 6,  38 => 5,  11 => 2,);
    }
}
