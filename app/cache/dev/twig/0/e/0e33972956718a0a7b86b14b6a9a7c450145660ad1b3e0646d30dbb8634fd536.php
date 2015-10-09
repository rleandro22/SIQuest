<?php

/* UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig */
class __TwigTemplate_0e33972956718a0a7b86b14b6a9a7c450145660ad1b3e0646d30dbb8634fd536 extends Twig_Template
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
        $__internal_6ceec430eb981b55b0234aaa529cfad27e73b46699942beafb1c275dd5dce063 = $this->env->getExtension("native_profiler");
        $__internal_6ceec430eb981b55b0234aaa529cfad27e73b46699942beafb1c275dd5dce063->enter($__internal_6ceec430eb981b55b0234aaa529cfad27e73b46699942beafb1c275dd5dce063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UciAdministradorBundle:VistaCategoria:indiceCursos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ceec430eb981b55b0234aaa529cfad27e73b46699942beafb1c275dd5dce063->leave($__internal_6ceec430eb981b55b0234aaa529cfad27e73b46699942beafb1c275dd5dce063_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_49652be169e2dc70b7d421af4513d8ed5e26d0613c5107507e052371ebb0c769 = $this->env->getExtension("native_profiler");
        $__internal_49652be169e2dc70b7d421af4513d8ed5e26d0613c5107507e052371ebb0c769->enter($__internal_49652be169e2dc70b7d421af4513d8ed5e26d0613c5107507e052371ebb0c769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header id=\"head\" class=\"secondary\"></header>
    ";
        
        $__internal_49652be169e2dc70b7d421af4513d8ed5e26d0613c5107507e052371ebb0c769->leave($__internal_49652be169e2dc70b7d421af4513d8ed5e26d0613c5107507e052371ebb0c769_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f73b250337a32137f6fff5d3a8a3c200cf0bf38e2b370864a1be606be47d81ba = $this->env->getExtension("native_profiler");
        $__internal_f73b250337a32137f6fff5d3a8a3c200cf0bf38e2b370864a1be606be47d81ba->enter($__internal_f73b250337a32137f6fff5d3a8a3c200cf0bf38e2b370864a1be606be47d81ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["profesor"], "usuario", array()), "nombre", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["profesor"], "usuario", array()), "apellidos", array()), "html", null, true);
                        echo "<BR>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesor'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "                                        ";
                }
                // line 73
                echo "                                    </td>
                                    <td class=\"segunda-columna\">
                                        ";
                // line 75
                if ( !twig_test_empty($this->getAttribute($context["entity"], "asistenteAcademica", array()))) {
                    // line 76
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "asistenteAcademica", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["asistenteAcademica"]) {
                        // line 77
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asistenteAcademica"], "usuario", array()), "nombre", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asistenteAcademica"], "usuario", array()), "apellidos", array()), "html", null, true);
                        echo "<BR>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asistenteAcademica'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "                                            ";
                }
                echo "                        
                                    </td>
                                    <td><a data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_editcurso", array("id" => $this->getAttribute($context["entity"], "id", array()), "idGeneracion" => $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "id", array()))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
                                        <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uci_administrador_deletecurso", array("id" => $this->getAttribute($context["entity"], "id", array()), "idGeneracion" => $this->getAttribute((isset($context["generacion"]) ? $context["generacion"] : $this->getContext($context, "generacion")), "id", array()))), "html", null, true);
                echo "\" class=\"speedbump\"><span class=\"navigationSpace glyphicon glyphicon-remove\"></span></a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "
                        </tbody>
                    </table>
                    </br></br>
                ";
        }
        // line 91
        echo "                </br></br>
                <div class=\"row\">
                    <div class=\"col-lg-8 text-right\">
                        <button class=\"btn btn-action\" type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\" href=\"";
        // line 94
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
        
        $__internal_f73b250337a32137f6fff5d3a8a3c200cf0bf38e2b370864a1be606be47d81ba->leave($__internal_f73b250337a32137f6fff5d3a8a3c200cf0bf38e2b370864a1be606be47d81ba_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16a83c928c8abe93d7468fb4c494904d8cdab018058e64b98ad366d1e0d59cd5 = $this->env->getExtension("native_profiler");
        $__internal_16a83c928c8abe93d7468fb4c494904d8cdab018058e64b98ad366d1e0d59cd5->enter($__internal_16a83c928c8abe93d7468fb4c494904d8cdab018058e64b98ad366d1e0d59cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
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
                var sure = confirm(\"¿Esta seguro que desea realizar el borrado?\\n (Esta operación no es reversible)\");
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
        
        $__internal_16a83c928c8abe93d7468fb4c494904d8cdab018058e64b98ad366d1e0d59cd5->leave($__internal_16a83c928c8abe93d7468fb4c494904d8cdab018058e64b98ad366d1e0d59cd5_prof);

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
        return array (  257 => 111,  251 => 110,  229 => 94,  224 => 91,  217 => 86,  207 => 82,  203 => 81,  197 => 79,  186 => 77,  181 => 76,  179 => 75,  175 => 73,  172 => 72,  161 => 70,  156 => 69,  154 => 68,  146 => 63,  142 => 62,  134 => 57,  131 => 56,  127 => 55,  102 => 32,  96 => 30,  94 => 29,  87 => 25,  80 => 20,  78 => 19,  70 => 14,  66 => 13,  62 => 12,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}