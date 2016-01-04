<?php

/* UciAsistenteAcademicaBundle:VistaUsuario:editarUsuario.html.twig */
class __TwigTemplate_b2d959fea3bb82ac984c3fd8df4f7d3bd4d4019a1676e852c1f9d394322235c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAsistenteAcademicaBundle::base.html.twig", "UciAsistenteAcademicaBundle:VistaUsuario:editarUsuario.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAsistenteAcademicaBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfb6c55be697856d9702c8632b2c22734d5a25a7974869712bd7287df0867ab3 = $this->env->getExtension("native_profiler");
        $__internal_dfb6c55be697856d9702c8632b2c22734d5a25a7974869712bd7287df0867ab3->enter($__internal_dfb6c55be697856d9702c8632b2c22734d5a25a7974869712bd7287df0867ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAsistenteAcademicaBundle:VistaUsuario:editarUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfb6c55be697856d9702c8632b2c22734d5a25a7974869712bd7287df0867ab3->leave($__internal_dfb6c55be697856d9702c8632b2c22734d5a25a7974869712bd7287df0867ab3_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_dfa810f0d7aba52779ead5ebd663f1b1547b1e4b9cab619282f1a3a9539240b8 = $this->env->getExtension("native_profiler");
        $__internal_dfa810f0d7aba52779ead5ebd663f1b1547b1e4b9cab619282f1a3a9539240b8->enter($__internal_dfa810f0d7aba52779ead5ebd663f1b1547b1e4b9cab619282f1a3a9539240b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_dfa810f0d7aba52779ead5ebd663f1b1547b1e4b9cab619282f1a3a9539240b8->leave($__internal_dfa810f0d7aba52779ead5ebd663f1b1547b1e4b9cab619282f1a3a9539240b8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_79164d67f03fde472b55e5042cf5b151fe1aa9545f05440550ae7b3dc61b7f44 = $this->env->getExtension("native_profiler");
        $__internal_79164d67f03fde472b55e5042cf5b151fe1aa9545f05440550ae7b3dc61b7f44->enter($__internal_79164d67f03fde472b55e5042cf5b151fe1aa9545f05440550ae7b3dc61b7f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_asistente_academica_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Editar Usuario</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">

            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Edición de usuario</h1>
                </header>
                <br>
                <!-- /Aquí va el contenido -->

                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <h3 class=\"thin text-center\">Editar usuario</h3>
                            <p class=\"text-center text-muted\">Todos los campos son requeridos. </p>
                            <hr>

                            ";
        // line 36
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 37
            echo "                                <div style=\"color:red\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
                            ";
        }
        // line 39
        echo "                            <div id=\"alert_placeholder\"> </div>

                            <form action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_asistente_academica_edituser", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
                                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
                                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'label');
        echo "
                                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'errors');
        echo "
                                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'label');
        echo "
                                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "
                                        ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'label');
        echo "
                                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'errors');
        echo "
                                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <br>

                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-lg-8\">                     
                                    </div>
                                    <div class=\"col-lg-4 text-right\">
                                        <button class=\"btn btn-action\" type=\"submit\">Actualizar</button>
                                    </div>
                                </div>
                                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            </form>
                        </div>
                    </div>

                </div>


                <!-- /Aquí acaba el contenido --> 
            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_79164d67f03fde472b55e5042cf5b151fe1aa9545f05440550ae7b3dc61b7f44->leave($__internal_79164d67f03fde472b55e5042cf5b151fe1aa9545f05440550ae7b3dc61b7f44_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7076ac508b23e73e0392bed14a2642f7d235ad5399d2f69775f105627e555f9d = $this->env->getExtension("native_profiler");
        $__internal_7076ac508b23e73e0392bed14a2642f7d235ad5399d2f69775f105627e555f9d->enter($__internal_7076ac508b23e73e0392bed14a2642f7d235ad5399d2f69775f105627e555f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
";
        
        $__internal_7076ac508b23e73e0392bed14a2642f7d235ad5399d2f69775f105627e555f9d->leave($__internal_7076ac508b23e73e0392bed14a2642f7d235ad5399d2f69775f105627e555f9d_prof);

    }

    public function getTemplateName()
    {
        return "UciAsistenteAcademicaBundle:VistaUsuario:editarUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 111,  233 => 110,  211 => 94,  195 => 81,  191 => 80,  187 => 79,  179 => 74,  175 => 73,  171 => 72,  163 => 67,  159 => 66,  155 => 65,  147 => 60,  143 => 59,  139 => 58,  131 => 53,  127 => 52,  123 => 51,  115 => 46,  111 => 45,  107 => 44,  101 => 41,  97 => 39,  91 => 37,  89 => 36,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
