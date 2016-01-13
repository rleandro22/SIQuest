<?php

/* UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig */
class __TwigTemplate_2d767a1aaaa48f25a9fc2bde9718144df759f0cd9e6463d0aa8ca121b5d3b938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UciAdministradorBundle::base.html.twig", "UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig", 1);
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
        $__internal_0b54ca69b0b105b8867fd0ff088b9251f967259773debcdd50902b85d4bd504e = $this->env->getExtension("native_profiler");
        $__internal_0b54ca69b0b105b8867fd0ff088b9251f967259773debcdd50902b85d4bd504e->enter($__internal_0b54ca69b0b105b8867fd0ff088b9251f967259773debcdd50902b85d4bd504e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b54ca69b0b105b8867fd0ff088b9251f967259773debcdd50902b85d4bd504e->leave($__internal_0b54ca69b0b105b8867fd0ff088b9251f967259773debcdd50902b85d4bd504e_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_9f8c2dd6f696f817f5e445987209989ba276ab0d781c25c77228234ae4e22d29 = $this->env->getExtension("native_profiler");
        $__internal_9f8c2dd6f696f817f5e445987209989ba276ab0d781c25c77228234ae4e22d29->enter($__internal_9f8c2dd6f696f817f5e445987209989ba276ab0d781c25c77228234ae4e22d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_9f8c2dd6f696f817f5e445987209989ba276ab0d781c25c77228234ae4e22d29->leave($__internal_9f8c2dd6f696f817f5e445987209989ba276ab0d781c25c77228234ae4e22d29_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a6575bdaa3fc60168d918c1e6e23209884df8bd85374138f2cb0615c7ffcfac = $this->env->getExtension("native_profiler");
        $__internal_8a6575bdaa3fc60168d918c1e6e23209884df8bd85374138f2cb0615c7ffcfac->enter($__internal_8a6575bdaa3fc60168d918c1e6e23209884df8bd85374138f2cb0615c7ffcfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("uci_administrador_indicecategoria");
        echo "\">Listado de Generaciones</a></li>
            <li class=\"active\">Listado de Cursos ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "html", null, true);
        echo "</li>
        </ol>
        <div class=\"row\">
            <!-- Sidebar -->
            <aside class=\"col-md-4 sidebar sidebar-left\">
                ";
        // line 19
        $this->loadTemplate("UciAdministradorBundle:Menus:mantenimientoCategoria.html.twig", "UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig", 19)->display($context);
        // line 20
        echo "            </aside>
            <!-- /Sidebar -->
            <!-- Article main content -->
            <article class=\"col-sm-8 maincontent\">
                <header class=\"page-header\">
                    <h1 class=\"page-title\">Lista de Cursos de la ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "generacion", array()), "html", null, true);
        echo "</h1>
                </header>
                <br>

                ";
        // line 29
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 30
            echo "                    <div style=\"color:red\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
                ";
        } else {
            // line 32
            echo "                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <input id=\"filter\" class=\"form-control\" type=\"text\" placeholder=\"Buscar\">
                        </div>
                    </div>
                    <br><br>
                    <table class=\"table demo table-bordered\" id=\"tabla\" data-filter=\"#filter\">
                        <thead>
                            <tr>
                                <th style=\"border-right:0;\" data-toggle=\"true\">
                                    Curso
                                </th>
                                <th style=\"border-left:0;\" data-sort-ignore=\"true\" data-hide=\"phone\"></th>
                                <th data-toggle=\"true\" data-hide=\"phone\">
                                    Profesores
                                </th>
                                <th data-toggle=\"true\" data-hide=\"phone\">
                                    Asistentes
                                </th>
                                <th data-sort-ignore=\"true\" data-hide=\"phone\" data-name=\"Acciones\"></th>
                            </tr>
                        </thead>
                        <tbody> 
                            ";
            // line 55
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 56
                echo "                                <tr>
                                    <td style=\"border-right:0;\" class=\"primera-columna\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombrecurso", array()), "html", null, true);
                echo " </td>
                                    <td style=\"border-left:0;\">
                                        <div class=\"dropdown\">
                                            <a data-toggle=\"dropdown\"><span class=\"navigationSpace glyphicon glyphicon-plus-sign\"></span></a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_matricularusuario", array("idGeneracion" => $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "id", array()), "idCurso" => $this->getAttribute($context["entity"], "id", array()), "tipoUsuario" => 2)), "html", null, true);
                echo "\">A. Académica</a></li>
                                                <li><a data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_matricularusuario", array("idGeneracion" => $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "id", array()), "idCurso" => $this->getAttribute($context["entity"], "id", array()), "tipoUsuario" => 1)), "html", null, true);
                echo "\">Profesor</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class=\"segunda-columna\">
                                        ";
                // line 68
                if ( !twig_test_empty($this->getAttribute($context["entity"], "profesor", array()))) {
                    // line 69
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "profesor", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["profesor"]) {
                        // line 70
                        echo "                                                <div class=\"dropdown\">
                                                    <a data-toggle=\"dropdown\"><div class=\"noIbar\">";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["profesor"], "usuario", array()), "nombre", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["profesor"], "usuario", array()), "apellidos", array()), "html", null, true);
                        echo "</div></a>
                                                    <ul class=\"dropdown-menu\">
                                                        <li><a class=\"speedbump\" href=\"";
                        // line 73
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_desmatricularusuario", array("idGeneracion" => $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "id", array()), "idCurso" => $this->getAttribute($context["entity"], "id", array()), "tipoUsuario" => 1, "idUsuario" => $this->getAttribute($context["profesor"], "id", array()))), "html", null, true);
                        echo "\">Desmatricular</a></li>
                                                        <li><a href=\"";
                        // line 74
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute($context["profesor"], "usuario", array()), "id", array()))), "html", null, true);
                        echo "\">Ver</a></li>
                                                    </ul>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesor'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "                                        ";
                }
                // line 79
                echo "                                    </td>
                                    <td class=\"segunda-columna\">
                                        ";
                // line 81
                if ( !twig_test_empty($this->getAttribute($context["entity"], "asistenteAcademica", array()))) {
                    // line 82
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "asistenteAcademica", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["asistenteAcademica"]) {
                        // line 83
                        echo "                                                <div class=\"dropdown\">
                                                    <a data-toggle=\"dropdown\"><div class=\"noIbar\">";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asistenteAcademica"], "usuario", array()), "nombre", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asistenteAcademica"], "usuario", array()), "apellidos", array()), "html", null, true);
                        echo "</div></a>
                                                    <ul class=\"dropdown-menu\">
                                                        <li><a class=\"speedbump\" href=\"";
                        // line 86
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_desmatricularusuario", array("idGeneracion" => $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "id", array()), "idCurso" => $this->getAttribute($context["entity"], "id", array()), "tipoUsuario" => 2, "idUsuario" => $this->getAttribute($context["asistenteAcademica"], "id", array()))), "html", null, true);
                        echo "\">Desmatricular</a></li>
                                                        <li><a href=\"";
                        // line 87
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_edituser", array("id" => $this->getAttribute($this->getAttribute($context["asistenteAcademica"], "usuario", array()), "id", array()))), "html", null, true);
                        echo "\">Ver</a></li>
                                                    </ul>
                                                </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asistenteAcademica'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                                        ";
                }
                echo "                        
                                    </td>
                                    <td><a data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcurso", array("id" => $this->getAttribute($context["entity"], "id", array()), "idGeneracion" => $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                        <a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deletecurso", array("id" => $this->getAttribute($context["entity"], "id", array()), "idGeneracion" => $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "id", array()))), "html", null, true);
                echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "
                        </tbody>
                    </table>
                    </br></br>
                ";
        }
        // line 103
        echo "                </br></br>
                <div class=\"row\">
                    <div class=\"col-lg-8 text-right\">
                        <button class=\"btn btn-action\" type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_addcurso", array("id" => 0, "idGeneracion" => $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "id", array()))), "html", null, true);
        echo "\">Agregar curso</button>
                    </div>
                </div>
                <!-- /Aquí acaba el contenido --> 

                <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">

                </div>

            </article>
            <!-- /Article -->
        </div>
    </div>\t<!-- /container -->

";
        
        $__internal_8a6575bdaa3fc60168d918c1e6e23209884df8bd85374138f2cb0615c7ffcfac->leave($__internal_8a6575bdaa3fc60168d918c1e6e23209884df8bd85374138f2cb0615c7ffcfac_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca9da8dd2a99ca428e00b518dbc498e980f5c31b344079f81cd4887423057074 = $this->env->getExtension("native_profiler");
        $__internal_ca9da8dd2a99ca428e00b518dbc498e980f5c31b344079f81cd4887423057074->enter($__internal_ca9da8dd2a99ca428e00b518dbc498e980f5c31b344079f81cd4887423057074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        document.ready = function () {

            \$('table').footable().on('click', '.row-delete', function (e) {
                e.preventDefault();
            }
            );

            \$('body').on('hidden.bs.modal', '.modal', function () {
                \$('.modal-content', this).empty();
                \$(this).removeData('bs.modal');
            });

            var handleSpeedBump = function (e) {
                e.preventDefault();
                var href = this.getAttribute(\"data-href\");
                var sure = confirm(\"¿Esta seguro que desea realizar el borrado?\\n (Esta operación borrara los cuestionarios de curso y no es reversible)\");
                if (!sure)
                    return;
                document.location = href;
            };
            \$(\"a.speedbump\")
                    .click(handleSpeedBump)
                    .bind(\"contextmenu\", handleSpeedBump)
                    .dblclick(handleSpeedBump)
                    .each(function () {
                        var href = this.href;
                        this.setAttribute(\"data-href\", href);
                        this.href = \"javascript:void('Navigate to \" + href.replace(\"'\", \"\") + \"')\";
                    });
        };
    </script>
";
        
        $__internal_ca9da8dd2a99ca428e00b518dbc498e980f5c31b344079f81cd4887423057074->leave($__internal_ca9da8dd2a99ca428e00b518dbc498e980f5c31b344079f81cd4887423057074_prof);

    }

    public function getTemplateName()
    {
        return "UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 123,  277 => 122,  255 => 106,  250 => 103,  243 => 98,  233 => 94,  229 => 93,  223 => 91,  213 => 87,  209 => 86,  202 => 84,  199 => 83,  194 => 82,  192 => 81,  188 => 79,  185 => 78,  175 => 74,  171 => 73,  164 => 71,  161 => 70,  156 => 69,  154 => 68,  146 => 63,  142 => 62,  134 => 57,  131 => 56,  127 => 55,  102 => 32,  96 => 30,  94 => 29,  87 => 25,  80 => 20,  78 => 19,  70 => 14,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
