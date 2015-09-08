<?php

/* ::base.html.twig */
class __TwigTemplate_c7d585662e2ded1834971d9b7c4221ab6e96fca97279d4e1e9d591d0e74bdd96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb04abf373373f0da7c20b335bf84999a70d455403e1fb3761bb5c4969f27f6c = $this->env->getExtension("native_profiler");
        $__internal_fb04abf373373f0da7c20b335bf84999a70d455403e1fb3761bb5c4969f27f6c->enter($__internal_fb04abf373373f0da7c20b335bf84999a70d455403e1fb3761bb5c4969f27f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fb04abf373373f0da7c20b335bf84999a70d455403e1fb3761bb5c4969f27f6c->leave($__internal_fb04abf373373f0da7c20b335bf84999a70d455403e1fb3761bb5c4969f27f6c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_440c8b2caf579328add6567ed1b8429b1e0c84b271d69fb1e2d1499893ba8443 = $this->env->getExtension("native_profiler");
        $__internal_440c8b2caf579328add6567ed1b8429b1e0c84b271d69fb1e2d1499893ba8443->enter($__internal_440c8b2caf579328add6567ed1b8429b1e0c84b271d69fb1e2d1499893ba8443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_440c8b2caf579328add6567ed1b8429b1e0c84b271d69fb1e2d1499893ba8443->leave($__internal_440c8b2caf579328add6567ed1b8429b1e0c84b271d69fb1e2d1499893ba8443_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dbf8d6a067d15b508f137de42a30a67fe607f93bc6ca89b967e9d6c81408865c = $this->env->getExtension("native_profiler");
        $__internal_dbf8d6a067d15b508f137de42a30a67fe607f93bc6ca89b967e9d6c81408865c->enter($__internal_dbf8d6a067d15b508f137de42a30a67fe607f93bc6ca89b967e9d6c81408865c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dbf8d6a067d15b508f137de42a30a67fe607f93bc6ca89b967e9d6c81408865c->leave($__internal_dbf8d6a067d15b508f137de42a30a67fe607f93bc6ca89b967e9d6c81408865c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_12337fac699b44a7c68cc920bd435501ce12ca2edb5daeae028144ac6596cc38 = $this->env->getExtension("native_profiler");
        $__internal_12337fac699b44a7c68cc920bd435501ce12ca2edb5daeae028144ac6596cc38->enter($__internal_12337fac699b44a7c68cc920bd435501ce12ca2edb5daeae028144ac6596cc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_12337fac699b44a7c68cc920bd435501ce12ca2edb5daeae028144ac6596cc38->leave($__internal_12337fac699b44a7c68cc920bd435501ce12ca2edb5daeae028144ac6596cc38_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f530319e2af0f3a70e025d142f81fd5d76ce8dbafd11d2e69c95d6e47719ca7 = $this->env->getExtension("native_profiler");
        $__internal_4f530319e2af0f3a70e025d142f81fd5d76ce8dbafd11d2e69c95d6e47719ca7->enter($__internal_4f530319e2af0f3a70e025d142f81fd5d76ce8dbafd11d2e69c95d6e47719ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4f530319e2af0f3a70e025d142f81fd5d76ce8dbafd11d2e69c95d6e47719ca7->leave($__internal_4f530319e2af0f3a70e025d142f81fd5d76ce8dbafd11d2e69c95d6e47719ca7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
