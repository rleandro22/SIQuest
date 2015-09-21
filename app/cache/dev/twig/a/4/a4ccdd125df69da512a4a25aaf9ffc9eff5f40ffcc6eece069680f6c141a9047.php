<?php

/* UciAdministradorBundle:Vista:index.html.twig */
class __TwigTemplate_a4ccdd125df69da512a4a25aaf9ffc9eff5f40ffcc6eece069680f6c141a9047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:Vista:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb1dd95461a6618995605efd4c25cc937253e1c5918cd479f0c3d1cd5abad745 = $this->env->getExtension("native_profiler");
        $__internal_fb1dd95461a6618995605efd4c25cc937253e1c5918cd479f0c3d1cd5abad745->enter($__internal_fb1dd95461a6618995605efd4c25cc937253e1c5918cd479f0c3d1cd5abad745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb1dd95461a6618995605efd4c25cc937253e1c5918cd479f0c3d1cd5abad745->leave($__internal_fb1dd95461a6618995605efd4c25cc937253e1c5918cd479f0c3d1cd5abad745_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_9c93be1d067a5e56202c200438c1dad06c34951f6192a4f1d39e668d0745ec22 = $this->env->getExtension("native_profiler");
        $__internal_9c93be1d067a5e56202c200438c1dad06c34951f6192a4f1d39e668d0745ec22->enter($__internal_9c93be1d067a5e56202c200438c1dad06c34951f6192a4f1d39e668d0745ec22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    \t<!-- Header -->
\t<header id=\"head\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<h1 class=\"lead\">UNIVERSIDAD PARA LA COOPERACIÓN INTERNACIONAL</h1>
\t\t\t\t<p class=\"tagline\">Sistema de generación de cuestionarios para la GSPM</p>
\t\t\t\t<p><a href=\"http://www.uci.ac.cr/\" class=\"btn btn-action btn-lg\" role=\"button\">Página UCI</a><a href=\"http://www.ucipfg.com/\" class=\"btn btn-default btn-lg\" role=\"button\">Campus virtual</a> </p>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- /Header -->
    ";
        
        $__internal_9c93be1d067a5e56202c200438c1dad06c34951f6192a4f1d39e668d0745ec22->leave($__internal_9c93be1d067a5e56202c200438c1dad06c34951f6192a4f1d39e668d0745ec22_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_266ca7ab604b2178c65a5903200662ec7e0715c7ff014ec57da48be55ddaedec = $this->env->getExtension("native_profiler");
        $__internal_266ca7ab604b2178c65a5903200662ec7e0715c7ff014ec57da48be55ddaedec->enter($__internal_266ca7ab604b2178c65a5903200662ec7e0715c7ff014ec57da48be55ddaedec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    
    




";
        
        $__internal_266ca7ab604b2178c65a5903200662ec7e0715c7ff014ec57da48be55ddaedec->leave($__internal_266ca7ab604b2178c65a5903200662ec7e0715c7ff014ec57da48be55ddaedec_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Vista:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  59 => 17,  41 => 4,  35 => 3,  11 => 1,);
    }
}
