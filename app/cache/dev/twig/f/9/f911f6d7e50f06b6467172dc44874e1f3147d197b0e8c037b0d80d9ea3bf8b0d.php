<?php

/* UciAdministradorBundle:VistaUsuario:editarUsuario.html.twig */
class __TwigTemplate_f911f6d7e50f06b6467172dc44874e1f3147d197b0e8c037b0d80d9ea3bf8b0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaUsuario:editarUsuario.html.twig", 1);
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
        $__internal_021992895840d887cf33c8458f3240d4803c6abfd406f43cc0c337529b8d3d8c = $this->env->getExtension("native_profiler");
        $__internal_021992895840d887cf33c8458f3240d4803c6abfd406f43cc0c337529b8d3d8c->enter($__internal_021992895840d887cf33c8458f3240d4803c6abfd406f43cc0c337529b8d3d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaUsuario:editarUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_021992895840d887cf33c8458f3240d4803c6abfd406f43cc0c337529b8d3d8c->leave($__internal_021992895840d887cf33c8458f3240d4803c6abfd406f43cc0c337529b8d3d8c_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c080f3b0ea6b74b7e8d5d50d354a3beba90bfdaf6aa2c35bf8ca68490b04eb5a = $this->env->getExtension("native_profiler");
        $__internal_c080f3b0ea6b74b7e8d5d50d354a3beba90bfdaf6aa2c35bf8ca68490b04eb5a->enter($__internal_c080f3b0ea6b74b7e8d5d50d354a3beba90bfdaf6aa2c35bf8ca68490b04eb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_c080f3b0ea6b74b7e8d5d50d354a3beba90bfdaf6aa2c35bf8ca68490b04eb5a->leave($__internal_c080f3b0ea6b74b7e8d5d50d354a3beba90bfdaf6aa2c35bf8ca68490b04eb5a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3551f69b38b4c315eb8ff3969f0be70d8ee682b028a74af8e15cc7ee6498f3f = $this->env->getExtension("native_profiler");
        $__internal_c3551f69b38b4c315eb8ff3969f0be70d8ee682b028a74af8e15cc7ee6498f3f->enter($__internal_c3551f69b38b4c315eb8ff3969f0be70d8ee682b028a74af8e15cc7ee6498f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- container -->
    <div class=\"container\">

        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("uci_administrador_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indiceuser");
        echo "\">Listado de usuarios</a></li>
            <li class=\"active\">Editar Usuario</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 19
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoUsuario.html.twig", "UciAdministradorBundle:VistaUsuario:editarUsuario.html.twig", 19)->display($context);
        // line 20
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
        // line 37
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 38
            echo "                                <div style=\"color:red\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
                            ";
        }
        // line 40
        echo "
                            <form action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8\">
                                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol", array()), 'label');
        echo "
                                        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol", array()), 'errors');
        echo "
                                        ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol", array()), 'widget', array("attr" => array("onChange" => "quitarcomboProfe(this.value)")));
        echo "
                                    </div>
                                </div>
                                <br>
                                <div class=\"row top-margin\">
                                    <div class=\"cols-xs-12 col-sm-10 col-md-8 col-lg-8 hidden\" id=\"filaPuededitar\">
                                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editatodas", array()), 'label');
        echo "
                                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "editatodas", array()), 'errors');
        echo "
                                        ";
        // line 97
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
        // line 109
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
        
        $__internal_c3551f69b38b4c315eb8ff3969f0be70d8ee682b028a74af8e15cc7ee6498f3f->leave($__internal_c3551f69b38b4c315eb8ff3969f0be70d8ee682b028a74af8e15cc7ee6498f3f_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df2a6bea59541730bdbd833127cdad4d964ac0aa7ccb9150208e40f62cc995d3 = $this->env->getExtension("native_profiler");
        $__internal_df2a6bea59541730bdbd833127cdad4d964ac0aa7ccb9150208e40f62cc995d3->enter($__internal_df2a6bea59541730bdbd833127cdad4d964ac0aa7ccb9150208e40f62cc995d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var rol=";
        // line 129
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
        
        $__internal_df2a6bea59541730bdbd833127cdad4d964ac0aa7ccb9150208e40f62cc995d3->leave($__internal_df2a6bea59541730bdbd833127cdad4d964ac0aa7ccb9150208e40f62cc995d3_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaUsuario:editarUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 129,  278 => 126,  272 => 125,  250 => 109,  235 => 97,  231 => 96,  227 => 95,  218 => 89,  214 => 88,  210 => 87,  201 => 81,  197 => 80,  193 => 79,  185 => 74,  181 => 73,  177 => 72,  169 => 67,  165 => 66,  161 => 65,  153 => 60,  149 => 59,  145 => 58,  137 => 53,  133 => 52,  129 => 51,  121 => 46,  117 => 45,  113 => 44,  107 => 41,  104 => 40,  98 => 38,  96 => 37,  77 => 20,  75 => 19,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
