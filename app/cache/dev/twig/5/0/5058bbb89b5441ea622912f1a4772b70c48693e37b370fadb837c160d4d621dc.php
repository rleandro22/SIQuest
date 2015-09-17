<?php

/* UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig */
class __TwigTemplate_5058bbb89b5441ea622912f1a4772b70c48693e37b370fadb837c160d4d621dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciSeguridadBundle::base.html.twig", "UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciSeguridadBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11b509dad6962b0cd9fa6bf2eede849b28fe80a4f438b4861ce71013b995363d = $this->env->getExtension("native_profiler");
        $__internal_11b509dad6962b0cd9fa6bf2eede849b28fe80a4f438b4861ce71013b995363d->enter($__internal_11b509dad6962b0cd9fa6bf2eede849b28fe80a4f438b4861ce71013b995363d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11b509dad6962b0cd9fa6bf2eede849b28fe80a4f438b4861ce71013b995363d->leave($__internal_11b509dad6962b0cd9fa6bf2eede849b28fe80a4f438b4861ce71013b995363d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09868048b8c7cf2e2215d2d447baaa4a64f9edadf898193f7953c7b419e078e9 = $this->env->getExtension("native_profiler");
        $__internal_09868048b8c7cf2e2215d2d447baaa4a64f9edadf898193f7953c7b419e078e9->enter($__internal_09868048b8c7cf2e2215d2d447baaa4a64f9edadf898193f7953c7b419e078e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form class=\"form-horizontal\" action=\"";
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"POST\">
        <fieldset>
            <div class=\"input-group input-group-lg\">
                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user red\"></i></span>
                <input type=\"text\" class=\"form-control\" placeholder=\"Usuario\" name=\"_username\">
            </div>
            <div class=\"clearfix\"></div><br>

            <div class=\"input-group input-group-lg\">
                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock red\"></i></span>
                <input type=\"password\" class=\"form-control\" placeholder=\"Contraseña\" name=\"_password\">
            </div>
            <div class=\"clearfix\"></div>

            <div class=\"clearfix\"></div>

            <p class=\"center col-md-5\">
                <button type=\"submit\" class=\"btn btn-primary\">Entrar</button>
            </p>
        </fieldset>
    </form>
";
        
        $__internal_09868048b8c7cf2e2215d2d447baaa4a64f9edadf898193f7953c7b419e078e9->leave($__internal_09868048b8c7cf2e2215d2d447baaa4a64f9edadf898193f7953c7b419e078e9_prof);

    }

    public function getTemplateName()
    {
        return "UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
