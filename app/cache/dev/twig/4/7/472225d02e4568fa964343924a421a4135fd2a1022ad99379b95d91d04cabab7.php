<?php

/* UciAdministradorBundle:Vista:editarUsuario.html.twig */
class __TwigTemplate_472225d02e4568fa964343924a421a4135fd2a1022ad99379b95d91d04cabab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:Vista:editarUsuario.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UciAdministradorBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_891e71c54850882d52506e0ea95451fd8dce9f5b26497d6c30ba7d02a3e78166 = $this->env->getExtension("native_profiler");
        $__internal_891e71c54850882d52506e0ea95451fd8dce9f5b26497d6c30ba7d02a3e78166->enter($__internal_891e71c54850882d52506e0ea95451fd8dce9f5b26497d6c30ba7d02a3e78166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:Vista:editarUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_891e71c54850882d52506e0ea95451fd8dce9f5b26497d6c30ba7d02a3e78166->leave($__internal_891e71c54850882d52506e0ea95451fd8dce9f5b26497d6c30ba7d02a3e78166_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_0f9eb0ee18135899f8de3c7a8bf947bdc76e2972d9c41fb38e8c389d0d4731ba = $this->env->getExtension("native_profiler");
        $__internal_0f9eb0ee18135899f8de3c7a8bf947bdc76e2972d9c41fb38e8c389d0d4731ba->enter($__internal_0f9eb0ee18135899f8de3c7a8bf947bdc76e2972d9c41fb38e8c389d0d4731ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_0f9eb0ee18135899f8de3c7a8bf947bdc76e2972d9c41fb38e8c389d0d4731ba->leave($__internal_0f9eb0ee18135899f8de3c7a8bf947bdc76e2972d9c41fb38e8c389d0d4731ba_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5b550e86bdcd80ef0c906316cef134565d1796e0eed2df3e42766e710ff7049 = $this->env->getExtension("native_profiler");
        $__internal_b5b550e86bdcd80ef0c906316cef134565d1796e0eed2df3e42766e710ff7049->enter($__internal_b5b550e86bdcd80ef0c906316cef134565d1796e0eed2df3e42766e710ff7049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li class=\"active\">Editar Usuario</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 18
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig", "UciAdministradorBundle:Vista:editarUsuario.html.twig", 18)->display($context);
        // line 19
        echo "            </aside>
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
        echo "
                            <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
                                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
                                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'label');
        echo "
                                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'errors');
        echo "
                                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'label');
        echo "
                                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "
                                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'label');
        echo "
                                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'errors');
        echo "
                                        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                <br>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol", array()), 'label');
        echo "
                                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol", array()), 'errors');
        echo "
                                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol", array()), 'widget', array("attr" => array("onChange" => "quitarcomboProfe(this.value)")));
        echo "
                                    </div>
                                </div>
                                <br>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8 hidden\" id=\"filaPuededitar\">
                                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editatodas", array()), 'label');
        echo "
                                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editatodas", array()), 'errors');
        echo "
                                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editatodas", array()), 'widget');
        echo "
                                    </div>
                                </div>

                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-lg-8\">                     
                                    </div>
                                    <div class=\"col-lg-4 text-right\">
                                        <button class=\"btn btn-action\" type=\"submit\">Actualizar</button>
                                    </div>
                                </div>
                                ";
        // line 108
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
        
        $__internal_b5b550e86bdcd80ef0c906316cef134565d1796e0eed2df3e42766e710ff7049->leave($__internal_b5b550e86bdcd80ef0c906316cef134565d1796e0eed2df3e42766e710ff7049_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2206d6ea21739f9d94a1b4ca89e7bdb922a683dc7c903e716c353cf65a396210 = $this->env->getExtension("native_profiler");
        $__internal_2206d6ea21739f9d94a1b4ca89e7bdb922a683dc7c903e716c353cf65a396210->enter($__internal_2206d6ea21739f9d94a1b4ca89e7bdb922a683dc7c903e716c353cf65a396210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var rol=";
        // line 128
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rol", array()), "nombre", array()));
        echo ";
            if (rol == 'Profesor') {
                \$(\"#filaPuededitar\").removeClass('hidden');
            } else {
                \$(\"#filaPuededitar\").addClass('hidden');
            }
        });
        function quitarcomboProfe(valor) {
            if (valor == 3) {
                \$(\"#filaPuededitar\").removeClass('hidden');
            } else {
                \$(\"#filaPuededitar\").addClass('hidden');
            }
        }
        ;
    </script>
";
        
        $__internal_2206d6ea21739f9d94a1b4ca89e7bdb922a683dc7c903e716c353cf65a396210->leave($__internal_2206d6ea21739f9d94a1b4ca89e7bdb922a683dc7c903e716c353cf65a396210_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:Vista:editarUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 128,  274 => 125,  268 => 124,  246 => 108,  231 => 96,  227 => 95,  223 => 94,  214 => 88,  210 => 87,  206 => 86,  197 => 80,  193 => 79,  189 => 78,  181 => 73,  177 => 72,  173 => 71,  165 => 66,  161 => 65,  157 => 64,  149 => 59,  145 => 58,  141 => 57,  133 => 52,  129 => 51,  125 => 50,  117 => 45,  113 => 44,  109 => 43,  103 => 40,  100 => 39,  94 => 37,  92 => 36,  73 => 19,  71 => 18,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}