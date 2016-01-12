<?php

/* UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig */
class __TwigTemplate_9bc5af3bff7e1aa82079d10bf96e76185a1234631303e698fea411e4044bfd8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciSeguridadBundle::base.html.twig", "UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciSeguridadBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf1124c50dfb94b2f2309c2b3c290fb501a55a4c18400102f333fa7e1655f954 = $this->env->getExtension("native_profiler");
        $__internal_bf1124c50dfb94b2f2309c2b3c290fb501a55a4c18400102f333fa7e1655f954->enter($__internal_bf1124c50dfb94b2f2309c2b3c290fb501a55a4c18400102f333fa7e1655f954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciSeguridadBundle:VistaIdentificacion:identificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf1124c50dfb94b2f2309c2b3c290fb501a55a4c18400102f333fa7e1655f954->leave($__internal_bf1124c50dfb94b2f2309c2b3c290fb501a55a4c18400102f333fa7e1655f954_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_725053c07efdd011504814b05ff70652e818d25c3311a2de62b55e2df7a7af55 = $this->env->getExtension("native_profiler");
        $__internal_725053c07efdd011504814b05ff70652e818d25c3311a2de62b55e2df7a7af55->enter($__internal_725053c07efdd011504814b05ff70652e818d25c3311a2de62b55e2df7a7af55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_725053c07efdd011504814b05ff70652e818d25c3311a2de62b55e2df7a7af55->leave($__internal_725053c07efdd011504814b05ff70652e818d25c3311a2de62b55e2df7a7af55_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e804bc75c486c8a5b3f1b9d91dca20cb1b14fc2b095f9abc1e1bd319bcf319b1 = $this->env->getExtension("native_profiler");
        $__internal_e804bc75c486c8a5b3f1b9d91dca20cb1b14fc2b095f9abc1e1bd319bcf319b1->enter($__internal_e804bc75c486c8a5b3f1b9d91dca20cb1b14fc2b095f9abc1e1bd319bcf319b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Inicio</a></li>
            <li class=\"active\">Identificarse</li>
        </ol>

        <div class=\"row\">

            <!-- Article main content -->
            <article class=\"col-xs-12 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Identificarse</h1>
                </header>

                <div class=\"col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <h3 class=\"thin text-center\">Ingrese a su cuenta</h3>
                            <p class=\"text-center text-muted\">Si no tiene cuenta solicite una a <a href=\"mailto:webmaster@uci.ac.cr\">webmaster@uci.ac.cr</a>. </p>
                            <hr>

                            ";
        // line 31
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 32
            echo "                                <div style=\"color:red\">";
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), array("Bad credentials." => "Usuario o clave incorrecta.")), "html", null, true);
            echo "</div>
                            ";
        }
        // line 34
        echo "
                            <form action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"POST\">
                                <input type=\"hidden\" name=\"_csrf_token\"
                                       value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                       >
                                <div class=\"top-margin\">
                                    <label>Usuario <span class=\"text-danger\">*</span></label>
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Usuario\" name=\"_username\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"top-margin\">
                                    <label>Contraseña <span class=\"text-danger\">*</span></label>
                                    <input type=\"password\" class=\"form-control\" placeholder=\"Contraseña\" name=\"_password\">
                                </div>

                                <hr>

                                <div class=\"row\">
                                    <div class=\"col-lg-8\">
                                        <!--<b><a href=\"\">¿Olvido su contraseña?</a></b>-->
                                    </div>
                                    <div class=\"col-lg-4 text-right\">
                                        <button class=\"btn btn-action\" type=\"submit\">Ingresar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </article>
            <!-- /Article -->

        </div>

    </div>\t<!-- /container -->



";
        
        $__internal_e804bc75c486c8a5b3f1b9d91dca20cb1b14fc2b095f9abc1e1bd319bcf319b1->leave($__internal_e804bc75c486c8a5b3f1b9d91dca20cb1b14fc2b095f9abc1e1bd319bcf319b1_prof);

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
        return array (  106 => 41,  99 => 37,  94 => 35,  91 => 34,  85 => 32,  83 => 31,  61 => 12,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
